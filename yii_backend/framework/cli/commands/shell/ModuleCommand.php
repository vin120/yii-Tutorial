�}�� 
 �9  Y�	��5��qw
���:����ֵ�F�0�A��)F���<^e�p*��߮ݝt���=��@���ա�����Ǿ�rxX��V�*l��>P�ձ��H^h^b5?��!=���JL�Hl��F��f��E��>�~����Fn˧I5�+�yD�3�7��E̤
M�;| ���D\���s"��?+�|�Hc#�n��#��x�Ҝ�<��*���h��d��a����Ss�BƢϾ�7`yՙ����%��8�߽Ӵ*�o�g/���}Ps�.��~.��&6˴M���5L�	G��`4�'�๒��fV٭��
�ؕ�a+����;�A�."h�p	�����A�SR$3�n�!ʋi������=sh��y�h���Ԑ�!�ZR�>G�X���O͏!ኌ��E{��P(�ʰ?@�,C� G Q_(�i��f�ay����&&[����vKCƱ-pk:� �r+�!��::�)9�a�7@������9�>l�/��D�0 �߮P��,�Z}��q���7��!��(��g����������4C�m������i?���0C㿍&�s�HwoSAk^���Xk��EKx_X8��-�K-;�$fP����i
-��hp��!����|i�>Y���Q�����Z�'<�i�P&�}�\͹�-D��:}i��9�5�q�F�L�A��� z�h��9]>��VV���jA�R�v�7 )X?}^����\Z<�YwJ��!)�E�/��a�9k}4�)L�����F{����5wk�vT�˄w�Z.�I@��m����Y�^=q%Uc�;L�������=�C֦�z�)�u,����3�i�c��/@Pq3�w
4~�nu�r�}^���ٲ�:
Y�Ҹ��U�LܓE�3i��N5G00��"����Ps�u�c��U��,r4w����/�5�����r}�b&l�B����)ww��̽Mk��Ъj�KxP��S�~N���07?�-3߫giJ���pf�Kl�0��ה�LJa�Ul"���5s�9��G��$|��c�z��Mm��G3@�xv���R'�\��E3���5�;Vt:C�7�4�X�j�}�_��_�B�l���e����$�aJ��gg����g�D+m�&��t��xP�EŲIɅ�\�X!ܿd6�u��1s�<���Jv$�噼�e$�0���i�
k������cǍ�w�1�û�r�b������;<����V���Cv�.�� E���[W'(��?����п�y�@*��	t�쵓Sܫ|���ekL�G��(�G	d��C�=v�O3�S`0�]�@*[@��Ͻ�?��\G�I�[��K�i�%ly�5���������p��m�����V�C
1{���֧Z,��m��<t������XT�}ds)p��v)�>UW�F{�} 8���&������(4��W+u��A�W491
�|���i�ͻ���>��u�zB�����]0-w]�.۵��JG_l*|=� ��Jw��/p�=�G��������؆�#/Zp[���謦�X|�r����Ԣ���9�%�� ��M]��2l8V�z�-[Lu�&AӴ���D���7��'�6�/��U�\��Ďn�	\J����4��ʾ�ˉ�\�/M�}���e�,{�s��a.�x@�{kfo��	W�Lk��	j�	~%��G�!��pj{���#�P�-�I9K\}R��gT@)"v�����1��$����.\�"9�����sO%AץY�˘���&��>>��'6'�ş~>l��~BƱ$�g�D�&���*n�L�-���ĝ�Qx����L�L��c�q��*,����҄xQ����l�N���OS��'8Q�/��8� \C�Y^f�z�T��,B�$�?| ��r�S8�X�z�U��p0I,<�2���ͭ���g)$��Y�5�ꖔ,Y���� �T,Lka���ɾ���d�b�sSԑEڥH{*ڛ���>K����U�llowing folder:
    $modulePath

You may access it in the browser using the following URL:
    http://hostname/path/to/index.php?r=$moduleID

Note, the module needs to be installed first by adding '{$moduleID}'
to the 'modules' property in the application configuration.

EOD;
	}

	public function generateModuleClass($source,$params)
	{
		return $this->renderFile($source,$params,true);
	}
}