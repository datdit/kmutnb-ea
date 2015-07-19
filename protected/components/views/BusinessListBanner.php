
<?php if ($model != null) { ?>
    <ul class="bottombanner">
        <?php foreach ($model as $rw) {
            if (empty($rw->banner)) {
                $img = "<img src='" . Yii::app()->theme->baseUrl . "/images/busi-nologo.png' />";
            } else {
                $img = "<img src='./upload/business/" . $rw->user_id . "/" . $rw->banner . "' />";
            }
            echo "<li>";
            echo CHtml::link($img, Yii::app()->createUrl("Home/BusinessView", array("id" => $rw->id)));
            echo "</li>";
        }
        ?>
    </ul>
<?php } ?>

