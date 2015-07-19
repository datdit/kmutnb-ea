<?php
/** 
* ภาษาไทย เวอร์ชั่น 1.2.0 
* 27/08/2555 
* ไฟล์ภาษาไทยสำหรับ PHPBB3 โดย www.mindphp.com และ www.phpbbthailand.com
*
*/ 


/**
*
* acp_profile [English]
*
* @package language
* @version $Id: profile.php,v 1.26 2007/10/04 15:07:24 acydburn Exp $
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
// 'Page %s of %s' คุณสามารถ(and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

// Custom profile ฟิลด์s
$lang = array_merge($lang, array(
	'ADDED_PROFILE_FIELD'	=> 'เพิ่มฟิลด์ประวัติที่สร้างเองสำเร็จ',
	'ALPHA_ONLY'			=> 'ตัวอักษรเลขเท่านั้น',
	'ALPHA_SPACERS'			=> 'ตัวอักษรเลขและที่ว่าง',
	'ALWAYS_TODAY'			=> 'วันที่ปัจจุบันเสมอ',

	'BOOL_ENTRIES_EXPLAIN'	=> 'กรอกตัวเลือกของคุณเดี๋ยวนี้',
	'BOOL_TYPE_EXPLAIN'		=> 'กำหนดประเภท, checkbox หรือ radio buttons checkbox จะแสดงให้ผู้ใช้เห็นกับผู้ใช้ที่กำหนด ในกรณีนั้นตัวเลือก <strong>ภาษาที่สอง</strong> จะถูกใช้ Radio buttons จะแสดงผลเสมอ',

	'CHANGED_PROFILE_FIELD'		=> 'เปลี่ยนฟิลด์ประวัติสำเร็จ',
	'CHARS_ANY'					=> 'ตัวอักษรอะไรก็ได้',
	'CHECKBOX'					=> 'Checkbox',
	'COLUMNS'					=> 'Columns',
	'CP_LANG_DEFAULT_VALUE'		=> 'ค่าเริ่มต้น',
	'CP_LANG_EXPLAIN'			=> 'คำอธิบายฟิลด์',
	'CP_LANG_EXPLAIN_EXPLAIN'	=> 'คำอธิบายสำหรับฟิลด์ที่จะแสดงให้ผู้ใช้เห็น',
	'CP_LANG_NAME'				=> 'ฟิลด์ ชื่อ/หัวเรื่อง แสดงให้ผู้ใช้เห็น',
	'CP_LANG_OPTIONS'			=> 'ตัวเลือก',
	'CREATE_NEW_FIELD'			=> 'สร้างฟิลด์ใหม่',
	'CUSTOM_FIELDS_NOT_TRANSLATED'	=> 'มีอย่างน้อยหนึ่งฟิลด์ประวัติที่ยังไม่ได้แปล โปรดกรอกข้อมูลที่จำเป็นโดยการคลิกที่ลิงค์ “Translate”',

	'DEFAULT_ISO_LANGUAGE'			=> 'ภาษา เริ่มต้น[%s]',
	'DEFAULT_LANGUAGE_NOT_FILLED'	=> 'รายการภาษาค่าเริ่มต้นยังไม่ได้ถูกเติมสำหรับฟิลด์ประวัตินี้',
	'DEFAULT_VALUE'					=> 'ค่าเริ่มต้น',
	'DELETE_PROFILE_FIELD'			=> 'ลบฟิลด์ที่สร้างขึ้นเอง',
	'DELETE_PROFILE_FIELD_CONFIRM'	=> 'คุณแน่ใจว่าจะลบฟิลด์ประวัติ?',
	'DISPLAY_AT_PROFILE'			=> 'แสดงในแป้นควบคุมผู้ใช้',
	'DISPLAY_AT_PROFILE_EXPLAIN'	=> 'ผู้ใช้สามารถเปลี่ยนฟิลด์ประวัติภายในแป้นควบคุมผู้ใช้',
	'DISPLAY_AT_REGISTER'			=> 'แสดงหน้าจอการลงทะเบียน',
	'DISPLAY_AT_REGISTER_EXPLAIN'	=> 'ถ้าตัวเลือกนี้ถูกใช้ , ฟิลด์จะถูกแสดงตอนลงทะเบียนและสามารถแก้ไขได้ในการตั้งค่าส่วนตัว',
	
	'DISPLAY_ON_VT'					=> 'แสดงในหน้า viewtopic',
	'DISPLAY_ON_VT_EXPLAIN'			=> 'ถ้าเปิดใ้ช้งานตัวเลือกนี้, ช่องที่จะแสดงในมินิโปรไฟล์ในหน้าแสดงหัวข้อ.',
	
	'DISPLAY_PROFILE_FIELD'			=> 'แสดงฟิลด์ประวัติ',
	'DISPLAY_PROFILE_FIELD_EXPLAIN'	=> 'ฟิลด์ประวัติจะแสดงในที่อนุญาตให้แสดง การตั้งค่านี้เป็น “no” จะซ่อนฟิลด์จากหน้ากระทู้ ประวัติและรายการสมาชิก',
	'DROPDOWN_ENTRIES_EXPLAIN'		=> 'กรอกตัวเลือกเดี๋ยวนี้, ทุกตัวเลือกในหนึ่งบรรทัด',

	'EDIT_DROPDOWN_LANG_EXPLAIN'	=> 'คุณสามารถเปลี่ยนข้อความตัวเลือกได้และยังสามารถเพิ่มตัวเลือกใหม่ได้ ไม่แนะนำให้เพิ่มตัวเลือกใหม่แทรกระหว่างตัวเลือกที่มีอยู่แล้ว จะทำให้เกิดความผิดพลาดได้ ',
	'EMPTY_FIELD_IDENT'				=> 'ตัวแสดงฟิลด์ว่างเปล่า',
	'EMPTY_USER_FIELD_NAME'			=> 'โปรดกรอกชื่อ/หัวข้อ ฟิลด์',
	'ENTRIES'						=> 'Entries',
	'EVERYTHING_OK'					=> 'ทุกอย่าง OK',

	'FIELD_BOOL'				=> 'Boolean (Yes/No)',
	'FIELD_DATE'				=> 'วันที่',
	'FIELD_DESCRIPTION'			=> 'การอธิบายฟิลด์',
	'FIELD_DESCRIPTION_EXPLAIN'	=> 'ข้อความอธิบายที่จะแสดงให้ผู้ใช้เห็น',
	'FIELD_DROPDOWN'			=> 'Dropdown box',
	'FIELD_IDENT'				=> 'ตัวแสดงฟิลด์',
	'FIELD_IDENT_ALREADY_EXIST'	=> 'ตัวแสดงฟิลด์ที่เลือกมีอยู่แล้ว โปรดเลือกชื่อใหม่',
	'FIELD_IDENT_EXPLAIN'		=> 'ตัวแสดงฟิลด์เป็นชื่อที่ใช้แสดงฟิลด์ประวัติภายในฐานข้อมูลและ Template ',
	'FIELD_INT'					=> 'ตัวเลข',
	'FIELD_LENGTH'				=> 'ความยาวของฟิลด์',
	'FIELD_NOT_FOUND'			=> 'ไม่พบฟิลด์ประวัติ',
	'FIELD_STRING'				=> 'ฟิลด์ข้อความเดียว',
	'FIELD_TEXT'				=> 'พื้นที่ข้อความ',
	'FIELD_TYPE'				=> 'ประเภทฟิลด์',
	'FIELD_TYPE_EXPLAIN'		=> 'คุณไม่สามารถเปลี่ยนประเภทฟิลด์ในภายหลัง',
	'FIELD_VALIDATION'			=> 'การตรวจสอบความถูกต้องของฟิลด์',
	'FIRST_OPTION'				=> 'ตัวเลือกแรก',

	'HIDE_PROFILE_FIELD'			=> 'ซ่อนฟิลด์ประวัติ',
	'HIDE_PROFILE_FIELD_EXPLAIN'	=> 'เฉพาะผู้ดูแลระบบและผู้จัดการบอร์ดเท่านั้นที่สามารถ เห็น/เติม ฟิลด์ประวัติ ถ้าตัวเลือกนี้ถูกเลือก, ฟิลด์ประวัติจะถูกแสดงให้กับผู้ใช้',

	'INVALID_CHARS_FIELD_IDENT'	=> 'ตัวแสดงฟิลด์มีได้แค่ a-z และ _ เท่านั้น',
	'INVALID_FIELD_IDENT_LEN'	=> 'ตัวแสดงฟิลด์ยาวได้แค่ 17 ตัวอักษรเท่านั้น',
	'ISO_LANGUAGE'				=> 'ภาษา [%s]',

	'LANG_SPECIFIC_OPTIONS'		=> 'ระบุตัวเลือกภาษา [<strong>%s</strong>]',

	'MAX_FIELD_CHARS'		=> 'จำนวนตัวอักษรสูงสุด',
	'MAX_FIELD_NUMBER'		=> 'จำนวนมากที่สุดที่อนุญาต',
	'MIN_FIELD_CHARS'		=> 'จำนวนตัวอักษรต่ำสุด',
	'MIN_FIELD_NUMBER'		=> 'จำนวนต่ำสุดที่อนุญาต',

	'NO_FIELD_ENTRIES'			=> 'ไม่มีการกำหนดรายการ',
	'NO_FIELD_ID'				=> 'ไม่ระบุฟิลด์ id ',
	'NO_FIELD_TYPE'				=> 'ไม่ระบุรูปแบบฟิลด์',
	'NO_VALUE_OPTION'			=> 'ตัวเลือกที่เทียบเท่าการไม่กรอกค่าใดๆ',
	'NO_VALUE_OPTION_EXPLAIN'	=> 'ค่าสำหรับการไม่กรอก ถ้าฟิลด์นี้เป็นฟิลด์ที่บังคับผู้ใช้จะได้รับการแจ้งความผิดพลาดสำหรับตัวเลือกที่เลือกที่นี่',
	'NUMBERS_ONLY'				=> 'จำนวนเท่านั้น (0-9)',

	'PROFILE_BASIC_OPTIONS'		=> 'ตัวเลือกพื้นฐาน',
	'PROFILE_FIELD_ACTIVATED'	=> 'ทำให้ฟิลด์ประวัติใช้งานได้สำเร็จ',
	'PROFILE_FIELD_DEACTIVATED'	=> 'ยกเลิกการใช้ฟิลด์ประวัติสำเร็จ',
	'PROFILE_LANG_OPTIONS'		=> 'ระบุตัวเลือกภาษา',
	'PROFILE_TYPE_OPTIONS'		=> 'ระบุตัวเลือกประเภทประวัติ',

	'RADIO_BUTTONS'				=> 'Radio buttons',
	'REMOVED_PROFILE_FIELD'		=> 'ลบฟิลด์ประวัติสำเร็จ',
	'REQUIRED_FIELD'			=> 'ฟิลด์บังคับ',
	'REQUIRED_FIELD_EXPLAIN'	=> 'ฟิลด์ประวัติที่ต้องกรอก',
	'ROWS'						=> 'แถว',

	'SAVE'							=> 'Save',
	'SECOND_OPTION'					=> 'ตัวเลือกที่สอง',
	'SHOW_NOVALUE_FIELD'			=> 'แสดงฟีลด์ถ้าไม่มีค่าที่ถูกเลือก',
	'SHOW_NOVALUE_FIELD_EXPLAIN'	=> 'กำหนดถ้าหาก profile field ควรจะแสดง ถ้าไม่มีค่าที่ถูกเลือกสำหรับตัวเลือกฟีลด์หรือถ้าไม่มีค่าที่ที่ถูกเลือกสำหรับฟีลด์ที่จำเป็น.',    
	'STEP_1_EXPLAIN_CREATE'			=> 'คุณสามารถกรอกพารามิเตอร์พื้นฐานแรกสำหรับฟิลด์ประวัติ ข้อมูลนี้ตองการสำหรับขั้นที่สอง ซึ่งคุณสามารถตั้งค่าตัวเลือกที่เหลือและปรับแต่งฟิลด์ประวัติมากขึ้น',
	'STEP_1_EXPLAIN_EDIT'			=> 'คุณสามารถเปลี่ยนพารามิเตอร์ฟิลด์ประวัติ ตัวเลือกที่เกี่ยวข้องจะถูกคำนวณใหม่ในขั้นที่สอง',
	'STEP_1_TITLE_CREATE'			=> 'เพิ่มฟิลด์ประวัติ',
	'STEP_1_TITLE_EDIT'				=> 'แก้ไขฟิลด์ประวัติ',
	'STEP_2_EXPLAIN_CREATE'			=> 'คุณสามารถกำหนดบางตัวเลือกทั่วไปที่คุณต้องการปรับได้',
	'STEP_2_EXPLAIN_EDIT'			=> 'คุณสามารถเปลี่ยนตัวเลือกบางตัว<br /><strong>โปรดทราบว่าการแก้ไขฟิลด์ประวัติจะไม่กระทบฟิลด์ประวัติที่ใช้อยู่โดยผู้ใช้</strong>',
	'STEP_2_TITLE_CREATE'			=> 'ระบุตัวเลือกประเภทประวัติ',
	'STEP_2_TITLE_EDIT'				=> 'ระบุตัวเลือกประเภทประวัติ',
	'STEP_3_EXPLAIN_CREATE'			=> 'เนื่องจากคุณมีมากกกว่าหนึ่งภาษาที่ติดตั้งบนบอร์ด, คุณต้องกรอกภาษาที่เหลือด้วย ฟิลด์ประวัติจะทำงานได้กับค่าเริ่มต้นภาษา, คุณสามารถกรอกภาษาที่เหลือได้เช่นกัน',
	'STEP_3_EXPLAIN_EDIT'			=> 'เนื่องจากคุณมีมากกกว่าหนึ่งภาษาที่ติดตั้งบนบอร์ด, คุณสามารถเปลี่ยนหรือเพิ่มภาษาด้วย ฟิลด์ประวัติจะทำงานได้กับค่าเริ่มต้นภาษา',
	'STEP_3_TITLE_CREATE'			=> 'ความหมายภาษาที่เหลืออยู่',
	'STEP_3_TITLE_EDIT'				=> 'นิยามภาษา',
	'STRING_DEFAULT_VALUE_EXPLAIN'	=> 'กรอกคำเริ่มต้นเพื่อแสดง ปล่อยให้ว่างถ้าคุณไม่ต้องการแสดงอะไร',

	'TEXT_DEFAULT_VALUE_EXPLAIN'	=> 'กรอกข้อความค่าเริ่มต้นเพื่อแสดง ปล่อยให้ว่างถ้าคุณไม่ต้องการแสดงอะไร',
	'TRANSLATE'						=> 'แปล',

	'USER_FIELD_NAME'	=> 'ฟิลด์ ชื่อ/หัวเรื่อง ที่แสดงให้กับผู้ใช้',

	'VISIBILITY_OPTION'				=> 'ตัวเลือกการมองเห็น',
));

?>