�}4� 
 <  UK�E�"�qw
��/�:0G^����^��������v_Ƕ�0�B�D�Ri��1�%�Q�r�k'�r�B"�=��hI&uX����9�ǿ�*/G3d�Y����b���h��JvN���7�>	>0&�w��@�Pk=��D�"�)�͎w�Y���j�i]k�n��hM��-,���	���Nf{a#��Jvy1�@d�"$Q�{��.EHii9|�V-���Ѳ�J<�q`:d��j�}k`��%+�]�	Θ�P�ܺ>�S�tkJ���+������U ��u�B��%�)�=LM�D�h��5�:�'�V٭��
�ؕ�a+����;�A�."h�p	�����A�SR$3�n�!ʋi������=sh��y�h���Ԑ�!�ZR�>G�X���O͏!ኌ��E{��P(�ʰ?@�,C� G Q_(�i��f�ay����&&[����vKCƱ-pk:� �r+�!��::�)9�a�7@������9�>l�/��D�1p��L_[.�0��޷B�ı|=cl�.��{<P�γ��".��em�/�4I����SL&���T��&�A��I]��{�e����$���oZVs� 8?_�giSG��I�7~�
l㱫�B(K3 D���>8��T��͜�=&4�E?�(�]�oS���q�Cg��Z%���2�W޼�MX�[/r�z��A���FV`�p��<=��SJ��A��&�w�7!Dz|OD����06G�B%G��`7��]�+z��o�'b-$�z\�����o6��դ5p'�z�ޕi�<F�|e�V�bnnӋ���ug{~Eu�b񮫧����]���.s�0�T��/�2��I�U۾rYz4�vO|r�fs��u���}�J*<6�����[�P��\�}k��F:Vl[��{�v�R��UyB�g�~�^�Ĵ8~��+��E��y��م�52�	b&l�B����)ww��̽Mk��Ъj�KxP��S�~N���07?�-3߫giJ�+��[f�Kl+z�O.����;�/�ml�PO�y`c�O�JZ��
�*M]��J�`j�������o�r(��;%^Vdm���2�k5�J��Y�7�;�b���U��	��"��B�2D�x~�^��m��h6 _=��{��ѩ&U4����u0Yd����3�ߋK�������u{{K��d�"���H^�Bo
2@��1N�=S<��V�$ӑ��e�2�ԑ�,��\�5�ژX�	f��ڏ� X�M�Bd�.��F��4X���� ;m�o'��^c�Az}\�(g��h>,����ikeY�Ŷ��i�R&Ć�|T��2���;���� ��p���<5�@�[Z�t�*��#|�͂�`ٔA�|`�\�'�e8;���0����B��܋�?���䳷A���Ѕ�f�G.��s�^\QZ��(��h�t��Cn[j{+�%�F'$��p.#��������_u{��3GE=�g��5�tf2M}�9�K�܇,���U�^l�'X���O~4�?T��0�g�C�T6z��"�Y���G�J_��j�ۿ��\�˝�#��?�����PɃ2L�u��c�2G�T�ڄx�/C�����.'=Q_�f�B�b#�$l��s?�����q�
�ӡ\;q���W�+�':dVS/*�p��!Y��q��9s���hd�|�ͮ7&K���~P~N��>���v:��9D�PJ@�Ͱ�-=C򉠢���P�.�9�[��ؘ��B�=P׎$6�w��e�X���-k�0G!�Gā���}��s�6���q
�m1�֏���,^2Tp��Fk:>ix��e�Wf)ViLW�k����]�7��7 c�lZ�Ѯ�Q�j?8z��\П�X�GP�M��\�+�oAN޴2�+6G�M�s�KMr~<���0_�
��U���T����ڶ\��<��y��X�U�훨9�:(J�������/�i"V��ɗ<9eG�#�k�7�]k��~ �����&B,��*�W�@�HS��wxI����\h��ach($formats as $format)
			{
				$timestamp=CDateTimeParser::parse($value,$format,array('month'=>1,'day'=>1,'hour'=>0,'minute'=>0,'second'=>0));
				if($timestamp!==false)
				{
					$valid=true;
					if($this->timestampAttribute!==null)
						$object->{$this->timestampAttribute}=$timestamp;
					break;
				}
			}
		}

		if(!$valid)
		{
			$message=$this->message!==null?$this->message : Yii::t('yii','The format of {attribute} is invalid.');
			$this->addError($object,$attribute,$message);
		}
	}
}

