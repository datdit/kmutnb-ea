<?php

class NewsCon extends CActiveRecord {

    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    public function tableName() {
        return 'news_contents';
    }

    public function relations() {
        return array(
            'news_categories' => array(self::BELONGS_TO, 'NewsCat', 'news_category_id'),
            'news_pics' => array(self::HAS_MANY, 'NewsPic', 'news_content_id'),
            'users' => array(self::BELONGS_TO, 'User', 'user_id'),
            // Cout User in Group
            'PicCount' => array(self::STAT, 'NewsPic', 'news_content_id')
        );
    }

    public function rules() {
        return array(
            array('news_head, news_sub_head, news_category_id, publish,hotnews', 'required'),
            //array('id, news_head, userstate', 'numerical', 'integerOnly' => true),
            array('news_head', 'length', 'max' => 80),
            array('news_sub_head, youtubevdo', 'length', 'max' => 200),
            array('youtubevdo', 'length', 'max' => 100),
            // for search
            array('id, news_head, news_category_id, publish, hotnews', 'safe', 'on' => 'search'),
            // Default data
            array('news_date, hotnews_date', 'default', 'value' => new CDbExpression('NOW()'), 'setOnEmpty' => false, 'on' => 'insert, update'),
            array('post_ip', 'default', 'value' => getenv('REMOTE_ADDR'), 'setOnEmpty' => false, 'on' => 'insert,update'),
            array('news_detail', 'filter', 'filter' => array($obj = new CHtmlPurifier(), 'purify')),
        );
    }

    public function search() {
        $criteria = new CDbCriteria;
        $criteria->compare('id', $this->id, true);
        $criteria->compare('news_head', $this->news_head, true);
        $criteria->compare('news_category_id', $this->news_category_id, TRUE);
        $criteria->compare('publish', $this->publish, TRUE);
        $criteria->compare('hotnews', $this->hotnews, TRUE);
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
            'news_category_id' => 'กลุ่มข่าว',
            'user_id' => 'ผู้ใช้',
            'news_head' => 'หัวข้อข่าว',
            'news_sub_head' => 'เนื้อหาข่าวย่อ',
            'youtubevdo' => 'Youtube VDO',
            'news_detail' => 'รายละเอียดข่าว',
            'news_pic' => 'ภาพข่าว',
            'publish' => 'เผยแพร่',
            'news_date' => 'วันที่ประกาศข่าว',
            'counter' => 'จำนวนคนดู',
            'hotnews' => 'ข่าวเด่น',
            'hotnews_date' => 'วันที่ข่าวเด่น',
            'post_id' => 'IP Address',
            'txt' => 'Text'
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

    static public function getHotNews($isHotNews) {
        if ($isHotNews == 1)
            return CHtml::image(Yii::app()->theme->baseUrl . "/css/gridViewStyle/icon/ok.png");
        else
            return CHtml::image(Yii::app()->theme->baseUrl . "/css/gridViewStyle/icon/gr-delete.png");
    }

    // สำหรับกำหนดใน ฟอร์ม
    public function getHotNewsForm() {
        return array(0 => 'ทั่วไป่', 1 => 'ข่าวเด่น');
    }

    // load data Filter by News ID
    public function getDataByCat($CatID) {
        $criteria = new CDbCriteria();
        $criteria->condition = "news_category_id = :id";
        $criteria->params = array(':id' => $CatID);
        return $this->findAll($criteria);
    }

}