

<!--Left Column-->
<div class="leftcolumn">


    <!--featured-->
    <div class="featured">
        <p class="headtitleorange">
            <img src="<?= Yii::app()->theme->baseURL ?>/images/title_news.jpg" width="150" height="20" alt="Lastest News" /></p>
        <div id="slidecontainer">

            <!-- BEGIN SLIDE -->
            <div id="slide">
                <?php
                // Load HOT News
                // check data
                $criteria = new CDbCriteria();
                $criteria->condition = "hotnews = 1";
                $criteria->order = "hotnews_date DESC";
                $criteria->limit = 4;
                $model = NewsCon::model()->findAll($criteria);

                $this->widget('application.extensions.OrbitSlider.OrbitSlider', array(
                    'model' => $model,
                    'mywidth' => 520,
                    'myheight' => 350,
                    'slider_options' => array(
                        'advanceSpeed' => '7500',
                    ),
                ));


                /*
                  if (!empty($model)) {
                  $i = 0;
                  foreach ($model as $rw) {
                  if (empty($rw->news_pic))
                  $pic[$i] = Yii::app()->theme->baseUrl . '/images/logo520.png';
                  else
                  $pic[$i] = 'upload/news/' . $rw->id . "/" . $rw->news_pic;
                  $cap[$i] = $rw->news_head;
                  $url[$i] = '/Home/ReadNews&id=' . $rw->id;
                  $i++;
                  }

                  $this->widget('application.extensions.OrbitSlider.OrbitSlider', array(
                  'images' => array(
                  array(
                  'img' => $pic[0], 'caption' => $cap[0],
                  'url' => $url[0]),
                  array(
                  'img' => $pic[1], 'caption' => $cap[1],
                  'url' => $url[1]),
                  ),
                  'mywidth' => 520,
                  'myheight' => 350,
                  'slider_options' => array(
                  'advanceSpeed' => '7500',
                  ),
                  ));
                  }
                 * 
                 */
                ?>
                <!-- End slide -->
            </div>
            <!-- END OF SLIDE -->
        </div>
    </div>

    <!--List Box-->
    <div class="listbox">
        <p class="headtitleblack">
            <img src="<?= Yii::app()->theme->baseURL ?>/images/title_pr.jpg" width="113" height="20" alt="News" /></p>
<?php
// Load Lastest News
$news_cat_id = 4;  // 
$criteria = new CDbCriteria();
//$criteria->condition = "Order by id DESC ''";
$criteria->condition = "news_category_id = $news_cat_id";
$criteria->order = 'id DESC';
$criteria->limit = 4;
$model = NewsCon::model()->findAll($criteria);

$this->widget('ShowListNewsAll', array(
    'model' => $model,
    'CatID' => $news_cat_id,
));
?>

        <p class="moresee">
            <a href="<?= Yii::app()->params['MyBaseURL'] ?>/Home/ListNews&CatID=4" target="_blank">
                <img src="<?= Yii::app()->theme->baseUrl ?>/images/read_more.jpg" width="82" height="26" border="0" /></a>
        </p>
    </div>

    <!--Contain Tab-->
    <div class="listbox">
<?php
$this->widget('CTabView', array(
    'activeTab' => 'tab1',
    //'cssFile' => Yii::app()->baseUrl . '/css/CTabView.css',
    'tabs' => array(
        'tab1' => array(
            'title' => 'ข่าวทั่วไป',
            'view' => '/Home/ForumList2',
            //'data' => array('model' => $model)
            //'content' => 'tab1'
        ),
        'tab2' => array(
            'title' => 'สมัครงาน',
            'view' => '/Home/ForumList3',
            //'data' => array('model' => $model, 'model_pic' => $model_pic)
            //'content' => 'tab2'
        ),
        'tab3' => array(
            'title' => 'รวมรุ่น',
            'view' => '/Home/ForumList4',
        ),
        'tab4' => array(
            'title' => 'บทความ',
            'view' => '/Home/ForumList5',
        ),
        'tab5' => array(
            'title' => 'ก๊วนกอล์ฟ',
            'view' => '/Home/ForumList6',
        )
    ),
    'htmlOptions' => array(
        'style' => 'width:100%;'
    )
));
?>







    </div>
</div>
