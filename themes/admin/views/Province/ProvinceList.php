

<div id="formtitle">
    <div class="title">จังหวัด<? //= $page_title;  ?></div>&nbsp;
    <div class="title_menu">
        <div class="my_buttons">
            <a href="#" >
                <img src="<?= Yii::app()->theme->baseUrl; ?>/images/toolbar/add.png" alt=""/>
                เพิ่มจังหวัด
            </a>
        </div>
    </div>
    <div class="clear"></div>
</div>

<div align="right" class="row" style="margin-bottom: 5px;">
    <?php
    $this->widget('application.extensions.PageSize.PageSize', array(
        'mGridId' => 'pro-grid', //Gridview id
        'mPageSize' => @$_GET['pageSize'],
        'mDefPageSize' => Yii::app()->params['defaultPageSize'],
        'mPageSizeOptions' => Yii::app()->params['pageSizeOptions'], // Optional, you can use with the widget default
    ));
    ?>
</div>

<?php

$this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'pro-grid',
    //'htmlOptions' => array('style' => 'width:500px'),
    'summaryText' => 'แสดงข้อมูล {start} - {end} จาก {count} รายการ',
    'pager' => array('cssFile' => Yii::app()->theme->baseUrl . '/css/gridViewStyle/gridView.css'),
    'cssFile' => Yii::app()->theme->baseUrl . '/css/gridViewStyle/gridView.css',
    'dataProvider' =>  $provinces->search(),
    'filter' => $provinces,
    'columns' => array(
        array(
            'name' => 'id',
            'htmlOptions' => array('style' => 'input {width :50px;}')
        ),
        'name',
        
    )
));

?>
