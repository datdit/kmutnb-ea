<?php if ($model != null) { ?>
<?php foreach ($model as $rw) {?>
        <div class="containphoto">
            <a href="<?= Yii::app()->params['MyBaseURL'] ?>Home/ReadAlumni&id=<?= $rw->id ?>">
                <img src="./upload/alumni/<?= $rw->id ?>/<?= $rw->pic ?>"  width="170" height="110" alt="Alumni" />
            </a>
        </div>
        <div class="detail_photo">
            <p>
                <a href="<?= Yii::app()->params['MyBaseURL'] ?>Home/ReadAlumni&id=<?= $rw->id ?>">
                    <?= $rw->name; ?>
                </a>
            </p>
        </div>

<?php
}
} ?>
