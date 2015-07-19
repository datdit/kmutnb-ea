<?php

/*
 * Show Last Alumni  by Category.
 * Create By Kob. 2012-01-22.
 */

class UserLast extends CWidget {

    public $maxlist;

    public function run() {
        $criteria = new CDbCriteria();
        $criteria->order = 'id DESC';
        $criteria->limit = $this->maxlist;
        $model = User::model()->findAll($criteria);

        $this->render('UserLast', array(
            'model' => $model,
        ));
    }

}

?>
