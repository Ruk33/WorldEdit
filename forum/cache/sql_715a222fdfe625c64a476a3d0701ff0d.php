<?php exit; ?>
1376398831
SELECT * FROM phpbb_bbcodes WHERE bbcode_id = 13
711
a:1:{i:0;a:10:{s:9:"bbcode_id";s:2:"13";s:10:"bbcode_tag";s:5:"font=";s:15:"bbcode_helpline";s:9:"Font face";s:18:"display_on_posting";s:1:"1";s:12:"bbcode_match";s:32:"[font={SIMPLETEXT}]{TEXT}[/font]";s:10:"bbcode_tpl";s:54:"<span style="font-family: {SIMPLETEXT};">{TEXT}</span>";s:16:"first_pass_match";s:49:"!\[font\=([a-zA-Z0-9-+.,_ ]+)\](.*?)\[/font\]!ies";s:18:"first_pass_replace";s:141:"'[font=${1}:$uid]'.str_replace(array("\r\n", '\"', '\'', '(', ')'), array("\n", '"', '&#39;', '&#40;', '&#41;'), trim('${2}')).'[/font:$uid]'";s:17:"second_pass_match";s:57:"!\[font\=([a-zA-Z0-9-+.,_ ]+):$uid\](.*?)\[/font:$uid\]!s";s:19:"second_pass_replace";s:44:"<span style="font-family: ${1};">${2}</span>";}}