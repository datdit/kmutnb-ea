<?php
class RegisController extends Controller {

    public function actions() {
        return array(
            // captcha action renders the CAPTCHA image displayed on the contact page
            'captcha' => array(
                'class' => 'CCaptchaAction',
                'backColor' => 0xFFFFFF,
                'testLimit' => 0,
            ),
        );
    }

    // =========== ลงทะเบียนผุ้ใช้ที่หน้าแรกของเว็บ =====================
    public function actionRegister() {
        $model = new UserRegis();
        if (isset($_POST['UserRegis'])) {
            $model->attributes = $_POST['UserRegis'];
            if ($model->validate()) {
                //$headers = "From: {$model->email}\r\nReply-To: {$model->email}";
                //mail(Yii::app()->params['adminEmail'], $model->subject, $model->body, $headers);
                //$usr = new User();
                //$usr->attributes = $_POST['User'];
                //$model->attributes = $_POST['RegisterForm'];
                $model->save();
                Yii::app()->user->setFlash('register', '<center>ขอบคุณสำหรบการลงทะเบียน<br><br>ท่านสามารถ Login เข้าระบบได้แล้ว</center>');
                $this->refresh();
            }
        }
        $this->render('/Regis/register', array('model' => $model));
    }

    public function actionLogin() {
        $model = new LoginForm;
        // collect user input data
        if (isset($_POST['LoginForm'])) {
            $model->attributes = $_POST['LoginForm'];
            // validate user input and redirect to the previous page if valid
            if ($model->validate()) {
                //$this->redirect(Yii::app()->user->returnUrl);
                $this->redirect(Yii::app()->params['MyBaseURL'] . 'Main/index');
            }
        }
        // display the login form
        $this->render('/Regis/login', array('model' => $model));
    }


    /**
     * Performs the AJAX validation.
     * @param CModel the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'register-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

}

?>
