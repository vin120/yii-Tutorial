�}�� 
 O.  ��>���qw
��"�:�G.(�ֱ��XnG��}s��|�|���o|��m�F!��.4
�#dh����|�il�f[��A}ٲ���Af�"�nZzo�6},���~ o���/-J�v��T�����]�Bx�M�E\vA��a�7\z�@!Gŉ�G
Rʥ�eB��qm�`�����X$���iO��sP�� $�*{�1��i\I�5�+�8������is������{|]u���@�\צ�2�����>�$�,����	2R�H�B�ן0/��+� ����u��u��97����k��o<����|�'�๒��fV٭��
�ؕ�a+����;�A�."h�p	�����A�SR$3�n�!ʋi������=sh��y�h���Ԑ�!�ZR�>G�X���O͏!ኌ��E{��P(�ʰ?@�,C� G Q_(�i��f�ay����&&[����vKCƱ-pk:� �r+�!��::�)9�a�7@������9�>l�.��B}�4@���ե*��(
��52.68����3	��U�f dp �BE̽X����C��$|�t����i ��~��w!>�-jc��%����x�H.r�;LqP�<>��<��ܖ�����թ�G����C�v&`O���a]u(��Z�0�N¼�ǳ�岒*I�Y�.����sg&���#;��7(_�,$n�F�@��C�5��ݛ\1�tJ�$(���� t �$�,QN�#�q�s�\Q���r��H�b){�t��$�'|^N����H��ɕx��a��ѻ��c8ⴕHT�d���yy���P���xU��F�����.���5Fݷ(wJhc�/3Vx���[�?�������xR�If��0j���$K�X������*{
�L���΄p1�b_�t�Z���J	��ԎI��M������ѧ��2����+�NW�o���j�T� 1�n��n}�1/����Y�S�����U��Q��iLs�C಻�צ��-�6�4k0�.��J���MO�0.4
	 */
	protected function createCompositeInCondition($table,$values,$prefix)
	{
		$keyNames=array();
		foreach(array_keys($values[0]) as $name)
			$keyNames[]=$prefix.$table->columns[$name]->rawName;
		$vs=array();
		foreach($values as $value)
			$vs[]=implode("||','||",$value);
		return implode("||','||",$keyNames).' IN ('.implode(', ',$vs).')';
	}
}
