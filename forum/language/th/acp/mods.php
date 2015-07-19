<?php
/** 
* Thai Language by Mindphp developer team 22-8-12
* acp_mods [English]
*
* @package language
* @version $Id: mods.php 242 2010-04-29 00:56:35Z jelly_doughnut $
* @copyright (c) 2008 phpBB Group 
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
*/
/**
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

/**
* DO NOT CHANGE
*/
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE 
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine


$lang = array_merge($lang, array(
	'ADDITIONAL_CHANGES'	=> 'มีการเปลี่ยนแปลง',

	'AM_MOD_ALREADY_INSTALLED'	=> 'AutoMOD ได้ตรวจจับพบว่า MOD นี้ได้ถูกติดตั้งแล้วและไม่สามารถดำเนินการต่อ.',
	'AM_MANUAL_INSTRUCTIONS'	=> 'AutoMOD กำลังส่งไฟล์บีบอัดไปยังคอมพิวเตอร์ของคุณ.  เพราะการตั้งค่าของ AutoMOD, ไฟล์จึงไม่สามารถถูกสร้างไปยังเว็บของคุณอัตโนมัติ.  คุณจะต้องแยกไฟล์ออกจากซิบและอัพโหลดไฟล์ไปยังเซิฟเวอร์ด้วยตนเอง, ใช้ FTP client หรือวิธีการที่เหมือนกัน.  ถ้าหากคุณไม่สามารถดาวโหลดไฟล์นี้ได้อัติโนมัติ, คลิก %shere%s.',

	'APPLY_THESE_CHANGES'	=> 'ใช้การเปลี่ยนแปลงนี้',
	'APPLY_TEMPLATESET'		=> 'กับเทมเพลตนี้',
	'AUTHOR_EMAIL'			=> 'ผู้เขียนอีเมล์',
	'AUTHOR_INFORMATION'	=> 'ผู้เขียนข้อมูล',
	'AUTHOR_NAME'			=> 'ชื่อผู้เขียน',
	'AUTHOR_NOTES'			=> 'บันทึกผู้เขียน',
	'AUTHOR_URL'			=> 'URL ผู้เขียน',
	'AUTOMOD'				=> 'AutoMOD',
	'AUTOMOD_CANNOT_INSTALL_OLD_VERSION'	=> 'เวอร์ชั่นของ AutoMOD ที่คุณพยายามติดตั้งได้ถูกติดตั้งไว้อยู่แล้ว. โปรดลบ Folder install/',
	'AUTOMOD_UNKNOWN_VERSION'	=>	'AutoMOD ไม่สามารถอัพเดทได้ เพราะไม่สามารถระบุรุ่นปัจจุบันที่ถูกติดตั้งอยู่.  รายการเวอร์ชั่นการติดตั้งของคุณคือ %s.',
	'AUTOMOD_VERSION'		=> 'เวอร์ชั่น AutoMOD',

	'CAT_INSTALL_AUTOMOD'	=> 'AutoMOD',
	'CHANGE_DATE'	=> 'วันที่ออก',
	'CHANGE_VERSION'=> 'หมายเลขเวอร์ชั่น',
	'CHANGES'		=> 'การเปลี่ยนแปลง',
	'CHECK_AGAIN'  => 'ตรวจสอบอีกครั้ง',
	'COMMENT'		=> 'คอมเม้น',
	'CREATE_TABLE'	=> 'การเปลี่ยนแปลง ฐานข้อมูล',
	'CREATE_TABLE_EXPLAIN'	=> 'AutoMOD ได้ดำเนินการเปลี่ยนแปลง ฐานข้อมูล สำเร็จ, รวมถึง permission ซึ่งได้ถูกตั้งค่าให้เป็น “Full Administrator”',
	'DELETE'			=> 'ลบทิ้ง',
	'DELETE_CONFIRM'	=> 'คุณแน่ใจหรือไม่ที่จะลบ MOD นี้?',
	'DELETE_ERROR'		=> 'มีความผิดพลาดเกิดขึ้นขณะลบ MOD นี้.',
	'DELETE_SUCCESS'	=> 'MOD ถูกลบเสร็จสมบูรณ์.',

	'DIR_PERMS'			=> 'Directory Permissions',
	'DIR_PERMS_EXPLAIN'	=> 'บางระบบจำเป็นต้องมี directories ที่กำหนด permissions อย่างแน่นอน เพื่อที่จะทำงานได้สมบูรณ์แบบ.  ปกติค่า default 0755 นั้นถูกต้อง. การตั้งค่านี้ไม่มีผลกระทบต่อ Windows systems.',
	'DIY_INSTRUCTIONS'	=> 'Do It Yourself Instructions',
	'DEPENDENCY_INSTRUCTIONS'	=>	'MOD ที่คุณพยายามที่จะติดตั้งขึ้นอยู่กับ MOD อื่น.  AutoMOD ไม่สามารถตรวจสอบได้ว่า Mod นี้ถูกติดตั้งแล้วหรือยัง.  โปรดยืนยันว่าคุณได้ติดตั้ง <strong><a href="%1$s">%2$s</a></strong> ก่อนที่จะติดตั้ง MOD ของคุณ.',
	'DESCRIPTION'	=> 'ประเภท',
	'DETAILS'		=> 'รายละเอียด',

	'EDITED_ROOT_CREATE_FAIL'	=> 'AutoMOD ไม่สามารถที่จะสร้าง directory ที่จะเก็บไฟล์ที่แก้ไข.',
	'ERROR'			=> 'ผิดพลาด',

	'FILE_EDITS'		=> 'แก้ไขไฟล์',
	'FILE_EMPTY'		=> 'ไฟล์ว่างเปล่า',
	'FILE_MISSING'		=> 'ไม่สามารถระบุที่ตั้งของไฟล์',
	'FILE_PERMS'		=> 'ไฟล์ Permissions',
	'FILE_PERMS_EXPLAIN'=> 'บางระบบจำเป็นต้องมี directories ที่กำหนด permissions อย่างแน่นอน เพื่อที่จะทำงานได้สมบูรณ์แบบ. ปกติค่า default 0644 นั้นถูกต้อง. การตั้งค่านี้ไม่มีผลกระทบต่อ Windows systems.',
	'FILE_TYPE'			=> 'ชนิดไฟล์บีบอัด',
	'FILE_TYPE_EXPLAIN'	=> 'สำหรับใช้กับวิธีการเขียน “บีบอัดไฟล์ดาวโหลด” เท่านั้น',
	'FILESYSTEM_NOT_WRITABLE'	=> 'AutoMOD ตรวจสอบพบว่า filesystem ไม่สามารถเขียนได้, ดังนั้นการเขียนโดยตรงจึงไม่สามารถใช้ได้.',
	'FIND'				=> 'ค้นหา',
	'FIND_MISSING'		=> 'การค้นหาที่ระบุโดย MOD ไม่พบ',
	'FORCE_INSTALL'		=> 'บังคับติดตั้ง',
	'FORCE_UNINSTALL'	=> 'บังคับถอนการติดตั้ง',
	'FORCE_CONFIRM'		=> 'ฟังชั่นบังคับติดตั้งหมายถึง MOD นี้ไม่สามารถติดตั้งได้อย่างสมบูรณ์.  คุณจำเป็นจะต้องแก้ไขบางส่วนของบอร์ดด้วยตนเองเพื่อเสร็จส้นการติดตั้ง.  ดำเนินการต่อ?',
	'FTP_INFORMATION'	=> 'ข้อมูล FTP',
	'FTP_NOT_USABLE'  => 'ฟังชั่น FTP ไม่สามารถใช้ได้เพราะถูกปิดกั้นโดยโฮสของคุณ.',
	'FTP_METHOD_ERROR' => 'ไม่พบ FTP method,โปรดตรวจสอบการตั้งค่า autoMOD ว่ามีการตั้งค่า FTP method ที่ถูกต้องหรือไม่.',
	'FTP_METHOD_EXPLAIN'=> 'หากคุณพบปัญหากับค่า default "FTP", คุณอาจลอง "Simple Socket" เป็นตัวเลือกสำหรับติดต่อกับ FTP server.',
	'FTP_METHOD_FTP'	=> 'FTP',
	'FTP_METHOD_FSOCK'	=> 'Simple Socket',

	'GO_PHP_INSTALLER'  => 'MOD จำเป็นต้องมีตัวติดตั้งภายนอกเพื่อเสร็จสิ้นการติดตั้ง.  คลิกที่นี้เพื่อดำเนินการต่อ.',

	'INHERIT_NO_CHANGE'	=> 'ไม่สามารถเปลี่ยนแปลงไฟล์นี้ได้เพราะเทมเพลต %1$s ขึ้นอยู่กับ %2$s.',
	'INLINE_FIND_MISSING'=> 'ไม่พบฟังชั่นการค้นหา In-Line ที่ระบุโดย MOD.',
	'INLINE_EDIT_ERROR'	=> 'ผิดพลาด, คำสั่ง inline edit ในไฟล์ติดตั้ง MODX ขาดหายส่วนประกอบที่จำเป็น',
	'INSTALL_AUTOMOD'	=> 'การติดตั้ง AutoMOD',
	'INSTALL_AUTOMOD_CONFIRM'	=> 'คุณแน่ใจหรือไม่ที่จะติดตั้ง AutoMOD?',
	'INSTALL_TIME'		=> 'เวลาการติดตั้ง',
	'INSTALL_MOD'		=> 'ติดตั้ง MOD ตัวนี้',
	'INSTALL_ERROR'		=> 'มีหนึ่งหรือมากกว่าการติดตั้งล้มเหลว โปรดตรวจดูการกระทำข้างล่าง, ปรับและลองใหม่. คุณอาจดำเนินการติดตั้งต่อถึงแม้ว่าจะมีบางส่วนที่ผิดพลาด. <strong>ระบบไม่แนะนำให้คุณทำเพราะอาจทำให้ฟังชั่นของบอร์ดของคุณทำงานไม่ปกติ.</strong>',
	'INSTALL_FORCED'	=> 'คุณได้บังคับให้ติดตั้ง MOD นี้แม้ว่ามีความผิดพลาดเกิดขึ้น. บอร์ดของคุณอาจพัง. โปรดจดรายการที่ล้มเหลวด้านล่างและทำให้ถูกต้อง.',
	'INSTALLED'			=> 'ติดตั้ง MOD เรียบร้อย',
	'INSTALLED_EXPLAIN'	=> 'MOD ของคุณถูกติดตั้งแล้ว! คุณสามารถดูผลลัพธ์การติดตั้ง. โปรดจด errors ใดๆที่เกิดขึ้น, และหาความช่วยเหลือที่ <a href="http://www.phpbb.com">phpBB.com</a>',
	'INSTALLED_MODS'	=> 'MOD ที่ติดตั้งแล้ว',
	'INSTALLATION_SUCCESSFUL'	=> 'AutoMOD ถูกติดตั้งสำเร็จ คุณสามารถจัดการ phpBB MODifications ผ่านแถบ AutoMOD ในหน้า Administration Control Panel.',
	'INVALID_MOD_INSTRUCTION'	=> 'MOD นี้มีคำแนะนำที่ไม่ถูกต้อง, หรือคำสั่ง in-line find ที่ล้มเหลว.',
	'INVALID_MOD_NO_FIND'       => 'MOD นี้ไม่สามารถตรวจพบการจับคู่ค้นหาของการกระทำ ‘%s’',
	'INVALID_MOD_NO_ACTION'     => 'MOD ขาดคำสั่งการทำงานจับคู่การค้นหา ‘%s’',

	'LANGUAGE_NAME'		=> 'ชื่อภาษา',

	'MANUAL_COPY'				=> 'การคัดลอกไม่ถูกพยายาม',
	'MOD_CONFIG'				=> 'การตั้งค่า AutoMOD',
	'MOD_CONFIG_UPDATED'        => 'การตั้งค่า AutoMOD ได้ถูกอัพเดทแล้ว.',
	'MOD_DETAILS'				=> 'รายละเอียด MOD',
	'MOD_DETAILS_EXPLAIN'		=> 'ที่นี่คุณสามารถดูข้อมูลเกี่ยวกับ MOD ที่คุณเลือก.',
	'MOD_MANAGER'				=> 'AutoMOD',
	'MOD_NAME'					=> 'ชื่อ MOD',
	'MOD_OPEN_FILE_FAIL'		=> 'AutoMOD ไม่สามารถเปิดไฟล์ %s.',
	'MOD_UPLOAD'				=> 'อัพโหลด MOD',
	'MOD_UPLOAD_EXPLAIN'		=> 'ที่นี่คุณสามารถอัพโหลดไฟล์ซิบชุด MOD ที่บรรจุไฟล์ MODX ที่จำเป็นสำหรับการติดตั้ง.  AutoMOD จะแยกไฟล์ซิบและเตรียมพร้อมสำหรับการติดตั้ง.',
	'MOD_UPLOAD_INIT_FAIL'		=> 'มีข้อผิดพลาดเกิดขึ้นที่การเริ่มต้นขั้นตอนอัพโหลด MOD',
	'MOD_UPLOAD_SUCCESS'		=> 'MOD ได้ถูกอัพโหลดและเตรียมพร้อมสำหรับการติดตั้งแล้ว.',
	'AUTOMOD_INSTALLATION'		=> 'การติดตั้ง AutoMOD',
	'AUTOMOD_INSTALLATION_EXPLAIN'	=> 'ยินดีต้อนรับสู่การติดตั้ง AutoMOD. คุณจำเป็นจะต้องใช้รายละเอียด FTP ถ้า AutoMOD ตรวจพบว่ามันเป็นวิธีเขียนไฟล์ที่ดีที่สุด.  ผลลัพธ์การตรวจสอบความต้องการอยู่ด้านล่าง.',

	'MODS_CONFIG_EXPLAIN'		=> 'คุณสามารถเลือกวิธีที่ AutoMOD ปรับไฟล์ของคุณตรงนี้.  วิธีที่ง่ายที่สุดคือการบีบอัดไฟล์ดาวโหลด.  ความต้องการอื่นๆจำเป็นต้องใช้ permissions ของเซิฟเวอร์.',
	'MODS_COPY_FAILURE'			=> 'ไม่สามารถคัดลอกไฟล์ %s ได้ โปรดตรวจสอบ permissions หรือใช้วิธีการเขียนอื่น.',
	'MODS_EXPLAIN'				=> 'ที่นี่คุณสามารถจัดการ MODs ที่มีอยู่ในบอร์ดของคุณ AutoMODs อนุญาตให้คุณปรับแต่งบอร์ดของคุณโดยการติดตั้ง mod อัตโนมัติ ผลิตโดย phpBB community. สำหรับข้อมูล MODs และ AutoMOD อื่นๆ โปรดเยี่ยมชม <a href="http://www.phpbb.com/mods">phpBB website</a>. การเพิ่ม MOD สำหรับรายการนี้, ให้ใช้ฟอร์มที่อยู่ด้านล่างของเพจ.  หรือคุณอาจ unzip มันและอัพโหลดไฟล์ไปที่ directory /store/mods/ บนเซิฟเวอร์ของคุณ.',
	'MODS_FTP_FAILURE'			=> 'AutoMOD ไม่สามารถ FTP ไฟล์ %s ไปยังที่เก็บ',
	'MODS_FTP_CONNECT_FAILURE'	=> 'AutoMOD ไม่สามารถติดต่อ FTP server ของคุณ. ข้อผิดพลาดคือ %s',
	'MODS_MKDIR_FAILED'			=> 'ไม่สามารถสร้าง directory %s',
	'MODS_SETUP_INCOMPLETE'		=> 'พบปัญหาที่การตั้งค่าของคุณ, และ AutoMOD ไม่สามารถดำเนินการได้.  เหตุนี้ควรจะเกิดขึ้นเมื่อมีการเปลี่ยนแปลงการตั้งต่า (e.g. FTP username) เท่านั้น, สามารถแก้ไขให้ถูกต้องได้ในหน้าการตั้งค่า AutoMOD.',

	'NAME'			=> 'ชื่อ',
	'NEW_FILES'		=> 'ไฟล์ใหม่',
	'NO_ATTEMPT'	=> 'ไม่ถูกพยายาม',
	'NO_INSTALLED_MODS'		=> 'ไม่สามารถตรวจพบ MOD ที่ติดตั้งแล้ว',
	'NO_MOD'				=> 'ไม่สามารถหา MOD ที่ถูกเลือกได้',
	'NO_UNINSTALLED_MODS'	=> 'ไม่สามารถตรวจพบ Mods ที่ถูกถอนการติดตั้ง',
	'NO_UPLOAD_FILE'		=> 'ไม่มีไฟล์ที่ระบุ',

	'ORIGINAL'	=> 'ต้นแบบ',

	'PATH'					=> 'ที่อยู่',
	'PREVIEW_CHANGES'		=> 'ดูตัวอย่างการเปลี่ยนแปลง',
	'PREVIEW_CHANGES_EXPLAIN'	=> 'แสดงความเปลี่ยนแปลงที่จะเกิดขึ้นก่อนที่จะดำเนินการ.',
	'PRE_INSTALL'			=> 'กำลังเตรียมการติดตั้ง',
	'PRE_INSTALL_EXPLAIN'	=> 'ที่นี่คุณสามารถดูตัวอย่างการเปลี่ยนแปลงที่จะเกิดขึ้นกับบอร์ดของคุณ, ก่อนที่มันจะถูกใช้. <strong>คำเตือน!</strong>, เมื่อคุณตกลงแล้ว ไฟล์ phpBB พื้นฐานจะถูกแก้ไขและอาจมีการเปลี่ยนแปลงฐานข้อมูล. อย่างไรก็ตามถ้าการติดตั้งไม่ประสบผลสำเร็จ, แล้วคุณสามารถเข้าถึง AutoMOD, คุณจะสามารถเลือกทำให้กลับสู่สภาพ ณ ตอนนี้ได้.',
	'PRE_UNINSTALL'			=> 'กำลังเตรียมถอนการติดตั้ง',
	'PRE_UNINSTALL_EXPLAIN'	=> 'ที่นี่คุณสามารถดูตัวอย่างการเปลี่ยนแปลงที่จะเกิดขึ้นกับบอร์ดของคุณ, ก่อนที่จะถอนการติดตั้ง MOD. <strong>คำเตือน!</strong>, เมื่อคุณตกลงแล้ว, ไฟล์ phpBB พื้นฐานจะถูกแก้ไขและอาจมีการเปลี่ยนแปลงฐานข้อมูล. ดังนั้น, การดำเนินการนี้ใช้วิธีการย้อนกลับที่อาจไม่แม่นยำ 100%  อย่างไรก็ตาม, หากการถอนการติดตั้งไม่ประสบความสำเร็จ, แล้วคุณสามารถเข้าถึง AutoMOD, คุณจะสามารถเลือกทำให้กลับสู่สภาพ ณ ตอนนี้ได้.',

	'REMOVING_FILES'	=> 'ไฟล์ที่จะถูกลบ',
	'RETRY'				=> 'ลองอีกครั้ง',
	'RETURN_MODS'		=> 'กลับไปยัง AutoMOD',
	'REVERSE'			=> 'ย้อนกลับ',
	'ROOT_IS_READABLE'	=> 'phpBB root directory เป็นแบบ readable.',
	'ROOT_NOT_READABLE'	=> 'AutoMOD ไม่สามารถเปิด phpBB\'s index.php เพื่อที่จะอ่านได้. นี้อาจเป็นเพราะ permissions ที่ถูกตั้งนั้นจำกัดเกินไปใน phpBB root directory, ซึ่งจะทำให้ AutoMOD ไม่สามารถทำงานได้.  โปรดปรับ permissions และลองอีกครั้ง.',


	'SOURCE'		=> 'แหล่งที่มา',
	'SQL_QUERIES'	=> 'SQL Queries',
	'STATUS'		=> 'สถานะ',
	'STORE_IS_WRITABLE'			=> 'directory store/ เป็นแบบ writable.',
	'STORE_NOT_WRITABLE_INST'	=> 'การติดตั้ง AutoMOD ได้ตรวจพบว่า directory store/ ไม่ได้เป็นแบบ writable.  สิ่งนี้จำเป็นสำหรับ AutoMOD ในการทำงานปกติ.  โปรดปรับ permissions และลองอีกครั้ง.',
	'STORE_NOT_WRITABLE'		=> 'directory store/ ไม่ได้เป็นแบบ writable.',
	'STYLE_NAME'	=> 'ชื่อสไตล์',
	'SUCCESS'		=> 'สำเร็จ',

	'TARGET'		=> 'เป้าหมาย',

	'UNKNOWN_MOD_AUTHOR-NOTES'	=> 'ไม่มีโน๊ตที่ระบุจากผู้เขียน.',
	'UNKNOWN_MOD_DESCRIPTION'	=> '',
	'UNKNOWN_MOD_DIY-INSTRUCTIONS'=>'', // empty string hides this if not specified.
	'UNKNOWN_MOD_COMMENT'		=> '',
	'UNKNOWN_MOD_INLINE-COMMENT'=> '',
	'UNKNOWN_QUERY_REVERSE' => 'query ย้อนกลับที่ไม่รู้จัก',

	'UNINSTALL'				=> 'ถอนการติดตั้ง',
	'UNINSTALL_AUTOMOD'		=> 'ถอนการติดตั้ง AutoMOD',
	'UNINSTALL_AUTOMOD_CONFIRM' => 'คุณแน่ใจหรือไม่ที่จะถอนการติดตั้ง AutoMOD?  นี้จะไม่เป็นการลบ Mod ใดๆที่ถูกติดตั้งด้วย AutoMOD.',
	'UNINSTALLED'			=> 'ถอนการติดตั้ง MOD แล้ว',
	'UNINSTALLED_MODS'		=> 'MOD ที่ถูกถอนการติดตั้ง',
	'UNINSTALLED_EXPLAIN'	=> 'MOD ของคุณได้ถูกถอนการติดตั้งแล้ว! คุณสามารถดูผลลัพธ์จากการถอนการติดตั้ง. โปรดจดข้อผิดพลาด, และหาความช่วยเหลือที่ <a href="http://www.phpbb.com">phpBB.com</a>.',
	'UNRECOGNISED_COMMAND'	=> 'ผิดพลาด, คำสั่งที่ไม่รู้จัก %s',
	'UPDATE_AUTOMOD'		=> 'อัพเดท AutoMOD',
	'UPDATE_AUTOMOD_CONFIRM'=> 'โปรดยืนยันว่าคุณต้องการอัพเดท AutoMOD.',

	'UPLOAD'				=> 'อัพโหลด',
	'VERSION'				=> 'รุ่น',

	'WRITE_DIRECT_FAIL'		=> 'AutoMOD ไม่สามารถคัดลอกไฟล์ %s ไปยังที่หมายโดยใช้วิธีตรง.  โปรดใช้วิธีการเขียนแบบอื่นและลองอีกครั้ง.',
	'WRITE_DIRECT_TOO_SHORT'=> 'AutoMOD ไม่สามารถเสร็จสิ้นการเขียนไฟล์ %s. นี้อาจถูกแก้ไขโดยการกดปุ่มลองอีกครั้ง.  หากไม่ได้ผลให้ลองวิธีการเขียนแบบอื่น.',
	'WRITE_MANUAL_FAIL'		=> 'AutoMOD ไม่สามารถที่จะบีบอัดไฟล์ %s โปรดลองวิธีการเขียนแบบอื่น.',
	'WRITE_METHOD'			=> 'วิธีเขียน',
	'WRITE_METHOD_DIRECT'	=> 'ตรง',
	'WRITE_METHOD_EXPLAIN'	=> 'คุณสามารถเลือกวิธีการเขียนไฟล์ที่สำคัญกว่า.  ตัวเลือกที่เข้ากันได้มากที่สุดคือ “บีบอัดไฟล์ดาวโหลด”.',
	'WRITE_METHOD_FTP'		=> 'FTP',
	'WRITE_METHOD_MANUAL'	=> 'บีบอัดไฟล์ดาวโหลด',

	// These keys for action names are purposely lower-cased and purposely contain spaces
	'after add'				=> 'Add After',
	'before add'			=> 'Add Before',
	'find'					=> 'Find',
	'in-line-after-add'		=> 'In-Line After, Add',
	'in-line-before-add'	=> 'In-Line Before, Add',
	'in-line-edit'			=> 'In-Line Find',
	'in-line-operation'		=> 'In-Line Increment',
	'in-line-replace'		=> 'In-Line Replace',
	'in-line-replace-with'	=> 'In-Line Replace',
	'replace'				=> 'Replace With',
	'replace with'			=> 'Replace With',
	'operation'				=> 'Increment',
));

?>