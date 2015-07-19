<?php

/*
 * Show news by Category.
 * Create By Kob. 2012-01-22.
 */

class ShowListNewsAll extends CWidget {
    
    public $model;
    public $CatID;
    
    public function run() {
        $this->render('ShowListNewsAll', array(
            'models' => $this->model,
        ));
    }
}
?>
