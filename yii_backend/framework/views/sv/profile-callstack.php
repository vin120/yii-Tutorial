�}s� 
 [1  �%\a~�+�qw
��T�:(�T,�Ƶ���%Jg%)8���2���o�ו���%T��їŌcQ)3f��nт��_��QHyA���ْ�5C�[-�տ�.v���6a����J�����6ܓC�7��i|���M��L�{��{�=�0Q><q���w�=�T���+-�u@\�� �l90n��Dy4�Ɨ�>^�ܣh�@*�VV����Bv��zio�������4{a�`|�n :j�mnAAwH�7ݦ*J/��Qgݵ������#[����nF��� f�h��"gm�\��G�l(v叅��*fV��Xً�H�����d�nbA���V�?E�ߡ�0�W�"Ԕ;��#�Z��R$3�n�!ʋi������=sh��y�h���Ԑ�!�ZR�>G�X���O͏!ኌ��E{��P(�ʰ?@�,C� G Q_(�i��f�ay����&&[����vKCƱ-pk:� �r+�!��::�)9�a�7@������9�>
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