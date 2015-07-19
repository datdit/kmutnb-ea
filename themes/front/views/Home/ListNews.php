            <?php
            switch ($CatID) {
            case 1 :
                $CatsName =  "สมาคม";
                break;
            case 2 :
                $CatsName = "บทความ";
                break;
            case 3 :
                $CatsName =  "รายงานการประชุม";
                break;
            case 4 :
                $CatsName =  "ข่าวสารกิจกรรม";
                break;
            case 5 :
                $CatsName =  "ข่าวสาร NED";
            }
            ?>


<?php $this->widget('application.components.BreadCrumb', array(
  'crumbs' => array(
    array('name' => 'Home', 'url' => array('/')),
    array('name' => $CatsName),
  ),
  //'delimiter' => ' > ', // if you want to change it
)); ?>

<div class="leftcolumn">
    <div class="listbox" style="padding-top: 0;">
        <p class="headtitleblack">
        <!--    <img src="<?//= Yii::app()->theme->baseURL ?>/images/title_pr.jpg" width="113" height="20" alt="News" />-->
            <?= $CatsName; ?>
        </p>


        <?php
//$data = array();
//foreach ($model as $rw) {
        //$data[] = $rw->attributes;
        // echo "<br>" .$rw->id . "/" . $rw->news_head;
//}
//echo $data[];
//echo $item_count;
        ?>


        <?php
        $this->widget('ShowListNewsAll', array(
            'model' => $model,
            'CatID' => $CatID,
        ))
        ?>

        <div class="clear"></div>

        <div class="pager">
            <?php
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