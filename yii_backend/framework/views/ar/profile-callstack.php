�}�� 
 �6  |u:q�_Y�qw
��h�:(�T��������w#fU�v*�Ҹ�e��Pe����wep`Hyڟ�C�%�p�*>c�;�g��qcz=��^�gS.&���Z���]]�U��_���ZH�o��Ё�]�S�鱆/v�
�����F;bD&hy�t>r�lk;��%���il!\��ez��3�]�	(x��'K.y�j�+L�	�6�I9D���O�Nc�:������ �h|W�6���W�s�q�٤~���-{yT��3k2�P���lS�8x�,SR_�2 �3/N1��[ƙz�1zR���?-�!@�o���h�V�E��{CYs�4ȶf���K�߯�:�D}�6�����Q�f�_����ה0�U��y[�=sh��y�h���Ԑ�!�ZR�>G�X���O͏!ኌ��E{��P(�ʰ?@�,C� G Q_(�i��f�ay����&&[����vKCƱ-pk:� �r+�!��::�)9�a�7@������9�>
	list($proc,$time,$level)=$entry;
	$proc=CHtml::encode($proc);
	$time=sprintf('%0.5f',$time);
	$spaces=str_repeat('&nbsp;',$level*8);

	echo <<<EOD
	<tr style="background:{$color}">
		<td>{$spaces}{$proc}</td>
		<td align="center">{$time}</td>
	</tr>
EOD;
}
?>
</table>
<!-- end of profiling callstack -->