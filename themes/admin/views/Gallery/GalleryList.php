<div id="formtitle">
    <div class="title">อัลบั้มภาพ</div>&nbsp;
    <div class="title_menu">
        <div class="my_buttons">
            <a href="index.php?r=Gallery/GalleryForm" >
                <img src="<?= Yii::app()->theme->baseUrl; ?>/images/toolbar/add.png" alt=""/>
                เพิ่มอัลบั้ม
            </a>
        </div>
    </div>
    <div class="clear"></div>
</div>

<div align="right" class="row" style="margin-bottom: 5px;">
    <?php
    $this->widget('application.extensions.PageSize.PageSize', array(
        'mGridId' => 'gallery-grid', //Gridview id
        'mPageSize' => @$_GET['pageSize'],
        'mDefPageSize' => Yii::app()->params['defaultPageSize'],
        'mPageSizeOptions' => Yii::app()->params['pageSizeOptions'], // Optional, you can use with the widget default
    ));
    ?>
</div>

<?php
$this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'gallery-grid',
    //'htmlOptions' => array('style' => 'width:500px'),
    'pager' => array('cssFile' => Yii::app()->theme->baseUrl . '/css/gridViewStyle/gridView.css'),
    'cssFile' => Yii::app()->theme->baseUrl . '/css/gridViewStyle/gridView.css',
    'dataProvider' => $model->search(),
    'filter' => $model,
    'summaryText' => 'แสดงข้อมูล {start} - {end} จาก {count} รายการ ',
    'columns' => array(
        array(
            'name' => 'id',
            'htmlOptions' => array('style' => 'input {width :50px;}')
        ),
        'name',
        array(
            'name' => 'publish',
            'type' => 'raw',
            'filter' => array(1 => 'เผยแพร่', 0 => 'ไม่เผยแพร่'),
            //'value' => '@$data->publish ? "Yes" : "No"',
            //'filter' => CHtml::listData(NewsCon::, $valueField, $textField)
            'value' => 'Gallery::getPublish($data->publish)',
            'htmlOptions' => array('style' => 'text-align:center;')
        ),
        array(
            'header' => 'Managment',
            'class' => 'CButtonColumn',
            'template' => '{publish} {edit} {delete}',
            'buttons' => array(
                'publish' => array(
                    'label' => 'Publish',
                    'imageUrl' => Yii::app()->theme->baseUrl . "/css/gridViewStyle/icon/publish.jpg",
                    'url' => 'Yii::app()->createUrl("Gallery/SetPublish", array("id"=>$data->id))',
                    'options' => array(
                        'ajax' => array(
                            'type' => 'get',
                            'url' => 'js:$(this).attr("href")',
                            'success' => 'js:function(data) { $.fn.yiiGridView.update("gallery-grid")}')
                    ),
                ),
                'edit' => array(
                    'label' => 'Edit',
                    'imageUrl' => Yii::app()->theme->baseUrl . "/css/gridViewStyle/icon/gr-update.png",
                    'url' => 'Yii::app()->createUrl("Gallery/GalleryForm", array("id" => $data->id))'
                ),
                'delete' => array(
                    'label' => 'Delete',
                    'imageUrl' => Yii::app()->theme->baseUrl . "/css/gridViewStyle/icon/del.jpg",
                    'url' => 'Yii::app()->createUrl("Gallery/GalleryDelete", array("id" => $data->id))',
                    'click' => 'function() { if (!confirm("ยืนยันการลบข้อมูล")) return false; }'
                ),
            )
        )
    )
));
?>

<div align="right" class="CbuttonDetail">
    <?= CHtml::image(Yii::app()->theme->baseUrl . '/css/gridViewStyle/icon/publish.jpg'); ?> = เผยแพร่ , 
    <?= CHtml::image(Yii::app()->theme->baseUrl . "/css/gridViewStyle/icon/gr-update.png"); ?> = แก้ไข ,
    <?= CHtml::image(Yii::app()->theme->baseUrl . "/css/gridViewStyle/icon/del.jpg"); ?> = ลบข้อมูล
</div>

