	<div class="facebook social-<?=$this->style;?>">
		<div id="fb-root"></div>
		<iframe src="http://www.facebook.com/plugins/like.php?app_id=238907556143866&amp;href=<?=urlencode($this->networks['facebook']['href']);?>&amp;send=false&amp;layout=button_count&amp;width=200&amp;show_faces=false&amp;action=<?=urlencode($this->networks['facebook']['action']);?>&amp;colorscheme=<?=urlencode($this->networks['facebook']['colorscheme']);?>&amp;font=trebuchet+ms&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:<?=urlencode($this->networks['facebook']['width']);?>; height:21px;"></iframe>
	</div>