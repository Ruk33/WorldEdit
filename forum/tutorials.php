<?php
	define('IN_PHPBB', true);

	$phpbb_root_path = (defined('PHPBB_ROOT_PATH')) ? PHPBB_ROOT_PATH : './';
	$phpEx = substr(strrchr(__FILE__, '.'), 1);
	require($phpbb_root_path . 'common.' . $phpEx);

	$user->session_begin();
	$auth->acl($user->data);
	$user->setup();

	function getTutorialsFromCategory($category_id) {
		global $db;

		$query = array(
			'SELECT'	=> 'p.post_id, p.poster_id, p.topic_id, p.forum_id, p.post_subject, t.topic_first_post_id, t.forum_id, u.username, u.user_colour',
			'FROM'		=> array(
				POSTS_TABLE	=> 'p'
			),
			'LEFT_JOIN'	=> array(
				array(
					'FROM'	=> array(TOPICS_TABLE => 't'),
					'ON'	=> 't.topic_first_post_id = p.post_id'
				),
				array(
					'FROM'	=> array(USERS_TABLE => 'u'),
					'ON'	=> 'u.user_id = p.poster_id'
				),
			),
			'WHERE'		=> 't.forum_id = ' . $category_id
		);

		return $db->sql_query($db->sql_build_query('SELECT', $query));
	}

	$categories = array(
		'GUI'						=> 48,
		'Mapa tutoriales'			=> 49,
		'Sistemas'					=> 51,
		'Creacion de spells'		=> 53,
		'Destacados'				=> 55,
		'General de GUI'			=> 57,
		'Tutoriales varios'			=> 59,
		'Modelaje de mapas'			=> 62,
		'Inteligencia artificial'	=> 64,
		'JASS'						=> 66,
		'Modelos'					=> 68,
		'Otros'						=> 70
	);

	$tutorial;
	$tutorials;

	foreach ($categories as $key => $value) {
		$tutorials = getTutorialsFromCategory($value);

		$template->assign_block_vars('tutorials', array(
			'CATEGORY'	=> $key
		));

		while ($tutorial = $db->sql_fetchrow($tutorials)) {
			$template->assign_block_vars('tutorials', array(
				'TUTORIAL_TITLE'	=> '<a href="viewtopic.php?t=' . $tutorial['topic_id'] . '">' . $tutorial['post_subject'] . '</a>',
				'TUTORIAL_AUTHOR'	=> get_username_string('full', $tutorial['user_id'], $tutorial['username'], $tutorial['user_colour'])
			));
		}
	}

	/*$tutorial;
	$tutorials = getTutorialsFromCategory('GUI');

	while ($tutorial = $db->sql_fetchrow($tutorials)) {
		$template->assign_block_vars('tutorials', array(
			'TUTORIAL_TITLE'	=> $tutorial['post_subject'],
			'TUTORIAL_AUTHOR'	=> get_username_string('full', $tutorial['user_id'], $tutorial['username'], $tutorial['user_colour'])
		));
	}*/

	page_header('Tutoriales');

	$template->set_filenames(array(
		'body'	=> 'tutorials_body.html'
	));

	page_footer();
?>