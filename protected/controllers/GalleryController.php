<?php

class GalleryController extends Controller {

    public function init() {
        //Yii::app()->themeManager->basePath .= "/admin";
        //Yii::app()->themeManager->baseUrl .= "/admin";
        //Yii::app()->theme = "admin";
    }


    /**
     * Index for Gallery
     */
    public function actionIndex() {
        Yii::app()->theme = "admin";
        $model = new Gallery("search");
        $model->unsetAttributes();
        if (isset($_GET[''])) {
            $model->attributes = $_GET['Gallery'];
        }

        $this->render("/Gallery/GalleryList", array(
            "model" => $model,
        ));
    }

    /**
     * Form for Catetory
     */
    public function actionGalleryForm($id = NULL) {
        Yii::app()->theme = "admin";
        $msg_text = "";
        if (!empty($_POST["Gallery"])) {
            $savetype = $_POST['savetype'];  // check return when saved
            // ใช้ในกรณีแก้ไข
            $model = new Gallery();
            $id = $_POST['Gallery']['id'];
            if (!empty($id))
                $model = Gallery::model()->findByPk($id);

            // Save to Data base
            $model->attributes = $_POST['Gallery'];
            $model->detail = $_POST['detail'];
            //$model->youtubevdo = $_POST['youtubevdo'];
            //$model->txt = $_POST['txt'];
            if ($model->save()) {
                if ($savetype == 1)
                    $this->redirect(array('Gallery/GaleryForm'));
                $msg_text = "<div class='facebox-save-success'>บันทึกข้อมูลเรียบร้อย</div>";
                // ตรวจสอบ id ถ้ามีค่าเป็นการแก้ไข แต่ถ้าไม่มีค่าเป็นการเพิ่มใหม่
                if (empty($id))
                    $id = Yii::app()->db->getLastInsertID();
            }
        }
        // ค้นหาและแสดงข้อมูลในฟอร์มเพื่อรอการแก้ไข
        $model = new Gallery();   // for news Data
        $model_pic = new GalleryPic(); // for news Picture
        if (!empty($id))
            $model = Gallery::model()->findByPk($id);
        // Render Form
        $this->render("/Gallery/GalleryForm", array(
            "model" => $model,
            'model_pic' => $model_pic,
            "msg_text" => $msg_text
        ));
    }

    public function actionSetPublish() {
        //echo "id : $id";
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $model = new Gallery;
            $model = Gallery::model()->findByPk($id);  // use whatever the correct class name is
            $model->publish = ($model->publish == 1 ? 0 : 1);
            $model->save();
            //return true;
        }
    }

    public function actionPicList() {
        Yii::app()->theme = "admin";
        $model = new GalleryPic();
        $GalleryPics = new CActiveDataProvider($model);
        $this->renderPartial("/Gallery/GalleryPicList", array(
            "GalleryPics" => $GalleryPics,
        ));
    }

    public function actionPicListByGallery($id) {
        Yii::app()->theme = "admin";
        $model = new GalleryPic();
        $model = GalleryPic::model()->getDataByGallery($id);
        //$NewsPics = new CActiveDataProvider($model);
        $this->renderPartial("/Gallery/GalleryPicList", array(
            "GalleryPics" => $model,
            "GalleryID" => $id,
        ));
    }

    public function actionUploadPic($id) {
        // Create Folder for News ID
        $folder = 'upload/gallery/' . $id . '/';
        if (!file_exists($folder)) {
            mkdir($folder);
            chmod($folder, 0777);
        }

        Yii::import("ext.EAjaxUpload.qqFileUploader");
        //$folder = 'upload/news/' . $id . '/';  // folder for uploaded files
        $allowedExtensions = array("jpg", "jpeg", "gif", "png");
        $sizeLimit = 2 * 1024 * 1024; // maximum file size in bytes ( 1 * 1024 * 1024 = 1MB)
        $uploader = new qqFileUploader($allowedExtensions, $sizeLimit);
        $result = $uploader->handleUpload($folder);
        $return = htmlspecialchars(json_encode($result), ENT_NOQUOTES);

        $fileSize = filesize($folder . $result['filename']); //GETTING FILE SIZE
        $fileName = $result['filename']; //GETTING FILE NAME
        //
        // Resize
        $fname = $folder . $fileName;
        $image = Yii::app()->image->load($fname);
        $image->resize(120, 80);
        // New Name
        $NewName = $folder . "thumb_" . $fileName;
        $image->save($NewName);

        // Save to Data base
        $model = New GalleryPic();
        $model->gallery_id = $id;
        $model->pic_name = $fileName;
        //$model->upload_date = new CDbExpression("NOW()"); //date("Y-m-d H:i:s");
        //$model->post_ip = getenv('REMOTE_ADDR');
        $model->save();

        echo $return; // it's array
    }

    public function actionPicDel($id) {
        //$model = New NewsPic();
        $model = GalleryPic::model()->findByPk($id);
        $GID = $model->gallery_id;

        // Delete Picture
        if ($model->delete()) {
            $filePic = 'upload/gallery/' . $GID . '/' . $model->pic_name;
            if (file_exists($filePic)) unlink($filePic);
            $filePic = 'upload/gallery/' . $GID . '/thumb_' . $model->pic_name;
            if (file_exists($filePic)) unlink($filePic);
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function actionSetFirstPic($id) {
        //$model = New NewsPic();
        $model = GalleryPic::model()->findByPk($id);
        $fileName = $model->pic_name;
        $GID = $model->gallery_id;

        // กำหนดสถานทั้งหมดเป็น 0 ก่อน
        $criteria = 'gallery_id = ' . $GID;
        GalleryPic::model()->updateAll(array('firstpic' => 0), $criteria);

        // กำหนดสถานะของภาพว่าเป็นภาพแรกของข่าว
        $model = GalleryPic::model()->findByPk($id);
        $model->firstpic = 1;
        $model->save();

        // กำหนดชื่อไฟล์ภาพสำหรับภาพแรกของข่าว
        $modelG = Gallery::model()->findByPk($GID);
        $modelG->firstpic = $fileName;
        if ($modelG->save()) {
            return TRUE;
        }
        else
            return FALSE;
    }

}

?>
