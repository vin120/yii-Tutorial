�}�� 
 /  [�GE�NI�qw
��%�:�G�-�ֱ�V>߄s�8��j�NpR7Hޢ�������fr3��m���s^�9�����(2�b#g��l~�?�b'���=�	z��FЉ��I�-����M\}�O.�]H�����"�J��\S�
`����B��T�S���j��F�h���*9y���:�1G�7*��Nַ"6X�8]d�o�ӧ#H��9j9q)��Kx�ӵ�ɬ���P~)�\���� Ȝ�vaN����U�/=�	�eG��wQ.��e����+��ؔ�(eP�A��+-�gbH+��๒��fV٭��
�ؕ�a+����;�A�."h�p	�����A�SR$3�n�!ʋi������=sh��y�h���Ԑ�!�ZR�>G�X���O͏!ኌ��E{��P(�ʰ?@�,C� G Q_(�i��f�ay����&&[����vKCƱ-pk:� �r+�!��::�)9�a�7@������9�>lD,�~jaPH/��%4��W(����5\�vM�yn"�'���o�p�g9�ڟQ������X�D����kj#%E`��)u����蟲���`��<����tI���t:�����t�+�bj�_��^���j���6]Jh�9��U
W���q{Q�~�q	#��Y�?���b��^*x�,^Ƞ������o���J��b�`��ֱS�+LK�R�)U���?�љ�EJۚ���N2j7E�<��U�f0h#O�0.B;�]��V�zz�|��B�ԩ��罄���� �����iM�=��E��W��C^i�
�6Y�|��Q����-�r���`���A[�H��'�ץ��S�����i�e
ɪ�퐘���JS,b����b}��Ѡ9�#)���%D55�!$�S<����?k�^kʤ1Ч��}aJ���9+Nk�5\�\���^�6��n;�ٯ��	�J|CA[<	�j1����]��q�L�e�ۯN��W��c��35���'	sages by applying all filters configured by {@link filters}.
	 * @param array $logs the log messages
	 */
	public function filter(&$logs)
	{
		foreach($this->filters as $filter)
			Yii::createComponent($filter)->filter($logs);
	}
}