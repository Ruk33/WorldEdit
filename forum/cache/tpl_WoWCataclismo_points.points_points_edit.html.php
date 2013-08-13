<?php if (!defined('IN_PHPBB')) exit; $this->_tpl_include('overall_header.html'); ?><!-- $Id: points_points_edit.html 794 2011-12-24 04:34:10Z femu $ --><?php $_administer_points_count = (isset($this->_tpldata['administer_points'])) ? sizeof($this->_tpldata['administer_points']) : 0;if ($_administer_points_count) {for ($_administer_points_i = 0; $_administer_points_i < $_administer_points_count; ++$_administer_points_i){$_administer_points_val = &$this->_tpldata['administer_points'][$_administer_points_i]; ?>

<form action="<?php echo (isset($this->_rootref['S_ACTION'])) ? $this->_rootref['S_ACTION'] : ''; ?>" method="post">
	<table class="tablebg" width="100%" cellspacing="1" cellpadding="0" border="0">
		<thead>
			<tr>
				<th align="center" colspan="3"><?php echo ((isset($this->_rootref['L_POINTS_MODIFY'])) ? $this->_rootref['L_POINTS_MODIFY'] : ((isset($user->lang['POINTS_MODIFY'])) ? $user->lang['POINTS_MODIFY'] : '{ POINTS_MODIFY }')); ?></th>
			</tr>
			<tr>
				<td class="row1" align="center" colspan="3"><?php echo ((isset($this->_rootref['L_P_POINTS_TITLE'])) ? $this->_rootref['L_P_POINTS_TITLE'] : ((isset($user->lang['P_POINTS_TITLE'])) ? $user->lang['P_POINTS_TITLE'] : '{ P_POINTS_TITLE }')); ?></td>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td class="row1" align="<?php echo (isset($this->_rootref['S_CONTENT_FLOW_END'])) ? $this->_rootref['S_CONTENT_FLOW_END'] : ''; ?>"><?php echo ((isset($this->_rootref['L_USERNAME'])) ? $this->_rootref['L_USERNAME'] : ((isset($user->lang['USERNAME'])) ? $user->lang['USERNAME'] : '{ USERNAME }')); ?>: <?php echo (isset($this->_rootref['USER_NAME'])) ? $this->_rootref['USER_NAME'] : ''; ?></td>
				<td class="row1" align="center"><?php echo ((isset($this->_rootref['L_POINTS_CASH_ON_HAND'])) ? $this->_rootref['L_POINTS_CASH_ON_HAND'] : ((isset($user->lang['POINTS_CASH_ON_HAND'])) ? $user->lang['POINTS_CASH_ON_HAND'] : '{ POINTS_CASH_ON_HAND }')); ?>: <?php echo (isset($this->_rootref['POINTS_OF_USER'])) ? $this->_rootref['POINTS_OF_USER'] : ''; ?> <?php echo (isset($this->_rootref['POINTS_NAME'])) ? $this->_rootref['POINTS_NAME'] : ''; ?></td>
				<td class="row1"><?php echo ((isset($this->_rootref['L_EDIT_SET_AMOUNT'])) ? $this->_rootref['L_EDIT_SET_AMOUNT'] : ((isset($user->lang['EDIT_SET_AMOUNT'])) ? $user->lang['EDIT_SET_AMOUNT'] : '{ EDIT_SET_AMOUNT }')); ?>:  <input type="text" tabindex="1" maxlength="10" title="<?php echo ((isset($this->_rootref['L_POINTS_NUMBER_FORMAT_EXPLAIN'])) ? $this->_rootref['L_POINTS_NUMBER_FORMAT_EXPLAIN'] : ((isset($user->lang['POINTS_NUMBER_FORMAT_EXPLAIN'])) ? $user->lang['POINTS_NUMBER_FORMAT_EXPLAIN'] : '{ POINTS_NUMBER_FORMAT_EXPLAIN }')); ?>" class="inputbox" name="points" value="<?php echo (isset($this->_rootref['CURRENT_VALUE'])) ? $this->_rootref['CURRENT_VALUE'] : ''; ?>"/></td>
			</tr>
			<tr>
				<td class="row1" align="center" colspan="3"><?php echo (isset($this->_rootref['S_HIDDEN_FIELDS'])) ? $this->_rootref['S_HIDDEN_FIELDS'] : ''; ?><input type="submit" accesskey="s" tabindex="2" name="submit" value="<?php echo ((isset($this->_rootref['L_SUBMIT'])) ? $this->_rootref['L_SUBMIT'] : ((isset($user->lang['SUBMIT'])) ? $user->lang['SUBMIT'] : '{ SUBMIT }')); ?>" class="button1" /><?php echo (isset($this->_rootref['S_FORM_TOKEN'])) ? $this->_rootref['S_FORM_TOKEN'] : ''; ?></td>
			</tr>
		</tbody>
	</table>
<br clear="all"/>
</form>
<?php }} $this->_tpl_include('overall_footer.html'); ?>