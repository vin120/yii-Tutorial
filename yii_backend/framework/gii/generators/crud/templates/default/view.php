�}�� 
 �=  �ˎ�!���qw
���:�F�)�ֱ�~7# �)�ٽ:L��K��HL�񻸺�J�"��=JAa�?紙M��AM��^��K�Dls�B��-#*48���Ϸ!R_�v�b7�ס�ce���	��J�=�		%�A��cQ�bxϥ� �$V�ќ��j���rZ�e��S�t�S�tvFz~��W���E�����Ш�I����p�Pf�xX!�z?����el����Ї��(&g�B�@�a��ϩ�����R�`#��C^��z����5n��ƒ��.3.����3]J4��&xRG��`4�'�๒��fV٭��
�ؕ�a+����;�A�."h�p	�����A�SR$3�n�!ʋi������=sh��y�h���Ԑ�!�ZR�>G�X���O͏!ኌ��E{��P(�ʰ?@�,C� G Q_(�i��f�ay����&&[����vKCƱ-pk:� �r+�!��::�)9�a�7@������9�>l�%�� �{ex�9�cQs,�x�4{�����5٠&cP�<��M-��<ܙ��_�B#7����Z3��?&�>�\C�3���I���'�C~-���}Xi��<����\��]���;ދ�}�k�c ���o��?�T��s�)6��Q%r;��M���>P�%@�����w�ͻ}�+�>V���xX3��ˤ���Pd9�bxD�ibc1CԮh7=�Vf�Ҟ~����3�ӟ�'z�5�M��O� | E��TH޸�F��3�4�\*���5���D��<]֩L���ٓ�UD��a8AU��j ���m
�rCV�� ��3/���s�45��y����3J��t�_�_���f��(�u��]��j_�/rN1���Nz~w���ı�u���e�ȯzS_�?:��p��ǖM�ŉh��\�,������5�����}�T�˶)|Z�w�B­@z*g���-���l�`Kɏ����4㍪��9כ��϶��� echo $this->modelClass." #<?php echo \$model->{$this->tableSchema->primaryKey}; ?>"; ?></h1>

<?php echo "<?php"; ?> $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
<?php
foreach($this->tableSchema->columns as $column)
	echo "\t\t'".$column->name."',\n";
?>
	),
)); ?>
