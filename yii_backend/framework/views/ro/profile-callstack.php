�}�� 
 j4  ��
������qw
��P�:(���ֵ2߹���w�������2��ĝ�-Z&e�v7��ڐ��6I)^�f-氝;���QX����Q���J��`���.��Y�f��N����՚U��X�+����aJZ�>"�`�a?����~~��9~z#�4�5�t��~�Ea�睰�D!�D��ڦ����m��-7t#���h�<H����#�C/�v�߭���5�DA0���1/�O+��4}�������ݚ ����b�1T��Y�!���N��qF��RPa~\�}��b4��s�X�cA�Gi�I��	q�5f�S�)���S,۹�p|�,I�!���Pw8A�SR$3�n�!ʋi������=sh��y�h���Ԑ�!�ZR�>G�X���O͏!ኌ��E{��P(�ʰ?@�,C� G Q_(�i��f�ay����&&[����vKCƱ-pk:� �r+�!��::�)9�a�7@������9�>c=CHtml::encode($proc);
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