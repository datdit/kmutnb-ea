<?php

/*
 * Main Controller
 */

class MainController extends Controller {

    public function actionIndex() {
        Yii::app()->theme = "back";
        $this->render("index");
        //$this->rend
        Yii::app()->end();
    }
    
    public function actionShowData() {
        Yii::app()->theme = "back";
        $this->renderPartial("showdata");
        $this->actionCGridView();
    }
    
    public function actionCGridView() {
        Yii::app()->theme = "back";
        $model = new Group();
        $groups = new CActiveDataProvider($model);
        $this->render("CGridView", array(
            "groups" => $groups
        ));
    }


}

?>
