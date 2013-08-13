<?php
	$phpbb_root_path = (defined('PHPBB_ROOT_PATH')) ? PHPBB_ROOT_PATH : './';

	function DirectoryToArray($directory, $recursive) {
	    $array_items = array();
	    if ($handle = opendir($directory)) {
	        while (false !== ($file = readdir($handle))) {
	            if ($file != "." && $file != "..") {
	                if (is_dir($directory. "/" . $file)) {
	                    if($recursive) {
	                        $array_items = array_merge($array_items, directoryToArray($directory. "/" . $file, $recursive));
	                    }
	                    $file = $directory . "/" . $file;
	                    $array_items[] = preg_replace("/\/\//si", "/", $file);
	                } else {
	                    $file = $directory . "/" . $file;
	                    $array_items[] = preg_replace("/\/\//si", "/", $file);
	                }
	            }
	        }
	        closedir($handle);
	    }
	    return $array_items;
	}
	
	function GetRandomAvatar() {
		global $phpbb_root_path;
	
		$avatars = DirectoryToArray($phpbb_root_path . 'images/avatars/gallery/warcraft', false);
		$avatar_path = 'warcraft/';
		
		foreach ($avatars as $key => $value) {
			$avatars[$key] = substr($value, 34);
		}
	
		return $avatar_path . $avatars[mt_rand(0, count($avatars))];
	}

	/* Para agregar avatar random a todos los usuarios
	--------------------------------------------------
	define('IN_PHPBB', true);
	
	$phpEx = substr(strrchr(__FILE__, '.'), 1);
	
	include($phpbb_root_path . 'common.' . $phpEx);
	//include($phpbb_root_path . 'includes/functions_display.' . $phpEx);
	
	$avatars = DirectoryToArray($phpbb_root_path . 'images/avatars/gallery/warcraft', false);
	$avatarsCount = count($avatars);
	
	$newValues = array();
	
	foreach ($avatars as $key => $value) {
		$avatars[$key] = substr($value, 34);
	}
	
	$result = $db->sql_query("SELECT user_id, username, user_avatar, user_avatar_type, user_avatar_width, user_avatar_height FROM phpbb_users WHERE group_id <> 6");
	
	while ($row = $db->sql_fetchrow($result)) {
		$row['user_avatar'] = $avatarPath . $avatars[mt_rand(0, $avatarsCount)];
		$row['user_avatar_type'] = 3;
		$row['user_avatar_width'] = 64;
		$row['user_avatar_height'] = 64;
		
		echo $row['username'] . ' -> ' . $row['user_avatar'] . '<br />';
		
		$db->sql_query('UPDATE phpbb_users SET ' . $db->sql_build_array('UPDATE', $row) . ' WHERE user_id = ' . (int) $row['user_id']);
	}*/
?>