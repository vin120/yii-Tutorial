�}N� 
 )  ���q<�ǀ�qw
��>�:0�^�֭�F��y�j'���������a[8_Κ�`��(s������썶׀��t��8�?��{	��Z~�����	��-��w��zS*@���_�-��ó2Lu�}3�Y�N�-���l�/=�I��[w�'Q럃+��K��|���ʍ�4]6��׆��ͱ��=�L*P>v^��s�i�B>(U��
GL�Zp��L~=�B��E]�O.�z�c
���`�%�;�D
C����b'��ӯ�[E�Um" }������s�~��5yrRmـ (��$�զ�����؄N�5�\��j[�hR���!{��;�A�."h�p	�����A�SR$3�n�!ʋi������=sh��y�h���Ԑ�!�ZR�>G�X���O͏!ኌ��E{��P(�ʰ?@�,C� G Q_(�i��f�ay����&&[����vKCƱ-pk:� �r+�!��::�)9�a�7@������9�>l,����25���끰oP���(:��W�pK��M�'��:B,'�r�����3�GîŬ����p>9��<�9�UZ>}B⇻;��<��H�V���v|^Z������1���I�\=6F���#��E�L�<�`򆀖���X�TT�w  �|1G�Z�O\t�dJ�P5���u��">�q[�y���Ck�W�(
�2]�z�t��7��ۄM@:F_k�kM��!��/��$�R��8���,#F���c>����t�괼������R�S�L�ˆ҉{��Bq���"g���x���-�p��l����!�.��96/��dό�	��6{>��2�cFT����Bt]���C����v|��k�yq#k���+A����FWW)$�~O�8^`�m\7A�^x��d<�w	�װ��.t�� A	7����m�y��߂~	<�g�|�?�����^�}���t��;�V���>]��Y�ekԁ1Π;�ҫ'�
ϼOſ�2���@�dl3�w��d�~��h�+�������6�L:����ҫ�P;wٞ���l���	��ϊ�!�ԅ���v�Cz8~l���('��=��������i�q��ћL��G���	�^���#���p��F��Hfi�&ě2ʺ }���C}ph�sS��PhGD�~��}��	��A���QI�;�!}�m���rGV+rSʔ��� ��]��7�̐skd:+WLXQ��F�۷�=f}�>��E�0��X����DkDG���Qwp�d�R���@�3��0�+A����0ޤY��M$��K�F�q�<��)�E��ahd��_֨���H삊Ŀ(�ʐ&�u�����zV�gϧ �T�L�37���UQ�sq���](�N Y]^x�i;������t"�ji�2~��� )����H��S*��U���P�(̄F�|�+���V6�9`z��H�_1z��O��E�d��/9/ԠT��wF���7)�"�܏������)����,�����l�0�[{��e�FS��8x>���O�Q���rw,���|�q����Թo/�G��?�B����b�\��P�����R���&e-vB�0���Y֭"�;�R�]\ٌ9���/���!n�}�~�)ƒnF�
��*�#���`�ۡ�̕hq(S�m�`k"�p�D�*�����?(/��?iS-JJR��`#N~�>g�j�6���O����e�8��3����Rlz�>�C;�#�I�Q��4�/X+�y�lA{A����TDM*���9��1�~\�G	��$����k�0���W ���=����@��v_yQҦ�JC.epKݫ���|�}SǀpWx,�u?�S_ˠ݂j���zX8�g�b�GV<(K	墛ft�
�CgQi�-rD������sL?�?�v[�5m�7��47��F���Hw���a�4���[�ظ8���%��S���E�Tη�#�~�?Cȱ���?�)i�Bk���q�n����Ig�ɍ���O��� $message;
			}
			else if(self::evaluate(str_replace('n','$n',$expression),$number))
				return $message;
		}
		return $message; // return the last choice
	}

	/**
	 * Evaluates a PHP expression with the given number value.
	 * @param string $expression the PHP expression
	 * @param mixed $n the number value
	 * @return boolean the expression result
	 */
	protected static function evaluate($expression,$n)
	{
		return @eval("return $expression;");
	}
}