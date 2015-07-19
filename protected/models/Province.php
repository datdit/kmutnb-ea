<?php

class Province extends CActiveRecord {

    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    public function tableName() {
        return "province";
    }

    public function rules() {
        return array(
            array('name', 'required'),
            array('name', 'length', 'max' => 50),
            // for search
            array('id, name', 'safe', 'on' => 'search'),
        );
    }
    
/*    
    public function relations() {
        return array(
            'news_contents' => array(self::HAS_MANY, 'NewsCon', 'news_category_id'),
            // Cout User in Group
            'NewsCount' =>array(self::STAT, 'NewsCon', 'news_category_id')
        );
    }
 * 
 */

    public function search() {
        $criteria = new CDbCriteria;
        $criteria->compare('id', $this->id, true);
        $criteria->compare('name', $this->name, true);
        return new CActiveDataProvider(get_class($this), array(
            'criteria' => $criteria,
            'sort' => array(
                'attributes' => array(
                  'id', 'name',  
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
            "id" => "รหัสจังหวัด",
            "cat_name" => "ชื่อจังหวัด",
        );
    }
    
    // Return array Dropdown
    public function getProvince() {
        return CHtml::listData($this->findAll(array('order' => 'name')), 'id', 'name');
    }
    
}

?>
