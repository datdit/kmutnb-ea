<?php
/** 
* ภาษาไทย เวอร์ชั่น 1.0.0 
* 05/06/2551 
* ไฟล์ภาษาไทยสำหรับ PHPBB3 โดย www.mindphp.com และ www.phpbbthailand.com
*
*/ 


/**
*
* acp_modules [English]
*
* @package language
* @version $Id: modules.php,v 1.13 2007/10/04 15:07:24 acydburn Exp $
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
	'ACP_MODULE_MANAGEMENT_EXPLAIN'	=> 'คุณสามารถจัดการโมดูลทุกชนิดได้ โปรดทราบว่า ACP มี 3 ระดับของโครงสร้างเมนู (Category -> Category -> Module) แตกต่าง จากโครงสร้างเมนูที่อื่น ที่มี 2 ระดับ (Category -> Module) โปรดระวังไว้ว่าคุณอาจจะล็อกตัวเองถ้าคุณยกเลิกโมดูล หรือลบโมดูลที่รับผิดชอบการจัดการโมดูลตัวเอง',
	'ADD_MODULE'					=> 'เพิ่มโมดูล',
	'ADD_MODULE_CONFIRM'			=> 'คุณแน่ใจว่าจะเพิ่มโมดูลด้วยโหมดที่เลือก?',
	'ADD_MODULE_TITLE'				=> 'เพิ่มโมดูล',

	'CANNOT_REMOVE_MODULE'	=> 'ไม่สามารถลบโมดูล, โมดูลมีโมดูลลูกที่กำหนดอยู่ โปรดลบลูกออกก่อนที่จะลบโมดูล',
	'CATEGORY'				=> 'Category',
	'CHOOSE_MODE'			=> 'เลือกโหมดของโมดูล',
	'CHOOSE_MODE_EXPLAIN'	=> 'เลือกโหมดโมดูลที่ต้องการจะใช้',
	'CHOOSE_MODULE'			=> 'เลือกโมดูล',
	'CHOOSE_MODULE_EXPLAIN'	=> 'เลือกไฟล์ที่ถูกเลือกโดยโมดูล',
	'CREATE_MODULE'			=> 'สร้างโมดูลใหม่',

	'DEACTIVATED_MODULE'	=> 'เลิกใช้โมดูล',
	'DELETE_MODULE'			=> 'ลบโมดูล',
	'DELETE_MODULE_CONFIRM'	=> 'คุณแน่ใจว่าจะลบโมดูลนี้?',

	'EDIT_MODULE'			=> 'แก้ไขโมดูล',
	'EDIT_MODULE_EXPLAIN'	=> 'คุณสามารถใส่การตั้งค่าโมดูลได้',

	'HIDDEN_MODULE'			=> 'ซ่อนโมดูล',

	'MODULE'					=> 'โมดูล',
	'MODULE_ADDED'				=> 'เพิ่มโมดูลสำเร็จ',
	'MODULE_DELETED'			=> 'ลบโมดูลสำเร็จ',
	'MODULE_DISPLAYED'			=> 'แสดงโมดูล',
	'MODULE_DISPLAYED_EXPLAIN'	=> 'ถ้าคุณไม่ต้องการแสดงโมดูลนี้, แต่ต้องการจะใช้ให้ตั้งค่านี้เป็น No',
	'MODULE_EDITED'				=> 'แก้ไขโมดูลสำเร็จ',
	'MODULE_ENABLED'			=> 'เลือกใช้โมดูล',
	'MODULE_LANGNAME'			=> 'ชื่อภาษาโมดูล',
	'MODULE_LANGNAME_EXPLAIN'	=> 'ใส่ชื่อโมดูลที่แสดง. ใช้ภาษาคที่คงตัว ถ้าหากชื่อนั้นถูกดึงมาจากไฟล์ภาษา.',
	'MODULE_TYPE'				=> 'ประเภทโมดูล',

	'NO_CATEGORY_TO_MODULE'	=> 'ไม่สามารถเปลี่ยน category ไปเป็นโมดูล โปรด ลบ ลูกทุกตัวก่อนที่จะทำการกระทำนี้',
	'NO_MODULE'				=> 'ไม่พบโมดูล',
	'NO_MODULE_ID'			=> 'ไม่พบไอดีโมดูลที่ระบุ',
	'NO_MODULE_LANGNAME'	=> 'ไม่พบชื่อโมดูลภาษาที่ระบุ',
	'NO_PARENT'				=> 'ไม่มี Parent',

	'PARENT'				=> 'Parent',
	'PARENT_NO_EXIST'		=> 'ไม่มี Parent อยู่.',

	'SELECT_MODULE'			=> 'เลือกโมดูล',
));

?>