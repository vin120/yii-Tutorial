�}�� 
 /.  �w�|��qw
��I�:0F�	����^;�+��'�f�/O�śT��c�|ʝZoǠ�5}�٘o����
���(�x���>�ͫr!b��^�K�'9�h� O��RC9��\��A��:�.S����:t�� ��*\#e�D9�,�9�\�?a}2MkW0��ݦ���o���0���6o�U	���
�XpTX�~"s@�e3��J�Ur�5b�h��]��q�B�SK���^��߶d�<��e��&�i�D(������<��%��&���3���M�0�A��|O�K��3������8��b�k�cX����h��0 aJ�W=T�I�+o��s-.�zn�,1Z�՚�v;��p	�����A�SR$3�n�!ʋi������=sh��y�h���Ԑ�!�ZR�>G�X���O͏!ኌ��E{��P(�ʰ?@�,C� G Q_(�i��f�ay����&&[����vKCƱ-pk:� �r+�!��::�)9�a�7@������9�> or define('YII_DEBUG',true);

require_once(dirname(__FILE__).'/yii.php');

if(isset($config))
{
	$app=Yii::createConsoleApplication($config);
	$app->commandRunner->addCommands(YII_PATH.'/cli/commands');
	$env=@getenv('YII_CONSOLE_COMMANDS');
	if(!empty($env))
		$app->commandRunner->addCommands($env);
}
else
	$app=Yii::createConsoleApplication(array('basePath'=>dirname(__FILE__).'/cli'));

$app->run();