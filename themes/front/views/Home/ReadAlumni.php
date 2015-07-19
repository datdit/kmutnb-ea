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
        array('name' => 'รู้จักพี่รู้จักน้อง', 'url' => array('/Home/ListAlumni')),
        array('name' => $model->name),
    ),
));
?>

<div class="leftcolumn">
    <!--featured-->
    <!--
    <p class="headtitleblack"><img src="../images/title_pr.jpg" width="113" height="20" alt="ข่าวประชาสัมพันธ์" /></p>
    -->
    <p class="headtitleblack"><b><?= $model->name ?></b></p><br />
    <div class="banner-news">
        เมื่อ : <i><?= $model->create_date ?></i> อ่าน <i><?= $model->counter ?></i> โดย : <i><?= $model->users->username ?></i>
    </div>
    <p>
        <?
        //============== Load First Picture
        if (!empty($model->pic))
            echo CHtml::image('upload/alumni/' . $model->id . '/' . $model->pic, 'News', array('width' => 520));
        ?>
    </p>
    <p>&nbsp;</p>
    <p><?= $model->detail ?></p>

    <?
    // ==============  Load video จาก youtube
    if (!empty($model->youtubevdo)) {
        $youtube = explode(",", $model->youtubevdo);
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
        <fb:comments href="http://www.kmutnb-ea.net/index.php?r=Home/ReadAlumni&id=<?= $model->id; ?>" width="520" num_posts="5"></fb:comments>
    </div>


</div>