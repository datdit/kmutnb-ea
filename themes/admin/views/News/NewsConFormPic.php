<script type="text/javascript">
    
    function delFile(id) {
        //alert(id);
    if (confirm('ยืนยันการลบไฟล์')) {
            $.ajax({
                data: {id: id},
                //url: "<?//= Yii::app()->createUrl('News/PicDel', array('id' => $model->id)); ?>",
                url: "<?= Yii::app()->params['MyBaseURL']; ?>News/PicDel&id=" + id,
                type: 'POST',
                dataType: 'json',
                success: function() {
                    ShowPic();
                },
                error: function() {
                    alert('ไม่สามารถทำรายการได้ !!');
                }
            });
        }
        return false;
    }
    
    function SetFirstPic(id) {
        //alert(id);
    if (confirm('ยืนยันการกำหนดเป็นภาพแรกของข่าว')) {
            $.ajax({
                data: {id: id},
                url: "<?= Yii::app()->params['MyBaseURL']; ?>News/SetFirstPic&id=" + id,
                type: 'POST',
                dataType: 'json',
                success: function() {
                    ShowPic();
                    alert('กำหนดภาพแรกของเนื้อหาเรียบร้อย');
                },
                error: function() {
                    alert('ไม่สามารถทำรายการได้ !!');
                }
            });
        }
        return false;
    }
    
    
</script>

<? //php Yii::app()->clientScript->registerCoreScript('jquery');  ?>

<?
$this->widget('ext.EAjaxUpload.EAjaxUpload', array(
    'id' => 'uploadFile',
    'config' => array(
        'action' => Yii::app()->createUrl('News/UploadPic', array("id" => $model->id)),
        'allowedExtensions' => array("jpg", "jpeg", "gif", "png"), //,"mov" and etc...
        'sizeLimit' => 2 * 1024 * 1024, // maximum file size in bytes  ( 1 * 1024 * 1024 = 1MB)
        //'minSizeLimit'=>10*1024*1024,// minimum file size in bytes
        //'onComplete'=>"js:function(id, fileName, responseJSON){ alert('Upload ' + fileName +  ' Complete'); }",
        //'onComplete' => "js:function(id, fileName, responseJSON){ 
        //    alert(responseJSON['filename']);
        //    }",
        'onComplete' => "js:function(id, fileName, responseJSON) { 
            ShowPic();
            }",
        'messages' => array(
            'typeError' => "{file} ชนิดไฟล์ไม่ถูกต้อง สามารถ Upload ได้เฉพาะไฟล์ชนิด {extensions}",
            'sizeError' => "{file} มีขนาดใหญ่เกิน Upload ได้ไม่เกิน {sizeLimit}.",
            'minSizeError' => "{file} is too small, minimum file size is {minSizeLimit}.",
            'emptyError' => "{file} is empty, please select files again without it.",
            'onLeave' => "The files are being uploaded, if you leave now the upload will be cancelled."
        ),
        'showMessage' => "js:function(message){ alert(message); }"
    )
));
?>

<script type="text/javascript">
    function ShowPic() {
        var url = "<?= Yii::app()->createUrl('News/PicListByNews', array('id' => $model->id)); ?>";
        //var url = "<?//= Yii::app()->createUrl('News/PicList'); ?>";
        $("#req_res").load(url);
        //alert(url);
    }
</script>

<?
//$showLink = "แแสดงภาพ (" . $model->PicCount . ")";
$showLink = '<div style="
    display: block; 
    height: 25px; 
    width: 100px; 
    padding: 3px; 
    border : 1px solid #ff8080;
    background-color: #FBC2C4;
    text-align:center;
    font-weight:bold;
    ">
    แสดงภาพ
</div>';
echo CHtml::ajaxLink(
        //'แสดง kob', array('AjaxModule/ajax/KobAjax'), array(
        $showLink, array('News/PicListByNews', 'id' => $model->id), array(
        //$showLink, array('News/PicList'), array(
    'update' => '#req_res',
    'beforeSend' => 'function() {$("#my_body").addClass("loading");}',
    'complete' => 'function() {$("#my_body").removeClass("loading");}',
        )
);
?>



<div id="req_res"></div>
