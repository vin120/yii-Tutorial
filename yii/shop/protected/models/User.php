<?php
	/*
	*用户模型model
	*/

	class User extends  CActiveRecord
	{
		public static function model($className = __CLASS__)
		{
			return parent::model($className);
		}

		public function tableName()
		{
			return "{{user}}";

		}

		public function attributeLabels()
		{
			return array(
				'username' => '用户名',
				'password' => '密码',
				'user_sex' => '性别',
				'user_qq' => 'QQ',
				'user_hobby' => '兴趣',
				'user_xueli' => '学历',
				'user_introduce' => '简介',
				'user_email' => '邮箱',
				'user_tel' => '手机号码',
			);
		}

	}