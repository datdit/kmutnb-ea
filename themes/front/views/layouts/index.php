<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="<?= Yii::app()->theme->baseUrl; ?>/css/style.css" type="text/css" />
<link rel="stylesheet" href="<?= Yii::app()->theme->baseUrl; ?>/css/slide.css" type="text/css" />
<link rel="stylesheet" href="<?= Yii::app()->theme->baseUrl; ?>/css/dom-tab.css" type="text/css" />

<!--[if gt IE 6]>
	<style type="text/css">
		html>body ul.domtabs a:link,
		html>body ul.domtabs a:visited,
		html>body ul.domtabs a:active,
		html>body ul.domtabs a:hover{
			padding:10px;
		}
	</style>
<![endif]-->
<script type="text/javascript" src="<?= Yii::app()->theme->baseUrl; ?>/js/domtab.js"></script>
	<script type="text/javascript">
		document.write('<style type="text/css">');    
		document.write('div.domtab div{display:none;}<');
		document.write('/s'+'tyle>');    
    </script>
<script type="text/javascript" src="js/jquery.tools.min.js"></script>
<script type="text/javascript" src="js/jquery.cycle.all.min.js"></script>
<script type="text/javascript">
   $(function(){     
         $('#slideshow').cycle({
            timeout: 5000,  // milliseconds between slide transitions (0 to disable auto advance)
            fx:      'fade', // choose your transition type, ex: fade, scrollUp, shuffle, etc...            
            pager:   '#pager',  // selector for element to use as pager container
            pause:   0,	  // true to enable "pause on hover"
            pauseOnPagerHover: 0 // true to pause when hovering over pager link
        });
     });
</script>
<script type="text/javascript">
var $ = jQuery.noConflict();
$(document).ready(function() {
		/* for top navigation */
		$(" #nav ul ").css({display: "none"}); // Opera Fix
		$(" #nav li").hover(function(){
		$(this).find('ul:first').css({visibility: "visible",display: "none"}).slideDown(400);
		},function(){
		$(this).find('ul:first').css({visibility: "hidden"});
		});
});	
</script>

<title>สมาคมศิษย์เก่าวิศวกรรมศาสตร์พระจอมเกล้าพระนครเหนือ</title>
</head>
<body>
<!--Header-->
<div class="header">
<!--Header Main-->
<div class="headermain">
<div class="logo"> <a href="/"><img src="<?= Yii::app()->theme->baseUrl; ?>/images/logo.jpg" alt="สมาคมศิษย์เก่ามหาวิทยาลัยเทคโนโลยีพระจอมเกล้าพระนครเหนือ" width="532" height="119" /></a>
</div>

<div class="toplogin">
<ul>
<li><a href="#" class="loginsite">ghghh</a></li>
<li><a href="#" class="register">ghghh</a></li>
<li><a href="#" class="forgot">ghghh</a></li>
</ul>
</div>

</div>

</div>
<!--Navigation-->
<div class="nav">
<div class="navcontain">
<? 
// Load news from Database
/*
$sqludfc="select * from news,category_news where news.ref_cat_id = category_news.cat_id and show_index=1 GROUP BY news_id desc limit 0,4"; 
	$dbqueryudfc = mysql_db_query($dbname,$sqludfc);
    $rsudfc = mysql_fetch_array($dbqueryudfc);

		$id=$rsudfc["news_id"];
		//$news_head=ereg_replace( "-"," ถึง ","$rsudfc[news_head]");
		$news_head = $rsudfc["news_head"];
		$news_head_1=$rsudfc["news_head_1"];
		$udfc_detail=$rsudfc["news_detail"]; 
		$cat_name_en=$rsudfc["cat_name_en"];
		$news_pic=$rsudfc["news_pic"];
		$udfc_link=$rsudfc["udfc_link"];
		$folder=$rsudfc["folder"];		
 * 
 */

		$id=1;
		//$news_head=ereg_replace( "-"," ถึง ","$rsudfc[news_head]");
		$news_head = "news head";
		$news_head_1="news head 1";
		$udfc_detail="news detail"; 
		$cat_name_en="news name en";
		$news_pic="pic";
		$udfc_link="udfc_link";
		$folder="folder";		


?>
<ul>
<li><a href="./" class="home">หน้าหลัก</a><span></span></li>
<li><a href="about/" class="about">เกี่ยวกับสมาคม</a><span></span></li>
<li><a href="content/_<?=$cat_name_en?>" class="news">ข่าวสารสมาคม</a><span></span></li>
<li><a href="forums" target="_blank" class="article">บทความ</a><span></span></li>
<li><a href="forums" target="_blank" class="board">เว็บบอร์ด</a><span></span></li>
<li><a href="#" class="report">รายงานการประชุม</a><span></span></li>
<li><a href="calendar/" class="carendar">ปฏิทินกิจกรรม</a><span></span></li>
<li><a href="contact/" class="contact">ติดต่อสมาคม</a></li>
</ul>
</div>
</div>
<!--Page-->
<div class="warpper">
<div class="warppage">
<!--Left Column-->
<div class="leftcolumn">
<!--featured-->
<div class="featured">
<p class="headtitleorange"><img src="images/title_news.jpg" width="150" height="20" alt="ข่าวสารล่าสุดจากสมาคม" /></p>
<div id="slidecontainer">
<!-- BEGIN SLIDE -->

<div id="slide">
<div id="slideshow">

<? 
/*
$sqludfc="select * from news,category_news where news.ref_cat_id = category_news.cat_id and show_index=1 GROUP BY news_id desc limit 0,4"; 
	$dbqueryudfc = mysql_db_query($dbname,$sqludfc);
	While ($rsudfc = mysql_fetch_array($dbqueryudfc))
	{		
		$id=$rsudfc["news_id"];
		$news_head=ereg_replace( "-"," ถึง ","$rsudfc[news_head]");
		$news_head_1=$rsudfc["news_head_1"];
		$udfc_detail=$rsudfc["news_detail"]; 
		$cat_name_en=$rsudfc["cat_name_en"];
		$news_pic=$rsudfc["news_pic"];
		$udfc_link=$rsudfc["udfc_link"];
		$folder=$rsudfc["folder"];	
 * 
 */

		$news_head = "news head";
		$news_head_1="news head 1";
		$udfc_detail="news detail"; 
		$cat_name_en="news name en";
		$news_pic="pic";
		$udfc_link="udfc_link";
		$folder="folder";		
                    for ($i=1; $i<=4;$i++) {

?>

<div class="cycle">
<a href="content/<?=$cat_name_en?>_<?=$news_head?>_<?=$id?>">
<img src="images/news/<?=$folder?>/<?=$news_pic?>" alt="" class="slide_image" width="520" height="350"/></a>
</div>

<? } ?>
    
    
</div>
<!-- end slideshow -->

<div id="slideshow_navigation"><div id="pager"></div></div><!-- end slideshow navigation -->
</div>
<!-- END OF SLIDE -->
				  
</div>
</div>
<!--List Box-->
<div class="listbox">
<p class="headtitleblack"><img src="images/title_pr.jpg" width="113" height="20" alt="ข่าวประชาสัมพันธ์" /></p>

<ul class="listnews">
<? 
// Load news from Database
/*
$sqludfc="select * from news,category_news where news.ref_cat_id = category_news.cat_id and show_index=1 GROUP BY news_id desc limit 0,4"; 
	$dbqueryudfc = mysql_db_query($dbname,$sqludfc);
	While ($rsudfc = mysql_fetch_array($dbqueryudfc))
	{		
		$id=$rsudfc["news_id"];
		//$news_head=ereg_replace( "-"," ถึง ","$rsudfc[news_head]");
		$news_head = $rsudfc["news_head"];
		$news_head_1=$rsudfc["news_head_1"];
		$udfc_detail=$rsudfc["news_detail"]; 
		$cat_name_en=$rsudfc["cat_name_en"];
		$news_pic=$rsudfc["news_pic"];
		$udfc_link=$rsudfc["udfc_link"];
		$folder=$rsudfc["folder"];		
 * 
 */

		$news_head = "news head";
		$news_head_1="news head 1";
		$udfc_detail="news detail"; 
		$cat_name_en="news name en";
		$news_pic="pic";
		$udfc_link="udfc_link";
		$folder="folder";		
                    for ($i=1; $i<=4;$i++) {

?>

	<li>
    	<img src="images/news/<?=$folder?>/<?=$news_pic?>" alt="" width="120" height="80" />
    	<div class="containtxt">
  		<h4><?=$news_head?></h4>
  		<p><a href="content/<?=$cat_name_en?>_<?=$news_head?>_<?=$id?>"><?=$news_head_1?></a></p>
  		</div>
	</li>
<? } ?>
</ul>

	<p class="moresee">
    	<a href="content/_<?=$cat_name_en?>" target="_blank"><img src="images/read_more.jpg" width="82" height="26" border="0" /></a>
   </p>
</div>
<!--Contain Tab-->
<div class="listbox">

<div class="domtab">
	<ul class="domtabs">
		<li><a href="#hot">ข่าวทั่วไป</a></li>
        <li><a href="#job">สมัครงาน หางาน</a></li>
		<li><a href="#most">เว็บบอร์ดรวมรุ่น</a></li>
        <li><a href="#photo">บทความน่าสนใจ</a></li>
        <li><a href="#comment">ก๊วนกอล์ฟ</a></li>
	</ul>
    <!--Tab 1-->
	<div>
		<ul class="listboard" id="hot">
        <? 
        /*
	$id_board=1;  //  รหัสของ forum ที่จะให้แสดง
	$max_record=15;  // จำนวน Topic ที่จะให้แสดง
	include("board.php"); 
         * 
         */
        ?>
        </ul>
        <p class="moresee"><a href="http://www.kmutnb-ea.net/forums/index.php?board=1.0"><img src="images/read_more.jpg" width="82" height="26" border="0" /></a></p>
	</div>
    
    <!--End Tab 1-->
    <!--Tab 2-->
    
	<div>
		<ul class="listboard" id="job">
        <? 
        /*
	$id_board=2;  //  รหัสของ forum ที่จะให้แสดง
	$max_record=15;  // จำนวน Topic ที่จะให้แสดง
	include("board.php"); 
         * 
         */
        ?>
        </ul>
        <p class="moresee"><a href="http://www.kmutnb-ea.net/forums/index.php?board=2.0"><img src="images/read_more.jpg" width="82" height="26" border="0" /></a></p>
	</div>
    
    <!--End Tab2-->
    <!--Tab 3-->
    
	<div>
		<ul class="listboard" id="most">
         <? 
	$id_board=3;  //  รหัสของ forum ที่จะให้แสดง
	$max_record=15;  // จำนวน Topic ที่จะให้แสดง
	include("board.php"); 
        ?>
        </ul>
        <p class="moresee"><a href="http://www.kmutnb-ea.net/forums/index.php?board=3.0"><img src="images/read_more.jpg" width="82" height="26" border="0" /></a></p>
	</div>
    <!--End Tab 3-->
    <!--Tab 4-->
    <div>
		<ul class="listboard" id="photo">
         <? 
	$id_board=4;  //  รหัสของ forum ที่จะให้แสดง
	$max_record=15;  // จำนวน Topic ที่จะให้แสดง
	include("board.php"); 
        ?>
        </ul>
        <p class="moresee"><a href="http://www.kmutnb-ea.net/forums/index.php?board=4.0"><img src="images/read_more.jpg" width="82" height="26" border="0" /></a></p>
	</div>
    <!--End Tab 4-->
    <!--Tab5-->
    <div>
		<ul class="listboard" id="comment">
         <? 
	$id_board=5;  //  รหัสของ forum ที่จะให้แสดง
	$max_record=15;  // จำนวน Topic ที่จะให้แสดง
	include("board.php"); 
        ?>
        </ul>
        <p class="moresee"><a href="http://www.kmutnb-ea.net/forums/index.php?board=5.0"><img src="images/read_more.jpg" width="82" height="26" border="0" /></a></p>
	</div>
    <!--End Tab5-->
</div>

</div>
</div>
<!--Right Column-->
<div class="rightcolumn">

<div class="listbox_right">

<!-- ========== Start Ned News -->
<?
$cat_id = 3;   // id ของ กลุ่มรู้จักพี่รู้จักน้องเท่ากับ 2
$sql="select * from news, category_news where ref_cat_id = $cat_id AND cat_id=ref_cat_id ORDER BY news_id DESC limit 0,1";
$db_query=mysql_db_query($dbname,$sql);
$rs_ned = mysql_fetch_array($db_query);
$id=$rs_ned[news_id];
$cat_name_en=$rs_ned[cat_name_en];
$news_head=$rs_ned[news_head];
$folder=$rs_ned[folder];
$news_pic=$rs_ned[news_pic];
?>

<div class="listbox_right_part">
<p class="headtitleblack_right_part"><img src="images/title_ned.jpg" width="99" height="20" alt="งาน NED" /></p>
<div class="container_right_part">
	<a href="content/_<?=$cat_name_en?>" target="_blank"><img src="images/banner_ned.jpg" width="170" height="232" alt="ned" border="0" /></a>
</div>
</div>

<!-- =========== End Ned News -->

<div class="listbox_right_part_right">
<p class="headtitleblack_right_part"><img src="images/title_video.jpg" width="87" height="20" alt="ภาพวิดีโอกิจกรรม" /></p>
<div class="container_right_part" style="background:url(images/bg_tran1.jpg) bottom left no-repeat">

<div class="boxlastmember"> 

<div id="player"><a href="http://www.macromedia.com/go/getflashplayer">Get the Flash Player</a> to see this player.</div>
<script type="text/javascript" src="swfobject.js"></script>
<script type="text/javascript">
var so = new SWFObject("mediaplayer.swf","mediaplayer","170","100","7");
so.addParam('allowscriptaccess','always');
so.addParam('allowfullscreen','true');
so.addVariable('image','video.jpg');
so.addVariable('height','100');
so.addVariable('width','170');
so.addVariable('file','video.flv');
so.addVariable('autoscroll','true');
so.addVariable('link','http://www.maxudon.com');
so.addVariable('displayheight','100');
so.write('player');
</script>

</div>
 
 <ul class="listvideo">
 <li>
   <img src="images/member_thumb_video.jpg" width="45" height="45" /> 
   <strong><p>กอล์ฟการกุศล</p></strong>
  <p>แมทต์ประทับใจ</p>
   </li>
   <li>
   <img src="images/member_thumb_video2.jpg" width="45" height="45" /> 
   <strong><p>มี๊ตติ้งรุ่น 25</p></strong>
  <p> พบปะสังสรรค์ รุ่น 25</p>
   </li>
 </ul>
  <p class="more"><a href="#"><img src="images/more.jpg" width="44" height="15" alt="อ่านเพิ่ม" /></a></p>
</div>
</div>

</div>

<!--
<p class="headtitleblack_right"><img src="images/title_video.jpg" width="87" height="20" alt="ภาพวิดีโอกิจกรรม" /></p>
<div class="container_right">

</div>
-->
<p style="float:left"><img src="images/title_vip_sponsor.jpg" width="395" height="38" alt="vip sponsor" /></p>
<div class="listbox_right_part"> <a href="http://www.emec.co.th/"><img src="images/banner/emc.jpg" width="190" height="56" border="0" /></a>
  <a href="http://www.qtc-energy.com/"><img src="images/banner/qtc.jpg" width="190" height="56" border="0" /></a>
  <a href="http://www.pel1995.com/"><img src="images/banner/pel.jpg" width="190" height="56" border="0" /></a>
    <a href="http://www.pmk.co.th/"><img src="images/banner/pmk.jpg" width="190" height="56" border="0" /></a>
     <img src="images/banner/nantanon.jpg" width="190" height="56" />
  </div>

<div class="listbox_right_part_right">
  <img src="images/banner/wel.jpg" width="190" height="56" />
  <img src="images/banner/cbc.jpg" width="190" height="56" />
  <a href="http://www.virtus.co.th/"><img src="images/banner/virtus.jpg" width="190" height="56" border="0" /></a>
    <a href="http://www.patkol.com/"><img src="images/banner/patkol.jpg" width="190" height="56" border="0" /></a>
     <img src="images/banner/samsan.jpg" width="190" height="56" />
  </div>

<div class="listbox_right">
<p><img src="images/title_all.jpg" width="395" height="38" alt="รวมข้อมูลศิษย์เก่า" /></p>
<div class="listbox_right_part">
<p class="headtitleblack_right_part"><img src="images/title_search_personal.jpg" width="99" height="20" alt="ระบบสืบค้น" /></p>
<div class="container_right_part">
<div class="containphoto">
<input type="text" value="Enter term or name" id="searchinput" name="q">
<input type="image" class="searchbutton" src="images/button_search.gif" alt="Search" name="submit">
</div>
<div class="detail_photo">
<p><a href="#">ค้นหาศิษย์เก่าได้ที่นี่</a></p>
 </div>
 
</div>

<div class="container_right_part">
  <img src="images/banner/regist.jpg" width="170" height="44" alt="สมัครสมาชิก" /></div>

<div class="container_right_part">
  <img src="images/banner/update.jpg" width="170" height="44" alt="อัพเดทข้อมูลของคุณ" /></div>

</div>

<div class="listbox_right_part_right">
<p class="headtitleblack_right_part"><img src="images/title_new_member.jpg" width="99" height="20" alt="สมาชิกล่าสุด" /></p>
<div class="container_right_part" style="background:url(images/bg_tran1.jpg) bottom left no-repeat">

<div class="boxlastmember"> 
<ul class="listmember">
<li>
<img src="images/member_thumb.jpg" width="45" height="45" alt="member" />
<p class="activename">น้องปอย สวยเริ่ด</p>
<p><a href="#">จบการศึกษาเมื่อปี 2534 ตอนนี้ทำงาน..</a></p>
</li>
<li>
<img src="images/member_thumb2.jpg" width="45" height="45" alt="member" />
<p class="activename">วันชนะ</p>
<p><a href="#">จบการศึกษาเมื่อปี 2524 ตอนนี้ทำงาน..</a></p>
</li>
<li>
<img src="images/member_thumb3.jpg" width="45" height="45" alt="member" />
<p class="activename">สมปอง ใจสะออน</p>
<p><a href="#">จบการศึกษาเมื่อปี 2514 ตอนนี้ทำงาน..</a></p>
</li>
</ul>
</div>

 <p class="more"><a href="#"><img src="images/more.jpg" width="44" height="15" alt="อ่านเพิ่ม" /></a></p>
</div>
</div>

</div>

<!-- ======== =====รู้จักพี่รุ้จักน้อง -->
<?
$cat_id = 2;   // id ของ กลุ่มรู้จักพี่รู้จักน้องเท่ากับ 2
$sql="select * from news, category_news where ref_cat_id = $cat_id AND cat_id=ref_cat_id ORDER BY news_id DESC limit 0,1";
$db_query=mysql_db_query($dbname,$sql);
$result = mysql_fetch_array($db_query);
$id=$result[news_id];
$cat_name_en=$result[cat_name_en];
$news_head=$result[news_head];
$folder=$result[folder];
$news_pic=$result[news_pic];
?>

<div class="listbox_right_part">
<p class="headtitleblack_right_part">
	<img src="images/title_personal.jpg" width="99" height="20" alt="รู้จักพี่ รู้จักน้อง" />
</p>
<div class="container_right_part">
<div class="containphoto">
	<a href="content/<?=$cat_name_en?>_<?=$news_head?>_<?=$id?>">
    <img src="images/news/<?=$folder?>/<?=$news_pic?>" alt="" width="170" height="110" />
    </a>
</div>
<div class="detail_photo">
	<p>
    	<a href="content/<?=$cat_name_en?>_<?=$news_head?>_<?=$id?>"><?=$news_head?></a>
    </p>
</div>
<p class="more"><a href="content/_<?=$cat_name_en?>" target="_blank"><img src="images/more.jpg" width="44" height="15" alt="อ่านเพิ่ม" /></a></p>
</div>
</div>
<!-- ==================== จบส่วนรู้จักพี่รู้จักน้อง -->

<!-- ==================== เริ่มแกลลอรี่ -->
<?
$sql="SELECT * FROM gallery, gallery_pic WHERE gallery.gallery_id=gallery_pic.gallery_id order by gallery_pic.id desc LIMIT 0,1";
$dbquery = mysql_db_query($dbname, $sql);
$rs = mysql_fetch_array($dbquery);
$gallery_id =$rs["gallery_id"];
$gallery_name =$rs["gallery_name"];
$gallery_folder=$rs["gallery_folder"];
$gallery_pic = $rs["pic_name"];
?>		
<div class="listbox_right_part_right">
<p class="headtitleblack_right_part"><img src="images/title_gallery.jpg" width="64" height="20" alt="อัลบั้มภาพ" /></p>
<div class="container_right_part">

<div class="containphoto"> 
<a href="gallery/read.php?gallery_id=<?=$gallery_id?>">
<img src="../images/gallery/<?=$gallery_folder?>/<?=$gallery_pic?>" width="170" height="110" alt="Gallery" />
</a>
</div>
<div class="detail_photo">
<p><a href="#"><?=$gallery_name?></a></p>
 </div>
 <p class="more"><a href="gallery/"><img src="images/more.jpg" width="44" height="15" alt="อ่านเพิ่ม" /></a></p>
</div>
</div>
<!-- ==================== จบ แกลอรี่ -->


</div>

<!--Footer Banner-->
<div class="bannerrow">
<p><img src="images/title_bootom_head.jpg" width="395" height="38" alt="ผู้สนับสนุน" /></p>
<ul class="bottombanner">
<li><img src="images/test_bottom_banner.jpg" width="80" height="50" alt="test banner" /></li>
<li><img src="images/test_bottom_banner.jpg" width="80" height="50" alt="test banner" /></li>
<li><img src="images/test_bottom_banner.jpg" width="80" height="50" alt="test banner" /></li>
<li><img src="images/test_bottom_banner.jpg" width="80" height="50" alt="test banner" /></li>
<li><img src="images/test_bottom_banner.jpg" width="80" height="50" alt="test banner" /></li>
<li><img src="images/test_bottom_banner.jpg" width="80" height="50" alt="test banner" /></li>
<li><img src="images/test_bottom_banner.jpg" width="80" height="50" alt="test banner" /></li>
<li><img src="images/test_bottom_banner.jpg" width="80" height="50" alt="test banner" /></li>
<li><img src="images/test_bottom_banner.jpg" width="80" height="50" alt="test banner" /></li>
<li><img src="images/test_bottom_banner.jpg" width="80" height="50" alt="test banner" /></li>
<li><img src="images/test_bottom_banner.jpg" width="80" height="50" alt="test banner" /></li>
<li><img src="images/test_bottom_banner.jpg" width="80" height="50" alt="test banner" /></li>
<li><img src="images/test_bottom_banner.jpg" width="80" height="50" alt="test banner" /></li>
<li><img src="images/test_bottom_banner.jpg" width="80" height="50" alt="test banner" /></li>
<li><img src="images/test_bottom_banner.jpg" width="80" height="50" alt="test banner" /></li>
<li><img src="images/test_bottom_banner.jpg" width="80" height="50" alt="test banner" /></li>
<li><img src="images/test_bottom_banner.jpg" width="80" height="50" alt="test banner" /></li>
<li><img src="images/test_bottom_banner.jpg" width="80" height="50" alt="test banner" /></li>
</ul>
</div>

<div class="bannerrow">
<p><img src="images/title_bootom_head_sponsor.jpg" width="395" height="38" alt="ผู้สนับสนุน" /></p>
<ul class="bottombanner">
<li style="padding:10px 10px 10px 23px"><img src="images/banner/thai_alway.jpg" width="200" height="90" alt="test banner" /></li>
<li><img src="images/banner/nike_golf.jpg" width="200" height="90" alt="test banner" /></li>
<li><img src="images/banner/bmw.jpg" width="200" height="90" alt="test banner" /></li>
<li><img src="images/banner/centara_hotel.jpg" width="200" height="90" alt="test banner" /></li>
</ul>
</div>
<!-- End -->

</div>
</div>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-20625036-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

<!--Footer-->
<div class="footer">
</div>
</body>
</html>
