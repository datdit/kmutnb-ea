<?php

class GalleryPic extends CActiveRecord {

    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    public function tableName() {
        return 'gallerypic';
    }

    public function relations() {
        return array(
            'gallery' => array(self::BELONGS_TO, 'Galler', 'gallery_id')
        );
    }

    public function rules() {
        return array(
            array('pic_name', 'required'),
            array('pic_name', 'safe'),
            //array('image', 'file', 'types' => 'jpg, gif, png', 'allowEmpty' => true, 'on' => 'update'),
            array('upload_date', 'default', 'value' => new CDbExpression('NOW()'), 'setOnEmpty' => false, 'on' => 'insert, update'),
            array('post_ip', 'default', 'value' => getenv('REMOTE_ADDR'), 'setOnEmpty' => false, 'on' => 'insert,update'),
            array('user_id', 'default' , 'value' => Yii::app()->session['id']),            
        );
    }

    public function attributeLabels() {
        return array(
            'id' => 'ID',
            'pic_name' => 'รูปภาพ',
        );
    }

    public function search($gallery_id) {
        $criteria = new CDbCriteria;
        //$criteria->compare('id', $this->id, true);
        $criteria->condition = "gallery_id = $gallery_id";
        return new CActiveDataProvider(get_class($this), array(
            'criteria' => $criteria,
                //'pagination' => array('off')
                ));
    }

// load data Filter by News ID
    public function getDataByGallery($gallery_id) {
        $criteria = new CDbCriteria();
        $criteria->condition = "gallery_id = $gallery_id";
        return $this->findAll($criteria);
    }

    /*
    public function searchNewPic($news_content_id) {
        $criteria = new CDbCriteria();
        $criteria->condition = "news_content_id = $news_content_id";
        return new CActiveDataProvider($this, array("criteria" => $criteria));
    }
     * 
     */

}

?>
