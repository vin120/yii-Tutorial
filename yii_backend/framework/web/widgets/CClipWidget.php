�}^� 
 �A  .x���$d�qw
��2�:0�^�֭�^����C�px�b�~*�����c����Lӵ7n�GM.Q���ZyV������wc�f��;�./�����x�ERI?$̑0�C��NgТx����o@�,y��i��>���M]�^30�С	:y$_z�x犰R�2�V��£OB�:"��ș���zg~z�2�@��(��y��ͫ��A9�b�Mmˋy�6$�I�U��̓�!��6�aWfp�y�@��)w������_%L:�_���	��NdL,��P*b5Z��	�i,}�hD����T��{�����p��
�ؕ�a+����;�A�."h�p	�����A�SR$3�n�!ʋi������=sh��y�h���Ԑ�!�ZR�>G�X���O͏!ኌ��E{��P(�ʰ?@�,C� G Q_(�i��f�ay����&&[����vKCƱ-pk:� �r+�!��::�)9�a�7@������9�>l�0��ׄ�@k`��ɏ���%��w�(<6{��x�OY��EZ���[�B���U&R��[���E�m $&pm�Z��Z�eB9v��,�ڝ��IW ��h�47E�RS�A���P�g���*<u�8��2��/����G�,��I?�-/I�U�ШA[ ��
��_B) O��Wh��'�q���>���z��D�
k�������ǝ}�9��Ş�`���殇w����=���Vm�7A�e�8=�Ϩ_H-"��u����ۥ�i�J$W��Iy����^޽!���ecK�G��1� m��F��+�2k^��JnMM��kɰ�F��Z�P���C�F�a}|�(8荒��Z����6��P��*��Գ.`�$2v���9��k/��1��D��V�S���B�&sy6up��Gh�:^D�`
=�.A9��0ȓg�䎥�6)��M�s߆��-~�x��qL1��8�LK�O[`n!f&`�����%<�pb�~���}���-�	ob_start();
		ob_implicit_flush(false);
	}

	/**
	 * Ends recording a clip.
	 * This method stops output buffering and saves the rendering result as a named clip in the controller.
	 */
	public function run()
	{
		$clip=ob_get_clean();
		if($this->renderClip)
			echo $clip;
		$this->getController()->getClips()->add($this->getId(),$clip);
	}
}