<?php

/*
 * Main Controller
 */

class MainController extends CController {

    public function init() {
        //Yii::app()->themeManager->basePath .= "/admin";
        //Yii::app()->themeManager->baseUrl .= "/admin";
        Yii::app() -> theme = "admin";
    }

    public function actionIndex() {

        if (empty(Yii::app() -> session['id'])) {
            $this->redirect(Yii::app()->params['MyBaseURL']);            
        }

        //$this->setPageTitle('home');
        //Yii::app()->theme = "admin";
        $data = array();
        $data["myValue"] = "Content loaded";
        $this -> render("/Main/index", $data);
        //$this->rend
        //Yii::app()->end();
        //$topnav = $this->renderPartial("topnav", array('model' => $model), true);
        //$this->render("index",array('model' => $model, 'topnav' => $topnav));
        //$topnav = $this->renderPartial("topnav", $data);
        //$this->render("index",array('topnav' => $topnav));
    }

    public function actionShowData() {
        Yii::app() -> theme = "admin";
        $this -> renderPartial("showdata");
        $this -> actionCGridView();
    }
    
    public function  actionCalendar() {
    	
    }

    public function actionUpdateAjax() {
        $data = array();
        $data["myValue"] = "แสดงข้อมูลจาก Controll by ajax";
        $this -> renderPartial('_ajaxContent', $data, FALSE, TRUE);
    }

}
?>
