�}�� 
 9A  [��$� �qw
���:�G�)�ֱ�ƸIU��x5s�EG�X=N����i�!�ۏ+Opv���nA�ޭ�����DF�ཽ���E
֭P���N�Yj�oG��{��v=z���BB�-����qނ�:��cܜB�Q�G�е۵ �b��g����rs%�	�1�8�����aN�.k�l�I*8�z���z�t�Q.�.��P���3@� <y°�R�V��i�oL�6� 2��` T�;���z�Lx'�xr�����̝�d%��/0��?�ʥ�P��5L�	G��`4�'�๒��fV٭��
�ؕ�a+����;�A�."h�p	�����A�SR$3�n�!ʋi������=sh��y�h���Ԑ�!�ZR�>G�X���O͏!ኌ��E{��P(�ʰ?@�,C� G Q_(�i��f�ay����&&[����vKCƱ-pk:� �r+�!��::�)9�a�7@������9�>l�)v����x+zϘ8s6i�q��-4�5v�Ć�6p7�3��Q��n�M�c��������{>T�S+	iS +��ʋ�����{��@��e����B ��I������&�Q�J���{Y���_P�O�:�I �P���89dbG`���組t
{T ���t�O=��p/7-r��q05Yx���iۺx��tH!�~�g|ν���3���2֚�0j��U��i��p�e������C�����$W����Lt�bf�q5`���N�S�ⲁ����ѷ9eA���eP�7��z�/��3F~:�#v1X6'�#D�f�u�n�* �#���oŚ+x���Bq��E�%�J��&�O(c��P7���/Ԣ,��כo�� d%+�k�V>�k�4�sR�njAY��w�)/��{>	e:����@�z�����OKmʡ� XۤCރ�?� W4p/�bw�'��Z/����o������߄@!��fO[�2)��XC�>D�)?��f\lD/d������ �\J��=��v��K��95�Ҟ�-���iFً�4�Q(��C�1��wJ*ȁ{�ë%u�ځ���Մ�#䀈B.�AU��W���"/�FȾ�]흠@,�8��l�������	�"^�gc!����x'"e�ZL0����|����Y}AW�x�J�.�WD�|A�R��㦁^�O(Sb�T(Ԡ߬�cɦ��%�$s�*l�qxP,G� ��=NC:�����r���c��C�雈2�1��ɆR�'Z�w�ʫ���J��p �P����E�+��\@ڰ}�{�c��?ֈ�ȳ^�֮�E*�}�9��x�d���x����d�ߛ]���m��K�,a��CHؾlŉ�w~��dn�ǟ��/���ǉݳS�U���-�����Z�DO�(R�����f�K��2�}��@ VÇ��"%��]�_��؟/XS�%�Pp��,އ�Ԁ�̘��1G��W��zKc��Q�m�;m,S]C�iEk9J6�)��ck the {@link on} property to see if
	 * the model is in a scenario that should have this string displayed.
	 * @return boolean whether this element is visible.
	 */
	protected function evaluateVisible()
	{
		return empty($this->_on) || in_array($this->getParent()->getModel()->getScenario(),$this->_on);
	}
}
