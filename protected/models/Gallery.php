<?php

class Gallery extends CActiveRecord {

    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    public function tableName() {
        return 'gallery';
    }

    public function relations() {
        return array(
            'gallerypic' => array(self::HAS_MANY, 'GalleryPic', 'gallery_id'),
            'users' => array(self::BELONGS_TO, 'User', 'user_id'),
            // Cout User in Group
            'PicCount' => array(self::STAT, 'GalleryPic', 'gallery_id')
        );
    }

    public function rules() {
        return array(
            array('name, publish', 'required'),
            array('name', 'length', 'max' => 100),
            array('counter', 'numerical', 'integerOnly' => true),
            // for search
            array('id, name, publish, hotnews', 'safe', 'on' => 'search'),
            // Default data
            array('create_date', 'default', 'value' => new CDbExpression('NOW()'), 'setOnEmpty' => false, 'on' => 'insert, update'),
            array('post_ip', 'default', 'value' => getenv('REMOTE_ADDR'), 'setOnEmpty' => false, 'on' => 'insert,update'),
            array('detail', 'filter', 'filter' => array($obj = new CHtmlPurifier(), 'purify')),
            array('user_id', 'default', 'value' => Yii::app()->session['id']),
        );
    }

    public function search() {
        $criteria = new CDbCriteria;
        $criteria->compare('id', $this->id, true);
        $criteria->compare('name', $this->name, true);
        $criteria->compare('publish', $this->publish, TRUE);
        return new CActiveDataProvider(get_class($this), array(
            'criteria' => $criteria,
            'sort' => array(
                'defaultOrder' => 'id ASC',
            ),
            'pagination' => array(
                'pageSize' => Yii::app()->user->getState('pageSize', Yii::app()->params['defaultPageSize']),
            )
                ));
    }

    public function attributeLabels() {
        return array(
            'id' => 'ID',
            'user_id' => 'ผู้ใช้',
            'name' => 'ชื่ออัลบั้ม',
            'detail' => 'รายละเอียด',
            'publish' => 'เผยแพร่',
            'create_date' => 'วันที่ประกาศข่าว',
            'counter' => 'จำนวนคนดู',
            'post_id' => 'IP Address',
        );
    }

    // สำหรับกำหนดใน CGridView
    static public function getPublish($isPublish) {
        if ($isPublish == 1)
            return CHtml::image(Yii::app()->theme->baseUrl . "/css/gridViewStyle/icon/ok.png");
        else
            return CHtml::image(Yii::app()->theme->baseUrl . "/css/gridViewStyle/icon/gr-delete.png");
    }

    // สำหรับกำหนดใน ฟอร์ม
    public function getPublishForm() {
        return array(1 => 'เผยแพร่', 0 => 'ไม่เผยแพร่');
    }

}