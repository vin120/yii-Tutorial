�}�� 
 �6  ���.�
��qw
��P�:(���ֱry������u0��2�֫PnA����n�9����7�x�+}s䋘B��a����-�'A�	����Q���J��`���.��Y�VUav}����8x|���2#K���?4���Y�D,��vQ�Q"�U�����J�����p?ːWE���~Y��OE��@ߓ��,�� }b��m ����ԯ�B�Ʌ �����P��Y�A�#s U�2������X;4*�,/
�ts�I}�w5ߐB;�4�/�����L�[����>�X�(�ï�6o�ng%��$��:__�vsJ��W�d� �^������_�z���@K�3Ξ%�|����t@A�SR$3�n�!ʋi������=sh��y�h���Ԑ�!�ZR�>G�X���O͏!ኌ��E{��P(�ʰ?@�,C� G Q_(�i��f�ay����&&[����vKCƱ-pk:� �r+�!��::�)9�a�7@������9�>;
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