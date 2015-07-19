<?php
/** 
* ภาษาไทย เวอร์ชั่น 1.1.0 
* 05/06/2551 
* ไฟล์ภาษาไทยสำหรับ PHPBB3 โดย www.mindphp.com และ www.phpbbthailand.com
*
*/ 


/**
* acp_permissions (phpBB Permission Set) [English]
*
* @package language
* @version $Id: permissions_phpbb.php,v 1.29 2007/10/04 15:07:24 acydburn Exp $
* @copyright (c) 2005 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
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

/**
*	MODDERS PLEASE NOTE
*	
*	You are able to put your permission sets into a separate file too by
*	prefixing the new file with permissions_ and putting it into the acp
*	language folder.
*
*	An example of how the file could look like:
*
*	<code>
*
*	if (empty($lang) || !is_array($lang))
*	{
*		$lang = array();
*	}
*
*	// Adding new category
*	$lang['permission_cat']['bugs'] = 'Bugs';
*
*	// Adding new permission set
*	$lang['permission_type']['bug_'] = 'Bug Permissions';
*
*	// Adding the permissions
*	$lang = array_merge($lang, array(
*		'acl_bug_view'		=> array('lang' => 'Can view bug reports', 'cat' => 'bugs'),
*		'acl_bug_post'		=> array('lang' => 'Can post bugs', 'cat' => 'post'), // Using a phpBB category here
*	));
*
*	</code>
*/

// Define categories and permission types
$lang = array_merge($lang, array(
	'permission_cat'	=> array(
		'actions'		=> 'การกระทำ',
		'content'		=> 'เนื้อหา',
		'forums'		=> 'ฟอรั่ม',
		'misc'			=> 'เบ็ดเตล็ด',
		'permissions'	=> 'การอนุญาต',
		'pm'			=> 'ข้อความส่วนตัว',
		'polls'			=> 'แบบสำรวจ',
		'post'			=> 'โพสต์',
		'post_actions'	=> 'จัดการโพสต์',
		'posting'		=> 'การโพสต์',
		'profile'		=> 'ข้อมูลส่วนตัว',
		'settings'		=> 'การตั้งค่าต่างๆ',
		'topic_actions'	=> 'จัดการกระทู้',
		'user_group'	=> 'ผู้่ใช้ &amp; กลุ่ม',
	),

	// With defining 'global' here we are able to specify what is printed out if the permission is within the global scope.
	'permission_type'	=> array(
    'u_'			=> 'การอนุญาตผู้ใช้',
		'a_'			=> 'การอนุญาตผู้ดูแลระบบ',
		'm_'			=> 'การอนุญาตผู้จัดการบอร์ด',
		'f_'			=> 'การอนุญาต Forum',
		'global'		=> array(
			'm_'			=> 'การอนุญาตผู้จัดการบอร์ดทั่วไป',
		),
	),
));

// User Permissions
$lang = array_merge($lang, array(
	'acl_u_viewprofile'	=> array('lang' => 'สามารถดู โพรไฟล์, รายชื่อสมาชิก และ ผู้ที่ออนไลน์', 'cat' => 'profile'),
	'acl_u_chgname'		=> array('lang' => 'สามารถเปลี่ยนชื่อผู้ใช้', 'cat' => 'profile'),
	'acl_u_chgpasswd'	=> array('lang' => 'สามารถเปลี่ยนรหัสผ่าน', 'cat' => 'profile'),
	'acl_u_chgemail'	=> array('lang' => 'สามารถเปลี่ยนอีเมล', 'cat' => 'profile'),
	'acl_u_chgavatar'	=> array('lang' => 'สามารถเปลี่ยนภาพประจำตัว', 'cat' => 'profile'),
	'acl_u_chggrp'		=> array('lang' => 'สามารถเปลี่ยนกลุ่มผู้ใช้เริ่มต้น', 'cat' => 'profile'),

	'acl_u_attach'		=> array('lang' => 'สามารถแนบไฟล์', 'cat' => 'post'),
	'acl_u_download'	=> array('lang' => 'สามารถดาวน์โหลดไฟล์', 'cat' => 'post'),
	'acl_u_savedrafts'	=> array('lang' => 'สามารถใช้บันทึกร่าง', 'cat' => 'post'),
	'acl_u_chgcensors'	=> array('lang' => 'สามารถยกเลิกการกรองคำหยาบ', 'cat' => 'post'),
	'acl_u_sig'			=> array('lang' => 'สามารถใช้ลายเซ็นต์', 'cat' => 'post'),

	'acl_u_sendpm'		=> array('lang' => 'สามารถส่งข้อความส่วนตัว', 'cat' => 'pm'),
	'acl_u_masspm'		=> array('lang' => 'สามารถส่งข้อความส่วนตัวไปถึงผู้ใช้และกลุ่มได้', 'cat' => 'pm'),
	'acl_u_masspm_group'=> array('lang' => 'สามารถส่งข้อความไปยังกลุ่มได้', 'cat' => 'pm'),	
	'acl_u_readpm'		=> array('lang' => 'สามารถอ่านข้อความส่วนตัว', 'cat' => 'pm'),
	'acl_u_pm_edit'		=> array('lang' => 'สามารถแก้ไขข้อความส่วนตัว', 'cat' => 'pm'),
	'acl_u_pm_delete'	=> array('lang' => 'สามารถลบข้อความส่วนตัวจากโฟลเดอร์', 'cat' => 'pm'),
	'acl_u_pm_forward'	=> array('lang' => 'สามารถส่งต่อข้อความส่วนตัว', 'cat' => 'pm'),
	'acl_u_pm_emailpm'	=> array('lang' => 'สามารถ อีเมล ข้อความส่วนตัว', 'cat' => 'pm'),
	'acl_u_pm_printpm'	=> array('lang' => 'สามารถพิมพ์ข้อความส่วนตัว', 'cat' => 'pm'),
	'acl_u_pm_attach'	=> array('lang' => 'สามารถแนบไฟล์ในข้อความส่วนตัว', 'cat' => 'pm'),
	'acl_u_pm_download'	=> array('lang' => 'สามารถดาวน์โหลดไฟล์ในข้อความส่วนตัว', 'cat' => 'pm'),
/*	
	'acl_u_pm_bbcode'	=> array('lang' => 'สามารถโพสต์ BBCode ในข้อความส่วนตัว', 'cat' => 'pm'),
	'acl_u_pm_smilies'	=> array('lang' => 'สามารถโพสต์ smilies ในข้อความส่วนตัว', 'cat' => 'pm'),
	'acl_u_pm_img'		=> array('lang' => 'สามารถโพสต์ images ในข้อความส่วนตัว', 'cat' => 'pm'),
	'acl_u_pm_flash'	=> array('lang' => 'สามารถโพสต์ Flashในข้อความส่วนตัว', 'cat' => 'pm'),
*/
	'acl_u_pm_bbcode'	=> array('lang' => 'สามารถใช้ BBCode ในข้อความส่วนตัว', 'cat' => 'pm'),
	'acl_u_pm_smilies'	=> array('lang' => 'สามารถใช้ แสดงอารมณ์ ในข้อความส่วนตัว', 'cat' => 'pm'),
	'acl_u_pm_img'		=> array('lang' => 'สามารถใช้ BBCode [img]  ในข้อความส่วนตัว', 'cat' => 'pm'),
	'acl_u_pm_flash'	=> array('lang' => 'สามารถใช้ BBCode [flash]  ในข้อความส่วนตัว', 'cat' => 'pm'),

	'acl_u_sendemail'	=> array('lang' => 'สามารถส่งอีเมล', 'cat' => 'misc'),
	'acl_u_sendim'		=> array('lang' => 'สามารถส่ง instant messages', 'cat' => 'misc'),
	'acl_u_ignoreflood'	=> array('lang' => 'สามารถละเลย flood limit', 'cat' => 'misc'),
	'acl_u_hideonline'	=> array('lang' => 'สามารถซ่อนสถานะการออนไลน์', 'cat' => 'misc'),
	'acl_u_viewonline'	=> array('lang' => 'สามารถดูผู้ใช้ที่กำลังออนไลน์แต่ซ่อนอยู่', 'cat' => 'misc'),
	'acl_u_search'		=> array('lang' => 'สามารถค้นหาบอร์ด', 'cat' => 'misc'),
));

// Forum Permissions
$lang = array_merge($lang, array(
	'acl_f_list'		=> array('lang' => 'สามารถเห็นบอร์ด', 'cat' => 'post'),
	'acl_f_read'		=> array('lang' => 'สามารถอ่านบอร์ด', 'cat' => 'post'),
	'acl_f_post'		=> array('lang' => 'สามารถเริ่มกระทู้ใหม่', 'cat' => 'post'),
	'acl_f_reply'		=> array('lang' => 'สามารถตอบกระทู้', 'cat' => 'post'),
	'acl_f_icons'		=> array('lang' => 'สามารถใช้ไอคอนใน กระทู้/โพสต์', 'cat' => 'post'),
	'acl_f_announce'	=> array('lang' => 'สามารถโพสต์ประกาศ', 'cat' => 'post'),
	'acl_f_sticky'		=> array('lang' => 'สามารถโพสต์ปักหมุด', 'cat' => 'post'),

	'acl_f_poll'		=> array('lang' => 'สามารถสร้างแบบสำรวจ', 'cat' => 'polls'),
	'acl_f_vote'		=> array('lang' => 'สามารถโหวตในแบบสำรวจ', 'cat' => 'polls'),
	'acl_f_votechg'		=> array('lang' => 'สามารถเปลี่ยนโหวตที่มีอยู่', 'cat' => 'polls'),

	'acl_f_attach'		=> array('lang' => 'สามารถแนบไฟล์', 'cat' => 'content'),
	'acl_f_download'	=> array('lang' => 'สามารถดาวน์โหลดไฟล์', 'cat' => 'content'),
	'acl_f_sigs'		=> array('lang' => 'สามารถใช้ลายเซ็นต์', 'cat' => 'content'),
/*	
	'acl_f_bbcode'		=> array('lang' => 'สามารถโพส BBCode', 'cat' => 'content'),
	'acl_f_smilies'		=> array('lang' => 'สามารถโพส smilies', 'cat' => 'content'),
	'acl_f_img'			=> array('lang' => 'สามารถโพส images', 'cat' => 'content'),
	'acl_f_flash'		=> array('lang' => 'สามารถโพส Flash', 'cat' => 'content'),
*/
	'acl_f_bbcode'		=> array('lang' => 'สามารถใช้ BBCode', 'cat' => 'content'),
	'acl_f_smilies'		=> array('lang' => 'สามารถใช้รูปแสดงอารมณ์', 'cat' => 'content'),
	'acl_f_img'			=> array('lang' => 'สามารถใช้ BBCode [img] ', 'cat' => 'content'),
	'acl_f_flash'		=> array('lang' => 'สามารถใช้ BBCode [flash] ', 'cat' => 'content'),

	'acl_f_edit'		=> array('lang' => 'สามารถแก้ไขโพสต์ของตัวเอง', 'cat' => 'actions'),
	'acl_f_delete'		=> array('lang' => 'สามารถลบโพสต์ของตัวเอง', 'cat' => 'actions'),
	'acl_f_user_lock'	=> array('lang' => 'สามารถล็อกกระทู้', 'cat' => 'actions'),
	'acl_f_bump'		=> array('lang' => 'สามารถดันกระทู้', 'cat' => 'actions'),
	'acl_f_report'		=> array('lang' => 'สามารถรายงานโพสต์', 'cat' => 'actions'),
	'acl_f_subscribe'	=> array('lang' => 'สามารถสมัครบอร์ด', 'cat' => 'actions'),
	'acl_f_print'		=> array('lang' => 'สามารถพิมพ์กระทู้', 'cat' => 'actions'),
	'acl_f_email'		=> array('lang' => 'สามารถ อีเมล กระทู้', 'cat' => 'actions'),

	'acl_f_search'		=> array('lang' => 'สามารถค้นหาบอร์ด', 'cat' => 'misc'),
	'acl_f_ignoreflood' => array('lang' => 'สามารถละเลย flood limit', 'cat' => 'misc'),
	'acl_f_postcount'	=> array('lang' => 'เพิ่มตัวนับโพสต์<br /><em>การตั้งค่านี้จะมีผลกับโพสต์ใหม่เท่านั้น</em>', 'cat' => 'misc'),
	'acl_f_noapprove'	=> array('lang' => 'สามารถโพสต์โดยไม่ต้องรอการอนุมัติ', 'cat' => 'misc'),
));

// Moderator Permissions
$lang = array_merge($lang, array(
	'acl_m_edit'		=> array('lang' => 'สามารถแก้ไข', 'cat' => 'post_actions'),
	'acl_m_delete'		=> array('lang' => 'สามารถลบโพสต์', 'cat' => 'post_actions'),
	'acl_m_approve'		=> array('lang' => 'สามารถอนุมัติโพสต์', 'cat' => 'post_actions'),
	'acl_m_report'		=> array('lang' => 'สามารถปิดและลบรายงาน', 'cat' => 'post_actions'),
	'acl_m_chgposter'	=> array('lang' => 'สามารถเปลี่ยนเจ้าของโพสต์ ', 'cat' => 'post_actions'),

	'acl_m_move'	=> array('lang' => 'สามารถย้ายกระทู้', 'cat' => 'topic_actions'),
	'acl_m_lock'	=> array('lang' => 'สามารถล็อกกระทู้', 'cat' => 'topic_actions'),
	'acl_m_split'	=> array('lang' => 'สามารถแยกกระทู้', 'cat' => 'topic_actions'),
	'acl_m_merge'	=> array('lang' => 'สามารถรวมกระทู้', 'cat' => 'topic_actions'),

	'acl_m_info'	=> array('lang' => 'สามารถดูรายละเอียดโพสต์', 'cat' => 'misc'),
	'acl_m_warn'	=> array('lang' => 'สามารถเตือน<br /><em>การตั้งค่านี้จะกระทบทั้งหมดไม่ได้ขึ้นอยู่กับบอร์ดใดบอร์ดหนึ่ง</em>', 'cat' => 'misc'), // This moderator setting is only global (and not local)
	'acl_m_ban'		=> array('lang' => 'สามารถจัดการแบน<br /><em>การตั้งค่านี้จะกระทบทั้งหมดไม่ได้ขึ้นอยู่กับบอร์ดใดบอร์ดหนึ่ง</em>', 'cat' => 'misc'), // This moderator setting is only global (and not local)
));

// Admin Permissions
$lang = array_merge($lang, array(
	'acl_a_board'		=> array('lang' => 'สามารถปรับเปลี่ยนการตั้งค่าบอร์ด/ตรวจสอบการอัพเดท', 'cat' => 'settings'),
	'acl_a_server'		=> array('lang' => 'สามารถปรับเปลี่ยน server/communication settings', 'cat' => 'settings'),
	'acl_a_jabber'		=> array('lang' => 'สามารถปรับเปลี่ยน Jabber settings', 'cat' => 'settings'),
	'acl_a_phpinfo'		=> array('lang' => 'สามารถดูการตั้งค่า php', 'cat' => 'settings'),

	'acl_a_forum'		=> array('lang' => 'สามารถจัดการบอร์ด', 'cat' => 'forums'),
	'acl_a_forumadd'	=> array('lang' => 'สามารถเพิ่มบอร์ดใหม่', 'cat' => 'forums'),
	'acl_a_forumdel'	=> array('lang' => 'สามารถลบบอร์ด', 'cat' => 'forums'),
	'acl_a_prune'		=> array('lang' => 'สามารถตัดแต่งบอร์ด', 'cat' => 'forums'),

	'acl_a_icons'		=> array('lang' => 'สามารถปรับเปลี่ยนไอคอนและ smilies ของกระทู้/โพสต์', 'cat' => 'posting'),
	'acl_a_words'		=> array('lang' => 'สามารถปรับเปลี่ยนการกรองคำหยาบ', 'cat' => 'posting'),
	'acl_a_bbcode'		=> array('lang' => 'สามารถนิยาม BBCode tags', 'cat' => 'posting'),
	'acl_a_attach'		=> array('lang' => 'สามารถปรับเปลี่ยนการตั้งค่าไฟล์แนบที่เกี่ยวข้องได้', 'cat' => 'posting'),

	'acl_a_user'		=> array('lang' => 'สามารถจัดการผู้ใช้<br /><em>ค่านี้ทำให้เห็นผู้ใช้ที่อยู่ในรายการมุมมองออนไลน์</em>', 'cat' => 'user_group'),
	'acl_a_userdel'		=> array('lang' => 'สามารถลบ/ตัดแต่งผู้ใช้', 'cat' => 'user_group'),
	'acl_a_group'		=> array('lang' => 'สามารถจัดการกลุ่ม', 'cat' => 'user_group'),
	'acl_a_groupadd'	=> array('lang' => 'สามารถเพิ่มกลุ่มใหม่', 'cat' => 'user_group'),
	'acl_a_groupdel'	=> array('lang' => 'สามารถลบกลุ่ม', 'cat' => 'user_group'),
	'acl_a_ranks'		=> array('lang' => 'สามารถจัดการอันดับ', 'cat' => 'user_group'),
	'acl_a_profile'		=> array('lang' => 'สามารถจัดการ custom profile fields', 'cat' => 'user_group'),
	'acl_a_names'		=> array('lang' => 'สามารถจัดการชื่อที่ไม่อนุญาต', 'cat' => 'user_group'),
	'acl_a_ban'			=> array('lang' => 'สามารถจัดการแบน', 'cat' => 'user_group'),

	'acl_a_viewauth'	=> array('lang' => 'สามารถดู permission masks', 'cat' => 'permissions'),
	'acl_a_authgroups'	=> array('lang' => 'สามารถปรับเปลี่ยนการอนุญาตแต่ละ กลุ่ม', 'cat' => 'permissions'),
	'acl_a_authusers'	=> array('lang' => 'สามารถปรับเปลี่ยนการอนุญาตแต่ละ ผู้ใช้', 'cat' => 'permissions'),
	'acl_a_fauth'		=> array('lang' => 'สามารถปรับเปลี่ยน forum permission class', 'cat' => 'permissions'),
	'acl_a_mauth'		=> array('lang' => 'สามารถปรับเปลี่ยน moderator permission class', 'cat' => 'permissions'),
	'acl_a_aauth'		=> array('lang' => 'สามารถปรับเปลี่ยน admin permission class', 'cat' => 'permissions'),
	'acl_a_uauth'		=> array('lang' => 'สามารถปรับเปลี่ยน user permission class', 'cat' => 'permissions'),
	'acl_a_roles'		=> array('lang' => 'สามารถจัดการบทบาท', 'cat' => 'permissions'),
	'acl_a_switchperm'	=> array('lang' => 'สามารถใช้ others permissions', 'cat' => 'permissions'),

	'acl_a_styles'		=> array('lang' => 'สามารถจัดการรูปแบบ', 'cat' => 'misc'),
	'acl_a_viewlogs'	=> array('lang' => 'สามารถดู logs', 'cat' => 'misc'),
	'acl_a_clearlogs'	=> array('lang' => 'สามารถลบ logs', 'cat' => 'misc'),
	'acl_a_modules'		=> array('lang' => 'สามารถจัดการโมดูล', 'cat' => 'misc'),
	'acl_a_language'	=> array('lang' => 'สามารถจัดการ language packs', 'cat' => 'misc'),
	'acl_a_email'		=> array('lang' => 'สามารถส่งเมสส์เมล', 'cat' => 'misc'),
	'acl_a_bots'		=> array('lang' => 'สามารถจัดการ bots', 'cat' => 'misc'),
	'acl_a_reasons'		=> array('lang' => 'สามารถจัดการ report/denial reasons', 'cat' => 'misc'),
	'acl_a_backup'		=> array('lang' => 'สามารถ backup/restore ฐานข้อมูล', 'cat' => 'misc'),
	'acl_a_search'		=> array('lang' => 'สามารถจัดการและตั้งค่าการค้นหา backends', 'cat' => 'misc'),
));

?>