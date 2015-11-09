<?php



class IndexController extends Controller
{
	//生成头部
	function actionHead()
	{
		$this->renderPartial('head');
	}
	
	function actionLeft()
	{
		$this->renderPartial('left');
	}
	
	function actionRight()
	{
		$this->renderPartial('right');
	}
	
	function actionIndex()
	{
		$this->renderPartial('index');
	}
	
}