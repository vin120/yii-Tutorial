�}�� 
 5  ����-�5U�qw
��S�:(�B�ֱ3�9kN�3K
�z�w��ʍ+�9��(�D�T6w�S!�(��U����Zr���i�dޏ�E,.+��UBp��8,�(b8����G�sRe����o�8�bF����?�f�ՠ3u��)�S�w���}+i�ō�q-��>�M�?ϰ����
*�de
����~ܺ0���LD������w_�]�Ɓ�g'�g�7V�*2�lE���Fr.ϻ��ls�=���d�Χ̌�ֵ��H�k9&
��5͌i�yL���Cʙ	��l�sW�r��=w���3�Gv�f�ŷ��p|=��͔3n6vQ4���c���� d�E����SR$3�n�!ʋi������=sh��y�h���Ԑ�!�ZR�>G�X���O͏!ኌ��E{��P(�ʰ?@�,C� G Q_(�i��f�ay����&&[����vKCƱ-pk:� �r+�!��::�)9�a�7@������9�>)=$entry;
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