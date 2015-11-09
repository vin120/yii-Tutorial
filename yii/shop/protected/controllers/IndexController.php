<?php
//商城首页控制器


class IndexController extends Controller
{
	function actionIndex()
	{
		//$this->renderPartial('index');	
		$this->render('index');
	}
}