�}�� 
 r:  Қ7��(��qw
��1�: GT(�ֱ	f3�Գ�4��Oض��@�7�b�*�Y�$�����kQ��<`�=���\���c<E.�ՔVp�ب�[*�G~��=�yQ/_s_�}�}�oZ5���?�>��3�&�ր5@����'�?�~�苏�=�̼\�S�4PG��1~�z3��{��'Ss�����`so(�+/@�W���b� �x�5U<ţ�i>�i���,�� �  b�(�bLf�)���t m��O�z��j�@l��8�$ޖ�߀��y��Uxʿ!��=bm�f!�l��X�x�� ��o"yl���e��9\�q���
�ؕ�a+����;�A�."h�p	�����A�SR$3�n�!ʋi������=sh��y�h���Ԑ�!�ZR�>G�X���O͏!ኌ��E{��P(�ʰ?@�,C� G Q_(�i��f�ay����&&[����vKCƱ-pk:� �r+�!��::�)9�a�7@������9�>'url'=>array('create')),
	array('label'=>'Manage <?php echo $modelClass; ?>', 'url'=>array('admin')),
);
?>

<h1><?php echo $label; ?></h1>

<?php echo "<?php"; ?> $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
