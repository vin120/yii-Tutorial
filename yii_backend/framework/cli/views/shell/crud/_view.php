�}�� 
 b:  ��Q1	?(,�qw
��6�: �^,�֭�V��p�.�6�����L
��o��C]YW����y�d��=T��O�����Ñ��y����II7�9
E��"'��z���%3���P�O2%ݻ�*2�;��̫�p�����^X�>Hִ�?����2���ϐ��wlY��m��@��@���",�F�|�q���Xcz[]��=!���b�  �ut�K-���	�D����RF�i;Z�p��<�s�r�߇��@rX���Q
��H1���������d�N��F���p�3?B����6Z�[Ň4ϰ�#$^���y-�1���U��ؕ�a+����;�A�."h�p	�����A�SR$3�n�!ʋi������=sh��y�h���Ԑ�!�ZR�>G�X���O͏!ኌ��E{��P(�ʰ?@�,C� G Q_(�i��f�ay����&&[����vKCƱ-pk:� �r+�!��::�)9�a�7@������9�>t=0;
foreach($columns as $column)
{
	if($column->isPrimaryKey)
		continue;
	if(++$count==7)
		echo "\t<?php /*\n";
	echo "\t<b><?php echo CHtml::encode(\$data->getAttributeLabel('{$column->name}')); ?>:</b>\n";
	echo "\t<?php echo CHtml::encode(\$data->{$column->name}); ?>\n\t<br />\n\n";
}
if($count>=7)
	echo "\t*/ ?>\n";
?>

</div>