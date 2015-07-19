<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class TopNav_User extends CWidget {

    public function run() {
        echo '<div id="main-menu">';
        $this->widget('application.extensions.mbmenu.MbMenu', array(
            'items' => array(
                array('label' => 'หน้าแรก', 'url' => array('/Main/index'),),
                array('label' => 'ผู้ใช้',
                    'items' => array(
                        array('label' => 'ประวัติส่วนตัว', 'url' => array('User/UserForm&id=' . Yii::app()->session['id'])),
                        //array('label' => 'เปลี่ยนรหัสผ่าน', 'url' => array('/User/Password')),
                        array('label' => 'ธุรกิจ', 'url' => array('/User/BusinessForm')),
                )),
                array('label' => 'ออกระบบ (' . Yii::app()->session['username'] . ')', 'url' => array('/User/Logout')),
            ),
        ));
        echo '</div>';
    }

}

?>
