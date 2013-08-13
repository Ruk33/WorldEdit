<?php if (!defined('IN_PHPBB')) exit; ?><fieldset>
			<legend><?php echo ((isset($this->_rootref['L_UCP_KARMA'])) ? $this->_rootref['L_UCP_KARMA'] : ((isset($user->lang['UCP_KARMA'])) ? $user->lang['UCP_KARMA'] : '{ UCP_KARMA }')); ?></legend>
		<dl>
			<dt><label for="karma_enable1"><?php echo ((isset($this->_rootref['L_UCP_KARMA_ENABLE'])) ? $this->_rootref['L_UCP_KARMA_ENABLE'] : ((isset($user->lang['UCP_KARMA_ENABLE'])) ? $user->lang['UCP_KARMA_ENABLE'] : '{ UCP_KARMA_ENABLE }')); ?>:</label><br /><span><?php echo ((isset($this->_rootref['L_UCP_KARMA_ENABLE_EXPLAIN'])) ? $this->_rootref['L_UCP_KARMA_ENABLE_EXPLAIN'] : ((isset($user->lang['UCP_KARMA_ENABLE_EXPLAIN'])) ? $user->lang['UCP_KARMA_ENABLE_EXPLAIN'] : '{ UCP_KARMA_ENABLE_EXPLAIN }')); ?></span></dt>
			<dd>
				<label for="karma_enable1"><input type="radio" name="karma_enable" id="karma_enable1" value="1"<?php if ($this->_rootref['S_ENABLE']) {  ?> checked="checked"<?php } ?> /> <?php echo ((isset($this->_rootref['L_YES'])) ? $this->_rootref['L_YES'] : ((isset($user->lang['YES'])) ? $user->lang['YES'] : '{ YES }')); ?></label> 
				<label for="karma_enable0"><input type="radio" name="karma_enable" id="karma_enable0" value="0"<?php if (! $this->_rootref['S_ENABLE']) {  ?> checked="checked"<?php } ?> /> <?php echo ((isset($this->_rootref['L_NO'])) ? $this->_rootref['L_NO'] : ((isset($user->lang['NO'])) ? $user->lang['NO'] : '{ NO }')); ?></label>
			</dd>
		</dl>
		<dl>
			<dt><label for="karma_notify_pm1"><?php echo ((isset($this->_rootref['L_UCP_KARMA_NOTIFY_PM'])) ? $this->_rootref['L_UCP_KARMA_NOTIFY_PM'] : ((isset($user->lang['UCP_KARMA_NOTIFY_PM'])) ? $user->lang['UCP_KARMA_NOTIFY_PM'] : '{ UCP_KARMA_NOTIFY_PM }')); ?>:</label><br /><span><?php echo ((isset($this->_rootref['L_UCP_KARMA_NOTIFY_PM_EXPLAIN'])) ? $this->_rootref['L_UCP_KARMA_NOTIFY_PM_EXPLAIN'] : ((isset($user->lang['UCP_KARMA_NOTIFY_PM_EXPLAIN'])) ? $user->lang['UCP_KARMA_NOTIFY_PM_EXPLAIN'] : '{ UCP_KARMA_NOTIFY_PM_EXPLAIN }')); ?></span></dt>
			<dd>
				<label for="karma_notify_pm1"><input type="radio" name="karma_notify_pm" id="karma_notify_pm1" value="1"<?php if ($this->_rootref['S_NOTIFY_PM']) {  ?> checked="checked"<?php } ?> /> <?php echo ((isset($this->_rootref['L_YES'])) ? $this->_rootref['L_YES'] : ((isset($user->lang['YES'])) ? $user->lang['YES'] : '{ YES }')); ?></label> 
				<label for="karma_notify_pm0"><input type="radio" name="karma_notify_pm" id="karma_notify_pm0" value="0"<?php if (! $this->_rootref['S_NOTIFY_PM']) {  ?> checked="checked"<?php } ?> /> <?php echo ((isset($this->_rootref['L_NO'])) ? $this->_rootref['L_NO'] : ((isset($user->lang['NO'])) ? $user->lang['NO'] : '{ NO }')); ?></label>
			</dd>
		</dl>
		<dl>
			<dt><label for="karma_notify_email1"><?php echo ((isset($this->_rootref['L_UCP_KARMA_NOTIFY_EMAIL'])) ? $this->_rootref['L_UCP_KARMA_NOTIFY_EMAIL'] : ((isset($user->lang['UCP_KARMA_NOTIFY_EMAIL'])) ? $user->lang['UCP_KARMA_NOTIFY_EMAIL'] : '{ UCP_KARMA_NOTIFY_EMAIL }')); ?>:</label><br /><span><?php echo ((isset($this->_rootref['L_UCP_KARMA_NOTIFY_EMAIL_EXPLAIN'])) ? $this->_rootref['L_UCP_KARMA_NOTIFY_EMAIL_EXPLAIN'] : ((isset($user->lang['UCP_KARMA_NOTIFY_EMAIL_EXPLAIN'])) ? $user->lang['UCP_KARMA_NOTIFY_EMAIL_EXPLAIN'] : '{ UCP_KARMA_NOTIFY_EMAIL_EXPLAIN }')); ?></span></dt>
			<dd>
				<label for="karma_notify_email1"><input type="radio" name="karma_notify_email" id="karma_notify_email1" value="1"<?php if ($this->_rootref['S_NOTIFY_EMAIL']) {  ?> checked="checked"<?php } ?> /> <?php echo ((isset($this->_rootref['L_YES'])) ? $this->_rootref['L_YES'] : ((isset($user->lang['YES'])) ? $user->lang['YES'] : '{ YES }')); ?></label> 
				<label for="karma_notify_email0"><input type="radio" name="karma_notify_email" id="karma_notify_email0" value="0"<?php if (! $this->_rootref['S_NOTIFY_EMAIL']) {  ?> checked="checked"<?php } ?> /> <?php echo ((isset($this->_rootref['L_NO'])) ? $this->_rootref['L_NO'] : ((isset($user->lang['NO'])) ? $user->lang['NO'] : '{ NO }')); ?></label>
			</dd>
		</dl>
		<dl>
			<dt><label for="karma_notify_jabber1"><?php echo ((isset($this->_rootref['L_UCP_KARMA_NOTIFY_JABBER'])) ? $this->_rootref['L_UCP_KARMA_NOTIFY_JABBER'] : ((isset($user->lang['UCP_KARMA_NOTIFY_JABBER'])) ? $user->lang['UCP_KARMA_NOTIFY_JABBER'] : '{ UCP_KARMA_NOTIFY_JABBER }')); ?>:</label><br /><span><?php echo ((isset($this->_rootref['L_UCP_KARMA_NOTIFY_JABBER_EXPLAIN'])) ? $this->_rootref['L_UCP_KARMA_NOTIFY_JABBER_EXPLAIN'] : ((isset($user->lang['UCP_KARMA_NOTIFY_JABBER_EXPLAIN'])) ? $user->lang['UCP_KARMA_NOTIFY_JABBER_EXPLAIN'] : '{ UCP_KARMA_NOTIFY_JABBER_EXPLAIN }')); ?></span></dt>
			<dd>
				<label for="karma_notify_jabber1"><input type="radio" name="karma_notify_jabber" id="karma_notify_jabber1" value="1"<?php if ($this->_rootref['S_NOTIFY_JABBER']) {  ?> checked="checked"<?php } ?> /> <?php echo ((isset($this->_rootref['L_YES'])) ? $this->_rootref['L_YES'] : ((isset($user->lang['YES'])) ? $user->lang['YES'] : '{ YES }')); ?></label> 
				<label for="karma_notify_jabber0"><input type="radio" name="karma_notify_jabber" id="karma_notify_jabber0" value="0"<?php if (! $this->_rootref['S_NOTIFY_JABBER']) {  ?> checked="checked"<?php } ?> /> <?php echo ((isset($this->_rootref['L_NO'])) ? $this->_rootref['L_NO'] : ((isset($user->lang['NO'])) ? $user->lang['NO'] : '{ NO }')); ?></label>
			</dd>
		</dl>
		<dl>
			<dt><label for="karma_toplist1"><?php echo ((isset($this->_rootref['L_UCP_KARMA_TOPLIST'])) ? $this->_rootref['L_UCP_KARMA_TOPLIST'] : ((isset($user->lang['UCP_KARMA_TOPLIST'])) ? $user->lang['UCP_KARMA_TOPLIST'] : '{ UCP_KARMA_TOPLIST }')); ?>:</label><br /><span><?php echo ((isset($this->_rootref['L_UCP_KARMA_TOPLIST_EXPLAIN'])) ? $this->_rootref['L_UCP_KARMA_TOPLIST_EXPLAIN'] : ((isset($user->lang['UCP_KARMA_TOPLIST_EXPLAIN'])) ? $user->lang['UCP_KARMA_TOPLIST_EXPLAIN'] : '{ UCP_KARMA_TOPLIST_EXPLAIN }')); ?></span></dt>
			<dd>
				<label for="karma_toplist1"><input type="radio" name="karma_toplist" id="karma_toplist1" value="1"<?php if ($this->_rootref['S_TOPLIST']) {  ?> checked="checked"<?php } ?> /> <?php echo ((isset($this->_rootref['L_YES'])) ? $this->_rootref['L_YES'] : ((isset($user->lang['YES'])) ? $user->lang['YES'] : '{ YES }')); ?></label> 
				<label for="karma_toplist0"><input type="radio" name="karma_toplist" id="karma_toplist0" value="0"<?php if (! $this->_rootref['S_TOPLIST']) {  ?> checked="checked"<?php } ?> /> <?php echo ((isset($this->_rootref['L_NO'])) ? $this->_rootref['L_NO'] : ((isset($user->lang['NO'])) ? $user->lang['NO'] : '{ NO }')); ?></label>
			</dd>
		</dl>
		<dl>
			<dt><label for="karma_toplist_users"><?php echo ((isset($this->_rootref['L_UCP_KARMA_TOPLIST_USERS'])) ? $this->_rootref['L_UCP_KARMA_TOPLIST_USERS'] : ((isset($user->lang['UCP_KARMA_TOPLIST_USERS'])) ? $user->lang['UCP_KARMA_TOPLIST_USERS'] : '{ UCP_KARMA_TOPLIST_USERS }')); ?>:</label><br /><span><?php echo ((isset($this->_rootref['L_UCP_KARMA_TOPLIST_USERS_EXPLAIN'])) ? $this->_rootref['L_UCP_KARMA_TOPLIST_USERS_EXPLAIN'] : ((isset($user->lang['UCP_KARMA_TOPLIST_USERS_EXPLAIN'])) ? $user->lang['UCP_KARMA_TOPLIST_USERS_EXPLAIN'] : '{ UCP_KARMA_TOPLIST_USERS_EXPLAIN }')); ?></span></dt>
			<dd><input type="text" name="karma_toplist_users" id="karma_toplist_users" value="<?php echo (isset($this->_rootref['TOPLIST_USERS'])) ? $this->_rootref['TOPLIST_USERS'] : ''; ?>" maxlength="8" class="inputbox tiny" style="margin-top: 3px;" /></dd>
		</dl>
		<dl>
			<dt><label for="karma_comments_per_page"><?php echo ((isset($this->_rootref['L_UCP_KARMA_COMMENTS_PER_PAGE'])) ? $this->_rootref['L_UCP_KARMA_COMMENTS_PER_PAGE'] : ((isset($user->lang['UCP_KARMA_COMMENTS_PER_PAGE'])) ? $user->lang['UCP_KARMA_COMMENTS_PER_PAGE'] : '{ UCP_KARMA_COMMENTS_PER_PAGE }')); ?>:</label></dt>
			<dd><input type="text" name="karma_comments_per_page" id="karma_comments_per_page" value="<?php echo (isset($this->_rootref['COMMENTS_PER_PAGE'])) ? $this->_rootref['COMMENTS_PER_PAGE'] : ''; ?>" maxlength="3" class="inputbox tiny" style="margin-top: 3px;" /></dd>
		</dl>
		<dl>
			<dt><label for="karma_comments_self1"><?php echo ((isset($this->_rootref['L_UCP_KARMA_COMMENTS_SELF'])) ? $this->_rootref['L_UCP_KARMA_COMMENTS_SELF'] : ((isset($user->lang['UCP_KARMA_COMMENTS_SELF'])) ? $user->lang['UCP_KARMA_COMMENTS_SELF'] : '{ UCP_KARMA_COMMENTS_SELF }')); ?>:</label></dt>
			<dd>
				<label for="karma_comments_self1"><input type="radio" name="karma_comments_self" id="karma_comments_self1" value="1"<?php if ($this->_rootref['S_COMMENTS_SELF']) {  ?> checked="checked"<?php } ?> /> <?php echo ((isset($this->_rootref['L_YES'])) ? $this->_rootref['L_YES'] : ((isset($user->lang['YES'])) ? $user->lang['YES'] : '{ YES }')); ?></label> 
				<label for="karma_comments_self0"><input type="radio" name="karma_comments_self" id="karma_comments_self0" value="0"<?php if (! $this->_rootref['S_COMMENTS_SELF']) {  ?> checked="checked"<?php } ?> /> <?php echo ((isset($this->_rootref['L_NO'])) ? $this->_rootref['L_NO'] : ((isset($user->lang['NO'])) ? $user->lang['NO'] : '{ NO }')); ?></label>
			</dd>
		</dl>
		<hr />
		<dl>
			<dt><label><?php echo ((isset($this->_rootref['L_UCP_KARMA_VIEW_COMMENTS_DAYS'])) ? $this->_rootref['L_UCP_KARMA_VIEW_COMMENTS_DAYS'] : ((isset($user->lang['UCP_KARMA_VIEW_COMMENTS_DAYS'])) ? $user->lang['UCP_KARMA_VIEW_COMMENTS_DAYS'] : '{ UCP_KARMA_VIEW_COMMENTS_DAYS }')); ?>:</label></dt>
			<dd><?php echo (isset($this->_rootref['S_COMMENTS_SORT_DAYS'])) ? $this->_rootref['S_COMMENTS_SORT_DAYS'] : ''; ?></dd>
		</dl>
		<dl>
			<dt><label><?php echo ((isset($this->_rootref['L_UCP_KARMA_VIEW_COMMENTS_KEY'])) ? $this->_rootref['L_UCP_KARMA_VIEW_COMMENTS_KEY'] : ((isset($user->lang['UCP_KARMA_VIEW_COMMENTS_KEY'])) ? $user->lang['UCP_KARMA_VIEW_COMMENTS_KEY'] : '{ UCP_KARMA_VIEW_COMMENTS_KEY }')); ?>:</label></dt>
			<dd><?php echo (isset($this->_rootref['S_COMMENTS_SORT_KEY'])) ? $this->_rootref['S_COMMENTS_SORT_KEY'] : ''; ?></dd>
		</dl>
		<dl>
			<dt><label><?php echo ((isset($this->_rootref['L_UCP_KARMA_VIEW_COMMENTS_DIR'])) ? $this->_rootref['L_UCP_KARMA_VIEW_COMMENTS_DIR'] : ((isset($user->lang['UCP_KARMA_VIEW_COMMENTS_DIR'])) ? $user->lang['UCP_KARMA_VIEW_COMMENTS_DIR'] : '{ UCP_KARMA_VIEW_COMMENTS_DIR }')); ?>:</label></dt>
			<dd><?php echo (isset($this->_rootref['S_COMMENTS_SORT_DIR'])) ? $this->_rootref['S_COMMENTS_SORT_DIR'] : ''; ?></dd>
		</dl>
		</fieldset>