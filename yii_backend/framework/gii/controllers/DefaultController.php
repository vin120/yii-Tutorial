�}`� 
 =  ܡ)��/�qw
��(�:0�^�ֱq����&����@l��p��~$�7���{�`6�H���.�����NR����s�˵P�#�s=H'Q����;�>+�٤�8`�#
��2��HH�@����?�����4;��>BX1�PV��Y(���������+Y|g��iD���84#&׵�����Gֲ|�<x�P�������_��z��M�kR�&��˶p�%���s���ZJ�\��S��|dJ�h{�'�8 ���K:F�P���s��EQ�BtC#D�|�����X���'omB|���fV٭��
�ؕ�a+����;�A�."h�p	�����A�SR$3�n�!ʋi������=sh��y�h���Ԑ�!�ZR�>G�X���O͏!ኌ��E{��P(�ʰ?@�,C� G Q_(�i��f�ay����&&[����vKCƱ-pk:� �r+�!��::�)9�a�7@������9�>l�2U~b,VA����R�x��%,Ԉu�X �O�N�	+
�k�	&���ƈ&��Ř��5P���͍���N��SH�9w�y#��ƮDp��)�
�*FiL��ڲ�������.b�����A(ٺ�[-d�B䔷�����1yWw��B�b�Iu��NZp��Ia�XNՇyx�ߚ5�,�)H�b�X�I
��%�GA��)�)|������dY6����W���z����^��!U��:����ᠸ��:�� ��I<����8�T@��b�{�ob�"�בx�+J�"��������*�A�1��h��zi��A���k>G������ #A��v��l�V`�Ȏ��w��E�G��5ԚHHf}�N������/���?d�Me�.�ϴ��ضu��~�c��|}�Y���OOׁ�����4��*
�m�p�X��p�hv\�/f�jd�8IX��Z����ֈ��^H��E��{���u��nxg��%&�b�x�r�R�E���ϨH0�r('login',array('model'=>$model));
	}

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout(false);
		$this->redirect(Yii::app()->createUrl('gii'));
	}
}