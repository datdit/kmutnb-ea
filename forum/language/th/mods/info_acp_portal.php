<?php
/**
*
* @package Board3 Portal v2
* @copyright (c) Board3 Group ( www.board3.de )
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
	// Portal Modules
	'ACP_PORTAL_MODULES'			=> 'Portal Modules',
	'ACP_PORTAL_MODULES_EXP'		=> 'You can manage your portal modules here. If you turn off all modules, please also disable the Portal.',
	
	'MODULE_POS_TOP'				=> 'Top',
	'MODULE_POS_LEFT'				=> 'Left column',
	'MODULE_POS_RIGHT'				=> 'Right column',
	'MODULE_POS_CENTER'				=> 'Center column',
	'MODULE_POS_BOTTOM'				=> 'Bottom',
	'ADD_MODULE'					=> 'Add module',
	'CHOOSE_MODULE'					=> 'Choose module',
	'CHOOSE_MODULE_EXP'				=> 'Choose a module from the drop-down list',
	'SUCCESS_ADD'					=> 'The module was added successfully.',
	'SUCCESS_DELETE'				=> 'The module was removed successfully.',
	'NO_MODULES'					=> 'No modules have been detected.',
	'MOVE_RIGHT'					=> 'Move right',
	'MOVE_LEFT'						=> 'Move left',
	'B3P_FILE_NOT_FOUND'			=> 'The requested file could not be found',
	'UNABLE_TO_MOVE'				=> 'It is not possible to move the block to the selected column.',
	'DELETE_MODULE_CONFIRM'			=> 'Are you sure you wish to delete the module "%1$s"?',
	'MODULE_RESET_SUCCESS'			=> 'Successfully reset the module settings.',
	'MODULE_RESET_CONFIRM'			=> 'Are you sure you wish to reset the settings of the module "%1$s"?',
	
	'MODULE_OPTIONS'			=> 'Module options',
	'MODULE_NAME'				=> 'Module name',
	'MODULE_NAME_EXP'			=> 'Enter the name of the Module that should be displayed in the Module configuration.',
	'MODULE_IMAGE'				=> 'Module image',
	'MODULE_IMAGE_EXP'			=> 'Enter the filename of the module image. Images need to be in all styles/*yourstyle*/theme/images/portal/ folders',
	'MODULE_PERMISSIONS'		=> 'Module permissions',
	'MODULE_PERMISSIONS_EXP'	=> 'Select the groups that should be authorized to view the module. If you want all users to be able to view the module, don’t select anything.<br />Select/Deselect multiple groups by holding <samp>CTRL</samp> and clicking.',
	'MODULE_IMAGE_WIDTH'		=> 'Module image width',
	'MODULE_IMAGE_WIDTH_EXP'	=> 'Enter the width of the module image in pixels',
	'MODULE_IMAGE_HEIGHT'		=> 'Module image height',
	'MODULE_IMAGE_HEIGHT_EXP'	=> 'Enter the height of the module image in pixels',
	'MODULE_RESET'				=> 'Reset module configuration',
	'MODULE_RESET_EXP'			=> 'This will reset all settings to the default!',
	'MODULE_STATUS'				=> 'Enable module',
	'MODULE_ADD_ONCE'			=> 'This module can only be added once.',

	// general
	'ACP_PORTAL'							=> 'Portal',
	'ACP_PORTAL_GENERAL_INFO'				=> 'General settings',
	'ACP_PORTAL_CONFIG_INFO'				=> 'General settings',
	'ACP_PORTAL_GENERAL_TITLE'				=> 'Portal Administration',
	'ACP_PORTAL_GENERAL_TITLE_EXP'			=> 'Thank you for choosing Board3 Portal! This is where you can manage your portal page. The options below let you customize the various general settings.',
	'PORTAL_ENABLE'							=> 'Enable Portal',
	'PORTAL_ENABLE_EXP'						=> 'Turns the whole portal on or off',
	'PORTAL_LEFT_COLUMN'					=> 'Enable left column',
	'PORTAL_LEFT_COLUMN_EXP'				=> 'Switch to no if you wish to turn off the left column',
	'PORTAL_RIGHT_COLUMN'					=> 'Enable right column',
	'PORTAL_RIGHT_COLUMN_EXP'				=> 'Switch to no if you wish to turn off the right column',
	'PORTAL_VERSION_CHECK'					=> 'Versioncheck on Portal',
	'PORTAL_PHPBB_MENU'						=> 'phpBB menu',
	'PORTAL_PHPBB_MENU_EXP'					=> 'Display the phpBB Header on the portal.',
	'PORTAL_DISPLAY_JUMPBOX'				=> 'Display jumpbox',
	'PORTAL_DISPLAY_JUMPBOX_EXP'			=> 'Display the jumpbox on the portal',
	'ACP_PORTAL_COLUMN_WIDTH_SETTINGS'		=> 'Left and right column width settings',
	'PORTAL_LEFT_COLUMN_WIDTH'				=> 'Width of the left column',
	'PORTAL_LEFT_COLUMN_WIDTH_EXP'			=> 'Change the width of the left column in pixels; recommended value is 180',
	'PORTAL_RIGHT_COLUMN_WIDTH'				=> 'Width of the right column',
	'PORTAL_RIGHT_COLUMN_WIDTH_EXP'			=> 'Change the width of the right column in pixels; recommended value is 180',
	
	'LINK_ADDED'							=> 'The link has been successfully added',
	'LINK_UPDATED'							=> 'The link has been successfully updated',
	'LOG_PORTAL_LINK_ADDED'					=> '<strong>Altered Portal settings</strong><br />&raquo; Link added: %s ',
	'LOG_PORTAL_LINK_UPDATED'				=> '<strong>Altered Portal settings</strong><br />&raquo; Link updated: %s ',
	'LOG_PORTAL_EVENT_ADDED'				=> '<strong>Altered Portal settings</strong><br />&raquo; Event added: %s ',
	'LOG_PORTAL_EVENT_UPDATED'				=> '<strong>Altered Portal settings</strong><br />&raquo; Event updated: %s ',
	
	// Upload Module
	'ACP_PORTAL_UPLOAD'				=> 'Upload module',
	'MODULE_UPLOAD'					=> 'Upload a module',
	'MODULE_UPLOAD_EXP'				=> 'Choose the zip file of the module you want to upload:',
	'MODULE_UPLOAD_GO'				=> 'Upload',
	'NO_MODULE_UPLOAD'				=> 'Your server configuration does not allow file uploads.',
	'MODULE_UPLOADED'				=> 'Module uploaded successfully.',
	'MODULE_UPLOAD_MKDIR_FAILURE'	=> 'Unable to create a folder.',
	'MODULE_COPY_FAILURE'			=> 'Unable to copy the following file: %1$s',
	'MODULE_CORRUPTED'				=> 'The module you are trying to upload seems to be corrupted.',
	'PORTAL_NEW_FILES'				=> 'New files',
	'PORTAL_MODULE_SOURCE'			=> 'Source',
	'PORTAL_MODULE_TARGET'			=> 'Target',
	'PORTAL_MODULE_STATUS'			=> 'Status',
	'PORTAL_MODULE_SUCCESS'			=> 'Success',
	'PORTAL_MODULE_ERROR'			=> 'Error',
	
	// Install
	'PORTAL_BASIC_INSTALL'			=> 'Adding basic set of modules',
	'PORTAL_BASIC_UNINSTALL'		=> 'Removing modules from database',
	'PORTAL_CONVERT_SUCCESS'		=> 'Converting from Board3 Portal 1.0.6 & adding basic set of modules',
	
	// Logs
	'LOG_PORTAL_CONFIG'			=> '<strong>Altered Portal settings</strong><br />&raquo; %s',
	
	/**
	* A copy of Handyman` s MOD version check, to view it on the portal overview
	*/
	'ANNOUNCEMENT_TOPIC'	=> 'Release Announcement',
	'CURRENT_VERSION'		=> 'Current Version',
	'DOWNLOAD_LATEST'		=> 'Download Latest Version',
	'LATEST_VERSION'		=> 'Latest Version',
	'NO_INFO'				=> 'Version server could not be contacted',
	'NOT_UP_TO_DATE'		=> '%s is not up to date',
	'RELEASE_ANNOUNCEMENT'	=> 'Annoucement Topic',
	'UP_TO_DATE'			=> '%s is up to date',
	'VERSION_CHECK'			=> 'MOD Version Check',
	
	// Adding the permissions
	'acl_a_manage_portal'		=> array('lang' => 'Can alter Portal settings', 'cat' => 'misc'),
	'acl_u_view_portal'			=> array('lang' => 'Can view the Portal', 'cat' => 'misc'),
	'ACP_PORTAL_SLIDE_ADS'	=> 'Manager Slide Ads',
	'TITLE'=>'จัดการโฆษณา',
	'TITLE_EXPLAIN' => ' คลิกปุ่มเพิ่มโฆษา เพื่อเพิ่มป้ายโฆษณา และรายละเอียด',
	'L_WARNING' => 'มี WARNING',
	'ERROR_MSG' => 'ข้อความ ERROR_MSG',	
	'PORTAL_ADS_SETTING' => 'L_PORTAL_ADS_SETTING-------',
	'LINKS_NO_LINKS' => 'ยังไม่มี banner',
	'ACP_PORTAL_ADS_URL' => 'url ป้ายโฆษณา',
	'ACP_PORTAL_ADS_IMG_URL' => 'URL รูปป้ายโฆษณา',
	'ACP_PORTAL_ADS_URL' => 'URL ปลายทาง',		
	'ACP_PORTAL_ADS_DETAIL' =>'รายละเอียดโฆษณา',
	'ACP_PORTAL_ADS_OPENPAGE' => 'รูปแบบการเปิดหน้าโฆษณา',
	'ACP_PORTAL_ADS_ADD' => 'เพิ่มป้ายโฆษณา',
	'ACP_PORTAL_SLIDE_ADS_ADD' => ' เพิ่มป้ายโฆษณา',
	'ACP_PORTAL_ADS_ALT'=>' Alt text ',
	'ACP_PORTAL_ADS_STATUS'=>' Status ',
	'ACP_PORTAL_ADS_NAME' =>'ชื่อป้ายโฆษณา',
	'ACP_PORTAL_ADS_EDIT' => 'แก้ไขป้ายโฆษณา',
	'SUCCESS_UPDATED'=>'แก้ไขข้อมูลเรียบร้อยแล้ว',
	'SUCCESS_DELETED'=>'แก้ไขข้อมูลเรียบร้อยแล้ว',
	'ACP_PORTAL_ONFIRM_DELETE'=>'ต้องการลบข้อมูล',
        'ACP_PORTAL_ADS_POSITION'=>'ตำแหน่งแสดงผล',
        
        // ดึงกระทู้ไปใส่ที่หน้าแรก
        'ACP_PORTAL_TOPIC_TO_PORTAL'=> 'Topic To Portal',
        'ACP_TOPIC_PORTAL'=>'กำหนดหัวข้อให้แสดงที่หน้า Portal',
        'ACP_TOPIC_PORTAL_LIST' => 'List หัวข้อทีแสดงทีหน้า Portal',
        'ACP_PORTAL_TP_ID'=>'หมายเลขกระทู้',
        'ACP_PORTAL_TP_TOPIC'=>'หัวข้อกระทู้',
        'ACP_PORTAL_TP_TOPIC_TIME'=>'เวลาโพสต์กระทู้',
        'ACP_PORTAL_TP_TOPIC_FIRST_POST_NAME'=>'โดย',
        'ACP_PORTAL_TP_ADD_TIME'=>'เพิ่มใส่หน้าแรกเมื่อ',
        'ACP_PORTAL_TP_SHOW_TOPIC'=>'แสดงที่หน้าแรก',
        'ACP_PORTAL_TP_ORDER'=>'ความสำคัญ',
        'ACP_PORTAL_TP_EDIT'=>'แก้ไข',
        'ACP_PORTAL_TP_DELETE'=>'ลบ',
        'ACP_TP_PORTAL_ADD'=>'เพิ่มหัวข้อ',
        'TP_TITLE'=>'จัดการกระทู้ในหน้า Portal',
        'TP_TITLE_EXPLAIN'=>'จัดการกระทู้ที่จะใช้แสดงในหน้า Portal คลิกปุ่ม "เพิ่มหัวข้อ" เพื่อเพิ่มกระทู้ให้สแดงในหน้าแรก',
        'ACP_TOPIC_PORTAL_FROM_ADD'=>'ฟอร์มเพิ่มหัวข้อกระทู้ในหน้าแรก',
        'TP_TITLE_ADD_FORM'=> 'เพิ่มหมายเลขกระทู้ เพื่อแสดงในหน้าแรก',
        'TP_TITLE_ADD_FORM_EXPLAIN'=> 'กรอกหมาลเลขกระทู้ที่ต้องการให้แสดงในหน้า Portal และระบุลำดับในการจัดเรียง โดย ลำดับความสำคัญมากจะถูกแสดงก่อน',
        'TP_ADD_FORM_TOPIC_ID'=>'หมายเลขกระทู้',
        'TP_ADD_FORM_TOPIC_ID_EXPLAIN'=>'กรอกหมายเลขกระทู้ที่ต้องการให้แสดงในหน้า Portal',
        'TP_ADD_FORM_POTAL_ORDER'=>'ลำดับความสำคัญ',
        'TP_ADD_FORM_POTAL_ORDER_EXPLAN'=>'กำหนดลำดับความสำคัญเพื่อใช้จัดเรียง ความสำคัญมากขึ้นก่อน',
        'TP_ADD_FORM_POTAL_SHOW'=>'แสดง',
        'TP_ADD_FORM_POTAL_SHOW_EXPLAN'=>'กำหนดเป็น ใช่เพื่อให้แสดง',
        'TP_ADD_FORM_OPTIONS'=>'กำหนดรายละเอียด',
        'TP_ADD_TOPIC_ERROR_INVALIT_TOPIC'=> 'ผิดพลาดหมายเลขกระทู้ที่กรอกเข้ามาไม่ถูกต้อง',
        'TP_ADD_TOPIC_OK'=>'เพิ่มกระทู้เรียบร้อยแล้ว',
        'ACP_TOPIC_PORTAL_FROM_EDIT'=>'ฟอร์มแก้ไขหัวข้อกระทู้ในหน้าแรก',
        'TP_UPDATE_TOPIC_OK'=> 'อัพเดดข้อมูลเรียบร้อยแล้ว',
        'TP_ADD_TOPIC_ERROR'=> 'เพิ่มกระทู้ผิดพลาด',
        'TP_ACP_PORTAL_ONFIRM_DELETE'=>'ต้องการลบ หัวข้อกระทู้ในหน้า Portal ?',
        'TP_ACP_PORTAL_SUCCESS_DELETED'=>'ลบข้อมูลเรียบร้อยแล้ว',
        'PORTAL_MTB_TOPIC'=>'Topic To Portal',
        'PSUBMIT'=>'ตั้งค่า',
        'ACP_PORTAL_TP_ADD_BY'=>'เพิ่มโดย',
));
