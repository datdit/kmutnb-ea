<?php

class User extends CActiveRecord {

    //public $password2;
    //public $verifyCode;

    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    public function tableName() {
        return 'users';
    }

    public function rules() {
        return array(
            array('username, name, email', 'required'),
            array('id, group_id, member_id, work_province, home_province, userstate', 'numerical', 'integerOnly' => true),
            array('genNo, yearNo, mobile, work_tel, work_fax, home_tel, home_fax', 'length', 'max' => 20),
            array('username, password, scholarNo', 'length', 'max' => 50),
            array('name, sname, faculty, position, email, avatar', 'length', 'max' => 100),
            array('work_add, home_add', 'length', 'max' => 200),
            array('username', 'unique'),
            array('user_note', 'filter', 'filter' => array($obj = new CHtmlPurifier(), 'purify')),
            // check confirm password
            //array('password', 'compare', 'compareAttribute' => 'password2', 'on' => 'insert'),
            // email has to be a valid email address
            //array('email', 'email'),
            // verifyCode needs to be entered correctly
            //array('verifyCode', 'captcha', 'allowEmpty' => !CCaptcha::checkRequirements(), 'on' => 'insert'),
            // for search
            array('username, name, sname, telephone, email, group_id, member_id', 'safe', 'on' => 'search'),
            array('group_id', 'default', 'value' => 2, 'setOnEmpty' => false, 'on' => 'insert'),
            array('member_id', 'default', 'value' => 2, 'setOnEmpty' => false, 'on' => 'insert'),
        );
    }

    public function relations() {
        return array(
            'groups' => array(self::BELONGS_TO, 'Group', 'group_id'),
            'members' => array(self::BELONGS_TO, 'Member', 'member_id'),
            'province1' => array(self::BELONGS_TO, 'Province', 'home_province'),
            'province2' => array(self::BELONGS_TO, 'Province', 'work_province'),
        );
    }

    public function search() {
        $criteria = new CDbCriteria;
        $criteria->compare('id', $this->id, true);
        $criteria->compare('username', $this->username, true);
        $criteria->compare('name', $this->name, true);
        $criteria->compare('sname', $this->sname, true);
        $criteria->compare('mobile', $this->mobile, true);
        $criteria->compare('email', $this->email, true);
        $criteria->compare('group_id', $this->group_id);
        $criteria->compare('member_id', $this->member_id);
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
            'username' => 'UserName',
            'password' => 'Password',
            'password2' => 'Confirm Password',
            'name' => 'ชื่อ',
            'sname' => 'สกุล',
            'faculty' => 'สาขาวิชา',
            'genNo' => 'รุ่นที่',
            'yearNo' => 'ปีที่',
            'position' => 'ตำแหน่งงาน',
            'work_add' => 'สถานที่ทำงาน',
            'work_province' => 'จังหวัดที่ทำงาน',
            'home_add' => 'ที่อยู่',
            'home_province' => 'จังหวัดที่อยู่',
            'email' => 'E-mail',
            'mobile' => 'มือถือ',
            'work_tel' => 'โทรศัพท์ที่ทำงาน',
            'work_fax' => 'แฟ็กซ์ที่ทำงาน',
            'home_tel' => 'โทรศัพท์ที่บ้าน',
            'home_fax' => 'แฟ็กซ์ที่บ้าน',
            'avatar' => 'ภาพประจำตัว',
            'userstate' => 'สถานะ',
            'group_id' => 'กลุ่มผู้ใช้',
            'member_id' => 'สมาชิก',
            'user_note' => 'ข้อมูลเพิ่มเติม'
        );
    }

}