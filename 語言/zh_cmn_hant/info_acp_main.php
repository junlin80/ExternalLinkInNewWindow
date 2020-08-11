<?php
/**
*
* @繁體中文語文　Jun Lin <https://junfancy.com/>
* @package phpBB Extension - martin externallinkinnewwindow
* @copyright (c) 2020 Martin ( https://github.com/Mar-tin-G )
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'ACP_EXTLINKNEWWIN_TITLE'			=> '在新窗口中的外部鏈接',
	'ACP_EXTLINKNEWWIN_SETTINGS'		=> '設定',
	'ACP_EXTLINKNEWWIN_SETTINGS_SAVED'	=> '設置已成功保存!',
	'ACP_EXTLINKNEWWIN_UCP'				=> '在UCP中顯示首選項',
	'ACP_EXTLINKNEWWIN_UCP_EXPLAIN'		=> '在用戶控制面板中"啟用首選項"在新窗口中打開外部鏈接""（在"論壇偏好"首選項下，編輯全局設置），從而允許用戶控制外部鏈接的行為.',
	'ACP_EXTLINKNEWWIN_USER'			=> '在新窗口中為用戶打開外部鏈接',
	'ACP_EXTLINKNEWWIN_USER_EXPLAIN'	=> '如果"在UCP中顯示首選項"設置為<strong>否</ strong>，則此開關定義是否在新窗口中為註冊用戶打開外部鏈接。<br />如果"在UCP中顯示首選項"設置為<strong> 是</ strong>，此開關定義了默認行為，如果用戶未更改UCP中的首選項，則使用該默認行為.',
	'ACP_EXTLINKNEWWIN_GUESTS'			=> '在新窗口中為訪客打開外部鏈接',
	'ACP_EXTLINKNEWWIN_GUESTS_EXPLAIN'	=> '定義是否在新窗口中為訪客打開外部鏈接.',
	'ACP_EXTLINKNEWWIN_BOTS'			=> '在新窗口中打開漫遊器的外部鏈接',
	'ACP_EXTLINKNEWWIN_BOTS_EXPLAIN'	=> '定義機器人的外部鏈接是否在新窗口中打開.',
	'ACP_EXTLINKNEWWIN_ADDREF'			=> '添加<i> rel =" nofollow" </ i>屬性',
	'ACP_EXTLINKNEWWIN_ADDREF_EXPLAIN'	=> '如果啟用, ’rel="nofollow"屬性’被添加到此擴展程序修改的所有外部鏈接中，以在新窗口中打開.',
));
