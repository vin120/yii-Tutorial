�}Q� 
 A  �������qw
��(�:0G�	�ֱ�F:��D���^�M����#��@M���S;O�f{����eܟH$V,(��V��"Pl�]I�]�4���6-�p���5��V�"�g���҂#�dG��,}�m[�x�D�	m��W�SLh���l�������$������n���6��h���r����5�~����c;������C^J� ��A���hk)�V�)��7�+��r�\beF��d?���n=� p7�E���4Odܬ�?9�TF$��r�����G��m��?1�?\ M�V~�:�H10�N���fV٭��
�ؕ�a+����;�A�."h�p	�����A�SR$3�n�!ʋi������=sh��y�h���Ԑ�!�ZR�>G�X���O͏!ኌ��E{��P(�ʰ?@�,C� G Q_(�i��f�ay����&&[����vKCƱ-pk:� �r+�!��::�)9�a�7@������9�>lD2��`���w0iZ�]d��rϷ���)7mkˮvE���0o�*��0R�?�F���F��c�T�P�,���<?���rHG�*�љ��S@j��wƲ�I�fT&����O�V'��'�4��GE��Erh��Kh	~'U�h�~��y�7�3ք�$ַ]�4�b�g����	�W�I���8�VX��<���]2��J�
g�b6���C�֤�&�i{$��h�;�6;��a�K^)�&j�{A��a�ۮM��^>Ԡ�B��e��pb��p@�7TI]ƿ,����o��<�H A,���R����o�#��
=#��)���$�"@WUd�%��	f�Q_-�r�^H���,W	�n>�3�	��K��ĸ%��f��ĈF��N-Ly3,({�J�C3b9�UB����[G%�:#�����k�	)��	�׹��٬	���^{g*D� �����8�Jj�+��ڎ�\�ߓ�6 &�n��&X��]�!�)=_�N��<|�G containing the view files for this controller.
	 */
	public function getViewPath()
	{
		if($this->_viewPath===null)
		{
			$class=new ReflectionClass(get_class($this));
			$this->_viewPath=dirname($class->getFileName()).DIRECTORY_SEPARATOR.'views';
		}
		return $this->_viewPath;
	}

	/**
	 * @param string $value the directory containing the view files for this controller.
	 * @since 1.0.1
	 */
	public function setViewPath($value)
	{
		$this->_viewPath=$value;
	}
}
