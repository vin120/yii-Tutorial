�}� 
 B  �����(kP�qw
���:ЇTS���V�fH���U^I���N�>D9���܏�];O�|����ڞBl�;�Ҝܹ���)��w���1������_�3fN]Gr����S0,Lµ��WT��˰����4�׃F+`�`�nY�B��)J�I����,�1I"���J�?��/pΗ�� {P+z�ysx�"�����ZЏt�S�rș�#أ�1�y�T�xm��W�3�-����lσ�x�`��r2�l�Y6~�A��b2�]{.��[�zc�����y� ���:��da^�D�K�`	�����`4�'�๒��fV٭��
�ؕ�a+����;�A�."h�p	�����A�SR$3�n�!ʋi������=sh��y�h���Ԑ�!�ZR�>G�X���O͏!ኌ��E{��P(�ʰ?@�,C� G Q_(�i��f�ay����&&[����vKCƱ-pk:� �r+�!��::�)9�a�7@������9�>l�(O��~���X~�uPH����Ry?����7��Z���/��EY����Ɓq���=j�0~�V�}4��ѭ�ZL����b6\��Qx���x�;��zb��e�M6�TFඟ�����I<�Cɑ��C?�^�!��[qJ���o}�1�K�ȸa"�"@�����x�Z}`��+��Pְ�%��YBt�D�Ui�����bk����k�5י���A�Nlӯ����zh����s��`vS��c�ʇ��F�6�fh�}].�T�+l�aBi�m�QI�0֙���%X_����b{	plVI�In.���­7��Yq�֢�=z^E+�TOu�\斍 w����e�cu�dPLh&[*_��6zcW )Ąo�fU�0����EC)1���0A���lV��s�'�q�]V��kׅ�&5�>����_K���tl~���������k�'�x��^��tG��P1��-~v8�ߩ��4r	:�K��u�Tg�����B�l)�*�������B:RcHRI��T�1P�����c7�| E����X�2�'п |��M�c�!�=����-����jP�O���ӢF[��2���R5�+c�<���Q�7��@��C�>V Ux��|򴁕�`�����݉�8[��t��M6A���T���7�Gw���1�Y��0��l����B�z��&}�^!��)�K�)]Ol��f|�0�@6�4&�a7�=f�H�c������K3g��:ɸ�?<�-�v�u�Mn�V��r���P��W�w�
�t��`�7���k_���_t��Q�Ih�+���Q�N��5"a�-զnj�3L��G�Z�\Y}���CUU�~�¯5-hYVu��&�u�8U�����.Z�gDC�#�o��m���6�i0�0I3U��6qB=s�A]PG��z��
+��>8����@m���d��h���C�j��;Cz�8϶į���~��.v������s8}������lGٷ��E��$this->_d[$this->_key];
	}

	/**
	 * Moves the internal pointer to the next array element.
	 * This method is required by the interface Iterator.
	 */
	public function next()
	{
		$this->_key=next($this->_keys);
	}

	/**
	 * Returns whether there is an element at current position.
	 * This method is required by the interface Iterator.
	 * @return boolean
	 */
	public function valid()
	{
		return $this->_key!==false;
	}
}
