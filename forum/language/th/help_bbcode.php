<?php
/** 
* ภาษาไทย เวอร์ชั่น 1.1.0 
* 05/06/2551 
* ไฟล์ภาษาไทยสำหรับ PHPBB3 โดย www.mindphp.com และ www.phpbbthailand.com
*
*/ 


if (!defined('IN_PHPBB'))
{
	exit;
}

$help = array(
	array(
		0 => '--',
		1 => 'ข้อมูลเบื้องต้น'
	),
	array(
		0 => 'อะไรคือ BBCode?',
		1 => '&nbsp;&nbsp; BBCode คือส่วนเพิ่มเติมพิเศษของภาษา HTML. คุณสามารถใช้ BBCode ถ้า administrator อนุญาต (คุณสามารถสั่งไม่ให้ใช้ BBCode ในแต่ละข้อความโพสต์ ได้ที่แบบฟอร์มสำหรับพิมพ์ข้อความโพสต์). BBCode จะคล้ายกับรูปแบบ HTML คือคำสั่งจะอยู่ในเครื่องหมาย [ และ ] แทนเครื่องหมาย < และ> ซึ่งจะใช้ควบคุมข้อความที่อยู่ระหว่างคำสั่งเปิดและปิด. คุณมารถอ่านข้อมูลเพิ่มเติมของ BBCode ได้ที่หน้าสำหรับโพสต์ข้อความ'	
	),
	array(
		0 => '--',
		1 => 'รูปแบบตัวอักษร'
	),
	array(
		0 => 'การสร้างตัวหนา ตัวเอียงและตัวขีดเส้นใต้',
		1 => 'BBCode ช่วยให้คุณเปลี่ยนรูปแบบของข้อความได้อย่างรวดเร็ว  วิธีการคือ: <ul><li>ทำให้ข้อความเป็นตัวหนา <strong>[b][/b]</strong>, ตัวอย่างเช่น <br /><br /><strong>[b]</strong>Hello<strong>[/b]</strong><br /><br />จะกลายเป็น <strong>Hello</strong></li><li>ขีดเส้นใต้ <strong>[u][/u]</strong>, ตัวอย่างเช่น :<br /><br /><strong>[u]</strong>Good Morning<strong>[/u]</strong><br /><br />กลายเป็น <span style="text-decoration: underline">Good Morning</span></li><li>ตัวเอียง<strong>[i][/i]</strong>,ตัวอย่างเช่น<br /><br />This is <strong>[i]</strong>Great!<strong>[/i]</strong><br /><br />would give This is <i>Great!</i></li></ul>'
	),
	array(
		0 => 'การเปลี่ยนสีตัวอักษรและขนาดตัวอักษร',
		1 => 'การเปลี่ยนสีตัวอักษรและขนาดตัวอักษร. สิ่งที่จะปรากฏให้คุณเห็นคือ : <ul><li>การเปลี่ยนสีตัวอักษรจะใช้คำสั่ง <strong>[color=][/color]</strong>. คุณสามารถระบุชื่อสีได้  ( red, blue, yellow, etc.) หรือจะเป็นเลขฐานสิบหกก็ได้, เช่น  #FFFFFF, #000000. ตัวอย่างถ้าคุณต้องการใส่สีให้อักษร:<br /><br /><strong>[color=red]</strong>Hello!<strong>[/color]</strong><br /><br />หรือ <br /><br /><strong>[color=#FF0000]</strong>Hello!<strong>[/color]</strong><br /><br />แสดงได้ดังนี้  <span style="color:red">Hello!</span></li><li>เปลี่ยนขนาดตัวอักษร <strong>[size=][/size]</strong>รูปแบบคำสั่งจะเป็นการระบุตัวเลขเพื่อกำหนดขนาดตัวอักษร เริ่มต้นที่ขนาดเล็กสุด (20) และขนาดใหญ่สุด(200) โดยพื้นฐาน ตัวอย่าง:<br /><br /><strong>[size=30]</strong>SMALL<strong>[/size]</strong><br /><br />will generally be <span style="font-size:30%;">SMALL</span><br /><br />whereas:<br /><br /><strong>[size=200]</strong>HUGE!<strong>[/size]</strong><br /><br />will be <span style="font-size:200%;">HUGE!</span></li></ul>'

	),
	array(
		0 => 'ฉันสามารถเขียนคำสั่ง BBCode ร่วมกันได้ไหม',
		1 => 'ได้คุณสามารถ ตัวอย่างเช่นคุณต้องการเขียนว่า :<br /><br /><strong>[size=200][color=red][b]</strong>LOOK AT ME!<strong>[/b][/color][/size]</strong><br /><br />ผลที่ได้คือ<span style="color:red;font-size:200%;"><strong>LOOK AT ME!</strong></span><br /><br />เราไม่แนะนำให้คุณใช้คำสั่งมากเกินความจำเป็น บางครั้งมันจะทำให้การแสดงผลผิดพลาดได้ :<br /><br /><strong>[b][u]</strong>This is wrong<strong>[/b][/u]</strong>'
	),
	array(
		0 => '--',
		1 => 'การตอบกลับข้อความก่อนหน้าน้และการกำหนดขนาดความกว้างของข้อความ'
	),
	array(
		0 => 'การตอบกลับข้อความก่อนหน้านี้',
		1 => 'มี 2 วิธีที่สามารถทำได้ คือการอ้างอิงข้อความหรือการเริ่มใหม่<ul><li>เมื่อคุณต้องการให้ประโชยน์จากฟังก์ชันการอ้างอิงข้อความในกระทู้ คุณควรที่จะอ้างอิงข้อความเหล่านั้นโดยการใช้คำสั่ง <strong>[quote=&quot;&quot;][/quote]</strong>  วิธีนี้อนุญาตให้อ้างอิงข้อความได้ ตัวอย่างเช่น:<br /><br /><strong>[quote=&quot;Mr. Blobby&quot;]</strong>The text Mr. Blobby wrote would go here<strong>[/quote]</strong><br /><br />ผลลัพธ์คือ  add &quot;Mr. Blobby wrote:&quot; ก่อนใช้งาน อย่าลืม Remember you <strong>ต้อง</strong> กำหนด &quot;&quot; ล้อมรอบข้อความที่เราต้องการอ้างอิง</li><li>วิธีที่สองคือการมองไม่เห็นสิ่งที่เราต้องการอ้างอิง. โดยการล้อมรอบด้วยคำสั่ง <strong>[quote][/quote]</strong> เมื่อคุณเรียกดูข้อความ มันจะถูกล้อมรอบด้วยกล่องข้อความ</li></ul>'
	),
	array(
		0 => 'การแสดงผลของส่วนของโปรแกรมหรือข้อความที่มีความกว้างคงที่',
		1 => 'ถ้าคุณต้องการแสดงส่วนของโปรแกรมหรือข้อความที่มีความกว้างคงที่  ควรจะให้คำสั่ง <strong>[code][/code]</strong> ตัวอย่างเช่น<br /><br /><strong>[code]</strong>echo &quot;This is some code&quot;;<strong>[/code]</strong><br /><br />โดยทั้งหมดต้องอยู่ในคำสั่ง <strong>[code][/code]</strong> โปรแกรมของภาษา PHPที่ต้องการนำมาลงในข้อความ ต้องล้อมรอบด้วยคำสั่ง <strong>[code=php][/code]</strong>'
	),
	array(
		0 => '--',
		1 => 'การจัดการรายการ'
	),
	array(
		0 => 'การสร้างรายการแบบ Unordered ',
		1 => 'BBCode รองรับ 2 แบบ คือ unordered และ  ordered. ทั้งหมดจะเป็นคำสั่ง HTML    ,รายการแบบ Unordered  เป็นการเรียงลำดับโดยใช้ตัวอักษร การใช้คำสั่งสามารถทำได้โดย  <strong>[list][/list]</strong> และการอธิบายถึงการใช้ตัวอักษรในการเรียงลำดับใช้คำสั่ง <strong>[*]</strong>ตัวอย่างเช่น รายการแสดงสีที่คุณชื่นชอบ :<br /><br /><strong>[list]</strong><br /><strong>[*]</strong>Red<br /><strong>[*]</strong>Blue<br /><strong>[*]</strong>Yellow<br /><strong>[/list]</strong><br /><br />ผลลัทธ์คือ  list:<ul><li>Red</li><li>Blue</li><li>Yellow</li></ul>'
	),
	array(
		0 => 'การสร้างรายการแบบ Ordered list',
		1 => 'วิธีที่สองคือการใช้แบบ ordered list  วิธีนี้คุณสามารถควบคุมการแสดงผลของรายการต่างๆ ได้ คำสั่งที่ใช้ในการสร้างรายการประเภทนี้คือ  <strong>[list=1][/list]</strong> สร้างการรายแบบเรียงลำดับตัวเลข <strong>[list=a][/list]</strong> สร้างรายการแบบเรียงตามลำดับ ข้อมูลภายในรายการใช้คำสั่งเดียวกันกับแบบ Unordered  <strong>[*]</strong>ตัวอย่างเช่น :<br /><br /><strong>[list=1]</strong><br /><strong>[*]</strong>Go to the shops<br /><strong>[*]</strong>Buy a new computer<br /><strong>[*]</strong>Swear at computer when it crashes<br /><strong>[/list]</strong><br /><br />ผลลัพธ์ที่ได้คือ <ol style="list-style-type: arabic-numbers"><li>Go to the shops</li><li>Buy a new computer</li><li>Swear at computer when it crashes</li></ol>Whereas for an alphabetical list you would use:<br /><br /><strong>[list=a]</strong><br /><strong>[*]</strong>The first possible answer<br /><strong>[*]</strong>The second possible answer<br /><strong>[*]</strong>The third possible answer<br /><strong>[/list]</strong><br /><br />giving<ol style="list-style-type: lower-alpha"><li>The first possible answer</li><li>The second possible answer</li><li>The third possible answer</li></ol>'
	),
		// This block will switch the FAQ-Questions to the second template column
	array(
		0 => '--',
		1 => '--'
	),
	array(
		0 => '--',
		1 => 'การสร้างลิงค์'
	),
	array(
		0 => 'การสร้าง Link เชื่อมโยงนอกเวบไซต์ของตนเอง',
		1 => 'phpBB BBCode สนับสนุนให้สามารถสร้าง URIs (Uniform Resource Indicators) หรือ URLs.<ul><li>ข้อแรกคำสั่งที่ใช้ <strong>[url=][/url]</strong> tag, ด้านหลังเครื่องหมาย  =  URL สำหรับสร้าง Link เพื่อเชื่อมโยงข้อมูล. ตัวอย่าง สร้าง link ไปที่  phpBB.com คุณสามารถทำได้คือ :<br /><br /><strong>[url=http://www.phpbb.com/]</strong>Visit phpBB!<strong>[/url]</strong><br /><br />จะแสดงได้ดังนี้, <a href="http://www.phpbb.com/">Visit phpBB!</a> การกำหนดให้ link นี้ไปเปิดหน้าเดิมหรือเปิดหน้าใหม่นั้น สามารถกำหนดได้โดยผู้ใช้ </li><li> หากคุณต้องการ URL ที่แสดงในตัวมันเอง สามารถทำได้ดังตัวอย่าง:<br /><br /><strong>[url]</strong>http://www.phpbb.com/<strong>[/url]</strong><br /><br />จะแสดงได้ดังนี้, <a href="http://www.phpbb.com/">http://www.phpbb.com/</a></li><li>เพิ่มเติม, ฟีเจอร์ phpBB <i>Magic Links</i>, แต่สามารถเขียนตรงๆ ได้คืิอ  http://. ตัวอย่างเช่น จะสร้าง link เชื่อมโยง www.phpbbthailand.comเข้าไปในข้อความ   <a href="http://www.phpbbthailand.com">www.phpbbthailand.com</a> จะแสดงเมื่อคุณดูข้อความ </li><li>หากเป็นการทำ link เพื่อเปิดหน้าการเขียน อีเมล สามารถทำได้คือ:<br /><br /><strong>[email]</strong>no.one@domain.adr<strong>[/email]</strong><br /><br />แสดงได้  <a href="mailto:no.one@domain.adr">no.one@domain.adr</a> หรือจะพิมพ์ข้อความ  no.one@domain.adr ระบบจะปรับเป็นรูปแบบคำสั่งโดยอัติโนมัติ</li></ul>นอกจากตัวอักษรแล้วสามารถถทำป็นแบบอื่นได้อีก เช่น  <strong>[img][/img]</strong> (see next entry), <strong>[b][/b]</strong>, อื่นๆ  เช่น <br /><br /><strong>[url=http://www.google.com/][img]</strong>http://www.google.com/intl/en_ALL/images/logo.gif<strong>[/url][/img]</strong><br /><br />is <span style="text-decoration: underline">not</span> '
	),
	array(
		0 => '--',
		1 => 'การแสดงรูปภาพในโพสต์'
	),
	array(
		0 => 'เพิ่มรูปภาพในข้อความที่โฟสต์',
		1 => 'phpBB มีคำสั่ง BBCode ที่สามารถเพิ่ม tag เกี่ยวกับการโฟสต์รูปภาพในข้อความ สิ่งที่สำคัญในการใช้ tag นี้มี 2 ประการคือ: ผู้ใช้หลายคนไม่ตระหนักถึงการโฟสต์รูปภาพจำนวนมากในข้อความและการแสดงรูปต้องอาศัยการเชื่อมต่อ Internet  (ถ้าขณะนั้นไม่ได้อยู่เครื่องคอมพิวเตอร์ของคุณ  ยกตัวอย่าง, ไม่มีเครื่องเซิร์ฟเวอร์สำหรับใช้งาน	!) รูปภาพต้องถูกล้อมรอบด้วย URL ที่เรานำรูปไปวาง  <strong>[img][/img]</strong> ตัวอย่าง: <br /><br /><strong>[img]</strong>http://www.google.com/intl/en_ALL/images/logo.gif<strong>[/img]</strong><br /><br />As noted in the URL section above you can wrap an image in a <strong>[url][/url]</strong> tag if you wish, e.g.<br /><br /><strong>[url=http://www.google.com/][img]</strong>http://www.google.com/intl/en_ALL/images/logo.gif<strong>[/img][/url]</strong><br /><br />would generate:<br /><br /><a href="http://www.google.com/"><img src="http://www.google.com/intl/en_ALL/images/logo.gif" alt="" /></a>'	
	),
	array(
		0 => 'เพิ่มไฟล์เอกสารแนบในข้อความที่โพสต์',
		1 => 'ไฟล์เอกสารแนบสามารถโพสต์เข้าไปในข้อความได้โดยใช้คำสั่ง BBCode <strong>[attachment=][/attachment]</strong>, ถ้าฟังก์ชันการแนบไฟล์เอกสารสามารถกำหนดโดยผู้ดูแลระบบ และถ้าคุณต้องการเพิ่มสิทธิ์การสร้างแนบไฟล์เอกสาร ภายในหน้าจอการโพสข้อความจะมี drop-down สำหรับกำหนดบทบาทได้'
		
	),
	array(
		0 => '--',
		1 => 'อื่นๆ '
	),
	array(
		0 => 'ฉันสามารถเพิ่ม tag ของตนเองได้หรือไม่?',
		1 => 'ถ้าคุณคือผู้ดูแลระบบและมีสิทธิ์การใช้งานอย่างถูกต้อง, คุณสามารถเพิ่มคำสั่ง BBCode รวมไปถึงการปรับแก้คำสั่ง BBCode ด้วย'
	),
	array(
		0 => '--',
		1 => 'สอบถามปัญหาการใช้งาน '
	),
	array(
		0 => 'ฉันสามารถสอบถามปัญหาการใช้งาน ภาษาไทยได้ที่ไหน ?',
		1 => 'คุณสามารถสอบถามปัญหาการใช้งาน ได้ที่ <a href="http://www.phpbbthailand.com">phpBBThailand.com</a>'
	)	
);

?>