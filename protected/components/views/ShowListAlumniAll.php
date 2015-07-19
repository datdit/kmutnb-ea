<?php if ($models != null) { ?>

    <ul class="listnews">
    <?php foreach ($models as $rw) { ?>
            <li>
            <?php if (empty($rw->pic)) { ?>
                <img src="<?= Yii::app()->theme->baseUrl?>/images/logo120.png"  width="120" height="80" />                
                <?php } else { ?>
                    <img src="./upload/alumni/<?= $rw->id ?>/<?= $rw->pic ?>"  width="120" height="80" />
                <?php } ?>

                <div class="containtxt">
                    <a href="<?= Yii::app()->params['MyBaseURL'] ?>Home/ReadAlumni&id=<?= $rw->id ?>">
                        <h4><?= $rw->name ?></h4>
                    </a>
                    <p>สมาคมศิษย์เก่าวิศวกรรศาสตร์ พระจอมเกล้าพระนครเหนือขอแนะนำ <?= $rw->name ?></p>
                </div>
            </li>
    <?php } ?>
    </ul>


<?php } ?>
