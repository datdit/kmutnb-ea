<?php

/**
 * ContactForm class.
 * ContactForm is the data structure for keeping
 * contact form data. It is used by the 'contact' action of 'SiteController'.
 */
class RegisterForm extends CFormModel {

    //public $name;
    public $username;
    public $password;
    public $password2;
    public $email;
    public $name;
    public $sname;
    //public $subject;
    //public $body;
    public $verifyCode;

    /*
      public static function model($className = __CLASS__) {
      return parent::model($className);
      }

      public function tableName() {
      return 'users';
      }
     * 
     */

    /**
     * Declares the validation rules.
     */
    public function rules() {
        return array(
            // name, email, subject and body are required
            array('username, password, password2, name, email', 'required'),
            array('username', 'unique'), //, 'message' => ("User Name already exists.")),
            //array('password', 'length', 'max' => 64, 'min' => 6),
            //array('password2', 'length', 'max' => 64, 'min' => 6),
            // compare password to repeated password
            array('password', 'compare', 'compareAttribute' => 'password2'),
            // email has to be a valid email address
            array('email', 'email'),
            // verifyCode needs to be entered correctly
            array('verifyCode', 'captcha', 'allowEmpty' => !CCaptcha::checkRequirements()),
        );
    }

    /**
     * Declares customized attribute labels.
     * If not declared here, an attribute would have a label that is
     * the same as its name with the first letter in upper case.
     */
    public function attributeLabels() {
        return array(
            'username' => 'ชื่อ Login',
            'password' => 'รหัสผ่าน',
            'password2' => 'ยืนยันรหัสผ่าน',
            'name' => 'ชื่อ',
            'sname' => 'สกุล',
            'verifyCode' => 'Verification Code',
        );
    }

}