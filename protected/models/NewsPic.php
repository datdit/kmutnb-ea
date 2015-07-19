<?php

class NewsPic extends CActiveRecord {

    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    public function tableName() {
        return 'news_pics';
    }

    public function relations() {
        return array(
            'news_contents' => array(self::BELONGS_TO, 'NewsCon', 'news_content_id')
        );
    }

    public function rules() {
        return array(
            array('pic_name', 'required'),
            array('pic_name', 'safe'),
            //array('image', 'file', 'types' => 'jpg, gif, png', 'allowEmpty' => true, 'on' => 'update'),
            array('upload_date', 'default', 'value' => new CDbExpression('NOW()'), 'setOnEmpty' => false, 'on' => 'insert, update'),
            array('post_ip', 'default', 'value' => getenv('REMOTE_ADDR'), 'setOnEmpty' => false, 'on' => 'insert,update')
        );
    }

    /*
      public function rules() {
      // NOTE: you should only define rules for those attributes that
      // will receive user inputs.
      return array(
      array('news_content_id', 'numerical', 'integerOnly' => true),
      //array('file', 'length', 'max'=&gt;128),
      array('pic_name', 'file', 'types' => 'jpg, gif, png', 'maxSize' => 1048576, 'wrongType' => 'Only jpg, gif, png allowed.'),
      array('upload_date, post_ip', 'safe'),
      // The following rule is used by search().
      // Please remove those attributes that should not be searched.
      //array('id, file, description, create_time, create_user_id, update_time, update_user_id', 'safe', 'on' => 'search'),
      array('upload_date', 'default', 'value' => new CDbExpression('NOW()'), 'setOnEmpty' => false, 'on' => 'insert, update'),
      array('post_ip', 'default', 'value' => getenv('REMOTE_ADDR'), 'setOnEmpty'=>false, 'on' => 'insert,update')
      );
      }
     * 
     */

    public function attributeLabels() {
        return array(
            'id' => 'ID',
            'pic_name' => 'รูปภาพ',
        );
    }

    public function search($news_content_id) {
        $criteria = new CDbCriteria;
        //$criteria->compare('id', $this->id, true);
        $criteria->condition = "news_content_id = $news_content_id";
        return new CActiveDataProvider(get_class($this), array(
            'criteria' => $criteria,
                //'pagination' => array('off')
                ));
    }

// load data Filter by News ID
    public function getDataByNews($news_content_id) {
        $criteria = new CDbCriteria();
        $criteria->condition = "news_content_id = $news_content_id";
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
