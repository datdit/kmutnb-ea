<?php

class NewsController extends Controller {

    public function init() {
        //Yii::app()->themeManager->basePath .= "/admin";
        //Yii::app()->themeManager->baseUrl .= "/admin";
        //Yii::app()->theme = "admin";
    }

    /**
     * This is the action to handle external exceptions.
     */
    /*
      public function actionError() {
      if ($error = Yii::app()->errorHandler->error) {
      if (Yii::app()->request->isAjaxRequest)
      echo $error['message'];
      else
      $this->render('inc/error', $error);
      }
      }
     * 
     */

    /**
     * Index for Category
     */
    public function actionIndex() {
        Yii::app()->theme = "admin";
        $model = new NewsCat("search");
        $model->unsetAttributes();
        if (isset($_GET['NewsCat'])) {
            $model->attributes = $_GET['NewsCat'];
        }

        $model2 = new NewsCat();
        $model2 = NewsCat::model()->findAll();

        $this->render("/News/NewsCatList", array(
            "NewsCats" => $model,
            'model2' => $model2
        ));
    }

    /**
     * Form for Catetory
     */
    public function actionCatForm($id = NULL) {
        Yii::app()->theme = "admin";
        $msg_text = "";
        if (!empty($_POST["NewsCat"])) {
            $savetype = $_POST['savetype'];  // check return when saved
            // ใช้ในกรณีแก้ไข
            $model = new NewsCat();
            $id = $_POST['NewsCat']['id'];
            if (!empty($id))
                $model = NewsCat::model()->findByPk($id);

            // Save to Data base
            $model->attributes = $_POST['NewsCat'];
            if ($model->save()) {
                if ($savetype == 1)
                    $this->redirect(array('News/CatForm'));
                $msg_text = "<div class='facebox-save-success'>บันทึกข้อมูลเรียบร้อย</div>";
                // ตรวจสอบ id ถ้ามีค่าเป็นการแก้ไข แต่ถ้าไม่มีค่าเป็นการเพิ่มใหม่
                if (empty($id))
                    $id = Yii::app()->db->getLastInsertID();
            }
        }
        // ค้นหาและแสดงข้อมูลในฟอร์มเพื่อรอการแก้ไข
        $model = new NewsCat();
        if (!empty($id))
            $model = NewsCat::model()->findByPk($id);
        // Render Form
        $this->render("/News/NewsCatForm", array(
            "model" => $model,
            "msg_text" => $msg_text
        ));
    }

    /**
     * Index for News
     */
    public function actionNewsList() {
        /*
        Yii::app()->cache->flush();
        // Load all tables of the application in the schema
        Yii::app()->db->schema->getTables();
        // clear the cache of all loaded tables
        Yii::app()->db->schema->refresh();
        */
        
        Yii::app()->theme = "admin";
        $model = new NewsCon("search");
        //$model->unsetAttributes();
        if (isset($_GET['NewsCon'])) {
            $model->attributes = $_GET['NewsCon'];
        }
        $this->render("/News/NewsConList", array(
            "NewsCons" => $model
        ));
    }

    /**
     * Form for Catetory
     */
    public function actionConForm($id = NULL) {
        Yii::app()->theme = "admin";
        $msg_text = "";
        if (!empty($_POST["NewsCon"])) {
            $savetype = $_POST['savetype'];  // check return when saved
            // ใช้ในกรณีแก้ไข
            $model = new NewsCon();
            $id = $_POST['NewsCon']['id'];
            if (!empty($id))
                $model = NewsCon::model()->findByPk($id);

            // Save to Data base
            $model->attributes = $_POST['NewsCon'];
            $model->news_detail = $_POST['news_detail'];
            //$model->youtubevdo = $_POST['youtubevdo'];
            //$model->txt = $_POST['txt'];
            if ($model->save()) {
                if ($savetype == 1)
                    $this->redirect(array('News/NewsConForm'));
                $msg_text = "<div class='facebox-save-success'>บันทึกข้อมูลเรียบร้อย</div>";
                // ตรวจสอบ id ถ้ามีค่าเป็นการแก้ไข แต่ถ้าไม่มีค่าเป็นการเพิ่มใหม่
                if (empty($id))
                    $id = Yii::app()->db->getLastInsertID();
            }
        }
        // ค้นหาและแสดงข้อมูลในฟอร์มเพื่อรอการแก้ไข
        $model = new NewsCon();   // for news Data
        $model_pic = new NewsPic(); // for news Picture
        if (!empty($id))
            $model = NewsCon::model()->findByPk($id);
        // Render Form
        $this->render("/News/NewsConForm", array(
            "model" => $model,
            'model_pic' => $model_pic,
            "msg_text" => $msg_text
        ));
    }

    public function actionSetPublish() {
        //echo "id : $id";
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $model = new NewsCon;
            $model = NewsCon::model()->findByPk($id);  // use whatever the correct class name is
            $model->publish = ($model->publish == 1 ? 0 : 1);
            $model->save();
            //return true;
        }
    }

        public function actionSetHotNews() {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $model = new NewsCon;
            $model = NewsCon::model()->findByPk($id);  // use whatever the correct class name is
            $model->hotnews = ($model->hotnews == 1 ? 0 : 1);
            $model->hotnews_date = new CDbExpression('NOW()');            
            $model->save();
            return true;
        } else {
            return FALSE;
        }
    }

    public function actionPicList() {
        Yii::app()->theme = "admin";
        $model = new NewsPic();
        $NewsPics = new CActiveDataProvider($model);
        $this->renderPartial("/News/NewsPicList", array(
            "NewsPics" => $NewsPics,
        ));
    }

    public function actionPicListByNews($id) {
        Yii::app()->theme = "admin";
        $model = new NewsPic();
        $model = NewsPic::model()->getDataByNews($id);
        //$NewsPics = new CActiveDataProvider($model);
        $this->renderPartial("/News/NewsPicList", array(
            "NewsPics" => $model,
            "NewsID" => $id,
        ));
    }

    public function actionUploadPic($id) {
        // Create Folder for News ID
        $folder = 'upload/news/' . $id . '/';
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
        $model = New NewsPic();
        $model->news_content_id = $id;
        $model->pic_name = $fileName;
        //$model->upload_date = new CDbExpression("NOW()"); //date("Y-m-d H:i:s");
        //$model->post_ip = getenv('REMOTE_ADDR');
        $model->save();

        echo $return; // it's array
    }

    public function actionPicDel($id) {
        //$model = New NewsPic();
        $model = NewsPic::model()->findByPk($id);
        $NewsID = $model->news_content_id;

        // Delete Picture
        if ($model->delete()) {
            $filePic = 'upload/news/' . $NewsID . '/' . $model->pic_name;
            unlink($filePic);
            $filePic = 'upload/news/' . $NewsID . '/thumb_' . $model->pic_name;
            unlink($filePic);
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function actionSetFirstPic($id) {
        //$model = New NewsPic();
        $model = NewsPic::model()->findByPk($id);
        $fileName = $model->pic_name;
        $NewsID = $model->news_content_id;

        // กำหนดสถานทั้งหมดเป็น 0 ก่อน
        $criteria = 'news_content_id = ' . $NewsID;
        NewsPic::model()->updateAll(array('firstpic' => 0), $criteria);

        // กำหนดสถานะของภาพว่าเป็นภาพแรกของข่าว
        $model = NewsPic::model()->findByPk($id);
        $model->firstpic = 1;
        $model->save();

        // กำหนดชื่อไฟล์ภาพสำหรับภาพแรกของข่าว
        $modelCon = NewsCon::model()->findByPk($NewsID);
        $modelCon->news_pic = $fileName;
        if ($modelCon->save()) {
            return TRUE;
        }
        else
            return FALSE;
    }

}

?>
