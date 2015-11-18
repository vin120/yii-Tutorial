<?php 

class UserController extends Controller
{

   /*
	*     验证码生成
	*	   以下代码的意思是：在当前控制器里，以方法的形式访问其他类
	*	   我们访问 ./inedx.php?r=user/captcha就会访问到以下方法的CCaptchaAction
	*		会走CCaptchaAction类的run()方法
	*
	*      谁会调用 user/captcha这个路由?
	*	    试图表单会间接调用($this->widget('CCaptcha'))
	*/
	function actions()
	{
		return array(
			'captcha'=>array(
					'class'=>'system.web.widgets.captcha.CCaptchaAction',
					'width'=>120,
					'height'=>50,
				),


			);
	}


   /*
	*		用户登录
	*/

	function actionLogin()
	{
		//创建登录模型对象
		$user_login = new LoginForm;

		if(isset($_POST['LoginForm']))
		{
			//收集表单信息
			$user_login ->attributes =$_POST['LoginForm'];

			//校验数据,走的是rules方法
			//不仅校验用户名和密码是否填写，还要校验真实性（在模型里自定义方法校验真实性）
			//用户信息进行session信息存储，调用模型的一个方法login()，就可以进行session存储
			if($user_login->validate() && $user_login->login())
			{
				$this->redirect('./index.php');
			}

		}

		$this->render('login',array('user_login'=>$user_login));
	}

   /*
	*	实现用户注册功能
	*	1.展现注册表单
	*	2.收集数据，校验数据，存储数据
	*/
	function actionRegister()
	{
		//实例化数据模型对象user
		$user_model = new User();

		//定义学历
		$sex[1] = '男';
		$sex[2] = '女';
		$sex[3] = '保密';

		//定义学历
		$xueli[1] = "-请选择-";
		$xueli[2] = "小学";
 		$xueli[3] = "初中";
 		$xueli[4] = "高中";
 		$xueli[5] = "大学";

 		$hobby[1] = "篮球";
 		$hobby[2] = "足球";
 		$hobby[3] = "排球";
 		$hobby[4] = "棒球";


		//如果用户有注册表单
		if(isset($_POST['User']))
		{
			//给模型手机表单信息
//			foreach($_POST['User'] as $_k => $_v)
//			{
//				$user_model -> $_k = $_v;
//			}

			//收集转化爱好的信息implode
			if(is_array($_POST['User']['user_hobby']))
				$_POST['User']['user_hobby'] = implode(',',$_POST['User']['user_hobby']);
			
				
			//密码md5加密
			$_POST['User']['password'] = md5($_POST['User']['password']);
			$_POST['User']['password2'] = md5($_POST['User']['password2']);

			//上面的foreach，在yii框架里有优化，使用模型属性attributes来进行优化
			//attributes属性已经把foreach集成好了，我们可以直接使用
			$user_model -> attributes = $_POST['User'];
			
			//实现信息存储
			if($user_model -> save())
			{
				$this->redirect('./index.php');
			}
		}

		$this->render('register',array(
					"user_model" => $user_model,
					'sex' => $sex,
					'xueli' => $xueli,
					'hobby'=>$hobby
				));
	//	$this->renderPartial('register');
	}


   /*
	* 用户退出系统	
	*/
	function actionLogout()
	{
		//删除session信息
		Yii::app()->session->clear();  //删除内存里的session变量信息
		Yii::app()->session->destroy(); //删除服务器里的session文件
		$this->redirect('./index.php');
	}

}

?>
