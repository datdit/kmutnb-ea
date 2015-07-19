<?php

/*
 * Show Last Alumni  by Category.
 * Create By Kob. 2012-01-22.
 */

class GalleryLast extends CWidget {

    public $model;

    public function run() {

        $this->render('GalleryLast', array(
            'model' => $this->model,
        ));
    }

}

?>
