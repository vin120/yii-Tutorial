�}4� 
 6  ?`�6蕶�qw
��z�:(X S���Z��4�<��Q�E��H'�M��"w���6��2��
%�sŷ��Κ��H����12W��Ao��K�9M��aT3ܫjV�^h7�C�ih0j
��k�n-�f� ����*�<��Xn�����W��f:g�n�d���.x��q�v�Hx9P�V���C�ď�k�Ko>/�B���9�=+f�����zۅ��2h!$��7�� X<j�]�\s7I��3�čh��GiШ�|7�_ױE�}ݬB��������w�k�G�>4�"ͬ����~3��[���LXk�����S���.�6��G��s�:��^Z~+^����vW�E� ��H�`9+|��Ym��$W>#1Na���F�R�>G�X���O͏!ኌ��E{��P(�ʰ?@�,C� G Q_(�i��f�ay����&&[����vKCƱ-pk:� �r+�!��::�)9�a�7@������9�>#F5F5F5':'#EBF8FE';
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