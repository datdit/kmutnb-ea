<div>
	<ul class="listboard" id="job">

		<?php
		$forum_id = 4;
        $max = 10;
        $sql = "select * from phpbb_topics where forum_id=$forum_id order by topic_id desc limit 0,$max";
        //$sql = "select * from phpbb_topics";
        $phpDB = Yii::app() -> phpbbDB -> createCommand($sql) -> queryAll();

        foreach ($phpDB as $rw) {

		?>
		<li>
			<a href="./forum/viewtopic.php?f=<?=$forum_id ?>&t=<?= $rw['topic_id'] ?>" target="_blank"> <?=$rw['topic_title'] ?></a>
		</li>
		<?php } ?>
	</ul>
	<p class="moresee">
		<a href="./forum/viewforum.php?f=<?= $forum_id?>" target="_blank"  >
		    <img src="<?= Yii::app()->theme->baseUrl ?>/images/read_more.jpg" width="82" height="26" border="0" />
		    </a>
	</p>
</div>
<div class="clear"></div>