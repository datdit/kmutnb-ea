<?php

class ProvinceController extends Controller {

    public function init() {
        //Yii::app()->themeManager->basePath .= "/admin";
        //Yii::app()->themeManager->baseUrl .= "/admin";
        Yii::app()->theme = "admin";
    }

    public function actionIndex() {
        //Yii::app()->theme = "back";
        $model = new Province("search");
        $model->unsetAttributes();
        if (isset($_GET['Province'])) {
            $model->attributes = $_GET['Province'];
        }

        //$groups = new CActiveDataProvider($model);
        $this->render("/Province/ProvinceList", array(
            "provinces" => $model
        ));
    }
/*
    public function actionForm($id = NULL) {
        $msg_text = "";
        if (!empty($_POST["Member"])) {
            $savetype = $_POST['savetype'];  // check return when saved
            $member = new Member();
            $id = $_POST['Member']['id'];
            // ใช้ในกรณีแก้ไข
            if (!empty($id))
                $member = Member::model()->findByPk($id);

            // Save to Data base
            $member->attributes = $_POST['Member'];
            if ($member->save()) {
                if ($savetype == 1)
                    $this->redirect(array('Member/Form'));
                $msg_text = "<div class='facebox-save-success'>บันทึกข้อมูลเรียบร้อย</div>";
                // ตรวจสอบ id ถ้ามีค่าเป็นการแก้ไข แต่ถ้าไม่มีค่าเป็นการเพิ่มใหม่
                if (empty($id))
                    $id = Yii::app()->db->getLastInsertID();
            }
        }

        $model = new Member();
        if (!empty($id))
            $model = Member::model()->findByPk($id);

        $this->render("MemberForm", array(
            "model" => $model,
            "msg_text" => $msg_text
        ));
    }
 * 
 */
}

?>
