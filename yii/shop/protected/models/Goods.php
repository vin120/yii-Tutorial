<?php


//模型里面有两个方法不能缺少的 ，
//model()  创建模型的对象,是静态方法 
//tableName()	返回数据表的名字

class Goods extends  CActiveRecord
{
	public static function model($className = __CLASS__)
	{
		return parent::model($className);
	}
	
	public function tableName()
	{
		return '{{goods}}';
	}

	
	//对应的标签名字
	function attributeLabels()
	{
		return array(
			"goods_name" => "商品名称",
			"goods_weight" => "商品重量",
			"goods_price" => "商品价格",
			"goods_number" => "商品数量",
			"goods_category_id" => "商品分类",
			"goods_brand_id" => "商品品牌",
			"goods_introduce" => "商品介绍",
		
		);
	}
	
	
}