�}�� 
 �7  ��_��>��qw
��c�:(���ֱ�a�	%g��_.�e�_z�}�M}d��������"��3���� |z�Y+\��$��HEI�h�ۏ{���\}�AKڎT4��[F!�r�D�ZQ�� ED������a&ȍ����N��ݏS��Y7*n�Ɣ��n�U��ż�Ɖ��؇/Z� A�.y�$����j��e={� �
���VJ{��س��X'xE���ծ?�Q�MJ��^�ΐC<��u��];�=�n�1Z�ɺ�c��[��ф=�E���<�
��ָ ?���@!8?(�T]�D�t�K ��yW$�֭^�*���'�"XH��Ƅu\Quk��_����k�C��4�0�����S�����=sh��y�h���Ԑ�!�ZR�>G�X���O͏!ኌ��E{��P(�ʰ?@�,C� G Q_(�i��f�ay����&&[����vKCƱ-pk:� �r+�!��::�)9�a�7@������9�>proc=CHtml::encode($proc);
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