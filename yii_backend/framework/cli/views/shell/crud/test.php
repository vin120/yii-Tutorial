�}�� 
 f:  n���щ9�qw
���:8G.(�ֱ�V>��*J��dc�A��,�7�0\v��%� U<m����c�,Y�����9k�*�QFX%N;�h�"��4����E�s ���\���[����b.��hH��3m�KI<8���@��1�,7j{a)�ZZE_4���18��o�d�X���M�A�������˞���7�t]�!u�[���������%���E�6O�x��B��q��0Fv��?�>��t5,���le$��&׫�W޸��[L���\tc�Q�`w<G��`4�'�๒��fV٭��
�ؕ�a+����;�A�."h�p	�����A�SR$3�n�!ʋi������=sh��y�h���Ԑ�!�ZR�>G�X���O͏!ኌ��E{��P(�ʰ?@�,C� G Q_(�i��f�ay����&&[����vKCƱ-pk:� �r+�!��::�)9�a�7@������9�>rID; ?>/view&id=1');
	}

	public function testCreate()
	{
		$this->open('?r=<?php echo $controllerID; ?>/create');
	}

	public function testUpdate()
	{
		$this->open('?r=<?php echo $controllerID; ?>/update&id=1');
	}

	public function testDelete()
	{
		$this->open('?r=<?php echo $controllerID; ?>/view&id=1');
	}

	public function testList()
	{
		$this->open('?r=<?php echo $controllerID; ?>/index');
	}

	public function testAdmin()
	{
		$this->open('?r=<?php echo $controllerID; ?>/admin');
	}
}
