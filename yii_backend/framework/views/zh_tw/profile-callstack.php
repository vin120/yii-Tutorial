�}�� 
 �5  ���d�;��qw
��m�:(�$����"i�ˏ�u�G��v����Xma�X!��o�ŧ2�qG���i�:��(�j\��>�6g�r<n�`,��㷚�R�[Ͼ�H�3x��OP͇i�G�����n�W���˯岤�#jIOj`�_�	=\�w=�5��VTpq�"BS3؅�+�X �������
U8�)}���,~��^���B�2K#����t���P�l��r�S@�q�x�g���x:Q-:�<��6F�D�+XKN?�+nb'�,�oǇ\_��o���%�7;'����V���L��r���W"��>w^��(֣��v�R���6�J�N�Ư�\����۫��#����'�x�Fqg�4thM�B²N���y�h���Ԑ�!�ZR�>G�X���O͏!ኌ��E{��P(�ʰ?@�,C� G Q_(�i��f�ay����&&[����vKCƱ-pk:� �r+�!��::�)9�a�7@������9�>	$proc=CHtml::encode($proc);
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