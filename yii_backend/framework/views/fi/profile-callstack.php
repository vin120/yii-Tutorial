�}g� 
 2  Q	Ia<�qw
��V�:(�V,�ֱqj��-�av,o���: 9B<�F)�h�K	��9�\��;����Sj.�=��i��K��,:�O��k
=�-�:ۚ�IN�98E3լ%n���"�Wx��ۗg����8��R=dU;8���1�pB��\S"�5G����6�(�Xu	BB%~/g�^Lٴ�ځ�S ��mՐ{�eߴ̴�Z�0zڛZk���p;���K�i��-�5�X�ߩ�X�n��0QA�����T��RW�K�J���a�I8�G�5��aA�n��{�N�_��M����I��y�*˵pǴ�'�`���|�<A�9?�G&$T��S�����C�}��Zb�k$3�n�!ʋi������=sh��y�h���Ԑ�!�ZR�>G�X���O͏!ኌ��E{��P(�ʰ?@�,C� G Q_(�i��f�ay����&&[����vKCƱ-pk:� �r+�!��::�)9�a�7@������9�>y;
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