�}�� 
   �;�_����qw
��C�:(GT,�ֱ	F8��O�'+�c���Tw�vh?�oR~�e�u�tb�
�ߔIy�u̒)�w+�l*!Ҧ�T��j�Q/\ ��M��jF�!�^�&�pǮx�䇄�HlZ9?�~�l�c�Ɍ�F|`R=͏̵rw�2a�֙" �ل+��L2L�yrH�b2|�:���1m�<)J}�V�n���n,���ul���i�������>�VBUzR�i�.?�M� �^DDku�h�DqQ�8�'�A'�%X:�V��ĥo��D<o��!1��2�����[W�IWh�M9e�h-G�X����X.t�t2u7�3)���r�~| 9� ���_��."h�p	�����A�SR$3�n�!ʋi������=sh��y�h���Ԑ�!�ZR�>G�X���O͏!ኌ��E{��P(�ʰ?@�,C� G Q_(�i��f�ay����&&[����vKCƱ-pk:� �r+�!��::�)9�a�7@������9�>l5*��Jq�Z�o�)�LH~����f@Yf�#��� ����צ�Q����.����V�%M2=Kc���-Yx���o��j�@�?N��2�W9�HM.L>���L4���V��ʳt��A�K��/�~|f�+N�Nb�
O\ژ��E���Xԫn�^�7��sZx��)I�=-|D�*[�bj:���<&ң/FΆ��McG�\��@�%X��ͱ��/��mÝT�q�R���$Yn'	�H����5bV.?����
�1�����K���S}���͍���u/�Kn��*o�KwN��f����/�4�bvQa�hﰴ΢gKU%Ό.YM����i�hQ�F���ǰ��O_�୫�aD)���ų|l�ݭ�\%��%� �Pc�U0�_fb��( � ,y�e~fI��rs��uz�[݅�jp�̏��{&�I�G!��p�a\��5��-I�:����;��Ks��c&֠*p�)>��8蠀2R�l�zhf�˯8���Ol-�K=�l�+�+���Z�9s��.�%ɔ���	�F�X�Q�w�:yN*V�&�8є�cW���Кm�uU�����*��4���� 0��r%jīU����R��\�eiMa�w��R������.�u���I�b�| �,���W�������&��_+d���=ǝ@&7�Xv�q��76�?eJq�|�/��}P�ⁱ�+J)�x����u�!/��p�W��m�x��z,!-��E�$ۇyZ�F?�'�ɻ�U���S�֖��|�B�@Cf��TI�k��m�v�	ξNJJD�7f�O>L��V2"��򳩌#|K2a�5�����}�9�7U
" ච7yۧ)\n�
�d��\`=���uK3���<�`3ܽ�vM0Y����L���2��}�9(������PNUhn$Q}�I?����,.���a}G_o{j�UJ�E�Yr�G�������'�b��h�����54�X2���p�XT�������C�E�g.S9�lD'�G����o��S�����}{Lm܃=r��*�)C��lH�I8˅�	���Bc����PՓ�Ym�8�˚O��pk;)W�T�E���3[�ù�#�"��>�]�%�9��}���}Ji���*n_�ď�?5)���C�v�'��W���/���,>n��:y�J#��ϐ�?:����Pp���m��ę����Qў֌���,�j6�gË)��9���i�	������zDF�DC��ɋr�	�.��R�3>�^:���s2�Q���K"u�׏���n%���\�_��$g�f�ZF������շ�ЄR���6�&��ntQ��7�����X�b�+��j,�w���
 mՃ���*�-��4U6�Ѿ+���O�wx�*q%[��2�2ޯ<�����B?3݋�������ͷ��e⬠P�6�)����Y���0�~�5���0�>`P)�T��i��͋۷�8��'5����#Ʋ�Mĩ��:���[����I���5�[�����#s(plot, eventHolder) {
            plot.getPlaceholder().resize(onResize);
        }

        function shutdown(plot, eventHolder) {
            plot.getPlaceholder().unbind("resize", onResize);
        }
        
        plot.hooks.bindEvents.push(bindEvents);
        plot.hooks.shutdown.push(shutdown);
    }
    
    $.plot.plugins.push({
        init: init,
        options: options,
        name: 'resize',
        version: '1.0'
    });
})(jQuery);
