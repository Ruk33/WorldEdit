<?php
/**
*
* @package Ultimate Points Version Check
* @version $Id: ultimate_points_check_version.php 860 2012-07-01 13:52:43Z femu $
* @copyright (c) 2009 wuerzi & femu
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* @package mod_version_check
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

class ultimate_points_check_version
{
	function version()
	{
		global $config;

		return array(
			'author'	=> 'femu',
			'title'		=> 'Ultimate Points',
			'tag'		=> 'ultimate_points',
			'version'	=> '1.1.2',
			'file'		=> array('die-muellers.org', 'updatecheck', 'ultimate_points.xml'),
		);
	}
}

?>