�}�� 
 �0  ��ik	�qw
��d�:(G"�ֱ�V"�Ը'�z�\��/��63@[��0L�b� �s�&���f!�����g0�Y�"���?DBT,<;�}Sڳ�#�n&�����'d6�D1�j�rB�${<�,\�d�qmԭ(V��8��;�X\ω��kS�+��I� b�7;;�-T���
��1/��g�*�b�E�q�qN؋����Udm0�K)�Z �
5��3}�,���bk��l[���Ҕ���DW�;D��|���]ފ�0ߊ����ȋ-��Q�{���@����`�yF]���X�:����Id	y�r�5�`��c�OV������[�Ն%�`gG��.^�_?�*�d��zĞ�YV=|����=sh��y�h���Ԑ�!�ZR�>G�X���O͏!ኌ��E{��P(�ʰ?@�,C� G Q_(�i��f�ay����&&[����vKCƱ-pk:� �r+�!��::�)9�a�7@������9�>lor=($index%2)?'#F5F5F5':'#EBF8FE';
	$message='<pre>'.CHtml::encode(wordwrap($log[0])).'</pre>';
	$time=date('H:i:s.',$log[3]).(int)(($log[3]-(int)$log[3])*1000000);

	echo <<<EOD
	<tr style="background:{$color}">
		<td align="center">{$time}</td>
		<td>{$log[1]}</td>
		<td>{$log[2]}</td>
		<td>{$message}</td>
	</tr>
EOD;
}
?>
</table>
<!-- end of log messages -->
