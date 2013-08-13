<?php if (!defined('IN_PHPBB')) exit; $_switch_display_medal_count = (isset($this->_tpldata['switch_display_medal'])) ? sizeof($this->_tpldata['switch_display_medal']) : 0;if ($_switch_display_medal_count) {for ($_switch_display_medal_i = 0; $_switch_display_medal_i < $_switch_display_medal_count; ++$_switch_display_medal_i){$_switch_display_medal_val = &$this->_tpldata['switch_display_medal'][$_switch_display_medal_i]; ?>

	<br clear="all" />

	<script src="<?php echo (isset($this->_rootref['T_SUPER_TEMPLATE_PATH'])) ? $this->_rootref['T_SUPER_TEMPLATE_PATH'] : ''; ?>/medals/toggle_display.js"></script>
	<table class="tablebg" width="100%" cellspacing="1" cellpadding="3" border="0">
	<tr>
		<th align="center" colspan="2"><?php echo ((isset($this->_rootref['L_MEDAL_INFORMATION'])) ? $this->_rootref['L_MEDAL_INFORMATION'] : ((isset($user->lang['MEDAL_INFORMATION'])) ? $user->lang['MEDAL_INFORMATION'] : '{ MEDAL_INFORMATION }')); ?></th>
	</tr>
	<tr class="row1">
		<td class="gen" align="center" valign="center" width="20%">
			<?php echo ((isset($this->_rootref['L_MEDALS_VIEW'])) ? $this->_rootref['L_MEDALS_VIEW'] : ((isset($user->lang['MEDALS_VIEW'])) ? $user->lang['MEDALS_VIEW'] : '{ MEDALS_VIEW }')); ?>:&nbsp;<b class="genmed"><?php echo (isset($this->_rootref['USER_MEDAL_COUNT'])) ? $this->_rootref['USER_MEDAL_COUNT'] : ''; ?></b><br />
			<?php $_medal_count = (isset($_switch_display_medal_val['medal'])) ? sizeof($_switch_display_medal_val['medal']) : 0;if ($_medal_count) {for ($_medal_i = 0; $_medal_i < $_medal_count; ++$_medal_i){$_medal_val = &$_switch_display_medal_val['medal'][$_medal_i]; ?>

			<?php echo $_medal_val['MEDAL_BUTTON']; ?>

			<?php }} ?>

		</td>
		<td class="gen" valign="center">
			<?php $_details_count = (isset($_switch_display_medal_val['details'])) ? sizeof($_switch_display_medal_val['details']) : 0;if ($_details_count) {for ($_details_i = 0; $_details_i < $_details_count; ++$_details_i){$_details_val = &$_switch_display_medal_val['details'][$_details_i]; ?>

			&nbsp;<?php echo $_details_val['MEDAL_IMAGE_SMALL']; ?>&nbsp;
			<?php }} ?>

		</td>
	</tr>
	</table>


	<div  style="width: 100%; overflow: hidden; display: none;" id="toggle_medal">
	<table class="tablebg" width="100%" cellspacing="1" cellpadding="3" border="0">
	<tr class="row1">
		<td class="cat" align="center" nowrap="nowrap"><h4><?php echo ((isset($this->_rootref['L_MEDAL'])) ? $this->_rootref['L_MEDAL'] : ((isset($user->lang['MEDAL'])) ? $user->lang['MEDAL'] : '{ MEDAL }')); ?></h4></th>
		<td class="cat" align="center" nowrap="nowrap"><h4><?php echo ((isset($this->_rootref['L_MEDAL_DETAIL'])) ? $this->_rootref['L_MEDAL_DETAIL'] : ((isset($user->lang['MEDAL_DETAIL'])) ? $user->lang['MEDAL_DETAIL'] : '{ MEDAL_DETAIL }')); ?></h4></th>
	</tr>
	<?php $_details_count = (isset($_switch_display_medal_val['details'])) ? sizeof($_switch_display_medal_val['details']) : 0;if ($_details_count) {for ($_details_i = 0; $_details_i < $_details_count; ++$_details_i){$_details_val = &$_switch_display_medal_val['details'][$_details_i]; ?>

		<tr <?php if (!($_details_val['S_ROW_COUNT'] & 1)  ) {  ?>class="row1"<?php } else { ?>class="row2"<?php } ?>>
			<td class="gen" align="center" nowrap="nowrap" width="20%">
				<?php if ($_details_val['ISMEDAL_CAT']) {  ?>

				<h3><?php echo $_details_val['MEDAL_CAT']; ?></h3>
				<?php } ?>

				<div><?php echo $_details_val['MEDAL_NAME']; ?></div>
				<div><?php echo $_details_val['MEDAL_IMAGE']; ?></div>
				<div><?php echo $_details_val['MEDAL_COUNT']; ?></div>
			</td>
			<td class="gen" valign="top" style="position: relative;">
				<p><b><?php echo ((isset($this->_rootref['L_MEDAL_DESCRIPTION'])) ? $this->_rootref['L_MEDAL_DESCRIPTION'] : ((isset($user->lang['MEDAL_DESCRIPTION'])) ? $user->lang['MEDAL_DESCRIPTION'] : '{ MEDAL_DESCRIPTION }')); ?>:</b> <?php echo $_details_val['MEDAL_DESCRIPTION']; ?></p>
				<br clear="all">
				<table width="100%" style="position: absolute; bottom: 0;"><?php echo $_details_val['MEDAL_ISSUE']; ?></table>
			</td>
		</tr>
	<?php }} ?>

	</table>
	</div>
	<?php }} ?>