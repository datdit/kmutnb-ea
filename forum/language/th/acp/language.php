<?php
/** 
* ภาษาไทย เวอร์ชั่น 1.2.0 
* 05/01/2555 
* ไฟล์ภาษาไทยสำหรับ PHPBB3 โดย www.mindphp.com และ www.phpbbthailand.com
*
*/ 

/**
*
* acp_language [English]
*
* @package language
* @version $Id: language.php,v 1.16 2007/10/04 15:07:24 acydburn Exp $
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
	'ACP_FILES'						=> 'ไฟล์ภาษา ผู้ดูแลระบบ',
/*	
	'ACP_LANGUAGE_PACKS_EXPLAIN'	=> 'คุณสามารถ ติดตั้ง/ลบ ภาษาของบอร์ด',
*/
	'ACP_LANGUAGE_PACKS_EXPLAIN'	=> 'คุณสามารถติดตั้ง/ลบ ชุดภาษาของบอร์ดได้. ชุดภาษาที่ใช้อยู่จะมีเครื่องหมายดอกจัน (*) ระบุไว้.',

	'EMAIL_FILES'			=> ' แม่แบบของอีเมล',

	'FILE_CONTENTS'				=> 'เนื้อหาไฟล์',
	'FILE_FROM_STORAGE'			=> 'ไฟล์จากโฟลเดอร์ที่เก็บ',

	'HELP_FILES'				=> 'ไฟล์ช่วย',

	'INSTALLED_LANGUAGE_PACKS'	=> 'ติดตั้งแพคภาษา',
	'INVALID_LANGUAGE_PACK'		=> 'แพคภาษาที่เลือก ไม่ถูกต้อง โปรดตรวจสอบและอัพโหลดอีกครั้ง',
	'INVALID_UPLOAD_METHOD'		=> 'วิธีอัพโหลดที่เลือก ไม่ถูกต้อง โปรดเลือกวิธีใหม่',

	'LANGUAGE_DETAILS_UPDATED'			=> 'อัพเดทรายละเอียดภาษาสำเร็จ',
	'LANGUAGE_ENTRIES'					=> 'รายการภาษา',
	'LANGUAGE_ENTRIES_EXPLAIN'			=> 'คุณสามารถเปลี่ยนรายการแพคภาษาที่มีอยู่ หรือ ไม่แปลก็ได้<br /><strong>หมายเหตุ:</strong> เมื่อคุณเปลี่ยนไฟล์ภาษา, การเปลี่ยนแปลงจะเก็บในอีกโฟลเดอร์หนึ่งเพื่อให้คุณดาวน์โหลดได้ การเปลี่ยนแปลงจะยังไม่ส่งผลถึงผู้ใช้จนกว่าคุณจะแทนที่ไฟล์ภาษาที่ webspace โดยการอัพโหลด',
	'LANGUAGE_FILES'					=> 'ไฟล์ภาษา',
	'LANGUAGE_KEY'						=> 'คีย์ภาษา',
	'LANGUAGE_PACK_ALREADY_INSTALLED'	=> 'แพคภาษานี้ติดตั้งอยู่แล้ว',
	'LANGUAGE_PACK_DELETED'				=> 'ลบแพคภาษา <strong>%s</strong> สำเร็จ ผู้ใช้ที่ใช้ภาษานี้จะถูกตั้งค่าเป็นภาษาค่าเริ่มต้น',
	'LANGUAGE_PACK_DETAILS'				=> 'รายละเอียดแพคภาษา ',
	'LANGUAGE_PACK_INSTALLED'			=> 'ติดตั้งแพคภาษา <strong>%s</strong> สำเร็จ',
	'LANGUAGE_PACK_CPF_UPDATE'			=> 'ในส่วนของ custom profile fields ภาษาจะถูกคัดลองจากภาษามาตรฐาน. ถ้าต้องการเปลี่ยนก็สามารถเปลี่ยนได้',
	'LANGUAGE_PACK_ISO'					=> 'ISO',
	'LANGUAGE_PACK_LOCALNAME'			=> 'ชื่อท้องถิ่น',
	'LANGUAGE_PACK_NAME'				=> 'ชื่อ',
	'LANGUAGE_PACK_NOT_EXIST'			=> 'แพคภาษาที่เลือก ไม่มีอยู่จริง',
	'LANGUAGE_PACK_USED_BY'				=> 'ใช้โดย (รวมทั้ง robots)',
	'LANGUAGE_VARIABLE'					=> 'ตัวแปรภาษา',
	'LANG_AUTHOR'						=> 'ผู้แต่งแพคภาษา',
	'LANG_ENGLISH_NAME'					=> 'ชื่อภาษาอังกฤษ',
	'LANG_ISO_CODE'						=> 'ISO code',
	'LANG_LOCAL_NAME'					=> 'ชื่อท้องถิ่น',

	'MISSING_LANGUAGE_FILE'		=> 'ไฟล์ภาษา: <strong style="color:red">%s</strong> หายไป',
	'MISSING_LANG_VARIABLES'	=> 'ตัวแปรภาษาหายไป',
	'MODS_FILES'				=> 'MODs ไฟล์ภาษา',

	'NO_FILE_SELECTED'				=> 'คุณยังไม่ได้ระบุไฟล์ภาษา',
	'NO_LANG_ID'					=> 'คุณยังไม่ได้ระบุแพคภาษา.',
	'NO_REMOVE_DEFAULT_LANG'		=> 'คุณไม่สามารถลบค่าเริ่มต้นแพคภาษาได้<br />หากคุณต้องการลบแพคภาษานี้ ให้เปลี่ยนค่าเริ่มต้นภาษาก่อน',
	'NO_UNINSTALLED_LANGUAGE_PACKS'	=> 'ไม่มีแพคภาษาที่ถูกยกเลิกการติดตั้ง',

	'REMOVE_FROM_STORAGE_FOLDER'		=> 'ลบออกจากโฟลเดอร์ที่เก็บ',

	'SELECT_DOWNLOAD_FORMAT'	=> 'เลือกรูปแบบการดาวน์โหลด',
	'SUBMIT_AND_DOWNLOAD'		=> 'ส่งและดาวน์โหลดไฟล์',
	'SUBMIT_AND_UPLOAD'			=> 'ส่งและอัพโหลดไฟล์',

	'THOSE_MISSING_LANG_FILES'			=> 'ไฟล์ภาษา %s ต่อไปนี้ หายไปจากโฟลเดอร์ภาษา',
	'THOSE_MISSING_LANG_VARIABLES'		=> 'ตัวแปรภาษาหายไปจากแพคภาษา <strong>%s</strong>',

	'UNINSTALLED_LANGUAGE_PACKS'	=> 'ยกเลิกการติดตั้งแพคภาษา',

	'UNABLE_TO_WRITE_FILE'		=> 'ไม่สามารถเขียนไฟล์ไปที่ %s.',
	'UPLOAD_COMPLETED'			=> 'อัพโหลดสำเร็จ.',
	'UPLOAD_FAILED'				=> 'อัพโหลดล้มเหลวโดยไม่ทราบเหตุผล คุณอาจจะต้องแทนที่ไฟล์ที่เกี่ยวข้องเอง',
	'UPLOAD_METHOD'				=> 'วิธีการอัพโหลด',
	'UPLOAD_SETTINGS'			=> 'การตั้งค่าอัพโหลด',

	'WRONG_LANGUAGE_FILE'		=> 'ไฟล์ภาษาที่เลือก ไม่ถูกต้อง',
));

?>