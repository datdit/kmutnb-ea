<?php
/** 
* ภาษาไทย เวอร์ชั่น 1.2.5 
* 22/08/2555 
* ไฟล์ภาษาไทยสำหรับ PHPBB3 โดย www.mindphp.com และ www.phpbbthailand.com
*
*/ 

/**
*
* acp_bots [English]
*
* @package language
* @version $Id: bots.php,v 1.12 2007/10/04 15:07:24 acydburn Exp $
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

// Bot settings
$lang = array_merge($lang, array(
	'BOTS'				=> 'จัดการ Bots',
	'BOTS_EXPLAIN'		=> '“Bots”, “spiders” or “crawlers” เป็นเครื่องมือที่ search engines ใช้เพื่ออัพเดทฐานข้อมูล การใช้สิ่งเหล่านี้ ทำให้การนับผู้เยี่ยมชมผิดไปจากความเป็นจริง และทำให้โหลดของมากขึ้นและบางครั้งทำให้ระบุไซต์ล้มเหลว คุณสามารถกำหนดประเภทผู้ใช้พิเศษเพื่อที่คุณจะสามารถจัดการกับปัญหานี้ได้',
	'BOT_ACTIVATE'		=> 'ใช้งาน',
	'BOT_ACTIVE'		=> 'Bot active',
	'BOT_ADD'			=> 'เพิ่ม bot',
	'BOT_ADDED'			=> 'เพิ่ม bot ใหม่สำเร็จ',
	'BOT_AGENT'			=> 'เข้าคู่ Agent',
	'BOT_AGENT_EXPLAIN'	=> 'ข้อความตรงกับ bots browser agent, ความเหมือนกันบางส่วนได้รับอนุญาต.',
	'BOT_DEACTIVATE'	=> 'ยกเลิกการใช้',
	'BOT_DELETED'		=> 'ลบ Bot สำเร็จ',
	'BOT_EDIT'			=> 'แก้ไข bots',
	'BOT_EDIT_EXPLAIN'	=> 'คุณสามารถเพิ่มหรือแก้ไข รายการ bot ที่มีอยู่ คุณสามารถกำหนดตัวแทนสตริง และ/หรือ IP addresses (หรือช่วงของ IP addresses) เพื่อทำการจับคู่ คุณยังสามารถระบุรูปแบบและภาษาที่ bot จะดูในการใช้บอร์ด คุณสามารถลด bandwidth ที่ใช้โดยตั้งค่ารูปแบบง่ายๆสำหรับ bots. อย่าลืมตั้งค่าการอนุญาตที่เหมาะสมให้กับ กลุ่มผู้ใช้ Bot พิเศษด้วย',
	'BOT_LANG'			=> 'ภาษา Bot',
	'BOT_LANG_EXPLAIN'	=> 'ภาษาที่ bot สนใจในการดู',
	'BOT_LAST_VISIT'	=> 'การเยี่ยมชมล่าสุด',
	'BOT_IP'			=> 'Bot IP address',
	'BOT_IP_EXPLAIN'	=> 'สามารถทำการจับคู่บางส่วนได้ ให้แยกแต่ละ IP Address ด้วยจุลภาค',
	'BOT_NAME'			=> 'ชื่อ Bot',
	'BOT_NAME_EXPLAIN'	=> 'ใช้เพื่อเป็นข้อมูลสำหรับคุณเท่านั้น',
	'BOT_NAME_TAKEN'	=> 'ชื่อนี้มีอยู่แล้วในบอร์ด ไม่สามารถใช้เป็นชื่อของ Botได้',
	'BOT_NEVER'			=> 'ไม่เคย',
	'BOT_STYLE'			=> 'รูปแบบ Bot',
	'BOT_STYLE_EXPLAIN'	=> 'รูปแบบที่ bot ใช้',
	'BOT_UPDATED'		=> 'อัพเดท bot ที่มีอยู่สำเร็จ',

	'ERR_BOT_AGENT_MATCHES_UA'	=> 'bot agent ที่คุณระบุเหมือนกับคุณกำลังใช้อยู่ กรุณาปรับเปลี่ยนด้วย',
	'ERR_BOT_NO_IP'				=> 'IP addresses ที่คุณระบุนั้นไม่ถูกต้อง หรือ ไม่สามารถหาที่อยู่ได้',
	'ERR_BOT_NO_MATCHES'		=> 'คุณต้องระบุอย่างน้อยหนึ่ง agent หรือ IP สำหรับการจับคู่ bot',

	'NO_BOT'		=> 'ไม่พบ bot ตาม ID ที่ระบุ',
	'NO_BOT_GROUP'	=> 'ไม่พบกลุ่ม bot พิเศษ',
));

?>