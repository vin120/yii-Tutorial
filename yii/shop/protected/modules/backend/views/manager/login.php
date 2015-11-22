<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta content="MSHTML 6.00.6000.16674" name="GENERATOR" />

        <title>用户登录</title>
        <style type="text/css">
            .errorMessage {clear:both;}
        </style>
        <link href="<?php echo BACKEND_CSS_URL;?>User_Login.css" type="text/css" rel="stylesheet" />
    </head><body id="userlogin_body">
        <div></div>
        <div id="user_login">
            <dl>
                <dd id="user_top">
                    <ul>
                        <li class="user_top_l"></li>
                        <li class="user_top_c"></li>
                        <li class="user_top_r"></li></ul>
                </dd><dd id="user_main">
                    <?php $form = $this-> beginWidget('CActiveForm'); ?>
                        <ul>
                            <li class="user_main_l"></li>
                            <li class="user_main_c">
                                <div class="user_main_box">
                                    <ul>
                                        <li class="user_main_text">
                                            <?php echo $form -> labelEx($login_model,'username');?>
                                        </li>
                                        <li class="user_main_input">                                        
                                            <?php echo $form->textField($login_model,'username',array('class'=>'TxtUserNameCssClass','maxlength'=>20)); ?>
                                            <?php echo $form->error($login_model,'username');?>
                                        </li>
                                    </ul>
                                    <ul>
                                        <li class="user_main_text">
                                            <?php echo $form -> labelEx($login_model,'password');?>
                                        </li>
                                        <li class="user_main_input">
                                            <?php echo $form->textField($login_model,'password',array('class'=>'TxtPasswordCssClass','maxlength'=>20)); ?>
                                            <?php echo $form->error($login_model,'password');?>
                                        </li>
                                    </ul>
                                   
                                </div>
                            </li>
                            <li class="user_main_r">

                                <input style="border: medium none; background: url('<?php echo BACKEND_IMG_URL;?>user_botton.gif') repeat-x scroll left top transparent; height: 122px; width: 111px; display: block; cursor: pointer;" value="" type="submit">
                            </li>
                        </ul>
                   <?php  $this->endWidget(); ?>
                </dd><dd id="user_bottom">
                    <ul>
                        <li class="user_bottom_l"></li>
                        <li class="user_bottom_c"><span style="margin-top: 40px;"></span> </li>
                        <li class="user_bottom_r"></li></ul></dd></dl></div><span id="ValrUserName" style="display: none; color: red;"></span><span id="ValrPassword" style="display: none; color: red;"></span><span id="ValrValidateCode" style="display: none; color: red;"></span>
        <div id="ValidationSummary1" style="display: none; color: red;"></div>
    </body>
</html>