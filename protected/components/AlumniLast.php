<?php

/*
 * Show Last Alumni  by Category.
 * Create By Kob. 2012-01-22.
 */

class AlumniLast extends CWidget {

    public $model;

    public function run() {
        $this->render('AlumniLast', array(
            'model' => $this->model,
        ));
    }

}

?>
