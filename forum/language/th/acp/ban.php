<?php
/** 
* ภาษาไทย เวอร์ชั่น 1.1.0 
* 05/06/2551 
* ไฟล์ภาษาไทยสำหรับ PHPBB3 โดย www.mindphp.com และ www.phpbbthailand.com
*
*/ 

/**
*
* acp_ban [English]
*
* @package language
* @version $Id: ban.php,v 1.19 2007/10/04 15:07:24 acydburn Exp $
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

// Banning
$lang = array_merge($lang, array(
	'1_HOUR'		=> '1 ชั่วโมง',
	'30_MINS'		=> '30 นาที',
	'6_HOURS'		=> '6 ชั่วโมงs',

	'ACP_BAN_EXPLAIN'	=> 'คุณสามารถควบคุมการแบนของผู้ใช้โดยใช้ชื่อ IP หรือ ชื่ออีกเมล วิธีการเหล่านี้ป้องกันผู้ใช้ล่วงละเมิดส่วนใดๆของบอร์ด คุณสามารถให้เหตุผลการแบนได้ (ไม่เกิน 3000 ตัวอักษร) ข้อความจะแสดงใน admin log ช่วงเวลาที่ต้องการแบนก็สามารถระบุได้เช่นกัน ถ้าคุณต้องการให้การแบนสิ้นสุดภายในวันที่กำหนดแทนที่จะใช้ช่วงเวลา ให้เลือก <span style="text-decoration: underline;">จนกระทั่ง -&gt;</span> และใส่รูปแบบของวันที่เป็น <kbd>YYYY-MM-DD</kbd>',

	'BAN_EXCLUDE'			=> 'เอาออกจากการแบน',
	'BAN_LENGTH'			=> 'ระยะเวลาการแบน',
	'BAN_REASON'			=> 'เหตุผลการแบน',
	'BAN_GIVE_REASON'		=> 'เหตุผลที่จะแสดงให้แก่ผู้โดนแบน',
	'BAN_UPDATE_SUCCESSFUL'	=> 'อัพเดทรายการแบนสำเร็จ',

	'BANNED_UNTIL_DATE'		=> 'จนกระทั่ง %s', // Example: "until Mon 13.Jul.2009, 14:44"
	'BANNED_UNTIL_DURATION'	=> '%1$s (จนกระทั่ง %2$s)', // Example: "7 days (until Tue 14.Jul.2009, 14:44)"

	'EMAIL_BAN'					=> 'แบนหนึ่งชื่ออีกเมล หรือมากกว่า',
	'EMAIL_BAN_EXCLUDE_EXPLAIN'	=> 'เลือกใช้งานนี้ เพื่อนำชื่ออีเมลออกจากรายการ แบน',
	'EMAIL_BAN_EXPLAIN'			=> 'หากต้องการระบุมากกว่าหนึ่งชื่ออีเมลให้กรอกแต่ละอันคนละบรรทัด หากต้องการระบุการจับคู่บางส่วนให้ใช้ * เช่น <samp>*@hotmail.com</samp>, <samp>*@*.domain.tld</samp>',
	'EMAIL_NO_BANNED'			=> 'ไม่มี อีเมลที่ถูกแบน',
	'EMAIL_UNBAN'				=> 'ยกเลิกการแบน',
	'EMAIL_UNBAN_EXPLAIN'		=> 'คุณสามารถยกเลิกการแบน หลายๆ อีเมลพร้อมกันได้ โดยใช้ เมาส์และคีย์บอร์ดเลือกชื่ออีเมล อีเมลที่ถูกเอาออกจะเป็นตัวหนา',

	'IP_BAN'					=> 'แบนไอพี',
	'IP_BAN_EXCLUDE_EXPLAIN'	=> 'เลือกใช้งานนี้เพื่อ นำ IP ที่ระบุ ออกจากรายการแบน',
	'IP_BAN_EXPLAIN'			=> 'หากต้องการระบุมากกว่าหนึ่ง IP address ให้กรอกแต่ละอันคนละบรรทัด หากต้องการระบุเป็นช่วง ให้คั่นตัวเริ่มกับตัวสุดท้ายด้วย (-), หากจะใช้ wildcard ให้ใช้ “*”',
	'IP_HOSTNAME'				=> 'ไอพีหรือชื่อโฮส',
	'IP_NO_BANNED'				=> 'ไม่มีไอพี่ที่ถูกแบน',
	'IP_UNBAN'					=> 'ยกเลิกการแบน IP',
	'IP_UNBAN_EXPLAIN'			=> 'คุณสามารถยกเลิกการแบน หลายๆไอพีพร้อมกันได้ โดยใช้ เมาส์และคีย์บอร์ด ไอพี ที่ถูกเอาออกจะเป็นตัวหนา ',

	'LENGTH_BAN_INVALID'		=> 'รูปแบบวันที่ต้องอยู่ในรูปแบบ<kbd>YYYY-MM-DD</kbd>.',

	'OPTIONS_BANNED'			=> 'แบนแล้ว',
	'OPTIONS_EXCLUDED'			=> 'สั่งให้รันแล้ว',
	
	'PERMANENT'		=> 'ถาวร',
	
	'UNTIL'						=> 'จนกระทั่ง',
	'USER_BAN'					=> 'แบนหนึ่งผู้ใช้หรือมากกว่า',
	'USER_BAN_EXCLUDE_EXPLAIN'	=> 'เลือกใช้งานนี้เพื่อนำผู้ใช้ที่ระบุออกจากการแบน',
	'USER_BAN_EXPLAIN'			=> 'หากต้องการระบุมากกว่าหนึ่งผู้ใช้ ให้กรอกแต่ละอันคนละบรรทัด ใช้ <span style="text-decoration: underline;">ค้นหาสมาชิก</span> เพื่อหารายชื่อผู้ใช้ และเพิ่มเข้าในรายการอัตโนมัติ',
	'USER_NO_BANNED'			=> 'ไม่มีผู้ใช้ถูกแบน',
	'USER_UNBAN'				=> 'ยกเลิกการแบนผู้ใช้',
	'USER_UNBAN_EXPLAIN'		=> 'คุณสามารถยกเลิกการแบน หลายๆ ผู้ใช้ พร้อมกันได้ โดยใช้ เมาส์และคีย์บอร์ด ผู้ใช้ ที่ถูกเอาออกจะเป็นตัวหนา',
	

));

?>