�}�� 
 T6  ��5�Ǧ[�qw
��}�:(X�T׵�Z�|g�����v�jeTٙИ+�8���_�E��f�����i9иj�Rg[�kc�5MY���&7��$�AC��G�q��o(�;I�:tHÓ���,�䠏I�z���Q$O� ����@bR�qk��,e��~�	'��eg�y��Q��	*p�u��"�s�
�6���x�v�Sb�]<1�Y%�Z-t���"����7@����gq���}iuu���|�h����zh�9f&}����bwm!�����й=Hi^ܵũA"��eײZ*���5�f�!�@u��n~�a��U�N��{�䦦0���s�ѩ��=�� 7yC�Β�Os�x���{�]AW�c��/E��ۀ~4�G�X���O͏!ኌ��E{��P(�ʰ?@�,C� G Q_(�i��f�ay����&&[����vKCƱ-pk:� �r+�!��::�)9�a�7@������9�>t ( $proc, $time, $level ) = $entry;
	$proc = CHtml::encode ( $proc );
	$time = sprintf ( '%0.5f', $time );
	$spaces = str_repeat ( '&nbsp;', $level * 8 );
	
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