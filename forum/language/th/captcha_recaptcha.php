<?php
/** 
*ภาษาไทย เวอร์ชั่น 1.2.0
* 23/11/2553 
* ไฟล์ภาษาไทยสำหรับ PHPBB3 โดย www.mindphp.com และ www.phpbbthailand.com
*
*/  

/**
*
* recaptcha [English]
*
* @package language
* @version $Id: captcha_recaptcha.php 9933 2009-08-06 09:12:21Z marshalrusty $
* @copyright (c) 2009 phpBB Group
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
	'RECAPTCHA_LANG'				=> 'en',
	'RECAPTCHA_NOT_AVAILABLE'		=> 'ในการใช้งาน reCaptcha, คุณจำเป็นต้องสมัครสมาชิกที่เว็บ <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a>.',
	'CAPTCHA_RECAPTCHA'				=> 'reCaptcha',
	'RECAPTCHA_INCORRECT'			=> 'รหัสยืนยันภาพ ที่คุณกรอกไม่ถูกต้อง',

	'RECAPTCHA_PUBLIC'				=> 'คีย์สาธารณะของ reCaptcha',
	'RECAPTCHA_PUBLIC_EXPLAIN'		=> 'คีย์สาธารณะของ reCaptcha. คีย์นี้สามารถรับได้ที่เว็บ <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a>.',
	'RECAPTCHA_PRIVATE'				=> 'คีย์ส่วนตัวของ reCaptcha ',
	'RECAPTCHA_PRIVATE_EXPLAIN'		=> 'คีย์ส่วนตัวของ reCaptcha. คีย์นี้สามารถรับได้ที่เว็บ <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a>.',

	'RECAPTCHA_EXPLAIN'				=> 'เพื่อป้องกันการส่งแบบอัตโนมัติ เราจำเป็นต้องให้คุณป้อนคำทั้งสองคำที่ปรากฏด้านล่างนี้ลง ในช่องข้อความ',
));

?>