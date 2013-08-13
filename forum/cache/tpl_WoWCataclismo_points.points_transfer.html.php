<?php if (!defined('IN_PHPBB')) exit; $this->_tpl_include('overall_header.html'); ?><!-- $Id: points_transfer.html 805 2012-02-12 10:31:14Z femu $ -->

<table width="100%" cellspacing="0" cellpadding="0" border="0">
	<tr>
		<td width="20%" valign="top">

			<table class="tablebg" width="100%" cellspacing="1">
				<tr>
					<th><?php echo ((isset($this->_rootref['L_POINTS_DESCRIPTION'])) ? $this->_rootref['L_POINTS_DESCRIPTION'] : ((isset($user->lang['POINTS_DESCRIPTION'])) ? $user->lang['POINTS_DESCRIPTION'] : '{ POINTS_DESCRIPTION }')); ?></th>
				</tr>
				<tr class="row1">
					<td><?php echo ((isset($this->_rootref['L_TRANSFER_DESCRIPTION'])) ? $this->_rootref['L_TRANSFER_DESCRIPTION'] : ((isset($user->lang['TRANSFER_DESCRIPTION'])) ? $user->lang['TRANSFER_DESCRIPTION'] : '{ TRANSFER_DESCRIPTION }')); ?></td>
				</tr>
			</table>

		</td>
		<td width="80%" valign="top">

			<form id="transfer" method="post" action="<?php echo (isset($this->_rootref['U_ACTION'])) ? $this->_rootref['U_ACTION'] : ''; ?>">
			<table class="tablebg" width="100%" cellspacing="1">
				<tr>
					<th colspan="2" valign="middle"><?php echo ((isset($this->_rootref['L_POINTS_TRANSFER'])) ? $this->_rootref['L_POINTS_TRANSFER'] : ((isset($user->lang['POINTS_TRANSFER'])) ? $user->lang['POINTS_TRANSFER'] : '{ POINTS_TRANSFER }')); ?></th>
				</tr>
				<tr>
					<td class="row1" colspan="2"><span class="gensmall"><i><?php echo (isset($this->_rootref['U_TRANSFER_NAME'])) ? $this->_rootref['U_TRANSFER_NAME'] : ''; ?></i></span></td>
				</tr>
				<tr>
					<td class="row1" width="40%"><b class="genmed"><?php echo ((isset($this->_rootref['L_TRANSFER_AMOUNT'])) ? $this->_rootref['L_TRANSFER_AMOUNT'] : ((isset($user->lang['TRANSFER_AMOUNT'])) ? $user->lang['TRANSFER_AMOUNT'] : '{ TRANSFER_AMOUNT }')); ?>:</b></td>
					<td class="row2" align="center"><input class="post" tabindex="1" maxlength="10" type="text" title="<?php echo ((isset($this->_rootref['L_POINTS_NUMBER_FORMAT_EXPLAIN'])) ? $this->_rootref['L_POINTS_NUMBER_FORMAT_EXPLAIN'] : ((isset($user->lang['POINTS_NUMBER_FORMAT_EXPLAIN'])) ? $user->lang['POINTS_NUMBER_FORMAT_EXPLAIN'] : '{ POINTS_NUMBER_FORMAT_EXPLAIN }')); ?>" name="amount" value="" /> <?php echo (isset($this->_rootref['POINTS_NAME'])) ? $this->_rootref['POINTS_NAME'] : ''; ?></td>
				</tr>
				<?php if ($this->_rootref['POINTS_COMMENTS'] && $this->_rootref['S_ALLOW_SEND_PM']) {  ?>

				<tr>
					<td class="row1"><b class="genmed"><?php echo ((isset($this->_rootref['L_TRANSFER_COMMENT'])) ? $this->_rootref['L_TRANSFER_COMMENT'] : ((isset($user->lang['TRANSFER_COMMENT'])) ? $user->lang['TRANSFER_COMMENT'] : '{ TRANSFER_COMMENT }')); ?>:</b></td>
					<td class="row2" align="center"><textarea name="comment" cols="50" rows="3" class="inputbox autowidth" id="comment" tabindex="2" title=""></textarea><br /></td>
				</tr>
				<?php } ?>

				<tr>
					<td class="cat" colspan="2" align="center"><?php echo (isset($this->_rootref['S_HIDDEN_FIELDS'])) ? $this->_rootref['S_HIDDEN_FIELDS'] : ''; ?><input type="submit" tabindex="3" name="submit" value="<?php echo ((isset($this->_rootref['L_SUBMIT'])) ? $this->_rootref['L_SUBMIT'] : ((isset($user->lang['SUBMIT'])) ? $user->lang['SUBMIT'] : '{ SUBMIT }')); ?>" class="btnmain" /><?php echo (isset($this->_rootref['S_FORM_TOKEN'])) ? $this->_rootref['S_FORM_TOKEN'] : ''; ?></td>
				</tr>
			</table>
			</form>

		</td>
	</tr>
</table>

<div class="copyright" style="text-align: center;"><i><?php echo ((isset($this->_rootref['L_POINTS_COPYRIGHT'])) ? $this->_rootref['L_POINTS_COPYRIGHT'] : ((isset($user->lang['POINTS_COPYRIGHT'])) ? $user->lang['POINTS_COPYRIGHT'] : '{ POINTS_COPYRIGHT }')); ?></i></div>
<br clear="all" />
<?php $this->_tpl_include('overall_footer.html'); ?>