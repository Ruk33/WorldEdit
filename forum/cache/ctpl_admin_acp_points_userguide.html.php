<?php if (!defined('IN_PHPBB')) exit; $this->_tpl_include('overall_header.html'); ?><!-- $Id: acp_points_userguide.html 794 2011-12-24 04:34:10Z femu $ -->

<a name="maincontent"></a>

<?php if ($this->_rootref['S_IN_POINTS_USERGUIDE']) {  if ($this->_rootref['S_ERROR']) {  ?>

		<div class="errorbox">
			<h3><?php echo ((isset($this->_rootref['L_WARNING'])) ? $this->_rootref['L_WARNING'] : ((isset($user->lang['WARNING'])) ? $user->lang['WARNING'] : '{ WARNING }')); ?></h3>
			<p><?php echo (isset($this->_rootref['ERROR_MSG'])) ? $this->_rootref['ERROR_MSG'] : ''; ?></p>
		</div>
	<?php } ?>


	<h1><?php echo ((isset($this->_rootref['L_ACP_POINTS'])) ? $this->_rootref['L_ACP_POINTS'] : ((isset($user->lang['ACP_POINTS'])) ? $user->lang['ACP_POINTS'] : '{ ACP_POINTS }')); ?> - <?php echo ((isset($this->_rootref['L_ACP_POINTS_USERGUIDE_TITLE'])) ? $this->_rootref['L_ACP_POINTS_USERGUIDE_TITLE'] : ((isset($user->lang['ACP_POINTS_USERGUIDE_TITLE'])) ? $user->lang['ACP_POINTS_USERGUIDE_TITLE'] : '{ ACP_POINTS_USERGUIDE_TITLE }')); ?></h1>
	<p><?php echo ((isset($this->_rootref['L_ACP_POINTS_USERGUIDE_EXPLAIN'])) ? $this->_rootref['L_ACP_POINTS_USERGUIDE_EXPLAIN'] : ((isset($user->lang['ACP_POINTS_USERGUIDE_EXPLAIN'])) ? $user->lang['ACP_POINTS_USERGUIDE_EXPLAIN'] : '{ ACP_POINTS_USERGUIDE_EXPLAIN }')); ?></p>

	<fieldset id="userguidelinks">
		<?php $_userguide_block_count = (isset($this->_tpldata['userguide_block'])) ? sizeof($this->_tpldata['userguide_block']) : 0;if ($_userguide_block_count) {for ($_userguide_block_i = 0; $_userguide_block_i < $_userguide_block_count; ++$_userguide_block_i){$_userguide_block_val = &$this->_tpldata['userguide_block'][$_userguide_block_i]; ?>

			<div style="font-size: 0.85em; padding-bottom: 5px; margin-bottom: 0.7em; line-height: 1.40em;"><strong><?php echo $_userguide_block_val['BLOCK_TITLE']; ?></strong><br />
				<?php $_userguide_row_count = (isset($_userguide_block_val['userguide_row'])) ? sizeof($_userguide_block_val['userguide_row']) : 0;if ($_userguide_row_count) {for ($_userguide_row_i = 0; $_userguide_row_i < $_userguide_row_count; ++$_userguide_row_i){$_userguide_row_val = &$_userguide_block_val['userguide_row'][$_userguide_row_i]; ?>

					<a href="#ug<?php echo $_userguide_block_val['S_ROW_COUNT']; echo $_userguide_row_val['S_ROW_COUNT']; ?>"><?php echo $_userguide_row_val['USERGUIDE_QUESTION']; ?></a><br />
				<?php }} ?>

			</div>
		<?php }} ?>

	</fieldset>

	<?php $_userguide_block_count = (isset($this->_tpldata['userguide_block'])) ? sizeof($this->_tpldata['userguide_block']) : 0;if ($_userguide_block_count) {for ($_userguide_block_i = 0; $_userguide_block_i < $_userguide_block_count; ++$_userguide_block_i){$_userguide_block_val = &$this->_tpldata['userguide_block'][$_userguide_block_i]; ?>

	<fieldset>
		<h2><?php echo $_userguide_block_val['BLOCK_TITLE']; ?></h2>
		<?php $_userguide_row_count = (isset($_userguide_block_val['userguide_row'])) ? sizeof($_userguide_block_val['userguide_row']) : 0;if ($_userguide_row_count) {for ($_userguide_row_i = 0; $_userguide_row_i < $_userguide_row_count; ++$_userguide_row_i){$_userguide_row_val = &$_userguide_block_val['userguide_row'][$_userguide_row_i]; ?>

			<div style="font-size: 0.85em; padding-bottom: 5px; margin-bottom: 0.7em; line-height: 1.40em;">
				<span id="ug<?php echo $_userguide_block_val['S_ROW_COUNT']; echo $_userguide_row_val['S_ROW_COUNT']; ?>"><strong><?php echo $_userguide_row_val['USERGUIDE_QUESTION']; ?></strong></span><br />
				<?php echo $_userguide_row_val['USERGUIDE_ANSWER']; ?><br /><br />
				<a href="#userguidelinks"><?php echo (isset($this->_rootref['ICON_BACK_TO_TOP'])) ? $this->_rootref['ICON_BACK_TO_TOP'] : ''; ?>&nbsp;<?php echo ((isset($this->_rootref['L_BACK_TO_TOP'])) ? $this->_rootref['L_BACK_TO_TOP'] : ((isset($user->lang['BACK_TO_TOP'])) ? $user->lang['BACK_TO_TOP'] : '{ BACK_TO_TOP }')); ?></a>
			</div>
			<?php if (! $_userguide_row_val['S_LAST_ROW']) {  ?><hr class="dashed" /><?php } }} ?>

	</fieldset>
	<?php }} } $this->_tpl_include('overall_footer.html'); ?>