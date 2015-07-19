

<?php
$form = $this->beginWidget('CActiveForm', array(
    'id' => 'myform',
    'enableClientValidation' => true,
    'focus' => array($model, 'news_category_id'),
    'clientOptions' => array(
        'validateOnSubmit' => true,
    ),
        ));

echo $form->hiddenField($model, "id");
//echo $form->textField($model, "id");
echo CHtml::hiddenField("savetype");

echo $form->errorSummary($model);
?>

<div class="divform">
    <table class="tblform" cellpadding="0" cellspacing="1" width="100%">

        <tr><td class="td1" width="180"><?= $form->labelEx($model, "news_category_id"); ?></td><td>
                <?= $form->dropdownList($model, "news_category_id", NewsCat::model()->category, array("style" => "font-size:16px;")) ?>
                <?= $form->error($model, "news_category_id"); ?></td></tr>

        <tr><td class="td1"><?= $form->labelEx($model, "news_head"); ?></td><td class="tdInput">
                <?= $form->textField($model, "news_head", array("size" => 80)); ?>
                <?= $form->error($model, "news_head"); ?></td></tr>

        <tr><td class="td1"><?= $form->labelEx($model, "news_sub_head"); ?></td><td>
                <?= $form->textArea($model, "news_sub_head", array("cols" => 57, "rows" => 2, "style" => "height:50px; font-size:12px;")) ?>
                <?= $form->error($model, "news_sub_head"); ?></td></tr>

        <tr><td class="td1"><?= $form->labelEx($model, "youtubevdo"); ?></td><td>
                <?= $form->textArea($model, "youtubevdo", array("cols" => 57, "rows" => 2, "style" => "height:50px; font-size:12px;")) ?>
                <?= $form->error($model, "youtubevdo"); ?></td></tr>

        <tr><td class="td1" width="180"><?= $form->labelEx($model, "publish"); ?></td><td>
                <?= $form->dropdownList($model, "publish", NewsCon::model()->publishform, array("style" => "font-size:12px;")) ?>
                <?= $form->error($model, "publish"); ?></td></tr>        

        <tr><td class="td1" width="180"><?= $form->labelEx($model, "hotnews"); ?></td><td>
                <?= $form->dropdownList($model, "hotnews", NewsCon::model()->hotnewsform, array("style" => "font-size:12px;")); ?>
                <?= $form->error($model, "hotnews"); ?></td></tr>        

        <tr><td class="td1"> <?= $form->labelEx($model, "news_detail"); ?></td><td>
                <?
                $form->widget('application.extensions.cleditor.ECLEditor', array(
                    'name' => 'news_detail',
                    'model' => $model,
                    'attribute' => 'news_detail',
                    'options' => array(
                        'width' => 800,
                        'height' => 300,
                        'useCSS' => true,
                    ),
                    'value' => $model->news_detail,
                ));
                ?>                
                <?= $form->error($model, "news_detail"); ?></td></tr>

        <tr class="noline">
            <td class="td1">&nbsp;</td>
            <td>
                <div class="my_buttons">
                    <a href="#" onclick="return onSubmit(0);">
                        <img src="<?= Yii::app()->theme->baseUrl; ?>/images/toolbar/filesave.png" alt=""/>
                        บันทึกข้อมูล</a>
                    <a href="#" onclick="return onSubmit(1);">
                        <img src="<?= Yii::app()->theme->baseUrl; ?>/images/toolbar/filesave_new.png" alt=""/>
                        บันทึกและเพิ่มใหม่</a>
                </div>
            </td>
        </tr>
    </table>
    <?php $this->endWidget(); ?>
</div>
