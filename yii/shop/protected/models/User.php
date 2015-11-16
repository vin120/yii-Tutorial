<?php
	/*
	*用户模型model
	*/

	class User extends  CActiveRecord
	{
		
		//增加一个password2
		public $password2;
		
		//获得数据模型方法
		public static function model($className = __CLASS__)
		{
			return parent::model($className);
		}
	
		//定义数据表名字
		public function tableName()
		{
			return "{{user}}";

		}

		//设置标签名字与数据库对应字段
		public function attributeLabels()
		{
			return array(
				'username' => '用户名',
				'password' => '密码',
				'password2'=> '确认密码',
				'user_sex' => '性别',
				'user_qq' => 'QQ',
				'user_hobby' => '兴趣',
				'user_xueli' => '学历',
				'user_introduce' => '简介',
				'user_email' => '邮箱',
				'user_tel' => '手机号码',
			);
		}
		//实现用户注册表单验证
		//在模型里边设置一个方法，定义具体表单域验证规则
		public function rules()
		{
			return array(
				array('username','required','message'=>'用户名必填'),
				//用户名不能重复（与数据库比较）
				array('username','unique','message'=>'用户名已经占用'),
				
				array('password','required','message'=>'密码必填'),
				
				//验证确认密码
				array('password2','compare','compareAttribute'=>'password','message'=>'两次密码必须一致'),
				
				//邮箱默认不能为空
				array('user_email','email','allowEmpty'=>false,'message'=>'邮箱格式不正确'),
				
				//验证QQ号码（都是数字组成,5-12位,开始为非0信息，使用正则表达式验证）
				array('user_qq','match','pattern'=>'/^[1-9]\d{4,11}$/','message'=>'qq格式不正确'),
				
				//验证手机号码(都是数字，13开始，一共11位)
				array('user_tel','match','pattern'=>'/^13\d{9}$/','message'=>'手机号码格式不正确'),
				
				//验证学历信息(信息在2,3,4,5之间则表示有选择，否则没有),1.正则 ，2.范围限制
				array('user_xueli','in','range'=>array(2,3,4,5),'message'=>'学历必须选择'),
				
				//验证爱好信息（必须选择两项）(自定义方法对爱好进行验证)
				array('user_hobby','check_hobby'),
				
				//为没有具体验证规则的属性，设置安全的验证规则，否则attributes不给接收信息
				array('user_sex,user_introduce','safe'),
				
			);
		}
		
		//定义一个方法check_hobby对爱好进行验证
		function check_hobby()
		{
			//在这个方法里我们可以获得模型的相关信息
			//$this->属性名 //调用模型对象的相关属性信息
			//$this 就是我们在控制器controller里面的实例化好的模型对象
			$len = strlen($this->user_hobby);
			if($len < 3)
			{
				$this->addError('user_hobby','爱好必须选择两项或以上');
			}
			
		}
	
	}
