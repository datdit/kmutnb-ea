<?php

class Group extends CActiveRecord {
    
    //public $id;
    //public $group_name;
    //public $group_id;
    //public $UserCount;

    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    public function tableName() {
        return "groups";
    }

    public function rules() {
        return array(
            array('name', 'required'),
            array('name', 'length', 'max' => 50),
            // for search
            array('id, name', 'safe', 'on' => 'search'),
        );
    }
    
    
    public function relations() {
        return array(
            'users' => array(self::HAS_MANY, 'User', 'group_id'),
            // Cout User in Group
            'UserCount' =>array(self::STAT, 'User', 'group_id')
        );
    }

    public function search() {
        $criteria = new CDbCriteria;
        $criteria->compare('name', $this->name, true);
        $criteria->compare('id', $this->id, true);
        return new CActiveDataProvider(get_class($this), array(
            'criteria' => $criteria,
            'sort' => array(
                'attributes' => array(
                  'id', 'name',  
                ),
                'defaultOrder' => 'id ASC',
            ),
            'pagination' => array(
                'pageSize' => 10,
            ),
                ));
    }

    public function attributeLabels() {
        return array(
            "id" => "รหัส",
            "name" => "ชื่อกลุ่ม",
            "UserCount" => "จำนวนผู้ใช้"
        );
    }
    
    public function ShowCountUser($data, $row) {
        if ($data->UserCount < 1) {
            return "-";
        } else {
            return $data->UserCount;
        }
    }
    
            // Return array Dropdown
    public function getGroup() {
        return CHtml::listData($this->findAll(array('order' => 'name')), 'id', 'name');
    }

    /*
    public function ShowEdit($data,$row) {
        $link = CHtml::link("Edit", array("UserEdit", "id" => $data->id));
        return $link;
    }
*/
}

?>
