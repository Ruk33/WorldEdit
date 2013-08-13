<?php exit; ?>
1376402146
SELECT * FROM phpbb_bbcodes WHERE bbcode_id = 18
692
a:1:{i:0;a:10:{s:9:"bbcode_id";s:2:"18";s:10:"bbcode_tag";s:5:"ljass";s:15:"bbcode_helpline";s:31:"Resaltar linea de texto en JASS";s:18:"display_on_posting";s:1:"1";s:12:"bbcode_match";s:21:"[ljass]{TEXT}[/ljass]";s:10:"bbcode_tpl";s:56:"<span name="jassLine" class="jassLineCode">{TEXT}</span>";s:16:"first_pass_match";s:29:"!\[ljass\](.*?)\[/ljass\]!ies";s:18:"first_pass_replace";s:138:"'[ljass:$uid]'.str_replace(array("\r\n", '\"', '\'', '(', ')'), array("\n", '"', '&#39;', '&#40;', '&#41;'), trim('${1}')).'[/ljass:$uid]'";s:17:"second_pass_match";s:37:"!\[ljass:$uid\](.*?)\[/ljass:$uid\]!s";s:19:"second_pass_replace";s:54:"<span name="jassLine" class="jassLineCode">${1}</span>";}}