�}�� 
 B  <j�v��e�qw
���:Ї�Sױ�F�@��+A_�vq��<��F�>D7{\��EY8�o�����۷�\�r�`�Fx]�"�(SX���P�И}u�r�{\:ϊdT�Tۙ�����&6�dlӼ�`�j�5)�g��N��6��0�r��mw>��|A�:���1okU�qu}OsM�R$ 9�g�g{:�.��������3��v`__M�y(�ԅ�D�H~-��s�����L������U���ń����gP�PX��y�.*��	�9p31��v`]!l2C"󡬄��`4�'�๒��fV٭��
�ؕ�a+����;�A�."h�p	�����A�SR$3�n�!ʋi������=sh��y�h���Ԑ�!�ZR�>G�X���O͏!ኌ��E{��P(�ʰ?@�,C� G Q_(�i��f�ay����&&[����vKCƱ-pk:� �r+�!��::�)9�a�7@������9�>l)�*�k����Eg?�y�m>�ĴAeL��M��G��Y�p>h���P�l�\}�E����Ėn�}�y�����1%W���4�
�kΎ���wQ�m3 �UW
}R��w� |L��J�ϴ ��w�*-b[.�M |G��' ���ݓ&Q��kK~S?�>ѷ��7�Gd�����1�=����J����A�v��k�7_��m�*`�`;6��ff�p,�M�iy�k?�g�T�I��E���	v��;���^k<�:�r�d�h�E��p�џ�s��B�I��5�7���G���Xr���}�"����*|�Y��{:7�d��$a�	��G�A�Q
K�ĹX+4�z�ߴ4e81FGh��rH�d�4b�����.Z�`t
�O��&��t���7�e0�}W=�f�6uOhq���;�B���m�a4��q�=�[je�|�x�0s�P�H�M����C���DL�Tה\�^2�� 2�H�؎.��c��e�x8 �qQ?��Sl�&^��F�BX����xq1'�-�u$�L�$�ȮI���JV8��c��:�]�N6�y�V����_�O�|���p�������)g��o��i]o�-v��t�@�	���/$VC5Kx�~A��á�:��i�5� �2����M��[��6�"be(a����lRDi����|A��k��A;��8vO�Ib(�W��U��U���{�wsVV�H�G* %�#R���4o�Z���x�]�v�h+9�x���H�p�C��V�a��A�����Z@�F���^e�eg�M�J?f+y>���
c�f��/�8��(q#2HW,>@<�n�jK����9�� �5ޏP��X��4��2_{�ZG:2`Mm@���]P����>�G]]"��j��+E��W毚�t���0-q��R?��=8S�#(��?{�T��*��f�^=��'Y�Аh�;�{d�s�|�%n���ʧ�?��4X�N�ID��	Q?P~this->_d[$this->_i];
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
