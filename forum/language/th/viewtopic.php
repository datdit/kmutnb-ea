<?php
/** 
* ภาษาไทย เวอร์ชั่น 1.1.0 
* 05/06/2551 
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
	'ATTACHMENT'						=> 'แนบไฟล์',
	'ATTACHMENT_FUNCTIONALITY_DISABLED'	=> 'ส่วนการใช้งานแนบไฟล์ไม่ได้เปิดใช้งาน.',
	'BOOKMARK_ADDED'		=> 'เก็บหัวข้อเข้า รายการโปรด เรียบร้อยแล้ว',
	'BOOKMARK_ERR'			=> 'เก็บหัวข้อผิดพลาด. กรุณาลองใหม่อีกครั้ง.',	
	'BOOKMARK_REMOVED'		=> 'ลบหัวข้อจาก รายการโปรด เรียบร้อยแล้ว.',
	'BOOKMARK_TOPIC'		=> 'ตั้งเป็นรายการโปรด',
	'BOOKMARK_TOPIC_REMOVE'	=> 'ลบออกจากรายการโปรด',
	'BUMPED_BY'				=> 'Bumped ล่าสุดโดย %1$s on %2$s.',
	'BUMP_TOPIC'			=> 'Bump หัวข้อ',

	'CODE'					=> 'โค้ด',

	'COLLAPSE_QR'			=> 'ปิด ตอบด่วน',

	'DELETE_TOPIC'			=> 'ลบหัวข้อ',
	'DOWNLOAD_NOTICE'		=> 'คุณไม่มีสิทธิ์ดูไฟล์ที่แนบมาในกระทู้',

	'EDITED_TIMES_TOTAL'	=> 'แก้ไขล่าสุดโดย %1$s เมื่อ %2$s, แก้ไขแล้ว %3$d ครั้ง.',
	'EDITED_TIME_TOTAL'		=> 'แก้ไขล่าสุดโดย %1$s เมื่อ %2$s, แก้ไขแล้ว %3$d ครั้ง',
	'EMAIL_TOPIC'			=> 'ส่งอีเมล์ให้เพื่อน',
	'ERROR_NO_ATTACHMENT'	=> 'ไม่สามารถเลือกไฟล์ที่เปิดใช้งานอยู่ได้',

	'FILE_NOT_FOUND_404'	=> 'ไฟล์ <strong>%s</strong> ไมมีอยู่ในฐานข้อมูล.',
	'FORK_TOPIC'			=> 'คัดลอกหัวข้อ',
	
	'FULL_EDITOR'			=> 'ใช้กล่องข้อความเต็มรูปแบบ',

	'LINKAGE_FORBIDDEN'		=> 'คุณไม่ได้รับอนุญาตให้ดาวน์โหลด หรือ เข้าใช้งานบอร์ดนี้',
	'LOGIN_NOTIFY_TOPIC'	=> 'คุณได้รับแจ้งจากกระทู้นี้ ให้เข้าสู่ระบบก่อนจึงจะสามารถเข้าใช้งานได้',
	'LOGIN_VIEWTOPIC'		=> 'เวบบอร์ดนี้อนุญาตเฉพาะสมาชิกเท่านั้น',

	'MAKE_ANNOUNCE'				=> 'เปลี่ยนเป็นหัวข้อ "ประกาศ" ภายในหมวด',
	'MAKE_GLOBAL'				=> 'เปลี่ยนเป็นหัวข้อ "ประกาศ" แสดงทุกหมวด',
	'MAKE_NORMAL'				=> 'เปลี่ยนเป็นหัวข้อ "ธรรมดา" ',
	'MAKE_STICKY'				=> 'เปลี่ยนเป็นหัวข้อ "ปักหมุด" ',
	'MAX_OPTIONS_SELECT'		=> 'คุณสามารถเลือกได้ ถึง <strong>%d</strong> ตัวเลือก',
	'MAX_OPTION_SELECT'			=> 'คุณต้องเลือก <strong>1</strong> ตัวเลือก',
	'MISSING_INLINE_ATTACHMENT'	=> 'ไฟล์แนป <strong>%s</strong> ไม่มีอยู่แล้ว',
	'MOVE_TOPIC'				=> 'ย้ายหัวข้อ',

	'NO_ATTACHMENT_SELECTED'=> 'คุณไม่มีสิทธิ์ที่จะทำการดูไฟล์ที่แนบมาในกระทู้',
	'NO_NEWER_TOPICS'		=> 'ไม่มีกระทู้ใหม่ในฟอรั่มนี้',
	'NO_OLDER_TOPICS'		=> 'ไม่มีกระทู้เก่าในฟอรั่มนี้',
	'NO_UNREAD_POSTS'		=> 'ไม่มี ข้อความใหม่ ที่คุณยังไม่ได้อ่านในหัวข้อนี้ ',
	'NO_VOTE_OPTION'		=> 'คุณต้องเลือกหัวข้อที่ต้องการโหวต',
	'NO_VOTES'				=> 'ไม่โหวต',

	'POLL_ENDED_AT'			=> 'โพลจบเมื่อ %s',
	'POLL_RUN_TILL'			=> 'โพลล์ยังใช้ได้อยู่ %s',
	'POLL_VOTED_OPTION'		=> 'หัวข้อที่คุณเลือกโหวต',
	'PRINT_TOPIC'			=> 'ตัวอย่างพิมพ์',

	'QUICK_MOD'				=> 'เครื่องมือผู้ดูแลบอร์ด',

	'QUICKREPLY'			=> 'ตอบด่วน',

	'QUOTE'					=> 'อ้างคำพูด',

	'REPLY_TO_TOPIC'		=> 'กลับไปยังกระทู้',
	'RETURN_POST'			=> '%sกลับไปยังข้อความที่คุณโพสต์%s',

	'SHOW_QR'				=> 'ตอบด่วน',

	'SUBMIT_VOTE'			=> 'ส่้งค่าการโหวต',

	'TOTAL_VOTES'			=> 'โหวตทั้งหมด',

	'UNLOCK_TOPIC'			=> 'ปลดล็อกหัวข้อ',

	'VIEW_INFO'				=> 'รายละเอียดโพสต์',
	'VIEW_NEXT_TOPIC'		=> 'หัวข้อถัดไป>>',
	'VIEW_PREVIOUS_TOPIC'	=> '<<หัวข้อก่อนหน้า',
	'VIEW_RESULTS'			=> 'แสดงผลลัพธ์',
	'VIEW_TOPIC_POST'		=> '1 โพสต์',
	'VIEW_TOPIC_POSTS'		=> '%d โพสต์',
	'VIEW_UNREAD_POST'		=> 'โพสต์ที่ยังไม่ได้อ่าน',
	'VISIT_WEBSITE'			=> 'www',
	'VOTE_SUBMITTED'		=> 'ผลโหวตของคุณถูกคำนวณเรียบร้อยแล้ว',
	'VOTE_CONVERTED'		=> 'ไม่รองรับการเปลี่ยนผลการสำรวจ สำหรับการสำรวจที่แปลงมา',

));

?>