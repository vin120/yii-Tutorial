�}�� 
 �1  �C��j[��qw
��~�:(YP,Kױ�~+�Y�n
�,?���a#NF
���dAx ���*ޒ�UC_�>�Wa�5���Aty5��gݎ�̄��p�>�e����9�7s��˂�����ok�ODo$kx?�A[֜\��ѕ���{$��4���R�0ճ���@�+T;/l�7�	uF����	}#������xÞq1g-��i#խ�T��
.TزeLH��V�+�ء���Xu�+M�`�f���#�p�V�cIlbHR���8	C�Q��v<��x�@Ӳ�w ��e��_A�c��6cq����@��P� b@.��wW�uR��w��!�
�w��Ҭ�:�âqŝ�zY�a$׸ҫ�'���YĕN5�	H��ZeH���X���O͏!ኌ��E{��P(�ʰ?@�,C� G Q_(�i��f�ay����&&[����vKCƱ-pk:� �r+�!��::�)9�a�7@������9�>FFF';
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