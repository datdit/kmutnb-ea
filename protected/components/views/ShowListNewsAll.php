<?php if ($models != null) { ?>

    <ul class="listnews">
    <?php foreach ($models as $rw) { ?>
            <li>
            <?php if (empty($rw->news_pic)) { ?>
                <img src="<?= Yii::app()->theme->baseUrl?>/images/logo120.png"  width="120" height="80" />                
                <?php } else { ?>
                    <img src="./upload/news/<?= $rw->id ?>/thumb_<?= $rw->news_pic ?>"  width="120" height="80" />
                <?php } ?>

                <div class="containtxt">
                    <a href="<?= Yii::app()->params['MyBaseURL'] ?>Home/ReadNews&id=<?= $rw->id ?>">
                        <h4><?= $rw->news_head ?></h4>
                    </a>
                    <p><?= $rw->news_sub_head ?></p>
                </div>
            </li>
    <?php } ?>
    </ul>


<?php } ?>
