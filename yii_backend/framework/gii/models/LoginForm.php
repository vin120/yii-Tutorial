�}�� 
 �<  Er�r�ò�qw
��"�:8�^Rױq��~8wk��6dSR�bႍ0����1�q�l-H��w�B_9��8&�e�xa�v��6�g�)Ǣ�J��#n����N	<�bĊQ�������Cm�&o������mK�}�	��a�3����?:�J�3�>H��d��+��]��cc���=�����ĵ�,�θTf�~�x�􈃺ia�A6�	(�p�m�2�<��z�`Vs�K�*��|��͘�,�Rp��x��� �K���$��a�� ;$�ϳ���Q�P���~�&;�]�*Z��oB�����	t��~�'�๒��fV٭��
�ؕ�a+����;�A�."h�p	�����A�SR$3�n�!ʋi������=sh��y�h���Ԑ�!�ZR�>G�X���O͏!ኌ��E{��P(�ʰ?@�,C� G Q_(�i��f�ay����&&[����vKCƱ-pk:� �r+�!��::�)9�a�7@������9�>te())
			$this->addError('password','Incorrect password.');
	}

	/**
	 * Logs in the user using the given password in the model.
	 * @return boolean whether login is successful
	 */
	public function login()
	{
		if($this->_identity===null)
		{
			$this->_identity=new UserIdentity('yiier',$this->password);
			$this->_identity->authenticate();
		}
		if($this->_identity->errorCode===UserIdentity::ERROR_NONE)
		{
			Yii::app()->user->login($this->_identity);
			return true;
		}
		else
			return false;
	}
}
