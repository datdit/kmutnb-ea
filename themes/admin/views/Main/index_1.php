

<p> Index back-end</p>

<?
echo CHtml::ajaxLink(
        //'แสดง kob', array('AjaxModule/ajax/KobAjax'), array(
        'Load Group', array('Group/Index'), array(
    'update' => '#req_res',
    'beforeSend' => 'function() {$("#my_body").addClass("loading");}',
    'complete' => 'function() {$("#my_body").removeClass("loading");}',
        )
);
?>

<div id="req_res"></div>

<?
$this->widget('zii.widgets.jui.CJuiDatePicker', array(
    'name'=>'my_date',
    'language'=>Yii::app()->language=='et' ? 'et' : null,
    'options'=>array(
        'showAnim'=>'fold', // 'show' (the default), 'slideDown', 'fadeIn', 'fold'
        'showOn'=>'button', // 'focus', 'button', 'both'
        'buttonText'=>Yii::t('ui','Select form calendar'),
        'buttonImage'=>Yii::app()->request->baseUrl.'/images/calendar.gif',
        'buttonImageOnly'=>true,
    ),
    'htmlOptions'=>array(
        'style'=>'width:80px;vertical-align:top'
    ),
));
?>


<?
echo CHtml::form();
echo CHtml::label("ชื่อ", "name");
echo CHtml::textField("name");
echo CHtml::label("วันที่", "mydate");
?>

<?
$this->widget('zii.widgets.jui.CJuiDatePicker', array(
    // you must specify name or model/attribute
    //'model'=>$model,
    //'attribute'=>'projectDateStart',
    'name' => 'mydate',
    // optional: what's the initial value/date?
    //'value' => $model->projectDateStart
    //'value' => '08/20/2010',
    'value' => date('m/d/yy'),
    // optional: change the language
    'language' => 'th',
    /*
     * try http://jqueryui.com/themeroller/
      'themeUrl' => Yii::app()->baseUrl.'/css/jui' ,
      'theme'=>'pool',	//try 'bee' also to see the changes
      'cssFile'=>array('jquery-ui.css' /*,anotherfile.css, etc.css */
    /*  ), */
    //  optional: jquery Datepicker options
    'options' => array(
        // how to change the input format? see http://docs.jquery.com/UI/Datepicker/formatDate
        'dateFormat' => 'mm/dd/yy',
        // user will be able to change month and year
        'changeMonth' => 'true',
        'changeYear' => 'true',
        // shows the button panel under the calendar (buttons like "today" and "done")
        'showButtonPanel' => 'true',
        // this is useful to allow only valid chars in the input field, according to dateFormat
        'constrainInput' => 'false',
        // speed at which the datepicker appears, time in ms or "slow", "normal" or "fast"
        'duration' => 'fast',
        // animation effect, see http://docs.jquery.com/UI/Effects
        'showAnim' => 'fade',
    ),
    // optional: html options will affect the input element, not the datepicker widget itself
    'htmlOptions' => array(
        'style' => 'height:25px;
            background:#fff;
            color:black;
            font-size:12px;
            border: 1px solid #555;
            padding-left: 4px;'
    )
        )
);


$this->widget('application.extensions.cleditor.ECLEditor', array('name' => 'editor',
    'options' => array(
        'width' => 600,
        'height' => 250,
    //'useCSS'=>true,
    )
));


/*
  $model = new Group();
  $groups = new CActiveDataProvider($model);
  $this->widget('application.extensions.cleditor.ECLEditor', array(
  'model' => $model  ,
  'attribute'=>'fieldName',
  'options'=>array(
  'width'=>600,
  'height'=>250,
  'useCSS'=>true,
  )
  ,
  'value'=>$groups->group_name,
  ));
 */


echo CHtml::label("จำนวนเงิน", "group_name");
$this->widget('CMaskedTextField', array(
//'model' => $groups,
//'attribute' => 'group_name',
    'name' => 'group_name',
    'mask' => '9',
    'htmlOptions' => array('size' => 20)
));




echo CHtml::endForm();




$this->widget('zii.widgets.jui.CJuiTabs', array(
    'tabs' => array(
        'ข้อมูลชุดที่ 1' => 'Content for tab 1',
        'StaticTab 2' => array('content' => 'Content for tab 2', 'id' => 'tab2'),
        // panel 3 contains the content rendered by a partial view
        'AjaxTab' => array('ajax' => $this->createUrl('News/NewsList')),
    ),
    // additional javascript options for the tabs plugin
    'options' => array(
        'collapsible' => true,
    ),
));




/*
  $this->widget('zii.widgets.grid.CGridView', array(
  'dataProvider' => $groups,
  'columns' => array(
  'id',
  'group_name'
  )
  ));
 */
?>

<?php 
 /*
$this->widget('application.extensions.tinymce.ETinyMce',
                array(
                    'name'=>'model_attribute',
                    'useSwitch' => false,
                    'editorTemplate'=>'full'
                    )
                ); 
  * 
  */
?>
