<div id="main-menu">
    <?php
    $this->widget('application.extensions.mbmenu.MbMenu', array(
        'items' => array(
            array('label' => 'หน้าแรก', 'url' => array('/Main/index'),),
            array('label' => 'ผู้ใช้',
                'items' => array(
                    array('label' => 'ผู้ใช้ทั้งหมด', 'url' => array('/User/UserListAll'),),
                    array('label' => 'ประวัติส่วนตัว', 'url' => array('User/UserForm&id=' . Yii::app()->session['id'] )),
                    //array('label' => 'เปลี่ยนรหัสผ่าน', 'url' => array('/User/Password')),
                    array('label' => 'ธุรกิจ', 'url' => array('/User/BusinessForm')),
            )),
            array('label' => 'ข้อมูล',
                'items' => array(
                    array('label' => 'ข่าวประชาสัมพันธ์', 'url' => array('/News/NewsList')),
                    array('label' => 'อัลบั้มภาพ', 'url' => array('/Gallery/Index')),
                    array('label' => 'รู้จักพี่รู้จักน้อง', 'url' => array('/Alumni/Index')),
            )),
            
            array('label' => 'กลุ่มข้อมูล',
                'items' => array(
                    array('label' => 'กลุ่มข่าว', 'url' => array('/News/Index')),
                    array('label' => 'กลุ่มผู้ใช้', 'url' => array('/Group/Index')),
                    array('label' => 'กลุ่มสมาชิก', 'url' => array('/Member/Index')),
                    array('label' => 'จังหวัด', 'url' => array('/Province/Index')),
                //array('label' => 'กลุ่มสมาชิก', 'url' => array('/site/page', 'view' => 'about')),
            )),
            //array('label' => 'กำหนดสิทธิ์', 'url' => array('/rights'), 'visible' => Yii::app()->user->checkAccess(Rights::module()->superuserName)),
            //array('label' => 'เข้าระบบ', 'url' => array('/site/login'), 'visible' => Yii::app()->user->isGuest),
            array('label' => 'ออกระบบ (' . Yii::app()->session['username'] . ')', 'url' => array('/User/Logout')),
        ),
    ));
    ?>
</div>
