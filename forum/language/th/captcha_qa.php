<?php
/** 
* ภาษาไทย เวอร์ชั่น 1.2.0 
* 23/11/2553 
* ไฟล์ภาษาไทยสำหรับ PHPBB3 โดย www.mindphp.com และ www.phpbbthailand.com
*
*/  

/**
*
* captcha_qa [English]
*
* @package language
* @version $Id: captcha_qa.php 9966 2009-08-12 15:12:03Z Kellanved $
* @copyright (c) 2009 phpBB Group
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
	'CAPTCHA_QA'				=> 'Q&amp;A',
	'CONFIRM_QUESTION_EXPLAIN'	=> 'คำถามนี้ เพื่อป้องกันการส่งแบบอัตโนมัติจากสแปมบอท',
	'CONFIRM_QUESTION_WRONG'	=> 'คำตอบของคุณไม่ถูกต้อง',

	'QUESTION_ANSWERS'			=> 'ตอบคำถาม',
	'ANSWERS_EXPLAIN'			=> 'ต้องตอบคำถามให้ถูกต้อง, 1คำตอบต่อบรรทัด',
	'CONFIRM_QUESTION'			=> 'ยืนยันคำถาม',

	'ANSWER'					=> 'ตอบ',
	'EDIT_QUESTION'				=> 'แก้ไข คำถาม',
	'QUESTIONS'					=> 'คำถาม',
	'QUESTIONS_EXPLAIN'			=> 'สำหรับการส่งทุกรูปแบบที่คุณต้องเปิดการใช้งานปลั๊กอิน Q & A . ผู้ใช้จะได้รับคำถามหนึ่งในคำถามที่กำหนดไว้ที่นี่ เมื่อต้องการใช้ปลั๊กอินนี้ ต้องมีคำถามในภาษาหลักของบอร์ด คำถามเหล่านี้ควรจะง่ายสำหรับคนตอบที่จะตอบ แต่ควรหลีกเลี่ยงตำตอบที่บอทสามารถหาได้จาก Google การใชคำถามยาวๆและมีการเปลี่ยนแปลงอย่างสม่ำเสมอในการตั้งคำถามจะทำให้ป้องกันบอทได้ดีขึ้น. เปิดใช้งานการตั้งค่าที่เข้มงวด ถ้าคำตอบเป็นกรณีผสม เครื่องหมายวรรคตอนหรือช่องว่าง',
	'QUESTION_DELETED'			=> 'คำถามถูกลบแล้ว',
	'QUESTION_LANG'				=> 'ภาษา',
	'QUESTION_LANG_EXPLAIN'		=> 'ภาษาที่ใช้ในการถาม-ตอบ',
	'QUESTION_STRICT'			=> 'ตรวจสอบแบบละเอียด',
	'QUESTION_STRICT_EXPLAIN'	=> 'ถ้าเปิดใช้งาน, จำเป็นต้องใส่ ตัวอักษร และค่าว่าง.',

	'QUESTION_TEXT'				=> 'คำถาม',
	'QUESTION_TEXT_EXPLAIN'		=> 'คำถามที่จะถาม เกี่ยวกับการลงทะเบียน.',

	'QA_ERROR_MSG'				=> 'กรุณากรอกคำถามทุกฟิลด์ ป้อนอย่างน้อยหนึ่งคำตอบ.',
	
	'QA_LAST_QUESTION'			=> 'คุณไม่สามารถลบคำถามทั้งหมดถ้ายังใช้งาน QA อยู่.',
	
));

?>