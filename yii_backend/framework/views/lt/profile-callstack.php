�}�� 
 04  ����1�侃qw
��a�:(���ֱ�a�1	�g��_������I˸��A,\�D��i������R�h�vtp7h���Z�	��y��-QX���]�%�L[��8U=���5k���4�~���o >���]X^���tߒ�̀Ke06#"����^�'�}��tf���P�C�:�qa������vl��֪�	DC�ahD�sB_���H{[6��T+�:�E�o�u��,�0v�jҙ��G_�gA�^������>qq�^?�����+�F%4^���;S�d���E�$u����ҳK��bR��g	Y��Ww\yj�&C-��9��'Ӂx��O)HӛS�\,K�b������=sh��y�h���Ԑ�!�ZR�>G�X���O͏!ኌ��E{��P(�ʰ?@�,C� G Q_(�i��f�ay����&&[����vKCƱ-pk:� �r+�!��::�)9�a�7@������9�>ry;
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