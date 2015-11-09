<?php

class GoodsController extends Controller
{
	//商品展示
	function actionShow()
	{
		//通过模型model实现数据表信息查询
		//产生模型model对象
		$goods_model =Goods::model(); 
		
		//通过model模型对象调用相关方法查询数据
		//$goods_info = $goods_model->find();	//每次只查询一条信息
		//echo $goods_info->goods_name."</br>";
		//echo $goods_info->goods_id."</br>";
		//var_dump($goods_info);
		
		//获得全部商品信息findAll()
		$goods_infos = $goods_model->findAll();
		//foreach ($goods_info as $v)
		//{
			//$v 就是遍历出来的具体对象
			//echo $v->goods_name." ------".$v->goods_price."<br/>";
		//}
		
		//通过具体sql语句获得商品信息findAllBySql()
		//$sql = "select goods_id, goods_name,goods_price,goods_create_time from {{goods}} limit 10";	
		//$goods_infos = $goods_model->findAllBySql($sql);
		
		
		//把获得的数据信息传递到视图模板里面
		$this->renderPartial('show',array('goods_infos'=>$goods_infos));
	}
	
	function actionAdd()
	{
		
		$goods_model = new Goods();
//		echo "<pre>";
//		print_r($_POST);
//		echo "</pre>";
		//判断表单是否有提交过来的数据
		if(isset($_POST['Goods']))
		{
			//把表单提交过来的信息赋予给$goods_model模型
//			$goods_model -> goods_name = $_POST['Goods']['goods_name'];
//			$goods_model -> goods_price = $_POST['Goods']['goods_price'];
//			$goods_model -> goods_number = $_POST['Goods']['goods_number'];
//			$goods_model -> goods_category_id = $_POST['Goods']['goods_category_id'];
//			$goods_model -> goods_brand_id = $_POST['Goods']['goods_brand_id'];
//			$goods_model -> goods_introduce = $_POST['Goods']['goods_introduce'];
//			$goods_model -> goods_weight = $_POST['Goods']['goods_weight'];
//			$goods_model -> goods_create_time =time();
//			
			//代码优化
			foreach ($_POST['Goods'] as $_k => $_v)
			{
				$goods_model -> $_k = $_v;
			}
			$goods_model -> goods_create_time =time();
			
			
			//调用save()实现数据添加
			if($goods_model -> save())
			{
				//信息添加成功后 ，重定向到商品列表页面
				 $this->redirect('index.php?r=backend/goods/show');
			}
		}
		
		
		$this->renderPartial('add',array("goods_model"=>$goods_model));
	}
	
	
	function actionUpdate($id)
	{
		
		//具体要修改哪个商品，需要将其查询出来
		//我们需要知道哪个商品被修改，把商品的id信息通过get方式传递过来
		//接收被修改商品id的信息
		
		
		//根据$id查询被修改商品信息
		$goods_model = Goods::model();	//除了添加数据(new Goods)我们都使用Goods::model()来实例化模型对象
		$goods_info = $goods_model->findByPk($id);
		
		//创建数据模型model对象
		// new Goods() ,调用save方法的时候，给我们执行insert语句
		//Goods::model() ，调用save方法的时候，会执行update语句
		//修改逻辑和添加逻辑基本一致，创建表单，收集数据，赋予模型，调用save方法
		if(isset($_POST['Goods']))
		{
			foreach ($_POST['Goods'] as $_k => $_v)
			{
				$goods_info -> $_k = $_v;
			}	

			if($goods_info -> save())
			{
				$this->redirect('./index.php?r=backend/goods/show');
			}
		}
		
		
		//$goods_info是我们查询出来的被修改的商品的信息，同时也是数据模型对象
		//把goods_info传递到视图模板里边
		$this->renderPartial('update',array('goods_model'=>$goods_info));
	}
	
	
	/**
	 * 删除方法
	 */
	
	function actionDel($id)
	{
		//根据$id将被删除商品的数据模型获得到，通过该被删除的对象调用delete方法
		$goods_model = Goods::model();
		$goods_info = $goods_model -> findByPk($id);
		
		if($goods_info->delete())
		{
			$this->redirect('index.php?r=backend/goods/show');
		}
		
	}
	
	/*
		通过模型实现数据添加
		测试方法
	*/
	function actionJia()
	{
		//1创建模型对象
		$goods_model = new Goods();
		
		//2为对象丰富属性 goods_name,goods_id, goods_price
		$goods_model -> goods_name = "Apple 5s";
		$goods_model -> goods_price = 5999;
		$goods_model -> goods_weight = 102;
		
		//3.调用save()方法实现数据添加
		if($goods_model -> save())
		{
			echo "success";
		} 
		else
		{
			echo "fail";
		}
	}
	
	function ceshi ()
	{
		$model = new Goods();
		
		
		//$info = $model -> findAllByPk(10);
		//$info = $model -> findAllByPk(1,4,9);

		//findAll($condition ,$param);
		//$condition就是sql语句的where条件
		//$infos = $model -> findAll("goods_name like'诺%' and goods_price > 500");
		
		//为了避免sql注入，使用占位符填充
		//$infos = $model -> findAll("goods_name like :name and goods_price > :price",array(":name"=>	'诺%',":price"=>500) );
		//$model -> goods_name = 'sanming';
		//$model -> save();

		//有时候我们查询信息
		//想要查询的"字段" select
		//想要查询的"条件" condition
		//想要查询的"排序" order
		//想要查询的"分组" group
		//想要查询的"限制" limit
		//想要查询的"偏移量" offset
		//$infos = $model -> findAll(array(
		//	'select'=>'goods_name,goods_price',
		//	'condition'=>"goods_name like '诺%'", 
		//	'order'=>'goods_price desc',
		//	'limit'=>3,
		//	'offset'=>2,
		//));	
		
		
		//通过criteria实现信息的查询
		$criteria = new CDbCriteria();
		$criteria -> select = 'goods_name,goods_price';
		$criteria -> condition = "goods_name like '诺%'";
		$criteria -> limit = 3;
		$criteria -> order = 'goods_price desc';
		$infos = $model-> findAll($criteria);
	}
	
}