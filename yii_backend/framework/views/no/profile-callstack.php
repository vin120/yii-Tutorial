�}�� 
 �3  ��Ŋ����qw
��X�:(GT,�ֱ	f0��@Yа��O�u���(���"2H�k�I"��[�s���sf��܁������o�ܑ�O���њX+��Q�S�t��>Z&��,�����;t�J�[kg�]�~�|he����
Șя��1��_F%��c0�{�}�%a?8,�4��L�e�j���[�z=�J�����@��JҼ��@d��%d���	�)�,��A��o�r�4�k���^%X�T�<����4�'L�JB�$�i��3��pIҸd(�1�=�g;;��:2}d���D��)����|���#�z#�x86j�z����k�i�	N�cR�h0���Oa��Gk�<��3�n�!ʋi������=sh��y�h���Ԑ�!�ZR�>G�X���O͏!ኌ��E{��P(�ʰ?@�,C� G Q_(�i��f�ay����&&[����vKCƱ-pk:� �r+�!��::�)9�a�7@������9�>ml::encode($proc);
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