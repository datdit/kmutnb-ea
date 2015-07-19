<?php

/*
 * Show Last Alumni  by Category.
 * Create By Kob. 2012-01-22.
 */

class BusinessListBanner extends CWidget {
    
    //public $model;
    public $order;
    public $maxlist;

    public function run() {
        $criteria = new CDbCriteria();
        $criteria->limit = $this->maxlist;
        $criteria->order = $this->order;
        $model = Business::model()->findAll($criteria);
        
        $this->render('BusinessListBanner', array(
            'model' => $model,
        ));
    }

}

?>
