<?php if (!defined('IN_PHPBB')) exit; $this->_tpl_include('overall_header.html'); ?><!-- $Id: acp_points_forum.html 794 2011-12-24 04:34:10Z femu $ -->

<a name="maincontent"></a>

<?php if ($this->_rootref['S_FORUMPOINTS']) {  ?>


	<h1><?php echo ((isset($this->_rootref['L_ACP_POINTS'])) ? $this->_rootref['L_ACP_POINTS'] : ((isset($user->lang['ACP_POINTS'])) ? $user->lang['ACP_POINTS'] : '{ ACP_POINTS }')); ?> - <?php echo ((isset($this->_rootref['L_ACP_POINTS_FORUM_SWITCH_TITLE'])) ? $this->_rootref['L_ACP_POINTS_FORUM_SWITCH_TITLE'] : ((isset($user->lang['ACP_POINTS_FORUM_SWITCH_TITLE'])) ? $user->lang['ACP_POINTS_FORUM_SWITCH_TITLE'] : '{ ACP_POINTS_FORUM_SWITCH_TITLE }')); ?></h1>
	<p><?php echo ((isset($this->_rootref['L_ACP_POINTS_FORUM_SWITCH_EXPLAIN'])) ? $this->_rootref['L_ACP_POINTS_FORUM_SWITCH_EXPLAIN'] : ((isset($user->lang['ACP_POINTS_FORUM_SWITCH_EXPLAIN'])) ? $user->lang['ACP_POINTS_FORUM_SWITCH_EXPLAIN'] : '{ ACP_POINTS_FORUM_SWITCH_EXPLAIN }')); ?></p>

	<form id="action_point_switches_form" method="post" action="<?php echo (isset($this->_rootref['U_ACTION'])) ? $this->_rootref['U_ACTION'] : ''; ?>">
	<fieldset>
		<legend><?php echo ((isset($this->_rootref['L_ACP_POINTS_FORUM_SWITCH_TITLE'])) ? $this->_rootref['L_ACP_POINTS_FORUM_SWITCH_TITLE'] : ((isset($user->lang['ACP_POINTS_FORUM_SWITCH_TITLE'])) ? $user->lang['ACP_POINTS_FORUM_SWITCH_TITLE'] : '{ ACP_POINTS_FORUM_SWITCH_TITLE }')); ?></legend> 	
	<dl>
		<dt><label><?php echo ((isset($this->_rootref['L_POINTS_PERTOPIC'])) ? $this->_rootref['L_POINTS_PERTOPIC'] : ((isset($user->lang['POINTS_PERTOPIC'])) ? $user->lang['POINTS_PERTOPIC'] : '{ POINTS_PERTOPIC }')); ?>:</label><br /><?php echo ((isset($this->_rootref['L_POINTS_PERTOPIC_EXPLAIN'])) ? $this->_rootref['L_POINTS_PERTOPIC_EXPLAIN'] : ((isset($user->lang['POINTS_PERTOPIC_EXPLAIN'])) ? $user->lang['POINTS_PERTOPIC_EXPLAIN'] : '{ POINTS_PERTOPIC_EXPLAIN }')); ?></dt>
		<dd><label><input type="radio" class="radio" name="pertopic_enable" value="1"<?php if ($this->_rootref['PERTOPIC_ENABLE']) {  ?> id="pertopic_enable" checked="checked" <?php } ?> /> <?php echo ((isset($this->_rootref['L_YES'])) ? $this->_rootref['L_YES'] : ((isset($user->lang['YES'])) ? $user->lang['YES'] : '{ YES }')); ?></label>
			<label><input type="radio" class="radio" name="pertopic_enable" value="0"<?php if (! $this->_rootref['PERTOPIC_ENABLE']) {  ?> id="pertopic_enable" checked="checked" <?php } ?> /> <?php echo ((isset($this->_rootref['L_NO'])) ? $this->_rootref['L_NO'] : ((isset($user->lang['NO'])) ? $user->lang['NO'] : '{ NO }')); ?></label></dd>
	</dl>
	<dl>
		<dt><label><?php echo ((isset($this->_rootref['L_POINTS_PERPOST'])) ? $this->_rootref['L_POINTS_PERPOST'] : ((isset($user->lang['POINTS_PERPOST'])) ? $user->lang['POINTS_PERPOST'] : '{ POINTS_PERPOST }')); ?>:</label><br /><?php echo ((isset($this->_rootref['L_POINTS_PERPOST_EXPLAIN'])) ? $this->_rootref['L_POINTS_PERPOST_EXPLAIN'] : ((isset($user->lang['POINTS_PERPOST_EXPLAIN'])) ? $user->lang['POINTS_PERPOST_EXPLAIN'] : '{ POINTS_PERPOST_EXPLAIN }')); ?></dt>
		<dd><label><input type="radio" class="radio" name="perpost_enable" value="1"<?php if ($this->_rootref['PERPOST_ENABLE']) {  ?> id="perpost_enable" checked="checked" <?php } ?> /> <?php echo ((isset($this->_rootref['L_YES'])) ? $this->_rootref['L_YES'] : ((isset($user->lang['YES'])) ? $user->lang['YES'] : '{ YES }')); ?></label>
			<label><input type="radio" class="radio" name="perpost_enable" value="0"<?php if (! $this->_rootref['PERPOST_ENABLE']) {  ?> id="perpost_enable" checked="checked" <?php } ?> /> <?php echo ((isset($this->_rootref['L_NO'])) ? $this->_rootref['L_NO'] : ((isset($user->lang['NO'])) ? $user->lang['NO'] : '{ NO }')); ?></label></dd>
	</dl>
	<dl>
		<dt><label><?php echo ((isset($this->_rootref['L_POINTS_PEREDIT'])) ? $this->_rootref['L_POINTS_PEREDIT'] : ((isset($user->lang['POINTS_PEREDIT'])) ? $user->lang['POINTS_PEREDIT'] : '{ POINTS_PEREDIT }')); ?>:</label><br /><?php echo ((isset($this->_rootref['L_POINTS_PEREDIT_EXPLAIN'])) ? $this->_rootref['L_POINTS_PEREDIT_EXPLAIN'] : ((isset($user->lang['POINTS_PEREDIT_EXPLAIN'])) ? $user->lang['POINTS_PEREDIT_EXPLAIN'] : '{ POINTS_PEREDIT_EXPLAIN }')); ?></dt>
		<dd><label><input type="radio" class="radio" name="peredit_enable" value="1"<?php if ($this->_rootref['PEREDIT_ENABLE']) {  ?> id="peredit_enable" checked="checked" <?php } ?> /> <?php echo ((isset($this->_rootref['L_YES'])) ? $this->_rootref['L_YES'] : ((isset($user->lang['YES'])) ? $user->lang['YES'] : '{ YES }')); ?></label>
			<label><input type="radio" class="radio" name="peredit_enable" value="0"<?php if (! $this->_rootref['PEREDIT_ENABLE']) {  ?> id="peredit_enable" checked="checked" <?php } ?> /> <?php echo ((isset($this->_rootref['L_NO'])) ? $this->_rootref['L_NO'] : ((isset($user->lang['NO'])) ? $user->lang['NO'] : '{ NO }')); ?></label></dd>
	</dl>	
	</fieldset>

	<fieldset class="submit-buttons">
		<legend><?php echo ((isset($this->_rootref['L_SUBMIT'])) ? $this->_rootref['L_SUBMIT'] : ((isset($user->lang['SUBMIT'])) ? $user->lang['SUBMIT'] : '{ SUBMIT }')); ?></legend>
		<input class="button1" type="submit" id="action_point_switches" name="action_point_switches" value="<?php echo ((isset($this->_rootref['L_SUBMIT'])) ? $this->_rootref['L_SUBMIT'] : ((isset($user->lang['SUBMIT'])) ? $user->lang['SUBMIT'] : '{ SUBMIT }')); ?>" />
		<?php echo (isset($this->_rootref['S_FORM_TOKEN'])) ? $this->_rootref['S_FORM_TOKEN'] : ''; ?>

	</fieldset>
	</form>

	<?php if ($this->_rootref['S_ERROR']) {  ?>

		<div class="errorbox">
			<h3><?php echo ((isset($this->_rootref['L_WARNING'])) ? $this->_rootref['L_WARNING'] : ((isset($user->lang['WARNING'])) ? $user->lang['WARNING'] : '{ WARNING }')); ?></h3>
			<p><?php echo (isset($this->_rootref['ERROR_MSG'])) ? $this->_rootref['ERROR_MSG'] : ''; ?></p>
		</div>
	<?php } ?>


	<h1><?php echo ((isset($this->_rootref['L_ACP_POINTS'])) ? $this->_rootref['L_ACP_POINTS'] : ((isset($user->lang['ACP_POINTS'])) ? $user->lang['ACP_POINTS'] : '{ ACP_POINTS }')); ?> - <?php echo ((isset($this->_rootref['L_ACP_POINTS_FORUM_TITLE'])) ? $this->_rootref['L_ACP_POINTS_FORUM_TITLE'] : ((isset($user->lang['ACP_POINTS_FORUM_TITLE'])) ? $user->lang['ACP_POINTS_FORUM_TITLE'] : '{ ACP_POINTS_FORUM_TITLE }')); ?></h1>
	<p><?php echo ((isset($this->_rootref['L_ACP_POINTS_FORUM_EXPLAIN'])) ? $this->_rootref['L_ACP_POINTS_FORUM_EXPLAIN'] : ((isset($user->lang['ACP_POINTS_FORUM_EXPLAIN'])) ? $user->lang['ACP_POINTS_FORUM_EXPLAIN'] : '{ ACP_POINTS_FORUM_EXPLAIN }')); ?></p>

	<div class="successbox"><?php echo ((isset($this->_rootref['L_ACP_POINTS_VALUES_HINT'])) ? $this->_rootref['L_ACP_POINTS_VALUES_HINT'] : ((isset($user->lang['ACP_POINTS_VALUES_HINT'])) ? $user->lang['ACP_POINTS_VALUES_HINT'] : '{ ACP_POINTS_VALUES_HINT }')); ?></div>

	<form id="action_point_values_form" method="post" action="<?php echo (isset($this->_rootref['U_ACTION'])) ? $this->_rootref['U_ACTION'] : ''; ?>">
	<fieldset>
		<legend><?php echo ((isset($this->_rootref['L_FORUM_OPTIONS'])) ? $this->_rootref['L_FORUM_OPTIONS'] : ((isset($user->lang['FORUM_OPTIONS'])) ? $user->lang['FORUM_OPTIONS'] : '{ FORUM_OPTIONS }')); ?></legend>
	<dl>
		<dt><label for="forum_topic"><?php echo ((isset($this->_rootref['L_FORUM_PERTOPIC'])) ? $this->_rootref['L_FORUM_PERTOPIC'] : ((isset($user->lang['FORUM_PERTOPIC'])) ? $user->lang['FORUM_PERTOPIC'] : '{ FORUM_PERTOPIC }')); ?>:</label><br /><span><?php echo ((isset($this->_rootref['L_FORUM_PERTOPIC_EXPLAIN'])) ? $this->_rootref['L_FORUM_PERTOPIC_EXPLAIN'] : ((isset($user->lang['FORUM_PERTOPIC_EXPLAIN'])) ? $user->lang['FORUM_PERTOPIC_EXPLAIN'] : '{ FORUM_PERTOPIC_EXPLAIN }')); ?></span></dt>
		<dd><input type="text" id="forum_topic" name="forum_topic" value="<?php echo (isset($this->_rootref['FORUM_TOPIC'])) ? $this->_rootref['FORUM_TOPIC'] : ''; ?>" maxlength="8" size="10" /> <?php echo (isset($this->_rootref['FORUM_POINTS_NAME'])) ? $this->_rootref['FORUM_POINTS_NAME'] : ''; ?></dd>
	</dl>
	<dl>
		<dt><label for="forum_post"><?php echo ((isset($this->_rootref['L_FORUM_PERPOST'])) ? $this->_rootref['L_FORUM_PERPOST'] : ((isset($user->lang['FORUM_PERPOST'])) ? $user->lang['FORUM_PERPOST'] : '{ FORUM_PERPOST }')); ?>:</label><br /><span><?php echo ((isset($this->_rootref['L_FORUM_PERPOST_EXPLAIN'])) ? $this->_rootref['L_FORUM_PERPOST_EXPLAIN'] : ((isset($user->lang['FORUM_PERPOST_EXPLAIN'])) ? $user->lang['FORUM_PERPOST_EXPLAIN'] : '{ FORUM_PERPOST_EXPLAIN }')); ?></span></dt>
		<dd><input type="text" id="forum_post" name="forum_post" value="<?php echo (isset($this->_rootref['FORUM_POST'])) ? $this->_rootref['FORUM_POST'] : ''; ?>" maxlength="8" size="10" /> <?php echo (isset($this->_rootref['FORUM_POINTS_NAME'])) ? $this->_rootref['FORUM_POINTS_NAME'] : ''; ?></dd>
	</dl>
	<dl>
		<dt><label for="forum_edit"><?php echo ((isset($this->_rootref['L_FORUM_PEREDIT'])) ? $this->_rootref['L_FORUM_PEREDIT'] : ((isset($user->lang['FORUM_PEREDIT'])) ? $user->lang['FORUM_PEREDIT'] : '{ FORUM_PEREDIT }')); ?>:</label><br /><span><?php echo ((isset($this->_rootref['L_FORUM_PEREDIT_EXPLAIN'])) ? $this->_rootref['L_FORUM_PEREDIT_EXPLAIN'] : ((isset($user->lang['FORUM_PEREDIT_EXPLAIN'])) ? $user->lang['FORUM_PEREDIT_EXPLAIN'] : '{ FORUM_PEREDIT_EXPLAIN }')); ?></span></dt>
		<dd><input type="text" id="forum_edit" name="forum_edit" value="<?php echo (isset($this->_rootref['FORUM_EDIT'])) ? $this->_rootref['FORUM_EDIT'] : ''; ?>" maxlength="8" size="10" /> <?php echo (isset($this->_rootref['FORUM_POINTS_NAME'])) ? $this->_rootref['FORUM_POINTS_NAME'] : ''; ?></dd>
	</dl>
	<dl>
		<dt><label><?php echo ((isset($this->_rootref['L_FORUM_COSTS'])) ? $this->_rootref['L_FORUM_COSTS'] : ((isset($user->lang['FORUM_COSTS'])) ? $user->lang['FORUM_COSTS'] : '{ FORUM_COSTS }')); ?>:</label><br /><span><?php echo ((isset($this->_rootref['L_FORUM_COSTS_EXPLAIN'])) ? $this->_rootref['L_FORUM_COSTS_EXPLAIN'] : ((isset($user->lang['FORUM_COSTS_EXPLAIN'])) ? $user->lang['FORUM_COSTS_EXPLAIN'] : '{ FORUM_COSTS_EXPLAIN }')); ?></span></dt>
		<dd><label><input type="radio" class="radio" name="forum_costs" value="1" /> <?php echo ((isset($this->_rootref['L_YES'])) ? $this->_rootref['L_YES'] : ((isset($user->lang['YES'])) ? $user->lang['YES'] : '{ YES }')); ?></label>
			<label><input type="radio" class="radio" name="forum_costs" value="0" /> <?php echo ((isset($this->_rootref['L_NO'])) ? $this->_rootref['L_NO'] : ((isset($user->lang['NO'])) ? $user->lang['NO'] : '{ NO }')); ?></label></dd>
	</dl>
	</fieldset>

	<fieldset class="submit-buttons">
		<legend><?php echo ((isset($this->_rootref['L_SUBMIT'])) ? $this->_rootref['L_SUBMIT'] : ((isset($user->lang['SUBMIT'])) ? $user->lang['SUBMIT'] : '{ SUBMIT }')); ?></legend>
		<input class="button1" type="submit" id="action_point_values" name="action_point_values" value="<?php echo ((isset($this->_rootref['L_SUBMIT'])) ? $this->_rootref['L_SUBMIT'] : ((isset($user->lang['SUBMIT'])) ? $user->lang['SUBMIT'] : '{ SUBMIT }')); ?>" />
	</fieldset>
	</form>

<?php } $this->_tpl_include('overall_footer.html'); ?>