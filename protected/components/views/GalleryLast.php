<?php if ($model != null) { ?>
<?php foreach ($model as $rw) {?>
        <div class="containphoto">
            <a href="<?= Yii::app()->params['MyBaseURL'] ?>Home/ReadGallery&id=<?= $rw->id ?>">
                <img src="./upload/gallery/<?= $rw->id ?>/<?= $rw->firstpic ?>"  width="170" height="110" alt="Gallery" />
            </a>
        </div>
        <div class="detail_photo">
            <p>
                <a href="<?= Yii::app()->params['MyBaseURL'] ?>Home/ReadGallery&id=<?= $rw->id ?>">
                    <?= $rw->name; ?>
                </a>
            </p>
        </div>

<?php
}
} ?>
