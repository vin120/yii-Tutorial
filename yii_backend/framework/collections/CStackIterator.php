�}=� 
 B  ��N�ѷ�@�qw
���:ЇT�ֱ�F�jҫ��u���!��Fd[G�_�Z�`q/t�]����t@8'GInȲ�٧mK�1���a/��uD[\c�����6��\.�����Lϗ
8G+�tp�Q�!�~�J}tj�
�_���G���hj�:i95�b�#�k5��5=H�����i��B֨Ef�~Bm.�1����]GQ���@"I(�ɇ�Q�Q��#{�m�o�h��QqB��"����Z�r'cHط
sh������q����}����c��kxg�Q��)@������	G��`4�'�๒��fV٭��
�ؕ�a+����;�A�."h�p	�����A�SR$3�n�!ʋi������=sh��y�h���Ԑ�!�ZR�>G�X���O͏!ኌ��E{��P(�ʰ?@�,C� G Q_(�i��f�ay����&&[����vKCƱ-pk:� �r+�!��::�)9�a�7@������9�>l�)��Z_�Oj.��d��ݸ��G�{*
�7��#�m�o]��J͑��j��ebOô==k�NC|+�:RD6��q��SRi��b({�^��-�8w��^\^���w?��� �n������S	�.���H�s�1Tc��¯��	�e�� ��'�#R�W�_�g%0ɦ%��I�?���\����U���l��N״"�R=�f�~��*3���eN��Q���oh���K]>��i��!��1goZ�%�7�E[�4�0p�a��3�jm<�vy��u�����V�'�"���g�-@
"�Bzs�s�D~�6PU�ǎ��Q�"�o�3eb|J��L����iYK�%8ZĿ����Es~t%���ߐ�J[,�A�6��-Cӱg�|.cی�iަ�к�R~l�=��|z��D��o��������9�*��Y��LՓ�Q|�☐R�oQj6w9�`E<é�����;���D�T5.|������~�m�,��H�� �$ߊ���޿��Ml�'3T�^ �D'@t�������҅�9m�χ��e����� nRʯĬK�p��@u�Sߪ��8�d��rj-�y���B#O_�H�q����ZK���6�8
�.����p�J^@���Ɲ�] q+,���+��X�-�ҵ���{Q���/=�c�we v���	��F�i�)>�"���m�hsd�`�Y�K�r��3�{�gma�1���4���?dbH��yx�1�C��{�O�:\V�ѐ��`��l��+�����������(�͸�<��qy�E�r���1'��;�E�j/! �rw���L��<�Xd7����֣�} ��9������uI����Ѡ����ƕ���!g(%g��(�w��N)�WF���!��5�9�|zL��:��j8�!�-y/wW����M�Z�}������d�)ea�Z�ǒ�{��h�b:�/U1�~4��m5��I�+4����_S���Q<�()�1B�
��s`f��E�d�����M�.���#�eturn $this->_d[$this->_i];
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
