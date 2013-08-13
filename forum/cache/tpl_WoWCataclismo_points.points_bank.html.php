<?php if (!defined('IN_PHPBB')) exit; $this->_tpl_include('overall_header.html'); ?><!-- $Id: points_bank.html 805 2012-02-12 10:31:14Z femu $ -->

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
					<td><a href="<?php echo (isset($this->_rootref['U_BANK'])) ? $this->_rootref['U_BANK'] : ''; ?>"><b><?php echo (isset($this->_rootref['BANK_NAME'])) ? $this->_rootref['BANK_NAME'] : ''; ?></b></a></td>
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
					<th><?php echo ((isset($this->_rootref['L_BANK_RICHEST_USER'])) ? $this->_rootref['L_BANK_RICHEST_USER'] : ((isset($user->lang['BANK_RICHEST_USER'])) ? $user->lang['BANK_RICHEST_USER'] : '{ BANK_RICHEST_USER }')); ?></th>
				</tr>
				<tr class="row1">
					<td>
						<?php if ($this->_rootref['S_DISPLAY_INDEX']) {  $_bank_count = (isset($this->_tpldata['bank'])) ? sizeof($this->_tpldata['bank']) : 0;if ($_bank_count) {for ($_bank_i = 0; $_bank_i < $_bank_count; ++$_bank_i){$_bank_val = &$this->_tpldata['bank'][$_bank_i]; ?>

							<span style="float:left; padding-left:5px; padding-top:2px;"><?php echo $_bank_val['USERNAME']; ?></span>
							<span style="float:right;padding-right:10px; padding-top:2px;"><?php echo $_bank_val['POINT']; ?></span><br style="clear:both" />
							<?php }} } else { ?>

						<?php echo ((isset($this->_rootref['L_POINTS_MOST_RICH_USERS_DISABLED'])) ? $this->_rootref['L_POINTS_MOST_RICH_USERS_DISABLED'] : ((isset($user->lang['POINTS_MOST_RICH_USERS_DISABLED'])) ? $user->lang['POINTS_MOST_RICH_USERS_DISABLED'] : '{ POINTS_MOST_RICH_USERS_DISABLED }')); ?>

						<?php } ?>

					</td>
				</tr>
			</table>

			<br clear="all" />

			<table class="tablebg" width="100%" cellspacing="1">
				<tr>
					<th><?php echo ((isset($this->_rootref['L_POINTS_DESCRIPTION'])) ? $this->_rootref['L_POINTS_DESCRIPTION'] : ((isset($user->lang['POINTS_DESCRIPTION'])) ? $user->lang['POINTS_DESCRIPTION'] : '{ POINTS_DESCRIPTION }')); ?></th>
				</tr>
				<tr class="row1">
					<td><?php echo ((isset($this->_rootref['L_BANK_DESCRIPTION'])) ? $this->_rootref['L_BANK_DESCRIPTION'] : ((isset($user->lang['BANK_DESCRIPTION'])) ? $user->lang['BANK_DESCRIPTION'] : '{ BANK_DESCRIPTION }')); ?></td>
				</tr>
			</table>

		</td>

		<td width="80%" valign="top">

			<table class="tablebg" width="100%" cellspacing="1">
				<tr>
					<th class="thHead" colspan="2"><?php echo (isset($this->_rootref['BANK_NAME'])) ? $this->_rootref['BANK_NAME'] : ''; ?></th>
				</tr>
				<?php if ($this->_rootref['S_USER_LOGGED_IN']) {  $_has_account_count = (isset($this->_tpldata['has_account'])) ? sizeof($this->_tpldata['has_account']) : 0;if ($_has_account_count) {for ($_has_account_i = 0; $_has_account_i < $_has_account_count; ++$_has_account_i){$_has_account_val = &$this->_tpldata['has_account'][$_has_account_i]; ?>

					<tr>
						<td class="row2" colspan="2"><span class="gen"><b><?php echo ((isset($this->_rootref['L_BANK_ACTIONS'])) ? $this->_rootref['L_BANK_ACTIONS'] : ((isset($user->lang['BANK_ACTIONS'])) ? $user->lang['BANK_ACTIONS'] : '{ BANK_ACTIONS }')); ?></b></span></td>
					</tr>
					<tr>
						<td class="row1"><span class="gen"><?php echo ((isset($this->_rootref['L_BANK_BUTTON_DEPOSIT'])) ? $this->_rootref['L_BANK_BUTTON_DEPOSIT'] : ((isset($user->lang['BANK_BUTTON_DEPOSIT'])) ? $user->lang['BANK_BUTTON_DEPOSIT'] : '{ BANK_BUTTON_DEPOSIT }')); ?></span></td>
						<td class="row2">
							<form id="bank_deposit" method="post" action="<?php echo (isset($this->_rootref['U_DEPOSIT'])) ? $this->_rootref['U_DEPOSIT'] : ''; ?>">
							<input type="submit" tabindex="2" class="liteoption" name="deposit" value="<?php echo ((isset($this->_rootref['L_BANK_BUTTON_DEPOSIT'])) ? $this->_rootref['L_BANK_BUTTON_DEPOSIT'] : ((isset($user->lang['BANK_BUTTON_DEPOSIT'])) ? $user->lang['BANK_BUTTON_DEPOSIT'] : '{ BANK_BUTTON_DEPOSIT }')); ?>" />
							<input type="text" tabindex="1" maxlength="10" class="post" title="<?php echo ((isset($this->_rootref['L_POINTS_NUMBER_FORMAT_EXPLAIN'])) ? $this->_rootref['L_POINTS_NUMBER_FORMAT_EXPLAIN'] : ((isset($user->lang['POINTS_NUMBER_FORMAT_EXPLAIN'])) ? $user->lang['POINTS_NUMBER_FORMAT_EXPLAIN'] : '{ POINTS_NUMBER_FORMAT_EXPLAIN }')); ?>" name="deposit" size="20" value="<?php echo (isset($this->_rootref['USER_GOLD'])) ? $this->_rootref['USER_GOLD'] : ''; ?>" /> <?php echo (isset($this->_rootref['POINTS_NAME'])) ? $this->_rootref['POINTS_NAME'] : ''; ?>

							<?php echo (isset($this->_rootref['S_FORM_TOKEN'])) ? $this->_rootref['S_FORM_TOKEN'] : ''; ?>

							</form>
						</td>
					</tr>
					<tr>
						<td class="row1"><span class="gen"><?php echo ((isset($this->_rootref['L_BANK_BUTTON_WITHDRAW'])) ? $this->_rootref['L_BANK_BUTTON_WITHDRAW'] : ((isset($user->lang['BANK_BUTTON_WITHDRAW'])) ? $user->lang['BANK_BUTTON_WITHDRAW'] : '{ BANK_BUTTON_WITHDRAW }')); ?></span></td>
						<td class="row2">
							<form id="bank_withdraw" method="post" action="<?php echo (isset($this->_rootref['U_WITHDRAW'])) ? $this->_rootref['U_WITHDRAW'] : ''; ?>">
							<input type="submit" tabindex="4" class="liteoption" name="withdraw" value="<?php echo ((isset($this->_rootref['L_BANK_BUTTON_WITHDRAW'])) ? $this->_rootref['L_BANK_BUTTON_WITHDRAW'] : ((isset($user->lang['BANK_BUTTON_WITHDRAW'])) ? $user->lang['BANK_BUTTON_WITHDRAW'] : '{ BANK_BUTTON_WITHDRAW }')); ?>" />
							<input type="text" tabindex="3" maxlength="10" class="post" title="<?php echo ((isset($this->_rootref['L_POINTS_NUMBER_FORMAT_EXPLAIN'])) ? $this->_rootref['L_POINTS_NUMBER_FORMAT_EXPLAIN'] : ((isset($user->lang['POINTS_NUMBER_FORMAT_EXPLAIN'])) ? $user->lang['POINTS_NUMBER_FORMAT_EXPLAIN'] : '{ POINTS_NUMBER_FORMAT_EXPLAIN }')); ?>" name="withdraw" size="20" value="<?php echo (isset($this->_rootref['USER_WITHDRAW'])) ? $this->_rootref['USER_WITHDRAW'] : ''; ?>" /> <?php echo (isset($this->_rootref['POINTS_NAME'])) ? $this->_rootref['POINTS_NAME'] : ''; ?>

							<?php echo (isset($this->_rootref['S_FORM_TOKEN'])) ? $this->_rootref['S_FORM_TOKEN'] : ''; ?>

							</form>
						</td>
					</tr>
					<?php }} $_no_account_count = (isset($this->_tpldata['no_account'])) ? sizeof($this->_tpldata['no_account']) : 0;if ($_no_account_count) {for ($_no_account_i = 0; $_no_account_i < $_no_account_count; ++$_no_account_i){$_no_account_val = &$this->_tpldata['no_account'][$_no_account_i]; ?>

					<tr>
						<td class="row1" colspan="2"><span class="gensmall"><?php echo $_no_account_val['USER_NO_ACCOUNT']; ?></span></td>
					</tr>
					<tr>
						<td class="row1" colspan="2"><span class="gen"><?php echo $_no_account_val['OPEN_ACCOUNT']; ?></span></td>
					</tr>
					<?php }} ?>

					<tr>
						<td class="row1" colspan="2"><br /></td>
					</tr>
					<tr>
						<td class="row3" colspan="2"><span class="gen"><b><?php echo ((isset($this->_rootref['L_BANK_INFO'])) ? $this->_rootref['L_BANK_INFO'] : ((isset($user->lang['BANK_INFO'])) ? $user->lang['BANK_INFO'] : '{ BANK_INFO }')); ?></b></span></td>
					</tr>
					<?php $_has_account_count = (isset($this->_tpldata['has_account'])) ? sizeof($this->_tpldata['has_account']) : 0;if ($_has_account_count) {for ($_has_account_i = 0; $_has_account_i < $_has_account_count; ++$_has_account_i){$_has_account_val = &$this->_tpldata['has_account'][$_has_account_i]; ?>

					<tr>
						<td class="row1"><span class="gen"><?php echo ((isset($this->_rootref['L_BANK_BALANCE'])) ? $this->_rootref['L_BANK_BALANCE'] : ((isset($user->lang['BANK_BALANCE'])) ? $user->lang['BANK_BALANCE'] : '{ BANK_BALANCE }')); ?></span></td><td class="row2"><span class="gen"><?php echo (isset($this->_rootref['USER_BALANCE'])) ? $this->_rootref['USER_BALANCE'] : ''; ?> <?php echo (isset($this->_rootref['POINTS_NAME'])) ? $this->_rootref['POINTS_NAME'] : ''; ?></span></td>
					</tr>
					<tr>
						<td class="row1" colspan="2"><br /></td>
					</tr>
					<?php }} } else { ?>

				<tr>
					<td class="row1" colspan="2"><span class="gensmall"><?php echo ((isset($this->_rootref['L_POINTS_BOT_GUEST'])) ? $this->_rootref['L_POINTS_BOT_GUEST'] : ((isset($user->lang['POINTS_BOT_GUEST'])) ? $user->lang['POINTS_BOT_GUEST'] : '{ POINTS_BOT_GUEST }')); ?></span></td>
				</tr>
				<?php } ?>

				<tr>
					<td class="row1"><span class="gen"><?php echo ((isset($this->_rootref['L_BANK_INTEREST_RATE'])) ? $this->_rootref['L_BANK_INTEREST_RATE'] : ((isset($user->lang['BANK_INTEREST_RATE'])) ? $user->lang['BANK_INTEREST_RATE'] : '{ BANK_INTEREST_RATE }')); ?></span></td><td class="row2"><span class="gen"><?php echo (isset($this->_rootref['BANK_INTEREST'])) ? $this->_rootref['BANK_INTEREST'] : ''; ?>%</span></td>
				</tr>
				<tr>
					<td class="row1"><span class="gen"><?php echo ((isset($this->_rootref['L_BANK_INTEREST_PERIOD'])) ? $this->_rootref['L_BANK_INTEREST_PERIOD'] : ((isset($user->lang['BANK_INTEREST_PERIOD'])) ? $user->lang['BANK_INTEREST_PERIOD'] : '{ BANK_INTEREST_PERIOD }')); ?></span></td><td class="row2"><span class="gen"><?php echo (isset($this->_rootref['BANK_INTEREST_PERIOD'])) ? $this->_rootref['BANK_INTEREST_PERIOD'] : ''; ?></span></td>
				</tr>
				<tr>
					<td class="row1" colspan="2"><br /></td>
				</tr>
				<?php $_switch_withdraw_fees_count = (isset($this->_tpldata['switch_withdraw_fees'])) ? sizeof($this->_tpldata['switch_withdraw_fees']) : 0;if ($_switch_withdraw_fees_count) {for ($_switch_withdraw_fees_i = 0; $_switch_withdraw_fees_i < $_switch_withdraw_fees_count; ++$_switch_withdraw_fees_i){$_switch_withdraw_fees_val = &$this->_tpldata['switch_withdraw_fees'][$_switch_withdraw_fees_i]; ?>

				<tr>
					<td class="row1"><span class="gen"><?php echo ((isset($this->_rootref['L_BANK_WITHDRAW_RATE'])) ? $this->_rootref['L_BANK_WITHDRAW_RATE'] : ((isset($user->lang['BANK_WITHDRAW_RATE'])) ? $user->lang['BANK_WITHDRAW_RATE'] : '{ BANK_WITHDRAW_RATE }')); ?></span></td><td class="row2"><span class="gen"><?php echo (isset($this->_rootref['BANK_FEES'])) ? $this->_rootref['BANK_FEES'] : ''; ?>%</span></td>
				</tr>
				<?php }} ?>

				<tr>
					<td class="row1"><span class="gen"><?php echo ((isset($this->_rootref['L_BANK_COST'])) ? $this->_rootref['L_BANK_COST'] : ((isset($user->lang['BANK_COST'])) ? $user->lang['BANK_COST'] : '{ BANK_COST }')); ?></span></td><td class="row2"><span class="gen"><?php echo (isset($this->_rootref['BANK_COST'])) ? $this->_rootref['BANK_COST'] : ''; ?> <?php echo (isset($this->_rootref['POINTS_NAME'])) ? $this->_rootref['POINTS_NAME'] : ''; ?></span></td>
				</tr>
				<tr>
					<td class="row1" colspan="2"><br /></td>
				</tr>
				<?php $_switch_min_depo_count = (isset($this->_tpldata['switch_min_depo'])) ? sizeof($this->_tpldata['switch_min_depo']) : 0;if ($_switch_min_depo_count) {for ($_switch_min_depo_i = 0; $_switch_min_depo_i < $_switch_min_depo_count; ++$_switch_min_depo_i){$_switch_min_depo_val = &$this->_tpldata['switch_min_depo'][$_switch_min_depo_i]; ?>

				<tr>
					<td class="row1"><span class="gen"><?php echo ((isset($this->_rootref['L_BANK_MIN_DEPO'])) ? $this->_rootref['L_BANK_MIN_DEPO'] : ((isset($user->lang['BANK_MIN_DEPO'])) ? $user->lang['BANK_MIN_DEPO'] : '{ BANK_MIN_DEPO }')); ?></span></td><td class="row2"><span class="gen"><?php echo (isset($this->_rootref['BANK_MIN_DEPO'])) ? $this->_rootref['BANK_MIN_DEPO'] : ''; ?> <?php echo (isset($this->_rootref['POINTS_NAME'])) ? $this->_rootref['POINTS_NAME'] : ''; ?></span></td>
				</tr>
				<?php }} $_switch_min_with_count = (isset($this->_tpldata['switch_min_with'])) ? sizeof($this->_tpldata['switch_min_with']) : 0;if ($_switch_min_with_count) {for ($_switch_min_with_i = 0; $_switch_min_with_i < $_switch_min_with_count; ++$_switch_min_with_i){$_switch_min_with_val = &$this->_tpldata['switch_min_with'][$_switch_min_with_i]; ?>

				<tr>
					<td class="row1"><span class="gen"><?php echo ((isset($this->_rootref['L_BANK_MIN_WITH'])) ? $this->_rootref['L_BANK_MIN_WITH'] : ((isset($user->lang['BANK_MIN_WITH'])) ? $user->lang['BANK_MIN_WITH'] : '{ BANK_MIN_WITH }')); ?></span></td><td class="row2"><span class="gen"><?php echo (isset($this->_rootref['BANK_MIN_WITH'])) ? $this->_rootref['BANK_MIN_WITH'] : ''; ?> <?php echo (isset($this->_rootref['POINTS_NAME'])) ? $this->_rootref['POINTS_NAME'] : ''; ?></span></td>
				</tr>
				<?php }} ?>

				<tr>
					<td class="row1"><span class="gen"><?php echo ((isset($this->_rootref['L_BANK_TOTAL_ACCOUNTS'])) ? $this->_rootref['L_BANK_TOTAL_ACCOUNTS'] : ((isset($user->lang['BANK_TOTAL_ACCOUNTS'])) ? $user->lang['BANK_TOTAL_ACCOUNTS'] : '{ BANK_TOTAL_ACCOUNTS }')); ?></span></td><td class="row2"><span class="gen"><?php echo (isset($this->_rootref['BANK_ACCOUNTS'])) ? $this->_rootref['BANK_ACCOUNTS'] : ''; ?></span></td>
				</tr>
				<tr>
					<td class="row1"><span class="gen"><?php echo ((isset($this->_rootref['L_BANK_HOLDING'])) ? $this->_rootref['L_BANK_HOLDING'] : ((isset($user->lang['BANK_HOLDING'])) ? $user->lang['BANK_HOLDING'] : '{ BANK_HOLDING }')); ?></span></td><td class="row2"><span class="gen"><?php echo (isset($this->_rootref['BANK_HOLDINGS'])) ? $this->_rootref['BANK_HOLDINGS'] : ''; ?> <?php echo (isset($this->_rootref['POINTS_NAME'])) ? $this->_rootref['POINTS_NAME'] : ''; ?></span></td>
				</tr>
			</table>

		</td>
	</tr>
</table>

<div class="copyright" style="text-align: center;"><i><?php echo ((isset($this->_rootref['L_POINTS_COPYRIGHT'])) ? $this->_rootref['L_POINTS_COPYRIGHT'] : ((isset($user->lang['POINTS_COPYRIGHT'])) ? $user->lang['POINTS_COPYRIGHT'] : '{ POINTS_COPYRIGHT }')); ?></i></div>
<br clear="all" />
<?php $this->_tpl_include('overall_footer.html'); ?>