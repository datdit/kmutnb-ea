<?php
/**
*
* viewforum.php [Thai]
*
* @package language
* @version $Id: $
* @copyright (c) 2008 phpBB Group
* @author 2008-06-26 - phpBBThailand.com
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
	'ACTIVE_TOPICS'	=> 'กระทู้ที่ยังถูกใช้งาน',
	'ANNOUNCEMENTS'	=> 'ประกาศ',
	'FORUM_PERMISSIONS'	=> 'การอนุญาตของคุณในบอร์ดนี้',
	'ICON_ANNOUNCEMENT'	=> 'ประกาศ',
	'ICON_STICKY'	=> 'ปักหมุด',
	'LOGIN_NOTIFY_FORUM'	=> 'คุณได้รับแจ้งจาก Topic นี้ให้ login ก่อนจึงจะสามารถเข้าใช้งานได้',
	'MARK_TOPICS_READ'	=> 'บันทึกว่าอ่านทุกหัวข้อแล้ว',
	'NEW_POSTS_HOT'	=> 'โพสต์ใหม่ [ ยอดฮิต ]',
	'NEW_POSTS_LOCKED'	=> 'โพสต์ใหม่ [ ปิดหัวข้อ ]',
	'NO_NEW_POSTS_HOT'	=> 'ไม่มีโพสต์ใหม่ [ ยอดฮิต ]',
	'NO_NEW_POSTS_LOCKED'	=> 'ไม่มีโพสต์ใหม่ [ ปิดหัวข้อ ]',
	'NO_READ_ACCESS'	=> 'บอร์ดนี้สงวนสิททิ์ให้เฉพาะสมาชิกเท่านั้น กรุณาสมัครสมาชิกและเข้าสู่ระบบ !',
	'NO_UNREAD_POSTS_HOT'		=> 'ไม่มีโพสต์ที่ยังไม่อ่าน [ เป็นที่นิยม ]',
	'NO_UNREAD_POSTS_LOCKED'	=> 'ไม่มีโพสต์ที่ยังไม่อ่าน [ ล็อก ]',	
	'POST_FORUM_LOCKED'	=> 'บอร์ดนี้ถูกล็อกไว้',
	'TOPICS_MARKED'	=> 'บันทึกว่าอ่านทุกหัวข้อแล้ว',
	'UNREAD_POSTS_HOT'		=> 'โพสต์ที่ยังไม่ได้อ่าน [ เป็นที่นิยม ]',
	'UNREAD_POSTS_LOCKED'	=> 'โพสต์ที่ยังไม่ได้อ่าน [ ล็อก ]',	
	'VIEW_FORUM'	=> 'บอร์ด',
	'VIEW_FORUM_TOPIC'	=> '1 หัวข้อ',
	'VIEW_FORUM_TOPICS'	=> '%d หัวข้อ',
));

?>