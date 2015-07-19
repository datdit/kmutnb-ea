<?php

class TestController extends CController {

    public function actionIndex() {
        $data = array();
        $data["myValue"] = "จาก index";

        $this->render('index', $data);
    }

    public function actionUpdateAjax() {
        $data = array();
        $data["myValue"] = "แสดงจาก AJAX";

        $this->renderPartial('_ajaxContent', $data, false, true);
    }

}

?>
