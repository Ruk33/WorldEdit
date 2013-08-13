<?php if (!defined('IN_PHPBB')) exit; $this->_tpl_include('overall_header.html'); $this->_tpldata['DEFINE']['.']['KARMAMOD'] = 1; ?>


<div id="pagecontent">

	<form method="post" action="<?php echo (isset($this->_rootref['S_PROFILE_ACTION'])) ? $this->_rootref['S_PROFILE_ACTION'] : ''; ?>">

	<table class="tablebg" width="100%" cellspacing="1">
	<tr>
		<th colspan="2" nowrap="nowrap"><?php echo (isset($this->_rootref['PAGE_TITLE'])) ? $this->_rootref['PAGE_TITLE'] : ''; ?></th>
	</tr>
	<tr>
		<td class="cat" width="40%" align="center"><h4><?php echo ((isset($this->_rootref['L_USER_PRESENCE'])) ? $this->_rootref['L_USER_PRESENCE'] : ((isset($user->lang['USER_PRESENCE'])) ? $user->lang['USER_PRESENCE'] : '{ USER_PRESENCE }')); ?></h4></td>
		<td class="cat" width="60%" align="center"><h4><?php echo ((isset($this->_rootref['L_USER_FORUM'])) ? $this->_rootref['L_USER_FORUM'] : ((isset($user->lang['USER_FORUM'])) ? $user->lang['USER_FORUM'] : '{ USER_FORUM }')); ?></h4></td>
	</tr>
	<tr>
		<td class="row1" align="center">

			<table cellspacing="1" cellpadding="2" border="0">
			<?php if ($this->_rootref['S_USER_INACTIVE']) {  ?>

			<tr>
				<td align="center" style="color: red;"><b class="gen"><?php echo ((isset($this->_rootref['L_USER_IS_INACTIVE'])) ? $this->_rootref['L_USER_IS_INACTIVE'] : ((isset($user->lang['USER_IS_INACTIVE'])) ? $user->lang['USER_IS_INACTIVE'] : '{ USER_IS_INACTIVE }')); ?></b><br /><?php echo ((isset($this->_rootref['L_INACTIVE_REASON'])) ? $this->_rootref['L_INACTIVE_REASON'] : ((isset($user->lang['INACTIVE_REASON'])) ? $user->lang['INACTIVE_REASON'] : '{ INACTIVE_REASON }')); ?>: <?php echo (isset($this->_rootref['USER_INACTIVE_REASON'])) ? $this->_rootref['USER_INACTIVE_REASON'] : ''; ?><br /><br /></td>
			</tr>
			<?php } ?>

			<tr>
				<td align="center"><?php if ($this->_rootref['USER_COLOR']) {  ?><b class="gen" style="color: <?php echo (isset($this->_rootref['USER_COLOR'])) ? $this->_rootref['USER_COLOR'] : ''; ?>"><?php } else { ?><b class="gen"><?php } echo (isset($this->_rootref['USERNAME'])) ? $this->_rootref['USERNAME'] : ''; ?></b><?php if ($this->_rootref['U_USER_ADMIN']) {  ?><span class="genmed"> [ <a href="<?php echo (isset($this->_rootref['U_USER_ADMIN'])) ? $this->_rootref['U_USER_ADMIN'] : ''; ?>"><?php echo ((isset($this->_rootref['L_USER_ADMIN'])) ? $this->_rootref['L_USER_ADMIN'] : ((isset($user->lang['USER_ADMIN'])) ? $user->lang['USER_ADMIN'] : '{ USER_ADMIN }')); ?></a> ]</span><?php } ?></td>
			</tr>
			<?php if ($this->_rootref['RANK_TITLE']) {  ?>

				<tr>
					<td class="postdetails" align="center"><?php echo (isset($this->_rootref['RANK_TITLE'])) ? $this->_rootref['RANK_TITLE'] : ''; ?></td>
				</tr>
			<?php } if ($this->_rootref['RANK_IMG']) {  ?>

				<tr>
					<td align="center"><?php echo (isset($this->_rootref['RANK_IMG'])) ? $this->_rootref['RANK_IMG'] : ''; ?></td>
				</tr>
			<?php } if ($this->_rootref['AVATAR_IMG']) {  ?>

				<tr>
					<td align="center"><?php echo (isset($this->_rootref['AVATAR_IMG'])) ? $this->_rootref['AVATAR_IMG'] : ''; ?></td>
				</tr>
			<?php } if ($this->_rootref['ONLINE_IMG']) {  ?>

			<tr>
				<td align="center"><?php echo (isset($this->_rootref['ONLINE_IMG'])) ? $this->_rootref['ONLINE_IMG'] : ''; ?></td>
			</tr>
			<?php } if ($this->_rootref['U_SWITCH_PERMISSIONS']) {  ?>

				<tr>
					<td class="genmed" align="center">[ <a href="<?php echo (isset($this->_rootref['U_SWITCH_PERMISSIONS'])) ? $this->_rootref['U_SWITCH_PERMISSIONS'] : ''; ?>"><?php echo ((isset($this->_rootref['L_USE_PERMISSIONS'])) ? $this->_rootref['L_USE_PERMISSIONS'] : ((isset($user->lang['USE_PERMISSIONS'])) ? $user->lang['USE_PERMISSIONS'] : '{ USE_PERMISSIONS }')); ?></a> ]</td>
				</tr>
			<?php } if ($this->_rootref['S_USER_LOGGED_IN'] && $this->_rootref['S_ZEBRA']) {  ?>

				<tr>
					<td class="genmed" align="center">[ <?php if ($this->_rootref['U_ADD_FRIEND'] && $this->_rootref['U_ADD_FOE']) {  ?><a href="<?php echo (isset($this->_rootref['U_ADD_FRIEND'])) ? $this->_rootref['U_ADD_FRIEND'] : ''; ?>"><?php echo ((isset($this->_rootref['L_ADD_FRIEND'])) ? $this->_rootref['L_ADD_FRIEND'] : ((isset($user->lang['ADD_FRIEND'])) ? $user->lang['ADD_FRIEND'] : '{ ADD_FRIEND }')); ?></a> | <a href="<?php echo (isset($this->_rootref['U_ADD_FOE'])) ? $this->_rootref['U_ADD_FOE'] : ''; ?>"><?php echo ((isset($this->_rootref['L_ADD_FOE'])) ? $this->_rootref['L_ADD_FOE'] : ((isset($user->lang['ADD_FOE'])) ? $user->lang['ADD_FOE'] : '{ ADD_FOE }')); ?></a><?php } if ($this->_rootref['U_REMOVE_FRIEND']) {  ?><a href="<?php echo (isset($this->_rootref['U_REMOVE_FRIEND'])) ? $this->_rootref['U_REMOVE_FRIEND'] : ''; ?>"><?php echo ((isset($this->_rootref['L_REMOVE_FRIEND'])) ? $this->_rootref['L_REMOVE_FRIEND'] : ((isset($user->lang['REMOVE_FRIEND'])) ? $user->lang['REMOVE_FRIEND'] : '{ REMOVE_FRIEND }')); ?></a><?php } if ($this->_rootref['U_REMOVE_FOE']) {  ?><a href="<?php echo (isset($this->_rootref['U_REMOVE_FOE'])) ? $this->_rootref['U_REMOVE_FOE'] : ''; ?>"><?php echo ((isset($this->_rootref['L_REMOVE_FOE'])) ? $this->_rootref['L_REMOVE_FOE'] : ((isset($user->lang['REMOVE_FOE'])) ? $user->lang['REMOVE_FOE'] : '{ REMOVE_FOE }')); ?></a><?php } ?> ]</td>
				</tr>
			<?php } ?>

			</table>
		</td>
		<td class="row1">
			<table width="100%" cellspacing="1" cellpadding="2" border="0">
			<tr>
				<td class="gen" align="<?php echo (isset($this->_rootref['S_CONTENT_FLOW_END'])) ? $this->_rootref['S_CONTENT_FLOW_END'] : ''; ?>" nowrap="nowrap"><?php echo ((isset($this->_rootref['L_JOINED'])) ? $this->_rootref['L_JOINED'] : ((isset($user->lang['JOINED'])) ? $user->lang['JOINED'] : '{ JOINED }')); ?>: </td>
				<td width="100%"><b class="gen"><?php echo (isset($this->_rootref['JOINED'])) ? $this->_rootref['JOINED'] : ''; ?></b></td>
			</tr>
			<tr>
				<td class="gen" align="<?php echo (isset($this->_rootref['S_CONTENT_FLOW_END'])) ? $this->_rootref['S_CONTENT_FLOW_END'] : ''; ?>" nowrap="nowrap"><?php echo ((isset($this->_rootref['L_VISITED'])) ? $this->_rootref['L_VISITED'] : ((isset($user->lang['VISITED'])) ? $user->lang['VISITED'] : '{ VISITED }')); ?>: </td>
				<td width="100%"><b class="gen"><?php echo (isset($this->_rootref['VISITED'])) ? $this->_rootref['VISITED'] : ''; ?></b></td>
			</tr>
			<?php if ($this->_rootref['U_NOTES'] || $this->_rootref['U_WARN']) {  ?>

				<tr>
					<td class="gen" align="<?php echo (isset($this->_rootref['S_CONTENT_FLOW_END'])) ? $this->_rootref['S_CONTENT_FLOW_END'] : ''; ?>" valign="top" nowrap="nowrap"><?php echo ((isset($this->_rootref['L_WARNINGS'])) ? $this->_rootref['L_WARNINGS'] : ((isset($user->lang['WARNINGS'])) ? $user->lang['WARNINGS'] : '{ WARNINGS }')); ?>: </td>
					<td width="100%"><b class="gen"><?php echo (isset($this->_rootref['WARNINGS'])) ? $this->_rootref['WARNINGS'] : ''; ?></b><br /><span class="genmed">[ <a href="<?php echo (isset($this->_rootref['U_NOTES'])) ? $this->_rootref['U_NOTES'] : ''; ?>"><?php echo ((isset($this->_rootref['L_VIEW_NOTES'])) ? $this->_rootref['L_VIEW_NOTES'] : ((isset($user->lang['VIEW_NOTES'])) ? $user->lang['VIEW_NOTES'] : '{ VIEW_NOTES }')); ?></a> <?php if ($this->_rootref['U_WARN']) {  ?> | <a href="<?php echo (isset($this->_rootref['U_WARN'])) ? $this->_rootref['U_WARN'] : ''; ?>"><?php echo ((isset($this->_rootref['L_WARN_USER'])) ? $this->_rootref['L_WARN_USER'] : ((isset($user->lang['WARN_USER'])) ? $user->lang['WARN_USER'] : '{ WARN_USER }')); ?></a> <?php } ?>]</span></td>
				</tr>
			<?php } ?>

			<tr>
				<td class="gen" align="<?php echo (isset($this->_rootref['S_CONTENT_FLOW_END'])) ? $this->_rootref['S_CONTENT_FLOW_END'] : ''; ?>" valign="top" nowrap="nowrap"><?php echo ((isset($this->_rootref['L_TOTAL_POSTS'])) ? $this->_rootref['L_TOTAL_POSTS'] : ((isset($user->lang['TOTAL_POSTS'])) ? $user->lang['TOTAL_POSTS'] : '{ TOTAL_POSTS }')); ?>: </td>
				<td><b class="gen"><?php echo (isset($this->_rootref['POSTS'])) ? $this->_rootref['POSTS'] : ''; ?></b><span class="genmed"><?php if ($this->_rootref['POSTS_PCT']) {  ?><br />[<?php echo (isset($this->_rootref['POSTS_PCT'])) ? $this->_rootref['POSTS_PCT'] : ''; ?> / <?php echo (isset($this->_rootref['POSTS_DAY'])) ? $this->_rootref['POSTS_DAY'] : ''; ?>]<?php } ?><br /><a href="<?php echo (isset($this->_rootref['U_SEARCH_USER'])) ? $this->_rootref['U_SEARCH_USER'] : ''; ?>"><?php echo ((isset($this->_rootref['L_SEARCH_USER_POSTS'])) ? $this->_rootref['L_SEARCH_USER_POSTS'] : ((isset($user->lang['SEARCH_USER_POSTS'])) ? $user->lang['SEARCH_USER_POSTS'] : '{ SEARCH_USER_POSTS }')); ?></a></span></td>
			</tr>
			<!-- [+] Karma MOD //--><?php if ($this->_rootref['S_KARMA']) {  ?>

			<tr>
				<td class="gen" align="<?php echo (isset($this->_rootref['S_CONTENT_FLOW_END'])) ? $this->_rootref['S_CONTENT_FLOW_END'] : ''; ?>" nowrap="nowrap"><?php echo ((isset($this->_rootref['L_KARMA'])) ? $this->_rootref['L_KARMA'] : ((isset($user->lang['KARMA'])) ? $user->lang['KARMA'] : '{ KARMA }')); ?>: </td>
				<td><b class="gen"><?php echo (isset($this->_rootref['KARMA'])) ? $this->_rootref['KARMA'] : ''; ?></b>
				<?php if ($this->_rootref['U_KARMA_INCREASE'] || $this->_rootref['U_KARMA_DECREASE']) {  ?>

					<span class="genmed"><?php if ($this->_rootref['U_KARMA_INCREASE']) {  ?><a href="<?php echo (isset($this->_rootref['U_KARMA_INCREASE'])) ? $this->_rootref['U_KARMA_INCREASE'] : ''; ?>">[+]</a> <?php } if ($this->_rootref['U_KARMA_DECREASE']) {  ?><a href="<?php echo (isset($this->_rootref['U_KARMA_DECREASE'])) ? $this->_rootref['U_KARMA_DECREASE'] : ''; ?>">[-]</a> <?php } ?></span>
				<?php } if ($this->_rootref['U_KARMA_COMMENTS']) {  ?><br /><span class="genmed">[ <a href="<?php echo (isset($this->_rootref['U_KARMA_COMMENTS'])) ? $this->_rootref['U_KARMA_COMMENTS'] : ''; ?>"><?php echo ((isset($this->_rootref['L_KARMA_USER_COMMENTS'])) ? $this->_rootref['L_KARMA_USER_COMMENTS'] : ((isset($user->lang['KARMA_USER_COMMENTS'])) ? $user->lang['KARMA_USER_COMMENTS'] : '{ KARMA_USER_COMMENTS }')); ?></a> ]</span><?php } ?>

				</td>
			</tr>
			<?php } ?><!-- [-] Karma MOD //--><?php if ($this->_rootref['S_SHOW_ACTIVITY']) {  ?>

				<tr>
					<td class="gen" align="<?php echo (isset($this->_rootref['S_CONTENT_FLOW_END'])) ? $this->_rootref['S_CONTENT_FLOW_END'] : ''; ?>" valign="top" nowrap="nowrap"><?php echo ((isset($this->_rootref['L_ACTIVE_IN_FORUM'])) ? $this->_rootref['L_ACTIVE_IN_FORUM'] : ((isset($user->lang['ACTIVE_IN_FORUM'])) ? $user->lang['ACTIVE_IN_FORUM'] : '{ ACTIVE_IN_FORUM }')); ?>: </td>
					<td><?php if ($this->_rootref['ACTIVE_FORUM']) {  ?><b><a class="gen" href="<?php echo (isset($this->_rootref['U_ACTIVE_FORUM'])) ? $this->_rootref['U_ACTIVE_FORUM'] : ''; ?>"><?php echo (isset($this->_rootref['ACTIVE_FORUM'])) ? $this->_rootref['ACTIVE_FORUM'] : ''; ?></a></b><br /><span class="genmed">[ <?php echo (isset($this->_rootref['ACTIVE_FORUM_POSTS'])) ? $this->_rootref['ACTIVE_FORUM_POSTS'] : ''; ?> / <?php echo (isset($this->_rootref['ACTIVE_FORUM_PCT'])) ? $this->_rootref['ACTIVE_FORUM_PCT'] : ''; ?> ]</span><?php } else { ?><span class="gen">-</span><?php } ?></td>
				</tr>
				<tr>
					<td class="gen" align="<?php echo (isset($this->_rootref['S_CONTENT_FLOW_END'])) ? $this->_rootref['S_CONTENT_FLOW_END'] : ''; ?>" valign="top" nowrap="nowrap"><?php echo ((isset($this->_rootref['L_ACTIVE_IN_TOPIC'])) ? $this->_rootref['L_ACTIVE_IN_TOPIC'] : ((isset($user->lang['ACTIVE_IN_TOPIC'])) ? $user->lang['ACTIVE_IN_TOPIC'] : '{ ACTIVE_IN_TOPIC }')); ?>: </td>
					<td><?php if ($this->_rootref['ACTIVE_TOPIC']) {  ?><b><a class="gen" href="<?php echo (isset($this->_rootref['U_ACTIVE_TOPIC'])) ? $this->_rootref['U_ACTIVE_TOPIC'] : ''; ?>"><?php echo (isset($this->_rootref['ACTIVE_TOPIC'])) ? $this->_rootref['ACTIVE_TOPIC'] : ''; ?></a></b><br /><span class="genmed">[ <?php echo (isset($this->_rootref['ACTIVE_TOPIC_POSTS'])) ? $this->_rootref['ACTIVE_TOPIC_POSTS'] : ''; ?> / <?php echo (isset($this->_rootref['ACTIVE_TOPIC_PCT'])) ? $this->_rootref['ACTIVE_TOPIC_PCT'] : ''; ?> ]</span><?php } else { ?><span class="gen">-</span><?php } ?></td>
				</tr>
			<?php } ?>

			</table>
		</td>
	</tr>
	</table>

	</form>

</div>

<br clear="all" />

<table width="100%" cellspacing="1">
<tr>
	<?php if ($this->_rootref['PAGINATION'] || $this->_rootref['TOTAL_COMMENTS']) {  ?>

		<td class="nav" valign="middle" nowrap="nowrap">&nbsp;<?php echo (isset($this->_rootref['PAGE_NUMBER'])) ? $this->_rootref['PAGE_NUMBER'] : ''; ?><br /></td>
		<td class="gensmall" nowrap="nowrap">&nbsp;[ <?php echo (isset($this->_rootref['TOTAL_COMMENTS'])) ? $this->_rootref['TOTAL_COMMENTS'] : ''; ?> ]&nbsp;</td>
		<td class="gensmall" width="100%" align="<?php echo (isset($this->_rootref['S_CONTENT_FLOW_END'])) ? $this->_rootref['S_CONTENT_FLOW_END'] : ''; ?>" nowrap="nowrap"><?php $this->_tpl_include('pagination.html'); ?></td>
	<?php } ?>

</tr>
</table>


<table class="tablebg" width="100%" cellspacing="1">
<tr>
	<th align="center"><?php echo ((isset($this->_rootref['L_KARMA_COMMENTS'])) ? $this->_rootref['L_KARMA_COMMENTS'] : ((isset($user->lang['KARMA_COMMENTS'])) ? $user->lang['KARMA_COMMENTS'] : '{ KARMA_COMMENTS }')); ?></th>
</tr>
<tr>
	<td class="row1"><div style="overflow: auto; width: 100%; height: 300px;">

		<table class="tablebg" width="100%" cellspacing="1">
		<tr>
			<th width="22%"><?php echo ((isset($this->_rootref['L_AUTHOR'])) ? $this->_rootref['L_AUTHOR'] : ((isset($user->lang['AUTHOR'])) ? $user->lang['AUTHOR'] : '{ AUTHOR }')); ?></th>
			<th><?php echo ((isset($this->_rootref['L_MESSAGE'])) ? $this->_rootref['L_MESSAGE'] : ((isset($user->lang['MESSAGE'])) ? $user->lang['MESSAGE'] : '{ MESSAGE }')); ?></th>
		</tr>
		<?php $_karma_comments_row_count = (isset($this->_tpldata['karma_comments_row'])) ? sizeof($this->_tpldata['karma_comments_row']) : 0;if ($_karma_comments_row_count) {for ($_karma_comments_row_i = 0; $_karma_comments_row_i < $_karma_comments_row_count; ++$_karma_comments_row_i){$_karma_comments_row_val = &$this->_tpldata['karma_comments_row'][$_karma_comments_row_i]; if (!($_karma_comments_row_val['S_ROW_COUNT'] & 1)  ) {  ?><tr class="row1"><?php } else { ?><tr class="row2"><?php } ?>


				<td rowspan="2" align="<?php echo (isset($this->_rootref['S_CONTENT_FLOW_BEGIN'])) ? $this->_rootref['S_CONTENT_FLOW_BEGIN'] : ''; ?>" valign="top"><a id="pr<?php echo $_karma_comments_row_val['POST_ID']; ?>"></a>
					<table width="150" cellspacing="0">
					<tr>
						<td align="center"><b class="postauthor"<?php if ($_karma_comments_row_val['POST_AUTHOR_COLOUR']) {  ?> style="color: <?php echo $_karma_comments_row_val['POST_AUTHOR_COLOUR']; ?>"<?php } ?>><?php echo $_karma_comments_row_val['POST_AUTHOR']; ?></b></td>
					</tr>
					</table>
				</td>
			</tr>

			<?php if (!($_karma_comments_row_val['S_ROW_COUNT'] & 1)  ) {  ?><tr class="row1"><?php } else { ?><tr class="row2"><?php } ?>


				<td valign="top">
					<table width="100%" cellspacing="0">
					<tr>
						<td valign="top">
							<table width="100%" cellspacing="0" cellpadding="2">
							<tr>
								<td>
									<div class="postbody"><?php echo $_karma_comments_row_val['COMMENT']; ?></div>
								</td>
							</tr>
							</table>
						</td>
					</tr>
					<tr>
						<td>
							<table width="100%" cellspacing="0">
							<tr valign="middle">
								<td width="100%"></td>
								<td width="10" nowrap="nowrap"><?php if (! $this->_rootref['S_IS_BOT'] && $_karma_comments_row_val['U_MINI_POST']) {  ?><a href="<?php echo $_karma_comments_row_val['U_MINI_POST']; ?>"><?php } if ($_karma_comments_row_val['ICON_IMG']) {  ?><img src="<?php echo (isset($this->_rootref['T_ICONS_PATH'])) ? $this->_rootref['T_ICONS_PATH'] : ''; echo $_karma_comments_row_val['ICON_IMG']; ?>" width="<?php echo $_karma_comments_row_val['ICON_IMG_WIDTH']; ?>" height="<?php echo $_karma_comments_row_val['ICON_IMG_HEIGHT']; ?>" alt="" /><?php } else { echo $_karma_comments_row_val['MINI_POST_IMG']; } if (! $this->_rootref['S_IS_BOT'] && $_karma_comments_row_val['U_MINI_POST']) {  ?></a><?php } ?></td>
								<td class="gensmall" nowrap="nowrap"><?php echo $_karma_comments_row_val['KARMA_POWER']; ?> <b><?php echo ((isset($this->_rootref['L_POSTED'])) ? $this->_rootref['L_POSTED'] : ((isset($user->lang['POSTED'])) ? $user->lang['POSTED'] : '{ POSTED }')); ?>:</b> <?php echo $_karma_comments_row_val['POST_DATE']; ?></td>
							</tr>
							</table>
						</td>
					</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td class="spacer" colspan="2"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
			</tr>
		<?php }} else { ?>

			<tr>
				<td class="row1" colspan="2" height="30" align="center" valign="middle"><span class="gen"><?php echo ((isset($this->_rootref['L_KARMA_NO_COMMENTS'])) ? $this->_rootref['L_KARMA_NO_COMMENTS'] : ((isset($user->lang['KARMA_NO_COMMENTS'])) ? $user->lang['KARMA_NO_COMMENTS'] : '{ KARMA_NO_COMMENTS }')); ?></span></td>
			</tr>
			<tr>
				<td class="spacer" colspan="2"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
			</tr>
		<?php } ?>

		</table>
	</div></td>
</tr>
</table>

<table width="100%" cellspacing="1">
<tr>
	<?php if ($this->_rootref['PAGINATION'] || $this->_rootref['TOTAL_COMMENTS']) {  ?>

		<td class="nav" valign="middle" nowrap="nowrap">&nbsp;<?php echo (isset($this->_rootref['PAGE_NUMBER'])) ? $this->_rootref['PAGE_NUMBER'] : ''; ?><br /></td>
		<td class="gensmall" nowrap="nowrap">&nbsp;[ <?php echo (isset($this->_rootref['TOTAL_COMMENTS'])) ? $this->_rootref['TOTAL_COMMENTS'] : ''; ?> ]&nbsp;</td>
		<td class="gensmall" width="100%" align="<?php echo (isset($this->_rootref['S_CONTENT_FLOW_END'])) ? $this->_rootref['S_CONTENT_FLOW_END'] : ''; ?>" nowrap="nowrap"><?php $this->_tpl_include('pagination.html'); ?></td>
	<?php } ?>

</tr>
</table>

<br clear="all" />

<?php $this->_tpl_include('breadcrumbs.html'); if ($this->_rootref['S_DISPLAY_ONLINE_LIST']) {  ?>

	<br clear="all" />

	<table class="tablebg" width="100%" cellspacing="1">
	<tr>
		<td class="cat"><h4><?php echo ((isset($this->_rootref['L_WHO_IS_ONLINE'])) ? $this->_rootref['L_WHO_IS_ONLINE'] : ((isset($user->lang['WHO_IS_ONLINE'])) ? $user->lang['WHO_IS_ONLINE'] : '{ WHO_IS_ONLINE }')); ?></h4></td>
	</tr>
	<tr>
		<td class="row1"><p class="gensmall"><?php echo (isset($this->_rootref['LOGGED_IN_USER_LIST'])) ? $this->_rootref['LOGGED_IN_USER_LIST'] : ''; ?></p></td>
	</tr>
	</table>
<?php } ?>


<div style="float: <?php echo (isset($this->_rootref['S_CONTENT_FLOW_END'])) ? $this->_rootref['S_CONTENT_FLOW_END'] : ''; ?>;"><?php $this->_tpl_include('jumpbox.html'); ?></div>

<?php $this->_tpl_include('overall_footer.html'); ?>