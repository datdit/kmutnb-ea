<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" href="<?= Yii::app()->theme->baseUrl; ?>/css/style.css" type="text/css" />
        <link rel="stylesheet" href="<?= Yii::app()->theme->baseUrl; ?>/css/page.css" type="text/css" />
        <link rel="stylesheet" href="<?= Yii::app()->theme->baseUrl; ?>/css/breadCrumb.css" type="text/css" />

        <!--[if gt IE 6]>
        <style type="text/css">
        html>body ul.domtabs a:link,
        html>body ul.domtabs a:visited,
        html>body ul.domtabs a:active,
        html>body ul.domtabs a:hover{
        padding:10px;
        }
        </style>
        <![endif]-->

        <title>สมาคมศิษย์เก่าวิศวกรรมศาสตร์พระจอมเกล้าพระนครเหนือ</title>
    </head>
    <body>
        <!--Header-->
        <div class="header">
            <!--Header Main-->
            <div class="headermain">
                <div class="logo">
                    <a href="/"><img src="<?= Yii::app()->theme->baseUrl; ?>/images/logo.jpg" alt="สมาคมศิษย์เก่ามหาวิทยาลัยเทคโนโลยีพระจอมเกล้าพระนครเหนือ" width="532" height="119" /></a>
                </div>

                <?php if (empty(Yii::app()->session['id'])) { ?>
                    <?php Yii::app()->user->setState('isUser', false); ?>
                    <?php Yii::app()->user->setState('isGuest', true); ?>
                    <div class="toplogin">
                        <ul>
                            <li><a href="<?= Yii::app()->params['MyBaseURL'] ?>/Regis/Login" class="loginsite">Login</a></li>
                            <li><a href="<?= Yii::app()->params['MyBaseURL'] ?>/Regis/Register" class="register">Regis</a></li>
                            <li><a href="#" class="forgot">Forgot</a></li>
                        </ul>
                    </div>
                <?php } else { ?>
                    <?php Yii::app()->user->setState('isGuest', false); ?>
                    <div class="toplogin2">
                        <ul>
                            <li><a href="<?= Yii::app()->params['MyBaseURL'] ?>/Main/index" class="controlpanel">control</a></li>
                            <li><a href="<?= Yii::app()->params['MyBaseURL'] ?>/User/Logout" class="logout">logout</a></li>
                        </ul>
                    </div>
                <?php } ?>

            </div>

        </div>
        <!--Navigation-->
        <div id="main-menu">
            <div id="in-main-menu">
                <?php
                //$mbtxt = CHtml::image(Yii::app()->theme->baseUrl . '/images/sm1.png') .  "Logout";
                $this->widget('application.extensions.mbmenu.MbMenu', array(
                    'items' => array(array('label' => 'หน้าแรก', 'url' => array('/'),),
                        array('label' => 'เกี่ยวกับสมาคม', 'url' => array('/Home/ReadNews&id=1'),),
                        array('label' => 'ข่าวสารกิจกรรม', 'url' => array('/Home/ListNews&CatID=4'),),
                        array('label' => 'บทความ', 'url' => array('/Home/ListNews&CatID=2'),),
                        array('label' => 'รายงานการประชุม', 'url' => array('/Home/ListNews&CatID=3'),),
                        array('label' => 'ปฏิทินกิจกรรม', 'url' => array('/Home/Calendar'),),
                        array('label' => 'เว็บบอร์ด', 'url' => 'http://www.kmutnb-ea.net/forum', 'linkOptions' => array('target' => '_blank')),
                        array('label' => 'ติดต่อสอบถาม', 'url' => array('/Home/ReadNews&id=2'),),
                        array('label' => 'เข้าสู่ระบบ',
                            'url' => array('/Regis/Login'),
                            'visible' => Yii::app()->user->isGuest,
                        ),
                        array('label' => 'User (' . Yii::app()->session['username'] . ')',
                            'visible' => Yii::app()->user->isUser,
                            'items' => array(
                                array('label' => 'Control Panel', 'url' => array('/Main/index')),
                                array('label' => 'Logut', 'url' => array('/User/Logout')),
                            )
                        )
                    /*
                     * 
                      array('label' => 'ออกจากระบบ (' . Yii::app()->session['username'] . ')',
                      'url' => array('/User/Logout'),
                      'visible' => Yii::app()->user->isUser),


                      array('label' => 'ข้อมูลระบบ', //เมนูหลักที่2 ที่มีเมนูย่อย
                      'items' => array(
                      array('label' => 'ติดต่อเรา', 'url' => array('#')), //เมนูย่อยที่ 1
                      array('label' => 'เกี่ยวกับระบบ', 'url' => array('/site/page', 'view' => 'about')), //เมนูย่อยที่ 2
                      ),
                      ),
                     * *

                      //array('label' => 'กำหนดสิทธิ์', 'url' => array('/rights'), 'visible' => Yii::app()->user->checkAccess(Rights::module()->superuserName)),
                      array('label' => 'เข้าระบบ', 'url' => array('/site/login'), 'visible' => Yii::app()->user->isGuest),
                      array('label' => 'ออกระบบ (' . Yii::app()->session['username'] . ')', 'url' => array('/User/Logout')),
                     *
                     */
                    ),));
                ?>
            </div>
        </div>
        
        <div class="clear"></div>

        <!--Page-->
        <div class="warpper">
            <div class="warppage">
                <!--Left Column-->
                <!-- content -->

                <?= $content; ?>

                <!--Right Column-->
                <div class="rightcolumn">

                    <div class="listbox_right">
                        <div class="listbox_right_part">
                            <p class="headtitleblack_right_part">
                                <img src="<?= Yii::app()->theme->baseUrl ?>/images/title_ned.jpg" width="99" height="20" alt="งาน NED" />
                            </p>
                            <div class="container_right_part">
                                <a href="<?= Yii::app()->params['MyBaseURL']; ?>Home/ListNews&CatID=5"> <img src="<?= Yii::app()->theme->baseUrl ?>/images/banner_ned.jpg" width="170" height="232" alt="ned" border="0" /> </a>
                            </div>
                        </div>

                        <!-- =========== End Ned News -->

                        <div class="listbox_right_part_right">
                            <p class="headtitleblack_right_part">
                                <img src="<?= Yii::app()->theme->baseUrl ?>/images/title_video.jpg" width="87" height="20" alt="ภาพวิดีโอกิจกรรม" />
                            </p>
                            <div class="container_right_part" style="background:url('<?= Yii::app()->theme->baseUrl ?>/images/bg_tran1.jpg') bottom left no-repeat">

                                <DIV CLASS="boxlastmember">
                                    <?php
                                    $this->widget('application.extensions.flowplayer.JFlowPlayer', array(
                                        //'url' =>     'upload/vdo/video.flv',
                                        //'url' => '/kmutnb-ea/upload/vdo/video.flv',
                                        //'url' => Yii::app()->baseUrl.'/video.flv',
                                        'id' => 'player', 'width' => '170px', 'height' => '100px',));
                                    ?>

                                </div>

                                <ul class="listvideo">
                                    <li>
                                        <img src="<?= Yii::app()->theme->baseUrl ?>/images/member_thumb_video.jpg" width="45" height="45" />

                                        <p><strong>
                                                กอล์ฟการกุศล
                                            </strong></p>
                                        <p>
                                            แมทต์ประทับใจ
                                        </p>
                                    </li>
                                    <li>
                                        <img src="<?= Yii::app()->theme->baseUrl ?>/images/member_thumb_video2.jpg" width="45" height="45" />

                                        <p><strong>
                                                มี๊ตติ้งรุ่น 25
                                            </strong></p>
                                        <p>
                                            พบปะสังสรรค์ รุ่น 25
                                        </p>
                                    </li>
                                </ul>
                                <p class="more">
                                    <a href="#"><img src="<?= Yii::app()->theme->baseUrl ?>/images/more.jpg" width="44" height="15" alt="อ่านเพิ่ม" /></a>
                                </p>
                            </div>
                        </div>

                    </div>

                    <!--
                    <p class="headtitleblack_right"><img src="images/title_video.jpg" width="87" height="20" alt="ภาพวิดีโอกิจกรรม" /></p>
                    <div class="container_right">

                    </div>
                    -->
                    <p style="float:left"><img src="<?= Yii::app()->theme->baseUrl ?>/images/title_vip_sponsor.jpg" width="395" height="38" alt="vip sponsor" />
                    </p>
                    <div class="listbox_right_part">
                        <a href="http://www.emec.co.th/"><img src="<?= Yii::app()->theme->baseUrl ?>/images/banner/emc.jpg" width="190" height="56" border="0" /></a>
                        <a href="http://www.qtc-energy.com/"><img src="<?= Yii::app()->theme->baseUrl ?>/images/banner/qtc.jpg" width="190" height="56" border="0" /></a>
                        <a href="http://www.pel1995.com/"><img src="<?= Yii::app()->theme->baseUrl ?>/images/banner/pel.jpg" width="190" height="56" border="0" /></a>
                        <a href="http://www.pmk.co.th/"><img src="<?= Yii::app()->theme->baseUrl ?>/images/banner/pmk.jpg" width="190" height="56" border="0" /></a>
                        <img src="<?= Yii::app()->theme->baseUrl ?>/images/banner/nantanon.jpg" width="190" height="56" />
                    </div>

                    <div class="listbox_right_part_right">
                        <img src="<?= Yii::app()->theme->baseUrl ?>/images/banner/wel.jpg" width="190" height="56" />
                        <img src="<?= Yii::app()->theme->baseUrl ?>/images/banner/cbc.jpg" width="190" height="56" />
                        <a href="http://www.virtus.co.th/"><img src="<?= Yii::app()->theme->baseUrl ?>/images/banner/virtus.jpg" width="190" height="56" border="0" /></a>
                        <a href="http://www.patkol.com/"><img src="<?= Yii::app()->theme->baseUrl ?>/images/banner/patkol.jpg" width="190" height="56" border="0" /></a>
                        <img src="<?= Yii::app()->theme->baseUrl ?>/images/banner/samsan.jpg" width="190" height="56" />
                    </div>

                    <!--  banner member Business -->
                    <p>
                        <a href="<?= Yii::app()->params['MyBaseURL']; ?>Home/BusinessList">
                            <img src="<?= Yii::app()->theme->baseUrl ?>/images/member-busi.png" width="390" height="56" alt="business่" 
                                 style="margin-buttom:5px;"/>
                        </a>
                    </p>


                    <div class="listbox_right">
                        <p><img src="<?= Yii::app()->theme->baseUrl ?>/images/title_all.jpg" width="395" height="38" alt="รวมข้อมูลศิษย์เก่า" />
                        </p>
                        <div class="listbox_right_part">
                            <p class="headtitleblack_right_part"><img src="<?= Yii::app()->theme->baseUrl ?>/images/title_search_personal.jpg" width="99" height="20" alt="ระบบสืบค้น" />
                            </p>
                            <div class="container_right_part">
                                <div class="containphoto">
                                    <?php echo CHtml::beginForm(array('Home/UserSearch'), 'post') ?>
                                    <?php echo CHtml::textField('txtsearch', '', array('placeholder' => 'search...', 'style' => 'width:100px;')); ?>
                                    <?php echo CHtml::submitButton('Search', array('title' => 'ค้นหา', 'name' => 'butSearch')); ?>
                                    <?php echo CHtml::endForm(); ?>
                                </div>

                                <div class="detail_photo">
                                    <p>
                                        <a href="<?= Yii::app()->params['MyBaseURL']; ?>Home/UserListAll">ศิษย์เก่าทั้งหมด</a>
                                    </p>
                                </div>
                            </div>

                            <div class="container_right_part">
                                <a href="<?= Yii::app()->params['MyBaseURL'] ?>/Regis/Register" class="register">
                                    <img src="<?= Yii::app()->theme->baseUrl ?>/images/banner/regist.jpg" width="170" height="44" alt="สมัครสมาชิก" />
                                </a>
                            </div>

                            <div class="container_right_part">
                                <a href="<?= Yii::app()->params['MyBaseURL'] ?>/Regis/Login" class="loginsite">
                                    <img src="<?= Yii::app()->theme->baseUrl ?>/images/banner/update.jpg" width="170" height="44" alt="อัพเดทข้อมูลของคุณ" />
                                </a>
                            </div>

                        </div>

                        <div class="listbox_right_part_right">
                            <p class="headtitleblack_right_part"><img src="<?= Yii::app()->theme->baseUrl ?>/images/title_new_member.jpg" width="99" height="20" alt="สมาชิกล่าสุด" />
                            </p>
                            <div class="container_right_part" style="background:url(images/bg_tran1.jpg) bottom left no-repeat">


                                <div class="boxlastmember">
                                <?php
                                $this->widget('UserLast', array('maxlist' => 3));
                                ?>
                                    
                                </div>

                                <p class="more">
                                    <a href="<?= Yii::app()->params['MyBaseURL']; ?>Home/UserListAll">
                                        <img src="<?= Yii::app()->theme->baseUrl ?>/images/more.jpg" width="44" height="15" alt="อ่านเพิ่ม" />
                                    </a>
                                </p>
                            </div>
                        </div>

                    </div>

                    <!-- ======== =====รู้จักพี่รุ้จักน้อง -->
                    <div class="listbox_right_part">
                        <p class="headtitleblack_right_part">
                            <img src="<?= Yii::app()->theme->baseUrl ?>/images/title_personal.jpg" width="99" height="20" alt="รู้จักพี่ รู้จักน้อง" />
                        </p>
                        <div class="container_right_part">
                            <?php
                            //  รู้จักพี่รูจักน้อง
                            $criteria = new CDbCriteria();
                            //$criteria->condition = "Order by id DESC ''";
                            //$criteria->condition = "news_category_id = $news_cat_id";
                            $criteria->order = 'id DESC';
                            $criteria->limit = 1;
                            $model = Alumni::model()->findAll($criteria);
                            $this->widget('AlumniLast', array('model' => $model,));
                            ?>
                            <p class="more">
                                <a href="<?= Yii::app()->params['MyBaseURL'] ?>Home/ListAlumni"> <img src="<?= Yii::app()->theme->baseUrl ?>/images/more.jpg" width="44" height="15" alt="อ่านเพิ่ม" /> </a>
                            </p>
                        </div>
                    </div>
                    <!-- ==================== จบส่วนรู้จักพี่รู้จักน้อง -->

                    <!-- ==================== เริ่มแกลลอรี่ -->
                    <div class="listbox_right_part_right">
                        <p class="headtitleblack_right_part">
                            <img src="<?= Yii::app()->theme->baseUrl ?>/images/title_gallery.jpg" width="64" height="20" alt="อัลบั้มภาพ" />
                        </p>
                        <div class="container_right_part">
                            <?php
                            //  Gallery
                            $criteria = new CDbCriteria();
                            //$criteria->condition = "Order by id DESC ''";
                            //$criteria->condition = "news_category_id = $news_cat_id";
                            $criteria->order = 'id DESC';
                            $criteria->limit = 1;
                            $model = Gallery::model()->findAll($criteria);
                            $this->widget('GalleryLast', array('model' => $model,));
                            ?>
                            <p class="more">
                                <a href="<?= Yii::app()->params['MyBaseURL'] ?>Home/ListGallery"> <img src="<?= Yii::app()->theme->baseUrl ?>/images/more.jpg" width="44" height="15" alt="อ่านเพิ่ม" /> </a>
                            </p>
                        </div>
                    </div>
                    <!-- ==================== จบ แกลอรี่ -->

                </div>

                <!--Footer Banner-->
                <div class="bannerrow">
                    <p>
                        <img src="<?= Yii::app()->theme->baseUrl ?>/images/title_bootom_head.jpg" width="395" height="38" alt="ผู้สนับสนุน" />
                    </p>

                    <?php
                    $this->widget('BusinessListBanner', array('order' => 'id DESC', 'maxlist' => 10));

                    $this->widget('BusinessListBanner', array('order' => 'rating DESC', 'maxlist' => 10));
                    ?>

                </div>

                <div class="bannerrow">
                    <p>
                        <img src="<?= Yii::app()->theme->baseUrl ?>/images/title_bootom_head_sponsor.jpg" width="395" height="38" alt="ผู้สนับสนุน" />
                    </p>
                    <div class="clear"></div>
                    <div style="width: 950px; padding-left: 5px;">
                        <img src="<?= Yii::app()->theme->baseUrl ?>/images/banner/thai_alway.jpg" width="200" height="90" alt="test banner" class="img_but_ban" />
                        <img src="<?= Yii::app()->theme->baseUrl ?>/images/banner/nike_golf.jpg" width="200" height="90" alt="test banner"  class="img_but_ban"  />
                        <img src="<?= Yii::app()->theme->baseUrl ?>/images/banner/bmw.jpg" width="200" height="90" alt="test banner"  class="img_but_ban"  />
                        <img src="<?= Yii::app()->theme->baseUrl ?>/images/banner/centara_hotel.jpg" width="200" height="90" alt="test banner"  class="img_but_ban"  />
                    </div>
                </div>
                <!-- End -->

            </div>
        </div>
        <!--Footer-->
        <div class="footer"></div>
    </body>
</html>
