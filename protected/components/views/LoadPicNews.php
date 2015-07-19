<div id="subMenu">
    <ul>
    <?php
    foreach ($this->myData as $mn) {
        echo "<li> id " .$mn->id . "/" . $mn->pic_name . "/". $mn->news_content_id . "</li>";
    }
    ?>
    </ul>
</div>