�}� 
 OA  ��7�����qw
��'�:�G.�ֱ�F�IU�@�Z0�G�������+o�%����N�\�G�j��5��NI�%)�	�`>Z���`[��Ǭs��8�������
��k9�3����Z���q��W�*�N�g���ll�_lz*q�P�4���Rw�8�!c<�NW��\}ӡ��p��˙w}c���7t��	�0�+S�z��e�ϱ.7���gC�(AI��O緶����r�ٿ�@�= 0�~�Y�b�x�$?�A�ؚhM��t��������>9����y՚�QԱ$���!��3T~q����fV٭��
�ؕ�a+����;�A�."h�p	�����A�SR$3�n�!ʋi������=sh��y�h���Ԑ�!�ZR�>G�X���O͏!ኌ��E{��P(�ʰ?@�,C� G Q_(�i��f�ay����&&[����vKCƱ-pk:� �r+�!��::�)9�a�7@������9�>l�,�[I0W��)x*�+���ɢW����4�S>�<ݒ�c.�c��F�����-��<'�u鍠ϖ+�u�����_�=�c���QN�f6(�����Ԙi��U:>bXT�ίb�w�89'AY���r'8f
��$K��MXu��m!�������n����$���8>Q���Zxxd�JT��ӂo�ڄ0�闲R4���%L�� s�5�Ä˼s36��:�<8oŐ�d0���%���eڡҵM4r(�Pn�<��վ��fN���4V�����Tz��%iݠ�N��  �RH��-�:ёhd�5S��F8��n��<��d�(FӸ�t�r#9���Ć��1ţ+���]�me�U ~o����m����k�qO����zR��b���-L� _F�C:����G%C��l�ʇ!�����f�`[��ԧ�m�vփ�U�NRXޅ������YHz�^|�B�g#C�Ϭʈ#	�,V���~~���q)��0��R%�c��lD)�E�t�x\q�Sb|)�/��<m�F��|��[�j�$�U:��d�r�{�}ĳVo�{�W\�Hs]"�=�@T=�����Oɮ )e���|�q��n���mw���:�#`\n���]���b�L�-+O�v"����~Ho�}� =<�M%$F!H�]D�/V�JPғ�o*-�JU��C���, 1sE��tNf���=����8���?���>�͘��ޑ\a�V��e�9�9���(��0j$}��vl����"A�װ���S�,S��Bg��׎W%��sFM�|}���d����h���#,Y��ۖ��L^ǧ��]�dW'F/B����zG�牏4�a3� �%����h�G	Zݹ�l��A���ċ��n��`�,��\�n����.��^���KR��Êz�Iu{�f(�8���H�ħ���+⍪: ����Z@^>�	���Tv�Fj�����L���ay?�N߂�f d�]��Ml�uV���g6E�3�dC��l�'3T̎  Df@h��1�8����:L�.�	|�^��h5ml���	�}���&Z��Z�ڰ�&��{:�u���˝?�'�!�P��B��ch5�3���g�!iPr�ܘV3R��F2or9˗�8����2�ɽm��$�+Ύ'u�0)���z��	��T�i�!]�"���*�Bk��V����3�$�	uNd�&���(�T�=1lPEQ�F�U�C��f�O�:QR�Ҥ���JDЌ�E��`��H�㐻��ϐ4����;����v���?K��r� B�9'0=�x~ꠁI��4�Ym_���y�Ҿ�`6��?��ﲌ<���`�dIF�����������1f!0GJe��u�3��q�vM���6��U�\s�/@�;��?9�u�#pjg(ǚ��$�5�E��c�*��4@ɔ!�O��/�!��i��/���ND59��3J��*W���͡��B�&[�n8H�u� 3I���?�!�n���9���yÆ^Es6�B�7�l,����>1���+��Y@�����5�iL�b8^y��&����[���aH�E�A�zbY��{������̸[w��E�.,����MKq����^��lT��.[j��_+�S�2���i�P��3��UN}����؝l���P��A@��_�N'��+��@�4����:��iLt�- ">�qZ�iݣ�B=��^�HTQ��m�{��+�L���H{G[z�(X��xQn��%�ɤ2���yY��Y�f#F�_��*OѬ��f����Ãp����{�H�*�����p��N4�у ~���@ ���-�&��z����*�
.��*$/����z�L��3z9ϒq�nR����@i^K��_��s����}(�1�`r}.�ɣ+U����}UK�@�z;�$	�_;��eL-�w[͑���{t�%TE(�D��p�tG����;�����<1{%/�����Z�8K43�'�X���
�xR8G���2�,�8��@�S��t:��|l���k<*S�of the current page.
	 * @see CPagination::setCurrentPage
	 */
	public function setCurrentPage($value)
	{
		$this->getPages()->setCurrentPage($value);
	}

	/**
	 * Creates the URL suitable for pagination.
	 * @param integer $page the page that the URL should point to.
	 * @return string the created URL
	 * @see CPagination::createPageUrl
	 */
	protected function createPageUrl($page)
	{
		return $this->getPages()->createPageUrl($this->getController(),$page);
	}
}
