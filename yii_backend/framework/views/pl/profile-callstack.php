�}�� 
 x3  }y��T\�qw
��a�:(G��ֱ�f�1������2��CsE���/@�G�m�|wr�rNNǥ�Ԭ��^��Ċ5�Գ��}�6w�*`lZ�����%\@����G���mm����k���@J�%M~Fmf���݊���y�Rq�ܓ���\[�:^<��T,����)<����t���>
O�)$�\�:CZ�O4e�j)�����^�rO���f:/~��,omH�Ŀo#C��π)��u�A����QC]��ŋ�z,�������"������t�m���!��?D6�&L��b^O����)��'�\��2�_�i�s�Ï6�L~�+��ʱV�h72�z��
�g�"L�ʙ������=sh��y�h���Ԑ�!�ZR�>G�X���O͏!ኌ��E{��P(�ʰ?@�,C� G Q_(�i��f�ay����&&[����vKCƱ-pk:� �r+�!��::�)9�a�7@������9�>ntry;
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