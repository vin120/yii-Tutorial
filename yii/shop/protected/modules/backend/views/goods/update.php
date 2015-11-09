<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <title>修改商品</title>
        <meta http-equiv="content-type" content="text/html;charset=utf-8">
        <link href="<?php echo BACKEND_CSS_URL;?>mine.css" type="text/css" rel="stylesheet">
    </head>

    <body>

        <div class="div_head">
            <span>
                <span style="float:left">当前位置是：商品管理-》修改商品信息</span>
                <span style="float:right;margin-right: 8px;font-weight: bold">
                    <a style="text-decoration: none" href="./index.php?r=backend/goods/show">【返回】</a>
                </span>
            </span>
        </div>
        <div></div>

        <div style="font-size: 13px;margin: 10px 5px">
        
        <?php $form = $this->beginWidget("CActiveForm"); ?>
        
            <table border="1" width="100%" class="table_a">
                <tr>
                    <td><?php echo $form -> labelEx($goods_model,'goods_name'); ?></td>
                    <td>
                    	<?php echo $form-> textField($goods_model,'goods_name') ;?>
                    </td>
                </tr>
                <tr>
                    <td><?php echo $form -> labelEx($goods_model,'goods_weight'); ?></td>
                    <td>
                    	<?php echo $form-> textField($goods_model,'goods_weight') ;?>
                    </td>
                </tr>
                <tr>
                    <td><?php echo $form -> labelEx($goods_model,'goods_price'); ?></td>
                    <td>
                    	<?php echo $form-> textField($goods_model,'goods_price') ;?>
                    </td>
                </tr>
                <tr>
                    <td><?php echo $form -> labelEx($goods_model,'goods_number'); ?></td>
                    <td>
                    	<?php echo $form-> textField($goods_model,'goods_number') ;?>
                    </td>
                </tr>
                <tr>
                    <td><?php echo $form -> labelEx($goods_model,'goods_category_id'); ?></td>
                    <td>
                    	<?php echo $form-> textField($goods_model,'goods_category_id') ;?>
                    </td>
                </tr>
                <tr>
                    <td><?php echo $form -> labelEx($goods_model,'goods_brand_id'); ?></td>
                    <td>
                    	<?php echo $form-> textField($goods_model,'goods_brand_id') ;?>
                    </td>
                </tr>
                <tr>
                    <td><?php echo $form -> labelEx($goods_model,'goods_introduce'); ?></td>
                    <td>
                    	<?php echo $form-> textArea($goods_model,'goods_introduce',array('cols'=>30,'rows'=>5)) ;?>
                    </td>
                </tr>
                
                
                <tr>
                    <td colspan="2" align="center">
                        <input type="submit" value="修改">
                    </td>
                </tr>  
            <?php $this->endwidget(); ?>
            </form>
        </div>
    </body>
</html>