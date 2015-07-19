<?
/*
  $aa = NewsCon::model()->findByPk(3);
  $aa2 = $aa->news_categories;
  //echo "head : " . $NewsCons->news_head;
  //echo $aa2;
  echo $aa->news_categories->cat_name;

 */
//echo NewsCat::model()->category;
//foreach (NewsCat::model()->category as $a)
//    echo $a . "<br>";
// Load Specific Script per page
//Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl.'/js/yourscript.js');
?>

<div id="formtitle">
    <div class="title">ข่าวประชาสัมพันธ์<? //= $page_title;                      ?></div>&nbsp;
    <div class="title_menu">
        <div class="my_buttons">
            <a href="index.php?r=News/ConForm" >
                <img src="<?= Yii::app()->theme->baseUrl; ?>/images/toolbar/add.png" alt=""/>
                เพิ่มข่าว
            </a>
        </div>
    </div>
    <div class="clear"></div>
</div>

<div align="right" class="row" style="margin-bottom: 5px;">
    <?php
    $this->widget('application.extensions.PageSize.PageSize', array(
        'mGridId' => 'news-con-grid', //Gridview id
        'mPageSize' => @$_GET['pageSize'],
        'mDefPageSize' => Yii::app()->params['defaultPageSize'],
        'mPageSizeOptions' => Yii::app()->params['pageSizeOptions'], // Optional, you can use with the widget default
    ));
    ?>
</div>

<?php
$this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'news-con-grid',
    //'htmlOptions' => array('style' => 'width:500px'),
    'pager' => array('cssFile' => Yii::app()->theme->baseUrl . '/css/gridViewStyle/gridView.css'),
    'cssFile' => Yii::app()->theme->baseUrl . '/css/gridViewStyle/gridView.css',
    'dataProvider' => $NewsCons->search(),
    'filter' => $NewsCons,
    'summaryText' => 'แสดงข้อมูล {start} - {end} จาก {count} รายการ ',
    'columns' => array(
        array(
            'name' => 'id',
            'htmlOptions' => array('style' => 'input {width :50px;}')
        ),
        'news_head',
        //'news_categories.cat_name',
        array(
            'name' => 'news_category_id',
            'value' => '$data->news_categories->cat_name',
            'filter' => NewsCat::model()->category,
        ),
        array(
            'name' => 'publish',
            'type' => 'raw',
            'filter' => array(1 => 'เผยแพร่', 0 => 'ไม่เผยแพร่'),
            //'value' => '@$data->publish ? "Yes" : "No"',
            //'filter' => CHtml::listData(NewsCon::, $valueField, $textField)
            'value' => 'NewsCon::getPublish($data->publish)',
            'htmlOptions' => array('style' => 'text-align:center;')
        ),
        array(
            'name' => 'hotnews',
            'type' => 'raw',
            'filter' => array(1 => 'ข่าวเด่น', 0 => 'ทั่วไป'),
            'value' => 'NewsCon::getHotNews($data->hotnews)',
            'htmlOptions' => array('style' => 'text-align:center;')
        ),
        array(
            'header' => 'Managment',
            'class' => 'CButtonColumn',
            'template' => '{publish} {hot} {edit} {delete}',
            'buttons' => array(
                'publish' => array(
                    'label' => 'Publish',
                    'imageUrl' => Yii::app()->theme->baseUrl . "/css/gridViewStyle/icon/publish.jpg",
                    'url' => 'Yii::app()->createUrl("/News/SetPublish", array("id"=>$data->id))',
                    'options' => array(
                        'ajax' => array(
                            'type' => 'get',
                            'url' => 'js:$(this).attr("href")',
                            'success' => 'js:function(data) { $.fn.yiiGridView.update("news-con-grid")}',
                            'beforeSend' => 'function(){$("#content").addClass("loading");}',
                            'complete' => 'function(){ $("#content").removeClass("loading");}',
                            //'error' => 'js:function() { alert("error"); }'
                        )
                    ),
                ),
                'hot' => array(
                    'label' => 'Hot news',
                    'imageUrl' => Yii::app()->theme->baseUrl . "/css/gridViewStyle/icon/star.png",
                    'url' => 'Yii::app()->createUrl("News/SetHotNews", array("id"=>$data->id))',
                    'options' => array(
                        'ajax' => array(
                            'type' => 'get',
                            'url' => 'js:$(this).attr("href")',
                            'success' => 'js:function(data) { $.fn.yiiGridView.update("news-con-grid");}',
                            'beforeSend' => 'function(){$("#content").addClass("loading");}',
                            'complete' => 'function(){ $("#content").removeClass("loading");}',
                        //'error' => 'js:function() { alert("error"); }'
                        )
                    ),
                ),
                'edit' => array(
                    'label' => 'Edit',
                    'imageUrl' => Yii::app()->theme->baseUrl . "/css/gridViewStyle/icon/gr-update.png",
                    'url' => 'Yii::app()->createUrl("/News/ConForm", array("id" => $data->id))'
                ),
                'delete' => array(
                    'label' => 'Delete',
                    'imageUrl' => Yii::app()->theme->baseUrl . "/css/gridViewStyle/icon/del.jpg",
                    'url' => 'Yii::app()->createUrl("Main/Delete", array("id" => $data->id))',
                    'click' => 'function() { if (!confirm("ยืนยันการลบข้อมูล")) return false; }'
                ),
            )
        )
    )
));
?>

<div align="right" class="CbuttonDetail">
    <?= CHtml::image(Yii::app()->theme->baseUrl . '/css/gridViewStyle/icon/publish.jpg'); ?> = เผยแพร่ , 
    <?= CHtml::image(Yii::app()->theme->baseUrl . '/css/gridViewStyle/icon/star.png'); ?> = ข่าวเด่น , 
    <?= CHtml::image(Yii::app()->theme->baseUrl . "/css/gridViewStyle/icon/gr-update.png"); ?> = แก้ไข ,
    <?= CHtml::image(Yii::app()->theme->baseUrl . "/css/gridViewStyle/icon/del.jpg"); ?> = ลบข้อมูล
</div>

