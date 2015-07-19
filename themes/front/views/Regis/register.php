<?php
$baseUrl = Yii::app()->theme->baseUrl;
$cs = Yii::app()->getClientScript();
//$cs->registerScriptFile($baseUrl.'/js/login.js');
$cs->registerCssFile($baseUrl . '/css/home-form.css');
?>


<?php $this->widget('application.components.BreadCrumb', array(
  'crumbs' => array(
    array('name' => 'Home', 'url' => array('/')),
    array('name' => 'Register'),
  ),
  //'delimiter' => ' > ', // if you want to change it
)); ?>

<div class="leftcolumn">
    
    <p class="headtitleblack" style="line-height: 20px;"><b>Register</b></p><br />
    <div id="contactform">

        <h3>Register : </h3>

        <?php if (Yii::app()->user->hasFlash('register')): ?>
            <div class="flash-success">
                <?php echo Yii::app()->user->getFlash('register'); ?>
            </div>
        <? endif; ?>

        <?php
        $form = $this->beginWidget('CActiveForm', array(
            'id' => 'register-form',
            'enableAjaxValidation' => true,
            'enableClientValidation' => true,
                ));
        ?>

        <?php echo $form->errorSummary($model); ?>

        <div class="field">
            <?php echo $form->labelEx($model, 'username'); ?>
            <?php echo $form->textField($model, 'username', array('class' => 'input' , 'style'=>'width:150px;')); ?>
            <?php echo $form->error($model, 'username'); ?>
            <p class="hint">Enter User Name.</p>
        </div>

        <div class="field">
            <?php echo $form->labelEx($model, 'password'); ?>
            <?php echo $form->passwordField($model, 'password', array('class' => 'input' , 'style'=>'width:150px;')); ?>
            <?php echo $form->error($model, 'password'); ?>
            <p class="hint">Enter your password.</p>
        </div>

        <div class="field">
            <?php echo $form->labelEx($model, 'password2'); ?>
            <?php echo $form->passwordField($model, 'password2', array('class' => 'input' , 'style'=>'width:150px;')); ?>
            <?php echo $form->error($model, 'password2'); ?>
            <p class="hint">Confirm your password.</p>
        </div>

        <div class="hrLine"></div>

        <div class="field">
            <?php echo $form->labelEx($model, 'name'); ?>
            <?php echo $form->textField($model, 'name', array('class' => 'input')); ?>
            <?php echo $form->error($model, 'name'); ?>
            <p class="hint">Enter Your Name.</p>
        </div>

        <div class="field">
            <?php echo $form->labelEx($model, 'sname'); ?>
            <?php echo $form->textField($model, 'sname', array('class' => 'input')); ?>
            <?php echo $form->error($model, 'sname'); ?>
            <p class="hint">Enter your SurName.</p>
        </div>

        <div class="field">
            <?php echo $form->labelEx($model, 'email'); ?>
            <?php echo $form->textField($model, 'email', array('class' => 'input')); ?>
            <?php echo $form->error($model, 'email'); ?>
            <p class="hint">Enter Your E-mail.</p>
        </div>

        <div class="hrLine"></div>

        <?php if (CCaptcha::checkRequirements()): ?>
            <div class="field">
                <?php echo $form->labelEx($model, 'verifyCode'); ?>
                <div>
                    <?php $this->widget('CCaptcha'); ?>
                    <?php echo $form->textField($model, 'verifyCode', array('style' => 'margin:10px 0 0 150px;height:20px;')); ?>
                </div>
                <div class="hint" style="margin-left: 300px;">Please enter the letters as they are shown in the image above.
                    <br/>Letters are not case-sensitive.</div>
                <?php echo $form->error($model, 'verifyCode'); ?>
            </div>
        <?php endif; ?>

        <?php echo  CHtml::submitButton('Register', array('class' => 'button')) ?>
        <?php $this->endWidget(); ?>

    </div>
</div>

