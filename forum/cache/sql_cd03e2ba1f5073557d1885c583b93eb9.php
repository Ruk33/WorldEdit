<?php exit; ?>
1376397867
SELECT * FROM phpbb_bbcodes WHERE bbcode_id IN (13, 14, 16)
2082
a:3:{i:0;a:10:{s:9:"bbcode_id";s:2:"13";s:10:"bbcode_tag";s:5:"font=";s:15:"bbcode_helpline";s:9:"Font face";s:18:"display_on_posting";s:1:"1";s:12:"bbcode_match";s:32:"[font={SIMPLETEXT}]{TEXT}[/font]";s:10:"bbcode_tpl";s:54:"<span style="font-family: {SIMPLETEXT};">{TEXT}</span>";s:16:"first_pass_match";s:49:"!\[font\=([a-zA-Z0-9-+.,_ ]+)\](.*?)\[/font\]!ies";s:18:"first_pass_replace";s:141:"'[font=${1}:$uid]'.str_replace(array("\r\n", '\"', '\'', '(', ')'), array("\n", '"', '&#39;', '&#40;', '&#41;'), trim('${2}')).'[/font:$uid]'";s:17:"second_pass_match";s:57:"!\[font\=([a-zA-Z0-9-+.,_ ]+):$uid\](.*?)\[/font:$uid\]!s";s:19:"second_pass_replace";s:44:"<span style="font-family: ${1};">${2}</span>";}i:1;a:10:{s:9:"bbcode_id";s:2:"14";s:10:"bbcode_tag";s:6:"align=";s:15:"bbcode_helpline";s:38:"Alignment: can use center, left, right";s:18:"display_on_posting";s:1:"1";s:12:"bbcode_match";s:34:"[align={SIMPLETEXT}]{TEXT}[/align]";s:10:"bbcode_tpl";s:51:"<div style="text-align: {SIMPLETEXT};">{TEXT}</div>";s:16:"first_pass_match";s:51:"!\[align\=([a-zA-Z0-9-+.,_ ]+)\](.*?)\[/align\]!ies";s:18:"first_pass_replace";s:143:"'[align=${1}:$uid]'.str_replace(array("\r\n", '\"', '\'', '(', ')'), array("\n", '"', '&#39;', '&#40;', '&#41;'), trim('${2}')).'[/align:$uid]'";s:17:"second_pass_match";s:59:"!\[align\=([a-zA-Z0-9-+.,_ ]+):$uid\](.*?)\[/align:$uid\]!s";s:19:"second_pass_replace";s:41:"<div style="text-align: ${1};">${2}</div>";}i:2;a:10:{s:9:"bbcode_id";s:2:"16";s:10:"bbcode_tag";s:3:"gui";s:15:"bbcode_helpline";s:20:"Resaltar detonadores";s:18:"display_on_posting";s:1:"1";s:12:"bbcode_match";s:17:"[gui]{TEXT}[/gui]";s:10:"bbcode_tpl";s:44:"<pre name="gui" class="guiCode">{TEXT}</pre>";s:16:"first_pass_match";s:25:"!\[gui\](.*?)\[/gui\]!ies";s:18:"first_pass_replace";s:134:"'[gui:$uid]'.str_replace(array("\r\n", '\"', '\'', '(', ')'), array("\n", '"', '&#39;', '&#40;', '&#41;'), trim('${1}')).'[/gui:$uid]'";s:17:"second_pass_match";s:33:"!\[gui:$uid\](.*?)\[/gui:$uid\]!s";s:19:"second_pass_replace";s:42:"<pre name="gui" class="guiCode">${1}</pre>";}}