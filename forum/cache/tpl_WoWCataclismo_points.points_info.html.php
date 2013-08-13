<?php if (!defined('IN_PHPBB')) exit; $this->_tpl_include('overall_header.html'); ?><!-- $Id: points_info.html 805 2012-02-12 10:31:14Z femu $ -->

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
					<td><a href="<?php echo (isset($this->_rootref['U_INFO'])) ? $this->_rootref['U_INFO'] : ''; ?>"><b><?php echo ((isset($this->_rootref['L_POINTS_INFO'])) ? $this->_rootref['L_POINTS_INFO'] : ((isset($user->lang['POINTS_INFO'])) ? $user->lang['POINTS_INFO'] : '{ POINTS_INFO }')); ?></b></a></td>
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
					<th><?php echo ((isset($this->_rootref['L_POINTS_DESCRIPTION'])) ? $this->_rootref['L_POINTS_DESCRIPTION'] : ((isset($user->lang['POINTS_DESCRIPTION'])) ? $user->lang['POINTS_DESCRIPTION'] : '{ POINTS_DESCRIPTION }')); ?></th>
				</tr>
				<tr class="row1">
					<td><?php echo (isset($this->_rootref['POINTS_INFO_DESCRIPTION'])) ? $this->_rootref['POINTS_INFO_DESCRIPTION'] : ''; ?></td>
				</tr>
			</table>

		</td>
		<td width="80%" valign="top">

			<table class="tablebg" width="100%" border="0" cellpadding="0" cellspacing="0">
				<tr>
					<th><?php echo ((isset($this->_rootref['L_INFO_GENERAL_INFORMATIONS'])) ? $this->_rootref['L_INFO_GENERAL_INFORMATIONS'] : ((isset($user->lang['INFO_GENERAL_INFORMATIONS'])) ? $user->lang['INFO_GENERAL_INFORMATIONS'] : '{ INFO_GENERAL_INFORMATIONS }')); ?></th>
				</tr>
			</table>

			<table class="tablebg" width="100%" cellspacing="1">
				<?php if ($this->_rootref['S_USER_LOGGED_IN']) {  ?>

				<tr>
					<td colspan="2" class="row1"><span class="gen"><?php echo ((isset($this->_rootref['L_POINTS_CASH_ON_HAND'])) ? $this->_rootref['L_POINTS_CASH_ON_HAND'] : ((isset($user->lang['POINTS_CASH_ON_HAND'])) ? $user->lang['POINTS_CASH_ON_HAND'] : '{ POINTS_CASH_ON_HAND }')); ?>:&nbsp;<?php echo (isset($this->_rootref['USER_POINTS'])) ? $this->_rootref['USER_POINTS'] : ''; ?> <?php echo (isset($this->_rootref['POINTS_NAME'])) ? $this->_rootref['POINTS_NAME'] : ''; ?></span></td>
				</tr>
				<?php } ?>

				<tr>
					<td colspan="2" class="row1">&nbsp;</td>
				</tr>
				<tr>
					<td width="50%" class="row1"><span class="gen"><?php echo ((isset($this->_rootref['L_INFO_ATTACH'])) ? $this->_rootref['L_INFO_ATTACH'] : ((isset($user->lang['INFO_ATTACH'])) ? $user->lang['INFO_ATTACH'] : '{ INFO_ATTACH }')); ?></span></td>
					<td width="50%" class="row2"><span class="gen"><?php echo (isset($this->_rootref['INFO_ATTACH'])) ? $this->_rootref['INFO_ATTACH'] : ''; ?></span></td>
				</tr>
				<tr>
					<td width="50%" class="row1"><span class="gen"><?php echo ((isset($this->_rootref['L_INFO_ADD_ATTACH'])) ? $this->_rootref['L_INFO_ADD_ATTACH'] : ((isset($user->lang['INFO_ADD_ATTACH'])) ? $user->lang['INFO_ADD_ATTACH'] : '{ INFO_ADD_ATTACH }')); ?></span></td>
					<td width="50%" class="row2"><span class="gen"><?php echo (isset($this->_rootref['INFO_ADD_ATTACH'])) ? $this->_rootref['INFO_ADD_ATTACH'] : ''; ?></span></td>
				</tr>
				<tr>
					<td width="50%" class="row1"><span class="gen"><?php echo ((isset($this->_rootref['L_INFO_POLL'])) ? $this->_rootref['L_INFO_POLL'] : ((isset($user->lang['INFO_POLL'])) ? $user->lang['INFO_POLL'] : '{ INFO_POLL }')); ?></span></td>
					<td width="50%" class="row2"><span class="gen"><?php echo (isset($this->_rootref['INFO_POLL'])) ? $this->_rootref['INFO_POLL'] : ''; ?></span></td>
				</tr>
				<tr>
					<td width="50%" class="row1"><span class="gen"><?php echo ((isset($this->_rootref['L_INFO_POLL_OPTION'])) ? $this->_rootref['L_INFO_POLL_OPTION'] : ((isset($user->lang['INFO_POLL_OPTION'])) ? $user->lang['INFO_POLL_OPTION'] : '{ INFO_POLL_OPTION }')); ?></span></td>
					<td width="50%" class="row2"><span class="gen"><?php echo (isset($this->_rootref['INFO_POLL_OPTION'])) ? $this->_rootref['INFO_POLL_OPTION'] : ''; ?></span></td>
				</tr>
				<tr>
					<td width="50%" class="row1"><span class="gen"><?php echo ((isset($this->_rootref['L_INFO_TOPIC_WORD'])) ? $this->_rootref['L_INFO_TOPIC_WORD'] : ((isset($user->lang['INFO_TOPIC_WORD'])) ? $user->lang['INFO_TOPIC_WORD'] : '{ INFO_TOPIC_WORD }')); ?></span></td>
					<td width="50%" class="row2"><span class="gen"><?php echo (isset($this->_rootref['INFO_TOPIC_WORD'])) ? $this->_rootref['INFO_TOPIC_WORD'] : ''; ?></span></td>
				</tr>
				<tr>
					<td width="50%" class="row1"><span class="gen"><?php echo ((isset($this->_rootref['L_INFO_TOPIC_CHARACTER'])) ? $this->_rootref['L_INFO_TOPIC_CHARACTER'] : ((isset($user->lang['INFO_TOPIC_CHARACTER'])) ? $user->lang['INFO_TOPIC_CHARACTER'] : '{ INFO_TOPIC_CHARACTER }')); ?></span></td>
					<td width="50%" class="row2"><span class="gen"><?php echo (isset($this->_rootref['INFO_TOPIC_CHARACTER'])) ? $this->_rootref['INFO_TOPIC_CHARACTER'] : ''; ?></span></td>
				</tr>
				<tr>
					<td width="50%" class="row1"><span class="gen"><?php echo ((isset($this->_rootref['L_INFO_POST_WORD'])) ? $this->_rootref['L_INFO_POST_WORD'] : ((isset($user->lang['INFO_POST_WORD'])) ? $user->lang['INFO_POST_WORD'] : '{ INFO_POST_WORD }')); ?></span></td>
					<td width="50%" class="row2"><span class="gen"><?php echo (isset($this->_rootref['INFO_POST_WORD'])) ? $this->_rootref['INFO_POST_WORD'] : ''; ?></span></td>
				</tr>
				<tr>
					<td width="50%" class="row1"><span class="gen"><?php echo ((isset($this->_rootref['L_INFO_POST_CHARACTER'])) ? $this->_rootref['L_INFO_POST_CHARACTER'] : ((isset($user->lang['INFO_POST_CHARACTER'])) ? $user->lang['INFO_POST_CHARACTER'] : '{ INFO_POST_CHARACTER }')); ?></span></td>
					<td width="50%" class="row2"><span class="gen"><?php echo (isset($this->_rootref['INFO_POST_CHARACTER'])) ? $this->_rootref['INFO_POST_CHARACTER'] : ''; ?></span></td>
				</tr>
				<tr>
					<td width="50%" class="row1"><span class="gen"><?php echo ((isset($this->_rootref['L_INFO_COST_WARNING'])) ? $this->_rootref['L_INFO_COST_WARNING'] : ((isset($user->lang['INFO_COST_WARNING'])) ? $user->lang['INFO_COST_WARNING'] : '{ INFO_COST_WARNING }')); ?></span></td>
					<td width="50%" class="row2"><span class="gen"><?php echo (isset($this->_rootref['INFO_COST_WARNING'])) ? $this->_rootref['INFO_COST_WARNING'] : ''; ?></span></td>
				</tr>
				<tr>
					<td width="50%" class="row1"><span class="gen"><?php echo ((isset($this->_rootref['L_INFO_REG_BONUS'])) ? $this->_rootref['L_INFO_REG_BONUS'] : ((isset($user->lang['INFO_REG_BONUS'])) ? $user->lang['INFO_REG_BONUS'] : '{ INFO_REG_BONUS }')); ?></span></td>
					<td width="50%" class="row2"><span class="gen"><?php echo (isset($this->_rootref['INFO_REG_BONUS'])) ? $this->_rootref['INFO_REG_BONUS'] : ''; ?></span></td>
				</tr>
			</table>

		</td>
	</tr>
</table>

<div class="copyright" style="text-align: center;"><i><?php echo ((isset($this->_rootref['L_POINTS_COPYRIGHT'])) ? $this->_rootref['L_POINTS_COPYRIGHT'] : ((isset($user->lang['POINTS_COPYRIGHT'])) ? $user->lang['POINTS_COPYRIGHT'] : '{ POINTS_COPYRIGHT }')); ?></i></div>
<br clear="all" />
<?php $this->_tpl_include('overall_footer.html'); ?>