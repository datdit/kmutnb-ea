<?php
/** 
* ภาษาไทย เวอร์ชั่น 1.1.2
* 01/09/2551 
* ไฟล์ภาษาไทยสำหรับ PHPBB3 โดย www.mindphp.com และ www.phpbbthailand.com
*
*/ 

/**
*
* acp_groups [English]
*
* @package language
* @version $Id: groups.php,v 1.29 2007/10/04 15:07:24 acydburn Exp $
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
	'ACP_GROUPS_MANAGE_EXPLAIN'		=> 'จากแป้นนี้ คุณสามารถดูแลกลุ่มผู้ใช้ คุณสามารถลบ สร้างและแก้ไขกลุ่มที่มีอยู่ นอกจากนี้, คุณสามารถเลือกผู้นำกลุ่ม , เปิด/ซ่อน/ปิด สถานะกลุ่ม ตั้งชื่อกลุ่มและคำอธิบาย ',
	'ADD_USERS'						=> 'เพิ่มผู้ใช้',
	'ADD_USERS_EXPLAIN'				=> 'คุณสามารถเพิ่มผู้ใช้ใหม่เข้ากลุ่ม คุณสามารถเลือกกลุ่มนี้เป็นกลุ่มเริ่มต้นสำหรับผู้ใช้ที่เลือก นอกจากนี้คุณยังสามารถกำหนดพวกเขาเป็นผู้นำกลุ่ม โปรดกรอกชื่อผู้ใช้ แยกคนละบรรทัด',

	'COPY_PERMISSIONS'				=> 'คัดลอกการอนุญาตจาก',
	'COPY_PERMISSIONS_EXPLAIN'		=> 'เมื่อสร้างแล้ว กลุ่มจะมีการอนุญาตเหมือนที่เลือกที่นี่',
	'CREATE_GROUP'					=> 'สร้างกลุ่มใหม่',

	'GROUPS_NO_MEMBERS'				=> 'กลุ่มนี้ไม่มีสมาชิก',
	'GROUPS_NO_MODS'				=> 'ไม่มีการกำหนดผู้นำกลุ่ม',

	'GROUP_APPROVE'					=> 'อนุมัติสมาชิก',
	'GROUP_APPROVED'				=> 'สมาชิกได้รับการอนุมัติ',
	'GROUP_AVATAR'					=> 'ภาพประจำกลุ่ม',
	'GROUP_AVATAR_EXPLAIN'			=> 'ภาพนี้จะแสดงในแป้นควบคุมของกลุ่ม',
	'GROUP_CLOSED'					=> 'ปิด',
	'GROUP_COLOR'					=> 'สีกลุ่ม',
	'GROUP_COLOR_EXPLAIN'			=> 'กำหนดสีของสมาชิกที่ปรากฏ, ปล่อยว่างถ้าต้องการใช้ค่าเริ่มต้น',
	'GROUP_CONFIRM_ADD_USER'		=> 'คุณแน่ใจว่าต้องการเพิ่มผู้ใช้ %1$s เข้ากลุ่ม?',
	'GROUP_CONFIRM_ADD_USERS'		=> 'คุณแน่ใจว่าต้องการเพิ่มผู้ใช้ %1$s เข้ากลุ่ม?',
	'GROUP_CREATED'					=> 'สร้างกลุ่มสำเร็จ',
	'GROUP_DEFAULT'					=> 'ตั้งเป็นกลุ่มเริ่มต้นสำหรับสมาชิก',
	'GROUP_DEFS_UPDATED'			=> 'กลุ่มเริ่มต้นสำหรับสมาชิกที่เลือกทั้งหมด',
	'GROUP_DELETE'					=> 'ลบสมาชิกจากกลุ่ม',
	'GROUP_DELETED'					=> 'ลบกลุ่มและตั้งค่าเริ่มต้นกลุ่มสำเร็จ',
	'GROUP_DEMOTE'					=> 'ลดระดับผู้นำกลุ่ม',
	'GROUP_DESC'					=> 'คำอธิบายกลุ่ม',
	'GROUP_DETAILS'					=> 'รายละเอียดกลุ่ม',
	'GROUP_EDIT_EXPLAIN'			=> 'คุณสามารถแก้ไขกลุ่มที่มีอยุ่ คุณสามารถเปลี่ยนชื่อ, คำอธิบายและประเภท (เปิด, ปิด, และอื่นๆ) คุณสามารถตั้งค่าตัวเลือกของกลุ่ม เช่น สี อันดับ และอื่นๆ ความเปลี่ยนแปลงที่นี่จะทับค่าเดิม โปรดทราบว่าสมาชิกสามารถตั้งค่าภาพประจำกลุ่มได้ ถ้าคุณตั้งการอนุญาตไม่ดีพอ',
	'GROUP_ERR_USERS_EXIST'			=> 'ผู้ใช้ที่ระบุอยู่ในกลุ่มแล้ว',
	'GROUP_FOUNDER_MANAGE'			=> 'ผู้ก่อตั้งจัดการเท่านั้น',
	'GROUP_FOUNDER_MANAGE_EXPLAIN'	=> 'จำกัดการจัดการให้กับกลุ่มของผู้ก่อตั้งเท่านั้น',
	'GROUP_HIDDEN'					=> 'ซ่อน',
	'GROUP_LANG'					=> 'ภาษากลุ่ม',
	'GROUP_LEAD'					=> 'ผู้นำกลุ่ม',
	'GROUP_LEADERS_ADDED'			=> 'เพิ่มผู้นำกลุ่มสำเร็จ',
	'GROUP_LEGEND'					=> 'แสดงคำบรรยายกลุ่ม',
	'GROUP_LIST'					=> 'สมาชิกปัจจุบัน',
	'GROUP_LIST_EXPLAIN'			=> 'นี่คือรายชื่อทั้งหมดของผู้ใช้ปัจจุบันที่เป็นสมาชิกกลุ่ม คุณสามารถลบ หรือเพิ่มสมาชิกได้',
	'GROUP_MEMBERS'					=> 'กลุ่มสมาชิก',
	'GROUP_MEMBERS_EXPLAIN'			=> 'นี่คือรายชื่อทั้งหมดของสมาชิกของกลุ่มนี้ คุณสามารถจัดการ ความเป็นสมาชิกของกลุ่มและบทบาท',
	'GROUP_MESSAGE_LIMIT'			=> 'ข้อความส่วนตัวของกลุ่มต่อโฟลเดอร์',
	'GROUP_MESSAGE_LIMIT_EXPLAIN'	=> 'การตั้งค่านี้จะทับค่าของผู้ใช้ ตั้งค่า 0 หมายความว่าใช้ค่าเริ่มต้น',
	'GROUP_MODS_ADDED'				=> 'เพิ่มผู้นำกลุ่มใหม่สำเร็จ',
	'GROUP_MODS_DEMOTED'			=> 'ลดระดับผู้นำกลุ่มสำเร็จ',
	'GROUP_MODS_PROMOTED'			=> 'ยกระดับสมาชิกกลุ่มสำเร็จ',
	'GROUP_NAME'					=> 'ชื่อกลุ่ม',
	'GROUP_NAME_TAKEN'				=> 'ชื่อกลุ่มที่คุณกรอก มีคนอื่นใช้แล้ว โปรดระบุอย่างอื่น',
	'GROUP_OPEN'					=> 'เปิด',
	'GROUP_PENDING'					=> 'สมาชิกที่รอการอนุมัติ',
	'GROUP_MAX_RECIPIENTS'			=> 'จำนวนสูงสุดที่อนุญาตให้ใช้งาน ต่อผู้รับข้อความส่วนตัว',
	'GROUP_MAX_RECIPIENTS_EXPLAIN'	=> 'จำนวนสูงสุดที่อนุญาตในข้อความส่วนตัว ถ้ากำหนดเป็น 0 จะถือว่าไม่ได้กำหนดจำนวนสูงสุด.',	
	
	'GROUP_OPTIONS_SAVE'			=> 'Group wide options',

	'GROUP_PROMOTE'					=> 'ยกระดับเป็นผู้นำกลุ่ม',
	'GROUP_RANK'					=> 'อันดับกลุ่ม',
	'GROUP_RECEIVE_PM'				=> 'กลุ่มสามารถรับข้อความส่วนตัว',
	'GROUP_RECEIVE_PM_EXPLAIN'		=> 'โปรดทราบว่ากลุ่มที่ซ่อนอยู่ ไม่สามารถรับข้อความได้, โดยค่านี้ไม่มีผล',
	'GROUP_REQUEST'					=> 'ขอร้อง',
	'GROUP_SETTINGS_SAVE'			=> 'การตั้งค่ากลุ่ม',
	'GROUP_TYPE'					=> 'ประเภทกลุ่ม',

	'GROUP_SKIP_AUTH'				=> 'ผู้นำกลุ่มได้รับการยกเว้นจากสิทธิ',
	'GROUP_SKIP_AUTH_EXPLAIN'		=> 'ถ้าเปิดใช้งานผู้นำกลุ่ม ไม่ได้รับการถ่ายทอดสิทธิจากกลุ่ม.',
	
	'GROUP_TYPE_EXPLAIN'			=> 'ค่านี้กำหนดว่าใครสามารถเข้าร่วมหรือดูกลุ่มนี้',
	'GROUP_UPDATED'					=> 'อัพเดทค่าความชอบของกลุ่มสำเร็จ',
	
	'GROUP_USERS_ADDED'				=> 'เพิ่มผู้ใช้ในกลุ่มสำเร็จ',
	'GROUP_USERS_EXIST'				=> 'ผู้ใช้ที่เลือกเป็นสมาชิกอยู่แล้วสมาชิก',
	'GROUP_USERS_REMOVE'			=> 'ลบผู้ใช้จากกลุ่ม และตั้งค่าเริ่มต้นสำเร็จ',

	'MAKE_DEFAULT_FOR_ALL'	=> 'ตั้งค่าเริ่มต้นกลุ่มให้กับสมาชิกทุกคน',
	'MEMBERS'				=> 'สมาชิก',

	'NO_GROUP'					=> 'ไม่มีการระบุกลุ่ม',
	'NO_GROUPS_CREATED'			=> 'กลุ่มยังไม่ถูกสร้าง',
	'NO_PERMISSIONS'			=> 'ไม่คัดลอกการอนุญาต',
	'NO_USERS'					=> 'คุณยังไม่ได้กรอกผู้ใช้ใดๆ',

	'NO_USERS_ADDED'			=> 'ไม่มีการเพิ่ม User ในกลุ่มนี้.',
	'NO_VALID_USERS'			=> 'ไม่ได้เลือก user ในการการทำคำสั่งนี้.',

	'SPECIAL_GROUPS'			=> 'กลุ่มที่กำหนดไว้',
	'SPECIAL_GROUPS_EXPLAIN'	=> 'กลุ่มนี้ไม่สามารถลบหรือแก้ไขได้โดยตรง อย่างไรก็ตามคุณสามารถเพิ่มผู้ใช้และปรับแต่งค่าพื้นฐานได้',

	'TOTAL_MEMBERS'				=> 'สมาชิก',

	'USERS_APPROVED'				=> 'อนุมัติผู้ใช้สำเร็จ',
	'USER_DEFAULT'					=> 'ค่าเริ่มต้นผู้ใช้',
	'USER_DEF_GROUPS'				=> 'กลุ่มที่ผู้ใช้กำหนด',
	'USER_DEF_GROUPS_EXPLAIN'		=> 'นี้คือกลุ่มที่สร้างโดยคุณหรือผู้ดูแลระบบคนอื่น คุณสามารถจัดการสมาชิกและแก้ไขคุณสมบัติกลุ่ม หรือแม้แต่ลบกลุ่มได้',
	'USER_GROUP_DEFAULT'			=> 'ตั้งเป็นค่าเริ่มต้นกลุ่ม',
	'USER_GROUP_DEFAULT_EXPLAIN'	=> 'ตั้งค่าเป็น yes เพื่อตั้งค่ากลุ่มนี้ให้เป็นค่าเริ่มต้นกลุ่มผู้ใช้ที่เพิ่มใหม่',
	'USER_GROUP_LEADER'				=> 'ตั้งค่าผู้นำกลุ่ม',
));

?>