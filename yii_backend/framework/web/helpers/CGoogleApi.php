�}�� 
 ?  �N�%8O�qw
��-�:Ї^����B��x�K��	�-�����qj�Y֮ݠY���n�Hs��	I��}7GqT٨S��~M�8XL]-�
��@���ģB����8���be����ż0�e|t|�@��h��XW�a�Z���Y�0��VE���l�q@���[���|ۯ��f�^�Ș�}=%�8U��.k8C,��U"��yTwet;�L2m���<У��L��9#Y]hs_��hRs�9�--�Ӈ-�2cJMu��&9�Y{FC�6%82��NS#�(��qP�^�/���ݳ1���o�2=�^A���fV٭��
�ؕ�a+����;�A�."h�p	�����A�SR$3�n�!ʋi������=sh��y�h���Ԑ�!�ZR�>G�X���O͏!ኌ��E{��P(�ʰ?@�,C� G Q_(�i��f�ay����&&[����vKCƱ-pk:� �r+�!��::�)9�a�7@������9�>l1_R:�X�B��g%��r'@T�H�nxwBU��R@P3,T���b��Z0��^������AEq9����Nn�Q��t6�VYᗜ�D��
�黻�Ʈȟ��--�}+od|Q�.����A�@T��3�'�\y�����K���n�Bƻ��02Ґ��E"����K�EL�#�q����#������Ǽ�=� �'�Kw��қ�4uP59~�+�^og�F�$�d���`Ju����rwW���w+_ݐ�n0�5I�Y8���wy��'Z�.Ţ���2�MbX0ȃ6������5]%���`d4dKM�HJ(�]Ԫ>�U?�Ұ�	��=2��c��x������ȹ�2FcG�<�Xy���12"�g�6�*���\H���!#�InfufNP���@�(-ƹ����,�Y�ڇ��^:��|��w�=Kj��oG�l9KHO�]�����j�[$I�"e<J�Y���.��N���b�? ?��J��r�J�ۼYa���։�lD'�G��]�/��S��+�OZ�rQ��wp���Vwa8v�>���6A���Ye kt}�N3��4/p�x�P��\*��m�Sc�	��s�2Uyh
C�lf��Q����D�A�!%M�� ��qJT�,�P�"� #�����n<�΋����`�ؠ�#�^�Pc��,>r��:c�2�����8l�»�@#���H��Ý��������N���x�*�7��>ҕ3���4�@�����&Y�V�+�ыv�k�bɨ*�#5�I2�_��:a�=���k:���ˎ�f{k���T�z�k)�a�]J�Q��������ǖBش��W��G=�U�gֽ�+���i�r��
A%]����g"�İ��f� �F?[���u�s��`M�s.�R"lK��0�ܴ�.K�Pо�(B(ב*������į�,�$g�5�f�UX)�}W��p�K+f��ۿ��v���L�B�Ū�b\�p?$;�0�o�*d�����D��j�*�q���Sa�Gj֤$�١��ml�0�[{����FS���71�g�G��/�	�>N M�i��E���-��[�?�Ut��L�Kܱ���jt�LTA���S�Z��N�a��la��@7�x��
I������P �4��J�Q1�6#	}�m�
A)�T���/Qw��0&���� ���I��x)��������[�y���րM'y�@�.N~�Cg�b�Wb���^��S��I-�m͈7����D^1)�*]
�v�M}�G�x���5�>
'�}�avI����:mH4�����5�2�[���ЎE�X�ט[8���!����C��p=`* û�X3Z1��է�X+�D��ro,�&	�#}�ݐ��˖}<|n�+�:�[Cx,O籇5#��& +.k�`cU������=r��\8�Bt
�^���\��_S�E��"�Ɗc�5ű�{'���#��H�B��M����G�¼Y�^����E�h��ڿ=��ƅl��*7�N<�"
��,��D * @param string $apiKey the API key. Null if you do not have a key.
	 */
	public static function register($name,$version='1',$options=array(),$apiKey=null)
	{
		$cs=Yii::app()->getClientScript();
		$url=$apiKey===null?self::$bootstrapUrl:self::$bootstrapUrl.'?key='.$apiKey;
		$cs->registerScriptFile($url);

		$js=self::load($name,$version,$options);
		$cs->registerScript($name,$js,CClientScript::POS_HEAD);
	}
}