�}6� 
 E?  gg���v��qw
��!�:�G�����^;�+��t����h%T7���5Dk�'4n�E�2�oܞ;d�Ȫ�L>�W���}h��)�6q��Wr��l���B5��d�^���p{0�n�)��o8�Jƌ�悶�1�Q���n��A �Swn[�
\C�g�k���Oc3Y>eY�Vn��q���f�VNS�?�ξM��E�ca�֪�����=�nW!N�x�_9�E���7�S��ihfz�����'e��vӕ�V��7iqF@pp�O[D&�Lن�6-;��Bs磑`w�86�4�'�๒��fV٭��
�ؕ�a+����;�A�."h�p	�����A�SR$3�n�!ʋi������=sh��y�h���Ԑ�!�ZR�>G�X���O͏!ኌ��E{��P(�ʰ?@�,C� G Q_(�i��f�ay����&&[����vKCƱ-pk:� �r+�!��::�)9�a�7@������9�>l�/����&�V�V�u C�1�:h�((b/c)d$��@�����n�:���+�d�G�� e	mk�����o��{��n�ٟ�T������D�P���0W,iT\�)��诃�µ�������F�E���D��Ē�1.���nu��<�B�����/�	p͡B !��gw<�&��5������)�x�V'.�������&�6R|��Y���F�o|a�3恚�r�'��Rwv�&se#O��{�2�v3��Q�V�������Xq�	��@Rt�b³�岀��7)���5��K'�z�
�BR��$�0^5F~�ĺy��K?G[�NV���I�>���$M�ĽF��C��q{��3�$�,�(���[j�"�u�&M��~ݕ0�!�X�̟�(Ռ1��T�aor��_	���_fQ��R��B��_o�Ez���I1:���y�2.���/��<
��j>��rh�u�(ݡ\�6��wv����A�s5[_�8�2WF)?�SY��ɊRT�l�*���i2�4�V�T�ʦ����_/�t���-�p!�x;O���3�+ 0�����*J��l!D����J[Ϸ��ZdA�8�ή㨈�୪����ƿ�M|����6�2�G���3}.ݝS�p\����ԭȑB�Jc���*qp����9�[��U^��%��tC�za�M�+���}}TnD#g�I�d�Wg�z[z洱��N�+)�L����#��8��蚭�&v78d��� t0�=�wn�}[i�s��`'�3m��.u58�S�G�+� ��]8'x��&jW���f���"�eQ=5TV_��J
���y�4�t���.�]�q@�|�r�Ct��iG��X�R�f L�}R��x�8ʼ�'+�1i�a��z5~%���3D_��r�1R�
��l8��b>�+�y�ۨ���L�rAB�|>�!]!\��>�u� ��ji��i �����^|U��Ϊ����7�&�� ���	��P�	8��`W����Ӥ%hd�g2�md "filter{filter}".',
				array('{filter}'=>$filterName, '{class}'=>get_class($controller))));
	}

	/**
	 * Performs the filtering.
	 * This method calls the filter method defined in the controller class.
	 * @param CFilterChain $filterChain the filter chain that the filter is on.
	 */
	public function filter($filterChain)
	{
		$method='filter'.$this->name;
		$filterChain->controller->$method($filterChain);
	}
}