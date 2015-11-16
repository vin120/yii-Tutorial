<?php 

class UserController extends Controller
{
	/**
	*		用户登录
	*/

	function actionLogin()
	{
		//$this->renderPartial('login');
		$this->render('login');
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
			//$_POST['User']['password'] = md5($_POST['User']['password']);
			
			//上面的foreach，在yii框架里有优化，使用模型属性attributes来进行优化
			//attributes属性已经把foreach集成好了，我们可以直接使用
			$user_model -> attributes = $_POST['User'];
			
			//实现信息存储
			if($user_model -> save())
			{
				$this->redirect('/index.php');
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
	
	
}

?>
