<?php
/** 
* ภาษาไทย เวอร์ชั่น 1.3.0 
* 27/08/2555 
* ไฟล์ภาษาไทยสำหรับ PHPBB3 โดย www.mindphp.com และ www.phpbbthailand.com
*
*/ 

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}


$lang = array_merge($lang, array(
	'ABOUT_USER'			=> 'โปรไฟล์',
	'ACCOUNT'				=> 'บัญชีรายชื่อ',
	'ACTIVE_IN_FORUM'		=> 'บอร์ดที่ใช้งานมากสุด',
	'ACTIVE_IN_TOPIC'		=> 'หัวข้อที่ใช้งานมากสุด',
	'ADD_FOE'				=> 'เพิ่มศัตรู',
	'ADD_FRIEND'			=> 'เพิ่มเพื่อน',
	'AFTER'					=> 'หลังจาก',

	'ALL'					=> 'ทั้งหมด',

	'BEFORE'				=> 'ก่อนหน้า',

	'CC_EMAIL'				=> 'ส่ง อีเมล นี้หาตัวเองด้วย.',
	'CONTACT_USER'			=> 'ติดต่อสมาชิก',

	'DEST_LANG'				=> 'ภาษา',
	'DEST_LANG_EXPLAIN'		=> 'เลือกภาษาที่เหมาะสมกับผู้รับข้อความ.',

	'EMAIL_BODY_EXPLAIN'	=> 'ข้อความที่จะส่ง เป็น ข้อความ ไม่สามารถใช้ HTML หรือ BB Code ได้ . ที่อยู่ในการส่งข้อความกลับ จะถูกกำหนดให้เป็น e-mail ของท่าน .',
	'EMAIL_DISABLED'		=> 'ขออภัย ฟังก์ชันการส่งเมล์ไม่สามารถใช้งานได้ชั่วคราว',
	'EMAIL_SENT'			=> ' เมลถูกส่งเรียบร้อยแล้ว.',
	'EMAIL_TOPIC_EXPLAIN'	=> 'ข้อความที่ส่งต้องเป็นข้อความซึ่งไม่ประกอบด้วยคำสั่ง HTML หรือ BBCode กรุณากรอกแต่ข้อความส่งในกระทู้ ข้อความตอบกลับจะถูกส่งถึงคุณทาง อีเมล',
	'EMPTY_ADDRESS_EMAIL'	=> 'คุณต้องจัดการกับอีเมลเหล่านี้',
	'EMPTY_MESSAGE_EMAIL'	=> 'คุณต้องกรอกข้อความใน อีเมล',
	'EMPTY_MESSAGE_IM'		=> 'คุณจำเป็นต้องกรอกข้อความเพื่อส่ง.',
	'EMPTY_NAME_EMAIL'		=> 'คุณต้องระบุชื่อจริงของผู้รับ',
	'EMPTY_SUBJECT_EMAIL'	=> 'ท่านจำเป็นต้องใส่หัวข้อในการส่งเมลด้วย .',
	'EQUAL_TO'				=> 'เท่ากับ',

	'FIND_USERNAME_EXPLAIN'	=> 'การค้นหาสมาชิก คุณไม่สามารถค้นหาได้ทุกข้อมูล ระบบจะค้นหาแต่ข้อมูลที่สำคัญให้ เมื่อคุณกรอกวันที่ กรุณากรอกตามรูปแบบ <kbd>YYYY-MM-DD</kbd>, ตัวอย่างเช่น <samp>2004-02-29</samp> กรุณาเลือก Username อย่างน้อยหนึ่งชื่อ และเลือกเพื่อให้ย้อนกลับมาหน้านี้',
	'FLOOD_EMAIL_LIMIT'		=> 'คุณไม่สามารถส่ง อีเมล ได้ในขณะนี้ กรุณาส่งใหม่อีกครั้ง',

	'GROUP_LEADER'			=> 'ผู้นำกลุ่ม',

	'HIDE_MEMBER_SEARCH'	=> 'ซ่อนการค้นหาสมาชิก',

	'IM_ADD_CONTACT'		=> 'เพิ่มรายชื่อผู้ติดต่อ',
	'IM_AIM'				=> 'คุณต้องมีติดตั้งโปรแกรม AOL Instant Messenger นี้ก่อนจึงจะสามารถใช้งานได้',
	'IM_AIM_EXPRESS'		=> 'AIM Express',
	'IM_DOWNLOAD_APP'		=> 'ดาวน์โหลด',
	'IM_ICQ'				=> 'ผู้ใช้อาจเลือกที่จะไม่รับข้อความเชิญชวนได้',
	'IM_JABBER'				=> 'ผู้ใช้อาจเลือกที่จะไม่รับข้อความเชิญชวนได้',
	'IM_JABBER_SUBJECT'		=> 'นี้คือข้อความอัตโนมัติ กรุณาอย่าส่งข้อความนี้จาก ผู้ใช้งาน %1$s at %2$s.',
	'IM_MESSAGE'			=> 'ข้อความของท่าน',
	'IM_MSNM'				=> 'คุณต้องมีติดตั้งโปรแกรม Windows Messenger นี้ก่อนจึงจะสามารถใช้งานได้',
	'IM_MSNM_BROWSER'		=> 'บราว์เซอร์ของคุณไม่รองรับการทำงานนี้',
	'IM_MSNM_CONNECT'		=> 'ไม่สามารถเชื่อมต่อ MSNM ได้ \nกรุณาเชื่อมต่อ MSNM ภายหลัง',		
	'IM_NAME'				=> 'ชื่อของท่าน',
	'IM_NO_DATA'			=> 'มีข้อมูลที่ติดต่อไม่เหมาะสมสำหรับผู้ใช้.',
	'IM_NO_JABBER'			=> 'ขอโทษคะ ข้อความจากผู้ใช้ Jabber ไม่รองรับเซิร์ฟเวอร์นี้ คุณต้องเข้าใช้งาน Jabber จากระบบของคุณเพื่อส่งข้อความหาผู้รับเอง',
	'IM_RECIPIENT'			=> 'ผู้รับ',
	'IM_SEND'				=> 'ส่งข้อความ',
	'IM_SEND_MESSAGE'		=> 'ส่งข้อความ',
	'IM_SENT_JABBER'		=> 'ข้อความของคุณ %1$s ถูกส่งเรียบร้อยแล้ว',
	'IM_USER'				=> 'ส่งข้อความโต้ตอบแบบทันที',
	
	'LAST_ACTIVE'				=> 'ใช้งานล่าสุด',
	'LESS_THAN'					=> 'น้อยกว่า',
	'LIST_USER'					=> 'สมาชิก 1 ท่าน',
	'LIST_USERS'				=> 'สมาชิก %d ท่าน',
	'LOGIN_EXPLAIN_LEADERS'		=> 'ท่านต้องเข้าสู่ระบบก่อน จึงจะสามารถดูรายชื่อทีมผู้ดูแลได้',
	'LOGIN_EXPLAIN_MEMBERLIST'	=> 'ท่านต้องเข้าสู่ระบบก่อน จึงจะสามารถดูรายชื่อสมาชิกได้',
	'LOGIN_EXPLAIN_SEARCHUSER'	=> 'ท่านต้องเข้าสู่ระบบก่อน จึงจะสามารถค้นหาชื่อสมาชิกได้',
	'LOGIN_EXPLAIN_VIEWPROFILE'	=> 'ท่านต้องเข้าสู่ระบบก่อน จึงจะสามารถดูข้อมูลส่วนตัวได้',

	'MORE_THAN'				=> 'มากกว่า',

	'NO_EMAIL'				=> 'คุณไม่มีสิทธิ์ส่ง อีเมล หาผู้ใช้',
	'NO_VIEW_USERS'			=> 'คุณไม่สามารถดูรายชื่อสมาชิกและประวัติส่วนตัวของสมาชิกได้',

	'ORDER'					=> 'คำสั่ง',
	'OTHER'					=> 'อื่น',

	'POST_IP'				=> 'โพสต์จากไอพี/โดเมน',

	'REAL_NAME'				=> 'ชื่อผู้รับ',
	'RECIPIENT'				=> 'ผู้รับ',
	'REMOVE_FOE'			=> 'Remove foe',
	'REMOVE_FRIEND'			=> 'ย้ายเพื่อน',


	'SELECT_MARKED'			=> 'เลือก',
	'SELECT_SORT_METHOD'	=> 'เลือกการเรียงลำดับ',
	'SEND_AIM_MESSAGE'		=> 'Send AIM message',
	'SEND_ICQ_MESSAGE'		=> 'Send ICQ message',
	'SEND_IM'				=> 'Instant messaging',
	'SEND_JABBER_MESSAGE'	=> 'Send Jabber message',
	'SEND_MESSAGE'			=> 'Message',
	'SEND_MSNM_MESSAGE'		=> 'Send MSNM/WLM message',
	'SEND_YIM_MESSAGE'		=> 'Send YIM message',
	'SORT_EMAIL'			=> 'E-mail',
	'SORT_LAST_ACTIVE'		=> 'ใช้งานครั้งล่าสุด',
	'SORT_POST_COUNT'		=> 'จำนวนที่โพสต์',

	'USERNAME_BEGINS_WITH'	=> 'เริ่มต้นชื่อผู้ใช้ด้วย',
	'USER_ADMIN'			=> 'ผู้ใช้งาน',
	'USER_BAN'				=> 'ถูกแบน',
	'USER_VERIFY' 			=> 'ยืนยันสมาชิก',
	'USER_FORUM'			=> 'สถิติสมาชิก',
	'USER_LAST_REMINDED'	=> array(
		0		=> 'ไม่มี reminder ถูกส่งขณะนี้',
		1		=> '%1$d reminder ถูกส่ง<br />» %2$s',
	),	
	'USER_ONLINE'			=> 'ออนไลน์',
	'USER_PRESENCE'			=> 'Board presence',

	'VIEWING_PROFILE'		=> 'ดูประวัติส่วนตัว - %s',
	'VISITED'				=> 'ใช้งานล่าสุด',

	'WWW'					=> 'เว็บไซต์',
));

?>