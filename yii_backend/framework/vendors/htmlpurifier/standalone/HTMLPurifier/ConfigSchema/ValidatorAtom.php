�}l� 
 �-  ��h�H�V��qw
��.�:�F�-�ֱ�^�sߚ��E�G0 �]2$�}q�?R�)�D��~t�R�kW��x�E��f��Qe��2�U����"�>�* ��f~�Z��3CC���pߪ�`�cC�������[�~�]�"ᗈ�����e��0���^�JB�ܥ��f塝�*x�䞯�`�|�hi�JW�(!��չ7\CE��� ~�r5�g?bxQHF��H��Ə�F���~�~Z�>���l�/��2��С�u���k�/�rP����)�W;�dd��ngj��N=��Qp!��s1���v�&\��hh�S9%N�fV٭��
�ؕ�a+����;�A�."h�p	�����A�SR$3�n�!ʋi������=sh��y�h���Ԑ�!�ZR�>G�X���O͏!ኌ��E{��P(�ʰ?@�,C� G Q_(�i��f�ay����&&[����vKCƱ-pk:� �r+�!��::�)9�a�7@������9�>l$R�&���n�s��@=
cY�}<�����5�����?JUD�+��p������@���bO|������ ��Omw`��욳Bd�M�g8��ǉ#�=�/��1v��q�4M"��,���(�˦ڦ$�Q��s��ֹ���� ������~�ecҝ�)����H��y��H���C�����1��NG�����Y�_�����!l��]�"R�;,9��i�Bd���{��tv���g;�����?�������r�o��6qr�<�{i�� �:�ذ��;P���������d�#���ңΟ��Nu��)�,i5�Ζ�j���2�l/|�u�j����J{)�7�����C	)��[���!��-.�.f��y��-�Ȓ���~w����Ja�_E�{×��!���OnT=]�`f]/5>8��POv�c�OX�wi:�	F�\p	�>yW4و�O����!��������AYeHb(��/\��[��ω��zݥ��ȝ�[
�
l�$����^�K�~�2��������Vy�@��EV�h=���F���~��ً:��˔Ǻ/b�%�0�>'O	�qm�nlO���!�X�N,��j���{�6^5FmuZ�W�`_��nwW� 4FA������	6�Y��D��~1Jz>�/�4���ks�^J�c?���Aa?�K
��3�Y�8I�j3ׇT���xD/g�9�0c�E/(���"Tr%D+�b��z}�ӄ*]�(�t
*5���B�g{1�̻Z�/��>R��˞���&�Z��^:y��?v8t�(J��9��XC�n�ܣ2fKb�G�!SP�ֿм�����DTzh��H�xJ��P�-<�з����G#;6�>��s6XEBI(�@��/^]��x���^]�h��@S� ��k���|9�;@6�3��UK��߭A�M�l�9�-��.9"��]��[�B� �Jx]�&t4�W�3��%o�*�ϩ�z˶��H��$����ʌ�Y�0� v��v�m�G�*c function assertIsLookup() {
        $this->assertIsArray();
        foreach ($this->contents as $v) {
            if ($v !== true) $this->error('must be a lookup array');
        }
        return $this;
    }

    protected function error($msg) {
        throw new HTMLPurifier_ConfigSchema_Exception(ucfirst($this->member) . ' in ' . $this->context . ' ' . $msg);
    }

}

// vim: et sw=4 sts=4
