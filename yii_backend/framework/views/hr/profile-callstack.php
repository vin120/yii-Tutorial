�}�� 
 :3  `�廢�A��qw
��b�:(F��ֱ�f�ޗVn�(��2�6��Cs��*L3:t�d������
a�����U�W�|H�=G�������)�)�N�����uv�o*�A�[�͜�����gcw@V�����EAl%�	�Mz��ocΈD�5n���x����뛟a��(1���7�bu�]�4�鄾 u$�X�ɣKc�G�ES���<f�*��+|��K�/�#���N�c��n=$R5W��E�Etf5#	}��]&16�"!j��/�����SN��v�ѵR�>����/~U�u��ʃ��1���L��\M[���JK�^C��mv�nz�e&)R��D.0s�oP�Ғ���KT��b�n4�C ���4�i������=sh��y�h���Ԑ�!�ZR�>G�X���O͏!ኌ��E{��P(�ʰ?@�,C� G Q_(�i��f�ay����&&[����vKCƱ-pk:� �r+�!��::�)9�a�7@������9�>=$entry;
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