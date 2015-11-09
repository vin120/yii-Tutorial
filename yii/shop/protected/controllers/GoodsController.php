<?php

class GoodsController extends  Controller
{
	function actionCategory()
	{
		//$this->renderPartial('category');
		$this->render('category');
	}
	
	
	function actionDetail()
	{
		//$this->renderPartial('detail');
		$this->render('detail');
	}
}