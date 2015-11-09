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
		
		$this->render('register');
	//	$this->renderPartial('register');
	}
	
	
}

?>