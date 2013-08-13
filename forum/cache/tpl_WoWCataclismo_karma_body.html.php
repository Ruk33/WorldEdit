<?php if (!defined('IN_PHPBB')) exit; $this->_tpl_include('overall_header.html'); ?>


<form action="<?php echo (isset($this->_rootref['S_POST_ACTION'])) ? $this->_rootref['S_POST_ACTION'] : ''; ?>" method="post" name="postform"<?php echo (isset($this->_rootref['S_FORM_ENCTYPE'])) ? $this->_rootref['S_FORM_ENCTYPE'] : ''; ?>>

<?php if ($this->_rootref['S_DISPLAY_PREVIEW']) {  $this->_tpl_include('posting_preview.html'); } ?>


<table class="tablebg" width="100%" cellspacing="1">
<tr>
	<th colspan="2"><b><?php echo ((isset($this->_rootref['L_POST_A'])) ? $this->_rootref['L_POST_A'] : ((isset($user->lang['POST_A'])) ? $user->lang['POST_A'] : '{ POST_A }')); ?></b></th>
</tr>

<?php if ($this->_rootref['ERROR']) {  ?>

	<tr>
		<td class="row2" colspan="2" align="center"><span class="genmed error"><?php echo (isset($this->_rootref['ERROR'])) ? $this->_rootref['ERROR'] : ''; ?></span></td>
	</tr>
<?php } if ($this->_rootref['S_SHOW_ICONS']) {  ?>

	<tr>
		<td class="row1"><b class="genmed"><?php echo ((isset($this->_rootref['L_KARMA_ICON'])) ? $this->_rootref['L_KARMA_ICON'] : ((isset($user->lang['KARMA_ICON'])) ? $user->lang['KARMA_ICON'] : '{ KARMA_ICON }')); ?>:</b></td>
		<td class="row2">
			<table width="100%" cellspacing="0" cellpadding="0" border="0">
			<tr>
				<td><input type="radio" class="radio" name="icon" value="0" checked="checked" /><span class="genmed"><?php echo ((isset($this->_rootref['L_KARMA_NO_ICON'])) ? $this->_rootref['L_KARMA_NO_ICON'] : ((isset($user->lang['KARMA_NO_ICON'])) ? $user->lang['KARMA_NO_ICON'] : '{ KARMA_NO_ICON }')); ?></span> <?php $_topic_icon_count = (isset($this->_tpldata['topic_icon'])) ? sizeof($this->_tpldata['topic_icon']) : 0;if ($_topic_icon_count) {for ($_topic_icon_i = 0; $_topic_icon_i < $_topic_icon_count; ++$_topic_icon_i){$_topic_icon_val = &$this->_tpldata['topic_icon'][$_topic_icon_i]; ?><span style="white-space: nowrap;"><input type="radio" class="radio" name="icon" value="<?php echo $_topic_icon_val['ICON_ID']; ?>"<?php echo $_topic_icon_val['S_ICON_CHECKED']; ?> /><img src="<?php echo $_topic_icon_val['ICON_IMG']; ?>" width="<?php echo $_topic_icon_val['ICON_WIDTH']; ?>" height="<?php echo $_topic_icon_val['ICON_HEIGHT']; ?>" alt="" title="" hspace="2" vspace="2" /></span> <?php }} ?></td>
			</tr>
			</table>
		</td>
	</tr>
<?php } if ($this->_rootref['S_KARMA_POWER']) {  ?>

	<tr>
		<td class="row1"><b class="genmed"><?php echo ((isset($this->_rootref['L_KARMA_POWER'])) ? $this->_rootref['L_KARMA_POWER'] : ((isset($user->lang['KARMA_POWER'])) ? $user->lang['KARMA_POWER'] : '{ KARMA_POWER }')); ?>:</b></td>
		<td class="row2">
			<table width="100%" cellspacing="0" cellpadding="0" border="0">
			<tr>
				<td><?php echo (isset($this->_rootref['S_KARMA_POWER_SELECT'])) ? $this->_rootref['S_KARMA_POWER_SELECT'] : ''; ?></td>
			</tr>
			</table>
		</td>
	</tr>
<?php } ?>


<tr>
	<td class="row1" width="22%" valign="top"><b class="genmed"><?php echo ((isset($this->_rootref['L_MESSAGE_BODY'])) ? $this->_rootref['L_MESSAGE_BODY'] : ((isset($user->lang['MESSAGE_BODY'])) ? $user->lang['MESSAGE_BODY'] : '{ MESSAGE_BODY }')); ?>:</b><br /><span class="gensmall"><?php echo ((isset($this->_rootref['L_KARMA_EXPLAIN'])) ? $this->_rootref['L_KARMA_EXPLAIN'] : ((isset($user->lang['KARMA_EXPLAIN'])) ? $user->lang['KARMA_EXPLAIN'] : '{ KARMA_EXPLAIN }')); ?>&nbsp;</span><br /><br />
	<?php if ($this->_rootref['S_SMILIES_ALLOWED']) {  ?>

		<table width="100%" cellspacing="5" cellpadding="0" border="0" align="center">
		<tr>
			<td class="gensmall" align="center"><b><?php echo ((isset($this->_rootref['L_SMILIES'])) ? $this->_rootref['L_SMILIES'] : ((isset($user->lang['SMILIES'])) ? $user->lang['SMILIES'] : '{ SMILIES }')); ?></b></td>
		</tr>
		<tr>
			<td align="center">
				<?php $_smiley_count = (isset($this->_tpldata['smiley'])) ? sizeof($this->_tpldata['smiley']) : 0;if ($_smiley_count) {for ($_smiley_i = 0; $_smiley_i < $_smiley_count; ++$_smiley_i){$_smiley_val = &$this->_tpldata['smiley'][$_smiley_i]; ?>

					<a href="#" onclick="insert_text('<?php echo $_smiley_val['A_SMILEY_CODE']; ?>', true); return false;" style="line-height: 20px;"><img src="<?php echo $_smiley_val['SMILEY_IMG']; ?>" width="<?php echo $_smiley_val['SMILEY_WIDTH']; ?>" height="<?php echo $_smiley_val['SMILEY_HEIGHT']; ?>" alt="<?php echo $_smiley_val['SMILEY_CODE']; ?>" title="<?php echo $_smiley_val['SMILEY_DESC']; ?>" hspace="2" vspace="2" /></a>
				<?php }} ?>

			</td>
		</tr>

		<?php if ($this->_rootref['S_SHOW_SMILEY_LINK']) {  ?>

			<tr>
				<td align="center"><a class="nav" href="<?php echo (isset($this->_rootref['U_MORE_SMILIES'])) ? $this->_rootref['U_MORE_SMILIES'] : ''; ?>" onclick="window.open('<?php echo (isset($this->_rootref['U_MORE_SMILIES'])) ? $this->_rootref['U_MORE_SMILIES'] : ''; ?>', '_phpbbsmilies', 'HEIGHT=350,resizable=yes,scrollbars=yes,WIDTH=300');return false;"><?php echo ((isset($this->_rootref['L_MORE_SMILIES'])) ? $this->_rootref['L_MORE_SMILIES'] : ((isset($user->lang['MORE_SMILIES'])) ? $user->lang['MORE_SMILIES'] : '{ MORE_SMILIES }')); ?></a></td>
			</tr>
		<?php } ?>


		</table>
	<?php } ?>

	</td>
	<td class="row2" width="78%" valign="top">
		<script type="text/javascript">
			<!--
			var form_name = 'postform';
			var text_name = 'message';
			//-->
		</script>

		<table width="100%" cellspacing="0" cellpadding="0" border="0">
		<?php $this->_tpl_include('posting_buttons.html'); ?>

		<tr>
			<td valign="top" style="width: 100%;"><textarea name="message" rows="15" cols="76" tabindex="3" onselect="storeCaret(this);" onclick="storeCaret(this);" onkeyup="storeCaret(this);" style="width: 98%;"><?php echo (isset($this->_rootref['MESSAGE'])) ? $this->_rootref['MESSAGE'] : ''; ?></textarea></td>
			<?php if ($this->_rootref['S_BBCODE_ALLOWED']) {  ?>

			<td width="80" align="center" valign="top">
				<script type="text/javascript">
				<!--
					colorPalette('v', 7, 6)
				//-->
				</script>
			</td>
			<?php } ?>

	 	</tr>
		</table>
	</td>
</tr>

<tr>
	<td class="row1" valign="top"><b class="genmed"><?php echo ((isset($this->_rootref['L_OPTIONS'])) ? $this->_rootref['L_OPTIONS'] : ((isset($user->lang['OPTIONS'])) ? $user->lang['OPTIONS'] : '{ OPTIONS }')); ?>:</b><br />
		<table cellspacing="2" cellpadding="0" border="0">
		<tr>
			<td class="gensmall"><?php echo (isset($this->_rootref['BBCODE_STATUS'])) ? $this->_rootref['BBCODE_STATUS'] : ''; ?></td>
		</tr>
		<?php if ($this->_rootref['S_BBCODE_ALLOWED']) {  ?>

		<tr>
			<td class="gensmall"><?php echo (isset($this->_rootref['IMG_STATUS'])) ? $this->_rootref['IMG_STATUS'] : ''; ?></td>
		</tr>
		<tr>
			<td class="gensmall"><?php echo (isset($this->_rootref['FLASH_STATUS'])) ? $this->_rootref['FLASH_STATUS'] : ''; ?></td>
		</tr>
		<tr>
			<td class="gensmall"><?php echo (isset($this->_rootref['URL_STATUS'])) ? $this->_rootref['URL_STATUS'] : ''; ?></td>
		</tr>
		<tr>
			<td class="gensmall"><?php echo (isset($this->_rootref['SMILIES_STATUS'])) ? $this->_rootref['SMILIES_STATUS'] : ''; ?></td>
		</tr>
		<?php } ?>

		</table>
	</td>
	<td class="row2">
		<table cellpadding="1">
		<?php if ($this->_rootref['S_BBCODE_ALLOWED']) {  ?>

			<tr>
				<td><input type="checkbox" class="radio" name="disable_bbcode"<?php echo (isset($this->_rootref['S_BBCODE_CHECKED'])) ? $this->_rootref['S_BBCODE_CHECKED'] : ''; ?> /></td>
				<td class="gen"><?php echo ((isset($this->_rootref['L_DISABLE_BBCODE'])) ? $this->_rootref['L_DISABLE_BBCODE'] : ((isset($user->lang['DISABLE_BBCODE'])) ? $user->lang['DISABLE_BBCODE'] : '{ DISABLE_BBCODE }')); ?></td>
			</tr>
		<?php } if ($this->_rootref['S_SMILIES_ALLOWED']) {  ?>

			<tr>
				<td><input type="checkbox" class="radio" name="disable_smilies"<?php echo (isset($this->_rootref['S_SMILIES_CHECKED'])) ? $this->_rootref['S_SMILIES_CHECKED'] : ''; ?> /></td>
				<td class="gen"><?php echo ((isset($this->_rootref['L_DISABLE_SMILIES'])) ? $this->_rootref['L_DISABLE_SMILIES'] : ((isset($user->lang['DISABLE_SMILIES'])) ? $user->lang['DISABLE_SMILIES'] : '{ DISABLE_SMILIES }')); ?></td>
			</tr>
		<?php } if ($this->_rootref['S_LINKS_ALLOWED']) {  ?>

		<tr>
			<td><input type="checkbox" class="radio" name="disable_magic_url"<?php echo (isset($this->_rootref['S_MAGIC_URL_CHECKED'])) ? $this->_rootref['S_MAGIC_URL_CHECKED'] : ''; ?> /></td>
			<td class="gen"><?php echo ((isset($this->_rootref['L_DISABLE_MAGIC_URL'])) ? $this->_rootref['L_DISABLE_MAGIC_URL'] : ((isset($user->lang['DISABLE_MAGIC_URL'])) ? $user->lang['DISABLE_MAGIC_URL'] : '{ DISABLE_MAGIC_URL }')); ?></td>
		</tr>
		<?php } ?>

		</table>
	</td>
</tr>
<tr>
	<td class="cat" colspan="2" align="center"><?php echo (isset($this->_rootref['S_HIDDEN_FIELDS'])) ? $this->_rootref['S_HIDDEN_FIELDS'] : ''; ?>

		<input class="btnlite" type="submit" tabindex="10" name="preview" value="<?php echo ((isset($this->_rootref['L_PREVIEW'])) ? $this->_rootref['L_PREVIEW'] : ((isset($user->lang['PREVIEW'])) ? $user->lang['PREVIEW'] : '{ PREVIEW }')); ?>" />
		&nbsp; <input class="btnmain" type="submit" accesskey="s" tabindex="11" name="post" value="<?php echo ((isset($this->_rootref['L_SUBMIT'])) ? $this->_rootref['L_SUBMIT'] : ((isset($user->lang['SUBMIT'])) ? $user->lang['SUBMIT'] : '{ SUBMIT }')); ?>" />
		<?php if (! $this->_rootref['S_SHOW_ATTACH_BOX'] && ! $this->_rootref['S_SHOW_POLL_BOX']) {  if ($this->_rootref['S_SAVE_ALLOWED']) {  ?>&nbsp; <input class="btnlite" type="submit" accesskey="k" tabindex="12" name="save" value="<?php echo ((isset($this->_rootref['L_SAVE'])) ? $this->_rootref['L_SAVE'] : ((isset($user->lang['SAVE'])) ? $user->lang['SAVE'] : '{ SAVE }')); ?>" /><?php } if ($this->_rootref['S_HAS_DRAFTS']) {  ?>&nbsp; <input class="btnlite" type="submit" accesskey="d" tabindex="13" name="load" value="<?php echo ((isset($this->_rootref['L_LOAD'])) ? $this->_rootref['L_LOAD'] : ((isset($user->lang['LOAD'])) ? $user->lang['LOAD'] : '{ LOAD }')); ?>" /><?php } } ?>

		&nbsp; <input class="btnlite" type="submit" accesskey="c" tabindex="14" name="cancel" value="<?php echo ((isset($this->_rootref['L_CANCEL'])) ? $this->_rootref['L_CANCEL'] : ((isset($user->lang['CANCEL'])) ? $user->lang['CANCEL'] : '{ CANCEL }')); ?>" />
	</td>
</tr>
</table>

<?php $this->_tpl_include('breadcrumbs.html'); ?>


</form>

<br clear="all" />

<?php $this->_tpl_include('overall_footer.html'); ?>