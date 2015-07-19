<?php if (!empty($msg_text)): ?>
    <script type="text/javascript">
        $(function() {
            var msg_text = "<?php echo $msg_text; ?>";
            $.facebox(msg_text);
        });
    </script>
<?php endif; ?>

<script type="text/javascript">
    function onSubmit(savetype) {
        //alert("ok " + savetype);
        $('#savetype').val(savetype);
        $('#myform').submit();
    }
</script>

<div id="formtitle">
    <div class="title">ศิษย์เก่า (รู้จักพี่รู้จักน้อง)</div>&nbsp;
    <div class="title_detail">
        <? echo $model->id != NULL ? "(แก้ไข ID : " . $model->id . ")" : "(เพิ่มใหม่)"; ?>
    </div>
    <div class="title_menu">
            <div class="my_buttons">
                <a href="index.php?r=Alumni/AlumniForm" >
                    <img src="<?= Yii::app()->theme->baseUrl; ?>/images/toolbar/add.png" alt=""/>
                    เพิ่มศิษย์เก่า</a>
                <a href="index.php?r=Alumni/Index" >
                    <img src="<?= Yii::app()->theme->baseUrl; ?>/images/toolbar/stop.png" alt=""/>
                    ปิด</a>
            </div>
    </div>
    <div class="clear"></div>
</div>

<?php
$form = $this->beginWidget('CActiveForm', array(
    'id' => 'myform',
    //'enableAjaxValidation' => true,
    'enableClientValidation' => true,
    'focus' => array($model, 'name'),
    'clientOptions' => array(
        'validateOnSubmit' => true,
    ),
    'htmlOptions' => array(
        'enctype' => 'multipart/form-data',
    )
        ));

echo $form->hiddenField($model, "id");
//echo $form->textField($model, "id");
echo CHtml::hiddenField("savetype");

//echo "user id : " . Yii::app()->session['id'];
?>

<?php echo $form->errorSummary($model); ?>

<div class="divform">
    <table class="tblform" cellpadding="0" cellspacing="1">

        <tr  class="noline"><td class="td1">
                <?php echo $form->labelEx($model, "name"); ?></td><td>
                <?php echo $form->textField($model, "name", array('class' => 'txt')); ?>
                <?php echo $form->error($model, "name"); ?>
            </td></tr>

        <tr><td class="td1"> <?= $form->labelEx($model, "detail"); ?></td><td>
                <?
                $form->widget('application.extensions.cleditor.ECLEditor', array(
                    'name' => 'detail',
                    'model' => $model,
                    'attribute' => 'detail',
                    'options' => array(
                        'width' => 800,
                        'height' => 300,
                        'useCSS' => true,
                    ),
                    'value' => $model->detail,
                ));
                ?>                
                <?= $form->error($model, "detail"); ?></td></tr>
        
        <tr  class="noline"><td class="td1">
                <?php echo $form->labelEx($model, "youtubevdo"); ?></td><td>
                <?php echo $form->textField($model, "youtubevdo", array('class' => 'txt')); ?>
                <?php echo $form->error($model, "youtubevdo"); ?>
            </td></tr>
        
        
        <tr class="noline"><td class="td1">
                <?php echo $form->labelEx($model, "pic"); ?></td><td>
                <? if (!empty($model->pic)) : ?>
                    <p>
                        <img src="./upload/alumni/<?= $model->id ?>/<?= $model->pic ?>" width="100" height="100" >
                    </p>
                <? endif ?>
                    
                <?= $form->fileField($model, 'pic') ?>
                <?= $form->error($model, 'pic'); ?>

                <br /><p><b style="color:blue; font-size: 14px;">
                        ภาพควรมีขนาด 400 x 400 pixels 
                        และเป็นชนิด jpg, png , gif เท่านั้น</b><p>
            </td></tr>


        <tr class="noline">
            <td class="td1">&nbsp;</td>
            <td>
                <?php //echo CHtml::submitButton(Yii::t('ui', 'Submit'), array('class' => 'btn btn-primary'));   ?>

                <div class="my_buttons">
                    <a href="#" onclick="return onSubmit(0);">
                        <img src="<?= Yii::app()->theme->baseUrl; ?>/images/toolbar/filesave.png" alt=""/>
                        บันทึกข้อมูล
                    </a>

                        <a href="#" onclick="return onSubmit(1);">
                            <img src="<?= Yii::app()->theme->baseUrl; ?>/images/toolbar/filesave_new.png" alt=""/>
                            บันทึกและเพิ่มใหม่
                        </a>

                </div>
            </td>
        </tr>
    </table>
    <?php $this->endWidget(); ?>
</div>
