<div style="margin: 5px 5px 5px 5px;">

    <?php
// register_script_name
    Yii::app()->clientScript->registerScript('javascript', "
    $('#butSearch').click(function(){
        if ($('#txtsearch').val() != '') {
            return ture
        } else { 
           alert('กรุณาป้อนคำที่ต้องการค้นหา');
           $('#txtsearch').focus();
           return false;
        }
    });
", CClientScript::POS_READY);
    ?>

    <?php echo CHtml::beginForm(array('Home/BusinessSearch'), 'post') ?>

    <table border="0" cellpadding="3" cellspacing="3" width="100%">
        <tr>
            <td align="right">ค้นหา : </td>
            <td>
                <?php echo CHtml::textField('txtsearch', '', array('placeholder' => 'search...', 'style' => 'width:150px;')); ?>
            </td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>
                <?php echo CHtml::submitButton('Search', array('title' => 'ค้นหา', 'id' => 'butSearch')); ?>
                &nbsp;&nbsp;
                <?php echo CHtml::link("แสดงทั้งหมด", Yii::app()->createUrl("Home/BusinessListAll")); ?>

            </td>
        </tr>
    </table>
    <?php echo CHtml::endForm(); ?>

</div>
