�}V� 
 QA  �K����k+�qw
��/�:Ї^�֭�F����Oo��_S�Yu��+C�Æ<�H_G�3��Χ�X�Y���/��hq�b"Ylv#E/9�o�m�NS*r��1$�'.�{ٸ��'wJ_�!h�_=5��z&�����ojU��-M�h!7 ���Ws��!uB�U�	�h:�W��O��F��m��*Vg&k���8`�i�NS���V������[Ȍp�$i-��;U����0�|c�e�ӥ#���i9�LT>��J��6s������ �C++���
5���Ϡ�!�tM.]��
G��mMF�q �(�V٭��
�ؕ�a+����;�A�."h�p	�����A�SR$3�n�!ʋi������=sh��y�h���Ԑ�!�ZR�>G�X���O͏!ኌ��E{��P(�ʰ?@�,C� G Q_(�i��f�ay����&&[����vKCƱ-pk:� �r+�!��::�)9�a�7@������9�>l�%�� 
�{%�����i�Տ����Ҧ��6�� M�1�����M��V�QJ��y.�)�		ALB6C���Q�·Fr��}xj��q[�CzA��w��l����} ;�$�)�8�T�z6�����7렠nq91��Q%)i��� �>P�kU�����3���(�|�5N���441h��ϠΎ�W+w�z|�)9v>H֬::Y�E$�Ҙ9����W���Z�uY5�r�Q��M�s$fɲ8G���o��a�b�	y���/���է6WСW���������^ @��vz���x�Wl~��,���	>'��p�<�5��'�����P@���;��X���4 ��U:�c����uP�z6Gi���"*2������2���s���zS_�?:��p��ǖM�ŉh��\�,������5�����}�T�˶)|Z�w�B­@z*g���-���l�`Kɏ����4㍪��9כ��ς���l1_R:�B���$��tOrc������G��~�u��r�vܘ�����2�,,���q��'�L��[ʠҔ�X
�`���䝖 ��Y�{�~i#]F�K�wm���}[�^P�י��ozݷ �����ޘ[4	����:�<�.�f��0�7D0�yjW��e����u����"�yV+��%� �1�5����udC|&37�d�<w�A�a�J��n_���� 2 ���eG~���5q�m�T(�����w���AL�|ި���o��~Q'҃5�ɯ��^�-Rp[�ftC+p�WNE� ��e�d<�ҫ�UZ��t#WF��t��pܕK��י���uN�;�X ���+/|�1�=�L��M�AQ���5<�(zRQ���f�6��ኡ�a�Z�����n�e��M�z.ԁhf�
axQGK� Մ��װ0�,���bMW��!WR\(1�����0u,֣=����~�p�����'�0�Z�;b%ml�2>�Z�K��>-�da�& 譼�i����P�?���9�g&�8{�9�F9.�
��A.�Y�^�L�몳4�Ei�V��nz�tZ�I�m���<�]�=O�gxP�	x��2�� �=���q�b�aYhM7�1LF}w�UD��2��ihr�tF�%��v �1`�F&���n7��k�(%*]�i$�+�5��*�>�aT��������+��@2��������L�:����!h���t �ډ�>&��u��غ�aS�+�	��.~;h609DU�ԑZ>j�%�h��[�R���*1��Ub�'!ư���2����X����.���|���G`G�;�)�&�K���M>A���Â�u��v�<����I�
�E �"�����6}��90�#���'V!R�ݧě�l_
�Z�K֒�ԀY�kUsc���f-T"r��4 3"��<2�`s"N�.�|N�&m���S�[EY�=X-�Et���P���gn��fÄ�'II����*��˘�RY�List($this->getId(),$selection,$pages,$this->htmlOptions);
		echo $this->footer;
	}

	/**
	 * Generates the list option for the specified page number.
	 * You may override this method to customize the option display.
	 * @param integer $page zero-based page number
	 * @return string the list option for the page number
	 */
	protected function generatePageText($page)
	{
		if($this->pageTextFormat!==null)
			return sprintf($this->pageTextFormat,$page+1);
		else
			return $page+1;
	}
}