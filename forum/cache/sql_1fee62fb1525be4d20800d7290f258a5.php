<?php exit; ?>
1376402302
SELECT * FROM phpbb_bbcodes WHERE bbcode_id IN (15, 16)
2435
a:2:{i:0;a:10:{s:9:"bbcode_id";s:2:"15";s:10:"bbcode_tag";s:7:"spoiler";s:15:"bbcode_helpline";s:7:"Spoiler";s:18:"display_on_posting";s:1:"1";s:12:"bbcode_match";s:34:"[spoiler={TEXT1}]{TEXT2}[/spoiler]";s:10:"bbcode_tpl";s:533:"<dl class="codebox"><dt>{TEXT1}: <a href="#" onclick="if (this.parentNode.parentNode.getElementsByTagName('dd')[0].getElementsByTagName('div')[0].style.display != '') { this.parentNode.parentNode.getElementsByTagName('dd')[0].getElementsByTagName('div')[0].style.display = ''; this.innerText = 'Hide'; } else { this.parentNode.parentNode.getElementsByTagName('dd')[0].getElementsByTagName('div')[0].style.display = 'none'; this.innerText = 'Show'; } return false;">Show</a></dt><dd><div style="display: none;">{TEXT2}</div></dd></dl>";s:16:"first_pass_match";s:45:"!\[spoiler(?:\=(.*?)|)\](.*?)\[/spoiler\]!ies";s:18:"first_pass_replace";s:279:"'[spoiler='.(("${1}"=="")?'Spoiler':str_replace(array("\r\n", '\"', '\'', '(', ')'), array("\n", '"', '&#39;', '&#40;', '&#41;'), trim('${1}'))).':$uid]'.str_replace(array("\r\n", '\"', '\'', '(', ')'), array("\n", '"', '&#39;', '&#40;', '&#41;'), trim('${2}')).'[/spoiler:$uid]'";s:17:"second_pass_match";s:48:"!\[spoiler\=(.*?):$uid\](.*?)\[/spoiler:$uid\]!s";s:19:"second_pass_replace";s:527:"<dl class="codebox"><dt>${1}: <a href="#" onclick="if (this.parentNode.parentNode.getElementsByTagName('dd')[0].getElementsByTagName('div')[0].style.display != '') { this.parentNode.parentNode.getElementsByTagName('dd')[0].getElementsByTagName('div')[0].style.display = ''; this.innerText = 'Hide'; } else { this.parentNode.parentNode.getElementsByTagName('dd')[0].getElementsByTagName('div')[0].style.display = 'none'; this.innerText = 'Show'; } return false;">Show</a></dt><dd><div style="display: none;">${2}</div></dd></dl>";}i:1;a:10:{s:9:"bbcode_id";s:2:"16";s:10:"bbcode_tag";s:3:"gui";s:15:"bbcode_helpline";s:20:"Resaltar detonadores";s:18:"display_on_posting";s:1:"1";s:12:"bbcode_match";s:17:"[gui]{TEXT}[/gui]";s:10:"bbcode_tpl";s:44:"<pre name="gui" class="guiCode">{TEXT}</pre>";s:16:"first_pass_match";s:25:"!\[gui\](.*?)\[/gui\]!ies";s:18:"first_pass_replace";s:134:"'[gui:$uid]'.str_replace(array("\r\n", '\"', '\'', '(', ')'), array("\n", '"', '&#39;', '&#40;', '&#41;'), trim('${1}')).'[/gui:$uid]'";s:17:"second_pass_match";s:33:"!\[gui:$uid\](.*?)\[/gui:$uid\]!s";s:19:"second_pass_replace";s:42:"<pre name="gui" class="guiCode">${1}</pre>";}}