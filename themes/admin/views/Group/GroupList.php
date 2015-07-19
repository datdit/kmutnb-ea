
<div id="formtitle">
    <div class="title">กลุ่มผู้ใช้<? //= $page_title;  ?></div>&nbsp;
    <div class="title_menu">
        <div class="my_buttons">
            <a href="index.php?r=Group/Form" >
                <img src="<?= Yii::app()->theme->baseUrl; ?>/images/toolbar/add.png" alt=""/>
                เพิ่มกลุ่มผู้ใช้
            </a>
        </div>
    </div>
    <div class="clear"></div>
</div>

<?php
//$this->beginWidget('CActiveForm');

$this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'group-grid',
    //'htmlOptions' => array('style' => 'width:500px'),
    'summaryText' => 'แสดงข้อมูล {start} - {end} จาก {count} รายการ',
    'pager' => array('cssFile' => Yii::app()->theme->baseUrl . '/css/gridViewStyle/gridView.css'),
    'cssFile' => Yii::app()->theme->baseUrl . '/css/gridViewStyle/gridView.css',
    'dataProvider' => $groups->search(),
    'filter' => $groups,
    'selectableRows' => 2,
    'columns' => array(
        /*
        array(
            'class' => 'CCheckBoxColumn',
            'id' => 'ids'
        ),
        */
        //'id',
        array(
            'name' => 'id',
            'htmlOptions' => array('style' => 'input {width :50px;}')
        //'filter' => CHtml::textField('id', $groups->id, array('size'=>1))
        ),
        'name',
        //'UserCount',
        array(
            'header' => 'จำนวนผู้ใช้',
            'type' => 'html',
            'value' => array($groups, "ShowCountUser"),
            'htmlOptions' => array('style' => 'text-align:center;')
        ),
        /*
        array(
            'header' => 'Managment',
            'class' => 'CButtonColumn',
            'template' => '{user} {edit} {delete}',
            'buttons' => array(
                'user' => array(
                    'label' => 'user',
                    'imageUrl' => Yii::app()->theme->baseUrl . "/css/gridViewStyle/icon/employee.png",
                    'url' => 'Yii::app()->createUrl("User", array("id" => $data->id))'
                ),
                'edit' => array(
                    'label' => 'edit',
                    'visible' => '($data->id ==1)?false:true',
                    'imageUrl' => Yii::app()->theme->baseUrl . "/css/gridViewStyle/icon/gr-update.png",
                    'url' => 'Yii::app()->createUrl("Group/Form", array("id" => $data->id))'
                ),
                'delete' => array(
                    'label' => 'delete',
                    'visible' => '(($data->id ==1) || ($data->UserCount > 0))?false:true',
                    'imageUrl' => Yii::app()->theme->baseUrl . "/css/gridViewStyle/icon/gr-delete.png",
                    'url' => 'Yii::app()->createUrl("Main/Delete", array("id" => $data->id))',
                    'click' => 'function() { if (!confirm("ยืนยันการลบข้อมูล")) return false; }'
                ),
            )
        )
        */
    )
));

//echo CHtml::submitButton("ลบทั้งหมดที่เลือก");
//$this->endWidget();
?>

