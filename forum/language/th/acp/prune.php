<?php
/** 
* ภาษาไทย เวอร์ชั่น 1.1.1 
* 09/12/2554 
* ไฟล์ภาษาไทยสำหรับ PHPBB3 โดย www.mindphp.com และ www.phpbbthailand.com
*
*/ 


/**
*
* acp_prune [English]
*
* @package language
* @version $Id: prune.php,v 1.14 2007/10/04 15:07:24 acydburn Exp $
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

// User pruning
$lang = array_merge($lang, array(
	'ACP_PRUNE_USERS_EXPLAIN'	=> 'คุณสามารถลบ (หรือ เลิกใช้) ผู้ใช้จากบอร์ด คุณสามารถทำได้หลายวิธี เช่น จากการนับโพสต์, กิจกรรมที่ทำล่าสุดและอื่นๆ แต่ละเงื่อนไขสามารถรวมกันได้ เช่น คุณสามารถตัดแต่งผู้ใช้โดยใช้กิจกรรมสุดท้ายก่อน 2002-01-01 ด้วยจำนวนโพสต์ที่น้อยกว่า 10 ครั้ง. อีกทางเลือกหนึ่ง คุณสามารถกรอกรายการของผู้ใช้โดยตรง เงื่อนไขต่างๆจะถูกละเลย ระมัดระวังการใช้ให้ดีเพราะว่าไม่สามารถย้อนกลับได้ 
	
ในส่วนนี้จะช่วยให้ คุณสามารถลบหรือ ยกเลิกการใช้งาน ของสมาชิืกในบอร์ดคุณ. บัญชีสามารถกรองหลายวิธีหนึ่งโดยนับโพสต์ กิจกรรมล่าสุด ฯลฯ เกณฑ์การปรับอาจจะรวมกัน เพื่อจำกัดบัญชีได้รับผลกระทบ. ตัวอย่าง เช่น คุณ สามารถตัดทอนผู้ใช้โพสต์น้อยกว่า 10 โพสต์ที่ยังไม่ได้ใช้งานหลังจาก วันที่ 2002/01/01. หรือคุณอาจข้ามเลือกเกณฑ์สมบูรณ์โดยการป้อนรายชื่อผู้ใช้ ลงในช่องข้อความ.ชื่อสมาชิกที่ถูกลบจะไม่สามารถนำกลับมาใช้ใหม่ได้',

	'DEACTIVATE_DELETE'			=> 'ยกเลิกหรือลบ',
	'DEACTIVATE_DELETE_EXPLAIN'	=> 'เลือกว่าจะยกเลิกการ ใช้ หรือ ลบทิ้งทั้งหมด. โปรดทราบสมาชิกที่ถูกลบ จะไม่สามารถเรียกคืน!',
	'DELETE_USERS'				=> 'ลบ',
	'DELETE_USER_POSTS'			=> 'ลบโพสต์ของผู้ใช้',
	'DELETE_USER_POSTS_EXPLAIN' => 'ลบโพสต์ที่โพสต์โดยผู้ใช้ที่ถูกลบไปแล้ว, การกระทำนี้ไม่กระทบผู้ใช้ที่ยกเลิก',

	'JOINED_EXPLAIN'			=> 'กรอกวันที่ให้อยู่ในรูปแบบ <kbd>YYYY-MM-DD</kbd>',

	'LAST_ACTIVE_EXPLAIN'		=> 'กรอกวันที่ในรูปแบบ <kbd>YYYY-MM-DD</kbd> ใส่ 0000-00-00 เพื่อลบสมาชิกทืี่ไม่เคยเข้าระบบ,  <em>ก่อน</em>และ <em>หลัง</em> เงื่อนไขจะถูกปฏิเสธ',

	'PRUNE_USERS_LIST'				=> 'ผู้ใช้ที่จะถูกตัดแต่ง',
	'PRUNE_USERS_LIST_DELETE'		=> 'ผู้ใช้ที่เข้าเงื่อนไขจะถูกลบออก',
	'PRUNE_USERS_LIST_DEACTIVATE'	=> 'ผู้ใช้ที่เข้าเงื่อนไขจะถูกยกเลิก',

	'SELECT_USERS_EXPLAIN'		=> 'กรอกชื่อสมาชิกที่ท่านต้องการ, ชื่อสมาชิกจะใช้ในการตั้งค่าเกณฑ์ดังกล่าวข้างต้น. การจัดการจะไม่มีผลกับผู้ก่อตั้ง.',

	'USER_DEACTIVATE_SUCCESS'	=> 'ผู้ใช้ที่เลือกไว้ถูกยกเลิกแล้ว',
	'USER_DELETE_SUCCESS'		=> 'ผู้ใช้ที่เลือกไว้ถูกลบแล้ว',
	'USER_PRUNE_FAILURE'		=> 'ไม่มีผู้ใช้เหมาะสมกับเงื่อนไขที่เลือก',

	'WRONG_ACTIVE_JOINED_DATE'	=> 'วันที่กรอกไม่ถูกต้อง รูปแบบที่คาดหวังคือ <kbd>YYYY-MM-DD</kbd>',
));

// Forum Pruning
$lang = array_merge($lang, array(
	'ACP_PRUNE_FORUMS_EXPLAIN'	=> 'การกระทำนี้จะลบกระทู้ใดๆ ที่ไม่มีการโพสต์หรือดูในช่วงเวลาที่คุณกำหนด ถ้าคุณไม่ใส่จำนวนวัน ทุกกระทู้จะถูกลบ โดยปกติจะไม่มีการลบกระทู้ที่มีแบบสำรวจค้างอยู่ และจะไม่ลบกระทู้ปักหมุด และกระทู้ประกาศ',

	'FORUM_PRUNE'		=> 'ตัดทอนบอร์ด',

	'NO_PRUNE'			=> 'ไม่มีบอร์ดที่ตัดทอน.',

	'SELECTED_FORUM'	=> 'เลือกบอรืด',
	'SELECTED_FORUMS'	=> 'บอร์ดที่ถูกเลือก',

	'POSTS_PRUNED'					=> 'ตัดทอนการโพสต์',
	'PRUNE_ANNOUNCEMENTS'			=> 'ตัดทอนกระทู้ประกาศ',
	'PRUNE_FINISHED_POLLS'			=> 'ตัดทอนแบบสำรวจที่ปิดไปแล้ว',
	'PRUNE_FINISHED_POLLS_EXPLAIN'	=> 'ลบกระทู้ที่แบบสำรวจจบแล้ว',
	'PRUNE_FORUM_CONFIRM'			=> 'คุณแน่ใจที่จะลบบอร์ด้? เมื่อลบแล้ว ไม่สามารถเรียกกลับคืนมาได้',
	'PRUNE_NOT_POSTED'				=> 'จำนวนวันตั้งแต่การโพสต์ครั้งสุดท้าย',
	'PRUNE_NOT_VIEWED'				=> 'จำนวนวันตั้งแต่การดูครั้งสุดท้าย',
	'PRUNE_OLD_POLLS'				=> 'ตัดทอนแบบสำรวจเก่าๆ',
	'PRUNE_OLD_POLLS_EXPLAIN'		=> 'ลบกระทู้ที่แบบสำรวจยังไม่มีการโหวตเป็นเวลานาน',
	'PRUNE_STICKY'					=> 'ตัดทอนกระทู้ปักหมุด',
	'PRUNE_SUCCESS'					=> 'การตัดทอนเสร็จเรียบร้อยแล้ว.',

	'TOPICS_PRUNED'		=> 'ตัดทอนกระทู้เรียบร้อยแล้ว',
));

?>