�}�� 
 �0  ��Du(Ъ�qw
��r�:(X�����.U���HnP�B8��E�Mذ�%�Y��4���.%���Zw�ǉ����;�'W.s^}�:�/:�L�3�O�X�>����\�(���-#��Q{et���C�4���ׯ�0+���QMz���
���`��}q&_}2|ϣ���puG����'?�C��a_&�j�`~���v�T��V��,�hK��m�����C%����Y�D9o�v�����D�O�,}Dj+���&j
�A$.�%S�+x���׭!Z�Hy!"[]d�v0��X3s�A����C�(��::)�/6�e�;�D��Q5���7�@����D�++PI�������fHy��p��j�?�����KO�n�{Y����Ԑ�!�ZR�>G�X���O͏!ኌ��E{��P(�ʰ?@�,C� G Q_(�i��f�ay����&&[����vKCƱ-pk:� �r+�!��::�)9�a�7@������9�>ist($proc,$time,$level)=$entry;
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
