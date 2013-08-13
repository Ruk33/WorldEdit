<?php exit; ?>
1376401144
SELECT * FROM phpbb_bbcodes WHERE bbcode_id = 16
639
a:1:{i:0;a:10:{s:9:"bbcode_id";s:2:"16";s:10:"bbcode_tag";s:3:"gui";s:15:"bbcode_helpline";s:20:"Resaltar detonadores";s:18:"display_on_posting";s:1:"1";s:12:"bbcode_match";s:17:"[gui]{TEXT}[/gui]";s:10:"bbcode_tpl";s:44:"<pre name="gui" class="guiCode">{TEXT}</pre>";s:16:"first_pass_match";s:25:"!\[gui\](.*?)\[/gui\]!ies";s:18:"first_pass_replace";s:134:"'[gui:$uid]'.str_replace(array("\r\n", '\"', '\'', '(', ')'), array("\n", '"', '&#39;', '&#40;', '&#41;'), trim('${1}')).'[/gui:$uid]'";s:17:"second_pass_match";s:33:"!\[gui:$uid\](.*?)\[/gui:$uid\]!s";s:19:"second_pass_replace";s:42:"<pre name="gui" class="guiCode">${1}</pre>";}}