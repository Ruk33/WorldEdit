<?php if (!defined('IN_PHPBB')) exit; if (! $this->_rootref['S_IS_BOT']) {  echo (isset($this->_rootref['RUN_CRON_TASK'])) ? $this->_rootref['RUN_CRON_TASK'] : ''; } ?>

</div>

        </div>        
      </div>
    </div>

  <div id="contentbottom"></div>
</div>

<!--
	We request you retain the full copyright notice below including the link to www.phpbb.com.
	This not only gives respect to the large amount of time given freely by the developers
	but also helps build interest, traffic and use of phpBB3. If you (honestly) cannot retain
	the full copyright we ask you at least leave in place the "Powered by phpBB" line, with
	"phpBB" linked to www.phpbb.com. If you refuse to include even this then support on our
	forums may be affected.

	The phpBB Group : 2006
//-->

<br /><center><?php if ($this->_rootref['U_ACP']) {  ?><span class="gensmall">[ <a href="<?php echo (isset($this->_rootref['U_ACP'])) ? $this->_rootref['U_ACP'] : ''; ?>"><?php echo ((isset($this->_rootref['L_ACP'])) ? $this->_rootref['L_ACP'] : ((isset($user->lang['ACP'])) ? $user->lang['ACP'] : '{ ACP }')); ?></a> ]</span><br /><br /><?php } ?></center>
	
<table width="100%" border="0" cellpadding="0" cellspacing="0" height="92">
	<tr>
		<td width="100%" align="center">
<div id="wrapfooter">
	<span class="copyright" lang="en">World of Warcraft phpBB template "WoWCataclismo" created by <a href="mailto:nightdragonwish@gmail.com">Juan Antonio Mart&iacute;n Jim&eacute;nez</a>.<br />
	Downloads and Updates at <a href="http://www.clan-equisde.com.es/index.php?seccion=descargas" target="_blank">www.clan-equisde.com</a><br />
	<a href="http://www.blizzard.com/legalfaq.shtml" target="_blank" class="copyright">&copy;</a> World of Warcraft and Blizzard <a href="<?php echo (isset($this->_rootref['T_THEME_PATH'])) ? $this->_rootref['T_THEME_PATH'] : ''; ?>/images/entertainment.jpg" target="_blank" class="copyright">Entertainment</a> are trademarks or registered trademarks of Blizzard Entertainment, Inc. in the U.S. and/or other countries.<br /> This site is in no way associated with Blizzard Entertainment.<br />
Powered by <a href="http://www.phpbb.com/">phpBB</a> &copy; 2000, 2002, 2005, 2007 phpBB Group</span>
	<span class="copyright"><?php if ($this->_rootref['TRANSLATION_INFO']) {  echo (isset($this->_rootref['TRANSLATION_INFO'])) ? $this->_rootref['TRANSLATION_INFO'] : ''; } if ($this->_rootref['DEBUG_OUTPUT']) {  ?><br /><bdo dir="ltr">[ <?php echo (isset($this->_rootref['DEBUG_OUTPUT'])) ? $this->_rootref['DEBUG_OUTPUT'] : ''; ?> ]</bdo><?php } ?></span>
<br /><br />
</div>
</td>
	</tr>
</table>

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
<script type="text/javascript" async src="./../js/js.js"></script>
<script type="text/javascript" src="./../js/jquery.marquee.js"></script>


<script type="text/javascript">
$('img').on('load', function() {
    var $this = $(this);
    if ($this.width() > 500) {
        $this.attr('width', '500px');
        $this.attr('onclick', "($(this).attr('width')) ? $(this).removeAttr('width') : $(this).attr('width', '500px');");
    }
});

$('#last-topics').marquee().mouseover(
    function () {
        $(this).trigger('stop');
    }
).mouseout(
    function () {
        $(this).trigger('start');
    }
).mousemove(
    function (event) {
        if ($(this).data('drag') == true) {
            this.scrollTop = $(this).data('scrollY') + ($(this).data('y') - event.clientY);
        }
    }
).mousedown(
    function (event) {
        $(this).data('drag', true).data('y', event.clientY).data('scrollY', this.scrollTop);
    }
).mouseup(
    function () {
        $(this).data('drag', false);
    }
);
</script>

</body>
</html>