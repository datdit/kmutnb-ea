<?php
/** 
* ภาษาไทย เวอร์ชั่น 1.3 
* 27/8/2555 
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

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

// Board Settings
$lang = array_merge($lang, array(
	'ACP_BOARD_SETTINGS_EXPLAIN'	=> 'คุณสามารถกำหนดค่าพื้นฐานเว็บบอร์ด, เช่น ตั้งชื่อเว็บบอร์ดและตั้งค่าต่างๆของ เวลา และภาษา',
	'CUSTOM_DATEFORMAT'				=> 'กำหนดเอง…',
	'DEFAULT_DATE_FORMAT'			=> 'รูปแบบเวลา',
	'DEFAULT_DATE_FORMAT_EXPLAIN'	=> 'รูปแบบของเวลาเหมือนกับฟังก์ชัน <code>date</code>ของ PHP ',
	'DEFAULT_LANGUAGE'				=> 'ภาษาเริ่มต้น',
	'DEFAULT_STYLE'					=> 'รูปแบบเริ่มต้น',
	'DISABLE_BOARD'					=> 'ปิดเว็บบอร์ด',
	'DISABLE_BOARD_EXPLAIN'			=> 'การตั้งค่านี้จะทำให้ผู้ใช้ไม่สามารถใช้เว็บบอร์ดได้ คุณสามารถตั้งข้อความสั้นๆ (255 ตัวอักษร) เพื่อแสดงให้ผู้ใช้ทราบถึงเหตุผลของการปิดเว็บบอร์ด',
	'OVERRIDE_STYLE'				=> 'กำหนดรูปแบบกับผู้ใช้ทุกคน',
	'OVERRIDE_STYLE_EXPLAIN'		=> 'แทนที่รูปแบบผู้ใช้ด้วยค่าเริ่มต้น',
	'SITE_DESC'						=> 'คำอธิบายเว็บบอร์ด',
	'SITE_NAME'						=> 'ชื่อเว็บบอร์ด',
	'SYSTEM_DST'					=> 'เปิดใช้งานการปรับเวลาฤดูร้อน<abbr title="Daylight Saving Time">ปรับเวลาตามฤดูกาล</abbr>',
	'SYSTEM_TIMEZONE'				=> 'เขตเวลาบุคคลทั่วไป',
	'SYSTEM_TIMEZONE_EXPLAIN'			=> 'เขตเวลาใช้่เพื่อแสดงเวลาสำหรับบุคคลทั่วไป รวมทั้งบอท ด้วย ซึ่งไม่ใช่สมาชิกที่ เข้าสู่ระบบ. สมาชิกที่เข้าสู่ระบบแล้วสามารถตั้งค่าเขตเวลาของตัวเองได้ที่ user control panel.',
	
	'WARNINGS_EXPIRE'				=> 'ระยะเวลาการเตือน',
	'WARNINGS_EXPIRE_EXPLAIN'		=> 'จำนวนวัน ก่อนที่ตำเตือนจะหมดอายุโดยอัตโนมัติ ตั้งค่านี้เป็น 0 เพื่อใช้คำเตือนอย่างถาวร',
));

// Board Features
$lang = array_merge($lang, array(
	'ACP_BOARD_FEATURES_EXPLAIN'	=> 'คุณสามารถ ใช้งาน/ยกเลิก ลักษณะของบอร์ด',

	'ALLOW_ATTACHMENTS'			=> 'อนุญาตไฟล์แนบ',
	'ALLOW_BIRTHDAYS'			=> 'อนุญาตวันเกิด',
	'ALLOW_BIRTHDAYS_EXPLAIN'	=> 'อนุญาตให้มีการใส่วันเกิดและแสดงอายุในโพรไฟล์. ',
	'ALLOW_BOOKMARKS'			=> 'อนุญาต เก็บกระทู้',
	'ALLOW_BOOKMARKS_EXPLAIN'	=> 'ผู้ใช้ สามารถเก็บ เก็บกระทู้ส่วนตัว',
	'ALLOW_BBCODE'				=> 'อนุญาต BBCode',
	'ALLOW_FORUM_NOTIFY'		=> 'อนุญาตให้การสมัครบอร์ด',
	'ALLOW_NAME_CHANGE'			=> 'อนุญาตให้เปลี่ยนชื่อผู้ใช้',
	'ALLOW_NO_CENSORS'			=> 'อนุญาตให้ปิดการกรองคำหยาบ',
	'ALLOW_NO_CENSORS_EXPLAIN'	=> 'ผู้ใช้สามารถเลือก ปิดการใช้งานกรองคำอัตโนมัติในการโพสต์และ ข้อความส่วนตัว .',
	
	'ALLOW_PM_REPORT'			=> 'อนุญาตให้ผู้ใช้สามารถรายงานข้อความส่วนตัวได้',
	'ALLOW_PM_REPORT_EXPLAIN'	=> 'ถ้าตั้งค่านี้, ผู้ใช้จะมีตัวเลือกรายงานข้อความส่วนตัว ที่พวกเขาได้รับ ส่งไปยังผู้ดูแลบอร์ด. เมื่อรายงานข้อความส่วนตัวเหล่านี้แล้ว จะปรากฏที่ Moderator Control Panel.',
	'ALLOW_QUICK_REPLY'			=> 'อนุณาตให้ตอบด่วน',
	
	'ALLOW_QUICK_REPLY_EXPLAIN'	=> 'เปิด หรือ ปิดระบบตอบด่วนเพื่อใช้งานทั้งเว็บบอร์ด. เมื่อเปิดใช้งาน, บอร์ดที่ตั้งค่าเป็นอย่างอื่นจะเป็นไปตามหมวดแต่ละหมวดที่กำหนดไว้.',
	'ALLOW_QUICK_REPLY_BUTTON'	=> 'ส่งค่าเปิดให้งานตอบด่วนทุกหมวด',	
	
	'ALLOW_PM_ATTACHMENTS'		=> 'อนุญาตให้แนปไฟล์ในข้อความส่วนตัว ',
	'ALLOW_SIG'					=> 'อนุญาตให้ใส่ลายเซ็นต์',
	'ALLOW_SIG_BBCODE'			=> 'อนุญาตให้ใช้ BBCodeในลายเซ็นต์ผู้ใช้',
	'ALLOW_SIG_FLASH'			=> 'อนุญาตการใช้  <code>[FLASH]</code> BBCode tag ในลายเซ็นต์ผู้ใช้',
	'ALLOW_SIG_IMG'				=> 'อนุญาตการใช้ <code>[IMG]</code> BBCode tag ในลายเซ็นต์ผู้ใช้',
	'ALLOW_SIG_LINKS'			=> 'อนุญาตการใช้ลิงค์ในลายเซ็นต์ผู้ใช้',
	'ALLOW_SIG_LINKS_EXPLAIN'	=> 'ถ้าไม่อนุญาต <code>[URL]</code> BBCode tag และ automatic/magic URLs ถูกห้ามใช้',
	'ALLOW_SIG_SMILIES'			=> 'อนุญาตการใช้ไอคอนยิ้มในลายเซ็นต์ผู้ใช้',
	'ALLOW_SMILIES'				=> 'อนุญาตไอคอนยิ้ม',
	'ALLOW_TOPIC_NOTIFY'		=> 'อนุญาตให้สมัครแจ้งกระทู้',
	'BOARD_PM'					=> 'ข้อความส่วนตัว',
	'BOARD_PM_EXPLAIN'			=> 'เปิดใช้งานข้อความส่วนตัวสำหรับสมาชิกทั้งหมด',
));

// Avatar Settings
$lang = array_merge($lang, array(
	'ACP_AVATAR_SETTINGS_EXPLAIN'	=> 'โดยปกติภาพประจำตัวจะมีขนาดเล็ก ผู้ใช้แต่ละคนสามารถใช้ภาพแทนตัวได้ การที่จะอัพโหลดภาพประจำตัว ต้องสร้างไดเรกทอรี่เพื่อให้เวบเซิร์ฟเวอร์สามารถเขียนทับได้ ',

	'ALLOW_AVATARS'					=> 'เปิดให้ใช้งานภาพประจำตัว',
	'ALLOW_AVATARS_EXPLAIN'			=> 'อนุญาตให้ใช้งานภาพประจำตัว;<br />ถ้าปิดการใช้งานภาพประจำตัว, รูปประจำตัวจะไม่ถูกแสดงที่หน้าบอร์ด, แต่ผู้ใช้ยังสามารถดาวน์โหลดรูปประจำตัวได้ที่ User Control Panel.',

	'ALLOW_LOCAL'					=> 'ใช้งานแกลเลอรี่ภาพประจำตัว',
	'ALLOW_REMOTE'					=> 'ใช้งานภาพประจำตัวจากเว็บอื่น',
	'ALLOW_REMOTE_EXPLAIN'			=> 'ภาพประจำตัว ที่อ้างอิงจากเวบอื่น',

	'ALLOW_REMOTE_UPLOAD'			=> 'อนุญาตให้อัพโหลดภาพประจำตัว',
	'ALLOW_REMOTE_UPLOAD_EXPLAIN'	=> 'อนุญาตให้อัพโหลดภาพประจำตัวจากเว็บอื่น.',
	
	'ALLOW_UPLOAD'					=> 'ใช้งานการอัพโหลดภาพประจำตัว',
	'AVATAR_GALLERY_PATH'			=> 'ไดเร็กทอรี่แกลเลอรี่ภาพประจำตัว',
	'AVATAR_GALLERY_PATH_EXPLAIN'	=> 'เส้นทางภายใต้ phpBB ไดเรกทอรี่รากสำหรับเก็บภาพ, เช่น <samp>images/avatars/gallery</samp>.',
	'AVATAR_STORAGE_PATH'			=> 'ไดเร็กทอรี่เก็บภาพประจำตัว ',
	'AVATAR_STORAGE_PATH_EXPLAIN'	=> 'เส้นทางภายใต้ phpBB ไดเรกทอรี่สำหรับ เก็บภาพ, เช่น <samp>images/avatars/upload</samp>.',
	'MAX_AVATAR_SIZE'				=> 'ความกว้างยาวสูงสุดของภาพประจำตัว',
	'MAX_AVATAR_SIZE_EXPLAIN'		=> 'ความกว้าง x ความสูง หน่วยพิกเซล',
	'MAX_FILESIZE'					=> 'ขนาดไฟล์สูงสุดของภาพประจำตัว',
	'MAX_FILESIZE_EXPLAIN'			=> 'สำหรับอัพโหลดไฟล์ภาพประจำตัว, ใส่ 0 คือไม่จำกัด, ไฟล์จะถูกจำกัดเพียงแค่จากการตั้งค่า PHP ของคุณ',
	'MIN_AVATAR_SIZE'				=> 'ความกว้างยาวต่ำสุดของภาพประจำตัว ',
	'MIN_AVATAR_SIZE_EXPLAIN'		=> 'ความกว้าง x ความสูง หน่วยเป็นพิกเซล',
));

// Message Settings
$lang = array_merge($lang, array(
	'ACP_MESSAGE_SETTINGS_EXPLAIN'		=> 'คุณสามารถตั้งค่าเริ่มต้นสำหรับข้อความ',

	'ALLOW_BBCODE_PM'			=> 'อนุญาต BBCodeในข้อความส่วนตัว ',
	'ALLOW_FLASH_PM'			=> 'อนุญาต การใช้ <code>[FLASH]</code> BBCode tag',
	'ALLOW_FLASH_PM_EXPLAIN'	=> 'การใช้ flash ในข้อความส่วนตัว , ถ้าใช้งาน, ขึ้นกับการอนุญาตด้วย',
	'ALLOW_FORWARD_PM'			=> 'อนุญาตการส่งต่อข้อความส่วนตัว ',
	'ALLOW_IMG_PM'				=> 'อนุญาตการใช้ <code>[IMG]</code> BBCode tag',
	'ALLOW_MASS_PM'				=> 'อนุญาตการส่งข้อความส่วนตัวไปถึงผู้ใช้หลายคนและกลุ่มต่างๆพร้อมๆกัน',
	'ALLOW_MASS_PM_EXPLAIN'		=> 'การส่งไปยังกลุ่มสามารถตั้งค่าการส่งไปต่อกลุ่มได้ที่หน้าตั้งค่า',	
	'ALLOW_PRINT_PM'			=> 'อนุญาตมุมมองการพิมพ์ในข้อความส่วนตัว',
	'ALLOW_QUOTE_PM'			=> 'อนุญาต quotes ในข้อความส่วนตัว ',
	'ALLOW_SIG_PM'				=> 'อนุญาตลายเซ็นต์ในข้อความส่วนตัว ',
	'ALLOW_SMILIES_PM'			=> 'อนุญาต smilies ในข้อความส่วนตัว ',
	'BOXES_LIMIT'				=> 'ข้อความส่วนตัวสูงสุดต่อกล่อง',
	'BOXES_LIMIT_EXPLAIN'		=> 'ผู้ใช้จะได้รับข้อความในในกล่องข้อความไม่เกินที่กำหนดไว้. ตั้งค่านี้เป็น 0 เพื่ออนุญาต ข้อความไม่จำกัด',
	'BOXES_MAX'					=> 'จำนวนโฟลเดอร์ข้อความส่วนตัวสูงสุด',
	'BOXES_MAX_EXPLAIN'			=> 'ผู้ใช้สามารถสร้างโฟลเดอร์ส่วนตัวสำหรับเก็บข้อความส่วนตัว',
	'ENABLE_PM_ICONS'			=> 'ใช้ไอคอนกระทู้ในข้อความส่วนตัว ',
	'FULL_FOLDER_ACTION'		=> 'เมื่อข้อความส่วนตัีวเต็ม',
	'FULL_FOLDER_ACTION_EXPLAIN'=> 'ถ้า folder ของผู้ใช้เต็มแล้ว ยังมีการส่งข้อมูลมากอีก ระบบจะลบข้อมูลเก่าออกไป',
	'HOLD_NEW_MESSAGES'			=> 'Hold ข้อความใหม่',
	'PM_EDIT_TIME'				=> 'จำกัดเวลาแก้ไข',
	'PM_EDIT_TIME_EXPLAIN'		=> 'จำกัดเวลาแก้ไขข้อความส่วนตัวที่ยังไม่ได้ส่ง  ตั้งค่าเวลาเป็น 0 เพื่อยกเลิกพฤติกรรมนี้',
	'PM_MAX_RECIPIENTS'			=> 'จำนวนวน pm ที่สามารถรับได้',
	'PM_MAX_RECIPIENTS_EXPLAIN'	=> 'จำนวน pm มากสุดที่สามารถรับได้. ถ้ากำหนดเป็น 0 ถ้าไม่จำกัดจำนวนที่รับได้. การตั้งค่านี้สามรถกำหนดให้กับทุกกลุ่ม ถายในการตั้งค่ากลุ่ม.',	
));

// Post Settings
$lang = array_merge($lang, array(
	'ACP_POST_SETTINGS_EXPLAIN'			=> 'คุณสามารถตั้งค่าเริ่มต้นทั้งหมดในการโพสต์',
	'ALLOW_POST_LINKS'					=> 'อนุญาตลิงค์ในโพสต์/ข้อความส่วนตัว ',
	'ALLOW_POST_LINKS_EXPLAIN'			=> 'ถ้าไม่อนุญาต <code>[URL]</code> BBCode สำหรับการเปลี่ยน URL อัตโนมัตจะไม่สามารถใช้ได้',
	'ALLOW_POST_FLASH'					=> 'อนุญาตการใช้ <code>[FLASH]</code> BBCode tag ในโพสต์ ',
	'ALLOW_POST_FLASH_EXPLAIN'			=> 'ถ้าไม่อนุญาติ BBCode <code>[FLASH]</code> จะไม่แสดงในการโพสต์ และการใช้งานของหน้าตั้งค่าส่วนตัวจะไม่แสดง . BBCode <code>[FLASH]</code> ด้วย',
/*
	'ENABLE_QUEUE_TRIGGER'			=> 'เปิดใช้งานคิวการโพสต์',
	'ENABLE_QUEUE_TRIGGER_EXPLAIN'	=> 'Ability to put registered users posts to post approval if their post count is lower than the specified value below. This setting has no effect on the permission setting for post/topic approval.',
	'QUEUE_TRIGGER_POSTS'			=> 'จำนวนสูงสุดของการโพสสำหรับคิวการโพสต์',
	'QUEUE_TRIGGER_POSTS_EXPLAIN'	=> 'If queued posts is enabled, this is the post count the user need to reach in order to post without post approval. If the users post count is below this number, the post is stored in the queue automatically.',
*/
	'BUMP_INTERVAL'					=> 'ช่วงเวลาการดันกระทู้',
	'BUMP_INTERVAL_EXPLAIN'			=> 'จำนวนนาที, ชั่วโมงหรือวันตั้งแต่การโพสล่าสุดในกระทู้ ถ้าต้องการยกเลิกการดันกระทู้ ตั้งค่านี้เป็น 0',

	
	'CHAR_LIMIT'					=> 'จำนวนตัวอักษรสูงสุด ต่อการโพสต์',
	'CHAR_LIMIT_EXPLAIN'			=> 'จำนวนตัวอักษรที่อนุญาตในการโพสต์หนึ่งครั้ง ตั้งค่า 0 เพื่อไม่จำกัดจำนวน',
	
	'DELETE_TIME'					=> 'จำกัดเวลาการ ลบ',
	'DELETE_TIME_EXPLAIN'			=> 'จำกัดเวลาการลบกระทู้ใหม่. ตั้งค่าเป็น 0 เพื่อไม่ใช้งาน.',
	
	'DISPLAY_LAST_EDITED'			=> 'แสดงเวลาแก้ไขล่าสุด',
	'DISPLAY_LAST_EDITED_EXPLAIN'	=> 'เลือกเพื่อให้แสดงเวลาแก้ไขล่าสุดในการโพสต์',
	'EDIT_TIME'						=> 'จำกัดเวลาแก้ไข',
	'EDIT_TIME_EXPLAIN'				=> 'จำกัดเวลาที่ให้ในการแก้ไขโพสต์ใหม่ ตั้งค่า 0 เพื่อไม่ใช้พฤติกรรมนี้',
	'FLOOD_INTERVAL'				=> 'ช่วงเวลาการรอ',
	'FLOOD_INTERVAL_EXPLAIN'		=> 'จำนวนวินาทีที่ผู้ใช้ต้องรอระหว่างที่จะโพสต์ข้อความใหม่. ต้องอนุญาตผู้ใช้ถึงจะสามารถละเลยค่านี้ได้',
	'HOT_THRESHOLD'					=> 'ค่านับจุดเริ่มต้นของกระทู้ยอดนิยม',
	'HOT_THRESHOLD_EXPLAIN'			=> 'ค่านับจุดเริ่มต้นของการโพสต์ต่อกระทู้ ที่จะถือว่าเป็นกระทู้ยอดนิยม ตั้งค่านี้เป็น 0 เพื่อไม่ใช้กระทู้ยอดนิยม',
	'MAX_POLL_OPTIONS'				=> 'จำนวนสูงสุดของตัวเลือกแบบสำรวจ',
	'MAX_POST_FONT_SIZE'			=> 'ขนาดฟอนต์สูงสุดต่อการโพสต์',
	'MAX_POST_FONT_SIZE_EXPLAIN'	=> 'ขนาดฟอนต์สูงสุดอนุญาตให้โพสต์ ตั้งค่าเป็น 0 เพื่อไม่จำกัดขนาดฟอนต์ ',
	'MAX_POST_IMG_HEIGHT'			=> 'ความสูงภาพสูงสุด',
	'MAX_POST_IMG_HEIGHT_EXPLAIN'	=> 'ขนาดความสูง สูงสุดของไฟล์ image/flash ในการโพสต์ ตั้งค่าเป็น 0 เพื่อไม่จำกัดขนาดความสูง',
	'MAX_POST_IMG_WIDTH'			=> 'ความกว้างภาพสูงสุด',
	'MAX_POST_IMG_WIDTH_EXPLAIN'	=> 'ขนาดความกว้างสูงสุดของไฟล์ image/flash ในการโพสต์ ตั้งค่าเป็น 0 เพื่อไม่จำกัดขนาดความกว้าง',
	'MAX_POST_URLS'					=> 'จำนวนลิงค์สูงสุดต่อโพสต์',
	'MAX_POST_URLS_EXPLAIN'			=> 'จำนวนลิงค์สูงสุดใน 1 โพสต์ ตั้งค่าเป็น 0 เพื่อไม่จำกัดจำนวนลิงค์',

	'MIN_CHAR_LIMIT'				=> 'จำนวนตัวอักษรน้อยสุดต่อ การโพสต์/ข้อความ',
	'MIN_CHAR_LIMIT_EXPLAIN'		=> 'จำนวนตัวอีกษรน้อยสุดที่ผู้ใช้ต้องใส่ในการโพสต์หรือส่ง pm. ค่าน้อยที่สุดคือ 1 ตัวอักษร',
	
	'POSTING'						=> 'การโพสต์',
	'POSTS_PER_PAGE'				=> 'โพสต์ต่อหนึ่งหน้า',
	'QUOTE_DEPTH_LIMIT'				=> 'จำนวนการอ้างอิงซ้อนสูงสุดต่อโพสต์',
	'QUOTE_DEPTH_LIMIT_EXPLAIN'		=> 'จำนวนชั้นสูงสุดของการอ้างอิงข้อความซ้อนกันของการโพสต์  ตั้งค่านี้เป็น 0 เพื่อไม่จำกัดจำนวนชั้นการซ้อน',
	'SMILIES_LIMIT'					=> 'จำนวนรูปแสดงอารมณ์ สูงสุดต่อโพสต์',
	'SMILIES_LIMIT_EXPLAIN'			=> 'จำนวนรูปแสดงอารมณ์สูงสุดต่อโพสต์ ตั้งค่านี้เป็น 0 เพื่อไม่จำกัดจำนวน',
	
	'SMILIES_PER_PAGE'				=> 'รูปแสดงอารมณ์ต่อหน้า',

	'TOPICS_PER_PAGE'				=> 'จำนวนกระทู้ต่อหนึ่งหน้า',
));

// Signature Settings
$lang = array_merge($lang, array(
	'ACP_SIGNATURE_SETTINGS_EXPLAIN'	=> 'คุณสามารถตั้งค่าเริ่มต้นทั้งหมดของลายเซ็นต์',

	'MAX_SIG_FONT_SIZE'				=> 'ขนาดสูงสุดของฟอนต์ในลายเซ็นต์',
	'MAX_SIG_FONT_SIZE_EXPLAIN'		=> 'ขนาดสูงสุดของฟอนต์ที่อนุญาตให้ใช้ในลายเซ็นต์ของผู้ใช้ ตั้งค่านี้เป็น 0 เพื่อไม่จำกัดขนาด',
	'MAX_SIG_IMG_HEIGHT'			=> 'ความสูงภาพสูงสุดใน ลายเซ็นต์ ',
	'MAX_SIG_IMG_HEIGHT_EXPLAIN'	=> 'ความสูง สูงสุดของไฟล์  ภาพ/แฟลช ในลายเซ็นต์ ตั้งค่านี้เป็น 0 เพื่อไม่จำกัดขนาด',
	'MAX_SIG_IMG_WIDTH'				=> 'ความกว้างสูงสุดของภาพในลายเซ็นต์',
	'MAX_SIG_IMG_WIDTH_EXPLAIN'		=> 'ความกว้าง สูงสุดของไฟล์ ภาพ/แฟลช ในลายเซ็นต์ของผู้ใช้. ตั้งค่านี้เป็น 0 เพื่อไม่จำกัดขนาด',
	'MAX_SIG_LENGTH'				=> 'ความยาวสูงสุดของลายเซ็นต์',
	'MAX_SIG_LENGTH_EXPLAIN'		=> 'ความยาวสูงสุดของตัวอักษรในลายเซ็นต์ของผู้ใช้',
	'MAX_SIG_SMILIES'				=> 'จำนวนรูปแสดงอารมณ์ สูงสุดต่อลายเซ็นต์',
	'MAX_SIG_SMILIES_EXPLAIN'		=> 'จำนวนรูปแสดงอารมณ์ สูงสุดที่อนุญาตให้ใช้ในลายเซ็นต์ของผู้ใช้ ตั้งค่านี้เป็น 0 เพื่อไม่จำกัดจำนวน',
	'MAX_SIG_URLS'					=> 'จำนวนลิงค์ลายเซ็นต์สูงสุด ',
	'MAX_SIG_URLS_EXPLAIN'			=> 'จำนวนสูงสุดของลิงค์ในลายเซ็นต์ของผู้ใช้ ตั้งค่านี้เป็น 0 เพื่อไม่จำกัดจำนวน',
));

// Registration Settings
$lang = array_merge($lang, array(
	'ACP_REGISTER_SETTINGS_EXPLAIN'		=> 'คุณสามารถกำหนดการตั้งค่าต่างๆของการลงทะเบียนและประวัติโดยย่อได้',

	'ACC_ACTIVATION'			=> 'การเปิดใช้บัญชีผู้ใช้',
	
	'ACC_ACTIVATION_EXPLAIN'	=> 'กำหนดว่าจะให้ผู้ใช้สามารถเข้าใช้บอร์ดได้ทันที หรือต้องการการยืนยันก่อนเข้าใช้ คุณสามารถยกเลิกการลงทะเบียนใหม่ได้เช่นกัน',

	'NEW_MEMBER_POST_LIMIT'			=> 'จำกัดจำนวนโพสต์ของสมาชิกใหม่',
	'NEW_MEMBER_POST_LIMIT_EXPLAIN'	=> 'สมาชิหใหม่ <em>สมาชิกที่เพิ่งลงทะเบียน</em> สมาชิกกลุ่มนี้จะถูกจำกัดการโพสต์. คุณสามารถใช้กลุ่มนี้จาก pm หรือ รีวิวโพสต์ของเขา. <strong>ตัวค่าเป็น 0 เพื่อไม่ใช่ความสามารถนี้.</strong>',
	'NEW_MEMBER_GROUP_DEFAULT'		=> 'ตั้งค่ามาตรฐานของผู้ใช้เพิ่งลงทะเบียน',
	'NEW_MEMBER_GROUP_DEFAULT_EXPLAIN'	=> 'ถ้าตั้งค่าเป็นใช่, และจำนวนโพสต์ของสมาชิกที่เพิ่งลงทะเบียนถูกกำหนดไว้, สมาชิืกที่เพิ่งลงทะเบียน จะไม่อยู่ในกลุ่ม<em>สมาชิกที่เพิ่งลงทะเบียน</em>, แต่กลุ่มนี้จะเป็นค่าเริ่มต้นอันดัีบแรกของสมาชิกที่เพิ่งลงทะเบียน. กลุ่มเริ่มต้นนี้อาจเป็นประโยชน์โดยการกำหนดการจัดลำดับและหรือรูปภาพส่วนตัวของสมาชิกจะมีคุณสมบัติตามนี้ด้วย.',
	
	'ACC_ADMIN'					=> 'โดยแอดมิน',
	'ACC_DISABLE'				=> 'ยกเลิกการลงทะเ	บียน',
	'ACC_NONE'					=> 'ไม่ต้องยืนยันตัวต้น',
	'ACC_USER'					=> 'โดยผู้ใช้ (ยืนยันตัวตนทางเมล)',

//	'ACC_USER_ADMIN'			=> 'User + Admin',
	'ALLOW_EMAIL_REUSE'			=> 'อนุญาตให้ อีเมล มีการใช้ใหม่',
	'ALLOW_EMAIL_REUSE_EXPLAIN'	=> 'ผู้ใช้คนละคนสามารถลงทะเบียนด้วย อีเมล เดียวกันได้',
	'COPPA'						=> 'COPPA',
	'COPPA_FAX'					=> 'COPPA fax number',
	'COPPA_MAIL'				=> 'ที่อยู่ติดต่อสำหรับ COPPA',
	'COPPA_MAIL_EXPLAIN'		=> 'ที่อยู่ที่ผู้ปกครองจะส่งแบบฟอร์มการลงทะเบียน COPPA.',
	'ENABLE_COPPA'				=> 'เปิดใช้งานการคุ้มครองข้อมูลของเด็ก',
	'ENABLE_COPPA_EXPLAIN'		=> 'สหรัฐฯกำหนดให้ผู้ที่อายุต่ำกว่า 13 ปีอยู่ภายใต้กฎหมายคุ้มครองข้อมูลส่วนบุคคลของเด็ก. ถ้าไม่ได้เปิดใช้งานข้อความแสดงกฏก็จะไม่ถูกแสดงขึ้นมา.',
	'MAX_CHARS'					=> 'สูงสุด',
	'MIN_CHARS'					=> 'น้อยสุด',
	'NO_AUTH_PLUGIN'			=> 'ไม่พบปลั๊กอิน auth .',
	'PASSWORD_LENGTH'			=> 'ความยาวรหัสผ่าน',
	'PASSWORD_LENGTH_EXPLAIN'	=> 'จำนวนต่ำสุดและจำนวนสูงสุดของตัวอักษรในรหัสผ่าน',
	'REG_LIMIT'					=> 'ความพยายามลงทะเบียน',
	'REG_LIMIT_EXPLAIN'			=> 'จำนวนครั้งที่ผู้ใช้สามารถพยายามตอบคำถาม ของระบบป้องกันบอท ก่อนที่จะทำการล็อกให้ใช้งานไม่ได้่ ถ้าตอบผิดเกินจำนวนที่กำหนด ',
	'USERNAME_ALPHA_ONLY'		=> 'A-Z และ 0-9 เท่านั้น',
	'USERNAME_ALPHA_SPACERS'	=> 'A-Z, 0-9, ช่องว่าง , -, +, _, [ และ ]',
	'USERNAME_ASCII'			=> 'ASCII (no international unicode)',
	'USERNAME_LETTER_NUM'		=> 'อักษรใดๆและตัวเลข',
	'USERNAME_LETTER_NUM_SPACERS'	=> 'อักษรใดๆ ตัวเลข,ช่องว่าง , -, +, _, [ และ ]',
	'USERNAME_CHARS'			=> 'จำกัดจำนวนตัวอักษรของชื่อผู้ใช้',
	'USERNAME_CHARS_ANY'		=> 'ตัวอักษรใดก็ได้',
	'USERNAME_CHARS_EXPLAIN'	=> 'การกำหนดตัวอักษรที่ให้ใช้ได้ในชื่อผู้ใช้',
	'USERNAME_LENGTH'			=> 'ความยาวชื่อผู้ใช้',
	'USERNAME_LENGTH_EXPLAIN'	=> 'จำนวนต่ำสุดและสูงสุดของตัวอักษรในชื่อผู้ใช้',
));

// Feeds
$lang = array_merge($lang, array(
	'ACP_FEED_MANAGEMENT'				=> 'ตั้งค่า Feeds ',
	'ACP_FEED_MANAGEMENT_EXPLAIN'		=> 'โมดูลนี้ใช้สำหรับสร้าง ATOM Feeds, เป็นการแยก BBCode ในโพสออกเพื่อให้อ่านได้จากเว็บอื่น..',

	'ACP_FEED_GENERAL'					=> 'ตั้งค่า Feeds',
	'ACP_FEED_POST_BASED'				=> 'การตั้งค่า Post-based feed',
	'ACP_FEED_TOPIC_BASED'				=> 'การตั้งค่า Topic-based feed',
	'ACP_FEED_SETTINGS_OTHER'			=> 'การตั้งค่า feeds อื่นๆ',

	'ACP_FEED_ENABLE'					=> 'เปิดใช้งาน feeds',
	'ACP_FEED_ENABLE_EXPLAIN'			=> 'เปิดหรือปิดใช้งาน ATOM feeds ทั้งเว็บบอร์ด.<br />ถ้าตั้งค่าเป็น <strong>ไม่ทำงาน</strong> เป็นการปิด Feeds ทั้งหมด, ไม่ว่าตัวเลือกด้านล่าจะถูกตั้งค่าเป็นอะไรก็ตาม..',
	'ACP_FEED_LIMIT'					=> 'จำนวนรายการ',
	'ACP_FEED_LIMIT_EXPLAIN'			=> 'จำนวนสูงสุดที่กำหนดให้รายการใน feed .',

	'ACP_FEED_OVERALL'					=> 'เปิดใช้ feed ทั่วทั้งบอร์ด',
	'ACP_FEED_OVERALL_EXPLAIN'			=> 'แสดงผลโพสใหม่จากทุกเว็บบอร์ด',
	'ACP_FEED_FORUM'					=> 'เปิดใช้ feeds ต่อบอร์ด',
	'ACP_FEED_FORUM_EXPLAIN'			=> 'แสดงผลโพสใหม่จากบอร์ดเดี่ยวและบอร์ดย่อยภายในนั้น.',
	'ACP_FEED_TOPIC'					=> 'เปิดใช้ feeds ต่อกระทู้',
	'ACP_FEED_TOPIC_EXPLAIN'			=> 'แสดงผลกระทู้เดี่ยวและโพสใหม่',

	'ACP_FEED_TOPICS_NEW'				=> 'เปิดใช้ feed กระทู้ใหม่',
	'ACP_FEED_TOPICS_NEW_EXPLAIN'		=> 'เปิดใช้งาน feed “กระทู้ใหม่” ซึ่งจะแสดงกระทู้ล่าสุดที่ถูกสร้างรวมถึงโพสแรก.',
	'ACP_FEED_TOPICS_ACTIVE'			=> 'เปิดใช้ feed กระทู้ที่มีการเคลื่อนไหว',
	'ACP_FEED_TOPICS_ACTIVE_EXPLAIN'	=> 'เปิดใช้งาน feed “กระทู้ที่มีการเคลื่อนไหว” ซึ่งจะแสดงกระทู้ล่าสุดที่มีการใช้งานรวมถึงโพสล่าสุด.',
	'ACP_FEED_NEWS'						=> 'News feed',
	'ACP_FEED_NEWS_EXPLAIN'				=> 'ดึงข้อมูลจากโพสแรกของบอร์ดเหล่านี้ ไม่เลือกเลยเพื่อปิดการทำงานของฟังชั่นนี้.<br />เลือกหลายๆบอร์ดโดยการกดปุ่ม <samp>CTRL</samp> ค้างและคลิกบอร์ดที่ต้องการ.',

	'ACP_FEED_OVERALL_FORUMS'			=> 'เปิดใช้ forums feed',
	'ACP_FEED_OVERALL_FORUMS_EXPLAIN'	=> 'เปิดใช้งาน “All forums” feed, ซึ่งจะแสดงรายการจำแนกของบอร์ด.',

	'ACP_FEED_HTTP_AUTH'				=> 'อนุญาต HTTP Authentication',
	'ACP_FEED_HTTP_AUTH_EXPLAIN'		=> 'เปิดใช้งาน HTTP authentication, ซึ่งอนุญาตให้ผู้ใช้รับข้อมูลที่ถูกซ่อนจาก guest users โดยการเพิ่ม parameter <samp>auth=http</samp> ไปยัง feed URL. หมายเหตุ: การตั้งค่า PHP บางส่วนจำเป็นต้องมีการแก้ไขเพิ่มเติมไฟล์ .htaccess คำแนะนำสามารถหาได้จากไฟล์นั้น.',
	'ACP_FEED_ITEM_STATISTICS'			=> 'รายการสถิติ',
	'ACP_FEED_ITEM_STATISTICS_EXPLAIN'	=> 'แสดงสถิติต่างๆถายใต้รายการ feed แต่ละรายการ<br />(เช่น. โพสโดย, วันและเวลา, ตอบกลับ, จำนวนที่เปิดดู)',
	'ACP_FEED_EXCLUDE_ID'				=> 'ไม่รวมบอร์ดนี้',
	'ACP_FEED_EXCLUDE_ID_EXPLAIN'		=> 'เนื้อหาจากบอร์ดนี้ <strong>จะไม่ถูกรวมอยู่ใน feeds</strong>. ไม่เลือกอะไรเลยเพื่อดึงข้อมูลจากทุกบอร์ดสำหรับ feeds.<br />เลือกหรือยกเลิกการเลือกหลายๆบอร์ดพร้อมกันให้กด<samp>CTRL</samp>ค้างไว้แล้วคลิกบอร์ดที่ต้องการ.',	
));


// Visual Confirmation Settings
$lang = array_merge($lang, array(
	'ACP_VC_SETTINGS_EXPLAIN'				=> 'ส่วนนี้คุณสามารถเลือกและกำหนดค่าส่วนเสริมของ captcha ซึ่งใช้วิธีการต่างๆ เพื่อป้องกัน spambots',
	'AVAILABLE_CAPTCHAS'					=> 'ส่วนเสริมที่สามารถเลือกได้',
	'CAPTCHA_UNAVAILABLE'					=> 'CAPTCHA ไม่สามารถเลือกตามความต้องการได้.',
	'CAPTCHA_GD'							=> 'GD CAPTCHA',
	'CAPTCHA_GD_3D'							=> 'GD 3D Captcha',
	
	'CAPTCHA_GD_FOREGROUND_NOISE'			=> 'ใส่เส้นรบกวนขั้นสูง',
	'CAPTCHA_GD_EXPLAIN'					=> 'ใช้ GD สร้าง CAPTCHA ขั้นสูง.',
	'CAPTCHA_GD_FOREGROUND_NOISE_EXPLAIN'	=> 'ใช้การใส่เส้นรบกวนในการสร้าง CAPTCHA .',
	'CAPTCHA_GD_X_GRID'						=> 'เส้นรบกวนพื้นหลังตามแกน X',
	'CAPTCHA_GD_X_GRID_EXPLAIN'				=> 'การตั้งค่าที่ต่ำเพื่อให้ CAPTCHA มีเส้นระบกวนน้อย. ตั้งค่าเป็น 0 เืพื่อปิดเส้นรบกวนในแนวแกน X.',
	'CAPTCHA_GD_Y_GRID'						=> 'เส้นระบบกวนพื้นหลังตามแกน Y',
	'CAPTCHA_GD_Y_GRID_EXPLAIN'				=> 'การตั้งค่าที่ต่ำเพื่อให้ CAPTCHA มีเส้นระบกวนน้อย.ตั้งค่าเป็น 0 เืพื่อปิดเส้นรบกวนในแนวแกน Y.',
	'CAPTCHA_GD_WAVE'						=> 'คลื่นรบกวน',
	'CAPTCHA_GD_WAVE_EXPLAIN'				=> 'ใช้เพื่อใส่รูปคลื่นรบกวนลงไปในภาพ.',
	'CAPTCHA_GD_3D_NOISE'					=> 'เพิ่มการรบกวนด้วย รูปแบบ 3D',
	'CAPTCHA_GD_3D_NOISE_EXPLAIN'			=> 'เพิ่มรูปวัตถุลงในภาพ, บนตัวอัีกษร..',
	'CAPTCHA_GD_FONTS'						=> 'ใช้แบบอักษรที่แตกต่างกัน',
	'CAPTCHA_GD_FONTS_EXPLAIN'				=> 'การ ตั้งค่านี้จะควบคุมวิธีที่แตกต่างกันหลายแบบ. คุณสามารถใช้ค่าเริ่มต้นเพียงรูปแบบมาตรฐานหรือแก้ไขตัวอักษร. เพิ่มอักษรตัวพิมพ์เล็กก็ได.',
	'CAPTCHA_FONT_DEFAULT'					=> 'ใช้แบบอักษรมาตรฐาน',
	'CAPTCHA_FONT_NEW'						=> 'ใช้แบบอักษรรูปแบบใหม่',
	'CAPTCHA_FONT_LOWER'					=> 'ใช้แบบอักษรตัวเล็ก',
	'CAPTCHA_NO_GD'							=> 'ภาพอย่างง่าย',
	'CAPTCHA_PREVIEW_MSG'			=> 'การเปลี่ยนแปลงของการตั้งค่ายังไม่ได้บันทึก. นี่เป็นเพียงตัวอย่าง.',
	'CAPTCHA_PREVIEW_EXPLAIN'	=> 'ปลั๊กอินที่ใช้จะเหมือนกับที่เลือกอยู่ตอนนี้.',

	'CAPTCHA_SELECT'						=> 'ที่ติดตั้ง',
	'CAPTCHA_SELECT_EXPLAIN'				=> 'ในลิสเป็นปลั๊กอินที่ได้รับการยอมรับในการใช้งาน. รายการที่เป็นสีเทาไม่สามารถเลือกใช้งานได้จำเป็นต้องตั้งค่ามันก่อนเลือกใช้งาน.',
	'CAPTCHA_CONFIGURE'						=> 'กำหนดค่าปลั๊กอิน',
	'CAPTCHA_CONFIGURE_EXPLAIN'				=> 'เปลี่ยนการตั้งค่าปลั๊กอินที่เลือกไว้.',
	'CONFIGURE'								=> 'การกำหนดค่า',
	'CAPTCHA_NO_OPTIONS'					=> 'ปลั๊กอินนี้ไม่จำเป็นต้องกำหนดค่าใดๆ.',

	'VISUAL_CONFIRM_POST'					=> 'เปิดใช้ภาพยืนยันการโพสต์ สำหรับบุคคลทั่วไป ',
	'VISUAL_CONFIRM_POST_EXPLAIN'			=> 'บุคคลทั่วไปจำเป็นต้องกรอกข้อความที่ถูกต้อง ตามภาพที่เห็นก่อนการโพสต์.',
	'VISUAL_CONFIRM_REG'					=> 'ใช้การยืนยันภาพสำหรับการสมัครสมาชิก',
	'VISUAL_CONFIRM_REG_EXPLAIN'			=> 'บุคคลทั่วไปจำเป็นต้องกรอกข้อความที่ถูกต้อง ตามภาพที่เห็นในระหว่างการสมัครสมาชิก.',
	'VISUAL_CONFIRM_REFRESH'				=> 'อนุญาติให้ผู้ใช้เป็นผู้เลือกดูค่าใหม่',
	'VISUAL_CONFIRM_REFRESH_EXPLAIN'		=> 'อนุญาติให้ผู้ใช้เป็นผู้เลือกดูค่าใหม่ถ้าเขาไม่สามารถอ่านค่าที่เห็นอยู่ได้้. บางปลั๊กอินจะไม่มีตัวเลือกตรงนี้.',

));

// Cookie Settings
$lang = array_merge($lang, array(
	'ACP_COOKIE_SETTINGS_EXPLAIN'		=> 'รายละเอียดเหล่านี้ กำหนดข้อมูลที่ใช้ส่งคุกกี้ไปให้ผู้ใช้ โดยปกติ ค่าเริ่มต้นควรจะใช้ได้ดีอยู่แล้ว  หากคุณต้องการเปลี่ยนค่าใดๆก็ตาม ควรทำด้วยความระมัดระวัง ค่าที่ไม่ถูกต้องสามารถทำให้ผู้ใช้ไม่สามารถล็อกอินได้',

	'COOKIE_DOMAIN'				=> 'โดเมนของ Cookie',
	'COOKIE_NAME'				=> 'ชื่อของ Cookie',
	'COOKIE_PATH'				=> 'พาร์ทของ Cookie',
	'COOKIE_SECURE'				=> 'เข้ารหัส Cookie',
	'COOKIE_SECURE_EXPLAIN'		=> 'ถ้าเซิร์ฟเวอร์รันผ่าน SSL ตั้งค่านี้ให้ เปิดใช้งาน ถ้าหากไม่ใช่ให้ตั้ง ไม่ทำงาน การตั้งค่านี้ให้ เปิดใช้งาน แต่ไม่ได้รันผ่าน SSL จะทำให้เซิร์ฟเวอร์ทำงานผิดพลาดขณะ Redirect',
	'ONLINE_LENGTH'				=> 'ดูช่วงเวลาออนไลน์',
	'ONLINE_LENGTH_EXPLAIN'		=> 'จำนวนนาทีที่ผู้ใช้ที่ไม่แอคทีฟ จะไม่ปรากฎในรายการ “ผู้ใช้งานขณะนี้” ค่าที่สูงยิ่งต้องการการประมวลผลมากขึ้นในการสร้างรายการ',
	'SESSION_LENGTH'			=> 'อายุ Session',
	'SESSION_LENGTH_EXPLAIN'	=> 'Sessions จะหมดอายุหลังจากเวลานี้,ในหน่วยวินาที',
));

// Load Settings
$lang = array_merge($lang, array(
	'ACP_LOAD_SETTINGS_EXPLAIN'	=> 'คุณสามารถเลือกใช้หรือไม่ใช้บางหน้าที่ของบอร์ด เพื่อลดการประมวลผลได้ ในเซิร์ฟเวอร์ทั่วไป ไม่มีความจำเป็นที่ต้องยกเลิกหน้าที่เหล่านี้ อย่างไรก็ตาม ก็สามารถทำได้หากมีความจำเป็น คุณสามารถจำกัดโหลดและ session ที่แอคทีฟ ก่อนที่บอร์ดจะออฟไลน์',

	'CUSTOM_PROFILE_FIELDS'			=> 'Custom profile fields',
	'LIMIT_LOAD'					=> 'จำกัดโหลดของระบบ',
	'LIMIT_LOAD_EXPLAIN'			=> 'ถ้าโหลดของระบบ ภายใน 1 นาที เกินค่าเฉลี่ย บอร์ดจะออฟไลน์  ค่า 1.0 เท่ากับ ~100% ของหนึ่งโปรเซสเซอร์ หน้าที่นี้ใช้ได้บน UNIX เซิร์ฟเวอร์  ค่านี้จะตั้งค่าตัวเองเป็น 0 ถ้า  phpBB ไม่สามารถตรวจสอบค่าโหลด',
	'LIMIT_SESSIONS'				=> 'จำกัด sessions',
	'LIMIT_SESSIONS_EXPLAIN'		=> 'ถ้า sessions ของระบบภายใน 1 นาที เกินกว่าค่านี้ บอร์ดจะออฟไลน์ ตั้งค่าเป็น 0 เพื่อไม่จำกัด sessions',
	'LOAD_CPF_MEMBERLIST'			=> 'อนุญาติ styles สำหรับโปรไฟล์ ที่กำหนดเองใน memberlist',
	'LOAD_CPF_VIEWPROFILE'			=> 'แสดง custom profile fields ใน user profiles',
	'LOAD_CPF_VIEWTOPIC'			=> 'แสดงข้อมูลที่กำหนดเองบนหน้ากระทู้',
	'LOAD_USER_ACTIVITY'			=> 'แสดงการใช้งานของผู้ใช้',
	'LOAD_USER_ACTIVITY_EXPLAIN'	=> 'แสดงแอคทีฟ topic/forum ใน profiles ของผู้ใช้และ แป้นควบคุมผู้ใช้ ค่านี้แนะนำให้เลิกใช้ในบอร์ดที่มีโพสต์มากกว่าหนึ่งล้าน',
	'RECOMPILE_STYLES'				=> 'Recompile stale style components',
	'RECOMPILE_STYLES_EXPLAIN'		=> 'ตรวจสอบอัพเดทส่วนประกอบของรูปแบบบนระบบไฟล์และคอมไพล์ใหม่',
	'YES_ANON_READ_MARKING'			=> 'อนุญาตให้แขกทำสัญลักษณ์ในกระทู้',
	'YES_ANON_READ_MARKING_EXPLAIN'	=> 'เก็บข้อมูลสถานะ read/unread สำหรับแขก ถ้ายกเลิกค่านี้ แขกจะอ่านโพสต์ได้อย่างเดียว',
	'YES_ANON_READ_MARKING_EXPLAIN'	=> 'เก็บสถานะการอ่านแล้ว/ยังไม่ได้อ่านสำหรับบุคคลทั่วไป. ถ้าปิดไว้, โพสต์ทั้งหมดจะมีสถานะเป็นอ่านแล้วเสมอสำหรับบุคคลทั่วไป.',
	
	'YES_BIRTHDAYS'					=> 'อนุญาตรายการวันเกิด',
	'YES_BIRTHDAYS_EXPLAIN'			=> 'ถ้าไม่ใช้ค่านี้ รายการวันเกิดจะไม่สามารถแสดงได้ ถ้าหากต้องการให้การตั้งค่านี้มีผลกับวันเกิด ต้องทำการอนุญาต',
	'YES_JUMPBOX'					=> 'อนุญาตการแสดง jumpbox',
	'YES_MODERATORS'				=> 'อนุญาต moderators',
	'YES_ONLINE'					=> 'อนุญาตรายการผู้ใช้ออนไลน์',
	'YES_ONLINE_EXPLAIN'			=> 'แสดงข้อมูลผู้ใช้ออนไลน์บนดัชนี, forum และหน้ากระทู้',
	'YES_ONLINE_GUESTS'				=> 'อนุญาตรายการ guest ออนไลน์',
	'YES_ONLINE_GUESTS_EXPLAIN'		=> 'อนุญาตให้แสดงรายการ guest ออนไลน์',
	'YES_ONLINE_TRACK'				=> 'อนุญาตการแสดงข้อมูลผู้ใช้ ออนไลน์/ออฟไลน์',
	'YES_ONLINE_TRACK_EXPLAIN'		=> 'แสดงข้อมูลผู้ใช้ ออนไลน์/ออฟไลน์ สำหรับ profiles ผู้ใช้และหน้ากระทู้',
	'YES_POST_MARKING'				=> 'เปิดใช้ dotted topics',
	'YES_POST_MARKING_EXPLAIN'		=> 'บ่งชี้ว่าผู้ใช้ได้ทำการโพสต์ในกระทู้แล้วหรือยัง',
	'YES_READ_MARKING'				=> 'เปิดใช้ เซิร์ฟเวอร์-side topic marking',
	'YES_READ_MARKING_EXPLAIN'		=> 'เก็บสถานะอ่านแล้ว/ยังไม่ได้อ่าน ในฐานข้อมูลแทนการใช้คุกกี้',
	'YES_UNREAD_SEARCH'				=> 'ให้คนหาโพสต์ที่ยังไม่ได้อ่าน',
));

// Auth settings
$lang = array_merge($lang, array(
	'ACP_AUTH_SETTINGS_EXPLAIN'	=> 'phpBB รองรับ authentication plug-ins, หรือโมดูล ค่าการอนุญาตเหล่านี้กำหนดว่าผู้ใช้จะทำการ authenticated อย่างไร เมื่อพวกเข้าลอกอินเข้าสู่บอร์ด โดยปกติ มี 3 วิธีที่มีไว้ให้ ได้แก่ DB, LDAP และ Apache มีบางวิธีเท่านั้นที่ต้องการข้อมูลเพิ่มเติม ถ้าหากวิธีที่เลือกต้องการข้อมูลเพิ่มเติม ให้กรอกข้อมูลเพิ่มเติมนั้นด้วย',

	'AUTH_METHOD'				=> 'เลือกวิธีการยืนยันตัวตน',

	'APACHE_SETUP_BEFORE_USE'	=> 'คุณต้องตั้งค่า apache authentication ก่อนที่คุณ สลับไปใช้ phpBB จำไว้ว่าชื่อผู้ใช้ที่คุณใช้สำหรับ apache authentication ต้องเป็นอย่างเดียวกันกับ phpBB  Apache authentication สามารถใช้กับ mod_php (ไม่ใช้กับด้วยCGI version) และไม่ใช้ safe_mode ',

	'LDAP_DN'						=> 'LDAP base <var>dn</var>',
	'LDAP_DN_EXPLAIN'				=> 'ชื่อพิเศษ, ใช้สำหรับระบุข้อมูลผู้ใช้, ตัวอย่างเช่น <samp>o=My Company,c=US</samp>.',
	'LDAP_EMAIL'					=> 'LDAP e-mail attribute',
	'LDAP_EMAIL_EXPLAIN'			=> 'ตั้งค่านี้ให้กับชื่อผู้ใช้ ในส่วน อีเมล (ถ้ามี) เพื่อที่จะตั้งค่า อีเมล ให้อัตโนมัติสำหรับผู้ใช้ใหม่ ปล่อยให้ค่านี้ว่าง ทำให้ส่วน อีเมล ของผู้ใช้ที่ล็อกอินครั้งแรกว่างด้วย',
	'LDAP_INCORRECT_USER_PASSWORD'	=> 'ล้มเหลวในการผูกกับ LDAP เซิร์ฟเวอร์ ด้วย user/password ที่ระบุ',
	'LDAP_NO_EMAIL'					=> 'อีเมล ที่ระบุไม่มีอยู่จริง.',
	'LDAP_NO_IDENTITY'				=> 'หาล็อกอินสำหรับ %s ไม่เจอ',
	'LDAP_PASSWORD'					=> 'รหัสผ่าน LDAP ',
	'LDAP_PASSWORD_EXPLAIN'			=> 'ปล่อยค่านี้ให้ว่างเพื่อผูกแบบไม่กำหนดผู้ใช้หรือไม่ก็กรอก password สำหรับผู้ใช้ด้านบน ต้องการสำหรับแอคทีฟไดเรกทอรี่เซิร์ฟเวอร์ <strong>คำเตือน:</strong> password นี้จะเก็บเป็นข้อความธรรมดาใน ฐานข้อมูล ทุกคนที่เข้าถึงฐานข้อมูลได้ สามารถมองเห็นได้',
	'LDAP_PASSWORD_EXPLAIN'			=> 'ปล่อยว่างไว้เพื่อใช้งานโดยไม่กำหนดผู้ใช้. กรอกรหัสสำหรับชื่อผู้ใช้ด้านบน. จำเป็นสำหรับ Active Directory Servers.<br /><em><strong>คำเตือน:</strong>รหัสผ่านจะถูกเก็บเป็นข้อความธรรมดาลงในฐานข้อมูล.</em>',
	
	'LDAP_PORT'						=> 'พอร์ทของ LDAP เซิร์ฟเวอร์',
	'LDAP_PORT_EXPLAIN'				=> 'คุณสามารถระบุพอร์ตที่ใช้เพื่อติดต่อกับ LDAP เซิร์ฟเวอร์ แทนที่จะใช้พอร์ตเริ่มต้น 389',
	'LDAP_SERVER'					=> 'LDAP เซิร์ฟเวอร์ name',
	'LDAP_SERVER_EXPLAIN'			=> 'ถ้ากำลังใช้ LDAP นี่คือ hostname หรือ IP address ของ LDAP เซิร์ฟเวอร์ คุณสามารถระบุ URL เช่น ldap://hostname:port/',
	'LDAP_UID'						=> 'LDAP <var>uid</var>',
	'LDAP_UID_EXPLAIN'				=> 'คีย์ที่ใช้ในการระบุเอกลักษณ์การล็อคอิน, ตัวอย่างเช่น <var>uid</var>, <var>sn</var>, etc.',
	'LDAP_USER'						=> 'ผู้ใช้ LDAP<var>dn</var>',
	'LDAP_USER_EXPLAIN'				=> 'ปล่อยว่างไว้เพื่อใช้ anonymous binding. ถ้าหากใส่ การใช้งาน phpBB ต้องใช้ชื่อที่ระบุพิเศษในการล็อคอินเพื่อที่จะหาผู้ใช้ที่ถูกต้อง, ตัวอย่างเช่น <samp>uid=Username,ou=MyUnit,o=MyCompany,c=US</samp>. Required for Active Directory Servers.',
	'LDAP_USER_FILTER'				=> 'การกรองผู้ใช้ LDAP',
	'LDAP_USER_FILTER_EXPLAIN'		=> '(ตัวเลือก) คุณสามารถจำกัดข้อมูลที่ถูกค้นหาด้วยตัวกรองเพิ่มเติม. ตัวอย่าง <samp>objectClass=posixGroup</samp> จะให้ผลลัพธ์ในการใช้ของ <samp>(&(uid=$username)(objectClass=posixGroup))</samp>',
));

// Server Settings
$lang = array_merge($lang, array(
	'ACP_SERVER_SETTINGS_EXPLAIN'	=> 'คุณกำหนดการตั้งค่าที่ขึ้นต่อกันระหว่างเซิร์ฟเวอร์และโดเมน โปรดตรวจสอบให้แน่ใจว่าทุกอย่างถูกต้อง ความผิดพลาดจะทำให้ อีเมล มีข้อมูลที่ผิด เมื่อกรอกโดเมน ต้องมี http:// หรือ โปรโตคอลอื่น คุณควรแก้ไขพอร์ตก็ต่อเมื่อคุณทราบว่าเซิร์ฟเวอร์ของคุณใช้พอร์ตอื่น พอร์ต 80 เป็นค่าเริ่มต้นอยู่แล้ว',

	'ENABLE_GZIP'				=> 'เปิดการบีบอีด GZip',
/*	
	'ENABLE_GZIP_EXPLAIN'		=> 'เนื้อหาที่สร้างขึ้นจะถูกบีบอัด ก่อนที่จะส่งให้ผู้ใช้ ทำให้สามารถลดการจราจรในเครือข่ายแต่จะทำให้มีการใช้ CPU มากขึ้น ทั้งที่ฝั่งเซิร์ฟเวอร์และฝั่งลูกข่าย',
*/
	'ENABLE_GZIP_EXPLAIN'		=> 'ข้อมูลที่จะส่งให้ผู้ใช้จะถูกบีีบอีด. เพื่อลดปริมาณการส่งข้อมูลผ่านเครือข่ายแต่จะทำให้ทั้ง เซิร์ฟเวอร์ และเครื่องลูกข่ายให้งาน CPU มากขึ้น. จำเป็นต้องใช้ zlib PHP extension เพื่อใช้งานความสามารถส่วนี้.',
	
	'FORCE_SERVER_VARS'			=> 'บังคับให้เซิร์ฟเวอร์กำหนดURL',
	'FORCE_SERVER_VARS_EXPLAIN'	=> 'ถ้าตั้งค่าเป็นใช่ จะ้เป็นการกำหนดค่าโดยเซิร์ฟเวอร์โดยอัตโนมัติ.',
	'ICONS_PATH'				=> 'เส้นทางเก็บไอคอนโพสต์',
	'ICONS_PATH_EXPLAIN'		=> 'เส้นทางภายใต้ราก phpBB ไดเรกทอรี่, เช่น <samp>images/icons</samp>.',
	'PATH_SETTINGS'				=> 'การตั้งค่าเส้นทาง',
	'RANKS_PATH'				=> 'จัดอันดับเส้นทางที่เก็บภาพ',
	'RANKS_PATH_EXPLAIN'		=> 'เส้นทางภายใต้ราก phpBB ไดเรกทอรี่, ตัวอย่างเช่น <samp>images/ranks</samp>.',
	'SCRIPT_PATH'				=> 'ตำแหน่งที่เก็บโค้ด phpbb',
	'SCRIPT_PATH_EXPLAIN'		=> 'เส้นทางที่ phpBB ใช้เพื่อระบุความสัมพันธ์ในโดเมน, ตัวอย่างเช่น <samp>/phpBB3</samp>.',
	'SERVER_NAME'				=> 'ชื่อโดเมน',
	'SERVER_NAME_EXPLAIN'		=> 'ชื่อโดเมนที่บอร์ดใช้ (ตัวอย่าง: <samp>www.phpbbthailand.com</samp>).',
	'SERVER_PORT'				=> 'พอร์ตของเซิร์ฟเวอร์',
	'SERVER_PORT_EXPLAIN'		=> 'พอร์ตที่ใช้บนเซิร์ฟเวอร์, โดยทั่วไปเป็นค่า 80, เปลี่ยนเมื่อจำเป็นเท่านั้น',
	'SERVER_PROTOCOL'			=> 'โปรโตคอลของเซิร์ฟเวอร์',
	'SERVER_PROTOCOL_EXPLAIN'	=> 'นี้คือค่าที่เซิร์ฟเวอร์จะเลือกใช้  ในกรณีที่ปล่อยว่างหรือโปรโตคอลไม่ถูกบังคับโดยคุกกี้(<samp>http://</samp> or <samp>https://</samp>).',
	'SERVER_URL_SETTINGS'		=> 'ตั้งค่า URL ของ Server',
	'SMILIES_PATH'				=> 'ตำแหน่งที่เก็บ Smilies',
	'SMILIES_PATH_EXPLAIN'		=> 'เส้นทางภายใต้รูทของ phpBB ไดเรกทอรี่, ตัวอย่างเช่น <samp>images/smilies</samp>.',
	'UPLOAD_ICONS_PATH'			=> 'ตำแหน่งที่เก็บ ไอคอนของ Extension group',
	'UPLOAD_ICONS_PATH_EXPLAIN'	=> 'เส้นทางภายใต้ราก phpBB ไดเรกทอรี่, ตัวอย่างเช่น <samp>images/upload_icons</samp>.',
));

// Security Settings
$lang = array_merge($lang, array(
	'ACP_SECURITY_SETTINGS_EXPLAIN'		=> 'คุณสามารถกำหนด session และการตั้งค่าล็อกอิน',

	'ALL'							=> 'ทั้งหมด',
	'ALLOW_AUTOLOGIN'				=> 'อนุญาตการล็อกอินแบบอัตโนมัติ',
	'ALLOW_AUTOLOGIN_EXPLAIN'		=> 'กำหนดว่าผู้ใช้สามารถล็อกอินแบบอัตโนมัติ เมื่อเข้าเยี่ยมชมบอร์ดได้หรือไม่',
	'AUTOLOGIN_LENGTH'				=> 'จำนวนวันที่ล็อกอินคีย์หมดอายุ',
	'AUTOLOGIN_LENGTH_EXPLAIN'		=> 'จำนวนวันที่ล็อกอินคีย์หมดอายุ ใส่ค่า 0 เพื่อยกเลิกการล็อกอินอัตโนมัติ',
	'BROWSER_VALID'					=> 'ตรวจสอบเบราเซอร์',
	'BROWSER_VALID_EXPLAIN'			=> 'ตั้งค่าให้มีการทำ browser validation สำหรับแต่ละ session เพื่อปรับปรุงความปลอดภัย',
	'CHECK_DNSBL'					=> 'ตรวจสอบ IP กับ รายการของ DNS',
	'CHECK_DNSBL_EXPLAIN'			=> 'ถ้าเลือกใช้ IP address ของผู้ใช้จะถูกตรวจสอบกับ DNSBL ดังข้างล่างนี้: <a href="http://spamcop.net">spamcop.net</a>, <a href="http://dsbl.org">dsbl.org</a> and <a href="http://www.spamhaus.org">www.spamhaus.org</a>. การตรวจสอบอาจใช้เวลา, ขึ้นอยู่กับการตั้งค่าของเซิร์ฟเวอร์. หากการทำงานล่าช้าหรือมีการรายงานที่ผิดพลาด ควรปิดการทำงานของฟังชั่นนี้',
	'CLASS_B'						=> 'A.B',
	'CLASS_C'						=> 'A.B.C',
	'EMAIL_CHECK_MX'				=> 'ตรวจสอบ โดเมนของอีเมล เพื่อความถูกต้องของ MX record',
	'EMAIL_CHECK_MX_EXPLAIN'		=> 'ถ้าเปิด, โดเมนของชื่ออีเมลที่ระบุึไว้จะได้รับการตรวจสบอว่ามีโดเมนอยู่จริงหรือไม่',
	'FORCE_PASS_CHANGE'				=> 'บังคับเปลี่ยนรหัสผ่าน ',
	'FORCE_PASS_CHANGE_EXPLAIN'		=> 'บังคับให้ผู้ใช้เปลี่ยนรหัสผ่าน หลังจากตั้งค่า จำนวนวัน ตั้งค่าเป็น 0 เพื่อไม่ใช้พฤติกรรมนี้',
	'FORM_TIME_MAX'					=> 'เวลาสูงสุดที่ส่งค่าจากฟอร์ม',
	'FORM_TIME_MAX_EXPLAIN'			=> 'เวลาสูงสุดที่ส่งฟอร์ม ใช้ -1 เพื่อยกเลิกพฤติกรรมนี้ โปรดทราบว่า ฟอร์มอาจจะไม่ถูกต้องถ้า session หมดอายุ โดยที่ไม่เกี่ยวกับค่านี้',
	'FORM_SID_GUESTS'				=> 'ผูกค่าฟอร์มกับ guest sessions',
	'FORM_SID_GUESTS_EXPLAIN'		=> 'ถ้าหากเปิดใช้, ค่าของฟอร์มสำหรับแขกผู้เข้าชมเว็บจะถูก session เฉพาะ. อาจมีปัญหาสำหรับบาง ISP.',
	
	
	'FORWARDED_FOR_VALID'			=> 'การตรวจสอบ <var>X_FORWARDED_FOR</var> header',
	'FORWARDED_FOR_VALID_EXPLAIN'	=> 'Sessions จะถูกดำเนินการต่อ ถ้าหากค่า <var>X_FORWARDED_FOR</var> header ที่ถูกส่งเท่ากับค่าครั้งก่อน. การแบนจะถูกตรวจสอบเทียบกับ IPs ใน <var>X_FORWARDED_FOR</var> เช่นกัน.',
	'IP_VALID'						=> 'การตรวจสอบ IP Session',
	'IP_VALID_EXPLAIN'				=> 'กำหนดส่วนประกอบการตรวจสอบ session ของไอพีผู้ใช้; <samp>ทั้งหมด</samp> เปรียบเทียบที่อยู่ไอพีทั้งชุด, <samp>A.B.C</samp> x.x.x 3 ชุดแรก, <samp>A.B</samp> x.x สองชุดแรก, <samp>ไม่มี</samp> ปิดการตรวจสอบ. ในรูปแบบของที่อยู่ IPv6 <samp>A.B.C</samp> เปรียบเทียบ 4 ชุดแรก และ <samp>A.B</samp> สำหรับ 3 ชุดแรก.',
	'IP_LOGIN_LIMIT_MAX'			=> 'จำกัดจำนวนครั้งล็อคอินต่อหนึ่งไอพี ในกรณีที่การล็อคอินไม่ถูกต้อง',
	'IP_LOGIN_LIMIT_MAX_EXPLAIN'	=> 'จำนวนครั้งที่อนุญาตให้ล็อคอินต่อหนึ่งไอพี ก่อนที่ระบบป้องกันสแปมจะทำงาน ใส่ 0 เพื่อปิดระบบป้องกันสแปม.',
	'IP_LOGIN_LIMIT_TIME'			=> 'ตั้งเวลาล็อคไอพีไม่ให้ทำการล็อคอิน หลังจากล็อคอินล้มเเหลว',
	'IP_LOGIN_LIMIT_TIME_EXPLAIN'	=> 'การล็อคจะสิ้นสุดลงหลังจากระยะเวลานี้',
	'IP_LOGIN_LIMIT_USE_FORWARDED'	=> 'จำกัดจำนวนการล็อคอินโดย <var>X_FORWARDED_FOR</var> header',
	'IP_LOGIN_LIMIT_USE_FORWARDED_EXPLAIN'	=> 'แทนที่จะจำกัดจำนวนครั้งของการล็อคอินที่ผิดพลาดโดย IP address ผู้ใช้จะถูกจำกัดโดยค่า <var>X_FORWARDED_FOR</var> <br /><em><strong>คำเตือน:</strong> เปิดใช้งานฟังชั่นนี้ต่อเมื่อคุณใช้งาน proxy server ที่ตั้งค่าให้ <var>X_FORWARDED_FOR</var> เป็นค่าที่น่าเชื่อถือ.</em>',
	'MAX_LOGIN_ATTEMPTS'			=> 'จำนวนครั้งที่อนุญาตให้ล็อคอินต่อหนึ่งไอดีผู้ใช้ ในกรณีที่การล็อคอินไม่ถูกต้อง',
	'MAX_LOGIN_ATTEMPTS_EXPLAIN'	=> 'จำนวนครั้งที่อนุญาตให้ล็อคอินต่อหนึ่งไอดีผู้ใช้ ก่อนที่ระบบป้องกันสแปมจะทำงาน ใส่ 0 เพื่อปิดระบบป้องกันสแปม.',
	
	
	'NO_IP_VALIDATION'				=> 'ไม่มี',
	'NO_REF_VALIDATION'				=> 'ไม่กำหนด',	
	'PASSWORD_TYPE'					=> 'ความซับซ้อนของรหัส',
	'PASSWORD_TYPE_EXPLAIN'			=> 'กำหนดความซับซ้อนของรหัส',
	'PASS_TYPE_ALPHA'				=> 'ต้องประกอบด้วย ตัวอักษรและตัวเลข',
	'PASS_TYPE_ANY'					=> 'ไม่มีเงื่อนไข',
	'PASS_TYPE_CASE'				=> 'ต้องมีอักษรตัวเล็กปนตัวใหญ่',
	'PASS_TYPE_SYMBOL'				=> 'ต้องมีสัญลักษณ์อื่นๆอยู่ด้วย',
	'REF_HOST'						=> 'ตรวจสอบเฉพาะโฮสต์',
	'REF_PATH'						=> 'ตรวจสอบพาร์ทด้วย',
	'REFERER_VALID'					=> 'ตรวจสอบความถูกต้องของแหล่งที่มา',
	'REFERER_VALID_EXPLAIN'			=> 'ถ้าเปิดใช้งาน จะตรวจสอบแหล่งที่มา สำหรับการส่งค่าโพสต์เข้ามาจะถูกตรวจสอบโฮส /พาท์ตามการตั้งค่า การตั้งค่านี้อาจทำให้เกิดปัญหาสำหรับบอร์ดที่ใช้หลายโดเมน หรือใช้การ login จากภายนอกบอร์ด.',
	'TPL_ALLOW_PHP'					=> 'อนุญาต php ในแม่แบบ',
	'TPL_ALLOW_PHP_EXPLAIN'			=> 'ถ้าเลือกใช้ตัวเลือกนี้ , <code>PHP</code> และ <code>INCLUDEPHP</code> โค้ดจะถูกประมวลในแม่แบบ',
));

// Email Settings
$lang = array_merge($lang, array(
	'ACP_EMAIL_SETTINGS_EXPLAIN'	=> 'ข้อมูลนี้ถูกใช้เมื่อบอร์ดส่ง อีเมล ถึงผู้ใช้ โปรดตรวจสอบให้แน่ใจว่า  อีเมล  ที่ระบุถูกต้อง, การส่งข้อความไม่ได้หรือข้อความถูกส่งกลับจะมาจากอีเมลที่ผิดพลาด. ถ้าโฮทส์ไม่มี native (PHP based) e-mail service คุณสามารถส่งข้อความโดยตรงโดยใช้ SMTP แทน การกระทำนี้ต้องการที่อยู่ของเซิร์ฟเวอร์ที่ถูกต้อง. ถ้าเซิร์ฟเวอร์ต้องการ authentication ให้กรอกชื่อผู้ใช้, password และวิธีการ authentication ด้วย',

	'ADMIN_EMAIL'					=> 'อีเมล ที่ไว้รับเมลตอบกลับ',
	'ADMIN_EMAIL_EXPLAIN'			=> 'ข้อมูลนี้จะถูกใช้เป็นที่อยู่ตอบกลับของอีเมลทุกอันและอีเมลเกี่ยวกับเทคนิค. ข้อมูลจะถูกใช้เป็น <samp>Return-Path</samp> และ <samp>Sender</samp> ที่อยู่ในอีเมล ',
	'BOARD_EMAIL_FORM'				=> 'ผู้ใช้ส่ง อีเมล ผ่านทางบอร์ด',
	'BOARD_EMAIL_FORM_EXPLAIN'		=> 'ใช้การส่ง อีเมล ผ่านทางบอร์ด แทนที่จะแสดง อีเมลของผู้ใช้ ',
	'BOARD_HIDE_EMAILS'				=> 'ซ่อนชื่ออีเมล',
	'BOARD_HIDE_EMAILS_EXPLAIN'		=> 'หน้าที่นี้ ทำให้ชื่ออีเมลมีความเป็นส่วนตัว',
	'CONTACT_EMAIL'					=> 'กรอกอีเมลของแอดมิน ',
	'CONTACT_EMAIL_EXPLAIN'			=> 'ที่อยู่นี้จะใช้เมื่อต้องการข้อมูลสำหรับการติดต่อ ข้อมูลนี้จะถูกใช้เป็น <samp>From</samp> และ <samp>Reply-To</samp> address ใน อีเมล',
	'EMAIL_FUNCTION_NAME'			=> 'ชื่อฟังก์ชั่นส่งเมล',
	'EMAIL_FUNCTION_NAME_EXPLAIN'	=> 'ใช้ฟังก์ชั่นส่งเมลของ PHP.',
	'EMAIL_PACKAGE_SIZE'			=> 'ขนาดอีเมลแพ็คเกจ',
	'EMAIL_PACKAGE_SIZE_EXPLAIN'	=> 'ข้อมูลนี้คือขนาดสูงสุดของอีเมล ที่ส่งออกในหนึ่ง package การตั้งค่านี้จะนำไปใช้กับการจัดข้อความภายใน ตั้งค่านี้เป็น 0 ถ้าหากคุณมีปัญหากับการส่ง หรือมีการแจ้งเตือนอีเมลที่ส่งไม่ได้',
	'EMAIL_SIG'						=> 'ลายเซ็นต์อีเมล',
	'EMAIL_SIG_EXPLAIN'				=> 'ข้อความนี้จะถูกส่งไปเป็นส่วนท้ายข้อความในการส่งเมลโดยเว็บบอร์ด',
	'ENABLE_EMAIL'					=> 'เปิดใช้งานการส่งเมลจากบอร์ด',

	'ENABLE_EMAIL_EXPLAIN'			=> 'ถ้าถูกปิดไว้การส่งเมลจากบอร์ดทั้งหมดจะไม่สามารถส่งได้. <em>หมายเหตุการกำนหดให้มีการยืนยันตัวตนผ่านอีเมลจำเป็นต้องเปืดส่วนนี้ให้ใช้งานได้.ถ้าหากใช้ในปัจจุบันตั้งค่าให้ยืนยันด้วย “ผู้ใช้” หรือ “แอดมิน” , การปิดใช้งานการตั้งค่านี้สมาชิกใหม่จะยืนตัวตัวตนผ่านทางอีเมลไม่ได้ .</em>',
	
	'SMTP_AUTH_METHOD'				=> 'วิธีกการตรวจสอบสำหรับ SMTP',
	'SMTP_AUTH_METHOD_EXPLAIN'		=> 'ให้ใช้เมื่อ ชื่อ ผู้ใช้/รหัสผ่าน ถูกตั้งค่าแล้ว',
	'SMTP_CRAM_MD5'					=> 'CRAM-MD5',
	'SMTP_DIGEST_MD5'				=> 'DIGEST-MD5',
	'SMTP_LOGIN'					=> 'LOGIN',
	'SMTP_PASSWORD'					=> 'รหัสของ SMTP',
	'SMTP_PASSWORD_EXPLAIN'			=> 'กรอกหรัสผ่านของ STMP server  ถ้า SMTP server ต้องการรหัสผ่าน.<br /><em><strong>เตือน:</strong>รหัสผ่านจะถูกเก็บเป็นข้อความธรรมดาไว้ในฐานข้อมูล  จะสามารถเห็นได้จากฐานข้อมูลของท่านหรือดูได้จากหน้าตั้งค่า.</em>',
	'SMTP_PLAIN'					=> 'PLAIN',
	'SMTP_POP_BEFORE_SMTP'			=> 'POP-BEFORE-SMTP',
	'SMTP_PORT'						=> 'SMTP เซิร์ฟเวอร์พอร์ต',
	'SMTP_PORT_EXPLAIN'				=> 'เปลี่ยนค่านี้เมื่อ SMTP เซิร์ฟเวอร์ใช้ค่าที่ต่างไปจากค่าเริ่มต้น',
	'SMTP_SERVER'					=> 'ที่อยู่ SMTP เซิร์ฟเวอร์',
	'SMTP_SETTINGS'					=> 'การตั้งค่า SMTP',
	'SMTP_USERNAME'					=> 'ชื่อผู้ใช้ SMTP',
	'SMTP_USERNAME_EXPLAIN'			=> 'กรอกชื่อผู้ใช้เมื่อ SMTP เซิร์ฟเวอร์ต้องการ',
	'USE_SMTP'						=> 'ใช้ SMTP เซิร์ฟเวอร์ในการส่ง อีเมล',
	'USE_SMTP_EXPLAIN'				=> 'เลือก “ใช่” ถ้าคุณต้องการจะส่ง อีเมล ผ่านทางเซิร์ฟเวอร์ที่ตั้งชื่อไว้แทนที่จะใช้ local mail',
));

// Jabber settings
$lang = array_merge($lang, array(
	'ACP_JABBER_SETTINGS_EXPLAIN'	=> 'คุณสามารถเลือกใช้และควบคุมการใช้ Jabber สำหรับ instant messaging และการแจ้งบอร์ด Jabber เป็น open source โปรโตคอลและทุกคนมีสิทธิ์ใช้ บาง Jabber เซิร์ฟเวอร์ ประกอบด้วย gateway ที่อนุญาตให้คุณติดต่อผู้ใช้ในเครือข่ายอื่น มีแค่บางเซิร์ฟเวอร์เท่านั้นที่อนุญาตการขนส่งทั้งหมด การเปลี่ยนโปรโตคอลอาจทำให้การขนส่งใช้การไม่ได้ โปรดตรวจสอบข้อมูลให้แน่ใจในการกรอกรายละเอียดบัญชีผู้ใช้ที่ลงทะเบียนแล้ว - phpBB จะใช้รายละเอียดที่คุณกรอก',

	'JAB_ENABLE'				=> 'เปิดใช้งาน Jabber',
	'JAB_ENABLE_EXPLAIN'		=> 'เปิดใช้งานการส่งข้อความและการแจ้งเตือนของ Jabber.',
	'JAB_GTALK_NOTE'			=> 'โปรดทราบ ไม่สามารถใช้ GTalk ได้ เพราะว่าไม่พบ <samp>dns_get_record</samp> ฟังก์ชัน ฟังก์ชันนี้ไม่มีใน PHP4 และไม่มีการทำบน Windows และก็ไม่สามารถใช้ได้บน BSD รวมทั้ง Mac OS',
	'JAB_PACKAGE_SIZE'			=> 'ขนาด Jabber package',
	'JAB_PACKAGE_SIZE_EXPLAIN'	=> 'ค่านี้เป็นจำนวนข้อความที่ถูกส่งไปใน 1 package ถ้าตั้งค่าเป็น 0 ข้อความจะถูกส่งทันทีโดยไม่มีการรอจัดลำดับการส่ง',
	'JAB_PASSWORD'				=> 'รหัสผ่านของ Jabber',
	'JAB_PASSWORD_EXPLAIN'		=> '<em><strong>เตือน:</strong>รหัสผ่านจะถูกเก็บเป็นข้อความธรรมดาไว้ในฐานข้อมูล  จะสามารถเห็นได้จากฐานข้อมูลของท่านหรือดูได้จากหน้าตั้งค่า.</em>',
	
	'JAB_PORT'					=> 'พอร์ต Jabber',
	'JAB_PORT_EXPLAIN'			=> 'ปล่อยให้เป็นค่าว่าง นอกเสียจากคุณทราบว่า พอร์ตที่ใช้ ไม่ใช่ 5222',
	'JAB_SERVER'				=> 'เซิฟเวอร์ Jabber',
	'JAB_SERVER_EXPLAIN'		=> 'คลิกดูรายการเซิฟเวอร์ที่ %sjabber.org%s',
	'JAB_SETTINGS_CHANGED'		=> 'การเปลี่ยนการตั้งค่า Jabber สำเร็จ',
	'JAB_USE_SSL'				=> 'ใช้ SSL สำหรับการเชื่อมต่อ',
	'JAB_USE_SSL_EXPLAIN'		=> 'ถ้าใช้ค่านี้ จะใช้การติดต่อแบบปลอดภัย Jabber จะถูกแก้ไขเป็น 5223 ถ้าพอร์ต 5222 ถูกระบุ',
	'JAB_USERNAME'				=> 'ชื่อผู้ใช้ Jabber',
	'JAB_USERNAME_EXPLAIN'		=> 'ระบุชื่อผู้ใช้ที่ลงทะเบียนแล้ว ชื่อนี้จะไม่ถูกตรวจสอบความถูกต้อง',
));

// Country Flags
$lang = array_merge($lang, array(
	'ACP_FLAG_SETTINGS_EXPLAIN'	=> 'การตั้งค่าธงชาติ',
	'FLAGS_PATH'				=> 'ตำแหน่งที่เก็บไฟล์ธงชาติ',
	'FLAGS_PATH_EXPLAIN'		=> 'ตำแหน่งที่เก็บไฟล์ต่อจากรูทของ phpBB เช่น <samp>images/flags</samp>',
	'REQUIRE_FLAG' 				=> 'ฟิลด์กำหนดธงประเทศ',
	'REQUIRE_FLAG_EXPLAIN' 		=> 'ผู้ใช้ต้องเลือกธงชาติ เมื่อลงทะเบียนใหม่',
));
/*
 * Welcome PM on First Login (WPM)
 * By DualFusion
 */
$lang = array_merge($lang, array(
	'ACP_WELCOME_PM_EXPLAIN'	=> 'คุณสามารถกำหนดข้อความที่ผู้ลงทะเบียนใหม่จะได้รับ',

	'WPM_SETTINGS'				=> 'การตั้งค่า',
	'WPM_ENABLE'				=> 'ใช้คำต้อนรับส่วนตัว',
	'WPM_SEND_ID'				=> 'PM Sender ID',
	'WPM_SEND_ID_EXPLAIN'		=> 'รหัสของสมาชิกที่ส่ง PM',

	'WPM_SUBJECT'				=> 'หัวเรื่อง',
	'WPM_SUBJECT_EXPLAIN'		=> 'หัวเรื่องของข้อความที่จะถูกส่ง',
	'WPM_MESSAGE'				=> 'ข้อความ',
	'WPM_MESSAGE_EXPLAIN'		=> 'เนื้อหาข้อความที่จะถูกส่งไป',
	'WPM_VARS'					=> 'ตัวแปรไดนามิก',
	'WPM_VARS_EXPLAIN'			=> 'ตัวแปรที่จะแสดงข้อมูลจริงของผู้ลงทะเบียน',
	'WPM_VARIABLES'				=> '<strong>{USERNAME}</strong>: ชื่อผู้ใช้<br /><strong>{USER_IP}</strong>: สมาชิก\' ไอพี<br /><strong>{USER_REGDATE}</strong>: วันที่ลงทะเบียน.<br /><strong>{USER_EMAIL}</strong>: User\'s email.<br /><strong>{SITE_NAME}</strong>: Your site\'s name.<br /><strong>{SITE_DESC}</strong>: Your site\'s description.',

	'WPM_PREVIEW'				=> 'ดูก่อน',
	'WPM_PREVIEW_EXPLAIN'		=> 'ดูข้อความก่อนที่จะถูกส่ง',
));
/* End WPM */

?>