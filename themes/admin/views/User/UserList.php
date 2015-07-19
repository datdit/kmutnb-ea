<div id="formtitle">
    <div class="title">ผู้ใช้ในระบบ<? //= $page_title;                       ?></div>&nbsp;
    <div class="title_menu">
        <div class="my_buttons">
            <a href="index.php?r=User/UserForm" >
                <img src="<?= Yii::app()->theme->baseUrl; ?>/images/toolbar/add.png" alt=""/>
                เพิ่มผู้ใช้
            </a>
        </div>
    </div>
    <div class="clear"></div>
</div>

<div align="right" class="row" style="margin-bottom: 5px;">
    <?php
    $this->widget('application.extensions.PageSize.PageSize', array(
        'mGridId' => 'user-grid', //Gridview id
        'mPageSize' => @$_GET['pageSize'],
        'mDefPageSize' => Yii::app()->params['defaultPageSize'],
        'mPageSizeOptions' => Yii::app()->params['pageSizeOptions'], // Optional, you can use with the widget default
    ));
    ?>
</div>

<?php
$this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'user-grid',
    //'htmlOptions' => array('style' => 'width:500px'),
    'pager' => array('cssFile' => Yii::app()->theme->baseUrl . '/css/gridViewStyle/gridView.css'),
    'cssFile' => Yii::app()->theme->baseUrl . '/css/gridViewStyle/gridView.css',
    'dataProvider' => $users->search(),
    'filter' => $users,
    'summaryText' => 'แสดงข้อมูล {start} - {end} จาก {count} รายการ ',
    'columns' => array(
        'id',
        'username',
        'name',
        'sname',
        'mobile',
        'email',
        array(
            'name' => 'group_id',
            'value' => '@$data->groups->name',
            'filter' => Group::model()->group,
        ),
        array(
            'name' => 'member_id',
            'value' => '@$data->members->name',
            //'value' => 'NewsCon::getPublish($data->publish)',
            'filter' => Member::model()->member,
        ),
        array(
            'header' => 'Managment',
            'class' => 'CButtonColumn',
            'template' => ' {edit} {delete}',
            'buttons' => array(
                'edit' => array(
                    'label' => 'Edit',
                    'imageUrl' => Yii::app()->theme->baseUrl . "/css/gridViewStyle/icon/gr-update.png",
                    'url' => 'Yii::app()->createUrl("User/UserForm", array("id" => $data->id))'
                ),
                'delete' => array(
                    'label' => 'Delete',
                    'visible' => '($data->id < 2 )?false:true',
                    'imageUrl' => Yii::app()->theme->baseUrl . "/css/gridViewStyle/icon/del.jpg",
                    'url' => 'Yii::app()->createUrl("User/Delete", array("id" => $data->id))',
                    'click' => 'function() { if (!confirm("ยืนยันการลบข้อมูล")) return false; }',
                ),
            )
        )
    )
));
?>

<div align="right" class="CbuttonDetail">
    <?= CHtml::image(Yii::app()->theme->baseUrl . "/css/gridViewStyle/icon/gr-update.png"); ?> = แก้ไข ,
    <?= CHtml::image(Yii::app()->theme->baseUrl . "/css/gridViewStyle/icon/del.jpg"); ?> = ลบข้อมูล
</div>

