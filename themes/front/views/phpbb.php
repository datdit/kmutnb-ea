<?php
$connection = mysql_connect(localhost,"XXXXX"," YYYYY") or die("Service temporairly unavailable");
/* **XXXXX* : user ที่ใช้เข้าฐานข้อมูล YYYYY :/* pass ที่ใช้เข้าฐานข้อมูล */
$db = mysql_select_db("AAAAA",$connection) or die("Service temporairly unavailable"); /* AAAAA:ชื่อฐานข้อมูล */

//$sql = "select * from phpbb_topics order by topic_last_post_time desc limit 0,7"; 
// *** คือ id ของหมวดหมู่
$sql = "select * from phpbb_topics WHERE forum_id= *** order by topic_last_post_time desc limit 0,7";  


$cs1="set character_set_results=utf8";
mysql_query($cs1)or die('error query:'.mysql_error());
$cs2="set character_set_client=utf8";
mysql_query($cs2)or die('error query:'.mysql_error());
$cs3="set character_set_connection=utf8";
mysql_query($cs3)or die('error query:'.mysql_error());


$result = mysql_query($sql) or die("Service temporairly unavailable");
for($x=1;$x<=7;$x++){
$row = mysql_fetch_array($result);

   echo "<img src=http://www.xn--42cl7aoi1brr5b5a1c6kci8o.com/pic/football.gif border=0 alt='Topic $tid'>\n"; /*พาร์ทของรูป*/
   
   echo "<a href = \"http://www.xn--42cl7aoi1brr5b5a1c6kci8o.com/viewtopic.php?f=$row[forum_id]&t=$row[topic_id]\" target = \"_blank\">$row[topic_title]</a><br>"; /* BBBBB : โดเมนเว็บบอร์ดของคุณ*/
}
?>