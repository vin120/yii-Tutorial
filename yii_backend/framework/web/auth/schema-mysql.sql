�}k� 
 �>  ��� �s|�qw
���:�����LQ1rҟ��m�V[-9R��p����F���3R�0{�KQ�Vuv	�5�ӵ�Ϝ�~S^�.�;{�u�Mю�T�r}X��j���4Q5��M�F�;`PR4��\jF�>�����*��R	����I����u	��$x�N���sR��4��VRp��t��� C�6�D��׬ėPO���։�5�DT��p	���,7�o�;�����U(�	]�1D䂯/$e����S�1��`L >�%Z�< ���b$h!�ňykh928��`����}�G��`4�'�๒��fV٭��
�ؕ�a+����;�A�."h�p	�����A�SR$3�n�!ʋi������=sh��y�h���Ԑ�!�ZR�>G�X���O͏!ኌ��E{��P(�ʰ?@�,C� G Q_(�i��f�ay����&&[����vKCƱ-pk:� �r+�!��::�)9�a�7@������9�>lD#�XM��U��!�^g��	�j� )�xzM��ũ� Db�~�!�"�re��?���=���\m��Zbvslq$�+H7�,V%���l���!��+�4��v�#�9k%6���ȬUU����h���<��=Ü��/a=Ӳ�{�wܲ����\/=��4$��\�� ��m�بS���X��y=�y�p|\Q \��*ў�zϜ[�Fey�9W.Oy}�0�C]�#�t���'�)@�]�ۢƩ�'H�p@�80J��5T�b5d�؉�Oi#X��M\
Rٱ��Q�t�?�
��#���k	�����咙Oh5�积��- ajc�$	�P��t���H[��O��E��ʽl*�I���|������K\T_��GG�hT2\d`��&����߀f�@�[3ӄ�t'�����9���y/��P�"�_T>�@���N��[��q2��"˝������,N)Z�]�ef�)D�
�	J�,��w�� �X�oszJ      varchar(64) not null,
   `userid`               varchar(64) not null,
   `bizrule`              text,
   `data`                 text,
   primary key (`itemname`,`userid`),
   foreign key (`itemname`) references `AuthItem` (`name`) on delete cascade on update cascade
) engine InnoDB;
