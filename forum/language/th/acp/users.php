<?php
/** 
* ภาษาไทย เวอร์ชั่น 1.3.0 
* 27/08/2555  
* ไฟล์ภาษาไทยสำหรับ PHPBB3 โดย www.mindphp.com และ www.phpbbthailand.com
*
*/ 


/**
*
* acp_users [English]
*
* @package language
* @version $Id: users.php,v 1.32 2007/10/08 14:38:26 acydburn Exp $
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
	'ADMIN_SIG_PREVIEW'		=> 'ดูลายเซ็นต์',
	'AT_LEAST_ONE_FOUNDER'	=> 'คุณไม่สามารถเปลี่ยนผู้ก่อตั้งนี้เป็นผู้ใช้ทั่วไปได้ ต้องมีผู้ก่อตั้งอย่างน้อยหนึ่งคนเพื่อใช่งานบอร์ด ถ้าคุณต้องการเปลี่ยนสถานะของผู้ก่อตั้งคนนี้ คุณต้องตั้งผู้ใช้คนอื่นเป็นผู้ก่อตั้งก่อน',

	'BAN_ALREADY_ENTERED'	=> 'แบนที่กรอกมีอยู่แล้ว รายการแบน ไม่ถูกอัพเดท',
	'BAN_SUCCESSFUL'		=> 'กรอกการแบนสำเร็จ',
	'CANNOT_BAN_ANONYMOUS'			=> 'คุณไม่สามารถแบนบัญชีไม่ระบุชื่อ. การกำหนดสิทธิ์สำหรับผู้ใช้ที่ไม่ระบุชื่อสามารถตั้งค่าในแท็บ การอนุญาต.',
	'CANNOT_BAN_FOUNDER'			=> 'คุณไม่ได้รับอนุญาตให้แบนผู้ก่อตั้ง',
	'CANNOT_BAN_YOURSELF'			=> 'คุณไม่ได้รับอนุญาตให้แบนตัวเอง',
	'CANNOT_DEACTIVATE_BOT'			=> 'คุณไม่ได้รับอนุญาตให้ยกเลิกบัญชี bot โปรดยกเลิกตัว bot แทน',
	'CANNOT_DEACTIVATE_FOUNDER'		=> 'คุณไม่ได้รับอนุญาตให้ยกเลิกบัญชีผู้ก่อตั้ง',
	'CANNOT_DEACTIVATE_YOURSELF'	=> 'คุณไม่ได้รับอนุญาตให้ยกเลิกบัญชีตัวเอง',
	'CANNOT_FORCE_REACT_BOT'		=> 'คุณไม่ได้รับอนุญาตให้บังคับการเรียกบัญชี bot กลับมาใช้งานใหม่ โปรดยกเลิกตัว bot แทน',
	'CANNOT_FORCE_REACT_FOUNDER'	=> 'คุณไม่ได้รับอนุญาตให้บังคับการเรียกบัญชีผู้ก่อตั้งกลับมาใช้งานใหม่',
	'CANNOT_FORCE_REACT_YOURSELF'	=> 'คุณไม่ได้รับอนุญาตให้บังคับการเรียกบัญชีตัวเองกลับมาใช้งานใหม่',
	'CANNOT_REMOVE_ANONYMOUS'		=> 'คุณไม่สามารถลบบัญชีแขกผู้เยี่ยมชม',
	'CANNOT_REMOVE_YOURSELF'		=> 'คุณไม่ได้รับอนุญาตให้ลบบัญชีตัวเอง',
	'CANNOT_SET_FOUNDER_IGNORED'	=> 'คุณไม่สามารถยกระดับผู้ใช้ที่ถูกละเลยให้เป็นผู้ก่อตั้ง',
	'CANNOT_SET_FOUNDER_INACTIVE'	=> 'คุณต้องทำให้ผู้ใช้ใช้งานได้ก่อนที่จะยกระดับให้เป็นผู้ก่อตั้ง',
	'CONFIRM_EMAIL_EXPLAIN'			=> 'คุณต้องระบุค่านี้เมื่อคุณกำลังจะเปลี่ยน e-mail address ผู้ใช้',

	'DELETE_POSTS'			=> 'ลบโพสต์',
	'DELETE_USER'			=> 'ลบผู้ใช้',
	'DELETE_USER_EXPLAIN'	=> 'โปรดทราบว่าการลบผู้ใช้ ไม่สามารถเรียกกลับคืนได้ ข้อความส่วนตัวที่ผู้ใช้ส่งให้ผู้อื่นและยังไม่ได้เปิดอ่านจะถูกลบและไม่ไปถึงผู้รับ',

	'FORCE_REACTIVATION_SUCCESS'	=> 'บังคับการเรียกกลับมาใช้ใหม่สำเร็จ',
	'FOUNDER'						=> 'ผู้ก่อตั้ง',
	'FOUNDER_EXPLAIN'				=> 'ผู้ก่อตั้งมีสิทธิ์การดูแลระบบทุกอย่างและไม่สามารถโดนแบน ลบ หรือแก้ไขโดยผู้ใช้ที่ไม่ใช่ผู้ก่อตั้งได้',

	'GROUP_APPROVE'					=> 'อนุมัติสมาชิก',
	'GROUP_DEFAULT'					=> 'ตั้งค่ากลุ่มเริ่มต้นสำหรับสมาชิก',
	'GROUP_DELETE'					=> 'ลบสมาชิกจากกลุ่ม',
	'GROUP_DEMOTE'					=> 'ลดระดับผู้นำกลุ่ม',
	'GROUP_PROMOTE'					=> 'ยกระดับให้เป็นผู้นำกลุ่ม',

	'IP_WHOIS_FOR'			=> 'IP whois สำหรับ %s',

	'LAST_ACTIVE'			=> 'เวลาเข้าใช้ล่าสุด',

	'MOVE_POSTS_EXPLAIN'	=> 'กรุณาเลือก forum ที่คุณต้องการจะย้ายโพสต์ทั้งหมดที่ผู้ใช้คนนี้ได้กระทำไป',

	'NO_SPECIAL_RANK'		=> 'ไม่มีการกำหนดอันดับพิเศษ',

	'NO_WARNINGS'			=> 'ไม่มีคำเตือน.',
	
	'NOT_MANAGE_FOUNDER'	=> 'ผู้ก่อตั้งเท่านั้นที่สามารถจัดการสถานะของผู้ก่อตั้งด้วยกันเอง',

	'QUICK_TOOLS'			=> 'เครื่องมือลัด',

	'REGISTERED'			=> 'ลงทะเบียนแล้ว',
	'REGISTERED_IP'			=> 'ลงทะเบียนจาก IP',
	'RETAIN_POSTS'			=> 'เก็บโพสต์ไว้',

	'SELECT_FORM'			=> 'เลือกฟอร์ม',
	'SELECT_USER'			=> 'เลือกผู้ใช้',

	'USER_ADMIN'					=> 'การดูแลผู้ใช้',
	'USER_ADMIN_ACTIVATE'			=> 'ทำให้บัญชีใช้การได้',
	'USER_ADMIN_ACTIVATED'			=> 'ทำให้ผู้ใช้ใช้การได้สำเร็จ.',
	'USER_ADMIN_AVATAR_REMOVED'		=> 'ลบภาพประจำตัวจากบัญชีผู้ใช้สำเร็จ',
	'USER_ADMIN_BAN_EMAIL'			=> 'แบนโดย e-mail',
	'USER_ADMIN_BAN_EMAIL_REASON'	=> 'E-mail address ถูกแบนผ่านการจัดการผู้ใช้',
	'USER_ADMIN_BAN_IP'				=> 'แบนโดย IP',
	'USER_ADMIN_BAN_IP_REASON'		=> 'IP ถูกแบนผ่านการจัดการผู้ใช้',
	'USER_ADMIN_BAN_NAME_REASON'	=> 'ชื่อผู้ใช้ถูกแบนผ่านการจัดการผู้ใช้',
	'USER_ADMIN_BAN_USER'			=> 'แบนโดยชื่อผู้ใช้',
	'USER_ADMIN_DEACTIVATE'			=> 'ยกเลิกบัญชี',
	'USER_ADMIN_DEACTIVED'			=> 'ยกเลิกผู้ใช้สำเร็จ',
	'USER_ADMIN_DEL_ATTACH'			=> 'ลบไฟล์แนบทั้งหมด',
	'USER_ADMIN_DEL_AVATAR'			=> 'ลบภาพประจำตัว',

	'USER_ADMIN_DEL_OUTBOX'			=> 'ไม่มี PM ในกล่องขาออก',
	
	'USER_ADMIN_DEL_POSTS'			=> 'ลบโพสต์ทั้งหมด',
	'USER_ADMIN_DEL_SIG'			=> 'ลบลายเซ็นต์',
	'USER_ADMIN_EXPLAIN'			=> 'คุณสามารถเปลี่ยนข้อมูลผู้ใช้และตัวเลือกต่างๆได้',
	'USER_ADMIN_FORCE'				=> 'บังคับการเรียกกลับมาใช้ใหม่',

	'USER_ADMIN_LEAVE_NR'			=> 'ลบออกจากสมาชิืกลงทะเบียนใหม่',
	
	'USER_ADMIN_MOVE_POSTS'			=> 'ย้ายโพสต์ทั้งหมด',
	'USER_ADMIN_SIG_REMOVED'		=> 'ลบลายเซ็นต์จากบัญชีผู้ใช้เรียบร้อยแล้ว',
	'USER_ATTACHMENTS_REMOVED'		=> 'ลบไฟล์แนบทั้งหมดข้อสมาชิกคนนี้สำเร็จ',

	'USER_AVATAR_NOT_ALLOWED'		=> 'ภาพประจำตัวไม่สามารถแสดงได้ เพราะว่าภาพประจำตัวถูกปิดการใช้งาน',
	
	'USER_AVATAR_UPDATED'			=> 'อัพเดทรายละเอียดภาพประจำตัวผู้ใช้สำเร็จ',

	'USER_AVATAR_TYPE_NOT_ALLOWED'	=> 'ภาพประจำตัวปัจจุบันไม่สามารถแสดงผลได้ เพราะว่าชนิดของภาพประจำตัวถูกปิดการใช้งาน.',
	
	'USER_CUSTOM_PROFILE_FIELDS'	=> 'ฟิลด์ประวัติผู้ใช้ที่กำหนดเอง',
	'USER_DELETED'					=> 'ลบผู้ใช้สำเร็จ',
	'USER_GROUP_ADD'				=> 'เพิ่มผู้ใช้เข้ากลุ่ม',
	'USER_GROUP_NORMAL'				=> 'กลุ่มที่ผู้ใช้กำหนดเป็นสมาชิกของ',
	'USER_GROUP_PENDING'			=> 'กลุ่มผู้ใช้อยู่ในโหมดที่ยังไม่เรียบร้อย',
	'USER_GROUP_SPECIAL'			=> 'กลุ่มที่กำหนดไว้แล้วเป็นสมาชิกของ',

	'USER_LIFTED_NR'				=> 'ลบสถานะของสมาชิกเพิ่งสมัครใหม่สำเร็จ.',
	
	'USER_NO_ATTACHMENTS'			=> 'ไม่มีไฟล์แนบที่จะนำมาแสดง',
        'USER_NO_POSTS_TO_DELETE'			=> 'ผู้ใช้ไม่มีโพสที่จะให้ยึดไว้หรือลบ.',

	
	'USER_OUTBOX_EMPTIED'			=> 'ทำให้กล่องส่งออกว่างสำเร็จแล้ว.',
	'USER_OUTBOX_EMPTY'				=> 'กล่องส่งออกยังว่างอยู่.',
	
	'USER_OVERVIEW_UPDATED'			=> 'อัพเดทรายละเอียดผู้ใช้ เรียบร้อยแล้ว',
	'USER_POSTS_DELETED'			=> 'ลบโพสต์ที่เกิดจากผู้ใช้คนนี้สำเร็จ',
	'USER_POSTS_MOVED'				=> 'ย้ายโพสต์ของผู้ใช้ไปที่บอร์ดเป้าหมาย เรียบร้อยแล้ว',
	'USER_PREFS_UPDATED'			=> 'อัพเดทค่าความชอบของผู้ใช้',
	'USER_PROFILE'					=> 'ประวัติผู้ใช้',
	'USER_PROFILE_UPDATED'			=> 'อัพเดทประวัติผู้ใช้',
	'USER_RANK'						=> 'อันดับผู้ใช้',
	'USER_RANK_UPDATED'				=> 'อัพเดทอันดับผู้ใช้',
	'USER_SIG_UPDATED'				=> 'อัพเดทลายเซ็นต์ผู้ใช้ เรียบร้อยแล้ว',

	'USER_WARNING_LOG_DELETED'		=> 'ไม่มีข้อมูล. Log ถูกลบแล้ว.',
	
	'USER_TOOLS'					=> 'เครื่องมือพื้นฐาน',
));

?>