�}� 
 1  l� �_ӳo�qw
��[�:(F�	�ֱ�V �D�Sn�h�L��m	R��4{�d�u��h�yP��t�Vv��ƈڤ�8�
s4A?N�D�_��Y��������󢺙q���<֝�~α�$Û`ǂ6�~k����:�=���"%u�ρ����U+�/`�\.���U7�^��R-�K����D�9{l��0�sm����;��A�:�S���!��b����_��>bwS����G�-�c�ⅿ��糝�v�G E�1��P��#}����]C|��;�����x�{�~M�:oQnʥ��v��UGp�'���ʿ(�h��bEQ<�H��	���lq����˽,�a�s7��� ���a�!ʋi������=sh��y�h���Ԑ�!�ZR�>G�X���O͏!ኌ��E{��P(�ʰ?@�,C� G Q_(�i��f�ay����&&[����vKCƱ-pk:� �r+�!��::�)9�a�7@������9�>roc,$time,$level)=$entry;
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
