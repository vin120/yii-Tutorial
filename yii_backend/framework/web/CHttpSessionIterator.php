�}�� 
 �>  �����܃qw
���:�G�	�֭�^=�f���N��Ga��<̗�FD'����a�l�IPn�M���nڪ��E=K��V��J������[���Z��@jL�_�*�R�w�������8�@����=�-��#ވ�*�RJ���%�	�X����|�$�!��}B*���EnБtV�	��Dfy�M����QES���u�9���?���Ъ�^���X��6w�h!���ֲ۾C�f#uvE��S1�RJ��I��2谷�CAѓ(��ܾ~�b=���t���M���5L�	G��`4�'�๒��fV٭��
�ؕ�a+����;�A�."h�p	�����A�SR$3�n�!ʋi������=sh��y�h���Ԑ�!�ZR�>G�X���O͏!ኌ��E{��P(�ʰ?@�,C� G Q_(�i��f�ay����&&[����vKCƱ-pk:� �r+�!��::�)9�a�7@������9�>l�.�	jyN
x;�T��7��d�1�x�/��&E&���=��>�����9��u�a����:�2,�9��% �ki���I��W�wS;�-;3�f4)���@����_�����n��)��,sﷃ�6������U�0)Ū���8���gIs����S�2c���х4�����[��@+�X~����&�,ԛ�'�~�Q�v<<�>�#&�&���L��-}�=��. ����Ն�#�-�� �����?!�D�UgdqMv�Z����O�90����j���^7�:�=����g��<��0�L/��n���1R��:%ֿ�B0�U�S�">l1t.I�˪��p,Gʩ����\b���t)�.�eq]��&A�R��@j☒�_1A�{�+zA�]��O�YC�<րg���p�S�v���$�8�)I�8��^P�	횶��O�T�|3�vz��g�.-$�7v����	�7���x��/%�L���}��y\��စ�յ��fl�)��]��Oj.@�z��u6�k�BY�@f���3;&�fC�o� N�L�A
Sq�j5��81���yu.��J��&��~o�cm�.�4������dA��)V�1��M� �G�!T=�4:d�vO_�dv_�i��a�asj���  ����T�\��FCɪMGJ�?����#���;��F����!�X7�	�{�ř�'v���,6��
�Ɣ�.@h���UL"�����r4ar^�,��v�N�%�44�k��#�+$'�fz��d���ֶ�=�G��ML�Tv?q<�Mb�H5�Bx�,L(0�ȏ��]�3�,�2e	\`�C�L���iIF�2��Mˑ=f4te����ś6R�:�b��-�� �LE汑�����S�X$.���Q
�n�g��.��ه����%�O%������+��+ǲ�C��޼��1��v4�@�b���Iس{�3|�2P���'���.��x��ʾ�ܲ�k��
����z�_�*L-�[
	}

	/**
	 * Moves the internal pointer to the next array element.
	 * This method is required by the interface Iterator.
	 */
	public function next()
	{
		do
		{
			$this->_key=next($this->_keys);
		}
		while(!isset($_SESSION[$this->_key]) && $this->_key!==false);
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
