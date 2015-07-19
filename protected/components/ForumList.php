<?php

/*
 * Show phpBB Forum.
 * Create By Kob. 2013-01-31.
 */

class ForumList extends CWidget {
    
    public $model;
    
    public function run() {
        $this->render('ForumList', array(
            'models' => $this->model,
        ));
    }
}

?>
