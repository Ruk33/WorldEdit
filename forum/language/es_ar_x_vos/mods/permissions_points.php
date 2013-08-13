<?php
/**
*
* permissions_points [English]
*
* version $Id: permissions_points.php 807 2012-02-12 13:38:10Z femu $
* copyright (c) 2009 wuerzi & femu
* license http://opensource.org/licenses/gpl-license.php GNU Public License
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

// Adding new category
$lang['permission_cat']['points'] = 'Points';

// Adding the permissions
$lang = array_merge($lang, array(
	'acl_u_use_points'		=> array('lang' => 'Puede usar Ultimate Points', 'cat' => 'points'),
	'acl_u_use_robbery'		=> array('lang' => 'Puede usar el módulo de Robo', 'cat' => 'points'),
	'acl_u_use_bank'		=> array('lang' => 'Puede usar el módulo de Banco', 'cat' => 'points'),
	'acl_u_use_logs'		=> array('lang' => 'Puede usar el módulo de Log', 'cat' => 'points'),
	'acl_u_use_lottery'		=> array('lang' => 'Puede usar el módulo de Lotería', 'cat' => 'points'),
	'acl_u_use_transfer'	=> array('lang' => 'Puede usar el módulo de Transferencia', 'cat' => 'points'),
	'acl_m_chg_points'		=> array('lang' => 'Puede cambiar los puntos de los usuarios', 'cat' => 'points'),
	'acl_m_chg_bank'		=> array('lang' => 'Puede cambiar los puntos del Banco de los usuarios', 'cat' => 'points'),
	'acl_a_points'			=> array('lang' => 'Puede administrar Ultimate Points', 'cat' => 'points'),
));

?>