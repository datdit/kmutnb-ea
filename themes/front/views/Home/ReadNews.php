<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id))
            return;
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=440412979362688";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>

<?php
$this->widget('application.components.BreadCrumb', array(
    'crumbs' => array(
        array('name' => 'Home', 'url' => array('/')),
        array('name' => $NewsCons->news_categories->cat_name, 'url' => array('/Home/ListNews&CatID=' . $NewsCons->news_category_id)),
        array('name' => 'รายละเอียดข่าว'),
    ),
));
?>

<div class="leftcolumn">
    <!--featured-->
    <!--
    <p class="headtitleblack"><img src="../images/title_pr.jpg" width="113" height="20" alt="ข่าวประชาสัมพันธ์" /></p>
    -->
    <p class="headtitleblack"><b><?= $NewsCons->news_head ?></b></p><br />
    <div class="banner-news">
        เมื่อ : <i><?= $NewsCons->news_date ?></i> อ่าน <i><?= $NewsCons->counter ?></i> โดย : <i><?= $NewsCons->users->username ?></i>
    </div>
    <p>
        <?
        //============== Load First Picture
        if (!empty($NewsCons->news_pic))
            echo CHtml::image('upload/news/' . $NewsCons->id . '/' . $NewsCons->news_pic, 'News', array('width' => 520));
        ?>
    </p>
    <p>&nbsp;</p>
    <p><?= $NewsCons->news_detail ?></p>

    <?
    // ==============  Load video จาก youtube
    if (!empty($NewsCons->youtubevdo)) {
        $youtube = explode(",", $NewsCons->youtubevdo);
        $i = 0;
        for ($i = 0; $i <= count($youtube) - 1; $i++) {
            ?>
            <p style="margin-bottom: 20px;">
                <?
                $this->widget('application.extensions.Yiitube', array(
                    'player' => 'youtube',
                    'v' => trim($youtube[$i]),
                    'size' => 'small',
                ));
                ?>
            </p>
            <?
        }
    }
    ?>

    <div class="newsgallery">
        <?
        // Load Picture form table
        foreach ($NewsPics as $rw) {
            $thumb = 'upload/news/' . $rw->news_content_id . '/thumb_' . $rw->pic_name;
            $img = 'upload/news/' . $rw->news_content_id . '/' . $rw->pic_name;
            $this->widget('application.extensions.lyiightbox.LyiightBox2', array(
                'thumbnail' => $thumb,
                'image' => $img,));
        }
        ?>
    </div>

    <?php
    // Social Recommend 
    $this->widget('application.extensions.social.social', array(
        'style' => 'vertical',
        'networks' => array(
            'twitter' => array(
                'data-via' => '', //http://twitter.com/#!/YourPageAccount if exists else leave empty
            ),
            'googleplusone' => array(
                "size" => "medium",
                "annotation" => "bubble",
            ),
            'facebook' => array(
                'href' => 'http://www.facebook.com/groups/smoengineer', //asociate your page http://www.facebook.com/page 
                'action' => 'recommend', //recommend, like
                'colorscheme' => 'light',
                'width' => '120px',
            )
        )
    ));
    ?>



    <div style="margin: 0;">
        <fb:comments href="http://www.kmutnb-ea.net/index.php?r=Home/ReadNews&id=<?= $NewsCons->id; ?>" width="520" num_posts="5"></fb:comments>
    </div>


</div>