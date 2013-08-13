<?php if (!defined('IN_PHPBB')) exit; $this->_tpl_include('overall_header.html'); ?><!-- $Id: points_lottery.html 805 2012-02-12 10:31:14Z femu $ -->

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
					<td><a href="<?php echo (isset($this->_rootref['U_LOTTERY'])) ? $this->_rootref['U_LOTTERY'] : ''; ?>"><b><?php echo (isset($this->_rootref['LOTTERY_NAME'])) ? $this->_rootref['LOTTERY_NAME'] : ''; ?></b></a></td>
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
					<th><?php echo ((isset($this->_rootref['L_LOTTERY_TITLE_DESCRIPTION'])) ? $this->_rootref['L_LOTTERY_TITLE_DESCRIPTION'] : ((isset($user->lang['LOTTERY_TITLE_DESCRIPTION'])) ? $user->lang['LOTTERY_TITLE_DESCRIPTION'] : '{ LOTTERY_TITLE_DESCRIPTION }')); ?></th>
				</tr>
				<tr class="row1">
					<td><?php echo ((isset($this->_rootref['L_LOTTERY_BASE_AMOUNT'])) ? $this->_rootref['L_LOTTERY_BASE_AMOUNT'] : ((isset($user->lang['LOTTERY_BASE_AMOUNT'])) ? $user->lang['LOTTERY_BASE_AMOUNT'] : '{ LOTTERY_BASE_AMOUNT }')); ?></td>
				</tr>
			</table>

		</td>
		<td width="80%" valign="top">

			<table class="tablebg" width="100%" border="0" cellpadding="0" cellspacing="0">
				<tr>
					<th><?php echo (isset($this->_rootref['LOTTERY_NAME'])) ? $this->_rootref['LOTTERY_NAME'] : ''; if ($this->_rootref['S_VIEW_HISTORY']) {  ?>&nbsp;<?php echo ((isset($this->_rootref['L_LOTTERY_HISTORY'])) ? $this->_rootref['L_LOTTERY_HISTORY'] : ((isset($user->lang['LOTTERY_HISTORY'])) ? $user->lang['LOTTERY_HISTORY'] : '{ LOTTERY_HISTORY }')); } ?></th>
				</tr>
			</table>

			<?php if ($this->_rootref['S_VIEW_HISTORY']) {  ?>

			<table class="tablebg" width="100%" cellpadding="1" cellspacing="1" border="0">
				<tr>
					<th>#</th>
					<th><?php echo ((isset($this->_rootref['L_USERNAME'])) ? $this->_rootref['L_USERNAME'] : ((isset($user->lang['USERNAME'])) ? $user->lang['USERNAME'] : '{ USERNAME }')); ?></th>
					<th><?php echo ((isset($this->_rootref['L_LOTTERY_WINNINGS'])) ? $this->_rootref['L_LOTTERY_WINNINGS'] : ((isset($user->lang['LOTTERY_WINNINGS'])) ? $user->lang['LOTTERY_WINNINGS'] : '{ LOTTERY_WINNINGS }')); ?></th>
					<th><?php echo ((isset($this->_rootref['L_LOTTERY_DATE'])) ? $this->_rootref['L_LOTTERY_DATE'] : ((isset($user->lang['LOTTERY_DATE'])) ? $user->lang['LOTTERY_DATE'] : '{ LOTTERY_DATE }')); ?></th>
				</tr>
				<?php $_history_row_count = (isset($this->_tpldata['history_row'])) ? sizeof($this->_tpldata['history_row']) : 0;if ($_history_row_count) {for ($_history_row_i = 0; $_history_row_i < $_history_row_count; ++$_history_row_i){$_history_row_val = &$this->_tpldata['history_row'][$_history_row_i]; if (!($_history_row_val['S_ROW_COUNT'] & 1)  ) {  ?><tr class="row2"><?php } else { ?><tr class="row1"><?php } ?>

					<td align="center"><?php echo $_history_row_val['NUMBER']; ?></td>
					<td align="center"><?php echo $_history_row_val['WINNER_PROFILE']; ?></td>
					<td align="center"><?php if ($_history_row_val['WINNINGS'] == 0) {  } else { echo $_history_row_val['WINNINGS']; ?> <?php echo (isset($this->_rootref['CASH_NAME'])) ? $this->_rootref['CASH_NAME'] : ''; } ?></td>
					<td align="center"><?php echo $_history_row_val['DATE']; ?></td>
				</tr>
				<?php }} ?>

				<tr>
					<td class="cat" colspan="4" align="center"><input class="button1" type="button" onclick="window.location.href='<?php echo (isset($this->_rootref['U_BACK_TO_LOTTERY'])) ? $this->_rootref['U_BACK_TO_LOTTERY'] : ''; ?>'" value="<?php echo ((isset($this->_rootref['L_LOTTERY_BACK'])) ? $this->_rootref['L_LOTTERY_BACK'] : ((isset($user->lang['LOTTERY_BACK'])) ? $user->lang['LOTTERY_BACK'] : '{ LOTTERY_BACK }')); ?>" /></td>
				</tr>
			</table>

				<?php if ($this->_rootref['PAGINATION']) {  ?>

				<table width="100%" cellspacing="1">
					<tr>
						<td class="nav" valign="middle" nowrap="nowrap"><?php echo ((isset($this->_rootref['L_POINTS_LOG_TOTAL'])) ? $this->_rootref['L_POINTS_LOG_TOTAL'] : ((isset($user->lang['POINTS_LOG_TOTAL'])) ? $user->lang['POINTS_LOG_TOTAL'] : '{ POINTS_LOG_TOTAL }')); ?>: <?php echo ((isset($this->_rootref['L_TOTAL_ENTRIES'])) ? $this->_rootref['L_TOTAL_ENTRIES'] : ((isset($user->lang['TOTAL_ENTRIES'])) ? $user->lang['TOTAL_ENTRIES'] : '{ TOTAL_ENTRIES }')); ?> &bull; <?php echo (isset($this->_rootref['PAGE_NUMBER'])) ? $this->_rootref['PAGE_NUMBER'] : ''; ?><br /></td>
						<td class="gensmall" width="100%" align="<?php echo (isset($this->_rootref['S_CONTENT_FLOW_END'])) ? $this->_rootref['S_CONTENT_FLOW_END'] : ''; ?>" nowrap="nowrap"><?php $this->_tpl_include('pagination.html'); ?></td>
					</tr>
				</table>
				<?php } } else { ?>

			<table class="tablebg" width="100%" cellspacing="1">
				<?php if ($this->_rootref['S_USER_LOGGED_IN']) {  ?>

				<tr>
					<td width="50%" class="row1"><span class="gen"><?php echo ((isset($this->_rootref['L_POINTS_CASH_ON_HAND'])) ? $this->_rootref['L_POINTS_CASH_ON_HAND'] : ((isset($user->lang['POINTS_CASH_ON_HAND'])) ? $user->lang['POINTS_CASH_ON_HAND'] : '{ POINTS_CASH_ON_HAND }')); ?></span></td>
					<td width="50%" class="row2"><span class="gen"><?php echo (isset($this->_rootref['USER_POINTS'])) ? $this->_rootref['USER_POINTS'] : ''; ?> <?php echo (isset($this->_rootref['POINTS_NAME'])) ? $this->_rootref['POINTS_NAME'] : ''; ?></span></td>
				</tr>
				<?php } else { ?>

				<tr>
					<td class="row1" colspan="2"><span class="gensmall"><?php echo ((isset($this->_rootref['L_POINTS_BOT_GUEST'])) ? $this->_rootref['L_POINTS_BOT_GUEST'] : ((isset($user->lang['POINTS_BOT_GUEST'])) ? $user->lang['POINTS_BOT_GUEST'] : '{ POINTS_BOT_GUEST }')); ?></span></td>
				</tr>
				<?php } if ($this->_rootref['S_DRAWING_ENABLED'] && $this->_rootref['S_USER_LOGGED_IN']) {  ?>

				<tr>
					<td width="50%" class="row1"><span class="gen"><?php echo ((isset($this->_rootref['L_LOTTERY_VIEWER_TICKETS'])) ? $this->_rootref['L_LOTTERY_VIEWER_TICKETS'] : ((isset($user->lang['LOTTERY_VIEWER_TICKETS'])) ? $user->lang['LOTTERY_VIEWER_TICKETS'] : '{ LOTTERY_VIEWER_TICKETS }')); ?></span></td>
					<td width="50%" class="row2">
					<form id="lottery_ticket" method="post" action="<?php echo (isset($this->_rootref['U_ACTION'])) ? $this->_rootref['U_ACTION'] : ''; ?>">
					<span class="gen"><?php echo (isset($this->_rootref['VIEWER_TICKETS_TOTAL'])) ? $this->_rootref['VIEWER_TICKETS_TOTAL'] : ''; ?>&nbsp; &nbsp; &nbsp;</span>
						<?php if ($this->_rootref['S_PURCHASE_SINGLE']) {  ?>

							<input type="hidden" name="total_tickets" value="1" />
							<input type="submit" tabindex="2" name="purchase_ticket" value="<?php echo ((isset($this->_rootref['L_LOTTERY_PURCHASE_TICKET'])) ? $this->_rootref['L_LOTTERY_PURCHASE_TICKET'] : ((isset($user->lang['LOTTERY_PURCHASE_TICKET'])) ? $user->lang['LOTTERY_PURCHASE_TICKET'] : '{ LOTTERY_PURCHASE_TICKET }')); ?>" class="button2" />
							<?php echo (isset($this->_rootref['S_FORM_TOKEN'])) ? $this->_rootref['S_FORM_TOKEN'] : ''; ?>

						<?php } if ($this->_rootref['S_PURCHASE_MULTI']) {  ?>

							<input type="text" tabindex="1" name="total_tickets" value="1" maxlength="3" size="3" />
							<input type="submit" name="purchase_ticket" value="<?php echo ((isset($this->_rootref['L_LOTTERY_PURCHASE_TICKETS'])) ? $this->_rootref['L_LOTTERY_PURCHASE_TICKETS'] : ((isset($user->lang['LOTTERY_PURCHASE_TICKETS'])) ? $user->lang['LOTTERY_PURCHASE_TICKETS'] : '{ LOTTERY_PURCHASE_TICKETS }')); ?>" class="button2" />
							<?php echo (isset($this->_rootref['S_FORM_TOKEN'])) ? $this->_rootref['S_FORM_TOKEN'] : ''; ?>

						<?php } ?>

					</form>
					</td>
				</tr>
				<?php } if ($this->_rootref['S_LOTTERY_ENABLE']) {  ?>

				<tr>
					<td colspan="2" class="row1">&nbsp;</td>
				</tr>
				<tr>
					<td width="50%" class="row1"><span class="gen"><?php echo ((isset($this->_rootref['L_LOTTERY_TICKETS'])) ? $this->_rootref['L_LOTTERY_TICKETS'] : ((isset($user->lang['LOTTERY_TICKETS'])) ? $user->lang['LOTTERY_TICKETS'] : '{ LOTTERY_TICKETS }')); ?></span></td>
					<td width="50%" class="row2"><span class="gen"><?php echo (isset($this->_rootref['LOTTERY_TICKETS'])) ? $this->_rootref['LOTTERY_TICKETS'] : ''; ?></span></td>
				</tr>
				<tr>
					<td width="50%" class="row1"><span class="gen"><?php echo ((isset($this->_rootref['L_LOTTERY_PLAYERS'])) ? $this->_rootref['L_LOTTERY_PLAYERS'] : ((isset($user->lang['LOTTERY_PLAYERS'])) ? $user->lang['LOTTERY_PLAYERS'] : '{ LOTTERY_PLAYERS }')); ?></span></td>
					<td width="50%" class="row2"><span class="gen"><?php echo (isset($this->_rootref['LOTTERY_PLAYERS'])) ? $this->_rootref['LOTTERY_PLAYERS'] : ''; ?></span></td>
				</tr>
				<tr>
					<td width="50%" class="row1"><span class="gen"><?php echo ((isset($this->_rootref['L_LOTTERY_TICKET_COST'])) ? $this->_rootref['L_LOTTERY_TICKET_COST'] : ((isset($user->lang['LOTTERY_TICKET_COST'])) ? $user->lang['LOTTERY_TICKET_COST'] : '{ LOTTERY_TICKET_COST }')); ?></span></td>
					<td width="50%" class="row2"><span class="gen"><?php echo (isset($this->_rootref['TICKET_COST'])) ? $this->_rootref['TICKET_COST'] : ''; ?> <?php echo (isset($this->_rootref['POINTS_NAME'])) ? $this->_rootref['POINTS_NAME'] : ''; ?></span></td>
				</tr>
					<?php if ($this->_rootref['S_MULTI_TICKETS']) {  ?>

					<tr>
						<td width="50%" class="row1"><span class="gen"><?php echo ((isset($this->_rootref['L_LOTTERY_MAX_TICKETS'])) ? $this->_rootref['L_LOTTERY_MAX_TICKETS'] : ((isset($user->lang['LOTTERY_MAX_TICKETS'])) ? $user->lang['LOTTERY_MAX_TICKETS'] : '{ LOTTERY_MAX_TICKETS }')); ?></span></td>
						<td width="50%" class="row2"><span class="gen"><?php echo (isset($this->_rootref['MAX_TICKETS'])) ? $this->_rootref['MAX_TICKETS'] : ''; ?></span></td>
					</tr>
					<?php } ?>

				<tr>
					<td width="50%" class="row1"><span class="gen"><?php echo ((isset($this->_rootref['L_LOTTERY_JACKPOT'])) ? $this->_rootref['L_LOTTERY_JACKPOT'] : ((isset($user->lang['LOTTERY_JACKPOT'])) ? $user->lang['LOTTERY_JACKPOT'] : '{ LOTTERY_JACKPOT }')); ?></span></td>
					<td width="50%" class="row2"><span class="gen"><?php echo (isset($this->_rootref['JACKPOT'])) ? $this->_rootref['JACKPOT'] : ''; ?> <?php echo (isset($this->_rootref['POINTS_NAME'])) ? $this->_rootref['POINTS_NAME'] : ''; ?></span></td>
				</tr>
				<?php } if ($this->_rootref['S_DRAWING_ENABLED']) {  ?>

				<tr>
					<td width="50%" class="row1"><span class="gen"><?php echo ((isset($this->_rootref['L_LOTTERY_NEXT_DRAWING'])) ? $this->_rootref['L_LOTTERY_NEXT_DRAWING'] : ((isset($user->lang['LOTTERY_NEXT_DRAWING'])) ? $user->lang['LOTTERY_NEXT_DRAWING'] : '{ LOTTERY_NEXT_DRAWING }')); ?></span></td>
					<td width="50%" class="row2"><span class="gen"><?php echo (isset($this->_rootref['NEXT_DRAWING'])) ? $this->_rootref['NEXT_DRAWING'] : ''; ?></span></td>
				</tr>
				<?php } ?>

				<tr>
					<td width="50%" class="row1"><span class="gen"><?php echo ((isset($this->_rootref['L_LOTTERY_LAST_WINNER'])) ? $this->_rootref['L_LOTTERY_LAST_WINNER'] : ((isset($user->lang['LOTTERY_LAST_WINNER'])) ? $user->lang['LOTTERY_LAST_WINNER'] : '{ LOTTERY_LAST_WINNER }')); ?></span></td>
					<td width="50%" class="row2"><span class="gen"><b><?php echo (isset($this->_rootref['PREVIOUS_WINNER'])) ? $this->_rootref['PREVIOUS_WINNER'] : ''; ?></b></span></td>
				</tr>
				<tr>
					<td class="cat" colspan="2" align="center"><input class="button1" type="button" onclick="window.location.href='<?php echo (isset($this->_rootref['U_VIEW_HISTORY'])) ? $this->_rootref['U_VIEW_HISTORY'] : ''; ?>'" value="<?php echo ((isset($this->_rootref['L_LOTTERY_VIEW_HISTORY'])) ? $this->_rootref['L_LOTTERY_VIEW_HISTORY'] : ((isset($user->lang['LOTTERY_VIEW_HISTORY'])) ? $user->lang['LOTTERY_VIEW_HISTORY'] : '{ LOTTERY_VIEW_HISTORY }')); ?>" />&nbsp; &nbsp;<input class="button1" type="button" onclick="window.location.href='<?php echo (isset($this->_rootref['U_VIEW_SELF_HISTORY'])) ? $this->_rootref['U_VIEW_SELF_HISTORY'] : ''; ?>'" value="<?php echo ((isset($this->_rootref['L_LOTTERY_VIEW_SELF_HISTORY'])) ? $this->_rootref['L_LOTTERY_VIEW_SELF_HISTORY'] : ((isset($user->lang['LOTTERY_VIEW_SELF_HISTORY'])) ? $user->lang['LOTTERY_VIEW_SELF_HISTORY'] : '{ LOTTERY_VIEW_SELF_HISTORY }')); ?>" /></td>
				</tr>
			</table>
			<?php } ?>


		</td>
	</tr>
</table>

<div class="copyright" style="text-align: center;"><i><?php echo ((isset($this->_rootref['L_POINTS_COPYRIGHT'])) ? $this->_rootref['L_POINTS_COPYRIGHT'] : ((isset($user->lang['POINTS_COPYRIGHT'])) ? $user->lang['POINTS_COPYRIGHT'] : '{ POINTS_COPYRIGHT }')); ?></i></div>
<br clear="all" />
<?php $this->_tpl_include('overall_footer.html'); ?>