�}�� 
  ?  �C��NE
e�qw
���:�����LQ1r�s����%�e�5>��3�㝈oAK� ?��_[�LC maЃ�#1�S�a��`G�GJ� �w�����+��ի�r.�B,�Xj�.��3�(�E�D+׏ݾm�Uy��F��{z��;r��>,�^�eu�j���F�d���z ��@q;r�̿���&++�VVW�+��DA5��u?�򉆒�;g�*�~��4�H���=㇊cGd��G�Ĭy�r��q��jH����ye	�tJQb@#�!{�5x�j�qǊ/���ez��yA�G��`4�'�๒��fV٭��
�ؕ�a+����;�A�."h�p	�����A�SR$3�n�!ʋi������=sh��y�h���Ԑ�!�ZR�>G�X���O͏!ኌ��E{��P(�ʰ?@�,C� G Q_(�i��f�ay����&&[����vKCƱ-pk:� �r+�!��::�)9�a�7@������9�>l�"+|�յ67�Mѩ'�EU+k*��]�7��&t����y��vr,�z4Mw�3_\���\#��(s-��,�}�l����Q�d��Q׮g1���KC�UO���U��;�^�{���s�r��M �>�?eR�D�2�y:���G�[�������F��L��t1uN�C��������NƸ.��g�@~�Y�!�#z��zQ�R�5�x^�������9o�����D���?����ԓ%��O�f�R�l��s'�[��;:O
�y�w����^�0�ٰy�X����(���3şX�4�� �j��%����:�®T���%�?ELU�PT�����7�:rFcf��	�5g3��E4�K�N7Ƃ`e�{�R��P2�ˍxm��,L�B=�߽H�B�y�Q@�Vʗ�r��JᕻcZ�Fet�Lq�N��Iߤ��[��G
�����]�0���I��',�#/�Gc�黼Ř�i��,��O�u�6��@*�t�4��^c�5�   "userid"               varchar(64) not null,
   "bizrule"              text,
   "data"                 text,
   primary key ("itemname","userid"),
   foreign key ("itemname") references "AuthItem" ("name") on delete cascade on update cascade
);
