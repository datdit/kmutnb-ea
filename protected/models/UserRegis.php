<?php

class UserRegis extends CActiveRecord {

    public $password2;
    public $verifyCode;

    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    public function tableName() {
        return 'users';
    }

    public function rules() {
        return array(
            array('username, password, password2, name, email', 'required'),            
            //array('id, group_id, userstate', 'numerical', 'integerOnly' => true),
            array('username, password, name, sname', 'length', 'max' => 50),
            array('email' , 'length', 'max' => 100),
            array('username', 'unique'),
            // check confirm password
            array('password', 'compare', 'compareAttribute' => 'password2', 'on' => 'insert'),
            // email has to be a valid email address
            array('email', 'email'),
            // verifyCode needs to be entered correctly
            array('verifyCode', 'captcha', 'allowEmpty' => !CCaptcha::checkRequirements(), 'on' => 'insert'),
            // for search
            //array('username, name, sname, telephone, email, group_id, member_id', 'safe', 'on' => 'search'),
            //array('group_id', 'default', 'value' => 2, 'setOnEmpty' => false, 'on' => 'insert'),
            //array('member_id', 'default', 'value' => 2, 'setOnEmpty' => false, 'on' => 'insert'),
        );
    }
/*
    public function relations() {
        return array(
            'groups' => array(self::BELONGS_TO, 'Group', 'group_id'),
            'members' => array(self::BELONGS_TO, 'Member', 'member_id'),
        );
    }
/*
    public function search() {
        $criteria = new CDbCriteria;
        $criteria->compare('id', $this->id, true);
        $criteria->compare('username', $this->username, true);
        $criteria->compare('name', $this->name, true);
        $criteria->compare('sname', $this->sname, true);
        $criteria->compare('telephone', $this->telephone, true);
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
*/
    public function attributeLabels() {
        return array(
            'id' => 'ID',
            'username' => 'UserName',
            'password' => 'Password',
            'password2' => 'Confirm Password',
            'name' => 'ชื่อ',
            'sname' => 'สกุล',
            'email' => 'E-mail',
            //'telephone' => 'โทรศัพท์',
            //'avatar' => 'ภาพประจำตัว',
            //'userstate' => 'สถานะ',
            //'group_id' =>'กลุ่มผู้ใช้',
            //'member_id' => 'สมาชิก',
            //'myblog' => 'Blog',
        );
    }

}