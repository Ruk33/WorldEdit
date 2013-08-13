<?php if (!defined('IN_PHPBB')) exit; $this->_tpl_include('overall_header.html'); ?><!-- $Id: points_transfer_user.html 805 2012-02-12 10:31:14Z femu $ -->

<table width="100%" cellspacing="0" cellpadding="0" border="0">
	<tr>
		<td width="20%" valign="top">

			<table class="tablebg" width="100%" cellspacing="1">
				<tr>
					<th><?php echo ((isset($this->_rootref['L_POINTS_OPTIONS'])) ? $this->_rootref['L_POINTS_OPTIONS'] : ((isset($user->lang['POINTS_OPTIONS'])) ? $user->lang['POINTS_OPTIONS'] : '{ POINTS_OPTIONS }')); ?></th>
				</tr>
				<tr class="row1">
					<td><a href="<?php echo (isset($this->_rootref['U_POINTS'])) ? $this->_rootref['U_POINTS'] : ''; ?>"><?php echo ((isset($this->_rootref['L_POINTS_OVERVIEW'])) ? $this->_rootref['L_POINTS_OVERVIEW'] : ((isset($user->lang['POINTS_OVERVIEW'])) ? $user->lang['POINTS_OVERVIEW'] : '{ POINTS_OVERVIEW }')); ?></a></td>
				</tr>
				<tr class="row1">
					<td><a href="<?php echo (isset($this->_rootref['U_INFO'])) ? $this->_rootref['U_INFO'] : ''; ?>"><?php echo ((isset($this->_rootref['L_POINTS_INFO'])) ? $this->_rootref['L_POINTS_INFO'] : ((isset($user->lang['POINTS_INFO'])) ? $user->lang['POINTS_INFO'] : '{ POINTS_INFO }')); ?></a></td>
				</tr>
				<?php if ($this->_rootref['TRANSFER_ENABLE'] && $this->_rootref['U_USE_TRANSFER']) {  ?>

				<tr class="row1">
					<td><a href="<?php echo (isset($this->_rootref['U_TRANSFER_USER'])) ? $this->_rootref['U_TRANSFER_USER'] : ''; ?>"><b><?php echo ((isset($this->_rootref['L_POINTS_TRANSFER'])) ? $this->_rootref['L_POINTS_TRANSFER'] : ((isset($user->lang['POINTS_TRANSFER'])) ? $user->lang['POINTS_TRANSFER'] : '{ POINTS_TRANSFER }')); ?></b></a></td>
				</tr>
				<?php } if ($this->_rootref['LOGS_ENABLE'] && $this->_rootref['U_USE_LOGS']) {  ?>

				<tr class="row1">
					<td><a href="<?php echo (isset($this->_rootref['U_LOGS'])) ? $this->_rootref['U_LOGS'] : ''; ?>"><?php echo ((isset($this->_rootref['L_POINTS_LOGS'])) ? $this->_rootref['L_POINTS_LOGS'] : ((isset($user->lang['POINTS_LOGS'])) ? $user->lang['POINTS_LOGS'] : '{ POINTS_LOGS }')); ?></a></td>
				</tr>
				<?php } if ($this->_rootref['LOTTERY_ENABLE'] && $this->_rootref['U_USE_LOTTERY']) {  ?>

				<tr class="row1">
					<td><a href="<?php echo (isset($this->_rootref['U_LOTTERY'])) ? $this->_rootref['U_LOTTERY'] : ''; ?>"><?php echo (isset($this->_rootref['LOTTERY_NAME'])) ? $this->_rootref['LOTTERY_NAME'] : ''; ?></a></td>
				</tr>
				<?php } if ($this->_rootref['BANK_ENABLE'] && $this->_rootref['U_USE_BANK']) {  ?>

				<tr class="row1">
					<td><a href="<?php echo (isset($this->_rootref['U_BANK'])) ? $this->_rootref['U_BANK'] : ''; ?>"><?php echo (isset($this->_rootref['BANK_NAME'])) ? $this->_rootref['BANK_NAME'] : ''; ?></a></td>
				</tr>
				<?php } if ($this->_rootref['ROBBERY_ENABLE'] && $this->_rootref['U_USE_ROBBERY']) {  ?>

				<tr class="row1">
					<td><a href="<?php echo (isset($this->_rootref['U_ROBBERY'])) ? $this->_rootref['U_ROBBERY'] : ''; ?>"><?php echo ((isset($this->_rootref['L_POINTS_ROBBERY'])) ? $this->_rootref['L_POINTS_ROBBERY'] : ((isset($user->lang['POINTS_ROBBERY'])) ? $user->lang['POINTS_ROBBERY'] : '{ POINTS_ROBBERY }')); ?></a></td>
				</tr>
				<?php } ?>

			</table>

			<br clear="all" />

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

			<form id="post" action="<?php echo (isset($this->_rootref['U_ACTION'])) ? $this->_rootref['U_ACTION'] : ''; ?>" method="post">
			<table class="tablebg" width="100%" cellspacing="1">
			<tr>
				<th colspan="2" valign="middle"><?php echo ((isset($this->_rootref['L_POINTS_TRANSFER'])) ? $this->_rootref['L_POINTS_TRANSFER'] : ((isset($user->lang['POINTS_TRANSFER'])) ? $user->lang['POINTS_TRANSFER'] : '{ POINTS_TRANSFER }')); ?></th>
			</tr>
			<?php if ($this->_rootref['S_USER_LOGGED_IN']) {  ?>

			<tr>
				<td class="row1" colspan="2"><span class="gensmall"><i><?php echo ((isset($this->_rootref['L_POINTS_CASH_ON_HAND'])) ? $this->_rootref['L_POINTS_CASH_ON_HAND'] : ((isset($user->lang['POINTS_CASH_ON_HAND'])) ? $user->lang['POINTS_CASH_ON_HAND'] : '{ POINTS_CASH_ON_HAND }')); ?>:&nbsp;<?php echo (isset($this->_rootref['USER_POINTS'])) ? $this->_rootref['USER_POINTS'] : ''; ?> <?php echo (isset($this->_rootref['POINTS_NAME'])) ? $this->_rootref['POINTS_NAME'] : ''; ?></i></span></td>
			</tr>
			<tr>
				<td class="row1" width="40%"><b class="genmed"><?php echo ((isset($this->_rootref['L_TRANSFER_SET_USERNAME'])) ? $this->_rootref['L_TRANSFER_SET_USERNAME'] : ((isset($user->lang['TRANSFER_SET_USERNAME'])) ? $user->lang['TRANSFER_SET_USERNAME'] : '{ TRANSFER_SET_USERNAME }')); ?></b><br /></td>
				<td class="row2" align="center"><input type="text" tabindex="1" id="username" class="inputbox" name="username" value=""/><br /><a href="<?php echo (isset($this->_rootref['U_FIND_USERNAME'])) ? $this->_rootref['U_FIND_USERNAME'] : ''; ?>" onclick="find_username(this.href); return false;"><?php echo ((isset($this->_rootref['L_FIND_USERNAME'])) ? $this->_rootref['L_FIND_USERNAME'] : ((isset($user->lang['FIND_USERNAME'])) ? $user->lang['FIND_USERNAME'] : '{ FIND_USERNAME }')); ?></a></td>
			</tr>
			<tr>
				<td class="row1"><b class="genmed"><?php echo ((isset($this->_rootref['L_TRANSFER_AMOUNT'])) ? $this->_rootref['L_TRANSFER_AMOUNT'] : ((isset($user->lang['TRANSFER_AMOUNT'])) ? $user->lang['TRANSFER_AMOUNT'] : '{ TRANSFER_AMOUNT }')); ?>:</b></td>
				<td class="row2" align="center"><input class="post" type="text" tabindex="2" maxlength="10" title="<?php echo ((isset($this->_rootref['L_POINTS_NUMBER_FORMAT_EXPLAIN'])) ? $this->_rootref['L_POINTS_NUMBER_FORMAT_EXPLAIN'] : ((isset($user->lang['POINTS_NUMBER_FORMAT_EXPLAIN'])) ? $user->lang['POINTS_NUMBER_FORMAT_EXPLAIN'] : '{ POINTS_NUMBER_FORMAT_EXPLAIN }')); ?>" name="amount" value="" /> <?php echo (isset($this->_rootref['POINTS_NAME'])) ? $this->_rootref['POINTS_NAME'] : ''; ?><br /></td>
			</tr>
				<?php if ($this->_rootref['POINTS_COMMENTS'] && $this->_rootref['S_ALLOW_SEND_PM']) {  ?>

				<tr>
					<td class="row1"><b class="genmed"><?php echo ((isset($this->_rootref['L_TRANSFER_COMMENT'])) ? $this->_rootref['L_TRANSFER_COMMENT'] : ((isset($user->lang['TRANSFER_COMMENT'])) ? $user->lang['TRANSFER_COMMENT'] : '{ TRANSFER_COMMENT }')); ?>:</b><br /></td>
					<td class="row2" align="center"><textarea name="comment" cols="50" rows="3" class="inputbox autowidth" id="comment" tabindex="3" title=""></textarea><br /></td>
				</tr>
				<?php } ?>

			<tr>
				<td class="cat" colspan="2" align="center"><?php echo (isset($this->_rootref['S_HIDDEN_FIELDS'])) ? $this->_rootref['S_HIDDEN_FIELDS'] : ''; ?><input type="submit" name="submit" value="<?php echo ((isset($this->_rootref['L_SUBMIT'])) ? $this->_rootref['L_SUBMIT'] : ((isset($user->lang['SUBMIT'])) ? $user->lang['SUBMIT'] : '{ SUBMIT }')); ?>" class="btnmain" /><?php echo (isset($this->_rootref['S_FORM_TOKEN'])) ? $this->_rootref['S_FORM_TOKEN'] : ''; ?></td>
			</tr>
			<?php } else { ?>

			<tr>
				<td class="row1" colspan="2"><span class="gensmall"><?php echo ((isset($this->_rootref['L_POINTS_BOT_GUEST'])) ? $this->_rootref['L_POINTS_BOT_GUEST'] : ((isset($user->lang['POINTS_BOT_GUEST'])) ? $user->lang['POINTS_BOT_GUEST'] : '{ POINTS_BOT_GUEST }')); ?></span></td>
			</tr>
			<?php } ?>

			</table>
			</form>

		</td>
	</tr>
</table>

<div class="copyright" style="text-align: center;"><i><?php echo ((isset($this->_rootref['L_POINTS_COPYRIGHT'])) ? $this->_rootref['L_POINTS_COPYRIGHT'] : ((isset($user->lang['POINTS_COPYRIGHT'])) ? $user->lang['POINTS_COPYRIGHT'] : '{ POINTS_COPYRIGHT }')); ?></i></div>
<br clear="all" />
<?php $this->_tpl_include('overall_footer.html'); ?>