<?php

class Business extends CActiveRecord {

    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    public function tableName() {
        return 'business';
    }

    public function relations() {
        return array(
            'users' => array(self::BELONGS_TO, 'User', 'user_id'),
            'province' => array(self::BELONGS_TO, 'Province', 'province_id'),
        );
    }

    public function rules() {
        return array(
            array('name', 'required'),
            array('name, amphur, email, website, facebook', 'length', 'max' => 100),
            array('telephone', 'length', 'max' => 20),
            array('address, detail', 'length', 'max' => 200),
            array('id, province_id, rating', 'numerical', 'integerOnly' => true),
            array('banner',
                'file',
                'types' => 'jpg, gif, png',
                'allowEmpty' => true,
                'maxSize' => 2 * 1024 * 1024,
                'on' => 'insert, update',
                'tooLarge' => 'The file was larger than 5MB. Please upload a smaller file.',
                'wrongType' => 'Please upload only images in the format jpg, gif, png',
            ),
            array('post_ip', 'default', 'value' => getenv('REMOTE_ADDR'), 'setOnEmpty' => false, 'on' => 'insert, update'),
            array('user_id', 'default', 'value' => Yii::app()->session['id']),
        );
    }

    public function attributeLabels() {
        return array(
            'id' => 'ID',
            'name' => 'ชื่อธุรกิจ',
            'address' => 'ที่ตั้ง',
            'amphur' => 'อำเภอ',
            'province_id' => 'จังหวัด',
            'detail' => 'รายละเอียด',
            'banner' => 'แบบเนอร์',
            'contact' => 'ผู้ติดต่อ',
            'email' => 'E-mail',
            'website' => 'Website',
            'facebook' => 'Facebook',
        );
    }

    public function search($user_id) {
        $criteria = new CDbCriteria;
        //$criteria->compare('id', $this->id, true);
        //$criteria->condition = "user_id = $user_id";
        return new CActiveDataProvider(get_class($this), array(
            'criteria' => $criteria,
                //'pagination' => array('off')
        ));
    }


// load data Filter by News ID
    public function getDataByUser($user_id) {
        $criteria = new CDbCriteria();
        $criteria->condition = "user_id = $user_id";
        return $this->findAll($criteria);
    }

}

?>
