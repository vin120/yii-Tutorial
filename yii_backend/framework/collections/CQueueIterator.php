�}�� 
 B  �c����
�qw
���:ЇT,�ֱ�V�jH���e/�k�,��f��ґ���b�A�oڳ�o�0�����}M�	����>u*���������RjKل�8����
Ok�ʠ8c~ ����u2mɻ��W���!��Co�RB1���Q���Y`���`��:� 2*�%���.�] =�3b�oo�f��S��ϓ~D����o��T ��]�NX�/��i�h1i3ѲF|	Am�G�5��Z�,T��[q�P�G�1e+��WIo%�Mx�.��֏A�s�zQ_b�c�&	G��`4�'�๒��fV٭��
�ؕ�a+����;�A�."h�p	�����A�SR$3�n�!ʋi������=sh��y�h���Ԑ�!�ZR�>G�X���O͏!ኌ��E{��P(�ʰ?@�,C� G Q_(�i��f�ay����&&[����vKCƱ-pk:� �r+�!��::�)9�a�7@������9�>l*|=�\ח:k�`rc삿�,�� �1�}WQ�TSF��E^8�&�N|��	��/EVȽ���Zӆ!ݸۑ@��&FNa���|�9Ipe���P:K��̷V8��W�V�$C.�������A�=ph��`I��P��e����WC;��*�fvr��ť���E�{kfo��ZO�n��t>�a7�2�d���}iv�Ψf�@��0|#g��{I]>R^��X���bU��{���9t�.���Դlm27{ӼYA���=���4��^nkǦd2D���v}Xx��w��v�?�$�=���=)�S�,��R�V���@7�ޞ�l߱2��4�'��:k�	�ʂ��]�����y��be�GU��V#8�=/�� �PR�=n�� �7�D�l�S2*��d�X8��p�B��y9I+!ŀ���:^�@�D�Uby�q�9�\�,f!m��������r(��ERW q���+�91UX��e�մw�&�����=���+��l�'3T�^ �D'@t�������҅�9m�χ��e����� nRʯĬK�p��@u�Sߪ��8�d��rj-�y���B#O_�H�q����ZK���6�8
�.����p�J^@���Ɲ�] q+,���+��X�-�ҵ���{Q���/=�c�we v���	��F�i�)>�"���m�hsd�`�Y�K�r��3�{�gma�1���4���?dbH��yx�1�C��{�O�:\V�ѐ��`��l��+�����������(�͸�<��qy�E�r���1'��;�E�j/! �rw���L��<�Xd7����֣�} ��9������uI����Ѡ����ƕ���!g(%g��(�w��N)�WF���!��5�9�|zL��:��j8�!�-y/wW����M�Z�}���u.@�҇0�����3�(T�l���1	�R�Ί!M�E촊&�
��p���w��~_TW9nԬ��&6]+:�	*R9��
���@��,�[*��peturn $this->_d[$this->_i];
	}

	/**
	 * Moves the internal pointer to the next array item.
	 * This method is required by the interface Iterator.
	 */
	public function next()
	{
		$this->_i++;
	}

	/**
	 * Returns whether there is an item at current position.
	 * This method is required by the interface Iterator.
	 * @return boolean
	 */
	public function valid()
	{
		return $this->_i<$this->_c;
	}
}
