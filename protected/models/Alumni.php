<?php

class Alumni extends CActiveRecord {

    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    public function tableName() {
        return 'alumni';
    }

    public function relations() {
        return array(
            'users' => array(self::BELONGS_TO, 'User', 'user_id'),
        );
    }

    public function rules() {
        return array(
            array('name', 'required'),
            array('name, youtubevdo', 'length', 'max' => 100),
            array('id, user_id, counter', 'numerical', 'integerOnly' => true),
            array('pic',
                'file',
                'types' => 'jpg, gif, png',
                'allowEmpty' => true,
                'maxSize' => 2 * 1024 * 1024,
                'on' => 'insert, update',
                'tooLarge' => 'The file was larger than 5MB. Please upload a smaller file.',
                'wrongType' => 'Please upload only images in the format jpg, gif, png',
            ),
            array('create_date', 'default', 'value' => new CDbExpression('NOW()'), 'setOnEmpty' => false, 'on' => 'insert, update'),
            array('post_ip', 'default', 'value' => getenv('REMOTE_ADDR'), 'setOnEmpty' => false, 'on' => 'insert, update'),
            array('user_id', 'default', 'value' => Yii::app()->session['id']),
            array('detail', 'filter', 'filter' => array($obj = new CHtmlPurifier(), 'purify')),
        );
    }

    public function attributeLabels() {
        return array(
            'id' => 'ID',
            'name' => 'ชื่อ-สกุล',
            'detail' => 'รายละเอียด',
            'pic' => 'รูปภาพ',
        );
    }

    public function search() {
        $criteria = new CDbCriteria;
        $criteria->compare('id', $this->id, true);
        $criteria->compare('name', $this->name, true);
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

}

?>
