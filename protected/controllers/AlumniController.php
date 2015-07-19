<?php

class AlumniController extends Controller {

    public function actionIndex() {
        Yii::app()->theme = "admin";
        $model = new Alumni();
        $model->unsetAttributes();
        if (isset($_GET['Alumni'])) {
            $model->attributes = $_GET['Alumni'];
        }

        $this->render("/Alumni/AlumniList", array(
            "model" => $model,
        ));
    }

    public function actionAlumniForm($id = NULL) {
        Yii::app()->theme = "admin";
        $msg_text = "";
        $OldFile = "";

        if (!empty($_POST["Alumni"])) {
            $savetype = $_POST['savetype'];  // check return when saved
            // ใช้ในกรณีแก้ไข
            $model = new Alumni();
            $id = $_POST['Alumni']['id'];
            if (!empty($id)) {
                $model = Alumni::model()->findByPk($id);
                $OldFile = $model->pic;
            }

            $model->attributes = $_POST['Alumni'];
            $model->detail = $_POST['detail'];

            // Check Old File
            $file = CUploadedFile::getInstance($model, 'pic');
            if ((is_object($file) && get_class($file) === 'CUploadedFile'))
                $model->pic = $file;
            else
                $model->pic = $OldFile;

            if ($model->save()) {
                // if empty ID , get ID last save
                if (empty($id))
                    $id = Yii::app()->db->getLastInsertID();
                // Create Folder by User ID not Business id
                if (!empty($id)) {
                    $folder = 'upload/alumni/' . $id . '/';
                    if (!file_exists($folder)) {
                        mkdir($folder);
                        chmod($folder, 0777);
                    }
                }

                if ((is_object($file) && get_class($file) === 'CUploadedFile')) {
                    //print_r("<br>in save file");
                    $file->saveAs($folder . $file->getName());
                    // resize image
                    $fname = $folder . $file->getName();
                    $image = Yii::app()->image->load($fname);
                    $image->resize(400, 400);
                    $image->save();
                    // ลบ ภาพ เดิมออก

                    if (!empty($OldFile)) {
                        $old_file = $folder . $OldFile;
                        if (file_exists($old_file))
                            unlink($old_file);
                    }
                }

                if ($savetype == 1)
                    $this->redirect(array('/AlumniForm'));

                $msg_text = "<div class = 'facebox-save-success'>บันทึกข้อมูลเรียบร้อย</div>";
                // ตรวจสอบ id ถ้ามีค่าเป็นการแก้ไข แต่ถ้าไม่มีค่าเป็นการเพิ่ม
                if (empty($id))
                    $id = Yii::app()->db->getLastInsertID();
            }  // model Save
        }  // ถ้ามีการ submit
        // ค้นหาและแสดงข้อมูลในฟอร์มเพื่อรอการแก้ไข
        $model = new Alumni();
        //echo 'id : ' . @$id;
        if (!empty($id))
            $model = Alumni::model()->findByPk($id);
        // Render Form
        $this->render("/Alumni/AlumniForm", array(
            "model" => $model,
            "msg_text" => $msg_text
        ));
    }

}

?>
