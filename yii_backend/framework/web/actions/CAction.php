�}�� 
 A  ��;a��P��qw
��#�:0�^Rױ�B��j��K�I��Ѷ�]`�y��'�w쏰|*����6e�o�`*�0������*^�����g�(�N�7xe�ؾ��
�dd���|{����Q����!�A>��-�-�� �7�ↄ�麵=���v黪��rNн�� (�u�����R�ar�y�ҵ!M�m�Ȑ��/�-vhL�@���;_^/
<[����F	dN�@Y���+�N�	�hؘճ��d�/�*�kJI�q1�O��!KA���	ǘ#�S�k5��<d�R\��D����'�๒��fV٭��
�ؕ�a+����;�A�."h�p	�����A�SR$3�n�!ʋi������=sh��y�h���Ԑ�!�ZR�>G�X���O͏!ኌ��E{��P(�ʰ?@�,C� G Q_(�i��f�ay����&&[����vKCƱ-pk:� �r+�!��::�)9�a�7@������9�>l/���ppR�\x0��"��g��+L�5:���d��;�=��u�d�[,��d{�,h�y�~o����C�!<<�~�����B�.|9V�|;�J�0g  iUi���y�r|-
��q2<$1�M�p���&�h7K�-W�:f�c1�l��,#����j�·
�f��<����t���}�P8��jK�HD�o�Ͻ���� ,W$�<N�)o�.����bFzy|02�;���I�%,1���t
|�:{Y�yӝ� ����q' 񌏖�,q�^��.�Jwl��H	&�޳��0u�/��zotHO��Q���\���MHd1,�śfJ�)~Qf�Tнs�):E9��We4x]18��ț�)� �"Z}����P��.2�1���S��4Wr��ݓ�K8&�a|�<#}/��5;����~��BrE'v@�쌈_��U����L���?Θ��*���Ҋҩ{�6K�]�u�0�/Q(���3#�W���$��}�ublic function __construct($controller,$id)
	{
		$this->_controller=$controller;
		$this->_id=$id;
	}

	/**
	 * @return CController the controller who owns this action.
	 */
	public function getController()
	{
		return $this->_controller;
	}

	/**
	 * @return string id of this action
	 */
	public function getId()
	{
		return $this->_id;
	}
}
