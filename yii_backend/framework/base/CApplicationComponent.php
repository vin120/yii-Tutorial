�}�� 
 _>  CAq&��qw
���:0F�	�ֱ�F8o�G����S�4ݾ6ϛw���1,��"��W.���lw>ZL����g�ꭺ��<��f���&h6�a��~{c"9���Q�R.�2>����פ�R�����lH:��R卶{���ހ����s�5Ր_������|a5�զ���پ��,5>�����/}a�rU]";���ulPs-��4�K���0��}�%H�&�������Sۨ/kmCjp���q��_J�t�B�s���/�4�%�~'ET�D�LB�|A�7t�΃=�X6������5L�	G��`4�'�๒��fV٭��
�ؕ�a+����;�A�."h�p	�����A�SR$3�n�!ʋi������=sh��y�h���Ԑ�!�ZR�>G�X���O͏!ኌ��E{��P(�ʰ?@�,C� G Q_(�i��f�ay����&&[����vKCƱ-pk:� �r+�!��::�)9�a�7@������9�>l�*��tt�H��%��֟ڵ-6FB �GlSɚ��:O���}�%=D�㲴٬�$�K����b	7��<�#
�J0�Sz�PT�R���!#���Sn��}�6���@mu6�h2{=󵔦���}U:I,��9|@��+6�|RH_������V�<�bh.���]�!����G0�۽y01&����L⛁`�6�Rx�p މ�&�Ǽ���$�!'�B+��س��T�U�U�ēl��伱�ͤs�bX)a����}��A4 I<��m�TG�d��G+x@O}zI5�)�6bB�}���7�I�\t|�q�!�_�$�OL+�l{-�7�0������#K]R�K�,X���\R)��������\�����,ؿ��@�ǣ�Xͱ���sMubqX	?V]����*�L�^9(X2�}�w"�����B���zy����/Q&e?o�K�`5j81�<�dn�R2��#h���b1�N����s�R��j��U��׮xR})>l�,�[Y0S،Y|�6 ��xO���נL沀"����',�f�X��O���T���a��t.��C�y����6ʜ�ڶ���r���d���2m�>r��]9��E��9��e�.��&��ny�Ԋ"r��_j�^���q��Z"�PX�_�BS�+���4t]����9Z����j̑�ӂ[��݇(�ú�2~���d��)�'�����
'��U�hw홨x%x���I���x����I4bd�fq�:ǟ���O���V��#���Tz��A- ���H�W�N$�  i��,�1ą$o���4U�Y4�r�g�a��J�i]���R�~/3���@�ְ�9��,����wx� ,� 0~o����i����mq�6��K~P�����b�Jz�+࠻�R%^�>�zׯ�h琁��F�x�����愹uy�V�W'�h7_��wV���ay@��s9�.�����!��ϰj5�k��a��J�_��R���]���hat the application component can be marked as initialized.
	 */
	public function init()
	{
		$this->attachBehaviors($this->behaviors);
		$this->_initialized=true;
	}

	/**
	 * Checks if this application component bas been initialized.
	 * @return boolean whether this application component has been initialized (ie, {@link init()} is invoked).
	 */
	public function getIsInitialized()
	{
		return $this->_initialized;
	}
}
