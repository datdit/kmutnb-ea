<?php

class NewsCat extends CActiveRecord {
    
    //public $id;
    //public $group_name;
    //public $group_id;
    //public $UserCount;

    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    public function tableName() {
        return "news_categories";
    }

    public function rules() {
        return array(
            //array('cat_name', 'required' , 'message' => 'ต้องกรอกข้อมูล'),
            array('cat_name', 'required'),
            array('cat_name', 'length', 'max' => 50),
            // for search
            array('id, cat_name', 'safe', 'on' => 'search'),
        );
    }
    
    
    public function relations() {
        return array(
            'news_contents' => array(self::HAS_MANY, 'NewsCon', 'news_category_id'),
            // Cout User in Group
            'NewsCount' =>array(self::STAT, 'NewsCon', 'news_category_id')
        );
    }

    public function search() {
        $criteria = new CDbCriteria;
        $criteria->compare('id', $this->id, true);
        $criteria->compare('cat_name', $this->cat_name, true);
        return new CActiveDataProvider(get_class($this), array(
            'criteria' => $criteria,
            'sort' => array(
                'attributes' => array(
                  'id', 'cat_name',  
                ),
                'defaultOrder' => 'id ASC',
            ),
            'pagination' => array(
                'pageSize' => Yii::app()->user->getState('pageSize', Yii::app()->params['defaultPageSize']),
            )
                ));
    }

    public function attributeLabels() {
        return array(
            "id" => "รหัสกลุ่มข่าว",
            "cat_name" => "กลุ่มข่าว",
            "NewsCount" => "จำนวนข่าว"
        );
    }
    
    public function ShowCountNews($data, $row) {
        if ($data->NewsCount < 1) {
            return "-";
        } else {
            return $data->NewsCount;
        }
    }
    
    // Return array Dropdown
    public function getCategory() {
        return CHtml::listData($this->findAll(array('order' => 'cat_name')), 'id', 'cat_name');
    }
    
}

?>
