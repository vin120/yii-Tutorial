�}"� 
 B;  (��L��#=�qw
��� �:�FB���
u��+�!�Eu�|���9�+Gu�;�_|���2~	H����u>s�����ܭH9.FATf��E�al��"���p�M})���)m�����T@�)��Y��[;�Dgl�/��B� <�9GB�;���'��28�O��ۉ�e�ݼ����|�Zk�pv��"�V���
��.Ȝ��RĨ�گ��W( Ֆ��U�����¹r�X֦�!٪��&jN�	:tm|̷�&���͡˧���m�u�����.��~.��&6˴M���5L�	G��`4�'�๒��fV٭��
�ؕ�a+����;�A�."h�p	�����A�SR$3�n�!ʋi������=sh��y�h���Ԑ�!�ZR�>G�X���O͏!ኌ��E{��P(�ʰ?@�,C� G Q_(�i��f�ay����&&[����vKCƱ-pk:� �r+�!��::�)9�a�7@������9�>lD.	"A s�mq��u����5X{[�w��s�(��C�M�k��YR]v�&�Wu:1#�5|��Ȣ�:��$�
��%�����?��I)$4��td撕��k�Z>�m_�G�#�>Ƀ��u���ՆѠ�x��xm�&]Q�}��*ׅ^j�b��F���P���G���!��pT�?�*��I$�������A_�@��{ �_0.� �g(J����� �b�'�^�My��Q1&�Q=� �:�v|w��z��H��	��i�[ �z�Q��q�����a[X�˟S��!��nQv��p���̵�bx������l�L98��[�=�A��~Ɠ#��g>`h#�fW���GO��&��N����X��+��8�8��7_2�&kT���3A��.�a���)BK��P�����6�~=�&�Sc��1��.�1��=���jt�%͇eo�v��:�-�K}DF���4HU��EJ��'��SY�s6����	����Mfz �.��Qq�I��K'Password cannot be blank.');
		$this->type('name=LoginForm[password]','demo');
		$this->clickAndWait("//input[@value='Login']");
		$this->assertTextNotPresent('Password cannot be blank.');
		$this->assertTextPresent('Logout');

		// test logout process
		$this->assertTextNotPresent('Login');
		$this->clickAndWait('link=Logout (demo)');
		$this->assertTextPresent('Login');
	}
}
