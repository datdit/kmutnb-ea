<?php$this->widget('application.components.BreadCrumb', array(    'crumbs' => array(        array('name' => 'Home', 'url' => array('/')),        array('name' => 'ธุรกิจของสมาชิก'),    ),        //'delimiter' => ' > ', // if you want to change it));?><div class="leftcolumn">    <div class="listbox" style="padding-top: 0;">        <p class="headtitleblack">        <!--    <img src="<? //= Yii::app()->theme->baseURL      ?>/images/title_pr.jpg" width="113" height="20" alt="News" />-->            Business        </p>        <div class="clear"></div>        <p class="sub_head">ค้นหาธุรกิจ</p>        <?php        $this->widget('BusinessSearch')        ?>        <p align="right" style="margin-top: 2px;">            <a href="<?= yii::app()->params['MyBaseURL'] ?>/Home/BusinessListAll">                <img src="<?= yii::app()->theme->baseUrl ?>/images/list-all.png">            </a>        </p>        <?php if (!empty($txtsearch)) { ?>            <p class="sub_head"><?= $txtsearch ?></p>        <?php } else { ?>            <p class="sub_head">แสดงทั้งหมด</p>                    <?php } ?>        <?php                $this->widget('zii.widgets.CListView', array(            'dataProvider' => $dataProvider,            'itemView' => '//Home/BusinessListView',            'id' => '#qwerty',        ));        ?>        <p align="right" style="margin-top: 2px;">            <a href="<?= yii::app()->params['MyBaseURL'] ?>/Home/BusinessListAll">                <img src="<?= yii::app()->theme->baseUrl ?>/images/list-all.png">            </a>        </p>    </div></div>