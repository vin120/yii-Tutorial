�}�� 
 �/   ��ˈlW�qw
��)�:�G.�ֱ�F�IU��냇n����g�.#��'�J�-��T�\!T��z��,���oxk��Ʉ��O�K�����>�'ͼ���} b ���+����$�P"^g1d������W#�����Hu���ⲯ	\�@l�'!R��h����K�'g�_����)�W�W�	Az��]�>vZ8�G�po��;W�]��:�xE�?e�_M�YS&w��~�F��+��=�"��ه{���8�.^��:�F�+�t�irVNs��)���n��*��7Ͱ��(�$��C��;���fV٭��
�ؕ�a+����;�A�."h�p	�����A�SR$3�n�!ʋi������=sh��y�h���Ԑ�!�ZR�>G�X���O͏!ኌ��E{��P(�ʰ?@�,C� G Q_(�i��f�ay����&&[����vKCƱ-pk:� �r+�!��::�)9�a�7@������9�>l�)��\��2�l�n� ��/ZI!������.��1e��E	�Yֿ1e��t����9��h���=�������L߲d��b����LzdR�I�r��(�Xp�Q����Q�<�˻D�,�V����ZxH1D�fa(�fH��Z��d�Lbm^������,b��?������@���)��YۤC�d�D� ��ʌ.~���c��	�΅�oP;���]Ml��=��UG��og5~Y�(��v�][�>�%~� ��x�c{8?�w<��u���ѣ�E�b��d,�B<b �Sbh�Br�^u�V0P8*N�Ȑ���>�:�:	bwu"�L� ���� Q&�2����ęo}	zn"������5s@�B�2��2�� �~,s���b�䣪�
�&$�3͋;��%K�,z��R�ˣ�͇U�_d��	^��LՓ�Q|�☐R�oQj6w9�`E<é�����;���D�T5.|������~�m�,��H�� �$ߊ���ޏ��Ml�+�AX����ѕa2�
���1�2���$c/J��b���ϡ�(!�k/"�x$��
a�npZ��7(+�����O�@��d���+Q���~�?뮜���e@5z�J��J?�c�J�Jb����K� ��~�2gI���J��Rx�L ������B�#��H��..1�W�=�S���-*��|w��`M�v��������������O;��F������(e�\{y|������cɧ%d�}t[��~wD��٥�'8�����͑i,�<��������a��O���[}4�Y�/�bi�6o)����+��ڲ�Of7�\4x�*�qJ~���f�閊)����B��R A���I|�D��D[��Gw��7�pm*~N�i`'���LX�>�e���h\��5j��"�����J��K�����2�����X�@֒t½��AC"V�b��~����޺���/�sA"/g�)q{�0��S���n��!�'��O���2@m[�0
��8���P�(false))===null)
		{
			if(isset($this->htmlOptions['id']))
				$id=$this->htmlOptions['id'];
			else
				$id=CHtml::getIdByName($name);
		}

		return array($name,$id);
	}

	/**
	 * @return boolean whether this widget is associated with a data model.
	 */
	protected function hasModel()
	{
		return $this->model instanceof CModel && $this->attribute!==null;
	}
}
