�}$� 
 ?  �R��F�3�qw
���:�����LQ1rҟ��m�V[-9R��p��'��.�=r�m�{�N�~ϰe	�y�zfEm�+u���V�XR�4��/�Dً��)�X ��ӆ:aF�.�c�3�����X6�0�óA(�΁�{��@^��5��G��#��w��16]��8�I~墁�j�'i��^BD�6@B��X�� FDL2���Hin�0|o�����Ԗ�Q���4���) ���\|Ε�<Y?8ј��_�eM��1̝]����|��KZ=W���`4�'�๒��fV٭��
�ؕ�a+����;�A�."h�p	�����A�SR$3�n�!ʋi������=sh��y�h���Ԑ�!�ZR�>G�X���O͏!ኌ��E{��P(�ʰ?@�,C� G Q_(�i��f�ay����&&[����vKCƱ-pk:� �r+�!��::�)9�a�7@������9�>l#��:��l�Q��L�@��Zv���$���u�{x����gy:&0�p�Y��)������	���'�������p�kSJ>b��腖�k��Yo�v`d]�J�k�f!0�D4��Y�u��(M�K����*[�H�o�}��	y�gT�Li�~Q��ۂ)OF�|�̳D�w#>9����*%�r�7�OG;b� %R	�{��* `xO5JceG�MW}��A��)B閚�0Q�I�E >�:T�SV�U��[
[���S�
ԫ��a�P3��HD_�'�cq�ֹI�2�J��T��}��-'��#]u�$�s0�A�p�+��nw��՘�E��q����h�ڜ�������:E��6�Y[�(�a�{�b!j��0�}YӍ;Prs���'����+�|�x���b+�Gع��̋�~���|������g#P'�0#P�Rp@9ڊ��=��.��]����E~��͎.Jq��R��3�j���.(�7l��:�[���   [userid]               varchar(64) not null,
   [bizrule]              text,
   [data]                 text,
   primary key ([itemname],[userid]),
   foreign key ([itemname]) references [AuthItem] ([name]) on delete cascade on update cascade
);
