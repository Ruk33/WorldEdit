<?php if (!defined('IN_PHPBB')) exit; $this->_tpl_include('mcp_header.html'); ?>


<form method="post" name="mcp" action="<?php echo (isset($this->_rootref['U_POST_ACTION'])) ? $this->_rootref['U_POST_ACTION'] : ''; ?>">

<table class="tablebg" width="100%" cellspacing="1">
<tr>
	<td class="row3" colspan="4" align="center"><b class="gen"><?php echo ((isset($this->_rootref['L_WARNED_USERS'])) ? $this->_rootref['L_WARNED_USERS'] : ((isset($user->lang['WARNED_USERS'])) ? $user->lang['WARNED_USERS'] : '{ WARNED_USERS }')); ?></b></td>
</tr>
<tr>
	<th>&nbsp;<?php echo ((isset($this->_rootref['L_USERNAME'])) ? $this->_rootref['L_USERNAME'] : ((isset($user->lang['USERNAME'])) ? $user->lang['USERNAME'] : '{ USERNAME }')); ?>&nbsp;</th>
	<th>&nbsp;<?php echo ((isset($this->_rootref['L_WARNINGS'])) ? $this->_rootref['L_WARNINGS'] : ((isset($user->lang['WARNINGS'])) ? $user->lang['WARNINGS'] : '{ WARNINGS }')); ?>&nbsp;</th>
	<th>&nbsp;<?php echo ((isset($this->_rootref['L_LATEST_WARNING_TIME'])) ? $this->_rootref['L_LATEST_WARNING_TIME'] : ((isset($user->lang['LATEST_WARNING_TIME'])) ? $user->lang['LATEST_WARNING_TIME'] : '{ LATEST_WARNING_TIME }')); ?>&nbsp;</th>
	<th>&nbsp;</th>
</tr>
<?php $_user_count = (isset($this->_tpldata['user'])) ? sizeof($this->_tpldata['user']) : 0;if ($_user_count) {for ($_user_i = 0; $_user_i < $_user_count; ++$_user_i){$_user_val = &$this->_tpldata['user'][$_user_i]; ?>

	<tr>
		<td class="row1" width="15%" valign="top"><span class="gen"><?php echo $_user_val['USERNAME_FULL']; ?></span></td>
		<td class="row2" width="15%" valign="top"><span class="gen"><?php echo $_user_val['WARNINGS']; ?></span></td>
		<td class="row1" width="15%" valign="top"><span class="gen"><?php echo $_user_val['WARNING_TIME']; ?></span></td>
		<td class="row2" width="15%" valign="top"><span class="gen"><a href="<?php echo $_user_val['U_NOTES']; ?>"><?php echo ((isset($this->_rootref['L_VIEW_NOTES'])) ? $this->_rootref['L_VIEW_NOTES'] : ((isset($user->lang['VIEW_NOTES'])) ? $user->lang['VIEW_NOTES'] : '{ VIEW_NOTES }')); ?></a></span></td>
	</tr>
<?php }} else { ?>

	<tr>
		<td class="row1" colspan="4" align="center"><span class="gen"><?php echo ((isset($this->_rootref['L_WARNINGS_ZERO_TOTAL'])) ? $this->_rootref['L_WARNINGS_ZERO_TOTAL'] : ((isset($user->lang['WARNINGS_ZERO_TOTAL'])) ? $user->lang['WARNINGS_ZERO_TOTAL'] : '{ WARNINGS_ZERO_TOTAL }')); ?></span></td>
	</tr>
<?php } ?>

<tr align="center">
	<td class="row3" colspan="4"><span class="gensmall"><?php echo ((isset($this->_rootref['L_DISPLAY_POSTS'])) ? $this->_rootref['L_DISPLAY_POSTS'] : ((isset($user->lang['DISPLAY_POSTS'])) ? $user->lang['DISPLAY_POSTS'] : '{ DISPLAY_POSTS }')); ?>:</span> <?php echo (isset($this->_rootref['S_SELECT_SORT_DAYS'])) ? $this->_rootref['S_SELECT_SORT_DAYS'] : ''; ?>&nbsp;<span class="gensmall"><?php echo ((isset($this->_rootref['L_SORT_BY'])) ? $this->_rootref['L_SORT_BY'] : ((isset($user->lang['SORT_BY'])) ? $user->lang['SORT_BY'] : '{ SORT_BY }')); ?></span> <?php echo (isset($this->_rootref['S_SELECT_SORT_KEY'])) ? $this->_rootref['S_SELECT_SORT_KEY'] : ''; ?> <?php echo (isset($this->_rootref['S_SELECT_SORT_DIR'])) ? $this->_rootref['S_SELECT_SORT_DIR'] : ''; ?>&nbsp;<input class="btnlite" type="submit" value="<?php echo ((isset($this->_rootref['L_GO'])) ? $this->_rootref['L_GO'] : ((isset($user->lang['GO'])) ? $user->lang['GO'] : '{ GO }')); ?>" name="sort" /></td>
</tr>
</table>

<table width="100%" cellspacing="0" cellpadding="0">
<tr>
	<td class="pagination"><?php echo (isset($this->_rootref['PAGE_NUMBER'])) ? $this->_rootref['PAGE_NUMBER'] : ''; ?> [ <?php echo (isset($this->_rootref['TOTAL_USERS'])) ? $this->_rootref['TOTAL_USERS'] : ''; ?> ]</td>
	<td align="<?php echo (isset($this->_rootref['S_CONTENT_FLOW_END'])) ? $this->_rootref['S_CONTENT_FLOW_END'] : ''; ?>"><span class="pagination"><?php $this->_tpl_include('pagination.html'); ?></span></td>
</tr>
</table>
<?php echo (isset($this->_rootref['S_FORM_TOKEN'])) ? $this->_rootref['S_FORM_TOKEN'] : ''; ?>

</form>

<br clear="all" /><br />

<?php $this->_tpl_include('mcp_footer.html'); ?>