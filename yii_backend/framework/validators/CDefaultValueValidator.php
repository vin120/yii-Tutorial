�}� 
 �;  �.	�:w�qw
���:�G�	�֭�^=��#;y¤�E�"�����+�\g�q�?O�I�wW.�n|��۾�D��͎��˛���M05���ߣ�m�1f��%_�@YGĹ�_)�YQ��V' �p�rnt�;��Tq�2>&�� �5��xK��DI۸�k(#Ju�0.�`���j�r��%4X�2��C r3�q�	�å�������u)O�V5�����g�%�P������*����A��)�����W9�jZt�,�,i�(�*�S{�����)䠔�q}�MG��8��`4�'�๒��fV٭��
�ؕ�a+����;�A�."h�p	�����A�SR$3�n�!ʋi������=sh��y�h���Ԑ�!�ZR�>G�X���O͏!ኌ��E{��P(�ʰ?@�,C� G Q_(�i��f�ay����&&[����vKCƱ-pk:� �r+�!��::�)9�a�7@������9�>l�0�[{���GO���EX��� ��~}���IF�/��"�,��Ȕ�â�-�,VV5(	OW�L�>���(������Sw}�+d1E�U�H��!�Ck�0(y#sgM)�J����q�".�������v�`�����m��:�%=�eɰ���`ߙ�?N����ta��s�'� c*�����$N~�Ig�?�1���X����[,�h��*�택Ce2�~�?�[x�[�x���$�zE+�$�~Wt���<9_1���a��t�7�S��a����A�T���#��� �^�����pQf���ES*7�����Xi�vE��=K~d�r�.j֘��
���rZ/�x�(�	CfG���5p�
�==.j�hbP����1{�3�nZ�V�W��\R��NY���>��m�"���x6Ͱ�<���e�o��k�ҭ�O�f�e�$l�\x�Ze7ay����o��j�U��]ieR��2�c��yI
	 */
	public $setOnEmpty=true;

	/**
	 * Validates the attribute of the object.
	 * @param CModel $object the object being validated
	 * @param string $attribute the attribute being validated
	 */
	protected function validateAttribute($object,$attribute)
	{
		if(!$this->setOnEmpty)
			$object->$attribute=$this->value;
		else
		{
			$value=$object->$attribute;
			if($value===null || $value==='')
				$object->$attribute=$this->value;
		}
	}
}

