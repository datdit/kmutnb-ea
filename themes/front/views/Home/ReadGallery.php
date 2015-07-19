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
        array('name' => 'Gallery', 'url' => array('/Home/ListGallery')),
        array('name' => 'Gallery'),
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
        //if (!empty($model->firstpic))
        //    echo CHtml::image('upload/gallery/' . $model->id . '/' . $model->firstpic,  'Gallery', array('width' => 520));
        ?>
    </p>
    <p>&nbsp;</p>
    <p><?= $model->detail ?></p>

    <div class="newsgallery">
        <?
        // Load Picture form table
        foreach ($modelPic as $rw) {
            $thumb = 'upload/gallery/' . $rw->gallery_id . '/thumb_' . $rw->pic_name;
            $img = 'upload/gallery/' . $rw->gallery_id . '/' . $rw->pic_name;
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
        <fb:comments href="http://www.kmutnb-ea.net/index.php?r=Home/ReadGallery&id=<?= $model->id; ?>" width="520" num_posts="5"></fb:comments>
    </div>


</div>