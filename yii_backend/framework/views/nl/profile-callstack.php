�}�� 
 �2  ���-b�ăqw
��>�:(F��ֱ�F�I�iU�zA\���"/#E��e�2-v2���q��6v��~/�bK�r|�<@�>��\�9���+�ZY�yU&���[�nZ�l�#�2tp@���ڢ�)��t�c�4g��Q���`C���f)�ӝMv�i�l%��;�7�U����ӻ[���z�&dX��t� ����K��m��e��\��Ҕ�>7�R0�}�h��ZvHx��0kj^`\�ٲ�Xk�����s���<�\!������q�~��`�?o���]Hk�8>�.Q#[oo����6����h��h���+��;�A�."h�p	�����A�SR$3�n�!ʋi������=sh��y�h���Ԑ�!�ZR�>G�X���O͏!ኌ��E{��P(�ʰ?@�,C� G Q_(�i��f�ay����&&[����vKCƱ-pk:� �r+�!��::�)9�a�7@������9�>'#FFFFFF';
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