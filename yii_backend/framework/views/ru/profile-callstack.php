�}�� 
 Z5  ��0���Ƀqw
��r�:(�T�ֵ����06M��Z~s�K����P�M3r�����(��4�M�ʌ�N�ޢ�j�d*��8�e/ �P��;E�Ӈ����At�^�}RC�"��3�(�t�RHn�HZ4�b�ԅ��:U��9�=7�~���� u�J�%�}`�tl�����͘�o�t;�0��?%��Xkso��>e�.�=鞩x���.�����T��_�,�1u��Y U����ů���$}-�ٸa6Y�&��:;�6�O͍ָx�)�Sx��Pm7����Ҫ��`�ho�����Q-�i�\�	qţ^����K��
�Hp��i�}_����%Ң��*��za��$ ��-��b����9W�Z������l���Ԑ�!�ZR�>G�X���O͏!ኌ��E{��P(�ʰ?@�,C� G Q_(�i��f�ay����&&[����vKCƱ-pk:� �r+�!��::�)9�a�7@������9�>=$entry;
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