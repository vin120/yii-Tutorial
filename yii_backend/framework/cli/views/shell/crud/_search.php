�}� 
 p:  <�G��qw
��H�: �D,�֭1y����Ζ�����j��уz���Z/��%��W��� <e��ڈ_��y���ZC���p��N>~�y�g��_QD:�v��b�
����d�7�#��`	��k�=��-F�\���P��r޷���QLT���8�][�q)�uUL̲XCE|R|"�p����o5�f�cj7�-�k^~P��˧����J���/-R���*�-��g���e�K;NZ)�"�Z���ŝ~�3�ui���\*^�Nr� ��H��Q�zؾ�mP���~��?ZH�8���Q��%6f"�:Ls�|U�A���T��B�� ��7�p	�����A�SR$3�n�!ʋi������=sh��y�h���Ԑ�!�ZR�>G�X���O͏!ኌ��E{��P(�ʰ?@�,C� G Q_(�i��f�ay����&&[����vKCƱ-pk:� �r+�!��::�)9�a�7@������9�>delClass,$column);
	if(strpos($field,'password')!==false)
		continue;
?>
	<div class="row">
		<?php echo "<?php echo \$form->label(\$model,'{$column->name}'); ?>\n"; ?>
		<?php echo "<?php echo ".$this->generateActiveField($modelClass,$column)."; ?>\n"; ?>
	</div>

<?php endforeach; ?>
	<div class="row buttons">
		<?php echo "<?php echo CHtml::submitButton('Search'); ?>\n"; ?>
	</div>

<?php echo "<?php \$this->endWidget(); ?>\n"; ?>

</div><!-- search-form -->