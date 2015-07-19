<?php
$baseUrl = Yii::app()->theme->baseUrl;
$cs = Yii::app()->getClientScript();
//$cs->registerScriptFile($baseUrl.'/js/login.js');
$cs->registerCssFile($baseUrl . '/css/home-form.css');
?>


<div class="leftcolumn">
    <p class="headtitleblack" style="line-height: 20px;"><b>Login เข้าสู่ระบบ Control Panel</b></p><br />


    <?php // if (Yii::app()->session["id"] == null): ?>

    <div id="contactform">
        <?php //= CHtml::form('index.php?r=User/CheckLogin', 'post', array('id' => 'contactform', 'class' => 'rounded')) ?>
        <?php
        $form = $this->beginWidget('CActiveForm', array(
            'id' => 'login-form',
            'enableClientValidation' => true,
            'clientOptions' => array(
                'validateOnSubmit' => true,
            ),
                ));
        ?>


        <h3>Login : </h3>

        <?php echo $form->errorSummary($model); ?>
        
        <div class="field">
            <?php echo $form->labelEx($model, 'username'); ?>
            <?php echo $form->textField($model, 'username' , array('class' => 'input', 'style'=>'width:150px;')); ?>
            <?php echo $form->error($model, 'username'); ?>
            <p class="hint">Enter User Name.</p>
        </div>

        <div class="field">
            <?php echo $form->labelEx($model, 'password'); ?>
            <?php echo $form->passwordField($model, 'password', array('class' => 'input',  'style'=>'width:150px;')); ?>
            <?php echo $form->error($model, 'password'); ?>
            <p class="hint">Enter Your Password.</p>
        </div>

        <div class="field-check">
            <?php echo $form->checkBox($model, 'rememberMe', array('class' => 'checkbox')); ?>
            <?php echo $form->label($model, 'rememberMe'); ?>
            <?php echo $form->error($model, 'rememberMe'); ?>
        </div>

        <!--
       <div class="field">
           <label for="message">Message:</label>
           <textarea class="input textarea" name="message" id="message">
           </textarea>
           <p class="hint">Write your message.</p>
       </div>
        -->
        <?php echo CHtml::submitButton('Login', array('class' => 'button')) ?>
        <?php $this->endWidget(); ?>
    </div>
</div>