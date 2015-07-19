<?php if ($model != null) { ?>
    <ul class="listmember">
        <?php foreach ($model as $rw) { ?>
            <li>

                <?php if (empty($data->avatar)) { ?>
                    <img src="<?= Yii::app()->theme->baseUrl; ?>/images/user-thumb.png" />
                <?php } else { ?>
                    <img src="./upload/users/avatar/<?= $data->user_id ?>/<?= $data->avatar; ?>" />
                <?php } ?>

                <p class="activename">
                    <?php echo CHtml::link($rw->name . " " . $rw->sname, Yii::app()->createUrl("Home/UserView", array("id" => $rw->id))); ?>
                </p>
                <p>
                    รุ่น <?php echo $rw->genNo; ?> ปีที่ <?php echo $rw->yearNo; ?>
                </p>
            </li>
            <?php
        }
        ?>
    </ul>
<?php }
?>
