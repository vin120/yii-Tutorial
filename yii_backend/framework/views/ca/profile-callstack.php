�}�� 
 �4  |�Ws�7��qw
��R�:(F�)�֭�~2� �7�ȁ��rvp�h�����LS�9B�J��	���?�����`����W�u�똧��ϑ��S��:c�!�]��mdݢ>	d�#f�J��8F\K�D�ǔ�ly�4��ctmxg��>P�J������o��:������U�֗1Q-��)�vt��'��5�$@���cKɢ�2��6�2'1$˼��`���������^�O��4īF�*�A�C�F͖�+���q^�ĻY���̖~�њ���t=:!����e��[U�X�ft}��Z�
��yT�c���X�MK��˝K& UT����Fw1�bj�'���q���,��o]��u� �SR$3�n�!ʋi������=sh��y�h���Ԑ�!�ZR�>G�X���O͏!ኌ��E{��P(�ʰ?@�,C� G Q_(�i��f�ay����&&[����vKCƱ-pk:� �r+�!��::�)9�a�7@������9�>#F5F5F5':'#FFFFFF';
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