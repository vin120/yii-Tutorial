�}M� 
 �0  ]�!�����qw
��u�:(X�S���Z#@L!|@>�GA[��H�C�T^E�|	m�U5⻩��Ѷoݯ���;���˂��T��+)��ʳV��Q�T���H]�Ղ��6��S.<�� ��?5�S��p����Ξ���)х8�=�YN�EZ�bT�2��׷=r~���P�QI-�i4�m��ͩ�e�MU�r�P��
�͉jH�d'��֮�Q����|�b�@��RfZ�p��R�*�D�_���B�<b�U���8J���]��Ur�H�A�W�۝�ܞb�m��(x��W�"��ۨװ8��� ��\��S��a�VY1�,(�\伕[0���ucT��d |������h�:�f}�E��5G��A��+(�6� ���y�cb��!�ZR�>G�X���O͏!ኌ��E{��P(�ʰ?@�,C� G Q_(�i��f�ay����&&[����vKCƱ-pk:� �r+�!��::�)9�a�7@������9�>FFFFFF';
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