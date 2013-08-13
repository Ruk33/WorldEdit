<?php if (!defined('IN_PHPBB')) exit; $this->_tpl_include('overall_header.html'); ?>


<p>

<?php if ($this->_rootref['S_MEDAL_VIEW']) {  ?>

		<table class="tablebg" width="100%" cellspacing="1">
			<thead>
				<tr>
					<th align="center" width="150"><?php echo ((isset($this->_rootref['L_MEDALS_VIEW'])) ? $this->_rootref['L_MEDALS_VIEW'] : ((isset($user->lang['MEDALS_VIEW'])) ? $user->lang['MEDALS_VIEW'] : '{ MEDALS_VIEW }')); ?></th>
					<th align="center"><?php echo ((isset($this->_rootref['L_MEDAL_DESC'])) ? $this->_rootref['L_MEDAL_DESC'] : ((isset($user->lang['MEDAL_DESC'])) ? $user->lang['MEDAL_DESC'] : '{ MEDAL_DESC }')); ?></th>
					<th align="center" width="280"><?php echo ((isset($this->_rootref['L_MEDAL_AWARDED'])) ? $this->_rootref['L_MEDAL_AWARDED'] : ((isset($user->lang['MEDAL_AWARDED'])) ? $user->lang['MEDAL_AWARDED'] : '{ MEDAL_AWARDED }')); ?></th>
					<?php if ($this->_rootref['S_CAN_AWARD_MEDALS']) {  ?><th align="center" width="100"><?php echo ((isset($this->_rootref['L_MEDAL_MOD'])) ? $this->_rootref['L_MEDAL_MOD'] : ((isset($user->lang['MEDAL_MOD'])) ? $user->lang['MEDAL_MOD'] : '{ MEDAL_MOD }')); ?></th><?php } ?>

				</tr>
			</thead>
			<tbody>
				<?php $_medalrow_count = (isset($this->_tpldata['medalrow'])) ? sizeof($this->_tpldata['medalrow']) : 0;if ($_medalrow_count) {for ($_medalrow_i = 0; $_medalrow_i < $_medalrow_count; ++$_medalrow_i){$_medalrow_val = &$this->_tpldata['medalrow'][$_medalrow_i]; if ($_medalrow_val['IS_CAT']) {  ?>

				<tr class="cat">
					<td colspan="<?php if ($this->_rootref['S_CAN_AWARD_MEDALS']) {  ?>4<?php } else { ?>3<?php } ?>"><h4><?php echo $_medalrow_val['MEDAL_CAT']; ?></h4></td>
				</tr>
				<?php } else { ?>

				<tr class="row1">
					<td align="center"><?php echo $_medalrow_val['MEDAL_NAME']; ?><br /><?php echo $_medalrow_val['MEDAL_IMG']; ?></td>
					<td><?php echo $_medalrow_val['MEDAL_DESC']; ?></td>
					<td align="center"><?php echo $_medalrow_val['MEDAL_AWARDED']; ?></td>
					<?php if ($this->_rootref['S_CAN_AWARD_MEDALS']) {  ?><td align="center"><a href="<?php echo $_medalrow_val['U_MEDAL_AWARD_PANEL']; ?>"><?php echo ((isset($this->_rootref['L_MEDAL_AWARD_PANEL'])) ? $this->_rootref['L_MEDAL_AWARD_PANEL'] : ((isset($user->lang['MEDAL_AWARD_PANEL'])) ? $user->lang['MEDAL_AWARD_PANEL'] : '{ MEDAL_AWARD_PANEL }')); ?></a><?php if ($_medalrow_val['NOMINATIONS']) {  ?><hr /><a href="<?php echo $_medalrow_val['U_MEDAL_NCP']; ?>"><?php echo ((isset($this->_rootref['L_NOMINATE_MEDAL'])) ? $this->_rootref['L_NOMINATE_MEDAL'] : ((isset($user->lang['NOMINATE_MEDAL'])) ? $user->lang['NOMINATE_MEDAL'] : '{ NOMINATE_MEDAL }')); ?></a><?php } ?></td><?php } ?>

				</tr>
				<?php } }} if ($this->_rootref['NO_MEDAL']) {  ?>

				<tr class="cat">
					<td colspan="<?php if ($this->_rootref['S_CAN_AWARD_MEDALS']) {  ?>4<?php } else { ?>3<?php } ?>"><?php echo ((isset($this->_rootref['L_NO_MEDALS'])) ? $this->_rootref['L_NO_MEDALS'] : ((isset($user->lang['NO_MEDALS'])) ? $user->lang['NO_MEDALS'] : '{ NO_MEDALS }')); ?></td>
				</tr>
				<?php } ?>

			</tbody>
		</table>
<?php } if (( $this->_rootref['S_MEDAL_NOM'] || $this->_rootref['S_MEDAL_AWARD'] ) && $this->_rootref['S_CAN_AWARD_MEDALS']) {  ?>

		<table class="tablebg" width="100%" cellpadding="1">
			<thead>
				<tr>
					<th align="center" colspan=2><?php echo ((isset($this->_rootref['L_MEDAL_INFO'])) ? $this->_rootref['L_MEDAL_INFO'] : ((isset($user->lang['MEDAL_INFO'])) ? $user->lang['MEDAL_INFO'] : '{ MEDAL_INFO }')); ?></th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td class="row1" width="300"><b><?php echo ((isset($this->_rootref['L_MEDAL_NAME'])) ? $this->_rootref['L_MEDAL_NAME'] : ((isset($user->lang['MEDAL_NAME'])) ? $user->lang['MEDAL_NAME'] : '{ MEDAL_NAME }')); ?></b></td>
					<td class="row2"><?php echo (isset($this->_rootref['MEDAL_NAME'])) ? $this->_rootref['MEDAL_NAME'] : ''; ?></td>
				</tr>
				<tr>
					<td class="row1" width="300"><b><?php echo ((isset($this->_rootref['L_MEDAL_DESC'])) ? $this->_rootref['L_MEDAL_DESC'] : ((isset($user->lang['MEDAL_DESC'])) ? $user->lang['MEDAL_DESC'] : '{ MEDAL_DESC }')); ?></b></td>
					<td class="row2"><?php echo (isset($this->_rootref['MEDAL_DESC'])) ? $this->_rootref['MEDAL_DESC'] : ''; ?></td>
				</tr>
				<tr>
					<td class="row1" width="300"><b><?php echo ((isset($this->_rootref['L_MEDAL_IMG'])) ? $this->_rootref['L_MEDAL_IMG'] : ((isset($user->lang['MEDAL_IMG'])) ? $user->lang['MEDAL_IMG'] : '{ MEDAL_IMG }')); ?></b></td>
					<td class="row2"><?php echo (isset($this->_rootref['MEDAL_IMG'])) ? $this->_rootref['MEDAL_IMG'] : ''; ?></td>
				</tr>
				<?php if ($this->_rootref['S_MEDAL_AWARD']) {  ?>

				<tr>
					<td class="row1" width="300"><b><?php echo ((isset($this->_rootref['L_MEDAL_AWARDED'])) ? $this->_rootref['L_MEDAL_AWARDED'] : ((isset($user->lang['MEDAL_AWARDED'])) ? $user->lang['MEDAL_AWARDED'] : '{ MEDAL_AWARDED }')); ?></b><?php echo ((isset($this->_rootref['L_MEDAL_AWARDED_EXPLAIN'])) ? $this->_rootref['L_MEDAL_AWARDED_EXPLAIN'] : ((isset($user->lang['MEDAL_AWARDED_EXPLAIN'])) ? $user->lang['MEDAL_AWARDED_EXPLAIN'] : '{ MEDAL_AWARDED_EXPLAIN }')); ?></td>
					<td class="row2"><?php echo (isset($this->_rootref['MEDAL_AWARDED'])) ? $this->_rootref['MEDAL_AWARDED'] : ''; ?></td>
				</tr>
				<?php } ?>

			</tbody>
		</table>
<?php } if ($this->_rootref['S_MEDAL_AWARD'] && $this->_rootref['S_CAN_AWARD_MEDALS']) {  ?>

		<br clear="all" />
		<form method="post" action="<?php echo (isset($this->_rootref['U_MEDALS_ACTION'])) ? $this->_rootref['U_MEDALS_ACTION'] : ''; ?>" name="post">
		<table width="100%" class="tablebg" id="medal_add" cellpadding="1">
			<thead>
				<tr>
					<th align="center" colspan=2><?php echo ((isset($this->_rootref['L_AWARD_MEDAL'])) ? $this->_rootref['L_AWARD_MEDAL'] : ((isset($user->lang['AWARD_MEDAL'])) ? $user->lang['AWARD_MEDAL'] : '{ AWARD_MEDAL }')); ?></th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td class="row1" width="50%"><b><?php echo ((isset($this->_rootref['L_USERNAME'])) ? $this->_rootref['L_USERNAME'] : ((isset($user->lang['USERNAME'])) ? $user->lang['USERNAME'] : '{ USERNAME }')); ?>:</b><?php echo ((isset($this->_rootref['L_MEDAL_AWARD_USER_EXPLAIN'])) ? $this->_rootref['L_MEDAL_AWARD_USER_EXPLAIN'] : ((isset($user->lang['MEDAL_AWARD_USER_EXPLAIN'])) ? $user->lang['MEDAL_AWARD_USER_EXPLAIN'] : '{ MEDAL_AWARD_USER_EXPLAIN }')); ?></td>
					<td class="row2">
						<textarea name="add" id="add" rows="3" cols="50" wrap="physical" tabindex="1" class="inputbox"><?php echo (isset($this->_rootref['USERNAMES'])) ? $this->_rootref['USERNAMES'] : ''; ?></textarea>
						<br />
						<strong><a href="<?php echo (isset($this->_rootref['U_FIND_USERNAME'])) ? $this->_rootref['U_FIND_USERNAME'] : ''; ?>" onclick="find_username(this.href); return false;"><?php echo ((isset($this->_rootref['L_FIND_USERNAME'])) ? $this->_rootref['L_FIND_USERNAME'] : ((isset($user->lang['FIND_USERNAME'])) ? $user->lang['FIND_USERNAME'] : '{ FIND_USERNAME }')); ?></a></strong>
					</td>
				</tr>
				<tr>
					<td class="row1" width="50%"><b><?php echo ((isset($this->_rootref['L_MEDAL_AWARD_REASON'])) ? $this->_rootref['L_MEDAL_AWARD_REASON'] : ((isset($user->lang['MEDAL_AWARD_REASON'])) ? $user->lang['MEDAL_AWARD_REASON'] : '{ MEDAL_AWARD_REASON }')); ?>:</b><?php echo ((isset($this->_rootref['L_MEDAL_AWARD_REASON_EXPLAIN'])) ? $this->_rootref['L_MEDAL_AWARD_REASON_EXPLAIN'] : ((isset($user->lang['MEDAL_AWARD_REASON_EXPLAIN'])) ? $user->lang['MEDAL_AWARD_REASON_EXPLAIN'] : '{ MEDAL_AWARD_REASON_EXPLAIN }')); ?></td>
					<td class="row2">
						<textarea id="message" name="message" rows="5" cols="50" wrap="physical" tabindex="1" title="reason" class="inputbox"></textarea>
					</td>
				</tr>
				<tr>
					<td class="cat" align="center" colspan=2>
						<input class="btnmain" type="submit" accesskey="s" tabindex="1" name="submit" value="<?php echo ((isset($this->_rootref['L_SUBMIT'])) ? $this->_rootref['L_SUBMIT'] : ((isset($user->lang['SUBMIT'])) ? $user->lang['SUBMIT'] : '{ SUBMIT }')); ?>" class="button2" />&nbsp;
					</td>
				</tr>
			</tbody>
		</table>
		</form>
<?php } if ($this->_rootref['S_MEDAL_NOM'] && $this->_rootref['S_CAN_AWARD_MEDALS']) {  ?>

		<br clear="all" />
		<table width="100%" class="tablebg" id="medal_add" cellpadding="1">
			<thead>
				<tr>
					<th align="center" colspan=3><?php echo ((isset($this->_rootref['L_NOMINATED_TITLE'])) ? $this->_rootref['L_NOMINATED_TITLE'] : ((isset($user->lang['NOMINATED_TITLE'])) ? $user->lang['NOMINATED_TITLE'] : '{ NOMINATED_TITLE }')); ?></th>
				</tr>
			</thead>
			<tbody>
				<tr class="row2">
					<td colspan="3"><?php echo (isset($this->_rootref['NOMINATED_USERS'])) ? $this->_rootref['NOMINATED_USERS'] : ''; ?></td>
				</tr>
				<?php $_nominatedrow_count = (isset($this->_tpldata['nominatedrow'])) ? sizeof($this->_tpldata['nominatedrow']) : 0;if ($_nominatedrow_count) {for ($_nominatedrow_i = 0; $_nominatedrow_i < $_nominatedrow_count; ++$_nominatedrow_i){$_nominatedrow_val = &$this->_tpldata['nominatedrow'][$_nominatedrow_i]; ?>

				<tr class="row1">
					<td width="220"><?php echo $_nominatedrow_val['NOMINATED']; ?> <?php echo $_nominatedrow_val['COUNT']; ?></td>
					<td><?php echo $_nominatedrow_val['REASON']; ?></td>
					<td width="80" align="center">
						<a title="<?php echo ((isset($this->_rootref['L_APPROVE'])) ? $this->_rootref['L_APPROVE'] : ((isset($user->lang['APPROVE'])) ? $user->lang['APPROVE'] : '{ APPROVE }')); ?>" href="<?php echo $_nominatedrow_val['U_MCP']; ?>"><span><?php echo ((isset($this->_rootref['L_APPROVE'])) ? $this->_rootref['L_APPROVE'] : ((isset($user->lang['APPROVE'])) ? $user->lang['APPROVE'] : '{ APPROVE }')); ?></span></a>
						<hr />
						<a title="<?php echo ((isset($this->_rootref['L_DELETE'])) ? $this->_rootref['L_DELETE'] : ((isset($user->lang['DELETE'])) ? $user->lang['DELETE'] : '{ DELETE }')); ?>" href="<?php echo $_nominatedrow_val['U_USER_DELETE']; ?>"><span><?php echo ((isset($this->_rootref['L_DELETE'])) ? $this->_rootref['L_DELETE'] : ((isset($user->lang['DELETE'])) ? $user->lang['DELETE'] : '{ DELETE }')); ?></span></a>
					</td>
				</tr>
				<?php }} if ($this->_rootref['S_DELETE_ALL']) {  ?>

				<tr>
					<td class="cat" align="center" colspan=3>
						<form method="post" action="<?php echo (isset($this->_rootref['U_MEDALS_ACTION'])) ? $this->_rootref['U_MEDALS_ACTION'] : ''; ?>" name="post">
						<input class="btnmain" type="submit" accesskey="s" tabindex="1" name="submit" value="<?php echo ((isset($this->_rootref['L_DELETE_ALL'])) ? $this->_rootref['L_DELETE_ALL'] : ((isset($user->lang['DELETE_ALL'])) ? $user->lang['DELETE_ALL'] : '{ DELETE_ALL }')); ?>" class="button2" />						</form>
					</td>
				</tr>
				<?php } ?>

			</tbody>
		</table>
<?php } ?>


	<br clear="all" />
	
	<?php $this->_tpl_include('breadcrumbs.html'); ?>

	
	<br clear="all" />
	
	<div align="<?php echo (isset($this->_rootref['S_CONTENT_FLOW_END'])) ? $this->_rootref['S_CONTENT_FLOW_END'] : ''; ?>"><?php $this->_tpl_include('jumpbox.html'); ?></div>	
	<?php $this->_tpl_include('overall_footer.html'); ?>