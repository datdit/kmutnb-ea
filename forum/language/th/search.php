<?php
/** 
* ภาษาไทย เวอร์ชั่น 1.2.3 
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


$lang = array_merge($lang, array(
	'ALL_AVAILABLE'				=> 'ที่มีทั้งหมด',
	'ALL_RESULTS'				=> 'ผลทั้งหมด ',

	'DISPLAY_RESULTS'			=> 'แสดงผล',

	'FOUND_SEARCH_MATCH'		=> 'พบ %d ผลลัพธ์',
	'FOUND_SEARCH_MATCHES'		=> 'พบ %d ผลลัพธ์',
	'FOUND_MORE_SEARCH_MATCHES'	=> 'พบมากกว่า %d ผลลัพธ์',

	'GLOBAL'				=> 'ประกาศทั่วไป',

	'IGNORED_TERMS'			=> 'ไม่สนใจ',
	'IGNORED_TERMS_EXPLAIN'	=> 'คำที่คุณใช้ในการค้นหาถูกเพิกเฉย: <strong>%s</strong>.',

	'JUMP_TO_POST'			=> 'ไปที่กระทู้ ',
	'LOGIN_EXPLAIN_EGOSEARCH'	=> 'บอร์ดนี้กำหนดให้คุณต้องลงทะเบียนและเข้าสู่ระบบเพื่อดูข้อความในกระทู้.',

	'LOGIN_EXPLAIN_UNREADSEARCH'=> 'บอร์ดนี้กำหนดให้คุณต้องลงทะเบียนและเข้าสู่ระบบเพื่อดูข้อความในกระทู้ที่ยังไม่ได้อ่าน.',	

	'LOGIN_EXPLAIN_NEWPOSTS'	=> 'คุณจำเป็นต้องลงทะเบียนและล็อคอินเพื่อที่จะดูโพสใหม่.',	

	'MAX_NUM_SEARCH_KEYWORDS_REFINE'	=> 'คุณใส่คำค้นมากเกินไป. กรุณาอย่าป้อนคำค้นเกิน %1$d คำ.',

	'NO_KEYWORDS'			=> 'คุณต้องระบุคำที่ต้องการค้นหา โดยคำเหล่านั้นต้องประกอบไปด้วยตัวอักษรและต้องไม่มีคำพิเศษ',
	'NO_RECENT_SEARCHES'	=> 'ไม่สามารถค้นหาได้',
	'NO_SEARCH'				=> 'ขออภัยท่านไม่มีลิทธิ์ ให้งานใน การค้นหา.',
	'NO_SEARCH_RESULTS'		=> 'ผลการค้นหา ไม่พบข้อมูลที่ต้องการ',
	'NO_SEARCH_TIME'		=> 'ตอนนี้. คุณไม่สามารถค้นหาได้ กรุณารอซักครู่แล้ว ลองใหม่.',
	'NO_SEARCH_UNREADS'		=> 'ขออภัยการค้นหาโพสต์ที่ยังไม่ได้อ่านไม่สามารถทำได้ในบอร์ดนี้.',
	'WORD_IN_NO_POST'		=> 'ไม่พบข้อความใด เพราะคำที่ต้องการค้นหา <strong>%s</strong>ไม่มีในข้อความใดๆ ',
	'WORDS_IN_NO_POST'		=> 'ไม่พบข้อความใด เพราะคำที่ต้องการค้นหา <strong>%s</strong> ไม่มีในข้อความใดๆ',

	'POST_CHARACTERS'		=> 'ตัวอักษร',

	'RECENT_SEARCHES'		=> 'ค้นหาปัจจุบัน',
	'RESULT_DAYS'			=> 'ค้นหาก่อนวันที่',
	'RESULT_SORT'			=> 'เรียงลำดับจาก',
	'RETURN_FIRST'			=> 'ส่งค่ากลับ',
	'RETURN_TO_SEARCH_ADV'	=> 'กลับไปหน้า การค้นหาชั้นสูง',

	'SEARCHED_FOR'				=> 'เงื่อนไขการค้นหาที่ใช้',
	'SEARCHED_TOPIC'			=> 'ค้นหากระทู้',
	'SEARCH_ALL_TERMS'			=> 'ค้นหาจากทุกส่วน หรือใช้ข้อความที่ระบุ',
	'SEARCH_ANY_TERMS'			=> 'ค้นหาจากทุกส่วน',
	'SEARCH_AUTHOR'				=> 'ค้นหาจากผู้แต่ง:',
	'SEARCH_AUTHOR_EXPLAIN'		=> 'ใช้ * เพื่อค้นหาจากบางส่วนของคำ',
	'SEARCH_FIRST_POST'			=> 'การโพสต์แรกของกระทู้ เท่านั้น',
	'SEARCH_FORUMS'				=> 'ค้นหาในฟอรั่ม',
	'SEARCH_FORUMS_EXPLAIN'		=> 'กรุณาเลือกบอร์ด ในการค้นหา หากต้องการค้นหาบอร์ดย่อยสามารถทำได้โดย เลือกที่บอร์ดหลักและ กำหนดค่าให้ค้นหาบอร์ดย่อยด้วย',
	'SEARCH_IN_RESULTS'			=> 'ผลจากการค้นหา',
	'SEARCH_KEYWORDS_EXPLAIN'	=> 'คุณสามารถใช้ AND เพื่อระบุคำที่ต้องมีในผลลัพธ์, OR อาจมีหรือไม่มีคำนี้ก็ได้ และ NOT จะต้องไม่มีคำนี้อยู่. ใช้ * เพื่อค้นหาจากบางส่วนของคำ',
	'SEARCH_MSG_ONLY'			=> 'เฉพาะข้อความ',
	'SEARCH_OPTIONS'			=> 'ตั้งค่าการค้นหา',
	'SEARCH_QUERY'				=> 'ค้นหา',
	'SEARCH_SUBFORUMS'			=> 'ค้นหาในบอร์ดย่อย',
	'SEARCH_TITLE_MSG'			=> 'หัวข้อและข้อความ',
	'SEARCH_TITLE_ONLY'			=> 'เฉพาะชื่อหัวข้อ',
	'SEARCH_WITHIN'				=> 'การค้นหาภายใน',
	'SORT_ASCENDING'			=> 'น้อย-มาก',
	'SORT_AUTHOR'				=> 'ชื่อเจ้าของกระทู้',
	'SORT_DESCENDING'			=> 'มาก-น้อย',
	'SORT_FORUM'				=> 'บอร์ด',
	'SORT_POST_SUBJECT'			=> 'หัวข้อโพสต์',
	'SORT_TIME'					=> 'เวลาโพสต์',

	'TOO_FEW_AUTHOR_CHARS'	=> 'คุณต้องระบุอย่างน้อย %d ตัวอักษรสำหรับชื่อเจ้าของกระทู้',
));

?>