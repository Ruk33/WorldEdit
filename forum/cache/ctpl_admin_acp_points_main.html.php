<?php if (!defined('IN_PHPBB')) exit; $this->_tpl_include('overall_header.html'); ?><!-- $Id: acp_points_main.html 828 2012-04-09 23:42:02Z Wuerzi $ -->

<a name="maincontent"></a>

<?php if ($this->_rootref['S_POINTS_MAIN']) {  ?>


	<h1><?php echo ((isset($this->_rootref['L_ACP_POINTS'])) ? $this->_rootref['L_ACP_POINTS'] : ((isset($user->lang['ACP_POINTS'])) ? $user->lang['ACP_POINTS'] : '{ ACP_POINTS }')); ?> - <?php echo ((isset($this->_rootref['L_ACP_POINTS_INDEX_TITLE'])) ? $this->_rootref['L_ACP_POINTS_INDEX_TITLE'] : ((isset($user->lang['ACP_POINTS_INDEX_TITLE'])) ? $user->lang['ACP_POINTS_INDEX_TITLE'] : '{ ACP_POINTS_INDEX_TITLE }')); ?></h1>
	<p><?php echo ((isset($this->_rootref['L_ACP_POINTS_INDEX_EXPLAIN'])) ? $this->_rootref['L_ACP_POINTS_INDEX_EXPLAIN'] : ((isset($user->lang['ACP_POINTS_INDEX_EXPLAIN'])) ? $user->lang['ACP_POINTS_INDEX_EXPLAIN'] : '{ ACP_POINTS_INDEX_EXPLAIN }')); ?></p>

	<?php if (! $this->_rootref['S_POINTS_ACTIVATED']) {  ?>

	<div class="errorbox"><?php echo ((isset($this->_rootref['L_ACP_POINTS_DEACTIVATED'])) ? $this->_rootref['L_ACP_POINTS_DEACTIVATED'] : ((isset($user->lang['ACP_POINTS_DEACTIVATED'])) ? $user->lang['ACP_POINTS_DEACTIVATED'] : '{ ACP_POINTS_DEACTIVATED }')); ?></div>
	<?php } ?>


	<div class="successbox"><?php echo ((isset($this->_rootref['L_ACP_POINTS_VALUES_HINT'])) ? $this->_rootref['L_ACP_POINTS_VALUES_HINT'] : ((isset($user->lang['ACP_POINTS_VALUES_HINT'])) ? $user->lang['ACP_POINTS_VALUES_HINT'] : '{ ACP_POINTS_VALUES_HINT }')); ?></div>

	<form id="acp_points_main" method="post" action="<?php echo (isset($this->_rootref['U_ACTION'])) ? $this->_rootref['U_ACTION'] : ''; ?>">
	<fieldset>
		<legend><?php echo ((isset($this->_rootref['L_ACP_POINTS_INDEX_TITLE'])) ? $this->_rootref['L_ACP_POINTS_INDEX_TITLE'] : ((isset($user->lang['ACP_POINTS_INDEX_TITLE'])) ? $user->lang['ACP_POINTS_INDEX_TITLE'] : '{ ACP_POINTS_INDEX_TITLE }')); ?></legend> 	
	<dl>
		<dt><label><?php echo ((isset($this->_rootref['L_POINTS_NAME'])) ? $this->_rootref['L_POINTS_NAME'] : ((isset($user->lang['POINTS_NAME'])) ? $user->lang['POINTS_NAME'] : '{ POINTS_NAME }')); ?>:</label><br /><?php echo ((isset($this->_rootref['L_POINTS_NAME_EXPLAIN'])) ? $this->_rootref['L_POINTS_NAME_EXPLAIN'] : ((isset($user->lang['POINTS_NAME_EXPLAIN'])) ? $user->lang['POINTS_NAME_EXPLAIN'] : '{ POINTS_NAME_EXPLAIN }')); ?></dt>
		<dd><input name="points_name" type="text" id="points_name" size="30" maxlength="30" value="<?php echo (isset($this->_rootref['POINTS_NAME'])) ? $this->_rootref['POINTS_NAME'] : ''; ?>" /></dd>
	</dl>
	<dl>
		<dt><label><?php echo ((isset($this->_rootref['L_POINTS_ENABLE'])) ? $this->_rootref['L_POINTS_ENABLE'] : ((isset($user->lang['POINTS_ENABLE'])) ? $user->lang['POINTS_ENABLE'] : '{ POINTS_ENABLE }')); ?>:</label><br /><?php echo ((isset($this->_rootref['L_POINTS_ENABLE_EXPLAIN'])) ? $this->_rootref['L_POINTS_ENABLE_EXPLAIN'] : ((isset($user->lang['POINTS_ENABLE_EXPLAIN'])) ? $user->lang['POINTS_ENABLE_EXPLAIN'] : '{ POINTS_ENABLE_EXPLAIN }')); ?></dt>
		<dd><label><input type="radio" class="radio" name="points_enable" value="1"<?php if ($this->_rootref['POINTS_ENABLE']) {  ?> id="points_enable" checked="checked" <?php } ?> /> <?php echo ((isset($this->_rootref['L_YES'])) ? $this->_rootref['L_YES'] : ((isset($user->lang['YES'])) ? $user->lang['YES'] : '{ YES }')); ?></label>
			<label><input type="radio" class="radio" name="points_enable" value="0"<?php if (! $this->_rootref['POINTS_ENABLE']) {  ?> id="points_enable" checked="checked" <?php } ?> /> <?php echo ((isset($this->_rootref['L_NO'])) ? $this->_rootref['L_NO'] : ((isset($user->lang['NO'])) ? $user->lang['NO'] : '{ NO }')); ?></label></dd>
	</dl>
	<dl>
		<dt><label><?php echo ((isset($this->_rootref['L_POINTS_DISABLEMSG'])) ? $this->_rootref['L_POINTS_DISABLEMSG'] : ((isset($user->lang['POINTS_DISABLEMSG'])) ? $user->lang['POINTS_DISABLEMSG'] : '{ POINTS_DISABLEMSG }')); ?>:</label><br /><?php echo ((isset($this->_rootref['L_POINTS_DISABLEMSG_EXPLAIN'])) ? $this->_rootref['L_POINTS_DISABLEMSG_EXPLAIN'] : ((isset($user->lang['POINTS_DISABLEMSG_EXPLAIN'])) ? $user->lang['POINTS_DISABLEMSG_EXPLAIN'] : '{ POINTS_DISABLEMSG_EXPLAIN }')); ?></dt>
		<dd><input name="points_disablemsg" type="text" id="points_disablemsg" size="50" maxlength="50" value="<?php echo (isset($this->_rootref['POINTS_DISABLEMSG'])) ? $this->_rootref['POINTS_DISABLEMSG'] : ''; ?>" /></dd>
	</dl>
	<dl>
		<dt><label><?php echo ((isset($this->_rootref['L_POINTS_TRANSFER'])) ? $this->_rootref['L_POINTS_TRANSFER'] : ((isset($user->lang['POINTS_TRANSFER'])) ? $user->lang['POINTS_TRANSFER'] : '{ POINTS_TRANSFER }')); ?>:</label><br /><?php echo ((isset($this->_rootref['L_POINTS_TRANSFER_EXPLAIN'])) ? $this->_rootref['L_POINTS_TRANSFER_EXPLAIN'] : ((isset($user->lang['POINTS_TRANSFER_EXPLAIN'])) ? $user->lang['POINTS_TRANSFER_EXPLAIN'] : '{ POINTS_TRANSFER_EXPLAIN }')); ?></dt>
		<dd><label><input type="radio" class="radio" name="transfer_enable" value="1"<?php if ($this->_rootref['TRANSFER_ENABLE']) {  ?> id="transfer_enable" checked="checked" <?php } ?> /> <?php echo ((isset($this->_rootref['L_YES'])) ? $this->_rootref['L_YES'] : ((isset($user->lang['YES'])) ? $user->lang['YES'] : '{ YES }')); ?></label>
			<label><input type="radio" class="radio" name="transfer_enable" value="0"<?php if (! $this->_rootref['TRANSFER_ENABLE']) {  ?> id="transfer_enable" checked="checked" <?php } ?> /> <?php echo ((isset($this->_rootref['L_NO'])) ? $this->_rootref['L_NO'] : ((isset($user->lang['NO'])) ? $user->lang['NO'] : '{ NO }')); ?></label></dd>
	</dl>
	<dl>
		<dt><label><?php echo ((isset($this->_rootref['L_POINTS_STATS'])) ? $this->_rootref['L_POINTS_STATS'] : ((isset($user->lang['POINTS_STATS'])) ? $user->lang['POINTS_STATS'] : '{ POINTS_STATS }')); ?>:</label><br /><?php echo ((isset($this->_rootref['L_POINTS_STATS_EXPLAIN'])) ? $this->_rootref['L_POINTS_STATS_EXPLAIN'] : ((isset($user->lang['POINTS_STATS_EXPLAIN'])) ? $user->lang['POINTS_STATS_EXPLAIN'] : '{ POINTS_STATS_EXPLAIN }')); ?></dt>
		<dd><label><input type="radio" class="radio" name="stats_enable" value="1"<?php if ($this->_rootref['STATS_ENABLE']) {  ?> id="stats_enable" checked="checked" <?php } ?> /> <?php echo ((isset($this->_rootref['L_YES'])) ? $this->_rootref['L_YES'] : ((isset($user->lang['YES'])) ? $user->lang['YES'] : '{ YES }')); ?></label>
			<label><input type="radio" class="radio" name="stats_enable" value="0"<?php if (! $this->_rootref['STATS_ENABLE']) {  ?> id="stats_enable" checked="checked" <?php } ?> /> <?php echo ((isset($this->_rootref['L_NO'])) ? $this->_rootref['L_NO'] : ((isset($user->lang['NO'])) ? $user->lang['NO'] : '{ NO }')); ?></label></dd>
	</dl>
	<dl>
		<dt><label><?php echo ((isset($this->_rootref['L_POINTS_TRANSFER_PM'])) ? $this->_rootref['L_POINTS_TRANSFER_PM'] : ((isset($user->lang['POINTS_TRANSFER_PM'])) ? $user->lang['POINTS_TRANSFER_PM'] : '{ POINTS_TRANSFER_PM }')); ?>:</label><br /><?php echo ((isset($this->_rootref['L_POINTS_TRANSFER_PM_EXPLAIN'])) ? $this->_rootref['L_POINTS_TRANSFER_PM_EXPLAIN'] : ((isset($user->lang['POINTS_TRANSFER_PM_EXPLAIN'])) ? $user->lang['POINTS_TRANSFER_PM_EXPLAIN'] : '{ POINTS_TRANSFER_PM_EXPLAIN }')); ?></dt>
		<dd><label><input type="radio" class="radio" name="transfer_pm_enable" value="1"<?php if ($this->_rootref['TRANSFER_PM_ENABLE']) {  ?> id="transfer_pm_enable" checked="checked" <?php } ?> /> <?php echo ((isset($this->_rootref['L_YES'])) ? $this->_rootref['L_YES'] : ((isset($user->lang['YES'])) ? $user->lang['YES'] : '{ YES }')); ?></label>
			<label><input type="radio" class="radio" name="transfer_pm_enable" value="0"<?php if (! $this->_rootref['TRANSFER_PM_ENABLE']) {  ?> id="transfer_pm_enable" checked="checked" <?php } ?> /> <?php echo ((isset($this->_rootref['L_NO'])) ? $this->_rootref['L_NO'] : ((isset($user->lang['NO'])) ? $user->lang['NO'] : '{ NO }')); ?></label></dd>
	</dl>
	<dl>
		<dt><label><?php echo ((isset($this->_rootref['L_POINTS_COMMENTS'])) ? $this->_rootref['L_POINTS_COMMENTS'] : ((isset($user->lang['POINTS_COMMENTS'])) ? $user->lang['POINTS_COMMENTS'] : '{ POINTS_COMMENTS }')); ?>:</label><br /><?php echo ((isset($this->_rootref['L_POINTS_COMMENTS_EXPLAIN'])) ? $this->_rootref['L_POINTS_COMMENTS_EXPLAIN'] : ((isset($user->lang['POINTS_COMMENTS_EXPLAIN'])) ? $user->lang['POINTS_COMMENTS_EXPLAIN'] : '{ POINTS_COMMENTS_EXPLAIN }')); ?></dt>
		<dd><label><input type="radio" class="radio" name="comments_enable" value="1"<?php if ($this->_rootref['COMMENTS_ENABLE']) {  ?> id="comments_enable" checked="checked" <?php } ?> /> <?php echo ((isset($this->_rootref['L_YES'])) ? $this->_rootref['L_YES'] : ((isset($user->lang['YES'])) ? $user->lang['YES'] : '{ YES }')); ?></label>
			<label><input type="radio" class="radio" name="comments_enable" value="0"<?php if (! $this->_rootref['COMMENTS_ENABLE']) {  ?> id="comments_enable" checked="checked" <?php } ?> /> <?php echo ((isset($this->_rootref['L_NO'])) ? $this->_rootref['L_NO'] : ((isset($user->lang['NO'])) ? $user->lang['NO'] : '{ NO }')); ?></label></dd>
	</dl>
	<dl>
		<dt><label><?php echo ((isset($this->_rootref['L_POINTS_LOGS'])) ? $this->_rootref['L_POINTS_LOGS'] : ((isset($user->lang['POINTS_LOGS'])) ? $user->lang['POINTS_LOGS'] : '{ POINTS_LOGS }')); ?>:</label><br /><?php echo ((isset($this->_rootref['L_POINTS_LOGS_EXPLAIN'])) ? $this->_rootref['L_POINTS_LOGS_EXPLAIN'] : ((isset($user->lang['POINTS_LOGS_EXPLAIN'])) ? $user->lang['POINTS_LOGS_EXPLAIN'] : '{ POINTS_LOGS_EXPLAIN }')); ?></dt>
		<dd><label><input type="radio" class="radio" name="logs_enable" value="1"<?php if ($this->_rootref['LOGS_ENABLE']) {  ?> id="logs_enable" checked="checked" <?php } ?> /> <?php echo ((isset($this->_rootref['L_YES'])) ? $this->_rootref['L_YES'] : ((isset($user->lang['YES'])) ? $user->lang['YES'] : '{ YES }')); ?></label>
			<label><input type="radio" class="radio" name="logs_enable" value="0"<?php if (! $this->_rootref['LOGS_ENABLE']) {  ?> id="logs_enable" checked="checked" <?php } ?> /> <?php echo ((isset($this->_rootref['L_NO'])) ? $this->_rootref['L_NO'] : ((isset($user->lang['NO'])) ? $user->lang['NO'] : '{ NO }')); ?></label></dd>
	</dl>
	<dl>
		<dt><label><?php echo ((isset($this->_rootref['L_POINTS_IMAGES_TOPIC'])) ? $this->_rootref['L_POINTS_IMAGES_TOPIC'] : ((isset($user->lang['POINTS_IMAGES_TOPIC'])) ? $user->lang['POINTS_IMAGES_TOPIC'] : '{ POINTS_IMAGES_TOPIC }')); ?>:</label><br /><?php echo ((isset($this->_rootref['L_POINTS_IMAGES_TOPIC_EXPLAIN'])) ? $this->_rootref['L_POINTS_IMAGES_TOPIC_EXPLAIN'] : ((isset($user->lang['POINTS_IMAGES_TOPIC_EXPLAIN'])) ? $user->lang['POINTS_IMAGES_TOPIC_EXPLAIN'] : '{ POINTS_IMAGES_TOPIC_EXPLAIN }')); ?></dt>
		<dd><label><input type="radio" class="radio" name="images_topic_enable" value="1"<?php if ($this->_rootref['IMAGES_TOPIC_ENABLE']) {  ?> id="images_topic_enable" checked="checked" <?php } ?> /> <?php echo ((isset($this->_rootref['L_YES'])) ? $this->_rootref['L_YES'] : ((isset($user->lang['YES'])) ? $user->lang['YES'] : '{ YES }')); ?></label>
			<label><input type="radio" class="radio" name="images_topic_enable" value="0"<?php if (! $this->_rootref['IMAGES_TOPIC_ENABLE']) {  ?> id="images_topic_enable" checked="checked" <?php } ?> /> <?php echo ((isset($this->_rootref['L_NO'])) ? $this->_rootref['L_NO'] : ((isset($user->lang['NO'])) ? $user->lang['NO'] : '{ NO }')); ?></label></dd>
	</dl>
	<dl>
		<dt><label><?php echo ((isset($this->_rootref['L_POINTS_IMAGES_MEMBERLIST'])) ? $this->_rootref['L_POINTS_IMAGES_MEMBERLIST'] : ((isset($user->lang['POINTS_IMAGES_MEMBERLIST'])) ? $user->lang['POINTS_IMAGES_MEMBERLIST'] : '{ POINTS_IMAGES_MEMBERLIST }')); ?>:</label><br /><?php echo ((isset($this->_rootref['L_POINTS_IMAGES_MEMBERLIST_EXPLAIN'])) ? $this->_rootref['L_POINTS_IMAGES_MEMBERLIST_EXPLAIN'] : ((isset($user->lang['POINTS_IMAGES_MEMBERLIST_EXPLAIN'])) ? $user->lang['POINTS_IMAGES_MEMBERLIST_EXPLAIN'] : '{ POINTS_IMAGES_MEMBERLIST_EXPLAIN }')); ?></dt>
		<dd><label><input type="radio" class="radio" name="images_memberlist_enable" value="1"<?php if ($this->_rootref['IMAGES_MEMBERLIST_ENABLE']) {  ?> id="images_memberlist_enable" checked="checked" <?php } ?> /> <?php echo ((isset($this->_rootref['L_YES'])) ? $this->_rootref['L_YES'] : ((isset($user->lang['YES'])) ? $user->lang['YES'] : '{ YES }')); ?></label>
			<label><input type="radio" class="radio" name="images_memberlist_enable" value="0"<?php if (! $this->_rootref['IMAGES_MEMBERLIST_ENABLE']) {  ?> id="images_memberlist_enable" checked="checked" <?php } ?> /> <?php echo ((isset($this->_rootref['L_NO'])) ? $this->_rootref['L_NO'] : ((isset($user->lang['NO'])) ? $user->lang['NO'] : '{ NO }')); ?></label></dd>
	</dl>
	</fieldset>

	<fieldset>
		<legend><?php echo ((isset($this->_rootref['L_POINTS_ADV_OPTIONS'])) ? $this->_rootref['L_POINTS_ADV_OPTIONS'] : ((isset($user->lang['POINTS_ADV_OPTIONS'])) ? $user->lang['POINTS_ADV_OPTIONS'] : '{ POINTS_ADV_OPTIONS }')); ?></legend>
		<p><?php echo ((isset($this->_rootref['L_POINTS_ADV_OPTIONS_EXPLAIN'])) ? $this->_rootref['L_POINTS_ADV_OPTIONS_EXPLAIN'] : ((isset($user->lang['POINTS_ADV_OPTIONS_EXPLAIN'])) ? $user->lang['POINTS_ADV_OPTIONS_EXPLAIN'] : '{ POINTS_ADV_OPTIONS_EXPLAIN }')); ?></p>
	<dl>
		<dt><label for="points_per_attach"><?php echo ((isset($this->_rootref['L_POINTS_ATTACHMENT'])) ? $this->_rootref['L_POINTS_ATTACHMENT'] : ((isset($user->lang['POINTS_ATTACHMENT'])) ? $user->lang['POINTS_ATTACHMENT'] : '{ POINTS_ATTACHMENT }')); ?>:</label></dt>
		<dd><input type="text" id="points_per_attach" name="points_per_attach" value="<?php echo (isset($this->_rootref['POINTS_PER_ATTACH'])) ? $this->_rootref['POINTS_PER_ATTACH'] : ''; ?>" maxlength="8" size="10" /> <?php echo (isset($this->_rootref['POINTS_NAME'])) ? $this->_rootref['POINTS_NAME'] : ''; ?></dd>
	</dl>
	<dl>
		<dt><label for="points_per_attach_file"><?php echo ((isset($this->_rootref['L_POINTS_ATTACHMENT_PER_FILE'])) ? $this->_rootref['L_POINTS_ATTACHMENT_PER_FILE'] : ((isset($user->lang['POINTS_ATTACHMENT_PER_FILE'])) ? $user->lang['POINTS_ATTACHMENT_PER_FILE'] : '{ POINTS_ATTACHMENT_PER_FILE }')); ?>:</label></dt>
		<dd><input type="text" id="points_per_attach_file" name="points_per_attach_file" value="<?php echo (isset($this->_rootref['POINTS_PER_ATTACH_FILE'])) ? $this->_rootref['POINTS_PER_ATTACH_FILE'] : ''; ?>" maxlength="8" size="10" /> <?php echo (isset($this->_rootref['POINTS_NAME'])) ? $this->_rootref['POINTS_NAME'] : ''; ?></dd>
	</dl>
	<dl>
		<dt><label for="points_per_poll"><?php echo ((isset($this->_rootref['L_POINTS_POLL'])) ? $this->_rootref['L_POINTS_POLL'] : ((isset($user->lang['POINTS_POLL'])) ? $user->lang['POINTS_POLL'] : '{ POINTS_POLL }')); ?>:</label></dt>
		<dd><input type="text" id="points_per_poll" name="points_per_poll" value="<?php echo (isset($this->_rootref['POINTS_PER_POLL'])) ? $this->_rootref['POINTS_PER_POLL'] : ''; ?>" maxlength="8" size="10" /> <?php echo (isset($this->_rootref['POINTS_NAME'])) ? $this->_rootref['POINTS_NAME'] : ''; ?></dd>
	</dl>
	<dl>
		<dt><label for="points_per_poll_option"><?php echo ((isset($this->_rootref['L_POINTS_POLL_PER_OPTION'])) ? $this->_rootref['L_POINTS_POLL_PER_OPTION'] : ((isset($user->lang['POINTS_POLL_PER_OPTION'])) ? $user->lang['POINTS_POLL_PER_OPTION'] : '{ POINTS_POLL_PER_OPTION }')); ?>:</label></dt>
		<dd><input type="text" id="points_per_poll_option" name="points_per_poll_option" value="<?php echo (isset($this->_rootref['POINTS_PER_POLL_OPTION'])) ? $this->_rootref['POINTS_PER_POLL_OPTION'] : ''; ?>" maxlength="8" size="10" /> <?php echo (isset($this->_rootref['POINTS_NAME'])) ? $this->_rootref['POINTS_NAME'] : ''; ?></dd>
	</dl>
	<dl>
		<dt><label for="points_per_topic_word"><?php echo ((isset($this->_rootref['L_POINTS_TOPIC_PER_WORD'])) ? $this->_rootref['L_POINTS_TOPIC_PER_WORD'] : ((isset($user->lang['POINTS_TOPIC_PER_WORD'])) ? $user->lang['POINTS_TOPIC_PER_WORD'] : '{ POINTS_TOPIC_PER_WORD }')); ?>:</label></dt>
		<dd><input type="text" id="points_per_topic_word" name="points_per_topic_word" value="<?php echo (isset($this->_rootref['POINTS_PER_TOPIC_WORD'])) ? $this->_rootref['POINTS_PER_TOPIC_WORD'] : ''; ?>" maxlength="8" size="10" /> <?php echo (isset($this->_rootref['POINTS_NAME'])) ? $this->_rootref['POINTS_NAME'] : ''; ?></dd>
	</dl>
	<dl>
		<dt><label for="points_per_topic_character"><?php echo ((isset($this->_rootref['L_POINTS_TOPIC_PER_CHARACTER'])) ? $this->_rootref['L_POINTS_TOPIC_PER_CHARACTER'] : ((isset($user->lang['POINTS_TOPIC_PER_CHARACTER'])) ? $user->lang['POINTS_TOPIC_PER_CHARACTER'] : '{ POINTS_TOPIC_PER_CHARACTER }')); ?>:</label></dt>
		<dd><input type="text" id="points_per_topic_character" name="points_per_topic_character" value="<?php echo (isset($this->_rootref['POINTS_PER_TOPIC_CHARACTER'])) ? $this->_rootref['POINTS_PER_TOPIC_CHARACTER'] : ''; ?>" maxlength="8" size="10" /> <?php echo (isset($this->_rootref['POINTS_NAME'])) ? $this->_rootref['POINTS_NAME'] : ''; ?></dd>
	</dl>
	<dl>
		<dt><label for="points_per_post_word"><?php echo ((isset($this->_rootref['L_POINTS_POST_PER_WORD'])) ? $this->_rootref['L_POINTS_POST_PER_WORD'] : ((isset($user->lang['POINTS_POST_PER_WORD'])) ? $user->lang['POINTS_POST_PER_WORD'] : '{ POINTS_POST_PER_WORD }')); ?>:</label></dt>
		<dd><input type="text" id="points_per_post_word" name="points_per_post_word" value="<?php echo (isset($this->_rootref['POINTS_PER_POST_WORD'])) ? $this->_rootref['POINTS_PER_POST_WORD'] : ''; ?>" maxlength="8" size="10" /> <?php echo (isset($this->_rootref['POINTS_NAME'])) ? $this->_rootref['POINTS_NAME'] : ''; ?></dd>
	</dl>
	<dl>
		<dt><label for="points_per_post_character"><?php echo ((isset($this->_rootref['L_POINTS_POST_PER_CHARACTER'])) ? $this->_rootref['L_POINTS_POST_PER_CHARACTER'] : ((isset($user->lang['POINTS_POST_PER_CHARACTER'])) ? $user->lang['POINTS_POST_PER_CHARACTER'] : '{ POINTS_POST_PER_CHARACTER }')); ?>:</label></dt>
		<dd><input type="text" id="points_per_post_character" name="points_per_post_character" value="<?php echo (isset($this->_rootref['POINTS_PER_POST_CHARACTER'])) ? $this->_rootref['POINTS_PER_POST_CHARACTER'] : ''; ?>" maxlength="8" size="10" /> <?php echo (isset($this->_rootref['POINTS_NAME'])) ? $this->_rootref['POINTS_NAME'] : ''; ?></dd>
	</dl>
	<dl>
		<dt><label for="points_per_warn"><?php echo ((isset($this->_rootref['L_POINTS_WARN'])) ? $this->_rootref['L_POINTS_WARN'] : ((isset($user->lang['POINTS_WARN'])) ? $user->lang['POINTS_WARN'] : '{ POINTS_WARN }')); ?>:</label></dt>
		<dd><input type="text" id="points_per_warn" name="points_per_warn" value="<?php echo (isset($this->_rootref['POINTS_PER_WARN'])) ? $this->_rootref['POINTS_PER_WARN'] : ''; ?>" maxlength="8" size="10" /> <?php echo (isset($this->_rootref['POINTS_NAME'])) ? $this->_rootref['POINTS_NAME'] : ''; ?></dd>
	</dl>
	<dl>
		<dt><label for="reg_points_bonus"><?php echo ((isset($this->_rootref['L_REG_POINTS_BONUS'])) ? $this->_rootref['L_REG_POINTS_BONUS'] : ((isset($user->lang['REG_POINTS_BONUS'])) ? $user->lang['REG_POINTS_BONUS'] : '{ REG_POINTS_BONUS }')); ?>:</label></dt>
		<dd><input type="text" id="reg_points_bonus" name="reg_points_bonus" value="<?php echo (isset($this->_rootref['REG_POINTS_BONUS'])) ? $this->_rootref['REG_POINTS_BONUS'] : ''; ?>" maxlength="8" size="10" /> <?php echo (isset($this->_rootref['POINTS_NAME'])) ? $this->_rootref['POINTS_NAME'] : ''; ?></dd>
	</dl>
	<dl>
		<dt><label for="number_show_per_page"><?php echo ((isset($this->_rootref['L_POINTS_SHOW_PER_PAGE'])) ? $this->_rootref['L_POINTS_SHOW_PER_PAGE'] : ((isset($user->lang['POINTS_SHOW_PER_PAGE'])) ? $user->lang['POINTS_SHOW_PER_PAGE'] : '{ POINTS_SHOW_PER_PAGE }')); ?>:</label><br /><?php echo ((isset($this->_rootref['L_POINTS_SHOW_PER_PAGE_EXPLAIN'])) ? $this->_rootref['L_POINTS_SHOW_PER_PAGE_EXPLAIN'] : ((isset($user->lang['POINTS_SHOW_PER_PAGE_EXPLAIN'])) ? $user->lang['POINTS_SHOW_PER_PAGE_EXPLAIN'] : '{ POINTS_SHOW_PER_PAGE_EXPLAIN }')); ?></dt>
		<dd><input type="text" id="number_show_per_page" name="number_show_per_page" value="<?php echo (isset($this->_rootref['NUMBER_SHOW_PER_PAGE'])) ? $this->_rootref['NUMBER_SHOW_PER_PAGE'] : ''; ?>" maxlength="5" size="5" /></dd>
	</dl>
	<dl>
		<dt><label for="number_show_top_points"><?php echo ((isset($this->_rootref['L_TOP_POINTS'])) ? $this->_rootref['L_TOP_POINTS'] : ((isset($user->lang['TOP_POINTS'])) ? $user->lang['TOP_POINTS'] : '{ TOP_POINTS }')); ?>:</label><br /><?php echo ((isset($this->_rootref['L_TOP_POINTS_EXPLAIN'])) ? $this->_rootref['L_TOP_POINTS_EXPLAIN'] : ((isset($user->lang['TOP_POINTS_EXPLAIN'])) ? $user->lang['TOP_POINTS_EXPLAIN'] : '{ TOP_POINTS_EXPLAIN }')); ?></dt>
		<dd><input type="text" id="number_show_top_points" name="number_show_top_points" value="<?php echo (isset($this->_rootref['NUMBER_SHOW_TOP_POINTS'])) ? $this->_rootref['NUMBER_SHOW_TOP_POINTS'] : ''; ?>" maxlength="5" size="5" /></dd>
	</dl>
	</fieldset>

	<?php if ($this->_rootref['S_GALLERY_EXIST']) {  ?>

		<fieldset>
			<legend><?php echo ((isset($this->_rootref['L_POINTS_GALLERY'])) ? $this->_rootref['L_POINTS_GALLERY'] : ((isset($user->lang['POINTS_GALLERY'])) ? $user->lang['POINTS_GALLERY'] : '{ POINTS_GALLERY }')); ?></legend>
			<p><?php echo ((isset($this->_rootref['L_POINTS_GALLERY_EXPLAIN'])) ? $this->_rootref['L_POINTS_GALLERY_EXPLAIN'] : ((isset($user->lang['POINTS_GALLERY_EXPLAIN'])) ? $user->lang['POINTS_GALLERY_EXPLAIN'] : '{ POINTS_GALLERY_EXPLAIN }')); ?></p>
		<dl>
			<dt><label for="gallery_upload"><?php echo ((isset($this->_rootref['L_POINTS_GALLERY_UPLOAD'])) ? $this->_rootref['L_POINTS_GALLERY_UPLOAD'] : ((isset($user->lang['POINTS_GALLERY_UPLOAD'])) ? $user->lang['POINTS_GALLERY_UPLOAD'] : '{ POINTS_GALLERY_UPLOAD }')); ?>:</label><br /><span><?php echo ((isset($this->_rootref['L_POINTS_GALLERY_UPLOAD_EXPLAIN'])) ? $this->_rootref['L_POINTS_GALLERY_UPLOAD_EXPLAIN'] : ((isset($user->lang['POINTS_GALLERY_UPLOAD_EXPLAIN'])) ? $user->lang['POINTS_GALLERY_UPLOAD_EXPLAIN'] : '{ POINTS_GALLERY_UPLOAD_EXPLAIN }')); ?></span></dt>
			<dd><input class="post" type="text" maxlength="8" size="10" name="gallery_upload" value="<?php echo (isset($this->_rootref['GALLERY_UPLOAD'])) ? $this->_rootref['GALLERY_UPLOAD'] : ''; ?>" /> <?php echo (isset($this->_rootref['POINTS_NAME'])) ? $this->_rootref['POINTS_NAME'] : ''; ?></dd>
		</dl>
		<dl>
			<dt><label for="gallery_remove"><?php echo ((isset($this->_rootref['L_POINTS_GALLERY_REMOVE'])) ? $this->_rootref['L_POINTS_GALLERY_REMOVE'] : ((isset($user->lang['POINTS_GALLERY_REMOVE'])) ? $user->lang['POINTS_GALLERY_REMOVE'] : '{ POINTS_GALLERY_REMOVE }')); ?>:</label><br /><span><?php echo ((isset($this->_rootref['L_POINTS_GALLERY_REMOVE_EXPLAIN'])) ? $this->_rootref['L_POINTS_GALLERY_REMOVE_EXPLAIN'] : ((isset($user->lang['POINTS_GALLERY_REMOVE_EXPLAIN'])) ? $user->lang['POINTS_GALLERY_REMOVE_EXPLAIN'] : '{ POINTS_GALLERY_REMOVE_EXPLAIN }')); ?></span></dt>
			<dd><input class="post" type="text" maxlength="8" size="10" name="gallery_remove" value="<?php echo (isset($this->_rootref['GALLERY_REMOVE'])) ? $this->_rootref['GALLERY_REMOVE'] : ''; ?>" /> <?php echo (isset($this->_rootref['POINTS_NAME'])) ? $this->_rootref['POINTS_NAME'] : ''; ?></dd>
		</dl>
		<dl>
			<dt><label><?php echo ((isset($this->_rootref['L_POINTS_GALLERY_DENY_VIEW'])) ? $this->_rootref['L_POINTS_GALLERY_DENY_VIEW'] : ((isset($user->lang['POINTS_GALLERY_DENY_VIEW'])) ? $user->lang['POINTS_GALLERY_DENY_VIEW'] : '{ POINTS_GALLERY_DENY_VIEW }')); ?>:</label><br /><?php echo ((isset($this->_rootref['L_POINTS_GALLERY_DENY_VIEW_EXPLAIN'])) ? $this->_rootref['L_POINTS_GALLERY_DENY_VIEW_EXPLAIN'] : ((isset($user->lang['POINTS_GALLERY_DENY_VIEW_EXPLAIN'])) ? $user->lang['POINTS_GALLERY_DENY_VIEW_EXPLAIN'] : '{ POINTS_GALLERY_DENY_VIEW_EXPLAIN }')); ?></dt>
			<dd><label><input type="radio" class="radio" name="gallery_deny_view" value="1"<?php if ($this->_rootref['GALLERY_DENY_VIEW']) {  ?> id="gallery_deny_view" checked="checked" <?php } ?> /> <?php echo ((isset($this->_rootref['L_YES'])) ? $this->_rootref['L_YES'] : ((isset($user->lang['YES'])) ? $user->lang['YES'] : '{ YES }')); ?></label>
			<label><input type="radio" class="radio" name="gallery_deny_view" value="0"<?php if (! $this->_rootref['GALLERY_DENY_VIEW']) {  ?> id="gallery_deny_view" checked="checked" <?php } ?> /> <?php echo ((isset($this->_rootref['L_NO'])) ? $this->_rootref['L_NO'] : ((isset($user->lang['NO'])) ? $user->lang['NO'] : '{ NO }')); ?></label></dd>
		</dl>
		<dl>
			<dt><label for="gallery_view"><?php echo ((isset($this->_rootref['L_POINTS_GALLERY_VIEW'])) ? $this->_rootref['L_POINTS_GALLERY_VIEW'] : ((isset($user->lang['POINTS_GALLERY_VIEW'])) ? $user->lang['POINTS_GALLERY_VIEW'] : '{ POINTS_GALLERY_VIEW }')); ?>:</label><br /><span><?php echo ((isset($this->_rootref['L_POINTS_GALLERY_VIEW_EXPLAIN'])) ? $this->_rootref['L_POINTS_GALLERY_VIEW_EXPLAIN'] : ((isset($user->lang['POINTS_GALLERY_VIEW_EXPLAIN'])) ? $user->lang['POINTS_GALLERY_VIEW_EXPLAIN'] : '{ POINTS_GALLERY_VIEW_EXPLAIN }')); ?></span></dt>
			<dd><input class="post" type="text" maxlength="8" size="10" name="gallery_view" value="<?php echo (isset($this->_rootref['GALLERY_VIEW'])) ? $this->_rootref['GALLERY_VIEW'] : ''; ?>" /> <?php echo (isset($this->_rootref['POINTS_NAME'])) ? $this->_rootref['POINTS_NAME'] : ''; ?></dd>
		</dl>
		</fieldset>
	<?php } ?>


	<fieldset class="submit-buttons">
		<legend><?php echo ((isset($this->_rootref['L_SUBMIT'])) ? $this->_rootref['L_SUBMIT'] : ((isset($user->lang['SUBMIT'])) ? $user->lang['SUBMIT'] : '{ SUBMIT }')); ?></legend>
		<input class="button1" type="submit" id="submit" name="submit" value="<?php echo ((isset($this->_rootref['L_SUBMIT'])) ? $this->_rootref['L_SUBMIT'] : ((isset($user->lang['SUBMIT'])) ? $user->lang['SUBMIT'] : '{ SUBMIT }')); ?>" />
		<?php echo (isset($this->_rootref['S_FORM_TOKEN'])) ? $this->_rootref['S_FORM_TOKEN'] : ''; ?>

	</fieldset>
	</form>

	<form id="postform" action="<?php echo (isset($this->_rootref['U_ACTION'])) ? $this->_rootref['U_ACTION'] : ''; ?>" method="post" enctype="multipart/form-data">
	<fieldset>
		<legend><?php echo ((isset($this->_rootref['L_POINTS_GROUP_TRANSFER'])) ? $this->_rootref['L_POINTS_GROUP_TRANSFER'] : ((isset($user->lang['POINTS_GROUP_TRANSFER'])) ? $user->lang['POINTS_GROUP_TRANSFER'] : '{ POINTS_GROUP_TRANSFER }')); ?></legend>
		<p><?php echo ((isset($this->_rootref['L_POINTS_GROUP_TRANSFER_EXPLAIN'])) ? $this->_rootref['L_POINTS_GROUP_TRANSFER_EXPLAIN'] : ((isset($user->lang['POINTS_GROUP_TRANSFER_EXPLAIN'])) ? $user->lang['POINTS_GROUP_TRANSFER_EXPLAIN'] : '{ POINTS_GROUP_TRANSFER_EXPLAIN }')); ?></p>
	<dl>
		<dt><label><?php echo ((isset($this->_rootref['L_POINTS_GROUP_TRANSFER_USER'])) ? $this->_rootref['L_POINTS_GROUP_TRANSFER_USER'] : ((isset($user->lang['POINTS_GROUP_TRANSFER_USER'])) ? $user->lang['POINTS_GROUP_TRANSFER_USER'] : '{ POINTS_GROUP_TRANSFER_USER }')); ?>:</label></dt>
		<dd><select name="group_id" id="group_id"><?php echo (isset($this->_rootref['S_GROUP_OPTIONS'])) ? $this->_rootref['S_GROUP_OPTIONS'] : ''; ?></select></dd>
	</dl>
	<dl>
		<dt><label><?php echo ((isset($this->_rootref['L_POINTS_GROUP_TRANSFER_VALUE'])) ? $this->_rootref['L_POINTS_GROUP_TRANSFER_VALUE'] : ((isset($user->lang['POINTS_GROUP_TRANSFER_VALUE'])) ? $user->lang['POINTS_GROUP_TRANSFER_VALUE'] : '{ POINTS_GROUP_TRANSFER_VALUE }')); ?>:</label></dt>
		<dd><input type="text" tabindex="1" class="post" name="group_transfer_points" size="20" maxlength="10" />&nbsp;<?php echo (isset($this->_rootref['POINTS_NAME'])) ? $this->_rootref['POINTS_NAME'] : ''; ?></dd>
	</dl>
	<dl>
		<dt><label><?php echo ((isset($this->_rootref['L_POINTS_GROUP_TRANSFER_PM_TITLE'])) ? $this->_rootref['L_POINTS_GROUP_TRANSFER_PM_TITLE'] : ((isset($user->lang['POINTS_GROUP_TRANSFER_PM_TITLE'])) ? $user->lang['POINTS_GROUP_TRANSFER_PM_TITLE'] : '{ POINTS_GROUP_TRANSFER_PM_TITLE }')); ?>:</label></dt>
		<dd><input type="text" tabindex="3" class="post" name="pm_subject" size="40" maxlength="255" /></dd>
	</dl>
	<dl>
		<dt><label for="message"><?php echo ((isset($this->_rootref['L_POINTS_GROUP_TRANSFER_PM_COMMENT'])) ? $this->_rootref['L_POINTS_GROUP_TRANSFER_PM_COMMENT'] : ((isset($user->lang['POINTS_GROUP_TRANSFER_PM_COMMENT'])) ? $user->lang['POINTS_GROUP_TRANSFER_PM_COMMENT'] : '{ POINTS_GROUP_TRANSFER_PM_COMMENT }')); ?>:</label></dt>
		<dd><textarea id="message" tabindex="4" name="pm_text" cols="60" rows="4" ><?php echo (isset($this->_rootref['COMMENT'])) ? $this->_rootref['COMMENT'] : ''; ?></textarea></dd>
		<dd><a href="<?php echo (isset($this->_rootref['U_SMILIES'])) ? $this->_rootref['U_SMILIES'] : ''; ?>" onclick="popup(this.href, 300, 350, '_phpbbsmilies'); return false;"><?php echo ((isset($this->_rootref['L_POINTS_SMILIES'])) ? $this->_rootref['L_POINTS_SMILIES'] : ((isset($user->lang['POINTS_SMILIES'])) ? $user->lang['POINTS_SMILIES'] : '{ POINTS_SMILIES }')); ?></a>

			<script type="text/javascript">
			// <![CDATA[
				var form_name = 'postform';
				var text_name = 'message';
				var bbtags = new Array('[b]','[/b]','[i]','[/i]','[u]','[/u]','[quote]','[/quote]','[code]','[/code]','[list]','[/list]','[list=]','[/list]','[img]','[/img]','[url]','[/url]','[size=]','[/size]');
			// ]]>
			</script>
			<script type="text/javascript" src="<?php echo (isset($this->_rootref['T_TEMPLATE_PATH'])) ? $this->_rootref['T_TEMPLATE_PATH'] : ''; ?>/editor.js"></script>
			<input type="button" class="button2" accesskey="b" name="addbbcode0" value=" B " style="font-weight:bold; width: 30px" onclick="bbstyle(0)" />
			<input type="button" class="button2" accesskey="i" name="addbbcode2" value=" i " style="font-style:italic; width: 30px" onclick="bbstyle(2)" />
			<input type="button" class="button2" accesskey="u" name="addbbcode4" value=" u " style="text-decoration: underline; width: 30px" onclick="bbstyle(4)" />
			<input type="button" class="button2" accesskey="q" name="addbbcode6" value="Quote" style="width: 50px" onclick="bbstyle(6)" />
			<input type="button" class="button2" accesskey="c" name="addbbcode8" value="Code" style="width: 40px" onclick="bbstyle(8)" />
			<input type="button" class="button2" accesskey="l" name="addbbcode10" value="List" style="width: 40px" onclick="bbstyle(10)" />
			<input type="button" class="button2" accesskey="o" name="addbbcode12" value="List=" style="width: 40px" onclick="bbstyle(12)" />
			<input type="button" class="button2" accesskey="t" name="addlitsitem" value="[*]" style="width: 40px" onclick="bbstyle(-1)" />
			<input type="button" class="button2" accesskey="p" name="addbbcode14" value="Img" style="width: 40px" onclick="bbstyle(14)" />
			<input type="button" class="button2" accesskey="w" name="addbbcode16" value="URL" style="text-decoration: underline; width: 40px" onclick="bbstyle(16)" />

		</dd>
	</dl>
	<dl>
		<dt><label><?php echo ((isset($this->_rootref['L_POINTS_GROUP_TRANSFER_FUNCTION'])) ? $this->_rootref['L_POINTS_GROUP_TRANSFER_FUNCTION'] : ((isset($user->lang['POINTS_GROUP_TRANSFER_FUNCTION'])) ? $user->lang['POINTS_GROUP_TRANSFER_FUNCTION'] : '{ POINTS_GROUP_TRANSFER_FUNCTION }')); ?>:</label></dt>
		<dd><label><input type="radio" tabindex="5" class="radio" name="func" value="add" checked="checked"/> <?php echo ((isset($this->_rootref['L_POINTS_GROUP_TRANSFER_ADD'])) ? $this->_rootref['L_POINTS_GROUP_TRANSFER_ADD'] : ((isset($user->lang['POINTS_GROUP_TRANSFER_ADD'])) ? $user->lang['POINTS_GROUP_TRANSFER_ADD'] : '{ POINTS_GROUP_TRANSFER_ADD }')); ?></label><label><input type="radio" tabindex="6" class="radio" name="func" value="substract"/> <?php echo ((isset($this->_rootref['L_POINTS_GROUP_TRANSFER_SUBSTRACT'])) ? $this->_rootref['L_POINTS_GROUP_TRANSFER_SUBSTRACT'] : ((isset($user->lang['POINTS_GROUP_TRANSFER_SUBSTRACT'])) ? $user->lang['POINTS_GROUP_TRANSFER_SUBSTRACT'] : '{ POINTS_GROUP_TRANSFER_SUBSTRACT }')); ?></label><label><input type="radio" tabindex="7" class="radio" name="func" value="set"/> <?php echo ((isset($this->_rootref['L_POINTS_GROUP_TRANSFER_SET'])) ? $this->_rootref['L_POINTS_GROUP_TRANSFER_SET'] : ((isset($user->lang['POINTS_GROUP_TRANSFER_SET'])) ? $user->lang['POINTS_GROUP_TRANSFER_SET'] : '{ POINTS_GROUP_TRANSFER_SET }')); ?></label></dd>
	</dl>
	<p class="submit-buttons">
		<input type="submit" tabindex="8" name="group_transfer" value="<?php echo ((isset($this->_rootref['L_SUBMIT'])) ? $this->_rootref['L_SUBMIT'] : ((isset($user->lang['SUBMIT'])) ? $user->lang['SUBMIT'] : '{ SUBMIT }')); ?>" class="button1" />&nbsp;&nbsp;<input type="reset" tabindex="8" value="<?php echo ((isset($this->_rootref['L_RESET'])) ? $this->_rootref['L_RESET'] : ((isset($user->lang['RESET'])) ? $user->lang['RESET'] : '{ RESET }')); ?>" class="button2" />
		<?php echo (isset($this->_rootref['S_FORM_TOKEN'])) ? $this->_rootref['S_FORM_TOKEN'] : ''; ?>

	</p>
	</fieldset>
	</form>

	<div class="errorbox"><?php echo ((isset($this->_rootref['L_RESYNC_ATTENTION'])) ? $this->_rootref['L_RESYNC_ATTENTION'] : ((isset($user->lang['RESYNC_ATTENTION'])) ? $user->lang['RESYNC_ATTENTION'] : '{ RESYNC_ATTENTION }')); ?></div>

	<fieldset>	
		<legend><?php echo ((isset($this->_rootref['L_RESYNC_DESC'])) ? $this->_rootref['L_RESYNC_DESC'] : ((isset($user->lang['RESYNC_DESC'])) ? $user->lang['RESYNC_DESC'] : '{ RESYNC_DESC }')); ?></legend>
		<form id="action_points_form" method="post" action="<?php echo (isset($this->_rootref['U_ACTION'])) ? $this->_rootref['U_ACTION'] : ''; ?>">
		<dl>
			<dt><label for="action_points"><?php echo ((isset($this->_rootref['L_RESYNC_POINTS'])) ? $this->_rootref['L_RESYNC_POINTS'] : ((isset($user->lang['RESYNC_POINTS'])) ? $user->lang['RESYNC_POINTS'] : '{ RESYNC_POINTS }')); ?></label><br /><span><?php echo ((isset($this->_rootref['L_RESYNC_POINTS_EXPLAIN'])) ? $this->_rootref['L_RESYNC_POINTS_EXPLAIN'] : ((isset($user->lang['RESYNC_POINTS_EXPLAIN'])) ? $user->lang['RESYNC_POINTS_EXPLAIN'] : '{ RESYNC_POINTS_EXPLAIN }')); ?></span></dt>
			<dd><input type="hidden" name="action" value="points" /><input class="button2" type="submit" id="action_points" name="action_points" value="<?php echo ((isset($this->_rootref['L_RUN'])) ? $this->_rootref['L_RUN'] : ((isset($user->lang['RUN'])) ? $user->lang['RUN'] : '{ RUN }')); ?>" /></dd>
		</dl>
		</form>
		<form id="action_points_logs_form" method="post" action="<?php echo (isset($this->_rootref['U_ACTION'])) ? $this->_rootref['U_ACTION'] : ''; ?>">
		<dl>
			<dt><label for="action_points_logs"><?php echo ((isset($this->_rootref['L_RESYNC_POINTSLOGS'])) ? $this->_rootref['L_RESYNC_POINTSLOGS'] : ((isset($user->lang['RESYNC_POINTSLOGS'])) ? $user->lang['RESYNC_POINTSLOGS'] : '{ RESYNC_POINTSLOGS }')); ?></label><br /><span><?php echo ((isset($this->_rootref['L_RESYNC_POINTSLOGS_EXPLAIN'])) ? $this->_rootref['L_RESYNC_POINTSLOGS_EXPLAIN'] : ((isset($user->lang['RESYNC_POINTSLOGS_EXPLAIN'])) ? $user->lang['RESYNC_POINTSLOGS_EXPLAIN'] : '{ RESYNC_POINTSLOGS_EXPLAIN }')); ?></span></dt>
			<dd><input type="hidden" name="action" value="points_logs" /><input class="button2" type="submit" id="action_points_logs" name="action_points_logs" value="<?php echo ((isset($this->_rootref['L_RUN'])) ? $this->_rootref['L_RUN'] : ((isset($user->lang['RUN'])) ? $user->lang['RUN'] : '{ RUN }')); ?>" /></dd>
		</dl>
		</form>
	</fieldset>
	
<?php } $this->_tpl_include('overall_footer.html'); ?>