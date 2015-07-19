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
//$this->pageTitle=Yii::app()->name . ' - Login';
//$this->breadcrumbs=array(
//'Group/Form',
//);
?>
<div id="formtitle">
    <div class="title">กลุ่มข่าว</div>&nbsp;
    <div class="title_detail">
        <?
        if ($model->id != NULL)
            echo "(แก้ไข ID : " . $model->id . ")";
        else
            echo "(เพิ่มใหม่)";
        ?>
    </div>
    <div class="title_menu">
        <div class="my_buttons">
            <a href="index.php?r=News/CatForm" >
                <img src="<?= Yii::app()->theme->baseUrl; ?>/images/toolbar/add.png" alt=""/>
                เพิ่มกลุ่มข่าว</a>
            <a href="index.php?r=News/Index" >
                <img src="<?= Yii::app()->theme->baseUrl; ?>/images/toolbar/stop.png" alt=""/>
                ปิด</a>
        </div>
    </div>
    <div class="clear"></div>
</div>


<?php
$form = $this->beginWidget('CActiveForm', array(
    'id' => 'myform',
    'enableClientValidation' => true,
    'focus' => array($model, 'cat_name'),
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
        <tr>
            <td class="td1" width="180">
                <?php echo $form->labelEx($model, "cat_name"); ?>
            </td>
            <td>
                <?php echo $form->textField($model, "cat_name", array("size" => 50)); ?>
                <?php echo $form->error($model, "cat_name"); ?>
            </td>
        </tr>
        <tr class="noline">
            <td class="td1">&nbsp;</td>
            <td>
                <?php //echo CHtml::submitButton(Yii::t('ui', 'Submit'), array('class' => 'btn btn-primary'));  ?>

                <div class="my_buttons">
                    <a href="#" onclick="return onSubmit(1);">
                        <img src="<?= Yii::app()->theme->baseUrl; ?>/images/toolbar/filesave_new.png" alt=""/>
                        บันทึกและเพิ่มใหม่
                    </a>
                    <a href="#" onclick="return onSubmit(0);">
                        <img src="<?= Yii::app()->theme->baseUrl; ?>/images/toolbar/filesave.png" alt=""/>
                        บันทึกข้อมูล
                    </a>
                </div>
            </td>
        </tr>
    </table>
    <?php $this->endWidget(); ?>
</div>
