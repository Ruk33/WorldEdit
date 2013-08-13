<?php if (!defined('IN_PHPBB')) exit; $this->_tpl_include('ucp_header.html'); ?>


<table class="tablebg" width="100%" cellspacing="1">
<tr>
	<th colspan="2" valign="middle"><?php echo ((isset($this->_rootref['L_TITLE'])) ? $this->_rootref['L_TITLE'] : ((isset($user->lang['TITLE'])) ? $user->lang['TITLE'] : '{ TITLE }')); ?></th>
</tr>
<?php if ($this->_rootref['ERROR']) {  ?>

	<tr>
		<td class="row3" colspan="2" align="center"><span class="gensmall error"><?php echo (isset($this->_rootref['ERROR'])) ? $this->_rootref['ERROR'] : ''; ?></span></td>
	</tr>
<?php } if ($this->_rootref['S_ENABLE_SELECT']) {  ?>

	<tr> 
		<td class="row1" width="50%"><b class="genmed"><?php echo ((isset($this->_rootref['L_UCP_KARMA_ENABLE'])) ? $this->_rootref['L_UCP_KARMA_ENABLE'] : ((isset($user->lang['UCP_KARMA_ENABLE'])) ? $user->lang['UCP_KARMA_ENABLE'] : '{ UCP_KARMA_ENABLE }')); ?>:</b><br /><span class="gensmall"><?php echo ((isset($this->_rootref['L_UCP_KARMA_ENABLE_EXPLAIN'])) ? $this->_rootref['L_UCP_KARMA_ENABLE_EXPLAIN'] : ((isset($user->lang['UCP_KARMA_ENABLE_EXPLAIN'])) ? $user->lang['UCP_KARMA_ENABLE_EXPLAIN'] : '{ UCP_KARMA_ENABLE_EXPLAIN }')); ?></span></td>
		<td class="row2"><input type="radio" class="radio" name="enable" value="1"<?php if ($this->_rootref['S_ENABLE']) {  ?> checked="checked"<?php } ?> /><span class="genmed"><?php echo ((isset($this->_rootref['L_YES'])) ? $this->_rootref['L_YES'] : ((isset($user->lang['YES'])) ? $user->lang['YES'] : '{ YES }')); ?></span>&nbsp;&nbsp;<input type="radio" class="radio" name="enable" value="0"<?php if (! $this->_rootref['S_ENABLE']) {  ?> checked="checked"<?php } ?> /><span class="genmed"><?php echo ((isset($this->_rootref['L_NO'])) ? $this->_rootref['L_NO'] : ((isset($user->lang['NO'])) ? $user->lang['NO'] : '{ NO }')); ?></span></td>
	</tr>
<?php } if ($this->_rootref['S_NOTIFY_PM_SELECT']) {  ?>

	<tr> 
		<td class="row1" width="50%"><b class="genmed"><?php echo ((isset($this->_rootref['L_UCP_KARMA_NOTIFY_PM'])) ? $this->_rootref['L_UCP_KARMA_NOTIFY_PM'] : ((isset($user->lang['UCP_KARMA_NOTIFY_PM'])) ? $user->lang['UCP_KARMA_NOTIFY_PM'] : '{ UCP_KARMA_NOTIFY_PM }')); ?>:</b><br /><span class="gensmall"><?php echo ((isset($this->_rootref['L_UCP_KARMA_NOTIFY_PM_EXPLAIN'])) ? $this->_rootref['L_UCP_KARMA_NOTIFY_PM_EXPLAIN'] : ((isset($user->lang['UCP_KARMA_NOTIFY_PM_EXPLAIN'])) ? $user->lang['UCP_KARMA_NOTIFY_PM_EXPLAIN'] : '{ UCP_KARMA_NOTIFY_PM_EXPLAIN }')); ?></span></td>
		<td class="row2"><input type="radio" class="radio" name="notify_pm" value="1"<?php if ($this->_rootref['S_NOTIFY_PM']) {  ?> checked="checked"<?php } ?> /><span class="genmed"><?php echo ((isset($this->_rootref['L_YES'])) ? $this->_rootref['L_YES'] : ((isset($user->lang['YES'])) ? $user->lang['YES'] : '{ YES }')); ?></span>&nbsp;&nbsp;<input type="radio" class="radio" name="notify_pm" value="0"<?php if (! $this->_rootref['S_NOTIFY_PM']) {  ?> checked="checked"<?php } ?> /><span class="genmed"><?php echo ((isset($this->_rootref['L_NO'])) ? $this->_rootref['L_NO'] : ((isset($user->lang['NO'])) ? $user->lang['NO'] : '{ NO }')); ?></span></td>
	</tr>
<?php } if ($this->_rootref['S_NOTIFY_EMAIL_SELECT']) {  ?>

	<tr> 
		<td class="row1" width="50%"><b class="genmed"><?php echo ((isset($this->_rootref['L_UCP_KARMA_NOTIFY_EMAIL'])) ? $this->_rootref['L_UCP_KARMA_NOTIFY_EMAIL'] : ((isset($user->lang['UCP_KARMA_NOTIFY_EMAIL'])) ? $user->lang['UCP_KARMA_NOTIFY_EMAIL'] : '{ UCP_KARMA_NOTIFY_EMAIL }')); ?>:</b><br /><span class="gensmall"><?php echo ((isset($this->_rootref['L_UCP_KARMA_NOTIFY_EMAIL_EXPLAIN'])) ? $this->_rootref['L_UCP_KARMA_NOTIFY_EMAIL_EXPLAIN'] : ((isset($user->lang['UCP_KARMA_NOTIFY_EMAIL_EXPLAIN'])) ? $user->lang['UCP_KARMA_NOTIFY_EMAIL_EXPLAIN'] : '{ UCP_KARMA_NOTIFY_EMAIL_EXPLAIN }')); ?></span></td>
		<td class="row2"><input type="radio" class="radio" name="notify_email" value="1"<?php if ($this->_rootref['S_NOTIFY_EMAIL']) {  ?> checked="checked"<?php } ?> /><span class="genmed"><?php echo ((isset($this->_rootref['L_YES'])) ? $this->_rootref['L_YES'] : ((isset($user->lang['YES'])) ? $user->lang['YES'] : '{ YES }')); ?></span>&nbsp;&nbsp;<input type="radio" class="radio" name="notify_email" value="0"<?php if (! $this->_rootref['S_NOTIFY_EMAIL']) {  ?> checked="checked"<?php } ?> /><span class="genmed"><?php echo ((isset($this->_rootref['L_NO'])) ? $this->_rootref['L_NO'] : ((isset($user->lang['NO'])) ? $user->lang['NO'] : '{ NO }')); ?></span></td>
	</tr>
<?php } if ($this->_rootref['S_NOTIFY_JABBER_SELECT']) {  ?>

	<tr> 
		<td class="row1" width="50%"><b class="genmed"><?php echo ((isset($this->_rootref['L_UCP_KARMA_NOTIFY_JABBER'])) ? $this->_rootref['L_UCP_KARMA_NOTIFY_JABBER'] : ((isset($user->lang['UCP_KARMA_NOTIFY_JABBER'])) ? $user->lang['UCP_KARMA_NOTIFY_JABBER'] : '{ UCP_KARMA_NOTIFY_JABBER }')); ?>:</b><br /><span class="gensmall"><?php echo ((isset($this->_rootref['L_UCP_KARMA_NOTIFY_JABBER_EXPLAIN'])) ? $this->_rootref['L_UCP_KARMA_NOTIFY_JABBER_EXPLAIN'] : ((isset($user->lang['UCP_KARMA_NOTIFY_JABBER_EXPLAIN'])) ? $user->lang['UCP_KARMA_NOTIFY_JABBER_EXPLAIN'] : '{ UCP_KARMA_NOTIFY_JABBER_EXPLAIN }')); ?></span></td>
		<td class="row2"><input type="radio" class="radio" name="notify_jabber" value="1"<?php if ($this->_rootref['S_NOTIFY_JABBER']) {  ?> checked="checked"<?php } ?> /><span class="genmed"><?php echo ((isset($this->_rootref['L_YES'])) ? $this->_rootref['L_YES'] : ((isset($user->lang['YES'])) ? $user->lang['YES'] : '{ YES }')); ?></span>&nbsp;&nbsp;<input type="radio" class="radio" name="notify_jabber" value="0"<?php if (! $this->_rootref['S_NOTIFY_JABBER']) {  ?> checked="checked"<?php } ?> /><span class="genmed"><?php echo ((isset($this->_rootref['L_NO'])) ? $this->_rootref['L_NO'] : ((isset($user->lang['NO'])) ? $user->lang['NO'] : '{ NO }')); ?></span></td>
	</tr>
<?php } if ($this->_rootref['S_TOPLIST_SELECT']) {  ?>

	<tr> 
		<td class="row1" width="50%"><b class="genmed"><?php echo ((isset($this->_rootref['L_UCP_KARMA_TOPLIST'])) ? $this->_rootref['L_UCP_KARMA_TOPLIST'] : ((isset($user->lang['UCP_KARMA_TOPLIST'])) ? $user->lang['UCP_KARMA_TOPLIST'] : '{ UCP_KARMA_TOPLIST }')); ?>:</b><br /><span class="gensmall"><?php echo ((isset($this->_rootref['L_UCP_KARMA_TOPLIST_EXPLAIN'])) ? $this->_rootref['L_UCP_KARMA_TOPLIST_EXPLAIN'] : ((isset($user->lang['UCP_KARMA_TOPLIST_EXPLAIN'])) ? $user->lang['UCP_KARMA_TOPLIST_EXPLAIN'] : '{ UCP_KARMA_TOPLIST_EXPLAIN }')); ?></span></td>
		<td class="row2"><input type="radio" class="radio" name="toplist" value="1"<?php if ($this->_rootref['S_TOPLIST']) {  ?> checked="checked"<?php } ?> /><span class="genmed"><?php echo ((isset($this->_rootref['L_YES'])) ? $this->_rootref['L_YES'] : ((isset($user->lang['YES'])) ? $user->lang['YES'] : '{ YES }')); ?></span>&nbsp;&nbsp;<input type="radio" class="radio" name="toplist" value="0"<?php if (! $this->_rootref['S_TOPLIST']) {  ?> checked="checked"<?php } ?> /><span class="genmed"><?php echo ((isset($this->_rootref['L_NO'])) ? $this->_rootref['L_NO'] : ((isset($user->lang['NO'])) ? $user->lang['NO'] : '{ NO }')); ?></span></td>
	</tr>
	<tr> 
		<td class="row1" width="50%"><b class="genmed"><?php echo ((isset($this->_rootref['L_UCP_KARMA_TOPLIST_USERS'])) ? $this->_rootref['L_UCP_KARMA_TOPLIST_USERS'] : ((isset($user->lang['UCP_KARMA_TOPLIST_USERS'])) ? $user->lang['UCP_KARMA_TOPLIST_USERS'] : '{ UCP_KARMA_TOPLIST_USERS }')); ?>:</b><br /><span class="gensmall"><?php echo ((isset($this->_rootref['L_UCP_KARMA_TOPLIST_USERS_EXPLAIN'])) ? $this->_rootref['L_UCP_KARMA_TOPLIST_USERS_EXPLAIN'] : ((isset($user->lang['UCP_KARMA_TOPLIST_USERS_EXPLAIN'])) ? $user->lang['UCP_KARMA_TOPLIST_USERS_EXPLAIN'] : '{ UCP_KARMA_TOPLIST_USERS_EXPLAIN }')); ?></span></td>
		<td class="row2"><input type="text" name="toplist_users" id="toplist_users" value="<?php echo (isset($this->_rootref['TOPLIST_USERS'])) ? $this->_rootref['TOPLIST_USERS'] : ''; ?>" maxlength="8" class="inputbox tiny" style="margin-top: 3px;" /></td>
	</tr>
<?php } if ($this->_rootref['S_COMMENTS_SELECT']) {  ?>

	<tr> 
		<td class="row1" width="50%"><b class="genmed"><?php echo ((isset($this->_rootref['L_UCP_KARMA_COMMENTS_PER_PAGE'])) ? $this->_rootref['L_UCP_KARMA_COMMENTS_PER_PAGE'] : ((isset($user->lang['UCP_KARMA_COMMENTS_PER_PAGE'])) ? $user->lang['UCP_KARMA_COMMENTS_PER_PAGE'] : '{ UCP_KARMA_COMMENTS_PER_PAGE }')); ?>:</b></td>
		<td class="row2"><input type="text" name="comments_per_page" id="comments_per_page" value="<?php echo (isset($this->_rootref['COMMENTS_PER_PAGE'])) ? $this->_rootref['COMMENTS_PER_PAGE'] : ''; ?>" maxlength="3" class="post" style="margin-top: 3px;" /></td>
	</tr>
	<tr>
		<td class="row1" width="50%"><b class="genmed"><?php echo ((isset($this->_rootref['L_UCP_KARMA_COMMENTS_SELF'])) ? $this->_rootref['L_UCP_KARMA_COMMENTS_SELF'] : ((isset($user->lang['UCP_KARMA_COMMENTS_SELF'])) ? $user->lang['UCP_KARMA_COMMENTS_SELF'] : '{ UCP_KARMA_COMMENTS_SELF }')); ?>:</b></td>
		<td class="row2"><input type="radio" class="radio" name="comments_self" value="1"<?php if ($this->_rootref['S_COMMENTS_SELF']) {  ?> checked="checked"<?php } ?> /><span class="genmed"><?php echo ((isset($this->_rootref['L_YES'])) ? $this->_rootref['L_YES'] : ((isset($user->lang['YES'])) ? $user->lang['YES'] : '{ YES }')); ?></span>&nbsp;&nbsp;<input type="radio" class="radio" name="comments_self" value="0"<?php if (! $this->_rootref['S_COMMENTS_SELF']) {  ?> checked="checked"<?php } ?> /><span class="genmed"><?php echo ((isset($this->_rootref['L_NO'])) ? $this->_rootref['L_NO'] : ((isset($user->lang['NO'])) ? $user->lang['NO'] : '{ NO }')); ?></span></td>
	</tr>
	<tr>
		<td colspan="2" class="spacer"></td>
	</tr>
	<tr>
		<td class="row1" width="50%"><b class="genmed"><?php echo ((isset($this->_rootref['L_UCP_KARMA_VIEW_COMMENTS_DAYS'])) ? $this->_rootref['L_UCP_KARMA_VIEW_COMMENTS_DAYS'] : ((isset($user->lang['UCP_KARMA_VIEW_COMMENTS_DAYS'])) ? $user->lang['UCP_KARMA_VIEW_COMMENTS_DAYS'] : '{ UCP_KARMA_VIEW_COMMENTS_DAYS }')); ?>:</b></td>
		<td class="row2"><?php echo (isset($this->_rootref['S_COMMENTS_SORT_DAYS'])) ? $this->_rootref['S_COMMENTS_SORT_DAYS'] : ''; ?></td>
	</tr>
	<tr>
		<td class="row1" width="50%"><b class="genmed"><?php echo ((isset($this->_rootref['L_UCP_KARMA_VIEW_COMMENTS_KEY'])) ? $this->_rootref['L_UCP_KARMA_VIEW_COMMENTS_KEY'] : ((isset($user->lang['UCP_KARMA_VIEW_COMMENTS_KEY'])) ? $user->lang['UCP_KARMA_VIEW_COMMENTS_KEY'] : '{ UCP_KARMA_VIEW_COMMENTS_KEY }')); ?>:</b></td>
		<td class="row2"><?php echo (isset($this->_rootref['S_COMMENTS_SORT_KEY'])) ? $this->_rootref['S_COMMENTS_SORT_KEY'] : ''; ?></td>
	</tr>
	<tr>
		<td class="row1" width="50%"><b class="genmed"><?php echo ((isset($this->_rootref['L_UCP_KARMA_VIEW_COMMENTS_DIR'])) ? $this->_rootref['L_UCP_KARMA_VIEW_COMMENTS_DIR'] : ((isset($user->lang['UCP_KARMA_VIEW_COMMENTS_DIR'])) ? $user->lang['UCP_KARMA_VIEW_COMMENTS_DIR'] : '{ UCP_KARMA_VIEW_COMMENTS_DIR }')); ?>:</b></td>
		<td class="row2"><?php echo (isset($this->_rootref['S_COMMENTS_SORT_DIR'])) ? $this->_rootref['S_COMMENTS_SORT_DIR'] : ''; ?></td>
	</tr>
<?php } ?>

<tr>
	<td class="cat" colspan="2" align="center"><?php echo (isset($this->_rootref['S_HIDDEN_FIELDS'])) ? $this->_rootref['S_HIDDEN_FIELDS'] : ''; ?><input class="btnmain" type="submit" name="submit" value="<?php echo ((isset($this->_rootref['L_SUBMIT'])) ? $this->_rootref['L_SUBMIT'] : ((isset($user->lang['SUBMIT'])) ? $user->lang['SUBMIT'] : '{ SUBMIT }')); ?>" />&nbsp;&nbsp;<input class="btnlite" type="reset" value="<?php echo ((isset($this->_rootref['L_RESET'])) ? $this->_rootref['L_RESET'] : ((isset($user->lang['RESET'])) ? $user->lang['RESET'] : '{ RESET }')); ?>" name="reset" /></td>
</tr>
</table>


<?php $this->_tpl_include('ucp_footer.html'); ?>