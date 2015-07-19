<div id="data">
   <?php $this->renderPartial('_ajaxContent', array('myValue'=>$myValue)); ?>
</div>
 
<?php echo CHtml::ajaxButton ("Update data",
                              CController::createUrl('Test/UpdateAjax'), 
                              array('update' => '#data'));
?>