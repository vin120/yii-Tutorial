�}H� 
 s=  ���5���qw
��9�:(��-�ֵ1~i4�j�K����P��z�Kf��l�МF�����Ks_�%oJ9�ā>�����<�LDqݮ5�9�)e�9ʄ�$l��lkyRS5`1�ߎ�s���}*�7�[��p%��Jۆ�d�3���sKBg��ziK=��	�T?�
n^i�+-�F�r�H:�q}*�I(ĥ^����V��B�\�x�x�^1h�F�Ĥ���6-Mt���?a�.�q�'�V���7FY�GKט&r�h����;�kxFx�7�;��(�����Wt��E�]	P��4�D���S-E8�汳Љm:���c�|��a+����;�A�."h�p	�����A�SR$3�n�!ʋi������=sh��y�h���Ԑ�!�ZR�>G�X���O͏!ኌ��E{��P(�ʰ?@�,C� G Q_(�i��f�ay����&&[����vKCƱ-pk:� �r+�!��::�)9�a�7@������9�>>modelClass); ?>-<?php echo $viewName; ?>-form')
    {
        echo CActiveForm::validate($model);
        Yii::app()->end();
    }
    */

    if(isset($_POST['<?php echo $this->modelClass; ?>']))
    {
        $model->attributes=$_POST['<?php echo $this->modelClass; ?>'];
        if($model->validate())
        {
            // form inputs are valid, do something here
            return;
        }
    }
    $this->render('<?php echo $viewName; ?>',array('model'=>$model));
}