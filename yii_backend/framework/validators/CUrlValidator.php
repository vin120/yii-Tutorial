�}l� 
 �;  4ޥGC�M�qw
���:Ї�	����B�R��#T�������M�>D��"�6���-g0�N���d�9�>Vi��
�HM�|L�k<���r�5��I���l*\cD >oySW�O�ux���lj�F��5n,9"��Η*�e� ��T�Af�	' VX��.#�o�3���)�Qw�azȖ7"�і2A��;�K����r٥R�y�R\���[����t�m��K;����Z^!�OͱA��~R��.��$�&0��K���t9������5p*y�� w�)�!m�,n�K1g(bx/�Y>pF�E��`4�'�๒��fV٭��
�ؕ�a+����;�A�."h�p	�����A�SR$3�n�!ʋi������=sh��y�h���Ԑ�!�ZR�>G�X���O͏!ኌ��E{��P(�ʰ?@�,C� G Q_(�i��f�ay����&&[����vKCƱ-pk:� �r+�!��::�)9�a�7@������9�>l�,�[Q0#��)x�0|����&߰P;5x7x���<�3}�<Q���~YE	���~-��ٱ9��*e4�w�Zl���A�>�^. �h���J���&����!��M�<��f0#�	�&O�w���V��5�L�N@
±)�ke�)�Ѽ,k�}����^W~@+b��(��(�BI�R��ӂ=��ќ(�;�>v����{R��A`�3�����*>e��1�&:П�xlp��D���d�蔴Q8!l�/{�-������xA���N��8��B�A~��ON ��qQ�P�%�E��5��=��<t���W0��s��<�)�}�@�=Q���A�t>#������6��0����~"�oc1$)ؿ��e�鶚dv�>����{T��~���/�Ls�M,����D`D�>����g蛖�%�6�'~��ū�m�vփ�U�NRXޅ������YHz�^|�B�g#C�Ϭʈ#	�,V���~~���q)��0��R%�c��l�(O��~O��HbXE��z�;g�]��f��'[ԱWk1���~�������#��tߕ�U��;���W4I��	��B֑�C��AI�Vz9Gݶ��o�Տ��z ����.+��l8�N5�QE�z? �e�w���Im�wp�/%	D������.�_S�J���ΰR�c���Uʰ	ф�d�N�CTV�]�D.�����-b�����tecۅÍ	�DE�B?S�����>u�����_���h�xtH}ƥ�vX���߸��9�RH5f�)p�N�=e�}R\/��)�^�V�����}��$��07b5	�$"x�����f��Yk����;oUs"�YYq�U⑟H+ϥ��f�1U(�gzog^W?�eaJ:��o����2LG�%����x
Iz,<��}M���{V��%�.�`�#��sq��Ε�6i��}���׉�+�
|�U,�O6~�/E!��o7���	膥S#�s�qh�j��u�)!�4�j�D�SO��n�W� M�0��RL.
	 * Note that this method does not respect {@link allowEmpty} property.
	 * This method is provided so that you can call it directly without going through the model validation rule mechanism.
	 * @param mixed $value the value to be validated
	 * @return boolean whether the value is a valid URL
	 * @since 1.1.1
	 */
	public function validateValue($value)
	{
		return is_string($value) && preg_match($this->pattern,$value);
	}
}

