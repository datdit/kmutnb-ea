<?php
/** 
* ภาษาไทย เวอร์ชั่น 1.1.0 
* 23/11/2553  
* ไฟล์ภาษาไทยสำหรับ PHPBB3 โดย www.mindphp.com และ www.phpbbthailand.com
*
*/ 


/**
*
* acp_search [English]
*
* @package language
* @version $Id: search.php,v 1.21 2007/10/04 15:07:24 acydburn Exp $
* @copyright (c) 2005 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
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

$lang = array_merge($lang, array(
	'ACP_SEARCH_INDEX_EXPLAIN'				=> 'คุณสามารถจัดการดัชนีวิธีการค้นหา คุณควรลบดัชนีที่คุณไม่ใช้ออกไป หลังจากแก้ไขค่าการค้นหาบางค่า (เข่น จำนวนตัวอักษร ต่ำสุด/สูงสุด ) คุณควรสร้างดัชนีใหม่ เพื่อให้เข้ากับการเปลี่ยนแปลง',
	'ACP_SEARCH_SETTINGS_EXPLAIN'			=> 'คุณสามารถกำหนดว่าดัชนีการค้นหาใดจะถูกใช้สำหรับการโพสต์และการค้นหาต่างๆ คุณสามารถตั้งค่าได้หลากหลาย ในการกำหนดตัวเลือกที่มีผลกับการประมวลผล ',

	'COMMON_WORD_THRESHOLD'					=> 'ค่านับเริ่มต้นคำสามัญ',
	'COMMON_WORD_THRESHOLD_EXPLAIN'			=> 'คำที่พบในการโพสต์เป็นส่วนใหญ่ จะถือว่าเป็น คำสามัญ คำสามัญจะถูกละเลยในการค้นหา ตั้งค่าเป็น 0 เพื่อยกเลิก จะมีผลก็ต่อเมื่อมีมากกว่า 100 โพสต์',
	'CONFIRM_SEARCH_BACKEND'				=> 'คุณแน่ใจที่จะสลับการวิธีการค้นหา เป็นอีกอันหนึ่ง? หลังจากเปลี่ยนแล้ว คุณจำเป็นต้องสร้างดัชนีใหม่ ถ้าคุณไม่ต้องการจะกลับมาใช้ดัชนีเดิม คุณสามารถลบดัชนีเก่าได้เพื่อเป็นการประหยัดทรัพยากร',
	'CONTINUE_DELETING_INDEX'				=> 'ทำกระบวนการลบดัชนีก่อนหน้าต่อไป',
	'CONTINUE_DELETING_INDEX_EXPLAIN'		=> 'กระบวนการลบดัชนีเริ่มขึ้นแล้ว ในการที่จะเข้าถึงดัชนีการค้นหาคุณต้องรอให้มันเสร็จหรือยกเลิก',
	'CONTINUE_INDEXING'						=> 'ทำกระบวนการสร้างดัชนีต่อไป',
	'CONTINUE_INDEXING_EXPLAIN'				=> 'กระบวนการสร้างดัชนีได้เริ่มขึ้นแล้ว ในการที่จะเข้าถึงดัชนีการค้นหาคุณต้องรอให้มันเสร็จหรือยกเลิก',
	'CREATE_INDEX'							=> 'สร้างดัชนี',

	'DELETE_INDEX'							=> 'ลบดัชนี',
	'DELETING_INDEX_IN_PROGRESS'			=> 'กำลังอยู่ในกระบวนการลบดัชนี',
	'DELETING_INDEX_IN_PROGRESS_EXPLAIN'	=> 'วิธีการค้นหา กำลังทำความสะอาดดัชนี กระบวนการนี้อาจกินเวลา',

	'FULLTEXT_MYSQL_INCOMPATIBLE_VERSION'	=> 'วิธีการค้นหาด้วย MySQL fulltext ใช้ได้กับ Mysql เวอร์ชั่น 4 เป็นต้นไป.',
	'FULLTEXT_MYSQL_NOT_MYISAM'				=> 'MySQL fulltext indexes สามารถใช้ได้กับตารางที่กำหนดเป็น MyISAM เท่านั้น.',
	'FULLTEXT_MYSQL_TOTAL_POSTS'			=> 'จำนวนดัชนีโพสต์ทั้งหมด',
	'FULLTEXT_MYSQL_MBSTRING'				=> 'สนับสนุน non-latin UTF-8 characters โดยใช้ mbstring:',
	'FULLTEXT_MYSQL_PCRE'					=> 'สนับสนุน non-latin UTF-8 characters โดยใช้ PCRE:',
	'FULLTEXT_MYSQL_MBSTRING_EXPLAIN'		=> 'ถ้า PCRE ไม่มีคุณสมบัติ unicode , วิธีการค้นหาจะพยายามใช้ mbstring’s regular expression แทน',
	'FULLTEXT_MYSQL_PCRE_EXPLAIN'			=> 'การค้นหาพืนหลังนี้มันต้องการคุณสมบัติ PCRE unicode, มีให้ใช้ใน PHP 4.4, 5.1 และหลังจากนี้ เท่านั้น, ถ้าคุณต้องการค้นหา ตัวอักษรที่เป็น non-latin',
	'FULLTEXT_MYSQL_MIN_SEARCH_CHARS_EXPLAIN'	=> 'คำน้่อยที่สุดที่ใช้สำหรับการจัดทำดัชนีสำหรับการค้นหา.  โฮสต์ของคุณสามารถเปลี่ยนการตั้งค่านี้โดยการเปลี่ยนการตั้งค่าของ MySQL.',
	'FULLTEXT_MYSQL_MAX_SEARCH_CHARS_EXPLAIN'	=> 'คำมากที่สุดต้องไม่เกินค่าการทำดัชนีสำหรับคนหา. โฮสต์ของคุณสามารถเปลี่ยนการตั้งค่านี้โดยการเปลี่ยนการตั้งค่าของ',
	'GENERAL_SEARCH_SETTINGS'				=> 'การตั้งค่าการค้นหาทั่วไป',
	'GO_TO_SEARCH_INDEX'					=> 'ไปที่หน้าดัชนีการค้นหา',

	'INDEX_STATS'							=> 'สถิติดัชนี',
	'INDEXING_IN_PROGRESS'					=> 'อยู่ระหว่างการทำดัชนี',
	'INDEXING_IN_PROGRESS_EXPLAIN'			=> 'กำลังสร้างดัชนีสำหรับโพสต์ทั้งหมดในบอร์ด กระบวนการนี้อาจกินเวลานาน  ขึ้นอยู่กับขนาดเว็บบอร์ด',

	'LIMIT_SEARCH_LOAD'						=> 'ขีดจำกัดโหลดของการค้นหา',
	'LIMIT_SEARCH_LOAD_EXPLAIN'				=> 'ถ้าโหลดของระบบภายใน 1 นาที เกินค่านี้ หน้าการค้นหาจะออฟไลน์ ค่า 1.0 เท่ากับการใช้ ~100% ของหนึ่งโปรเซสเซอร์ ',

	'MAX_SEARCH_CHARS'						=> 'จำนวนตัวอักษรสูงสุดของการค้นหา',
	'MAX_SEARCH_CHARS_EXPLAIN'				=> 'จำนวนตัวอักษรที่ไม่เิกินค่านี้สำหรับการค้นหา',
	
	'MAX_NUM_SEARCH_KEYWORDS'				=> 'จำนวนคำสูงสุดที่อนุญาตให้ใช้ค้น',
	'MAX_NUM_SEARCH_KEYWORDS_EXPLAIN'		=> 'จำนวนสูงสุดของคำที่ผู้ใช้สามารถใช้ค้นหา. ค่า 0 คือ ไม่จำกัดจำนวนคำ.',
	
	'MIN_SEARCH_CHARS'						=> 'จำนวนตัวอักษรต่ำสุดของการค้นหา',
	'MIN_SEARCH_CHARS_EXPLAIN'				=> 'จำนวนตัวอักษรที่ไม่ต่ำกว่าค่านี้ ที่จะสนใจในการค้นหา',
	'MIN_SEARCH_AUTHOR_CHARS'				=> 'จำนวนตัวอักษรต่ำสุดของชื่อผู้แต่ง',
	'MIN_SEARCH_AUTHOR_CHARS_EXPLAIN'		=> 'ผู้ใช้ต้องกรอกชื่อของผู้แต่งที่ใช้ในการค้นหาเป็นจำนวนไม่ต่ำกว่าค่านี้ ถ้าชื่อผู้ใช้ที่คุณต้องการค้นหาสั้นกว่าค่านี้ คุณสามารถใส่ชื่อเต็มได้',

	'PROGRESS_BAR'							=> 'แถบความก้าวหน้า',

	'SEARCH_GUEST_INTERVAL'					=> 'ช่วงเวลาการค้นหาของแขกที่ต้องรอ',
	'SEARCH_GUEST_INTERVAL_EXPLAIN'			=> 'จำนวนวินาทีที่ต้องรอระหว่างการค้นหาแต่ละครั้ง',
	'SEARCH_INDEX_CREATE_REDIRECT'			=> 'โพสต์ทั้งหมดจนถึงโพสต์ id %1$d ถูกทำดัชนีเรียบร้อยแล้ว เหลือ %2$d โพสต์ที่กำลังอยู่ระหว่างกระบวนการ<br /> อัตราการทำดัชนีอยู่ที่ประมาณ %3$.1f โพสต์ต่อวินาที<br /> อยู่ระหว่างการทำดัชนี…',
	'SEARCH_INDEX_DELETE_REDIRECT'			=> 'โพสต์ทั้งหมดจนถึงโพสต์ id %1$d ถูกลบจากการทำดัชนี <br />อยู่ระหว่างการลบ…',
	'SEARCH_INDEX_CREATED'					=> 'ทำดัชนีการโพสต์ในฐานข้อมูลบอร์ดสำเร็จ',
	'SEARCH_INDEX_REMOVED'					=> 'ลบดัชนีการค้นหาสำเร็จ',
	'SEARCH_INTERVAL'						=> 'ช่วงเวลาที่ผู้ใช้ต้องรอ',
	'SEARCH_INTERVAL_EXPLAIN'				=> 'จำนวนวินาที ที่ผู้ใช้ต้องรอก่อนที่จะทำการค้นหาใหม่ ค่านี้จะถูกตรวจสอบแยกกันในแต่ละผู้ใช้',
	'SEARCH_STORE_RESULTS'					=> 'ความยาวแคชการค้นหา',
	'SEARCH_STORE_RESULTS_EXPLAIN'			=> 'จำนวนวินาทีที่แคชจะหมดอายุ ตั้งค่า 0 เพื่อยกเลิก',
	'SEARCH_TYPE'							=> 'วิธีการค้นหา',
	'SEARCH_TYPE_EXPLAIN'					=> 'phpBB อนุญาตให้คุณเลือกวิธีที่ใช้นการค้นหาเนื้อหาการโพสต์ โดยปกติการค้นหาจะใช้การค้นหาข้อความเต็มของ phpBB ',
	'SWITCHED_SEARCH_BACKEND'				=> 'คุณได้ทำการสลับการวิธีการค้นหา ถ้าต้องการใช้วิธีการค้นหาแบบใหม่ คุณควรตรวจสอบว่ามีดัชนีสำหรับการค้นหาที่เลือกมีอยู่หรือไม่',

	'TOTAL_WORDS'							=> 'จำนวนคำของดัชนี',
	'TOTAL_MATCHES'							=> 'จำนวนคำที่สัมพันธ์กับดัชนีการโพสต์',

	'YES_SEARCH'							=> 'ใช้สิ่งอำนวยการค้นหา',
	'YES_SEARCH_EXPLAIN'					=> 'เลือกให้ผู้ใช้สามารถใช้ หน้าที่การค้นหารวมทั้งการค้นหาสมาชิก',
	'YES_SEARCH_UPDATE'						=> 'เลือกการใช้อัพเดทการค้นหาข้อความเต็ม',
	'YES_SEARCH_UPDATE_EXPLAIN'				=> 'อัพเดทดัชนีข้อความเต็มเมื่อโพสต์ จะถูกตั้งค่าทับถ้าไม่ใช้การค้นหา',
));

?>