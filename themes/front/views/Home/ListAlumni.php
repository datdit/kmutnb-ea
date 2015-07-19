<?php $this->widget('application.components.BreadCrumb', array(
  'crumbs' => array(
    array('name' => 'Home', 'url' => array('/')),
    array('name' => 'รู้จักพี่ รู้จักน้อง'),
  ),
  //'delimiter' => ' > ', // if you want to change it
)); ?>

<div class="leftcolumn">
    <div class="listbox" style="padding-top: 0;">
        <p class="headtitleblack">
        <!--    <img src="<?//= Yii::app()->theme->baseURL ?>/images/title_pr.jpg" width="113" height="20" alt="News" />-->
            รู้จักพี่ รู้ัจักน้อง
        </p>

        <?php
        $this->widget('ShowListAlumniAll', array(
            'model' => $model,
        ))
        ?>

        <div class="clear"></div>

        <div class="pager">
            <?
            $this->widget('CLinkPager', array(
                'currentPage' => $pages->getCurrentPage(),
                'itemCount' => $item_count,
                'pageSize' => $page_size,
                'maxButtonCount' => 5,
                'header' => '',
                'htmlOptions' => array('class' => 'pages'),
            ))
            ?>
        </div>

    </div>
</div>