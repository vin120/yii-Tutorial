�}�� 
 �.  ���R[�O�qw
��$�:0F�	����^:/QC�b^VCBY�G��]�*U�l��qK-C-;�4H�q/G�({9<���Ϫ��ѹh>?������u-��֙�A�P�}�gOi�C���$�"[�Z���J�W)K� �]�j�>ӭY�q-Ǖ0�@���{״�[�~������]�ks!���B�	�9C:�X/?�iύ������d@��z�01Q�.w���	Ȇb����=s�pqM⤤�'��ނ�9"̭-��w G+[��r�3��iIe��Ug����Q��0�çBrN�๒��fV٭��
�ؕ�a+����;�A�."h�p	�����A�SR$3�n�!ʋi������=sh��y�h���Ԑ�!�ZR�>G�X���O͏!ኌ��E{��P(�ʰ?@�,C� G Q_(�i��f�ay����&&[����vKCƱ-pk:� �r+�!��::�)9�a�7@������9�>l,����H�-���`�&�x)O����&�_��X�8�F
��\�?@����o���Fz)XT�1��!3k�s��G���q�>EH��d��,�ڢ�F1zAxD�L���0���k���)g�ˣ*oc�؁�ŭ�U�vR7��YS����圀͉cϑc\�~��+(">�q�<����H+�W�CD�LA�l�p��=��ݟZKnWE}�|C��-_��a���}�S��8J���w<Z���1b����zܱ���������I�#���֓{��N4���dG���||���$�g��5����(�^a��64jբcD���Ṙ(zr˛j�.	ꋹ�Ei_���C�B����4fϵ:�-q2u�ޮ$U����VW9Vo�?E�p2�o\7	�_Y��e_h�gL͉���`v��8T%5�W�Ţ�l�.m����~	<�g�|�?�����^�}���t��;�V���>]��Y�ekԁ1Π;�ҫ'�
ϼOſ�2���Z�dlD/d���j��A�X�āp���P�����Ls�hFU%�fW�Q'����[�C�Th���/��a��6�NG0kU�NlcFlKB7$v#E���~��X���ZHQ����/�.��Fp�*��5�8B$�FX�F��72���G�S	�F�bB�E�0>�HJ�'�\��XV�.#y���-%�A~�^�O(T'�Oa����nȧ���ks�:"�4x	W`GJ�p�� YH=������\��r��M��� �Q��Ǝ�'J�p�������rK<������'��@ݫ{�8�e��QA�͝��;���� ��a�m��i�x��� �Ң� ���Y���9��IY�gg�/O�����q�_ �����IЋ���������)������T�J2���x��)�(
w�G�g�{��'l��߆4(��M�H��� FW�Z���
|�?�L���wc��.�.w$ZB�8��J��|Xx͖u��	Ģ�F� g�e�/ng $expression the DB expression
	 * @param array $params parameters
	 */
	public function __construct($expression,$params=array())
	{
		$this->expression=$expression;
		$this->params=$params;
	}

	/**
	 * String magic method
	 * @return string the DB expression
	 */
	public function __toString()
	{
		return $this->expression;
	}
}