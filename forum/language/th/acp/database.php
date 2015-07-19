<?php
/** 
* ภาษาไทย เวอร์ชั่น 1.2.0 
* 05/06/2551 
* ไฟล์ภาษาไทยสำหรับ PHPBB3 โดย www.mindphp.com และ www.phpbbthailand.com
*
*/ 


/**
*
* acp_database [English]
*
* @package language
* @version $Id: database.php,v 1.25 2007/10/04 15:07:24 acydburn Exp $
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

// Database Backup/Restore
$lang = array_merge($lang, array(
	'ACP_BACKUP_EXPLAIN'	=> 'คุณสามารถสำรองข้อมูลทั้งหมดที่เกี่ยวข้องกับ phpBB คุณสามารถเก็บเอกสารผลลัพธ์ได้ใน <samp>store/</samp> โฟลเดอร์ หรือดาวน์โหลดโดยตรง ขึ้นกับการตั้งค่าเซิร์ฟเวอร์ คุณสามารถบีบอัดไฟล์ได้หลายรูปแบบ',
	'ACP_RESTORE_EXPLAIN'	=> 'ตัวเลือกนี้จะทำการซ่อมแซมตาราง phpBB จากไฟล์ที่เซฟไว้แล้ว <strong>คำเตือน!</strong> การกระทำนี้ จะล้างข้อมูลที่มีอยู่ทั้งหมด การซ่อมแซมอาจจะใช้เวลานาน กรุณาอย่าทำอะไรจนกว่าจะทำการซ่อมแซมสำเร็จ ไฟล์สำรองถูกเก็บไว้ที่โฟลเดอร์ <samp>store/</samp>',

	'BACKUP_DELETE'		=> 'ไฟล์สำรองถูกลบสำเร็จ',
	'BACKUP_INVALID'	=> 'ไฟล์สำรองไม่ถูกต้อง',
	'BACKUP_OPTIONS'	=> 'ตัวเลือกการสำรองไฟล์',
	'BACKUP_SUCCESS'	=> 'สร้างไฟล์สำรองสำเร็จ',
	'BACKUP_TYPE'		=> 'ประเภทการทำไฟล์สำรอง',

	'DATABASE'			=> 'Database utilities',
	'DATA_ONLY'			=> 'เฉพาะข้อมูล',
	'DELETE_BACKUP'		=> 'ลบไฟล์สำรอง',
	'DELETE_SELECTED_BACKUP'	=> 'คุณแน่ใจที่จะลบไฟล์สำรองที่เลือก?',
	'DESELECT_ALL'		=> 'ไม่เลือกทั้งหมด',
	'DOWNLOAD_BACKUP'	=> 'ดาวน์โหลดไฟล์สำรอง',

	'FILE_TYPE'			=> 'ประเภทของไฟล์',

	'FILE_WRITE_FAIL'	=> 'ไม่สามารถเก็บไฟล์ลงในโฟลเดอร์ได้.',
	
	'FULL_BACKUP'		=> 'ทั้งโครงสร้างและข้อมูล',

	'RESTORE_FAILURE'		=> 'ไฟล์สำรองอาจจะเสียหาย',
	'RESTORE_OPTIONS'		=> 'ตัวเลือกการซ่อมแซม',
	
	'RESTORE_SELECTED_BACKUP'	=> 'คุณต้องการ restore ไฟล์ backup ที่เลือกไว้ ?',
	
	'RESTORE_SUCCESS'		=> 'ฐานข้อมูลถูกซ่อมแซมสำเร็จ<br /><br />บอร์ดของคุณควรอยู่ในสถานะเหมือนตอนที่ทำการก่อนสำรอง',

	'SELECT_ALL'			=> 'เลือกทั้งหมด',
	'SELECT_FILE'			=> 'กรุณาเลือกไฟล์',
	'START_BACKUP'			=> 'เริ่มการสำรอง',
	'START_RESTORE'			=> 'เริ่มการซ่อมแซม',
	'STORE_AND_DOWNLOAD'	=> 'เก็บไว้ใน Server และ ดาวน์โหลด',
	'STORE_LOCAL'			=> 'เก็บไว้ใน Server',
	'STRUCTURE_ONLY'		=> 'เฉพาะโครงสร้าง',

	'TABLE_SELECT'		=> 'เลือกตาราง',
	'TABLE_SELECT_ERROR'=> 'คุณต้องเลือกอย่างน้อย 1 ตาราง',
));

?>