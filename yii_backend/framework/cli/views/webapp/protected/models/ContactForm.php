�}� 
 �:  ;@�a���փqw
�� �: F^�֭�~ߠ#��ʯ��'�33Q���dYfc��g�J&#F"#�����e}E���:ғ]5��ɭ�חot�2�ں�[�|E�tM��Ĵ�� ��:�ޞ�>eS�4��d A�7B�p2'���)���xG!��'�gG�s��;XT�bI�����s6*���3�B�MP�G�-��[zV���@��
��aF":m��kfA+�ÃƼ�|��Cw�'����k��B>S��t�4M[�$B>��Y�#,��Iu����Z�O��H��&�`4�'�๒��fV٭��
�ؕ�a+����;�A�."h�p	�����A�SR$3�n�!ʋi������=sh��y�h���Ԑ�!�ZR�>G�X���O͏!ኌ��E{��P(�ʰ?@�,C� G Q_(�i��f�ay����&&[����vKCƱ-pk:� �r+�!��::�)9�a�7@������9�>il address
			array('email', 'email'),
			// verifyCode needs to be entered correctly
			array('verifyCode', 'captcha', 'allowEmpty'=>!CCaptcha::checkRequirements()),
		);
	}

	/**
	 * Declares customized attribute labels.
	 * If not declared here, an attribute would have a label that is
	 * the same as its name with the first letter in upper case.
	 */
	public function attributeLabels()
	{
		return array(
			'verifyCode'=>'Verification Code',
		);
	}
}