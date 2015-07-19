<?php

/*
 * Show news by Category.
 * Create By Kob. 2012-01-22.
 */

class ShowListGalleryAll extends CWidget {
    
    public $model;
    
    public function run() {
        $this->render('ShowListGalleryAll', array(
            'models' => $this->model,
        ));
    }
}
?>
