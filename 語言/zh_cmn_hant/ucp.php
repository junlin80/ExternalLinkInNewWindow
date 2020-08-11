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
	'UCP_EXTLINKNEWWIN_SELECT'			=> '在新視窗中打開外部鏈接使用jQuery強制外部鏈接在新視窗中打開',
	'UCP_EXTLINKNEWWIN_SELECT_EXPLAIN'	=> '<strong>使用板默認設置</ strong>：使用管理員定義的默認行為。<br /> <strong>始終打開新視窗</ strong>：外部鏈接將始終在新視窗中打開。<br / > <strong>從不打開新視窗</ strong>：外部鏈接將始終在同一視窗中打開.',
	'UCP_EXTLINKNEWWIN_OPTION_0' 		=> '使用板默認' ,
	'UCP_EXTLINKNEWWIN_OPTION_1' 		=> '一律開啟新視窗',
	'UCP_EXTLINKNEWWIN_OPTION_2' 		=> '永不打開新視窗',
));
