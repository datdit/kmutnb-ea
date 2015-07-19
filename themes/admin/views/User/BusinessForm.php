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

<?
/*
  echo "id : " . $model->id;
  echo "<br>user id " . $model->users_id;
  echo "<br>group " . $model->users->username;
  echo $model->province->name;
 * 
 */
?>


<div id="formtitle">
    <div class="title">ธุรกิจของสมาชิก</div>&nbsp;
    <div class="title_detail">
        <? echo $model->id != NULL ? "(แก้ไข ID : " . $model->id . ")" : "(เพิ่มใหม่)"; ?>
    </div>
    <div class="title_menu">
        <? if (Yii::app()->session['group_id']  == 1) : ?>
            <div class="my_buttons">
                <a href="index.php?r=User/BusinessForm" >
                    <img src="<?= Yii::app()->theme->baseUrl; ?>/images/toolbar/add.png" alt=""/>
                    เพิ่มผู้ใช้</a>
                <a href="index.php?r=User/BusinessListAll" >
                    <img src="<?= Yii::app()->theme->baseUrl; ?>/images/toolbar/stop.png" alt=""/>
                    ปิด</a>
            </div>
        <? endif; ?>
    </div>
    <div class="clear"></div>
</div>

<?php
$form = $this->beginWidget('CActiveForm', array(
    'id' => 'myform',
    //'enableAjaxValidation' => true,
    'enableClientValidation' => true,
    'focus' => array($model, 'username'),
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

        <tr  class="noline"><td class="td1">
                <?php echo $form->labelEx($model, "detail"); ?></td><td>
                <?php echo $form->textArea($model, "detail", array('rows' => 3, 'cols' => 60, 'style' => 'height:40px;')); ?>
                <?php echo $form->error($model, "detail"); ?>
            </td></tr>

        <tr  class="noline"><td class="td1">
                <?php echo $form->labelEx($model, "address"); ?></td><td>
                <?php echo $form->textArea($model, "address", array('rows' => 3, 'cols' => 60, 'style' => 'height:40px;')); ?>
                <?php echo $form->error($model, "address"); ?>
            </td></tr>

        <tr  class="noline"><td class="td1">
                <?php echo $form->labelEx($model, "amphur"); ?></td><td>
                <?php echo $form->textField($model, "amphur", array('class' => 'txt')); ?>
                <?php echo $form->error($model, "amphur"); ?>
            </td></tr>

        <tr  class="noline"><td class="td1">
                <?= $form->labelEx($model, "province_id"); ?></td><td>
                <?= $form->dropdownList($model, "province_id", Province::model()->province); ?>
                <?= $form->error($model, "province_id"); ?>
            </td></tr>

        <tr  class="noline"><td class="td1">
                <?php echo $form->labelEx($model, "telephone"); ?></td><td>
                <?php echo $form->textField($model, "telephone", array('class' => 'txt')); ?>
                <?php echo $form->error($model, "telephone"); ?>
            </td></tr>

        <tr  class="noline"><td class="td1">
                <?php echo $form->labelEx($model, "email"); ?></td><td>
                <?php echo $form->textField($model, "email", array('class' => 'txt')); ?>
                <?php echo $form->error($model, "email"); ?>
            </td></tr>

        <tr  class="noline"><td class="td1">
                <?php echo $form->labelEx($model, "facebook"); ?></td><td>
                <?php echo $form->textField($model, "facebook", array('class' => 'txt')); ?>
                <?php echo $form->error($model, "facebook"); ?>
            </td></tr>

        <tr  class="noline"><td class="td1">
                <?php echo $form->labelEx($model, "website"); ?></td><td>
                <?php echo $form->textField($model, "website", array('class' => 'txt')); ?>
                <?php echo $form->error($model, "website"); ?>
            </td></tr>

        <tr class="noline"><td class="td1">
                <?php echo $form->labelEx($model, "banner"); ?></td><td>
                <? if (!empty($model->banner)) : ?>
                    <p>
                        <img src="./upload/business/<?= $model->user_id ?>/<?= $model->banner ?>" width="80" height="50" >
                    </p>
                <? endif ?>
                    
                <?//= CHtml::error($model, 'banner'); ?>
                <?//= CHtml::activeFileField($model, 'banner') ?>
                <?= $form->fileField($model, 'banner') ?>
                <?= $form->error($model, 'banner'); ?>

                <br /><p><b style="color:blue; font-size: 14px;">
                        ภาพควรมีขนาด 80 x 50 pixels 
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

                    <? if (Yii::app()->session['group_id'] == 1) : ?>
                        <a href="#" onclick="return onSubmit(1);">
                            <img src="<?= Yii::app()->theme->baseUrl; ?>/images/toolbar/filesave_new.png" alt=""/>
                            บันทึกและเพิ่มใหม่
                        </a>
                    <? endif; ?>

                </div>
            </td>
        </tr>
    </table>
    <?php $this->endWidget(); ?>
</div>
