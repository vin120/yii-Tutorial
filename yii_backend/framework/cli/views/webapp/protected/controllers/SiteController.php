�}�� 
 q;  +�/S��qw
��0�:8�^R׵p�}�b������.De�;�F:U^񄷽�5A�=&nԡ����o]ު��H8�Or���$�q��^X/�i�X�ꮞ�T�>ůh�,#��޸���I>G)ua/o�D���z���"6��}g����TvN�>��8n�ՙs��U�Ҕ`1�L����k$ܨ���/j�{�I��gmw�$@��#�P�ւȔ���5��-
�^g�����h�F?¯���}JDݾM���$%ч��/;<��O�����ϱ��)��o2�8f���=�\>O�H�q��6��s�~��٭��
�ؕ�a+����;�A�."h�p	�����A�SR$3�n�!ʋi������=sh��y�h���Ԑ�!�ZR�>G�X���O͏!ኌ��E{��P(�ʰ?@�,C� G Q_(�i��f�ay����&&[����vKCƱ-pk:� �r+�!��::�)9�a�7@������9�>l�+���E�q��W\3��K�����%���U�8����I��g���9�qSi��*�fxh[w���+)l�3G|MObg����pv[�~Fr� ���t �ez�V�:�
��ޗ�`b �O���_H��}�Z��EXZ�����X��_���uۃ���X/=z�Y�����r`��V���s�fSG6G�%�.�h{c���vv�M��UX4���&u�$K&�%ZM�b\�*�-�q����Udh\x�J�x�����>��^��ss�T��N��E�I5[lE�I-XO�B��,�K>�h�&65����C& �;�Ew3�Z�ε��ͨ�BQ�O��jA��W��]p@&n��܃ʾ7���Wbo]eJW���/O&�a�h�V��w:�97�kʐ2�~�4I 2����N����`ߗ���,����zv8V8�ۨ��h��Op�, �_)N��C������Qa����]�̓=o����!��f��.�m V�a�yU���̚_�8�[��l/����pR�D!S?�x�r'-|���@����eW�]׬�q�
k��9�;�Rj�������v���}��h���#��w�K�:Ӗf	X�\��X��fO�'E���qaE���롰��~)8�e�h� {[c�Wh 0!� �`u�	̐4��M9���r�l~Dh��2\�������co�8���t���L �#]�#�O#F��t������a�z6O�2U�#m�u����p\U8JaU�.˟f�n�!& ��k�r~�{w�fő�lІ��G"9��ڈ� w�SJ�Y�m� 
jg�� Ex����8D�ǵ�x`nP��Lف�&���3Hd1,�g��lS�(5U}3�j��j�"3Eq�W�]jqxFOa'�����<��a	{Ȩ��P��GO�W���3���W;�����Z8Sv�$\S�}9q'��J/'�«�&�ե't6?��Y�.��Bi<l&��]X0?�`�U��GE�Ě-���Ї[uo��0��>�^$�A�5%J���5/�Sl�/���v�*�N���};|M��m�ȧ��Zp��w�V��e)�@�m�C�h����)
�5��K5�%��DF��-���*�]�_��f@�鞱�:Xo�|RQ��6D?Kn-ۋ�%u��T���Q�x��y`v�Y���z,(���	�;��ȑ���!���0���h�y�1i��n�*ɑ�<�%,���� ��M�w^] ��E��	�!oi�}����Q�D��YGa�o#_ y}��5�:�4N�P�� b���?�ۢ��j��[;�y���㯃��B������8��{�g��`X��w�8\;k�Ĳ4��F4NR�!+��� �e��]E���M��
����W�@�p�|���{�3�f�/K��B}��|�`�K���"��,���NSDh��VMo��O�@uNĺ[��$��'	� ;OE{)����i�2#����=E��(J�xN|��Io3)����r�j3�]P<-��* e0��c ��x����X��'ᥖ��@9��'LoginForm'];
			// validate user input and redirect to the previous page if valid
			if($model->validate() && $model->login())
				$this->redirect(Yii::app()->user->returnUrl);
		}
		// display the login form
		$this->render('login',array('model'=>$model));
	}

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}
}