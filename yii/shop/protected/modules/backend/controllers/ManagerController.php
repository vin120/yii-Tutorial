<?php

/*
 *    后台管理员登录控制器
 *
 */

class ManagerController extends Controller
{
	function actionLogin()
	{
		$login_model = new LoginForm();


		if(isset($_POST['LoginForm']))
		{
			$login_model->attributes = $_POST['LoginForm'];

			//用户名和密码判断validate,持久化session信息login
			if($login_model->validate() && $login_model->login())
			{
				$this->redirect('./index.php?r=backend/index/index');
			}

		}


		$this->renderPartial('login',array('login_model'=>$login_model));
	}

	/*
	 * 退出系统
	 */
	function actionLogout()
	{
		//删除session变量
		Yii::app()->session->clear();

		//删除服务器session信息
		Yii::app()->session->destroy();

		//页面重定向到登录页面
		$this->redirect('./index.php?r=backend/manager/login');
	}


}