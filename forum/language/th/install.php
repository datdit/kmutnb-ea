<?php
/** 
* ภาษาไทย เวอร์ชั่น 1.3.0 
* 27/08/2555 
* ไฟล์ภาษาไทยสำหรับ PHPBB3 โดย www.mindphp.com และ www.phpbbthailand.com
*
*/ 

/**
*
* install [English]
*
* @package language
* @version $Id: install.php 8479 2008-03-29 00:22:48Z naderman $
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
	'ADMIN_CONFIG'				=> 'ตั้งค่าส่วนตัวของผู้ดูแลระบบ',
	'ADMIN_PASSWORD'			=> 'รหัสผ่านผู้ดูแลระบบ',
	'ADMIN_PASSWORD_CONFIRM'	=> 'ยืนยันรหัสผ่านผู้ดูแลระบบ',
	'ADMIN_PASSWORD_EXPLAIN'	=> 'กรุณาระบุรหัสผ่านให้อยู่ระหว่าง 6 - 30 ตัวอักษร',
	'ADMIN_TEST'				=> 'ตรวจสอบการติดตั้ง',
	'ADMIN_USERNAME'			=> 'ชื่อผู้ใช้ของผู้ดูแลระบบ',
	'ADMIN_USERNAME_EXPLAIN'	=> 'กรุณาระบุชื่อผู้ใช้ให้อยู่ระหว่าง 3- 20 ตัวอักษร',
	'APP_MAGICK'				=> 'Imagemagick support [ Attachments ]',
	'AUTHOR_NOTES'				=> 'ข้อแนะนำ<br />» %s',
	'AVAILABLE'					=> 'ใช้งานได้',
	'AVAILABLE_CONVERTORS'		=> 'ตัวนำเข้าที่ี่มีอยู่',

	'BEGIN_CONVERT'					=> 'เริ่มการใช้งาน',
	'BLANK_PREFIX_FOUND'			=> 'การสแกนตารางของคุณได้ผลว่าคุณใช้ตารางที่ไม่มีคำนำหน้า',
	'BOARD_NOT_INSTALLED'			=> 'ไม่พบการติดตั้ง',
	'BOARD_NOT_INSTALLED_EXPLAIN'	=> 'ไม่พบโปรแกรม phpBB3 ต้องการการติดตั้ง phpBB3 เพื่อให้สามารถทำงานได้ โปรด <a href="%s">ติดตั้ง phpBB3</a>.',
        'BACKUP_NOTICE'					=> 'โปรดสำรองข้อมูลของบอร์ดคุณก่อนที่จะอัพเดท เพื่อป้องกันในกรณีที่เกิดปัญหาระหว่างขั้นตอนการอัพเดท.',
	'CATEGORY'					=> 'หมวดหมู่',
	'CACHE_STORE'				=> 'ประเภทของระบบแคช',
	'CACHE_STORE_EXPLAIN'		=> 'ตำแหน่งของข้อมูล แคชที่ต้องการกำหนด , ระบบไฟล์ที่เหมาะสมที่สุด',
	'CAT_CONVERT'				=> 'Convert ',
	'CAT_INSTALL'				=> 'การติดตั้ง',
	'CAT_OVERVIEW'				=> 'เริ่มต้น',
	'CAT_UPDATE'				=> 'อัพเดท',
	'CHANGE'					=> 'เปลี่ยน',
	'CHECK_TABLE_PREFIX'		=> 'โปรดตรวจสอบค่า prefix ให้ถูกต้องและลองใหม่อีกครั้ง',
	'CLEAN_VERIFY'				=> 'ทำความสะอาดและตรวจสอบโครงสร้างสุดท้าย',
	'CLEANING_USERNAMES'		=> 'ล้างชื่อผู้ใช้ระบบ',
	'COLLIDING_CLEAN_USERNAME'	=> '<strong>%s</strong> เป็นชื่อผู้ใช้ที่เหมาะสมสำหรับ:',
	'COLLIDING_USERNAMES_FOUND'	=> 'พบชื่อผู้ใช้ที่ซ้ำกันจากบอร์ดเก่า เพื่อทำให้การแปลงเสร็จสิ้น โปรดลบหรือเปลี่ยนชื่อผู้ใช้ในบอร์ดเก่า',
	'COLLIDING_USER'			=> '» รหัสผู้ใช้: <strong>%d</strong> ชื่อผู้ใช้: <strong>%s</strong> (%d ข้อความ)',
	'CONFIG_CONVERT'			=> 'การปรับแต่งค่า',
	'CONFIG_FILE_UNABLE_WRITE'	=> 'ไม่สามารถเขียนไฟล์ config.php ได้ ท่านจำเป็นต้องทำตามวิธีด้านล่างนี',
	'CONFIG_FILE_WRITTEN'		=> 'ไฟล์ config.php ถูกสร้างแล้ว กรุณาไปที่การติดตั้งขั้นตอนถัดไป',
	'CONFIG_PHPBB_EMPTY'		=> 'ไม่มีค่าของตัวแปร  “%s” ในไฟล์การตั้งค่า',
	'CONFIG_RETRY'				=> 'ลองใหม่อีกครั้ง',
	'CONTACT_EMAIL_CONFIRM'		=> 'กรอกอีเมลเดิมอีกครั้ง',
	'CONTINUE_CONVERT'			=> 'ขั้นตอนถัดไป',
	'CONTINUE_CONVERT_BODY'		=> 'การแปลงครั้งก่อนหน้าถูกกำหนดไว้แล้ว คุณสามารถเลือกระหว่างเริ่มการแปลงใหม่หรือทำต่อ',
	'CONTINUE_LAST'				=> 'ขั้นตอนถัดไป',
	'CONTINUE_OLD_CONVERSION'	=> 'ทำการแปลงที่ทำไว้แล้วต่อไป',
	'CONVERT'					=> 'นำเข้า',
	'CONVERT_COMPLETE'			=> 'การนำข้อมูลเข้า เสร็จสิ้นแล้ว',
	'CONVERT_COMPLETE_EXPLAIN'	=> 'ท่านได้นำข้อมูลจากเว็บบอร์ดตัวเก่ามาใช้ใน phpBB 3.0 ตัวนี้เรียบร้อยแล้ว ท่านสามารถ <a href="../">เข้าสู่ระบบ</a>เพื่อเริ่มใช้งาน กรุณาจำไว้ว่า ท่านสามารถอ่าน<a href="http://www.phpbb.com/support/documentation/3.0/" target="_bank">เอกสาร</a> และขอความช่วยเหลือได้จาก <a href="http://www.phpbb.com/community/viewforum.php?f=46" target="_bank">support forums</a>.',
	'CONVERT_INTRO'				=> 'ยินดีต้อนรับสู่ phpBB',
	'CONVERT_INTRO_BODY'		=> 'ท่านสามารถนำเข้า (import) ข้อมูลจากเว็บบอร์ดอื่นที่ได้ติดตั้งไว้ในเซิร์ฟเวอร์ ด้านล่างนี้คือรายชื่อของโมดูลการนำเข้าที่มีอยู่ ถ้าท่านไม่พบโมดูลที่ท่านต้องการในรายการด้านล่างนี้ กรุณาตรวจสอบเว็บไซต์ของ phpBB เผื่อบางทีอาจจะมีโมดูลการนำเข้าให้ท่านดาวน์โหลดเพิ่มเติม กรุณาคลิกที่คำสั่ง \'นำเข้า\' เพื่อเริ่มการนำข้อมูลจากเว็บบอร์ดตัวเก่า มาใช้ใน phpBB3 ตัวนี้',
	'CONVERT_NEW_CONVERSION'	=> 'นำเ้ข้าใหม่อีกครั้ง',
	'CONVERT_NOT_EXIST'			=> 'ตัวแปลงที่ระบุไม่มีอยู่จริง',
	'CONVERT_OPTIONS'			=> 'ตัวเลือก',
	'CONVERT_SETTINGS_VERIFIED'	=> 'ข้อมูลที่ท่านกรอกได้ผ่านการตรวจสอบแล้ว กรุณาคลิกปุ่ม เริ่มการนำเข้า',
	'CONV_ERR_FATAL'			=> 'การแปลงผิดพลาดอย่างร้ายแรง',

	'CONV_ERROR_ATTACH_FTP_DIR'			=> 'บอร์ดเก่า มีการใช้ FTP อัพโหลดสำหรับไฟล์แนบ โปรดยกเลิกการใช้ FTP อัพโหลด เพื่อให้มั่นใจว่าไดเรกทอรี่สำหรับการอัพโหลดถูกระบุ หลังจากนั้นคัดลอกไฟล์แนบทั้งหมดไปที่ไดเรกทอรี่ใหม่ เมื่อคุณทำเสร็จแล้ว ให้เริ่มตัวแปลงใหม่อีกครั้ง',
	'CONV_ERROR_CONFIG_EMPTY'			=> 'ไม่มีค่าการปรับแต่งสำหรับการแปลง',
	'CONV_ERROR_FORUM_ACCESS'			=> 'ไม่สามารถอ่านข้อมูล forum ได้',
	'CONV_ERROR_GET_CATEGORIES'			=> 'ไม่สามารถอ่านหมวดหมู่ได้',
	'CONV_ERROR_GET_CONFIG'				=> 'ไม่สามารถอ่านค่าการปรับแต่งบอร์ดได้',
	'CONV_ERROR_COULD_NOT_READ'			=> 'ไม่สามารถเข้า/อ่าน  “%s”.',
	'CONV_ERROR_GROUP_ACCESS'			=> 'ไม่สามารถอ่านค่า authentication ของกลุ่มได้',
	'CONV_ERROR_INCONSISTENT_GROUPS'	=> 'พบตารางของกลุ่มไม่สอดคล้องกันใน add_bots() - คุณต้องเพิ่มกลุ่มพิเศษถ้าคุณทำด้วยตัวคุณเอง',
	'CONV_ERROR_INSERT_BOT'				=> 'ไม่สามารถแทรก bot ในตารางผู้ใช้',
	'CONV_ERROR_INSERT_BOTGROUP'		=> 'ไม่สามารถแทรก bot ในตาราง bots',
	'CONV_ERROR_INSERT_USER_GROUP'		=> 'ไม่สามารถแทรก user ในตาราง user_group',
	'CONV_ERROR_MESSAGE_PARSER'			=> 'การตรวจสอบข้อความ มีความผิดพลาด',
	'CONV_ERROR_NO_AVATAR_PATH'			=> 'หมายเหตุสำหรับนักพัฒนา: คุณต้องระบุ $convertor[\'avatar_path\'] เพื่อใช้ %s',
	'CONV_ERROR_NO_FORUM_PATH'			=> 'เส้นทางสัมพันธ์ที่ชี้ไปที่บอร์ดต้นกำเนิดยังไม่ถูกระบุ',
	'CONV_ERROR_NO_GALLERY_PATH'		=> 'หมายเหตุสำหรับนักพัฒนา: คุณต้องระบุ $convertor[\'avatar_gallery_path\'] to use %s.',
	'CONV_ERROR_NO_GROUP'				=> 'กลุ่ม “%1$s” ไม่สามารถค้นหาจาก %2$s.',
	'CONV_ERROR_NO_RANKS_PATH'			=> 'หมายเหตุสำหรับนักพัฒนา: คุณต้องระบุ $convertor[\'ranks_path\'] เพื่อใช้ %s',
	'CONV_ERROR_NO_SMILIES_PATH'		=> 'หมายเหตุสำหรับนักพัฒนา: คุณต้องระบุ $convertor[\'smilies_path\'] เพื่อใช้ %s',
	'CONV_ERROR_NO_UPLOAD_DIR'			=> 'หมายเหตุสำหรับนักพัฒนา: คุณต้องระบุ $convertor[\'upload_path\'] เพื่อใช้ %s',
	'CONV_ERROR_PERM_SETTING'			=> 'ไม่สามารถแทรก/อัพเดท การตั้งค่าการอนุญาต',
	'CONV_ERROR_PM_COUNT'				=> 'ไม่สามารถเลือกโฟลเดอร์สำหรับการนับ pm',
	'CONV_ERROR_REPLACE_CATEGORY'		=> 'ไม่สามารถแทรก forum ใหม่แทนที่หมวดหมู่เดิม',
	'CONV_ERROR_REPLACE_FORUM'			=> 'ไม่สามารถแทรก forum ใหม่แทนที่ forum เดิม',
	'CONV_ERROR_USER_ACCESS'			=> 'ไม่สามารถอ่านค่า authentication ของผู้ใช้ได้',
	'CONV_ERROR_WRONG_GROUP'			=> 'ผิดกลุ่มนิยาม “%1$s” ใน %2$s.',
	'CONV_OPTIONS_BODY'					=> 'ข้อมูลในเวบบอร์ดนี้ต้องการข้อมูลในฐานข้อมูล กรุณากรอกรายละเอียดของฐานข้อมูลของเวบบอร์ด; โปรแกรมไม่สามารถสร้างชุดข้อมูลให้ก่อนได้ ',
	'CONV_SAVED_MESSAGES'				=> 'ข้อความที่เก็บไว้',

	'COULD_NOT_COPY'			=> 'ไม่สามารถคัดลอกไฟล์ <strong>%1$s</strong> ไปที่ <strong>%2$s</strong><br /><br />โปรดตรวจสอบว่ามีไดเรกทอรี่จริงและสามารถเขียนทับได้',
	'COULD_NOT_FIND_PATH'		=> 'ไม่สามารถหาเส้นทางไปยังบอร์ดก่อนหน้าได้ โปรดตรวจสอบการตั้งค่าและพยายามอีกครั้ง<br /> เส้นทางที่ระบุคือ %s',

	'DBMS'						=> 'ชนิดของฐานข้อมูล',
	'DB_CONFIG'					=> 'การตั้งค่าของฐานข้อมูล',
	'DB_CONNECTION'				=> 'การติดต่อฐานข้อมูล',
	'DB_ERR_INSERT'				=> 'เกิดพลาดขณะทำการ <code>INSERT</code> query.',
	'DB_ERR_LAST'				=> 'ผิดพลาดขณะทำการ <var>query_last</var>.',
	'DB_ERR_QUERY_FIRST'		=> 'ผิดพลาดขณะทำการ <var>query_first</var>.',
	'DB_ERR_QUERY_FIRST_TABLE'	=> 'ผิดพลาดขณะทำการ <var>query_first</var>, %s (“%s”).',
	'DB_ERR_SELECT'				=> 'ผิดพลาดขณะทำการ <code>SELECT</code> query.',
	'DB_HOST'					=> 'ชื่อเครื่อง (Hostname/DSN)',
	'DB_HOST_EXPLAIN'			=> 'DSN ย่อมาจาก Data Source Name และใช้สำหรับฐานข้อมูล ODBC',
	'DB_HOST_EXPLAIN'			=> 'DSN ย่อมาจาก Data Source Name และใช้สำหรับการติดต่อฐานข้อมูลด้วย ODBC เท่านั้น. สำหรับ PostgreSQL, ใช้ localhost สำหรับติดต่อฐานข้อมูลซ็อกเก็ตโดเมนแบบยูนิกซ์ และใช้ 127.0.0.1 สำหรับการติดต่อด้วย TCP. สำหรับ SQLite, ใส่ full path ของไฟล์ฐานข้อมูลของท่าน.',

	'DB_NAME'					=> 'ชื่อฐานข้อมูล',
	'DB_PASSWORD'				=> 'รหัสผ่านสำหรับการเข้าใช้ฐานข้อมูล',
	'DB_PORT'					=> 'หมายเลขพอร์ตของฐานข้อมูล',
	'DB_PORT_EXPLAIN'			=> 'ถ้าไม่ทราบก็ให้ปล่อยว่างไว้ หรือถ้าคุณรู้ว่าทางเซิร์ฟเวอร์ใช้หมายเลขพอร์ตอะไรก็กรอกลงไป',

	'DB_UPDATE_NOT_SUPPORTED'	=> 'ขออภัย , สคริปต์ นี้ไม่สนับสนุนการอัพเกรด phpBB ของคุณเป็นเวอร์ชั่น “%1$s”. ซึ่งเวอร์ชั่นปุจจุบันของคุณคือ “%2$s”. ต้องอัพเกรดเป็นรุ่นก่อนหน้านี้ก่อนที่จะใช้สคริปต์นี้. ถ้าต้องการความช่วยเหลือให้ไปที่เว็บ phpbbthailand.com.',

	'DB_USERNAME'				=> 'ชื้อผู้ใช้ของฐานข้อมูล',
	'DB_TEST'					=> 'ทดสอบเชื่อมต่อฐานข้อมูล',
	'DEFAULT_LANG'				=> 'ภาษาที่ใช้งาน',
	'DEFAULT_PREFIX_IS'			=> 'ตัวแปลงไม่สามารถหาตารางที่มีคำนำหน้าที่ระบุ โปรดตรวจสอบว่าคุณกรอกข้อมูลถูกต้อง ค่าเริ่มต้นคำนำหน้าตารางสำหรับ %1$s คือ <strong>%2$s</strong>.',
	'DEV_NO_TEST_FILE'			=> 'ไม่มีค่าระบุสำหรับตัวแปร test_file ในตัวแปลง ถ้าคุณใช้ตัวแปลงนี้ คุณไม่ควรเห็นความผิดพลาดนี้ โปรดรายงานข้อความนี้ให้กับผู้แต่งตัวแปลง ถ้าคุณเป็นผู้แต่งตัวแปลง คุณต้องระบุชื่อของไฟล์ที่มีอยู่ในบอร์ดต้นกำเนิดเพื่อให้ตรวจสอบความถูกต้อง',
	'DIRECTORIES_AND_FILES'		=> 'เซตอัพไดเรกทอรี่และไฟล์',
	'DISABLE_KEYS'				=> 'ยกเลิกการใช้คีย์',
	'DLL_FIREBIRD'				=> 'Firebird',
	'DLL_FTP'					=> 'รองรับการ Remote [ การติดตั้ง]',
	'DLL_GD'					=> 'รองรับ GD Graphic [ Visual Confirmation ]',
	'DLL_MBSTRING'				=> 'รองรับ Multi-byte character',
	'DLL_MSSQL'					=> 'MSSQL Server 2000 หรือสูงกว่า',
	'DLL_MSSQL_ODBC'			=> 'MSSQL Server 2000 หรือสูงกว่า โดยใช้่ ODBC',
	'DLL_MSSQLNATIVE'			=> 'MSSQL Server 2005 หรือสูงกว่า [ Native ]',	
	'DLL_MYSQL'					=> 'MySQL',
	'DLL_MYSQLI'				=> 'MySQL ด้วยส่วนเสริม MySQLi',
	'DLL_ORACLE'				=> 'Oracle',
	'DLL_POSTGRES'				=> 'PostgreSQL',
	'DLL_SQLITE'				=> 'SQLite',
	'DLL_XML'					=> 'XML support [ Jabber ]',
	'DLL_ZLIB'					=> 'สนับสนุนการบีบอัด zlib [ gz, .tar.gz, .zip ]',
	'DL_CONFIG'					=> 'ดาวน์โหลดไฟล์การตั้งค่า',
	'DL_CONFIG_EXPLAIN'			=> 'ท่านจะต้องดาวน์โหลดไฟล์ config.php ลงคอมพิวเตอร์ของท่าน จากนั้นท่านจะต้องอัพโหลดไฟล์ config.php ไปทับไฟล์เก่าในไดเรกทอรี่ของ phpBB 3.0 กรุณาจำไว้ว่าจะต้องอัพโหลดไฟล์ในรูปแบบ ASCII (กรุณาอ่านคู่มือของโปรแกรม FTP ที่ท่านใช้)<br />เมื่อท่านอัพโหลดเสร็จเรียบร้อยแล้ว ให้คลิกปุ่ม ทำ  เพื่อไปยังขั้นตอนถัดไป',
	'DL_DOWNLOAD'				=> 'ดาวน์โหลด',
	'DONE'						=> 'เสร็จสิ้น',

	'ENABLE_KEYS'				=> 'กลับมาใช้คีย์ใหม่ การกระทำนี้อาจจะกินเวลานาน',

	'FILES_OPTIONAL'			=> 'ไฟล์และไดเรกทอรีอื่นๆ',
	'FILES_OPTIONAL_EXPLAIN'	=> '<strong>หมายเหตุ</strong> - ไฟล์และไดเรกทอรี่เหล่านี้อาจไม่จำเป็นต้องสนใจก็ได้ ซึ่งระบบการติดตั้งจะพยายามสร้างหรือแก้ไขไฟล์และไดเรกทอรี่เหล่านี้ด้วยตัวเอง แต่ถ้าทุกอย่างผ่านหมด ก็จะช่วยลดระยะเวลาการติดตั้งลงได้',
	'FILES_REQUIRED'			=> 'ไฟล์และไดเรกทอรี',
	'FILES_REQUIRED_EXPLAIN'	=> '<strong>ความต้องการ</strong> - phpBB จะต้องสามารถอ่านและเขียนไฟล์และไดเรกทอรีได้ ถ้าท่านเห็นข้อความ \'ไม่พบ\' ท่านจะต้องทำการสร้างไฟล์หรือไดเรกทอรีนั้นเอง ถ้าท่านเห็นข้อความ \'ไม่สามารถเขียนได้\' ท่านจะต้องแก้ไขสิทธิ์ (CHMOD) ให้กับไฟล์หรือไดเรกทอรีนั้น เพื่ออนุญาตให้ phpBB สามารถเขียนได้',
	'FILLING_TABLE'				=> 'การเติมเต็มตาราง<strong>%s</strong>',
	'FILLING_TABLES'			=> 'คัดลอกตารางฐานข้อมูล',

	'FIREBIRD_DBMS_UPDATE_REQUIRED'		=> 'phpBB ไม่รองรับ Firebird / Interbase เวอร์ชั่นต่ำกว่า 2.1. โปรดอัพเกรด Firebird ของคุณเป็นเวอร์ชั่นที่ 2.1 เป็นต้นไป  ก่อนดำเนินการอัพเกรดต่อไป.',
	
	'FINAL_STEP'				=> 'ขั้นตอนถัดไป',
	'FORUM_ADDRESS'				=> 'ที่อยู่บอร์ด',
	'FORUM_ADDRESS_EXPLAIN'		=> 'คือ URL ของบอร์ดเก่าของคุณ ตัวอย่าง <samp>http://www.example.com/phpBB2/</samp> ถ้าที่อยู่ถูกกรอกที่นี่และไม่ปล่อยให้ว่าง ทุกที่ของที่อยู่นี้จะถูกแทนที่ด้วยที่อยู่บอร์ดใหม่ของคุณ',
	'FORUM_PATH'				=> 'ตำแหน่งโฟลเดอร์ของเว็บบอร์ด',
	'FORUM_PATH_EXPLAIN'		=> '<font face=\'Tahoma,MS Sans Serif\'>ให้กรอกเป็นที่อยู่ไดเรกทอรี่แบบ <strong>สัมพันธ์ (relative)</strong> (เริ่มต้นด้วย ../) กับไดเรคทอรี่ของ phpBB3 ที่ท่านกำลังใช้อยู่</font>',
	'FOUND'						=> 'ค้นหาพบ',
	'FTP_CONFIG'				=> 'ส่งผ่านค่าปรับแต่งผ่านทาง FTP',
	'FTP_CONFIG_EXPLAIN'		=> 'phpBB ตรวจพบฟังก์ชัน FTP คุณอาจจะใช้วิธีนี้ติดตั้ง config.php ถ้าคุณต้องการ คุณต้องให้ข้อมูลตามข้างล่างนี้',
	'FTP_PATH'					=> 'เ้ส้นทาง FTP',
	'FTP_PATH_EXPLAIN'			=> 'เส้นทางของไดเรกทอรี่รากของ phpBB, เช่น <samp>htdocs/phpBB3/</samp>.',
	'FTP_UPLOAD'				=> 'อัพโหลด',

	'GPL'						=> 'General Public License',

	'INITIAL_CONFIG'			=> 'การปรับแต่งพื้นฐาน',
	'INITIAL_CONFIG_EXPLAIN'	=> 'เซิร์ฟเวอร์ของคุณสามารถใช้ phpBB ได้ คุณต้องระบุข้อมูลบางตัว ถ้าคุณไม่ทราบวิธีการติดต่อกับฐานข้อมูล โปรดติดต่อ hosting provider ของคุณ หรือใช้ phpBB support forums เมื่อกรอกข้อมูลโปรดตรวจสอบอย่างรอบคอบก่อนที่จะดำเนินการต่อไป',
	'INSTALL_CONGRATS'			=> 'ขอแสดงความยินดี!',
	'INSTALL_CONGRATS_EXPLAIN'	=> ' คุณติดตั้ง phpBB %1$s สำเร็จแล้ว. เลือกตัวเลือกต่อไป:</p>
		<h2>แปลงบอร์ด ที่มีอยู่เป็น phpBB3</h2>
		<p> phpBB สามารถแปลง phpBB 2.0.x และระบบเว็บบอร์ดอื่นเป็น phpBB3. ถ้าคุณมีบอร์ดที่ต้องการแปลง, คลิืก <a href="%2$s">เริ่มขั้นตอนการแปลง</a>.</p>
		<h2>ไปเป็น phpBB3!</h2>
		<p>ปุ่มด้านล่างนี้จะพาท่านไปยัง Administration Control Panel (ACP) ท่านสามารถตรวจสอบและแก้ไขตัวเลือกตามต้องการ กรุณาอ่าน <a href="http://www.phpbb.com/support/documentation/3.0/" target="_bank">คู่มือ</a> และขอความช่วยเหลือได้จาก <a href="http://www.phpbb.com/community/viewforum.php?f=46" target="_bank">support forums</a> กรุณาอ่าน <a href="%3$s">README</a> เพื่อทราบข้อมูลเพิ่มเติม</p><p><strong>หมายเหตุ: กรุณาลบ, ย้าย, หรือ เปลี่ยนชื่อ ไดเรกทอรี install ก่อนที่จะเริ่มใช้งานเว็บบอร์ด<br />ถ้ามีไดเรกทอรี่นี้อยู่ ท่านจะสามารถใช้งานได้เพียง Administration Control Panel (ACP) เท่านั้น</strong>
		
		',
	'INSTALL_INTRO'				=> 'ยินดีต้อนรับสู่ขั้นตอนการติดตั้ง',

	'INSTALL_INTRO_BODY'		=> 'ตัวเลือกนี้ใช้สำหรับติดตั้ง phpBB ใหม่ลงในเซิร์ฟเวอร์ของท่าน</p><p>ก่อนจะเริ่มการติดตั้ง กรุณาเตรียมข้อมูลรายละเอียดของฐานข้อมูลก่อน ถ้าท่านไม่ทราบข้อมูลรายละเอียดของฐานข้อมูล กรุณาติดต่อผู้ให้บริการเซิร์ฟเวอร์ที่ท่านใช้อยู่ โดยสิ่งที่ท่านจะต้องทราบมีดังนี้:</p>

	<ul>
	<li>ชนิดฐานข้อมูล - ชนิดของฐานข้อมูลที่ต้องใช้</li>
	<li>ชื่อ hostname หรือ DSN - ที่อยู่ของฐานข้อมูล</li>
		<li>หมายเลขพอร์ตของฐานข้อมูล - หมายเลขพอร์ตของฐานข้อมูล (อาจไม่จำเป็นต้องใช้ก็ได้ สามารถใช้ค่าที่ระบบ กำหนดให้ได้).</li>
		<li>ชื่อฐานข้อมูล - ชื่อฐานข้อมูลที่เก็บไว้ในเครื่อง Server </li>
		<li>Username และ Password สำหรับฐานข้อมูล - ใช้สำหรับเข้าระบบฐานข้อมูล</li>
	</ul>

	<p><strong>หมายเหตุ</strong>  ถ้าท่านกำลังจะติดตั้งโดยใช้ SQLite ท่านควรกรอก<u>ที่อยู่ไฟล์ฐานข้อมูลแบบเต็ม</u>ลงในช่อง Database เซิร์ฟเวอร์ hostname และปล่อยให้ช่อง username และรหัสผ่าน ว่างไว้. เพื่อความปลอดภัย ท่านควรจะตรวจสอบให้แน่ใจว่า ไฟล์ฐานข้อมูลนั้นถูกเก็บไว้ในตำแหน่งที่ไม่สามารถเรียกใช้งานได้โดยตรงจากเว็บบราวเซอร์</p>

	<p>phpBB3 สามารถใช้งานฐานข้อมูลเหล่านี้ได้</p>
	<ul>
		<li>MySQL 3.23 หรือสูงกว่า (MySQLi supported)</li>
		<li>PostgreSQL 7.3+</li>
		<li>SQLite 2.8.2+</li>
		<li>Firebird 2.1+</li>
		<li>MS SQL Server 2000 หรือสูงกว่า (ใช้งานโดยตรง หรือผ่าน ODBC)</li>
		<li>MS SQL Server 2005 หรือสูงกว่า (native)</li>
		<li>Oracle</li>
	</ul>
	
	<p>ซึ่งหน้าถัดไปนี้จะแสดงเฉพาะฐานข้อมูลที่จะสามารถถูกนำมาใช้งานได้เท่านั้น',
	'INSTALL_INTRO_NEXT'		=> 'เพื่อเริ่มต้นการติดตั้ง โปรดกดปุ่มข้างล่าง',
	'INSTALL_LOGIN'				=> ' Login ',
	'INSTALL_NEXT'				=> 'ขั้นถัดไป',
	'INSTALL_NEXT_FAIL'			=> 'มีความผิดพลาด คุณควรแก้ไขให้ถูกต้องก่อนที่จะไปขั้นถัดไป ความผิดพลาดอาจจะทำให้การติดตั้งไม่สำเร็จ',
	'INSTALL_NEXT_PASS'			=> 'ไม่พบข้อผิดพลาด คุณพร้อมที่จะไปขั้นถัดไป',
	'INSTALL_PANEL'				=> 'การติดตั้ง',
	'INSTALL_SEND_CONFIG'		=> 'phpBB ไม่สามารถเขียนข้อมูลการปรับแต่งโดยตรงใน config.php อาจเป็นเพราะว่าไฟล์ไม่มีอยู่จริงหรือไม่สามารถเขียนทับได้',
	'INSTALL_START'				=> 'เริ่มการติดตั้ง',
	'INSTALL_TEST'				=> 'ทดสอบอีกครั้ง',
	'INST_ERR'					=> 'พบข้อผิดพลาดขณะติดตั้ง',
	'INST_ERR_DB_CONNECT'		=> 'ไม่สามารถติดต่อกับฐานข้อมูลได้ ข้อความผิดพลาดคือ',
	'INST_ERR_DB_FORUM_PATH'	=> 'ไฟล์ฐานข้อมูลนี้อยู่ในไดเรกทอรี่ของเว็บบอร์ด ท่านควรจะนำไฟล์นี้ไปวางไว้ในตำแหน่งที่ไม่สามารถใช้งานได้โดยเว็บบราวเซอร์',
	'INST_ERR_DB_INVALID_PREFIX'=> 'คำนำหน้าชื่อตารางที่กรอกไม่ถูกต้อง. คำนำหน้าชื่อตาราง จำเป็นต้องขึ้นต้นด้วยอักษรและมีเพียงตัวอักษรตัวเลขและขีดเส้นใต้.',
	
	'INST_ERR_DB_NO_ERROR'		=> 'ไม่พบข้อความผิดพลาด',
	'INST_ERR_DB_NO_MYSQLI'		=> 'เวอร์ชั่นของ MySQL ที่ติดตั้งอยู่ ไม่สามารถใช้งาน MySQL และ MySQLi extension ตามที่ท่านเลือกไว้ กรุณาลองใช้เฉพาะ MySQL แทน',
	'INST_ERR_DB_NO_SQLITE'		=> 'เวอร์ชั่นของ SQLite extension เก่าเกินไป กรุณาอัพเกรดเป็นเวอร์ชั่น 2.8.2 เป็นอย่างน้อย',
	'INST_ERR_DB_NO_ORACLE'		=> 'ท่านต้องแก้ไขฐานข้อมูล Oracle ตัวแปร <var>NLS_CHARACTERSET</var> ให้เป็น <var>UTF8</var> อาจแก้ไขโดยอัพเกรดเป็นเวอร์ชั่น 9.2+ หรือแก้ไขตัวแปรนั้น',
	'INST_ERR_DB_NO_FIREBIRD'	=> 'เวอร์ชั่นของ Firebird ต่ำกว่า 2.1 กรุณาอัพเกรดเป็นเวอร์ชั่นใหม่',
	'INST_ERR_DB_NO_FIREBIRD_PS'=> 'ฐานข้อมูล Firebird มี page size น้อยกว่า 8192 ซึ่งจำเป็นจะต้องมีอย่างน้อย 8192',
	'INST_ERR_DB_NO_POSTGRES'	=> '่อฐานข้อมูลที่ท่านเลือก ไม่ได้ถูกสร้างโดยใช้การเข้ารหัสแบบ <var>UNICODE</var> หรือ <var>UTF8</var> กรุณาเลือกชื่อฐานข้อมูลที่ถูกสร้างโดยใช้การเข้ารหัสแบบ <var>UNICODE</var> or <var>UTF8</var>',
	'INST_ERR_DB_NO_NAME'		=> 'ท่านไม่ได้พิมพ์ชื่อฐานข้อมูล',
	'INST_ERR_EMAIL_INVALID'	=> 'อีเมล ไม่ถูกต้อง',
	'INST_ERR_EMAIL_MISMATCH'	=> 'ท่านพิมพ์ อีเมล ทั้งสองช่องไม่เหมือนกัน',
	'INST_ERR_FATAL'			=> 'ความผิดพลาดร้ายแรงระหว่างการติดตั้ง',
	'INST_ERR_FATAL_DB'			=> 'เกิดข้อความผิดพลาดร้ายแรงที่แก้ไขไม่ได้ในฐานข้อมูล อาจเป็นเพราะ username ที่ใช้ไม่มีสิทธิ์ใช้คำสั่ง <code>CREATE TABLES</code> หรือ <code>INSERT</code>, ฯลฯ. หรืออาจเป็นเพราะท่านกำลังพยายามติดตั้ง phpBB ทับตัวเก่า<br />กรุณาอ่านรายละเอียดที่ด้านล่างนี้ และติดต่อผู้ให้บริการเซิร์ฟเวอร์เพื่อแก้ไข หรือขอทราบข้อมูลเพิ่มเติมที่ support forums ของ phpBB',
	'INST_ERR_FTP_PATH'			=> 'ไม่สามารถใช้งานไดเรคทอรี่ได้ กรุณาตรวจสอบที่อยู่ไดเรกทอรี่',
	'INST_ERR_FTP_LOGIN'		=> 'ไม่สามารถเข้าสู่ระบบ FTP กรุณาตรวจสอบ username และรหัสผ่าน',
	'INST_ERR_MISSING_DATA'		=> 'กรุณากรอกให้ครบทุกช่อง',
	'INST_ERR_NO_DB'			=> 'ไม่สามารถเรียกใช้โมดูลสำหรับฐานข้อมูลที่เลือก',
	'INST_ERR_PASSWORD_MISMATCH'	=> 'ท่านพิมพ์รหัสผ่าน ทั้งสองช่องไม่เหมือนกัน',
	'INST_ERR_PASSWORD_TOO_LONG'	=> 'ท่านพิมพ์รหัสผ่าน ยาวเกิน 30 ตัวอักษร',
	'INST_ERR_PASSWORD_TOO_SHORT'	=> 'ท่านพิมพ์รหัสผ่าน สั้นกว่า 6 ตัวอักษร',
	'INST_ERR_PREFIX'			=> 'มีตารางที่ใช้คำนำหน้าชื่อตารางนี้อยู่ก่อนแล้ว กรุณาใช้คำนำหน้าชื่อตารางตัวอื่นแทน',
	'INST_ERR_PREFIX_INVALID'	=> 'มีสัญลักษณ์พิเศษอยู่ในคำนำหน้าชื่อตาราง กรุณาอย่าใช้สัญลักษณ์พิเศษ เช่น เครื่องหมายลบ',
	'INST_ERR_PREFIX_TOO_LONG'	=> 'คำนำหน้าชื่อตารางยาวเกิน  %d ตัวอักษร',
	'INST_ERR_USER_TOO_LONG'	=> 'ท่านพิมพ์รหัสผ่าน ยาวเกิน 20 ตัวอักษร',
	'INST_ERR_USER_TOO_SHORT'	=> 'ท่านพิมพ์รหัสผ่าน สั้นกว่า 3 ตัวอักษร',
	'INVALID_PRIMARY_KEY'		=> 'primary key ไม่ถูกต้อง: %s',

	'LONG_SCRIPT_EXECUTION'		=> 'ไม่สามารถหยุดการทำงานของ Script ได้',

	// mbstring
	'MBSTRING_CHECK'						=> 'ตรวจสอบ <samp>mbstring</samp> extension',
	'MBSTRING_CHECK_EXPLAIN'				=> '<strong>ความต้องการ</strong> - <samp>mbstring</samp> เป็น Extension ของ PHP ซึ่งจัดการเกี่ยวกับ multibyte string functions. คุณสมบัตบางอย่างไม่เข้ากับ phpBB จึงต้องปิดการใช้งาน',
	'MBSTRING_FUNC_OVERLOAD'				=> 'Function overloading',
	'MBSTRING_FUNC_OVERLOAD_EXPLAIN'		=> '<var>mbstring.func_overload</var> ต้องกำหนดเพียง 0 หรือ 4.',
	'MBSTRING_ENCODING_TRANSLATION'			=> 'Transparent character encoding',
	'MBSTRING_ENCODING_TRANSLATION_EXPLAIN'	=> '<var>mbstring.encoding_translation</var> ต้องกำหนดค่าเป็น 0.',
	'MBSTRING_HTTP_INPUT'					=> 'HTTP input character conversion',
	'MBSTRING_HTTP_INPUT_EXPLAIN'			=> '<var>mbstring.http_input</var> ต้องกำหนดค่าเป็น <samp>ใช่</samp>.',
	'MBSTRING_HTTP_OUTPUT'					=> 'HTTP output character conversion',
	'MBSTRING_HTTP_OUTPUT_EXPLAIN'			=> '<var>mbstring.http_output</var> ต้องกำหนดค่าเป็น  <samp>ใช่</samp>.',

	'MAKE_FOLDER_WRITABLE'		=> 'โปรดตรวจสอบว่าโฟลเดอร์มีอยู่จริงและสามารถเขียนทับได้ หลังจากนั้นพยายามลองใหม่อีกครั้ง:<br />»<strong>%s</strong>.',
	'MAKE_FOLDERS_WRITABLE'		=> 'โปรดตรวจสอบว่าโฟลเดอร์มีอยู่จริงและสามารถเขียนทับได้:<br />»<strong>%s</strong>.',

	'MYSQL_SCHEMA_UPDATE_REQUIRED'	=> 'โครงสร้างตารางยังเป็นเวอร์ชั่นเก่า. phpBB พบโครงสร้างสำหรับ MySQL 3.x/4.x, แต่ Server ใช้ MySQL %2$s.<br /><strong> ก่อนที่จะเริมอัพเดด, คุณต้องอัพเกรดโครงสร้างตารางก่อน.</strong><br /><br />ข้อมูลอ้างอิง <a href="http://www.phpbb.com/kb/article/doesnt-have-a-default-value-errors/">บทความเกี่ยวกับการอัพเกรดโครงสร้างตารางของ Mysql </a>.หากคุณพบปัญหากรุณาใช้ <a href="http://www.phpbbthailand.com/viewforum.php?f=24">สอบถามปัญหาการติดตั้ง และอัพเกรด</a>.',

	'NAMING_CONFLICT'			=> 'การตั้งชื่อขัดแย้งกัน: %s and %s are both aliases<br /><br />%s',
	'NEXT_STEP'					=> 'ขั้นตอนถัดไป',
	'NOT_FOUND'					=> 'ค้นหาไม่พบ',
	'NOT_UNDERSTAND'			=> 'ไม่เข้าใจ %s #%d, ตาราง %s (“%s”)',
	'NO_CONVERTORS'				=> 'ไม่มีตัวแปลงให้ใช้',
	'NO_CONVERT_SPECIFIED'		=> 'ไม่มีการระบุตัวแปลง',
	'NO_LOCATION'				=> 'ค้นหาไม่พบ ถ้าท่านทราบที่อยู่ของโปรแกรม Imagemagick ที่ติดตั้งไว้ ท่านสามารถนำมากรอกที่แป้นควบคุมของผู้ดูแลระบบได้ในภายหลัง',
	'NO_TABLES_FOUND'			=> 'ไม่พบตาราง',

	'OVERVIEW_BODY'				=> 'ยินดีต้อนรับสู่ phpBB3!<br /><br />phpBB™ ถูกใช้อย่างกว้างขวางเพราะเป็น open source และเป็นเวอร์ชั่นล่าสุด, phpBB3 มีรองรับฟีเจอร์ครบ, ใช้งานง่าย, และได้รับการสนับสนุนจาก phpBB เป็นอย่างดี. ซึ่งเวอร์ชั่นนี้จะช่วยให้เราสามารถตรวจสอบข้อผิดพลาดและปัญหาได้ดีขึ้น โดยนำข้อผิดพลาดจาก phpBB2 มาปรับแก้ และเพิ่มฟีเจอร์เข้าไปเพื่อให้สามารถง่ายต่อการใช้งาน สามารถอ่านรายละเอียดเพิ่มเติมได้ที่นี่ <a href="../docs/INSTALL.html" target="_bank"> คู่มือการติดตั้ง</a>.<br /><br />กรุณาคลิกที่แท็บคำสั่ง "การติดตั้ง" ด้านบนเพื่อเริ่ม',

	'PCRE_UTF_SUPPORT'				=> 'รองรับ PCRE UTF-8',
	'PCRE_UTF_SUPPORT_EXPLAIN'		=> 'phpBB จะ <strong>ไม่สามารถใช้งานได้</strong> ถ้าการติดตั้ง PHP ของคุณไม่รองรับ UTF-8 ในรูปแบบ PCRE extension.',
	'PHP_GETIMAGESIZE_SUPPORT'			=> 'function getimagesize() ของ PHP สามารถใช้งานได้ ',
	'PHP_GETIMAGESIZE_SUPPORT_EXPLAIN'	=> '<strong>ความต้องการ</strong> - ถ้าต้องการให้ phpBB ทำงานได้อย่างถูกต้อง ฟังก์ชันนี้จะต้องสามารถใช้งานได้',
	'PHP_OPTIONAL_MODULE'			=> 'โมดูลพิเศษ',
	'PHP_OPTIONAL_MODULE_EXPLAIN'	=> '<strong>หมายเหตุ</strong> - โมดูลหรือโปรแกรมเหล่านี้เป็นสิ่งเพิ่มเติม แต่ถ้าสามารถใช้งานได้ ก็จะช่วยเพิ่มความสามารถให้กับ phpBB มากขึ้น',
	'PHP_SUPPORTED_DB'				=> 'ฐานข้อมูลที่ใช้งานได้',
	'PHP_SUPPORTED_DB_EXPLAIN'		=> '<strong>ความต้องการ</strong> - จะต้องมีอย่างน้อย 1 ฐานข้อมูลที่ใช้งานได้ ถ้าไม่มีฐานข้อมูลที่ใช้งานได้เลย กรุณาติดต่อผู้ให้บริการเซิร์ฟเวอร์ หรือถ้าท่านติดตั้งเซิร์ฟเวอร์เอง กรุณาอ่านคู่มือการติดตั้ง PHP อย่างละเอียด',
	'PHP_REGISTER_GLOBALS'			=> 'การติดตั้ง PHP <var>register_globals</var> ไม่สามารถใช้งาน',
	'PHP_REGISTER_GLOBALS_EXPLAIN'	=> 'phpBB จะยังสามารถใช้งานได้แม้ตัวแปรนี้ไม่ได้ถูกยกเลิก แต่เพื่อความปลอดภัย กรุณายกเลิกการใช้งานตัวแปรนี้ในการตั้งค่าของ PHP',
	'PHP_SAFE_MODE'					=> 'Safe mode',
	'PHP_SETTINGS'					=> 'เวอร์ชั่นของ PHP และการตั้งค่า',
	'PHP_SETTINGS_EXPLAIN'			=> '<strong>ความต้องการ</strong> - ท่านจะต้องใช้ PHP 4.3.3 เป็นอย่างน้อย ในการติดตั้ง phpBB ถ้ามีข้อความ <var>safe mode</var> แสดงว่า PHP ถูกติดตั้งและทำงานใน safe mode ซึ่งจะจำกัดความสามารถในการควบคุมและความสามารถอื่นๆลง',
	'PHP_URL_FOPEN_SUPPORT'			=> 'การตั้งค่า PHP <var>allow_url_fopen</var> สามารถใช้งานได้',
	'PHP_URL_FOPEN_SUPPORT_EXPLAIN'	=> '<strong>หมายเหตุ</strong> -  ตัวแปรนี้เป็นสิ่งเพิ่มเติม แต่ฟังก์ชันบางอย่างของ phpBB เช่น รูปภาพส่วนตัวจากเว็บภายนอก (off-site avatars)',
	'PHP_VERSION_REQD'				=> 'PHP version >= 4.3.3',
	'POST_ID'						=> 'Post ID',
	'PREFIX_FOUND'					=> 'การสแกนตารางของคุณได้ผลว่าคุณใช้ตารางที่มี <strong>%s</strong> เป็นคำนำหน้าตาราง',
	'PREPROCESS_STEP'				=> 'Executing pre-processing functions/queries',
	'PRE_CONVERT_COMPLETE'			=> 'ท่านสามารถคลิกปุ่ม ขั้นตอนถัดไป เพื่อเริ่มการนำข้อมูลเข้า ซึ่งท่านอาจต้องทำการแก้ไขหลายอย่างด้วยตัวเอง    เมื่อการนำข้อมูลเข้าเสร็จสิ้นลง กรุณาตรวจสอบสิทธิ์, สร้างรายการค้นหาใหม่ถ้าจำเป็น, และ อย่าลืมตรวจสอบว่าทุกไฟล์ได้ถูกคัดลอกมาอย่างถูกต้อง เช่น ไฟล์รูปภาพประจำตัว (avatars) และ รูปแสดงอารมณ์ (smilies)',
	'PROCESS_LAST'					=> 'เข้าสู่ระบบล่าสุด',

	'REFRESH_PAGE'				=> 'เปลี่ยนหน้าอัตโนมัติ',
	'REFRESH_PAGE_EXPLAIN'		=> 'ถ้าท่านเลือก ใช่ ตัวนำเข้าจะเปลี่ยนหน้าไปยังขั้นตอนถัดไปโดยอัตโนมัติ แต่ถ้าท่านเพิ่งใช้งานตัวนำเข้านี้ เป็นครั้งแรก หรือ ต้องการทดสอบปัญหาต่างๆ กรุณาเลือกเป็น ไม่ใช่',
	'REQUIREMENTS_TITLE'		=> 'คุณสมบัติของเซิร์ฟเวอร์',
	'REQUIREMENTS_EXPLAIN'		=> 'ก่อนจะเริ่มทำการติดตั้งจริง phpBB จะทดสอบบางอย่างกับเซิร์ฟเวอร์ของท่าน เพื่อให้แน่ใจว่าท่านจะสามารถใช้งาน phpBB ได้ กรุณาอ่านผลลัพธ์ทั้งหมดอย่างละเอียด และอย่าทำการติดตั้งต่อจนกว่าจะผ่านการทดสอบทั้งหมด รวมถึงโมดูลพิเศษที่ท่านต้องการจะใช้ด้วย',
	'RETRY_WRITE'				=> 'พยายามเขียนการปรับแต่งอีกครั้ง',
	'RETRY_WRITE_EXPLAIN'		=> 'ถ้าคุณต้องการเปลี่ยนการอนุญาตใน config.php เพื่อให้ phpBB สามารถเขียนทับได้ คุณสามารถคลิก Retry เพื่อลองอีกครั้ง จำไว้ว่าคุณควรเปลี่ยนการอนุญาตใน config.php กลับหลังจาก phpBB ติดตั้งสำเร็จ',

	'SCRIPT_PATH'				=> 'ตำแหน่งที่อยู่ของเว็บบอร์ด',
	'SCRIPT_PATH_EXPLAIN'		=> 'เป็นตำแหน่ง URL ของเว็บบอร์ด แต่ไม่ต้องระบุชื่อ domain เช่น <samp>/phpBB3</samp>.',
	'SELECT_LANG'				=> 'เลือกภาษา',
	'SERVER_CONFIG'				=> 'กำหนดค่าเริ่มต้นให้ Server',
	'SEARCH_INDEX_UNCONVERTED'	=> 'ยังไม่ได้ทำการแปลง รายการค้นหา',
	'SEARCH_INDEX_UNCONVERTED_EXPLAIN'	=> 'ายการแปลงของเว็บบอร์ดตัวเก่ายังไม่ได้ถูกแปลง ซึ่งจะทำให้ไม่สามารถค้นหาข้อความในเว็บบอร์ดได้ กรุณาไปที่ Administration Control Panel เลือก บำรุงรักษา แล้วเลือกเมนูย่อย รายการค้นหา',
	'SOFTWARE'					=> 'ซอร์ตแวร์เว็บบอร์ด',
	'SPECIFY_OPTIONS'			=> 'กรอกข้อมูลของเว็บบอร์ด',
	'STAGE_ADMINISTRATOR'		=> 'รายละเอียดสำหรับ ผู้ดูแลระบบ',
	'STAGE_ADVANCED'			=> 'การตั้งค่าชั้นสูง',
	'STAGE_ADVANCED_EXPLAIN'	=> 'การตั้งค่าต่างๆในหน้านี้ มีไว้สำหรับให้ท่านสามารถแก้ไขค่าต่างๆที่ไม่ใช่ค่าดั้งเดิม แต่ถ้าท่านไม่แน่ใจ กรุณาข้ามไปขั้นตอนถัดไป ซึ่งท่านสามารถแก้ไขค่าเหล่านี้ที่ Administration Control Panel ได้ในภายหลัง',
	'STAGE_CONFIG_FILE'			=> 'สร้างไฟล์การตั้งค่า',
	'STAGE_CREATE_TABLE'		=> 'สร้างตารางในฐานข้อมูล',
	'STAGE_CREATE_TABLE_EXPLAIN'	=> 'สร้างตารางในฐานข้อมูลสำหรับ phpBB 3.0 เสร็จเรียบร้อยแล้ว คลิกปุ่ม ขั้นตอนถัดไป เพื่อจบการติดตั้ง',
	'STAGE_DATABASE'			=> 'ตั้งค่าฐานข้อมูล',
	'STAGE_FINAL'				=> 'จบกระบวนการติดตั้ง',
	'STAGE_INTRO'				=> 'คำแนะนำ',
	'STAGE_IN_PROGRESS'			=> 'กำลังนำข้อมูลเข้า',
	'STAGE_REQUIREMENTS'		=> 'ตรวจสอบระบบ',
	'STAGE_SETTINGS'			=> 'การตั้งค่า',
	'STARTING_CONVERT'			=> 'เริ่มกระบวนการนำข้อมูลเข้า',
	'STEP_PERCENT_COMPLETED'	=> 'ขั้นตอนที่ <strong>%d</strong> จาก <strong>%d</strong>',
	'SUB_INTRO'					=> 'คำแนะนำ',
	'SUB_LICENSE'				=> 'ลิขสิทธิ์',
	'SUB_SUPPORT'				=> 'ความช่วยเหลือ',
	'SUCCESSFUL_CONNECT'		=> 'ติดต่อสำเร็จ',
	'SUPPORT_BODY'				=> 'ท่านสามารถขอความช่วยเหลือ เรื่องต่อไปนี้ /p><ul><li>การติดตั้ง</li><li>การกำหนดค่า</li><li>คำถามทางเทคนิค</li><li>ปัยญาเกี่ยวข้อผิดพลาดที่เกิดจากระบบ</li><li>การแก้ไขข้อผิดพลาดเกี่ยวกับ (RC) </li><li>การโอนข้อมูลจาก  phpBB 2.0.x ไป phpBB3</li><li>การโอนข้อมูลจากเวบบอร์ดชนิดอื่น ไป phpBB3 (เพิ่มเติมได้ที่ <a href="http://www.phpbb.com/community/viewforum.php?f=65" target="_bank">การโอนข้อมูล Forum</a>)</li></ul><p>เรายังคงใช้ phpBB3 เวอร์ชั่น Beta เป็นเวอร์ชั่นล่าสุด</p><h2>MODs / Styles</h2><p>สำหรับเรื่อง  MODs, ความสามารถเพิ่มเติมได้ที่ <a href="http://www.phpbb.com/community/viewforum.php?f=81" target="_bank">การปรับแต่ง Forum </a>.<br />สำหรับเนื้อหาที่เกี่ยวข้องกับ styles, templates และ imagesets, เพิ่มเติมได้ที่  <a href="http://www.phpbb.com/community/viewforum.php?f=80" target="_bank">Styles Forum</a>.<br /><br />หากมีปัญหาเกี่ยวกับการติดตั้ง,สามารถดูเพิ่มเติมได้ที่</p><h2>เพิ่มเติม</h2><p><a href="http://www.phpbb.com/community/viewtopic.php?f=14&amp;t=571070" target="_bank">ยินดีต้อนรับสู่ phpBB3</a><br /><a href="http://www.phpbb.com/support/" target="_bank">ฝ่ายสนับสนุน</a><br /><a href="http://www.phpbb.com/support/documentation/3.0/quickstart/" target="_bank">รายละเอียดแบบคราวๆ </a><br /><br />หากต้องการได้รับข้อมูล เพิ่มเติม <a href="http://www.phpbb.com/support/" target="_bank">สมัครมาชิกได้ที่นี่</a><br /><br />',
	'SYNC_FORUMS'				=> 'เริ่มการถ่ายโอนข้อมูลบอร์ด',
	'SYNC_POST_COUNT'			=> 'จำนวนการถ่ายโอนข้อมูล ',
	'SYNC_POST_COUNT_ID'		=> 'จำนวนการถ่ายโอนข้อมูล <var>entry</var> %1$s to %2$s.',
	'SYNC_TOPICS'				=> 'เริ่มการถ่ายโอนข้อมูลกระทู้',
	'SYNC_TOPIC_ID'				=> 'ถ่ายโอนข้อมูลจาก <var>topic_id</var> %1$s to %2$s.',

	'TABLES_MISSING'			=> 'ไม่พบตาราง<br />» <strong>%s</strong>.',
	'TABLE_PREFIX'				=> 'คำนำหน้าชื่อตาราง',
'TABLE_PREFIX_EXPLAIN'		=> 'คำนำหน้าชื่อตารางต้องขึ้นต้นด้วยตัวอักษรและตามด้วยตัวอักษร ตัวเลข และ _ เท่านั้น.',	
	'TABLE_PREFIX_SAME'			=> 'ต้องใช้คำนำหน้าตารางเหมือนกันกับซอฟท์แวร์ต้นแบบ<br /> คำนำหน้าที่ระบุคือ %s.',
	'TESTS_PASSED'				=> 'ผ่านการทดสอบ',
	'TESTS_FAILED'				=> 'ไม่ผ่านการทดสอบ',

	'UNABLE_WRITE_LOCK'			=> 'ไม่สามารถเขียนไฟล์ที่ถูกล็อก',
	'UNAVAILABLE'				=> 'ใช้งานไม่ได้',
	'UNWRITABLE'				=> 'เขียนไม่ได้',
	'UPDATE_TOPICS_POSTED'		=> 'กำลังสร้างข้อมูลโพสต์ในกระทู้',
	'UPDATE_TOPICS_POSTED_ERR'	=> 'มีความผิดพลาดขณะสร้างโพสต์ในกระทู้ คุณสามารถลองอีกครั้งหลังจากกระบวนการแปลงเสร็จสิ้น',
	'VERIFY_OPTIONS'			=> 'การตรวจสอบตัวเลือกการแปลง',
	'VERSION'					=> 'เวอร์ชั่น',

	'WELCOME_INSTALL'			=> 'ยินดีต้อนรับเข้าสู่การติดตั้งเว็บไซต์ phpBB3',
	'WRITABLE'					=> 'สามารถเขียนได้',
));

// Updater
$lang = array_merge($lang, array(
	'ALL_FILES_UP_TO_DATE'		=> 'ทุกไฟล์เป็นไฟล์ใหม่ล่าสุดของ phpBB แล้ว คุณสามารถ <a href="../ucp.php?mode=login">เข้าสู่ระบบ</a> และตรวจสอบทุกอย่างว่าทำงานได้ปกติ อย่าลืมลบเปลี่ยนชื่อ หรือย้ายไดเรกทอรี่ที่ติดตั้ง! 
	
	ไฟล์ทั้งหมดเป็นไฟล์ใหม่ล่าสุดของ phpBB แล้ว . คุณควร <a href="../ucp.php?mode=login&amp;redirect=adm/index.php%3Fi=send_statistics%26mode=send_statistics">เข้าสู่ระบบ</a> และเช็คว่าทุกอย่างทำงานเป็นปกติ. อย่าลืมลบหรือเปลี่ยนชื่อ หรือ ย้ายโฟลเดอร์ install ! Please send us updated information about your server and board configurations from the <a href="../ucp.php?mode=login&amp;redirect=adm/index.php%3Fi=send_statistics%26mode=send_statistics">Send statistics</a> module in your ACP.
	',
	'ARCHIVE_FILE'				=> 'Source file within archive',

	'BACK'				=> 'ย้อนกลับ',
	'BINARY_FILE'		=> 'ไฟล์ไบนารี',
	'BOT'				=> 'Spider/Robot',

	'CHANGE_CLEAN_NAMES'			=> 'วิธีนี้จะเป็นการยืนยัน ชื่อผู้ใช้ ชื่อผู้ใช้ต้องไม่ซ้ำกับผู้ใช้ท่านอื่น หากระบบตรวพบต้องทำการลบหรือเปลี่ยนชื่อ ผู้ใช้หนึ่งท่านต่อหนึ่ง ชื่อผู้ใช้เท่านั้น ',
	'CHECK_FILES'					=> 'ตรวจสอบไฟล์',
	'CHECK_FILES_AGAIN'				=> 'ตรวจสอบไฟล์อีกครั้ง',
	'CHECK_FILES_EXPLAIN'			=> 'ขั้นถัดไป ทุกไฟล์จะถูกตรวจสอบกับไฟล์ล่าสุด - ขั้นตอนนี้อาจกินเวลานานหากเป็นการตรวจสอบครั้งแรก',
	'CHECK_FILES_UP_TO_DATE'		=> 'ไฟล์ของคุณใหม่ล่าสุดแล้ว คุณอาจจะต้องการตรวจสอบไฟล์เพื่อให้แน่ใจว่าไฟล์ของคุณใหม่จริง',
	'CHECK_UPDATE_DATABASE'			=> 'ทำกระบวนการอัพเดทต่อไป',
	'COLLECTED_INFORMATION'			=> 'ข้อมูลของไฟล์ที่รวบรวมมาได้',
	'COLLECTED_INFORMATION_EXPLAIN'	=> 'รายการข้่างล่างนี้แสดงข้อมูลเกี่ยวกับไฟล์ที่ต้องการการอัพเดท โปรดอ่านข้อมูลเพื่อให้ทราบความหมายและคุณต้องทำอะไรเพื่อให้การอัพเดทสำเร็จ',
	'COLLECTING_FILE_DIFFS'			=> 'ข้อมูลไฟล์ที่แตกต่างกัน',
	'COMPLETE_LOGIN_TO_BOARD'		=> 'คุณสามารถ<a href="../ucp.php?mode=login">เข้าสู่ระบบ</a> และตรวจสอบทุกอย่างว่าทำงานได้ปกติ อย่าลืมลบ หรือ เปลี่ยนชื่อ หรือ ย้ายไดเรกทอรี่ install!',
	'CONTINUE_UPDATE_NOW'			=> 'ทำกระบวนการอัพเดทต่อไป',

	'CONTINUE_UPDATE'				=> 'ดำเนินการต่อ',					// Shown after file upload to indicate the update process is not yet finished
	
	'CURRENT_FILE'					=> 'ไม่ตรงกัน - ไฟล์ต้นฉบับก่อนที่อัพเดท',
	'CURRENT_VERSION'				=> 'รุ่นที่ใช้ปัจจุบัน',

	'DATABASE_TYPE'						=> 'ชนิดฐานข้อมูล',
	'DATABASE_UPDATE_INFO_OLD'			=> 'ฐานข้อมูลของไฟล์ในไดเรกทอรี่ที่ติดตั้ง ไม่อัพเดทแล้ว โปรดตรวจสอบว่าคุณได้ทำการอัพโหลดไฟล์เวอร์ชั่นที่ถูกต้อง',
	'DELETE_USER_REMOVE'				=> 'ลบผู้ใช้งานและโพสต์',
	'DELETE_USER_RETAIN'				=> 'ลบเฉพาะผู้ใช้งานไม่ลบโพสต์',
	'DESTINATION'						=> 'ไฟล์เป้าหมาย',
	'DIFF_INLINE'						=> 'ในบรรทัด',
	'DIFF_RAW'							=> 'Raw unified diff',
	'DIFF_SEP_EXPLAIN'					=> 'ท้ายไฟล์ปัจจุบัน / จุดเริ่มต้นของไฟล์อัพเดท',
	'DIFF_SIDE_BY_SIDE'					=> 'Side by Side',
	'DIFF_UNIFIED'						=> 'Unified diff',
	'DO_NOT_UPDATE'						=> 'อย่าอัพเดทไฟล์นี้',
	'DONE'								=> 'ทำ',
	'DOWNLOAD'							=> 'ดาวน์โหลด',
	'DOWNLOAD_AS'						=> 'ดาวน์โหลด เป็น',
	'DOWNLOAD_UPDATE_METHOD_BUTTON'		=> 'ดาวน์โหลดไฟล์(แนะนำวิธีนี้)',	
	'DOWNLOAD_UPDATE_METHOD'			=> 'ดาวน์โหลดไฟล์บีบอัดที่ถูกแก้้ไขแล้ว',

	'DOWNLOAD_CONFLICTS'				=> 'ดาวน์โหลดความแตกต่างของไฟล์',
	'DOWNLOAD_CONFLICTS_EXPLAIN'		=> 'ค้นหาสำหรับ &lt;&lt;&lt; ข้อแตกต่าง',
	
	'DOWNLOAD_UPDATE_METHOD_EXPLAIN'	=> 'เมื่อคุณดาวน์โหลดแล้ว คุณต้องแตกไฟล์บีบอัด  คุณจะพบไฟล์ที่ถูกแก้ไข และคุณต้องอัพโหลดไปที่ไดเรกทอรี่รากของบอร์ด ตามตำแหน่งที่ถูกต้อง หลังจากอัพโหลดเสร็จแล้ว ให้คุณตรวจสอบไฟล์อีกครั้งด้วยปุ่มข้างล่างนี้',

	'ERROR'			=> 'ผิดพลาด',
	'EDIT_USERNAME'	=> 'แก้ไขชื่อผู้ใช้',

	'FILE_ALREADY_UP_TO_DATE'		=> 'ไฟล์อัพเดทแล้ว',
	'FILE_DIFF_NOT_ALLOWED'			=> 'ไฟล์ไม่อนุญาตให้มีความแตกต่าง',
	'FILE_USED'						=> 'ข้อมูลจาก',			
	      // Single file
	'FILES_CONFLICT'				=> 'ไฟล์ไม่ตรงกัน',
	'FILES_CONFLICT_EXPLAIN'		=> 'ในการติดตั้ง phpBB3 ต้องไม่นำไฟล์ของเวอร์ชั่นอื่นมาวางทับ หากต้องการแก้ไขต้องตรวจสอบว่าไฟล์ที่ต้องการคืออะำไร แล้วแก้ปัญหาด้วยมือหรือใช้ วิธีรวมไฟล์กับทุกไฟล์  และเมื่อได้ดำเนินการแก้ไขแล้วต้องตรวจสอบความถูกต้องด้วย ',
	'FILES_MODIFIED'				=> 'ไฟล์ที่ถูกแก้ไข',
	'FILES_MODIFIED_EXPLAIN'		=> 'ไฟล์ต่อไปนี้ถูกแก้ไขและไม่ได้สัมพันธ์กับไฟล์เวอร์ชันเก่า  ไฟล์ใหม่นี้จะสร้างจากการรวมไฟล์จากการแก้ไขของคุณกับไฟล์ใหม่',
	'FILES_NEW'						=> 'ไฟล์ใหม่',
	'FILES_NEW_EXPLAIN'				=> 'ไฟล์ต่อไปนี้ไม่มีอยู่ในการติดตั้งของคุณ ',
	'FILES_NEW_CONFLICT'			=> 'ไฟล์ใหม่ที่ขัดแย้งกัน',
	'FILES_NEW_CONFLICT_EXPLAIN'	=> 'ฟล์ต่อไปนี้เป็นไฟล์ใหม่ แต่มีไฟล์เดียวกันนี้อยู่แล้ว ไฟล์ที่มีอยู่แล้วนี้จะถูกเขียนทับด้วยไฟล์ใหม่',
	'FILES_NOT_MODIFIED'			=> 'ไฟล์ที่ไม่ถูกแก้ไข',
	'FILES_NOT_MODIFIED_EXPLAIN'	=> 'ไฟล์ต่อไปนี้ ไม่ถูกแก้ไขและยังคงเป็นไฟล์ดั้งเดิมจากเวอร์ชันที่คุณต้องการอัพเดท',
	'FILES_UP_TO_DATE'				=> 'ไฟล์ที่อัพเดทแล้ว',
	'FILES_UP_TO_DATE_EXPLAIN'		=> 'ไฟล์ต่อไปนี้อัพเดทอยู่แล้วและไม่ต้องการการอัพเดท',
	'FTP_SETTINGS'					=> 'การตั้งค่า FTP ',
	'FTP_UPDATE_METHOD'				=> 'วิธีอัพเดท FTP ',

	'INCOMPATIBLE_UPDATE_FILES'		=> 'ไฟล์ใหม่ที่อัพเดทไม่เข้ากันกับเวอร์ชั่นที่ติดตั้งอยู่  เวอร์ชั่นของคุณคือ %1$s และไฟล์อัพเดทนี้สำหรับ  phpBB %2$s ถึง %3$s.',
	'INCOMPLETE_UPDATE_FILES'		=> 'ไฟล์อัพเดทไม่สมบูรณ์',
	'INLINE_UPDATE_SUCCESSFUL'		=> 'ฐานข้อมูลอัพเดทเรียบร้อย คุณต้องทำขั้นตอนถัดไป',

	'KEEP_OLD_NAME'		=> 'เก็บรักษาชื่อผู้ใช้ไว้',

	'LATEST_VERSION'		=> 'รุ่นล่าสุด',
	'LINE'					=> 'บันทัด',
	'LINE_ADDED'			=> 'เพิ่ม',
	'LINE_MODIFIED'			=> 'แก้ไข',
	'LINE_REMOVED'			=> 'ลบออก',
	'LINE_UNMODIFIED'		=> 'ไม่ได้แก้ไข',
	'LOGIN_UPDATE_EXPLAIN'	=> 'คุณต้องล็อกอินก่อนที่จะอัพเดทการติดตั้ง',

	'MAPPING_FILE_STRUCTURE'	=> 'เพื่อให้การอัพโหลดง่าย นี้คือสถานที่ไฟล์ที่จับคู่กับการติดตั้ง phpBB',

	'MERGE_MODIFICATIONS_OPTION'	=> 'การแก้ไขการรวมไฟล์',

	'MERGE_NO_MERGE_NEW_OPTION'	=> 'ไม่ต้องรวมไฟล์ - ใช้ไฟล์ใหม่',
	'MERGE_NO_MERGE_MOD_OPTION'	=> 'ไม่ต้องรวมไฟล์ - ใช้ไฟล์เดิม',
	/*
	'MERGE_MOD_FILE_OPTION'		=> 'รวมความแตกต่างและใช้โค้ดที่แก้ไขในส่วนที่ขัิดแย้งกัน',
	'MERGE_NEW_FILE_OPTION'		=> 'รวมความแตกต่างและใช้ไฟล์ใหม่ในส่วนที่ขัดแ้ย้งกัน',
	*/
	'MERGE_MOD_FILE_OPTION'		=> 'รวมความแตกต่าง (ลบโค้ดใหม่ของ phpBB ที่ขัดแย้งกัน)',
	'MERGE_NEW_FILE_OPTION'		=> 'รวมความแตกต่าง (ลบโค้ดที่แก้ไขแล้วขัดแย้งกัน)',
	
	'MERGE_SELECT_ERROR'		=> 'การรวมไฟล์ที่ขัดแย้งกันถูกเลือกอย่างไม่ถูกต้อง',
	'MERGING_FILES'				=> 'การรวมไฟล์ยังดำเนินการไม่เสร็จ',
	'MERGING_FILES_EXPLAIN'		=> 'ไฟล์สุดท้ายได้ถูกแก้ไขเรียบร้อยแล้ว<br /><br />กรุณารอ phpBB ตอบกลับอีกครั้ง',

	'NEW_FILE'						=> 'ไฟล์ใหม่',
	'NEW_USERNAME'					=> 'ชื่อผู้ใช้ใหม่',
	'NO_AUTH_UPDATE'				=> 'ไม่ได้รับอนุญาตให้อัพเดท',
	'NO_ERRORS'						=> 'ไม่มีข้อผิดพลาด',
	'NO_UPDATE_FILES'				=> 'ไม่อัพเดทไฟล์ต่อไปนี้',
	'NO_UPDATE_FILES_EXPLAIN'		=> 'ไฟล์ต่อไปนี้เป็นไฟล์ใหม่หรือได้รับการแก้ไขแต่ไม่พบไดเรกทอรี่ที่ปกติมีไฟล์นี้อยู่ ถ้าไฟล์อยู่ที่อื่นนอกจาก language/ หรือ styles/ การอัพเดทอาจไม่สมบูรณ์',
	'NO_UPDATE_FILES_OUTDATED'		=> 'ไม่พบอัพเดทไดเรกทอรี่ที่ถูกต้อง กรุณาตรวจสอบว่าคุณได้อัพโหลดไฟล์ที่เกี่ยวข้องแล้ว<br /><br />การติดตั้งของคุณดูเหมือนว่า <strong>ไม่</strong> อัพเดท เวอร์ชันล่าสุด phpBB %1$s, โปรดไปที่ <a href="http://www.phpbb.com/downloads/" rel="external" target="_bank">http://www.phpbb.com/downloads/</a> เพื่อโหลดไฟล์ที่ถูกต้อง เพื่ออัพเดท เวอร์ชั่น %2$s ถึง เวอร์ชั่น %3$s',
	'NO_UPDATE_FILES_UP_TO_DATE'	=> 'เวอร์ชั่นของคุณเป็นเวอร์ชั่นปัจจุบันอยู่แล้ว. ไม่จำเป็นต้องใช้การอัพเดด. หากคุณต้องการให้ตรวจสอบความสมบูรณ์กับแฟ้มของคุณให้แน่ใจว่าคุณอัปโหลดไฟล์อัปเดตที่ถูกต้อง.',	
	'NO_UPDATE_INFO'				=> 'ไม่พบข้อมูลของไฟล์อัพเดท',
	'NO_UPDATES_REQUIRED'			=> 'ไม่ต้องการการอัพเดท',
	'NO_VISIBLE_CHANGES'			=> 'ไม่เห็นการเปลี่ยนแปลง',
	'NOTICE'						=> 'Notice',
	'NUM_CONFLICTS'					=> 'จำนวนของความขัดแย้ง',
	'NUMBER_OF_FILES_COLLECTED'		=> 'การเปลี่ยนแปลงเสร็จสิ้นแล้วจาก %1$d ของ %2$d ไฟล์ทั้งหมดที่ถูกตรวจสอบ <br />กรุณารอจนกว่าไฟล์ทั้งหมดจะถูกตรวจสอบเสร็จสิ้น',

	'OLD_UPDATE_FILES'		=> 'ไฟล์อัพเดทนี้เก่าแล้ว ไฟล์อัพเดทที่พบมีไว้สำหรับการอัพเดทจาก phpBB %1$s ไป phpBB %2$s แต่เวอร์ชั่นล่าสุดของ phpBB คือ %3$s',

	'PACKAGE_UPDATES_TO'				=> 'เปลี่ยนเวอร์ชั่น',
	'PERFORM_DATABASE_UPDATE'			=> 'ทำการอัพเดทฐานข้อมูล',
	'PERFORM_DATABASE_UPDATE_EXPLAIN'	=> 'คุณจะพบลิงค์ที่ใช้อัพเดทฐานข้อมูลข่างล่างนี้ สคริปต์นี้ต้องรันแยกต่างหากเพราะว่าการอัพเดทฐานข้อมูลอาจทำให้เกิดเหตุการณ์ที่ไม่คาดฝันถ้าคุณกำลังล็อกอินอยู่ การอัพเดทฐานข้อมูลอาจกินเวลา ดังนั้นโปรดอย่าหยุดการรันถึงแม้ว่ามันจะดูเหมือนกำลังค้าง หลังจากคุณทำการอัพเดทฐานข้อมูล ให้ไปตามลิงค์เพื่อทำกระบวนการอัพเดทต่อไป',
	'PREVIOUS_VERSION'					=> 'แพคเก็จปัจจุบันอัพเดทเป็นเวอร์ชัน',
	'PROGRESS'							=> 'สำเร็จ',

	'RESULT'					=> 'ผลลัพธ์',
	'RUN_DATABASE_SCRIPT'		=> 'อัพเดทฐานข้อมูลเดี๋ยวนี้',

	'SELECT_DIFF_MODE'			=> 'เลือก diff โหมด',
	'SELECT_DOWNLOAD_FORMAT'	=> 'เลือกรูปแบบการดาวน์โหลด archive',
	'SELECT_FTP_SETTINGS'		=> 'เลือกการตั้งค่า FTP',
	'SHOW_DIFF_CONFLICT'		=> 'แสดง ความแตกต่าง/ความขัดแย้ง',
	'SHOW_DIFF_FINAL'			=> 'แสดงไฟล์ผลลัพธ์',
	'SHOW_DIFF_MODIFIED'		=> 'แสดงความแตกต่างที่รวมแล้ว',
	'SHOW_DIFF_NEW'				=> 'แสดงเนื้อหาไฟล์',
	'SHOW_DIFF_NEW_CONFLICT'	=> 'แสดงความแตกต่าง',
	'SHOW_DIFF_NOT_MODIFIED'	=> 'แสดงความแตกต่าง',
	'SOME_QUERIES_FAILED'		=> 'มี sql บางอันล้มเหลว, ข้อความและความผิดพลาดแสดงดังข้างล่าง',
	'SQL'						=> 'SQL',
	'SQL_FAILURE_EXPLAIN'		=> 'คุณไม่ต้องกังวลกับปัญหานี้ การอัพเดทจะยังคงทำต่อไป ถ้าการกระทำนี้ล้มเหลว คุณสามารถขอความช่วยเหลือได้ที่ <a href="../docs/README.html">README</a> สำหรับรายละเอียดของคำแนะนำ',
	'STAGE_FILE_CHECK'			=> 'ตรวจสอบไฟล์',
	'STAGE_UPDATE_DB'			=> 'อัพเดทฐานข้อมูล',
	'STAGE_UPDATE_FILES'		=> 'อัพเดทไฟล์',
	'STAGE_VERSION_CHECK'		=> 'ตรวจสอบเวอร์ชั่น',
	'STATUS_CONFLICT'			=> 'ไฟล์ที่ถูกแก้ไขทำให้เกิดความขัดแย้ง',
	'STATUS_MODIFIED'			=> 'ไฟล์ที่ถูกแก้ไข',
	'STATUS_NEW'				=> 'ไฟล์ใหม่',
	'STATUS_NEW_CONFLICT'		=> 'ไฟล์ใหม่ขัดแย้ง',
	'STATUS_NOT_MODIFIED'		=> 'ไฟล์ที่ไม่ถูกแก้ไข',
	'STATUS_UP_TO_DATE'			=> 'ไฟล์ที่อัพเดทแล้ว',

	'TOGGLE_DISPLAY'			=> 'แสดง/ซ่อนไฟล์',
	'TRY_DOWNLOAD_METHOD'		=> 'คุณอาจต้องการลองใช้วิธีการดาวน์โหลดไฟล์แก้ไข.<br />วิธีนี้ทำงานได้เสมอ และเป็นวิธีที่แนะนำ.',
	'TRY_DOWNLOAD_METHOD_BUTTON'=> 'ลองใช้วิธีนี้อีกครั้ง',	
	'UPDATE_COMPLETED'				=> 'อัพเดทเสร็จสิ้น',
	'UPDATE_DATABASE'				=> 'อัพเดทฐานข้อมูล',
	'UPDATE_DATABASE_EXPLAIN'		=> 'ภายในขั้นตอนถัดไปฐานข้อมูลจะถูกอัพเดท',
	'UPDATE_DATABASE_SCHEMA'		=> 'อัพเดท schema ของฐานข้อมูล',
	'UPDATE_FILES'					=> 'อัพเดทไฟล์',
	'UPDATE_FILES_NOTICE'			=> 'โปรดตรวจสอบให้แน่ใจว่าคุณได้อัพเดทไฟล์ของบอร์ดแล้ว ไฟล์นี้จะอัพเดทแค่ฐานข้อมูล',
	'UPDATE_INSTALLATION'			=> 'อัพเกรด phpBB',
	'UPDATE_INSTALLATION_EXPLAIN'	=> 'ด้วยตัวเลือกนี้ คุณสามารถอัพเดทการติดตั้ง phpBB เป็นเวอร์ชั่นล่าสุดได้<br />ระหว่างกระบวนการทำ ไฟล์ทุกไฟล์จะถูกตรวจสอบความสมบูรณ์ คุณสามารถตรวจดูความแตกต่างได้ก่อนที่จะอัพเดท<br /><br />การอัพเดทไฟล์สามารถทำได้ 2 วิธี</p><h2>อัพเดทด้วยตัวคุณเอง</h2><p>ด้วยการอัพเดทนี้คุณเพียงดาวน์โหลดไฟล์ส่วนตัวที่เปลี่ยนแปลงของคุณเพื่อให้แน่ใจว่าคุณไม่สูญเสียไฟล์ที่คุณแก้ไข หลังจากดาวน์โหลดแพคเก็จนี้ คุณต้องอัพโหลดไฟล์ไปที่ตำแหน่งที่ถูกต้องภายใต้ไดเรกทอรี่รากของ phpBB เมื่อเสร็จแล้วคุณสามารถตรวจสอบไฟล์ได้อีกครั้ง</p>
	<h2>อัพเดทอัตโนมัติด้วย FTP</h2>
	<p>วิธีนี้เหมือนกันกับวิธีแรกแต่ไม่ต้องดาวน์โหลดและเปลี่ยนไฟล์ด้วยการอัพโหลดเอง คุณต้องรู้รายละเอียดการเข้าระบบด้วย FTP <br /><br />',
	'UPDATE_INSTRUCTIONS'			=> '

		<h1>ประกาศ</h1>

		<p>โปรดอ่าน <a href="%1$s" title="%1$s" target="_bank"><strong>วิธีการอัพเกรดเป็นเวอร์ชั่นล่าสุด</strong></a> ก่อนที่คุณจะเริ่มกระบวนการอัพเดทต่อไป มันอาจจะเป็นข้อมูลที่มีประโยชน์แล ะ มีลิงค์สำหรับการดาวน์โหลดและรา ยละเอียดการเปลี่ยนแปลงของแต่ละเวอร์ชัน</p>

		<br />

		<h1>วิธีการอัพเดทการติดตั้งด้วยแพคเก็จอัพเดทอัตโนมัติ</h1>

		<pวิธีการที่จะบอกต่อไปนี้ ใช้สำหรับการอัพเดทด้วยแพคเก็จอัพเดทอัตโนมัติเท่านั้น คุณสามารถใช้วิธีอื่นในการอัพเดทที่อยู่ใน เอกสาร INSTALL.html ขั้นตอนในการอัพเดท phpBB3 แบบอัตโนมัติคือ:</p>

		<ul style="margin-left: 20px; font-size: 1.1em;">
			<li>ไปที่ <a href="http://www.phpbb.com/downloads/" title="http://www.phpbb.com/downloads/" target="_bank">หน้้าดาวโหลด phpBB.com </a> และดาวน์โหลด "Automatic Update Package" <br /><br /></li>
			<li>แตกไฟล์บีบอัด<br /><br /></li>
			<li>อัพโหลดไฟล์ที่แตกแล้วทั้งหมดไปที่ root ของเว็บบอร์ด (ตำแหน่งเดียวกับที่ไฟล์ config.php อยู่)<br /><br /></li>
		</ul>

		<p>บอร์ดจะออฟไลน์ชั่วคราวสำหรับผู้ใช้ทั่วไปเพราะมีไดเรกทอรี่่ install<br /><br />
		<strong><a href="%2$s" title="%2$s" target="_bank">คลิกเริ่มทำการอัพเกรด โดยการชี้บราวเซอร์ไปที่โฟลเดอร์ install.</a>.</strong><br />
		<br />
		คุณจะได้รับคำแนะนำต่างๆ ระหว่างกระบวนการอัพเกรด และจะมีข้อความแจ้งเมื่อกระบวนการอัพเกรดเสร็จสิ้น 
		</p>
	',
	'UPDATE_INSTRUCTIONS_INCOMPLETE'	=> '

		<h1>พบการอัพเกรดไม่สำเร็จ</h1>

		<p>phpBB พบการอัดเกรดไม่สำเร็จ โปรดตรวจสอบว่าคุณทำตามขั้นตอนทุกอย่าง คุณจะพบลิงค์อีกครั้งด้านล่าง หรือไปที่ไดเรกทอรี่ติดตั้งโดยตรง</p>
	',
	'UPDATE_METHOD'					=> 'วิธีอัพเดท',
	'UPDATE_METHOD_EXPLAIN'			=> 'คุณสามารถเลือกวิธีอัพเดทที่คุณต้องการ ใช้ FTP อัพโหลดจะมีฟอร์มให้คุณกรอกบัญชี FTP ด้วยวิธีนี้ไฟล์จะถูกย้ายอัตโนมัติไปที่ใหม่และสำรองไฟล์เก่าไว้ให้โดยต่อท้ายไฟล์ด้วย.bak ถ้าคุณเลือกที่จะดาวน์โหลดไฟล์ คุณสามารถแตกไฟล์และิอัพโหลดไฟล์ไปยังที่ที่ถูกต้องเอง',
	'UPDATE_REQUIRES_FILE'			=> 'ตัวอัพเดทต้องการไฟล์เหล่านี้: %s',
	'UPDATE_SUCCESS'				=> 'อัพเดทเีรียบร้อย',
	'UPDATE_SUCCESS_EXPLAIN'		=> 'อัพเดททุกไฟล์เรียบร้อย ขั้นถัดไปจะตรวจสอบไฟล์อีกครั้งเพื่อความถูกต้อง',
	'UPDATE_VERSION_OPTIMIZE'		=> 'กำลังอัพเดทเวอร์ชั่นและจัดการตาราง',
	'UPDATING_DATA'					=> 'กำลังอัพเดทข้อมูล',
	'UPDATING_TO_LATEST_STABLE'		=> 'กำลังอัพเดทฐานข้อมูลให้เป็นสถานะที่เสถียรล่าสุด',
	'UPDATED_VERSION'				=> 'อัพเดทเวอร์ชัน',
	'UPGRADE_INSTRUCTIONS'			=> 'คุณสมบัติใหม่ <strong>%1$s</strong> ที่สามารถใช้ได้. กรุณาอ่าน <a href="%2$s" title="%2$s"><strong>the release announcement</strong></a> เพื่อเรียนรู้เกี่ยวกับสิ่งที่มันมีให้, และวิธีการอัพเกรด.',
	
	'UPLOAD_METHOD'					=> 'วิธีการอัพโหลด',

	'UPDATE_DB_SUCCESS'				=> 'อัพเดทฐานข้อมูลเรียบร้อย',
	'USER_ACTIVE'					=> 'ผู้ใช้สามารถใช้งานได้',
	'USER_INACTIVE'					=> 'ผู้ใช้ไม่สามารถใช้งานได้',

	'VERSION_CHECK'				=> 'ตรวจสอบเวอร์ชั่น',

	'VERSION_CHECK_EXPLAIN'			=> 'ตรวจสอบว่าเวอร์ชั่นที่คุณใช้อยู่เป็นเวอร์ชั่นล่าสุด.',
	'VERSION_NOT_UP_TO_DATE'		=> 'phpBB ของคุณไม่ใช่เวอร์ชั่นล่าสุด. กรุณาดำเนินการปรับปรุง.',
	'VERSION_NOT_UP_TO_DATE_ACP'	=> 'phpBB ของคุณไม่ใช่เวอร์ชั่นล่าสุด.<br />ด้านล่างเป็นลิงค์ไปดูเวอร์ชั่นล่าสุด, ซึ่งมีข้อมูลเพิ่มเติม รวมทั้งคำแนะนำในการอัพเกรด.',
	'VERSION_NOT_UP_TO_DATE_TITLE'	=> 'phpBB ของคุณไม่ใช่เวอร์ชั่นล่าสุด.',
	'VERSION_UP_TO_DATE'			=> 'phpBB ของคุณเป็นเวอร์ชั่นล่าสุด. ไม่มีการอัพเกรดในตอนี้, คุณอาจดำเนินการต่อเพื่อเช็คอีกครั้ง.',
	'VERSION_UP_TO_DATE_ACP'		=> 'phpBB ของคุณเป็นเวอร์ชั่นล่าสุด. ไม่มีการอัพเกรดใดๆเวลานี้.',
	
	
	'VIEWING_FILE_CONTENTS'		=> 'ดูเนื้อหาไฟล์',
	'VIEWING_FILE_DIFF'			=> 'ดูความแตกต่างของไฟล์',

	'WRONG_INFO_FILE_FORMAT'	=> 'รูปแบบของข้อมูลไฟล์ผิดพลาด',
));

// Default database schema entries...
$lang = array_merge($lang, array(
	'CONFIG_BOARD_EMAIL_SIG'		=> 'Thanks, The Management',
	'CONFIG_SITE_DESC'				=> 'ข้อความอธิบายเว็บบอร์ด',
	'CONFIG_SITENAME'				=> 'yourdomain.com',

	'DEFAULT_INSTALL_POST'			=> 'นี้คือโพสตัวอย่างในการติดตั้ง phpBB3 ของคุณ ทุกสิ่งดูเหมือนจะทำงานเป็นปกติ คุณสามารถลบโพสนี้หากคุณต้องการและดำเนินการตั้งค่าบอร์ดของคุณ ระหว่างขั้นตอนการติดตั้งหมวดหมู่และบอร์ดแรกของคุณถูกกำหนดให้เหมาะสมและได้รับอนุญาตสำหรับกลุ่มผู้ใช้, ผู้ดูแลระบบ, บอท, ผู้ดูแลบอร์ด, ผู้เข้าชม, สมาชิกที่ลงทะเบียน และผู้ใช้ COPPA ที่ลงทะเบียน ถ้าหากคุณเลือกที่จะลบบอร์ดและหมวดหมู่แรกนี้, อย่าลืมที่จะกำหนดความสามารถการใช้งานของกลุ่มผู้ใช้เหล่านี้สำหรับหมวดหมู่และบอร์ดใหม่ที่คุณสร้าง เราขอแนะนำให้คุณเปลี่ยนชื่อหมวดหมู่และบอร์ดแรกนี้และคัดลอกการอนุญาตใช้งานจากมัน ขณะที่คุณสร้างหมวดหมู่และบอร์ดใหม่. ขอให้โชคดี!',
	'FORUMS_FIRST_CATEGORY'			=> 'หมวดหมู่ทั่วไป',
	'FORUMS_TEST_FORUM_DESC'		=> 'บอร์ดทดสอบ นี่เป็นการทดสอบ ตั้งค่าส่วนเพิ่มเติมของ บอร์ด',
	'FORUMS_TEST_FORUM_TITLE'		=> 'บอร์ดทดสอบ 1',

	'RANKS_SITE_ADMIN_TITLE'		=> 'Administrator',
	'REPORT_WAREZ'					=> 'ข้อความนี้ประกอบด้วยลิงค์หรือซอฟต์แวร์ผิดกฏหมาย',
	'REPORT_SPAM'					=> 'รายงานนี้โพสต์เพื่อการโฆษณาเวบไซต์หรือผลิตภัณฑ์อื่น',
	'REPORT_OFF_TOPIC'				=> 'รายงานการปิดกระทู้',
	'REPORT_OTHER'					=> 'รายงานอื่นๆ ที่ไม่ได้ระบุไว้ในหมวดหมู่ใด ,กรุณาใช้ฟิล์วข้อมูลอื่น',

	'SMILIES_ARROW'					=> 'Arrow',
	'SMILIES_CONFUSED'				=> 'Confused',
	'SMILIES_COOL'					=> 'Cool',
	'SMILIES_CRYING'				=> 'Crying or Very Sad',
	'SMILIES_EMARRASSED'			=> 'Embarrassed',
	'SMILIES_EVIL'					=> 'Evil or Very Mad',
	'SMILIES_EXCLAMATION'			=> 'Exclamation',
	'SMILIES_GEEK'					=> 'Geek',
	'SMILIES_IDEA'					=> 'Idea',
	'SMILIES_LAUGHING'				=> 'Laughing',
	'SMILIES_MAD'					=> 'Mad',
	'SMILIES_MR_GREEN'				=> 'Mr. Green',
	'SMILIES_NEUTRAL'				=> 'Neutral',
	'SMILIES_QUESTION'				=> 'Question',
	'SMILIES_RAZZ'					=> 'Razz',
	'SMILIES_ROLLING_EYES'			=> 'Rolling Eyes',
	'SMILIES_SAD'					=> 'Sad',
	'SMILIES_SHOCKED'				=> 'Shocked',
	'SMILIES_SMILE'					=> 'Smile',
	'SMILIES_SURPRISED'				=> 'Surprised',
	'SMILIES_TWISTED_EVIL'			=> 'Twisted Evil',
	'SMILIES_UBER_GEEK'				=> 'Uber Geek',
	'SMILIES_VERY_HAPPY'			=> 'Very Happy',
	'SMILIES_WINK'					=> 'Wink',

	'TOPICS_TOPIC_TITLE'			=> 'ยินดีต้อนรับเข้าสู่ เว็บบอร์ด ',
));

?>