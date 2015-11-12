<?php 

class UserController extends Controller
{
	function actionLogin()
	{
		//$this->renderPartial('login');
		$this->render('login');
	}
	
	function actionRegister()
	{
		//实例化数据模型对象user
		$user_model = User::model();

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