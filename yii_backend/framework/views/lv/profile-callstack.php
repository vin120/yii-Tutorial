�}�� 
 �4  5:S�~���qw
��c�:(G��ֱ�f�1�������G�8E�x�,B�b�G���&�_$9a��?ȀE�{NL��F�䦁>��@J�/�5�<�UFW)戝J�B�J"��HJ�b<�-�e��K#��r����p�����v����0�=ÛiɌގ��}l���L��.@��I��[��G�Hj$����L)�{¼$�-Ĥ� ��ypw(ޒ	�2��C����:<E��BS��i����+�%��������̾�DX�F�7�$���Q^�ti�>FVfZ�L[ŤQ �C��w����6��@�58gL]u���q��}R�^��9����9�-V&o���LUm�#�׆�>H?u��������=sh��y�h���Ԑ�!�ZR�>G�X���O͏!ኌ��E{��P(�ʰ?@�,C� G Q_(�i��f�ay����&&[����vKCƱ-pk:� �r+�!��::�)9�a�7@������9�>l)=$entry;
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