�}� 
 ?  ѝ��r�qw
���:�����LQ1r���A���1Y�xU���ʫ����l\1����?o�s%�>I8�}������fBHw��NX�~�;/q�"fw�ɒ_Z�%�����,N���QW� Dy�o�-%\z�lI�I�s[�S�ko��.ƝJ�uh���b\vE70�V4R�� Sc�\���=�O���0��	�V� i� �HRea߰�3CÒ�ώԭb��;@Gi�CP�}���UPi���4J�&����o+ڞY�հ����M҃��F12��?H.�×���`4�'�๒��fV٭��
�ؕ�a+����;�A�."h�p	�����A�SR$3�n�!ʋi������=sh��y�h���Ԑ�!�ZR�>G�X���O͏!ኌ��E{��P(�ʰ?@�,C� G Q_(�i��f�ay����&&[����vKCƱ-pk:� �r+�!��::�)9�a�7@������9�>l#��:����Q�b��쑼���ޅ�2���kP�)v��l�'���/=*\m�"_f�ޖ�N����/y��'�Ao#�n۠�|=�aƵU˟%��1��.mF_l�N4����]g�3p�1��Y��m$��0l?ڃ�o�}��z	y�gT�tLi�~Q����)OF�|���D�#>9؀��*%�r�7�OG;b� %R	�{��* `xO5JceG�MW}��A��)B閚�0Q�0�E >�:T�SV�U��[v[���S�
�����a�dP3��HD_�'�cq�ֹI�2�J��T��}��-'��#]u�$�s0�A�p�+��w��՘�E��q����h�ڜm�������:E��6�Y[�(�a�{�b!j��0�}YӍ;Prs���'����+�|�x���b+�Gع��̋�~���|������g#P'�0#P�Rp@9ڊ��=��.��]����E~��͎.Jq��R��3�j���.(�7l��:�[���   "userid"               varchar(64) not null,
   "bizrule"              text,
   "data"                 text,
   primary key ("itemname","userid"),
   foreign key ("itemname") references 'AuthItem' ("name") on delete cascade on update cascade
);
