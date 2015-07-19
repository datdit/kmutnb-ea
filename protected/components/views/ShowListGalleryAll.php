<?php if ($models != null) { ?>

    <ul class="listnews">
    <?php foreach ($models as $rw) { ?>
            <li>
            <?php if (empty($rw->firstpic)) { ?>
                <img src="<?= Yii::app() -> theme -> baseUrl ?>/images/logo120.png"  width="120" height="80" />                
                <?php } else { ?>
                    <img src="./upload/gallery/<?= $rw -> id ?>/<?= $rw -> firstpic ?>"  width="120" height="80" />
                <?php } ?>

                <div class="containtxt">
                    <a href="<?= Yii::app() -> params['MyBaseURL'] ?>Home/ReadGallery&id=<?= $rw -> id ?>">
                        <h4><?= $rw -> name ?></h4>
                    </a>
                    <p><?//= $rw->name ?></p>
                </div>
            </li>
    <?php } ?>
    </ul>
<?php } ?>
