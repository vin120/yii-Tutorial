�}�� 
 �:  ��{��Z��qw
��$�:���ֱ�aA�e��� �w'�#��B1jq-g8�Z���[�������.�8YT��Z�B�uS8˘ѝ�唡�_��G+d���s�$db���A4�葉��nפ?�#6�/��fG��ޛi_�vy���}i<��߈"��ÄR0T�X*,��+�;�������	�Q�A�ENE��(ኋ_�'�$�k�_�C��e�b��b/K��3ZET�9;��oj��#���g&��V�v-Z빬���^��Y��6�,�F=�`v�/đp�_Z��"S�6F-���'�s��๒��fV٭��
�ؕ�a+����;�A�."h�p	�����A�SR$3�n�!ʋi������=sh��y�h���Ԑ�!�ZR�>G�X���O͏!ኌ��E{��P(�ʰ?@�,C� G Q_(�i��f�ay����&&[����vKCƱ-pk:� �r+�!��::�)9�a�7@������9�>hentication succeeds.
	 */
	public function authenticate()
	{
		$users=array(
			// username => password
			'demo'=>'demo',
			'admin'=>'admin',
		);
		if(!isset($users[$this->username]))
			$this->errorCode=self::ERROR_USERNAME_INVALID;
		else if($users[$this->username]!==$this->password)
			$this->errorCode=self::ERROR_PASSWORD_INVALID;
		else
			$this->errorCode=self::ERROR_NONE;
		return !$this->errorCode;
	}
}