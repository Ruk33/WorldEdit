<?php if (!defined('IN_PHPBB')) exit; $this->_tpl_include('overall_header.html'); ?><!-- $Id: points_logs.html 805 2012-02-12 10:31:14Z femu $ -->

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
					<td><a href="<?php echo (isset($this->_rootref['U_LOGS'])) ? $this->_rootref['U_LOGS'] : ''; ?>"><b><?php echo ((isset($this->_rootref['L_POINTS_LOGS'])) ? $this->_rootref['L_POINTS_LOGS'] : ((isset($user->lang['POINTS_LOGS'])) ? $user->lang['POINTS_LOGS'] : '{ POINTS_LOGS }')); ?></b></a></td>
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
					<td><?php echo ((isset($this->_rootref['L_LOGS_DESCRIPTION'])) ? $this->_rootref['L_LOGS_DESCRIPTION'] : ((isset($user->lang['LOGS_DESCRIPTION'])) ? $user->lang['LOGS_DESCRIPTION'] : '{ LOGS_DESCRIPTION }')); ?></td>
				</tr>
			</table>

		</td>
		<td width="80%" valign="top">

			<table class="tablebg" width="100%" cellspacing="1">
				<tr>
					<th><?php echo ((isset($this->_rootref['L_POINTS_LOGS'])) ? $this->_rootref['L_POINTS_LOGS'] : ((isset($user->lang['POINTS_LOGS'])) ? $user->lang['POINTS_LOGS'] : '{ POINTS_LOGS }')); ?></th>
				</tr>
			</table>
			<table class="tablebg" cellspacing="1" width="100%" cellpadding="4" border="0">
				<thead>
				<tr>
					<th width="20%"><?php echo ((isset($this->_rootref['L_LOGS_DATE'])) ? $this->_rootref['L_LOGS_DATE'] : ((isset($user->lang['LOGS_DATE'])) ? $user->lang['LOGS_DATE'] : '{ LOGS_DATE }')); ?></th>
					<th width="10%"><?php echo ((isset($this->_rootref['L_LOGS_TYPE'])) ? $this->_rootref['L_LOGS_TYPE'] : ((isset($user->lang['LOGS_TYPE'])) ? $user->lang['LOGS_TYPE'] : '{ LOGS_TYPE }')); ?></th>
					<th width="15%"><?php echo ((isset($this->_rootref['L_LOGS_WHO'])) ? $this->_rootref['L_LOGS_WHO'] : ((isset($user->lang['LOGS_WHO'])) ? $user->lang['LOGS_WHO'] : '{ LOGS_WHO }')); ?></th>
					<th width="20%"><?php echo ((isset($this->_rootref['L_LOGS_TO'])) ? $this->_rootref['L_LOGS_TO'] : ((isset($user->lang['LOGS_TO'])) ? $user->lang['LOGS_TO'] : '{ LOGS_TO }')); ?></th>
					<th width="35%"><?php echo ((isset($this->_rootref['L_LOGS_COMMENT'])) ? $this->_rootref['L_LOGS_COMMENT'] : ((isset($user->lang['LOGS_COMMENT'])) ? $user->lang['LOGS_COMMENT'] : '{ LOGS_COMMENT }')); ?></th>
				</tr>
				</thead>
				<tbody>
				<?php $_logs_count = (isset($this->_tpldata['logs'])) ? sizeof($this->_tpldata['logs']) : 0;if ($_logs_count) {for ($_logs_i = 0; $_logs_i < $_logs_count; ++$_logs_i){$_logs_val = &$this->_tpldata['logs'][$_logs_i]; if (!($_logs_val['S_ROW_COUNT'] & 1)  ) {  ?><tr class="row2"><?php } else { ?><tr class="row1"><?php } ?>

					<td><?php echo $_logs_val['DATE']; ?></td>
					<td><?php echo $_logs_val['TYPE']; ?></td>
					<td><?php echo $_logs_val['WHO']; ?></td>
					<td><?php echo $_logs_val['TO']; ?></td>
					<td><?php echo $_logs_val['COMMENT']; ?></td>
				</tr>
				<?php }} else { ?>

				<tr class="row3">
					<td colspan="5"><b class="genmed"><?php echo ((isset($this->_rootref['L_LOGS_REASON_NOLOGS'])) ? $this->_rootref['L_LOGS_REASON_NOLOGS'] : ((isset($user->lang['LOGS_REASON_NOLOGS'])) ? $user->lang['LOGS_REASON_NOLOGS'] : '{ LOGS_REASON_NOLOGS }')); ?></b></td>
				</tr>
				<?php } ?>

				<tr class="row2">
					<td colspan="5">
						<form action="<?php echo (isset($this->_rootref['S_LOGS_ACTION'])) ? $this->_rootref['S_LOGS_ACTION'] : ''; ?>" method="post">
						<?php echo ((isset($this->_rootref['L_SORT_BY'])) ? $this->_rootref['L_SORT_BY'] : ((isset($user->lang['SORT_BY'])) ? $user->lang['SORT_BY'] : '{ SORT_BY }')); ?> <?php echo (isset($this->_rootref['S_SELECT_SORT_KEY'])) ? $this->_rootref['S_SELECT_SORT_KEY'] : ''; ?> <?php echo (isset($this->_rootref['S_SELECT_SORT_DIR'])) ? $this->_rootref['S_SELECT_SORT_DIR'] : ''; ?> <input type="submit" name="sort" value="<?php echo ((isset($this->_rootref['L_GO'])) ? $this->_rootref['L_GO'] : ((isset($user->lang['GO'])) ? $user->lang['GO'] : '{ GO }')); ?>" class="button2" />
						</form>
					</td>
				</tr>
				</tbody>
			</table>

			<?php if ($this->_rootref['PAGINATION']) {  ?>

			<table width="100%" cellspacing="1">
				<tr>
					<td class="nav" valign="middle" nowrap="nowrap"><?php echo ((isset($this->_rootref['L_POINTS_LOG_TOTAL'])) ? $this->_rootref['L_POINTS_LOG_TOTAL'] : ((isset($user->lang['POINTS_LOG_TOTAL'])) ? $user->lang['POINTS_LOG_TOTAL'] : '{ POINTS_LOG_TOTAL }')); ?>: <?php echo ((isset($this->_rootref['L_TOTAL_ENTRIES'])) ? $this->_rootref['L_TOTAL_ENTRIES'] : ((isset($user->lang['TOTAL_ENTRIES'])) ? $user->lang['TOTAL_ENTRIES'] : '{ TOTAL_ENTRIES }')); ?> &bull; <?php echo (isset($this->_rootref['PAGE_NUMBER'])) ? $this->_rootref['PAGE_NUMBER'] : ''; ?><br /></td>
					<td class="gensmall" width="100%" align="<?php echo (isset($this->_rootref['S_CONTENT_FLOW_END'])) ? $this->_rootref['S_CONTENT_FLOW_END'] : ''; ?>" nowrap="nowrap"><?php $this->_tpl_include('pagination.html'); ?></td>
				</tr>
			</table>
			<?php } ?>


		</td>
	</tr>
</table>

<div class="copyright" style="text-align: center;"><i><?php echo ((isset($this->_rootref['L_POINTS_COPYRIGHT'])) ? $this->_rootref['L_POINTS_COPYRIGHT'] : ((isset($user->lang['POINTS_COPYRIGHT'])) ? $user->lang['POINTS_COPYRIGHT'] : '{ POINTS_COPYRIGHT }')); ?></i></div>
<br clear="all" />

<?php $this->_tpl_include('overall_footer.html'); ?>