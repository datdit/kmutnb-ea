

<div id="formtitle">
    <div class="title">กลุ่มข่าว<? //= $page_title;  ?></div>&nbsp;
    <div class="title_menu">
        <div class="my_buttons">
            <a href="index.php?r=News/CatForm" >
                <img src="<?= Yii::app()->theme->baseUrl; ?>/images/toolbar/add.png" alt=""/>
                เพิ่มกลุ่มข่าว
            </a>
        </div>
    </div>
    <div class="clear"></div>
</div>

<div align="right" class="row" style="margin-bottom: 5px;">
    <?php
    $this->widget('application.extensions.PageSize.PageSize', array(
        'mGridId' => 'news-cat-grid', //Gridview id
        'mPageSize' => @$_GET['pageSize'],
        'mDefPageSize' => Yii::app()->params['defaultPageSize'],
        'mPageSizeOptions' => Yii::app()->params['pageSizeOptions'], // Optional, you can use with the widget default
    ));
    ?>
</div>

<?php
$this->beginWidget('CActiveForm');

$this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'news-cat-grid',
    //'htmlOptions' => array('style' => 'width:500px'),
    'summaryText' => 'แสดงข้อมูล {start} - {end} จาก {count} รายการ',
    'pager' => array('cssFile' => Yii::app()->theme->baseUrl . '/css/gridViewStyle/gridView.css'),
    'cssFile' => Yii::app()->theme->baseUrl . '/css/gridViewStyle/gridView.css',
    'dataProvider' =>  $NewsCats->search(),
    'filter' => $NewsCats,
    'selectableRows' => 2,
    'columns' => array(
        array(
            'class' => 'CCheckBoxColumn',
            'id' => 'ids'
        ),
        //'id',
        array(
            'name' => 'id',
            'htmlOptions' => array('style' => 'input {width :50px;}')
        //'filter' => CHtml::textField('id', $groups->id, array('size'=>1))
        ),
        'cat_name',
        array(
            'header' => 'จำนวนข่าว',
            'type' => 'html',
            'value' => array($NewsCats, "ShowCountNews"),
            'htmlOptions' => array('style' => 'text-align:center;')
        ),
        array(
            'header' => 'Managment',
            'class' => 'CButtonColumn',
            'template' => '{edit} {delete}',
            'buttons' => array(
                'edit' => array(
                    'label' => 'edit',
                    'visible' => '($data->id < 5 )?false:true',
                    'imageUrl' => Yii::app()->theme->baseUrl . "/css/gridViewStyle/icon/gr-update.png",
                    'url' => 'Yii::app()->createUrl("News/CatForm", array("id" => $data->id))'
                ),
                'delete' => array(
                    'label' => 'delete',
                    'visible' => '(($data->id < 5) || ($data->NewsCount > 0))?false:true',
                    'imageUrl' => Yii::app()->theme->baseUrl . "/css/gridViewStyle/icon/del.jpg",
                    'url' => 'Yii::app()->createUrl("Main/Delete", array("id" => $data->id))',
                    'click' => 'function() { if (!confirm("ยืนยันการลบข้อมูล")) return false; }'
                ),
            )
        )
    )
));

//echo CHtml::submitButton("ลบทั้งหมดที่เลือก");
$this->endWidget();
?>

<div align="right" class="CbuttonDetail">
    <?= CHtml::image(Yii::app()->theme->baseUrl . '/images/toolbar/edit2.png' ); ?> = จัดการข่าว , 
    <?= CHtml::image(Yii::app()->theme->baseUrl . "/css/gridViewStyle/icon/gr-update.png"); ?> = แก้ไข ,
    <?= CHtml::image(Yii::app()->theme->baseUrl . "/css/gridViewStyle/icon/del.jpg"); ?> = ลบข้อมูล
</div>