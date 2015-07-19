
<table border='0' cellpadding="0px" cellspacing="5px" >
    <?
    $i = 1;
    echo "</tr>";
    foreach ($GalleryPics as $rw) {
        if ($i > 5) {
            $i = 1;
            echo "</tr>";
            echo "<tr>";
        }
        if ($rw->firstpic == 1)
            $bgcolor = "background-color:#FBC2C4;";
        else
            $bgcolor = "";
        ?>
        <td align="center" style="border:1px solid #CCC; padding: 5px; <?= $bgcolor; ?>">
            <a href="upload/gallery/<?= $GalleryID; ?>/<?= $rw->pic_name; ?>" target="_blank">
                <img src="upload/gallery/<?= $GalleryID; ?>/thumb_<?= $rw->pic_name; ?>" style="border: 1px solid #C3C3C3;">
            </a>
            <br />

            <? if ($rw->firstpic == 0) : ?>
                <table border="0" cellpadding="3px">
                    <tr>
                        <td>
                            <div class="my_buttons">
                                <a href="#" onclick="return delFile(<?= $rw->id; ?>)">
                                    <img src="<?= Yii::app()->theme->baseUrl; ?>/images/toolbar/del.jpg" alt=""/>
                                    ลบภาพ</a>
                            </div>                    
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="my_buttons">
                                <a href="#" onclick="return SetFirstPic(<?= $rw->id; ?>)">
                                    <img src="<?= Yii::app()->theme->baseUrl; ?>/images/toolbar/add.png" alt=""/>
                                    กำหนดเป็นภาพแรก</a>
                            </div>
                        </td>
                    </tr>
                </table>
            <? else : ?>
                <table border="0" cellpadding="3px">
                    <tr><td style="width:160px;" align="center"><b>ภาพแรกของข่าว</b></td></tr>
                    <tr><td>&nbsp;</td></tr>
                </table>
            <? endif; ?>&nbsp;

            <?
            echo "</td>";
            $i++;
        }
        ?>
</table>