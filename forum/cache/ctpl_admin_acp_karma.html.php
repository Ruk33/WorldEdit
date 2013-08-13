<?php if (!defined('IN_PHPBB')) exit; $this->_tpl_include('overall_header.html'); ?>


<a name="maincontent"></a>

<h1><?php echo ((isset($this->_rootref['L_TITLE'])) ? $this->_rootref['L_TITLE'] : ((isset($user->lang['TITLE'])) ? $user->lang['TITLE'] : '{ TITLE }')); ?></h1>

<p><?php echo ((isset($this->_rootref['L_TITLE_EXPLAIN'])) ? $this->_rootref['L_TITLE_EXPLAIN'] : ((isset($user->lang['TITLE_EXPLAIN'])) ? $user->lang['TITLE_EXPLAIN'] : '{ TITLE_EXPLAIN }')); ?></p>

<?php if ($this->_rootref['S_ERROR']) {  ?>

	<div class="errorbox">
		<h3><?php echo ((isset($this->_rootref['L_WARNING'])) ? $this->_rootref['L_WARNING'] : ((isset($user->lang['WARNING'])) ? $user->lang['WARNING'] : '{ WARNING }')); ?></h3>
		<p><?php echo (isset($this->_rootref['ERROR_MSG'])) ? $this->_rootref['ERROR_MSG'] : ''; ?></p>
	</div>
<?php } ?>


<form id="acp_karma" method="post" action="<?php echo (isset($this->_rootref['U_ACTION'])) ? $this->_rootref['U_ACTION'] : ''; ?>">

<?php if ($this->_rootref['S_KARMA_UPDATER']) {  if ($this->_rootref['S_KARMA_UP_TO_DATE']) {  ?>

		<div class="successbox">
			<p><?php echo ((isset($this->_rootref['L_ACP_KARMA_VERSION_UP_TO_DATE_ACP'])) ? $this->_rootref['L_ACP_KARMA_VERSION_UP_TO_DATE_ACP'] : ((isset($user->lang['ACP_KARMA_VERSION_UP_TO_DATE_ACP'])) ? $user->lang['ACP_KARMA_VERSION_UP_TO_DATE_ACP'] : '{ ACP_KARMA_VERSION_UP_TO_DATE_ACP }')); ?></p>
		</div>
	<?php } else { ?>

		<div class="errorbox">
			<p><?php echo ((isset($this->_rootref['L_ACP_KARMA_VERSION_NOT_UP_TO_DATE_ACP'])) ? $this->_rootref['L_ACP_KARMA_VERSION_NOT_UP_TO_DATE_ACP'] : ((isset($user->lang['ACP_KARMA_VERSION_NOT_UP_TO_DATE_ACP'])) ? $user->lang['ACP_KARMA_VERSION_NOT_UP_TO_DATE_ACP'] : '{ ACP_KARMA_VERSION_NOT_UP_TO_DATE_ACP }')); ?></p>
		</div>
	<?php } ?>


	<fieldset>
		<legend></legend>
	<dl>
		<dt><label><?php echo ((isset($this->_rootref['L_CURRENT_VERSION'])) ? $this->_rootref['L_CURRENT_VERSION'] : ((isset($user->lang['CURRENT_VERSION'])) ? $user->lang['CURRENT_VERSION'] : '{ CURRENT_VERSION }')); ?></label></dt>
		<dd><strong><?php echo (isset($this->_rootref['KARMA_CURRENT_VERSION'])) ? $this->_rootref['KARMA_CURRENT_VERSION'] : ''; ?></strong></dd>
	</dl>
	<dl>
		<dt><label><?php echo ((isset($this->_rootref['L_LATEST_VERSION'])) ? $this->_rootref['L_LATEST_VERSION'] : ((isset($user->lang['LATEST_VERSION'])) ? $user->lang['LATEST_VERSION'] : '{ LATEST_VERSION }')); ?></label></dt>
		<dd><strong><?php echo (isset($this->_rootref['KARMA_LATEST_VERSION'])) ? $this->_rootref['KARMA_LATEST_VERSION'] : ''; ?></strong></dd>
	</dl>
	<?php if ($this->_rootref['S_KARMA_BETA']) {  ?>

	<dl>
		<dt><label><?php echo ((isset($this->_rootref['L_ACP_KARMA_BETA_VERSION'])) ? $this->_rootref['L_ACP_KARMA_BETA_VERSION'] : ((isset($user->lang['ACP_KARMA_BETA_VERSION'])) ? $user->lang['ACP_KARMA_BETA_VERSION'] : '{ ACP_KARMA_BETA_VERSION }')); ?></label></dt>
		<dd><strong><a href="<?php echo (isset($this->_rootref['U_KARMA_BETA_ANNOUNCEMENT'])) ? $this->_rootref['U_KARMA_BETA_ANNOUNCEMENT'] : ''; ?>"><?php echo (isset($this->_rootref['KARMA_BETA_VERSION'])) ? $this->_rootref['KARMA_BETA_VERSION'] : ''; ?></a></strong></dd>
	</dl>
	<?php } ?>

	</fieldset>

	<?php if (! $this->_rootref['S_KARMA_UP_TO_DATE']) {  ?>

		<?php echo (isset($this->_rootref['KARMA_UPDATE_INSTRUCTIONS'])) ? $this->_rootref['KARMA_UPDATE_INSTRUCTIONS'] : ''; ?>

		<br /><br />
	<?php } } else if ($this->_rootref['S_KARMA_CONFIG']) {  $_options_count = (isset($this->_tpldata['options'])) ? sizeof($this->_tpldata['options']) : 0;if ($_options_count) {for ($_options_i = 0; $_options_i < $_options_count; ++$_options_i){$_options_val = &$this->_tpldata['options'][$_options_i]; if ($_options_val['S_LEGEND']) {  if (! $_options_val['S_FIRST_ROW']) {  ?>

				</fieldset>
			<?php } ?>

			<fieldset>
				<legend><?php echo $_options_val['LEGEND']; ?></legend>
		<?php } else { ?>


			<dl>
				<dt><label for="<?php echo $_options_val['KEY']; ?>"><?php echo $_options_val['TITLE']; ?>:</label><?php if ($_options_val['S_EXPLAIN']) {  ?><br /><span><?php echo $_options_val['TITLE_EXPLAIN']; ?></span><?php } ?></dt>
				<dd><?php echo $_options_val['CONTENT']; ?></dd>
			</dl>

		<?php } }} ?>

	</fieldset>

	<fieldset class="submit-buttons">
		<legend><?php echo ((isset($this->_rootref['L_SUBMIT'])) ? $this->_rootref['L_SUBMIT'] : ((isset($user->lang['SUBMIT'])) ? $user->lang['SUBMIT'] : '{ SUBMIT }')); ?></legend>
		<input class="button1" type="submit" id="submit" name="submit" value="<?php echo ((isset($this->_rootref['L_SUBMIT'])) ? $this->_rootref['L_SUBMIT'] : ((isset($user->lang['SUBMIT'])) ? $user->lang['SUBMIT'] : '{ SUBMIT }')); ?>" />&nbsp;
		<input class="button2" type="reset" id="reset" name="reset" value="<?php echo ((isset($this->_rootref['L_RESET'])) ? $this->_rootref['L_RESET'] : ((isset($user->lang['RESET'])) ? $user->lang['RESET'] : '{ RESET }')); ?>" />
	</fieldset>

<?php } else if ($this->_rootref['S_KARMA_HISTORY']) {  if ($this->_rootref['PAGINATION']) {  ?>

	<div class="pagination">
			<a href="#" onclick="jumpto(); return false;" title="<?php echo ((isset($this->_rootref['L_JUMP_TO_PAGE'])) ? $this->_rootref['L_JUMP_TO_PAGE'] : ((isset($user->lang['JUMP_TO_PAGE'])) ? $user->lang['JUMP_TO_PAGE'] : '{ JUMP_TO_PAGE }')); ?>"><?php echo (isset($this->_rootref['S_ON_PAGE'])) ? $this->_rootref['S_ON_PAGE'] : ''; ?></a> &bull; <span><?php echo (isset($this->_rootref['PAGINATION'])) ? $this->_rootref['PAGINATION'] : ''; ?></span>
	</div>
	<?php } if (sizeof($this->_tpldata['history'])) {  ?>

		<table cellspacing="1">
		<thead>
		<tr>
			<th><?php echo ((isset($this->_rootref['L_USERNAME'])) ? $this->_rootref['L_USERNAME'] : ((isset($user->lang['USERNAME'])) ? $user->lang['USERNAME'] : '{ USERNAME }')); ?></th>
			<th><?php echo ((isset($this->_rootref['L_IP'])) ? $this->_rootref['L_IP'] : ((isset($user->lang['IP'])) ? $user->lang['IP'] : '{ IP }')); ?></th>
			<th><?php echo ((isset($this->_rootref['L_TIME'])) ? $this->_rootref['L_TIME'] : ((isset($user->lang['TIME'])) ? $user->lang['TIME'] : '{ TIME }')); ?></th>
			<th><?php echo ((isset($this->_rootref['L_ACTION'])) ? $this->_rootref['L_ACTION'] : ((isset($user->lang['ACTION'])) ? $user->lang['ACTION'] : '{ ACTION }')); ?></th>
			<th><?php echo ((isset($this->_rootref['L_MESSAGE'])) ? $this->_rootref['L_MESSAGE'] : ((isset($user->lang['MESSAGE'])) ? $user->lang['MESSAGE'] : '{ MESSAGE }')); ?></th>
			<th><?php echo ((isset($this->_rootref['L_MARK'])) ? $this->_rootref['L_MARK'] : ((isset($user->lang['MARK'])) ? $user->lang['MARK'] : '{ MARK }')); ?></th>
		</tr>
		</thead>
		<tbody>
		<?php $_history_count = (isset($this->_tpldata['history'])) ? sizeof($this->_tpldata['history']) : 0;if ($_history_count) {for ($_history_i = 0; $_history_i < $_history_count; ++$_history_i){$_history_val = &$this->_tpldata['history'][$_history_i]; if (!($_history_val['S_ROW_COUNT'] & 1)  ) {  ?><tr class="row1"><?php } else { ?><tr class="row2"><?php } ?>

				<td>
					<?php echo $_history_val['POSTER_USERNAME']; ?> &raquo; <?php echo $_history_val['USERNAME']; ?>

				</td>
				<td style="text-align: center;"><?php echo $_history_val['IP']; ?></td>
				<td style="text-align: center;"><?php echo $_history_val['DATE']; ?></td>
				<td><?php echo $_history_val['ACTION']; ?></td>
				<td><span><?php echo $_history_val['COMMENT']; ?></span></td>
				<td style="text-align: center;"><input type="checkbox" class="radio" name="mark[]" value="<?php echo $_history_val['ID']; ?>" /></td>
			</tr>
		<?php }} ?>

		</tbody>
		</table>
	<?php } else { ?>

		<div class="errorbox">
			<p><?php echo ((isset($this->_rootref['L_NO_ENTRIES'])) ? $this->_rootref['L_NO_ENTRIES'] : ((isset($user->lang['NO_ENTRIES'])) ? $user->lang['NO_ENTRIES'] : '{ NO_ENTRIES }')); ?></p>
		</div>
	<?php } ?>


	<fieldset class="display-options">
		<?php echo ((isset($this->_rootref['L_DISPLAY_LOG'])) ? $this->_rootref['L_DISPLAY_LOG'] : ((isset($user->lang['DISPLAY_LOG'])) ? $user->lang['DISPLAY_LOG'] : '{ DISPLAY_LOG }')); ?>: &nbsp;<?php echo (isset($this->_rootref['S_LIMIT_DAYS'])) ? $this->_rootref['S_LIMIT_DAYS'] : ''; ?>&nbsp;<?php echo ((isset($this->_rootref['L_SORT_BY'])) ? $this->_rootref['L_SORT_BY'] : ((isset($user->lang['SORT_BY'])) ? $user->lang['SORT_BY'] : '{ SORT_BY }')); ?>: <?php echo (isset($this->_rootref['S_SORT_KEY'])) ? $this->_rootref['S_SORT_KEY'] : ''; ?> <?php echo (isset($this->_rootref['S_SORT_DIR'])) ? $this->_rootref['S_SORT_DIR'] : ''; ?>

		<input class="button2" type="submit" value="<?php echo ((isset($this->_rootref['L_GO'])) ? $this->_rootref['L_GO'] : ((isset($user->lang['GO'])) ? $user->lang['GO'] : '{ GO }')); ?>" name="sort" />
		<?php echo (isset($this->_rootref['S_FORM_TOKEN'])) ? $this->_rootref['S_FORM_TOKEN'] : ''; ?>

	</fieldset>
	<hr />
	<?php if ($this->_rootref['PAGINATION']) {  ?>

	<div class="pagination">
		<a href="#" onclick="jumpto(); return false;" title="<?php echo ((isset($this->_rootref['L_JUMP_TO_PAGE'])) ? $this->_rootref['L_JUMP_TO_PAGE'] : ((isset($user->lang['JUMP_TO_PAGE'])) ? $user->lang['JUMP_TO_PAGE'] : '{ JUMP_TO_PAGE }')); ?>"><?php echo (isset($this->_rootref['S_ON_PAGE'])) ? $this->_rootref['S_ON_PAGE'] : ''; ?></a> &bull; <span><?php echo (isset($this->_rootref['PAGINATION'])) ? $this->_rootref['PAGINATION'] : ''; ?></span>
	</div>
	<?php } if ($this->_rootref['S_SHOW_FORUMS']) {  ?>

		<fieldset class="quick">
			<?php echo ((isset($this->_rootref['L_SELECT_FORUM'])) ? $this->_rootref['L_SELECT_FORUM'] : ((isset($user->lang['SELECT_FORUM'])) ? $user->lang['SELECT_FORUM'] : '{ SELECT_FORUM }')); ?>: <select name="f" onchange="if(this.options[this.selectedIndex].value != -1){ this.form.submit(); }"><?php echo (isset($this->_rootref['S_FORUM_BOX'])) ? $this->_rootref['S_FORUM_BOX'] : ''; ?></select>
			<input class="button2" type="submit" value="<?php echo ((isset($this->_rootref['L_GO'])) ? $this->_rootref['L_GO'] : ((isset($user->lang['GO'])) ? $user->lang['GO'] : '{ GO }')); ?>" />
		</fieldset>
	<?php } if ($this->_rootref['S_CLEARHISTORY']) {  ?>

		<fieldset class="quick">
			<input class="button2" type="submit" name="delall" value="<?php echo ((isset($this->_rootref['L_DELETE_ALL'])) ? $this->_rootref['L_DELETE_ALL'] : ((isset($user->lang['DELETE_ALL'])) ? $user->lang['DELETE_ALL'] : '{ DELETE_ALL }')); ?>" />&nbsp;
			<input class="button2" type="submit" name="delmarked" value="<?php echo ((isset($this->_rootref['L_DELETE_MARKED'])) ? $this->_rootref['L_DELETE_MARKED'] : ((isset($user->lang['DELETE_MARKED'])) ? $user->lang['DELETE_MARKED'] : '{ DELETE_MARKED }')); ?>" /><br />
			<p class="small"><a href="#" onclick="marklist('list', 'mark', true); return false;"><?php echo ((isset($this->_rootref['L_MARK_ALL'])) ? $this->_rootref['L_MARK_ALL'] : ((isset($user->lang['MARK_ALL'])) ? $user->lang['MARK_ALL'] : '{ MARK_ALL }')); ?></a> &bull; <a href="#" onclick="marklist('list', 'mark', false); return false;"><?php echo ((isset($this->_rootref['L_UNMARK_ALL'])) ? $this->_rootref['L_UNMARK_ALL'] : ((isset($user->lang['UNMARK_ALL'])) ? $user->lang['UNMARK_ALL'] : '{ UNMARK_ALL }')); ?></a></p>
		</fieldset>
	<?php } } else if ($this->_rootref['S_KARMA_STATS']) {  } ?>


</form>

<?php $this->_tpl_include('overall_footer.html'); ?>