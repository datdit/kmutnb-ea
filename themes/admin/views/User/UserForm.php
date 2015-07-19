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
    <div class="title">ผู้ใช้</div>&nbsp;
    <div class="title_detail">
        <? echo $model->id != NULL ? "(แก้ไข ID : " . $model->id . ")" : "(เพิ่มใหม่)"; ?>
    </div>
    <div class="title_menu">
        <? if ($model->group_id == 1) : ?>
            <div class="my_buttons">
                <a href="index.php?r=User/UserForm" >
                    <img src="<?= Yii::app()->theme->baseUrl; ?>/images/toolbar/add.png" alt=""/>
                    เพิ่มผู้ใช้</a>
                <a href="index.php?r=User/UserListAll" >
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
        ));

echo $form->hiddenField($model, "id");
//echo $form->textField($model, "id");
echo CHtml::hiddenField("savetype");
?>

<?php echo $form->errorSummary($model); ?>

<div class="divform">
    <table class="tblform" cellpadding="0" cellspacing="1">

        <tr class="trHead"><td><div class="headBullet">&nbsp;</div></td><td class="tdHead">ข้อมูล Login</td></tr>

        <tr><td class="td1" width="180"><?= $form->labelEx($model, "group_id"); ?></td><td>
                <?= $form->dropdownList($model, "group_id", Group::model()->group) ?>
                <?= $form->error($model, "group_id"); ?>
            </td></tr>        



        <tr><td class="td1" width="180"><?= $form->labelEx($model, "member_id"); ?></td><td>
                <?= CHtml::activeDropDownList($model, 'member_id', CHtml::listData(Member::model()->findAll(), 'id', 'name'), array('empty' => '---------------------')); ?>
                <? //= $form->dropdownList($model, "member_id", Member::model()->member) ?></td>
            </td></tr>        


        <tr  class="noline"><td class="td1" width="180">
                <?php echo $form->labelEx($model, "username"); ?></td><td>
                <?php echo $form->textField($model, "username", array('class' => 'txt', 'style' => 'width:150px;')); ?>
                <?php echo $form->error($model, "username"); ?>
            </td></tr>

        <tr  class="noline"><td class="td1">
                <?php echo $form->labelEx($model, "password"); ?></td><td>
                <?php echo $form->textField($model, "password", array('class' => 'txt', 'style' => 'width:150px;')); ?>
                <?php echo $form->error($model, "password"); ?>
            </td></tr>

        <tr class="trHead"><td><div class="headBullet">&nbsp;</div></td><td class="tdHead">ข้อมูลส่วนตัว</td></tr>

        <tr  class="noline"><td class="td1">
                <?php echo $form->labelEx($model, "name"); ?></td><td>
                <?php echo $form->textField($model, "name", array('class' => 'txt')); ?>
                <?php echo $form->error($model, "name"); ?>
            </td></tr>

        <tr  class="noline"><td class="td1">
                <?php echo $form->labelEx($model, "sname"); ?></td><td>
                <?php echo $form->textField($model, "sname", array('class' => 'txt')); ?>
                <?php echo $form->error($model, "sname"); ?>
            </td></tr>

        <tr  class="noline"><td class="td1">
                <?php echo $form->labelEx($model, "email"); ?></td><td>
                <?php echo $form->textField($model, "email", array('class' => 'txt')); ?>
                <?php echo $form->error($model, "email"); ?>
            </td></tr>

        <tr  class="noline"><td class="td1">
                <?php echo $form->labelEx($model, "faculty"); ?></td><td>
                <?php echo $form->textField($model, "faculty", array('class' => 'txt')); ?>
                <?php echo $form->error($model, "faculty"); ?>
            </td></tr>

        <tr  class="noline"><td class="td1">
                <?php echo $form->labelEx($model, "genNo"); ?></td><td>
                <?php echo $form->textField($model, "genNo", array('class' => 'txt')); ?>
                <?php echo $form->error($model, "genNo"); ?>
            </td></tr>

        <tr  class="noline"><td class="td1">
                <?php echo $form->labelEx($model, "yearNo"); ?></td><td>
                <?php echo $form->textField($model, "yearNo", array('class' => 'txt')); ?>
                <?php echo $form->error($model, "yearNo"); ?>
            </td></tr>

        <tr  class="noline"><td class="td1">
                <?php echo $form->labelEx($model, "mobile"); ?></td><td>
                <?php echo $form->textField($model, "mobile", array('class' => 'txt')); ?>
                <?php echo $form->error($model, "mobile"); ?>
            </td></tr>

        <tr class="trHead"><td><div class="headBullet">&nbsp;</div></td><td class="tdHead">ที่อยู่ที่บ้าน</td></tr>

        <tr  class="noline"><td class="td1">
                <?php echo $form->labelEx($model, "home_add"); ?></td><td>
                <?php echo $form->textArea($model, "home_add", array('rows' => 3, 'cols' => 60, 'style' => 'height:40px;')); ?>
                <?php echo $form->error($model, "home_add"); ?>
            </td></tr>

        <tr  class="noline"><td class="td1">
                <?= $form->labelEx($model, "home_province"); ?></td><td>
                <?= $form->dropdownList($model, "home_province", Province::model()->province); ?>
                <?= $form->error($model, "home_province"); ?>
            </td></tr>

        <tr  class="noline"><td class="td1">
                <?php echo $form->labelEx($model, "home_tel"); ?></td><td>
                <?php echo $form->textField($model, "home_tel", array('class' => 'txt')); ?>
                <?php echo $form->error($model, "home_tel"); ?>
            </td></tr>

        <tr  class="noline"><td class="td1">
                <?php echo $form->labelEx($model, "home_fax"); ?></td><td>
                <?php echo $form->textField($model, "home_fax", array('class' => 'txt')); ?>
                <?php echo $form->error($model, "home_fax"); ?>
            </td></tr>

        <tr class="trHead"><td><div class="headBullet">&nbsp;</div></td><td class="tdHead">ที่อยู่ที่ทำงาน</td></tr>

        <tr  class="noline"><td class="td1">
                <?php echo $form->labelEx($model, "position"); ?></td><td>
                <?php echo $form->textField($model, "position", array('class' => 'txt')); ?>
                <?php echo $form->error($model, "position"); ?>
            </td></tr>

        <tr  class="noline"><td class="td1">
                <?php echo $form->labelEx($model, "work_add"); ?></td><td>
                <?php echo $form->textArea($model, "work_add", array('rows' => 3, 'cols' => 60, 'style' => 'height:40px;')); ?>
                <?php echo $form->error($model, "work_add"); ?>
            </td></tr>

        <tr  class="noline"><td class="td1">
                <?= $form->labelEx($model, "work_province"); ?></td><td>
                <?= $form->dropdownList($model, "work_province", Province::model()->province); ?>
                <?= $form->error($model, "work_province"); ?>
            </td></tr>

        <tr  class="noline"><td class="td1">
                <?php echo $form->labelEx($model, "work_tel"); ?></td><td>
                <?php echo $form->textField($model, "work_tel", array('class' => 'txt')); ?>
                <?php echo $form->error($model, "work_tel"); ?>
            </td></tr>

        <tr  class="noline"><td class="td1">
                <?php echo $form->labelEx($model, "work_fax"); ?></td><td>
                <?php echo $form->textField($model, "work_fax", array('class' => 'txt')); ?>
                <?php echo $form->error($model, "work_fax"); ?>
            </td></tr>



        <tr class="trHead"><td><div class="headBullet">&nbsp;</div></td><td class="tdHead">ข้อมูลเพิ่มเติม</td></tr>

        <tr><td class="td1"> <?= $form->labelEx($model, "user_note"); ?></td><td>
                <?
                $form->widget('application.extensions.cleditor.ECLEditor', array(
                    'name' => 'user_note',
                    'model' => $model,
                    'attribute' => 'user_note',
                    'options' => array(
                        'width' => 800,
                        'height' => 300,
                        'useCSS' => true,
                    ),
                    'value' => $model->user_note,
                ));
                ?>                
                <?= $form->error($model, "user_note"); ?></td></tr>

        <tr class="noline">
            <td class="td1">&nbsp;</td>
            <td>
                <?php //echo CHtml::submitButton(Yii::t('ui', 'Submit'), array('class' => 'btn btn-primary'));   ?>

                <div class="my_buttons">
                    <a href="#" onclick="return onSubmit(0);">
                        <img src="<?= Yii::app()->theme->baseUrl; ?>/images/toolbar/filesave.png" alt=""/>
                        บันทึกข้อมูล
                    </a>

                    <? if ($model->group_id == 1) : ?>
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
