�}�� 
 n.  �<��%����qw
���:�G�-�ֱ�F:o'��ǳ����i�����L�Z��I�!���C��j���ƿ�!|�*V���(� ��y��5��+�h��^gF����Z����ض�?
�����#1o��J9�Y ��%��,>2>�r�r��+�,AV���.ȗǣ.��F��ͬ�R�׳5��+��k���9��Ƀ��� ��}����yL��u![P���`���*�I۔>&6Iŝ~J�`���C�4;�mr�~�e�6C:�Ax���j&h_�/ 2e9�6Y�(�6��?�/ ]7�R�>��`4�'�๒��fV٭��
�ؕ�a+����;�A�."h�p	�����A�SR$3�n�!ʋi������=sh��y�h���Ԑ�!�ZR�>G�X���O͏!ኌ��E{��P(�ʰ?@�,C� G Q_(�i��f�ay����&&[����vKCƱ-pk:� �r+�!��::�)9�a�7@������9�>l�.��Bm��A��ӥ.���ǩ��t.B�P��qˇ��������ݸ�T�5Ύl�<�� �*Ϣ6q��@��Q���l�mcH���2��~�z���k�6rF�|�Zg���Oo�iqU�j�T$s���d����ĈeN_�J���a���%���E��x���i��m?�>�WdJ9���n���%,$n�F���^�<��Ðcg�'�7����Bc=�5iM�&0PJ�i�h�t�\G���ˀ�nz%�h�� �	8��N�a��ۉx��(��Ƹ��"o���WXA�*���l~��B�@���x��qo�Ӧ���9���eMư-|x-yI�V7Hp���	�*��Ϫ���6!A�	4��d=���p�VZ��г��0'ON�w�[���>�`E�b�S�Ϧ E������O���洞��ƞo����2�SP�h�u��'�Q�1m�%��n}�1/����Y�S�����U��Q��iLs�C಻�צ��-�6�4k0�.��p���%MO�l,����B5�ق���s�R�
Z�kuxYr�9��ρ��l�R���S\�����>�*}��N��w�%qWq=^��3���Ec����5��ֆXs$���j���s�B�x�r$�/!�̙*�PjZ-��6)�buȖ���J�"@��'��
b��7��u�t~����z�)>�q	�"����H1��GN�K\��v�{��#�Y�ߙH{G[z�,H��)
��n���~�<��7���{$A�H��<Xݮ��5������
����U��f�����k�&�La��~,���|����O��M����o�wB��,9#��3 ���E�� xl@��m�/W~����Ti'j����^����k(˵5�3i*�Ļ`����@T
	-�zF�Z8o� lK�'pv߼N@<�sJ�����tt��=C 1�E����b�tG����;�
ej.�M�j`��Go��#O�U�|R!��Q��Pu�Wa<&�f��fw�NW���o��
���pi	[�+�information from column's DB type.
	 * @param string $dbType the column's DB type
	 */
	protected function extractLimit($dbType)
	{
		if (strncmp($dbType, 'enum', 4)===0 && preg_match('/\((.*)\)/',$dbType,$matches))
		{
			$values = explode(',', $matches[1]);
			$size = 0;
			foreach($values as $value)
			{
				if(($n=strlen($value)) > $size)
					$size=$n;
			}
			$this->size = $this->precision = $size-2;
		}
		else
			parent::extractLimit($dbType);
	}
}