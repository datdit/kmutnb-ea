<?php

/*
 * Show news by Category.
 * Create By Kob. 2012-01-22.
 */

class ShowListAlumniAll extends CWidget {
    
    public $model;
    
    public function run() {
        $this->render('ShowListAlumniAll', array(
            'models' => $this->model,
        ));
    }
}
?>
