�}n� 
 B  P�����ȃqw
��$�:؇.�ֱ�Jӻx%K^�-b4ݾ1E�_�=(GX<��K5^^��7b]���
/^٦	��,����V��@�I��Y��|j�.d�@�?I���R9w	�ʑ�)�6�Y�����P�wث����f'I�:��op��	q�~�@�Bu}^�΃s[AF�L�U�?aO�����eD��x�	��O���mt�a�e&��7�5=��3Z�@���'I��[f��[�K���#nv]��)���ˬ��4`E+��9�~��+�*5f��#�z
|F�4��6P�-�wy���t��๒��fV٭��
�ؕ�a+����;�A�."h�p	�����A�SR$3�n�!ʋi������=sh��y�h���Ԑ�!�ZR�>G�X���O͏!ኌ��E{��P(�ʰ?@�,C� G Q_(�i��f�ay����&&[����vKCƱ-pk:� �r+�!��::�)9�a�7@������9�>l2�t�.'�"{Q)5��WD������X��}�ԫ"%}�ǟO���$XƀD�!"H�1�ԅNO�����z �I��!c�1��!��	�݋u���t��f����Gs`KP%�3�����T�%sn���`����R#�����3`�j��L��i�!8Ȏ���X^ ��,ߔ��Y:�YiQ��8zڡ[UU�\�0���$�?�NB��7M�#~�#7=�E��rY"���ak�,tھ�X�
�VI���eg#��)���������W�ٯA�S8%\ѨtxG��I�i6fE��۠F)?�=��A��+ir욃p��������t�ӱ�jf����O��y���n,gB��޶R8� ���X^ݣ������q�s�ԇ��َ�_�z�%���X�c�,6�z�'���H`T�g�v$�u����g���o�^�W�=Ď	�@��σ�4 �4�t��$�[��:b�J�����!�?��7��[HG&�/>~}�He,zception If the index specified exceeds the bound,
	 * the map is read-only or the element is not of the expected type.
	 */
	public function add($index,$item)
	{
		if($item instanceof $this->_type)
			parent::add($index,$item);
		else
			throw new CException(Yii::t('yii','CTypedMap<{type}> can only hold objects of {type} class.',
				array('{type}'=>$this->_type)));
	}
}
