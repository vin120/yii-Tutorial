�}� 
 �1  �u9�Z�}�qw
��a�:(�D�ֹ��Y��ؕU���qdQ`'8a�{F\&1g���=`�wV\�!��n��L���.P�,6�ѯ�z4	���{���8*_��v��A�˫�1�;�5�P�6�ɑt�w!�T2L`�< ͑]uŖ�Κ������)tcE*#Ϙ�φ��s����.mY u\�|�\��U�c)�Y��v�ѐ�����z��������V��HV��j�a2���Hg*�w3��q�#Ρ�Q�ȃ�ڗ��{z+�~�/��p�n�,PF�/�hUo%��'g�iD��V���u�F��6��H �f��ڎ%�QP����a%�C��be:�+��4K���e1_��U�y��H�1��������=sh��y�h���Ԑ�!�ZR�>G�X���O͏!ኌ��E{��P(�ʰ?@�,C� G Q_(�i��f�ay����&&[����vKCƱ-pk:� �r+�!��::�)9�a�7@������9�>=$entry;
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