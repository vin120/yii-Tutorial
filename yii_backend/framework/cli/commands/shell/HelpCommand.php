�}a� 
 �9  ����U�׃qw
���:�F"����J:���/7���3;p���V)�b�_r[ݯ�Ƨ=~�8�J�b�h񤇍(���<vIhN������	nh�gp�m��
�T�<��ʯ��̄�J^�u�_��<�J}����@o=h���77YJy�P�q��X�AC\|Tә7`<w٢���YG��\�pƽ�	��{nW<��t�kc�Ҭ�����
�A#�^�\���B<�}
p��d3v�T��Q��X�9t��)�/߲� O�y��$@���Qw���~.��&6˴M���5L�	G��`4�'�๒��fV٭��
�ؕ�a+����;�A�."h�p	�����A�SR$3�n�!ʋi������=sh��y�h���Ԑ�!�ZR�>G�X���O͏!ኌ��E{��P(�ʰ?@�,C� G Q_(�i��f�ay����&&[����vKCƱ-pk:� �r+�!��::�)9�a�7@������9�>l�.�	j!N�;�TG��I����7��Im�h~�0@�S�loL��ޣ�����Ɖ���%�wmB��Xаf=#����k�uN�|�H�@�h��U	k�37`{�gi�k�U���C��$Dt�↚5&�fc��ưC�r�n-���ӭ?bT�C��v�%�jL���z˵䓸���y �(���5U���&�&���`�P�C�3#i�"�0r�1� ��\ �}8�.}�+��rA�C������b�-��+�����"0Q�E�D|#;[5�n����0g��v���k�6V��W�Zl��i� ����K��m��Y�h85��)���q�����k�d�K_�@m[J

O������d|C�੉��7�ȺT$�UGc�YI�C�c^�M��]}I����D?V�p�(pL�O��\�HM�>��	ݵ�U��8�m�� �"�'\����^TS�횶��O�T�|3�vz��g�.-$�7v����	�7���x��/%�L���}��y\��စ�յ���fl�+�AZ����ѕa6��Gish����KsϮ4F��;���|�|u��GH�p(A�9�Lym{>_Lh�l�GZ�O�w7P�-����1�D$���.���K��w�Y�
RO|��cdj����V��
��'k���~;�v������k\'� ���%A��Pp�؃O�\�S���-&��e3��_�3Q_�q��������,�����Wx��B/�ݽ���I�=W+U�þm���D��du�ytK��v;���ݻ�#Pz��Ɂ���h6����Ю���<�����4*��e�B)g�6}e����f�����#ZX�
Qw�!�yW�ݢj���/��������eP���Cc�\����Y<��h�gx3�"%T^���{o�q�0bߢ�K��80ѮcԻN��O�׎��3�����N&���`��GɯR?�'F��#�.��fU���JG��Dy��?!�d`��k�?�H9$�Yx8q��kxϾ��,���|��* @return string the command description.
	 */
	public function getHelp()
	{
		return <<<EOD
USAGE
  help [command-name]

DESCRIPTION
  Display the help information for the specified command.
  If the command name is not given, all commands will be listed.

PARAMETERS
 * command-name: optional, the name of the command to show help information.

EOD;
	}
}