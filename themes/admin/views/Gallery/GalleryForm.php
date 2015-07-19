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
    <div class="title">อัลบั้มภาพ</div>&nbsp;
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
            <a href="index.php?r=Gallery/GalleryForm" >
                <img src="<?= Yii::app()->theme->baseUrl; ?>/images/toolbar/add.png" alt=""/>
                เพิ่มอัลบั้ม</a>
            <a href="index.php?r=Gallery/index" >
                <img src="<?= Yii::app()->theme->baseUrl; ?>/images/toolbar/stop.png" alt=""/>
                ปิด</a>
        </div>
    </div>
    <div class="clear"></div>
</div>

<?
if ($model->id != NULL) {
    $this->widget('CTabView', array(
        'activeTab' => 'tab1',
        'cssFile' => Yii::app()->theme->baseUrl . '/css/CTabView.css',
        'tabs' => array(
            'tab1' => array(
                'title' => 'รายละเอียดอัลบั้ม',
                'view' => '//Gallery/GalleryFormData',
                'data' => array('model' => $model)
            ),
            'tab2' => array(
                'title' => 'ภาพอัลบั้ม',
                'view' => '//Gallery/GalleryFormPic',
                'data' => array('model' => $model, 'model_pic' => $model_pic)
            ),
        ),
        'htmlOptions' => array(
            'style' => 'width:100%;'
        )
    ));
} else {
    $this->widget('CTabView', array(
        'activeTab' => 'tab1',
        'cssFile' => Yii::app()->theme->baseUrl . '/css/CTabView.css',
        'tabs' => array(
            'tab1' => array(
                'title' => 'รายละเอียดอัลบั้ม',
                'view' => '//Gallery/GalleryFormData',
                'data' => array('model' => $model)
            ),
        ),
        'htmlOptions' => array(
            'style' => 'width:100%;'
        )
    ));
}
?>