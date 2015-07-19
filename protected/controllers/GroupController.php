<?php

class GroupController extends Controller {

    public function init() {
        //Yii::app()->themeManager->basePath .= "/admin";
        //Yii::app()->themeManager->baseUrl .= "/admin";
        Yii::app()->theme = "admin";
    }

    public function actionIndex() {
        //Yii::app()->theme = "back";
        $model = new Group("search");
        $model->unsetAttributes();
        if (isset($_GET['Group'])) {
            $model->attributes = $_GET['Group'];
        }

        //$groups = new CActiveDataProvider($model);
        $this->render("/Group/GroupList", array(
            "groups" => $model
        ));
    }

   
    public function actionForm($id = NULL) {
        $msg_text = "";
        if (!empty($_POST["Group"])) {
            $savetype = $_POST['savetype'];  // check return when saved
            $group = new Group();
            $id = $_POST['Group']['id'];
            // ใช้ในกรณีแก้ไข
            if (!empty($id))
                $group = Group::model()->findByPk($id);

            // Save to Data base
            $group->attributes = $_POST['Group'];
            if ($group->save()) {
                if ($savetype == 1)
                    $this->redirect(array('Group/Form'));
                $msg_text = "<div class='facebox-save-success'>บันทึกข้อมูลเรียบร้อย</div>";
                // ตรวจสอบ id ถ้ามีค่าเป็นการแก้ไข แต่ถ้าไม่มีค่าเป็นการเพิ่มใหม่
                if (empty($id))
                    $id = Yii::app()->db->getLastInsertID();
            }
        }

        $model = new Group();
        if (!empty($id))
            $model = Group::model()->findByPk($id);

        $this->render("/Group/GroupForm", array(
            "model" => $model,
            "msg_text" => $msg_text
        ));
    }

}

?>
