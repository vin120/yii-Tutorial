�};� 
 �2  "������qw
��L�:(���ֱr^�s�Yw#�H�l��:dK���D�P5,�s�m��`��2}��7����9\���OT#=���-�,H�; ����ai��� {f�A
��c�#��W����4�x��#/7/��B�'w�Ê�p�|��}���!�#ꊬ`��X@�)��bA�T�4��QD<}��^�?g�bSBg�|����␃G�f;/@;H�o���֞��}'�o�T_c�������o�����
ĳ���Ez�C� ���(��躠���u$nM��4�m�`ݘ�{8c���6Y�wi�$4�m��=��؆ȃ�o����;�^�GK��L����A�SR$3�n�!ʋi������=sh��y�h���Ԑ�!�ZR�>G�X���O͏!ኌ��E{��P(�ʰ?@�,C� G Q_(�i��f�ay����&&[����vKCƱ-pk:� �r+�!��::�)9�a�7@������9�>l)=$entry;
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