<?php

class HomeController extends Controller {
/*
    public function init() {
        $this->_Advertisements = Advertisement::model()->findAllAdvertisements($this->userId);
        $this->
    }
 * 
 */

    public function actionIndex() {
        // Yii::app()->theme = "front";
        $this->render('/Home/index');
    }

    public function actionCalendar() {
        $this->render('/Home/Calendar');
    }

    public function actionReadNews($id) {
        // update counter
        $model = NewsCon::model()->findByPk($id);
        $model->counter = $model->counter + 1;
        $model->save();

        // Load news
        $model = NewsCon::model()->findByPk($id);
        // $modelPic = new NewsPic();
        $modelPic = NewsPic::model()->getDataByNews($id);

        $this->render('/Home/ReadNews', array('NewsCons' => $model, 'NewsPics' => $modelPic));
    }

    public function actionListNews($CatID) {
        $criteria = new CDbCriteria();
        $criteria->condition = 'news_category_id = :id';
        $criteria->order = 'id DESC';
        $criteria->params = array(':id' => $CatID);

        $item_count = NewsCon::model()->count($criteria);

        $pages = new CPagination($item_count);
        $pages->setPageSize(Yii::app()->params['defaultPageSize']);
        $pages->applyLimit($criteria);

        $this->render('/Home/ListNews', array('model' => NewsCon::model()->findAll($criteria),
            'item_count' => $item_count,
            'page_size' => Yii::app()->params['defaultPageSize'],
            'pages' => $pages, 'CatID' => $CatID));
    }

    // ======================================
    // ================ ALUMNI ================
    // ======================================

    public function actionReadAlumni($id) {
        // update counter
        $model = Alumni::model()->findByPk($id);
        $model->counter = $model->counter + 1;
        $model->save();

        // Load Alumni
        $model = Alumni::model()->findByPk($id);
        $this->render('/Home/ReadAlumni', array('model' => $model));
    }

    public function actionListAlumni() {
        $criteria = new CDbCriteria();
        // $criteria->condition = 'news_category_id = :id';
        $criteria->order = 'id DESC';
        // $criteria->params = array(':id' => $CatID);
        $item_count = Alumni::model()->count($criteria);

        $pages = new CPagination($item_count);
        $pages->setPageSize(Yii::app()->params['defaultPageSize']);
        $pages->applyLimit($criteria);

        $this->render('/Home/ListAlumni', array('model' => Alumni::model()->findAll($criteria),
            'item_count' => $item_count,
            'page_size' => Yii::app()->params['defaultPageSize'],
            'pages' => $pages));
    }

    // ======================================
    // ================ GALLERY ================
    // ======================================

    public function actionReadGallery($id) {
        // update counter
        $model = Gallery::model()->findByPk($id);
        $model->counter = $model->counter + 1;
        $model->save();

        // Load Alumni
        $model = Gallery::model()->findByPk($id);
        $modelPic = GalleryPic::model()->getDataByGallery($id);

        $this->render('/Home/ReadGallery', array('model' => $model, 'modelPic' => $modelPic));
    }

    public function actionListGallery() {
        $criteria = new CDbCriteria();
        // $criteria->condition = 'news_category_id = :id';
        $criteria->order = 'id DESC';
        // $criteria->params = array(':id' => $CatID);
        $item_count = Gallery::model()->count($criteria);

        $pages = new CPagination($item_count);
        $pages->setPageSize(Yii::app()->params['defaultPageSize']);
        $pages->applyLimit($criteria);

        $this->render('/Home/ListGallery', array('model' => Gallery::model()->findAll($criteria),
            'item_count' => $item_count,
            'page_size' => Yii::app()->params['defaultPageSize'],
            'pages' => $pages));
    }

        /*
     * =================== User List =====================
     */
    
        public function actionUserListAll() {
        // $criteria = new CDbCriteria;
        // $criteria->condition = "id = 4";
        $dataProvider = new CActiveDataProvider('User');
        $dataProvider->pagination->pageSize = 15;
        $this->render("/Home/UserListAll", array(
            "dataProvider" => $dataProvider,
            "txtsearch" => "Display All"));
    }

        public function actionUserSearch() {
        // $_POST['txtsearch'];

		echo 'post : ' .  $_POST['butSearch'];


		exit;

        if (!empty($_POST['txtsearch'])) {
            $txtsearch = $_POST['txtsearch'];
            $criteria = new CDbCriteria;
            $criteria->condition = "name LIKE '%$txtsearch%' OR sname LIKE '%$txtsearch%' ";
            //$criteria->compare('name', $txtsearch); // = "'$txtsearch' LIKE '%name%'";
            $dataProvider = new CActiveDataProvider('User');
            $dataProvider->criteria = $criteria;
            $dataProvider->pagination->pageSize = 15;
            $this->render("/Home/UserListAll", array(
                "dataProvider" => $dataProvider,
                "txtsearch" => "Results of Search keyword : $txtsearch"));
        }
    }

    public function actionUserView($id) {
        $model = User::model()->findByPk($id);
        $this->render("/Home/UserView", array("model" => $model));
    }

    
        /*
     * ===============================================
     */

    /*
     * =================== Business =====================
     */

    public function actionBusinessList() {
        // for Lastest
        $criteria = new CDbCriteria;
        $criteria->order = "id DESC";
        $criteria->limit = 2;
        $dataProvider = new CActiveDataProvider('Business');
        $dataProvider->pagination = FALSE;
        $dataProvider->criteria = $criteria;

        // for Heigh Rating
        $criteria2 = new CDbCriteria;
        $criteria2->order = "rating DESC";
        $criteria2->limit = 2;
        $dataProvider2 = new CActiveDataProvider('Business');
        $dataProvider2->pagination = FALSE;
        $dataProvider2->criteria = $criteria2;

        $this->render("/Home/BusinessList", array(
            "dataProvider" => $dataProvider,
            "dataProvider2" => $dataProvider2,
        ));
    }

    public function actionBusinessListAll() {
        // $criteria = new CDbCriteria;
        // $criteria->condition = "id = 4";
        $dataProvider = new CActiveDataProvider('Business');
        $dataProvider->pagination->pageSize = 15;
        $this->render("/Home/BusinessListAll", array(
            "dataProvider" => $dataProvider,
            "txtsearch" => "Display All"));
    }

    public function actionBusinessSearch() {
        // $_POST['txtsearch'];
        if (!empty($_POST['txtsearch'])) {
            $txtsearch = $_POST['txtsearch'];
            $criteria = new CDbCriteria;
            $criteria->condition = "name LIKE '%$txtsearch%' OR detail LIKE '%$txtsearch%' ";
            //$criteria->compare('name', $txtsearch); // = "'$txtsearch' LIKE '%name%'";
            $dataProvider = new CActiveDataProvider('Business');
            $dataProvider->criteria = $criteria;
            $dataProvider->pagination->pageSize = 15;
            $this->render("/Home/BusinessListAll", array(
                "dataProvider" => $dataProvider,
                "txtsearch" => "Results of Search keyword : $txtsearch"));
        }
    }

    public function actionBusinessView($id) {
        $model = Business::model()->findByPk($id);
        $this->render("/Home/BusinessView", array("model" => $model));
    }

    // Caculate Rating and cal Average
    /*
    public function actionRatingAjax() {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $model = Business::model()->findByPk($id); // use whatever the
            // correct
            $model->rating_cnt += 1;
            $model->rating += $_GET['rate'];
            $model->rating_avg = round($model->rating / $model->rating_cnt, 2);
            if ($model->save())
                return true;
            else
                return FALSE;
        }
    }
     * 
     */

    public function actionRating() {
        if (Yii::app()->request->isAjaxRequest) {
            $id = $_GET['id'];
            $model = Business::model()->findByPk($id); // use whatever the
            // correct
            $model->rating_cnt += 1;
            $model->rating += $_GET['val'];
            $model->rating_avg = round($model->rating / $model->rating_cnt, 2);
            $model->save();
            echo CJSON::encode(
                    array('status' => 'success',
                        'div' => 'Thank you for voting! Score = ' . $_GET['val']));
        }
    }

    public function actionLoadRating($id) {
        $model = Business::model()->findByPk($id);
        $this->renderPartial("/Home/LoadRating", array("model" => $model), false, true);
    }

}

?>
