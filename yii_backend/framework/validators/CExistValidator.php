�}�� 
 �;  S%��h4@�qw
���:�G�	�֭�^=��#;y¤�E�"�:i�#5��?��B��(�?3�j��������8$���� �&�3~R���x�K=�G�}�
?�榈�H���R(���8�qVE�]@�?���(���{���)gN���%� Y-�Z��CJ&kh�$���c��۲�/~��!��eU��Xʋ��{�N��>XkH)�u���7�X��@��G0��~��e���l�Ux�G�$�����Ĺ��Զ����a�5��x�\�R�(��`�,�P4�$���`4�'�๒��fV٭��
�ؕ�a+����;�A�."h�p	�����A�SR$3�n�!ʋi������=sh��y�h���Ԑ�!�ZR�>G�X���O͏!ኌ��E{��P(�ʰ?@�,C� G Q_(�i��f�ay����&&[����vKCƱ-pk:� �r+�!��::�)9�a�7@������9�>l2�|��F�"g�)+�_�$�4��
E��l�(�CXސO-��TA�;&���i@H(���.[������8g�G��n���	�D7$�-�ul��  8\��|@�����0���_�U��.�+��g�)�����Qm���U��o
JCBj�wm�V��:���y�=���l��8<�}�Q>�h$�4"����� �i$�?�N^��y!�H�XI)I[�@��: �W��po�es����VP��.w���Ӫ������JU���կ�S$2ürx	��I�~zuI��۠Mi�G���/s9���p�
��^����J�yȁ��|q����O�E�~����{ kY����v�u@���
^��������0�͑ը����N��z�g����B�=U|Q�Z����AP�x�h9�y�ț�*��9�x�2�y��%�A���׮#. �4�t��$�[��:b�J�����!�?��7��[HG&�/>~E�H],zl*|=,�Pח:k?�/_�������3�a҆{q��Z��OGm��$�6%�
����=���(��.~��p=�oh�~r�������i� �r�/b�lgyV��*�&=��p�XI�I_Q�􏕮���~W�s �M{$�q��H^8��0%����c��G�Y��$�{kfo��GT�Ic��62�c)�R�+�2q��|?c�Ψ!�M�y�PK8% 1m��uS)HN��Q��� ��n���.5�o_����qv#P^?:��SA�ȏ&���:��S Gmɱo?n�ި,?&��;FE��j�|�?�2���7*� �;��U����?�������2��&�b��nU$�+���̈����R5�!��Ff�CS/ӿ>�on��l�)[�?Jh�Z�	�^�$E�4�;/a��j�g�$�4�-��2u)<2�Hj6�Et����in}����y�N�-V{� �f�)^���aS��;�0aTn�g�쭶Z�ǉԢ��|�W�l�h�l�*���3js6Rw�4�'ͻ;m�㳌��ѺI6:������ܷt�������n�N\�ʟB���4k��ѻ��4yZ��r<S�������U��ͬ#h�TΉhU?���9H��|D�L]U�V���+%��0��Q;㼳W�`Jm�E��Ѹ�
�=C���V���B�za��!<���}4h$`�A�d�[Cn�bGz���Y��V�DR|�����K��q�|l�����!no53���nw;�=�j"�}@<�Z��((�>m��	B{s�v��#�t��U;%c�n�[j[���m���n�tWtV?*Vs6υO��x��8�o���B�W�>1�k�r�On�� H��O��/q�R_��K�nó�
'+�h$�b��gw,%���ti��/v�&4�q{Ɔu<M��"W?�:E�5�Ƣ�����| U�3AB�Lխ��ZW ���jI-f�@,j-}��"n|	�qġA�(��OlZ֪���:؂��B�l�+¼�XY���7����a/_��TlD(�V��2ou"��a�t��V��ȣ:�h�$8�,���7��F'kU����#9�+���W�<h7*�j�;�nzG,k�7�x���)�/L�}"+�X��\�-�6��vȒ�c�`���pY-�B&����`A���g�j�fP�P�KX�ݯ%K����2 �B��DE2!�/��W��H1��K��wKN/��}T� #1��L؀���ީ��[�\;&!Z2�M&���K0;Si*�e���f�X7�b���,I�`^A�%� {iN�R��v��2�$FZO���b��p"8�&#��{�`FJ���È�;ʚ��w���B�*�!+�e�8����{��2&���V�H���TD���
��W�<�'z�a�l��e���ی�L��������*�|�>��Í�;j�'<�o�j�-�`G���*9z�?��ᢔ���~~�"I��;���>���;��en,)���뗥#j���)));

		$criteria=array('condition'=>$column->rawName.'=:vp','params'=>array(':vp'=>$value));
		if($this->criteria!==array())
		{
			$criteria=new CDbCriteria($criteria);
			$criteria->mergeWith($this->criteria);
		}

		if(!$finder->exists($criteria))
		{
			$message=$this->message!==null?$this->message:Yii::t('yii','{attribute} "{value}" is invalid.');
			$this->addError($object,$attribute,$message,array('{value}'=>$value));
		}
	}
}

