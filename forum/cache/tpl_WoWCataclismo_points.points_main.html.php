<?php if (!defined('IN_PHPBB')) exit; $this->_tpl_include('overall_header.html'); ?><!-- $Id: points_main.html 805 2012-02-12 10:31:14Z femu $ -->

<table width="100%" cellspacing="0" cellpadding="0" border="0">
	<tr>
		<td width="20%" valign="top">

			<table class="tablebg" width="100%" cellspacing="1">
				<tr>
					<th><?php echo ((isset($this->_rootref['L_POINTS_OPTIONS'])) ? $this->_rootref['L_POINTS_OPTIONS'] : ((isset($user->lang['POINTS_OPTIONS'])) ? $user->lang['POINTS_OPTIONS'] : '{ POINTS_OPTIONS }')); ?></th>
				</tr>
				<tr class="row1">
					<td><a href="<?php echo (isset($this->_rootref['U_POINTS'])) ? $this->_rootref['U_POINTS'] : ''; ?>"><b><?php echo ((isset($this->_rootref['L_POINTS_OVERVIEW'])) ? $this->_rootref['L_POINTS_OVERVIEW'] : ((isset($user->lang['POINTS_OVERVIEW'])) ? $user->lang['POINTS_OVERVIEW'] : '{ POINTS_OVERVIEW }')); ?></b></a></td>
				</tr>
				<tr class="row1">
					<td><a href="<?php echo (isset($this->_rootref['U_INFO'])) ? $this->_rootref['U_INFO'] : ''; ?>"><?php echo ((isset($this->_rootref['L_POINTS_INFO'])) ? $this->_rootref['L_POINTS_INFO'] : ((isset($user->lang['POINTS_INFO'])) ? $user->lang['POINTS_INFO'] : '{ POINTS_INFO }')); ?></a></td>
				</tr>
				<?php if ($this->_rootref['TRANSFER_ENABLE'] && $this->_rootref['U_USE_TRANSFER']) {  ?>

				<tr class="row1">
					<td><a href="<?php echo (isset($this->_rootref['U_TRANSFER_USER'])) ? $this->_rootref['U_TRANSFER_USER'] : ''; ?>"><?php echo ((isset($this->_rootref['L_POINTS_TRANSFER'])) ? $this->_rootref['L_POINTS_TRANSFER'] : ((isset($user->lang['POINTS_TRANSFER'])) ? $user->lang['POINTS_TRANSFER'] : '{ POINTS_TRANSFER }')); ?></a></td>
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
					<th><?php echo ((isset($this->_rootref['L_POINTS_MOST_RICH_CASH_USERS'])) ? $this->_rootref['L_POINTS_MOST_RICH_CASH_USERS'] : ((isset($user->lang['POINTS_MOST_RICH_CASH_USERS'])) ? $user->lang['POINTS_MOST_RICH_CASH_USERS'] : '{ POINTS_MOST_RICH_CASH_USERS }')); ?></th>
				</tr>
				<tr class="row1">
					<td>
						<?php if ($this->_rootref['S_DISPLAY_INDEX']) {  $_points_count = (isset($this->_tpldata['points'])) ? sizeof($this->_tpldata['points']) : 0;if ($_points_count) {for ($_points_i = 0; $_points_i < $_points_count; ++$_points_i){$_points_val = &$this->_tpldata['points'][$_points_i]; ?>

							<span style="float:left; padding-left:5px; padding-top:2px;"><?php echo $_points_val['USERNAME']; ?></span>
							<span style="float:right;padding-right:10px; padding-top:2px;"><?php echo $_points_val['POINT']; ?></span><br style="clear:both" />
							<?php }} } else { ?>

						<?php echo ((isset($this->_rootref['L_POINTS_MOST_RICH_USERS_DISABLED'])) ? $this->_rootref['L_POINTS_MOST_RICH_USERS_DISABLED'] : ((isset($user->lang['POINTS_MOST_RICH_USERS_DISABLED'])) ? $user->lang['POINTS_MOST_RICH_USERS_DISABLED'] : '{ POINTS_MOST_RICH_USERS_DISABLED }')); ?>

						<?php } ?>

					</td>
				</tr>
			</table>

		</td>
		<td width="80%" valign="top">

			<table class="tablebg" width="100%" cellspacing="1">
				<tr>
					<th><?php echo ((isset($this->_rootref['L_POINTS_OVERVIEW'])) ? $this->_rootref['L_POINTS_OVERVIEW'] : ((isset($user->lang['POINTS_OVERVIEW'])) ? $user->lang['POINTS_OVERVIEW'] : '{ POINTS_OVERVIEW }')); ?></th>
				</tr>
				<tr class="row1">
					<td align="center"><br /><br />
					<p><?php echo ((isset($this->_rootref['L_MAIN_HELLO_USERNAME'])) ? $this->_rootref['L_MAIN_HELLO_USERNAME'] : ((isset($user->lang['MAIN_HELLO_USERNAME'])) ? $user->lang['MAIN_HELLO_USERNAME'] : '{ MAIN_HELLO_USERNAME }')); ?></p><br />
					<?php if ($this->_rootref['S_USER_LOGGED_IN']) {  ?>

					<p><?php echo ((isset($this->_rootref['L_MAIN_ON_HAND'])) ? $this->_rootref['L_MAIN_ON_HAND'] : ((isset($user->lang['MAIN_ON_HAND'])) ? $user->lang['MAIN_ON_HAND'] : '{ MAIN_ON_HAND }')); ?></p><br />
						<?php $_has_bank_account_count = (isset($this->_tpldata['has_bank_account'])) ? sizeof($this->_tpldata['has_bank_account']) : 0;if ($_has_bank_account_count) {for ($_has_bank_account_i = 0; $_has_bank_account_i < $_has_bank_account_count; ++$_has_bank_account_i){$_has_bank_account_val = &$this->_tpldata['has_bank_account'][$_has_bank_account_i]; ?>

						<p><?php echo $_has_bank_account_val['L_MAIN_BANK_HAVE']; ?></p><br />
						<?php }} ?>

					<p><?php echo ((isset($this->_rootref['L_MAIN_LOTTERY_TICKETS'])) ? $this->_rootref['L_MAIN_LOTTERY_TICKETS'] : ((isset($user->lang['MAIN_LOTTERY_TICKETS'])) ? $user->lang['MAIN_LOTTERY_TICKETS'] : '{ MAIN_LOTTERY_TICKETS }')); ?></p><br /><br />
					<?php } ?>

					</td>
				</tr>
				<?php if (! $this->_rootref['U_USE_POINTS']) {  ?>

				<tr class="row1">
					<td align="center"><br /><span style="color: red;"><b><?php echo ((isset($this->_rootref['L_MAIN_USERNAME_LOCKED'])) ? $this->_rootref['L_MAIN_USERNAME_LOCKED'] : ((isset($user->lang['MAIN_USERNAME_LOCKED'])) ? $user->lang['MAIN_USERNAME_LOCKED'] : '{ MAIN_USERNAME_LOCKED }')); ?></b></span></td>
				</tr>
				<?php } ?>

			</table>

		</td>
	</tr>
</table>

<div class="copyright" style="text-align: center;"><i><?php echo ((isset($this->_rootref['L_POINTS_COPYRIGHT'])) ? $this->_rootref['L_POINTS_COPYRIGHT'] : ((isset($user->lang['POINTS_COPYRIGHT'])) ? $user->lang['POINTS_COPYRIGHT'] : '{ POINTS_COPYRIGHT }')); ?></i></div>
<br clear="all" />

<?php $this->_tpl_include('overall_footer.html'); ?>