�}�� 
 �-  E��3����qw
��+�: �T,�ֱ�:�#�7 ��H��_����e����#cjrko9s���ک1ߑ���e�s�)�ȟس�Nc���s��tfaZ�v;���0���r#Ƴ��}(�L9������H�<ڱ��:�xǠ)�����K����җOQ0Q|���;D���VC���w#���>Xf��ܞ��0,1O�,U���eD'�p�Es�O=psZJ1�<��/��e� g�i��%�߳�5Eb}n���!�V{kp}�;f�=����$~L���yծ�_R���}N ��0ꮣ}��2������fV٭��
�ؕ�a+����;�A�."h�p	�����A�SR$3�n�!ʋi������=sh��y�h���Ԑ�!�ZR�>G�X���O͏!ኌ��E{��P(�ʰ?@�,C� G Q_(�i��f�ay����&&[����vKCƱ-pk:� �r+�!��::�)9�a�7@������9�>this->key, 0, strpos($this->key, "."));
    }

    public function getDirective() {
        return substr($this->key, strpos($this->key, ".") + 1);
    }

    public static function make($id) {
        return new HTMLPurifier_ConfigSchema_Interchange_Id($id);
    }

}

// vim: et sw=4 sts=4
