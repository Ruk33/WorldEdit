<?php
/**
*
* help_points [English]
*
* @package language
* @version $Id: help_points.php 846 2012-04-17 13:56:31Z femu $
* copyright (c) 2009 wuerzi & femu
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ » „ “ — …
//

$help = array(
	// --- io begins ---
   array(
      0 => '--',
      1 => 'General'
   ),
   array(
      0 => 'Editar posts',
      1 => 'Si un usuario edita su post, los puntos por el post son re-calculados y el solamente recibe los puntos después de la edición. pero el post solo será re-calculado, si das puntos por postear en este foro ( > 0 ) en el foro [ACP] y el botón para postear esta activado.'
   ),
   array(
      0 => 'Editar tema',
      1 => 'Si un usuario edita su tema(primer post en un tema), él solo recibirá puntos por generar un nuevo tema. en ese caso el tema será completamente re-calculado.
pero el tema solo sera re-calculado, si das puntos por nuevos temas en este foro ( > 0 ) en el foro [ACP] y el botón para nuevos temas esta activado.'
   ),
   array(
      0 => 'Editar Adjuntos',
      1 => 'Si un usuario agrega o elimina archivos adjuntos a su post, solo los puntos por los archivos adjuntos son re-calculados los cuales están finalmente dentro del post.
si borra todos los archivos adjuntos, los puntos generales por archivos adjuntos serán restados también. Los archivos adjuntos son siempre calculados y estos no están relacionados con los nuevos temas o posts!'
   ),
   array(
      0 => 'Editar Encuestas',
      1 => 'Si un usuario edita us encuesta, la encuesta sera completamente re-calculada y él finalmente recibe puntos sólo por las partes que quedaron. Si borras la encuesta, todos los puntos por la encuesta serán restados y el usuario recibirá los puntos como si fuera un nuevo tema.
pero el tema solo será re-calculado, si tu das puntos por los temas en la configuración avanzada de puntos ( > 0 ) en el foro [ACP] y si el botón para nuevos temas esta activado. esto es debido a que las encuestas son siempre nuevos temas!'
   ),
   array(
      0 => 'Eliminar Posts',
      1 => 'Si un usuario elimina un post, los puntos recibidos son restados de su cuenta de puntos.
si un moderador elimina un post, los puntos para el usuario permanecerán en su cuenta.Ademas si tienes eliminación automática activada, los puntos para el usuario permanecerán.'
   ),
   array(
      0 => 'bbCodes',
      1 => 'Todos los caracteres dentro del del bbCode será contado. los bbCodes en sí no serán contados.'
   ),
   array(
      0 => 'Bloques de Código',
      1 => 'Todo dentro del Bloque de Código ( [code] [/code] ) no será contado!'
   ),
   array(
      0 => 'Emoticonos',
      1 => 'Los emoticonos no son contados. Pero alerta, que entre cada emoticon tienes espacios en blanco, los cuales son contados como caracteres!'
   ),
   array(
      0 => 'Símbolos y caracteres especiales',
      1 => 'Cada uno de los caracteres será contado, si has activado el conteo de caracteres. caracteres que sean letras, números, caracteres especiales e incluso espacios en blanco!'
   ),
   array(
      0 => 'Citar',
      1 => 'Todo entre los bbCodes quote ( [quote] / [/quote] ) no están siendo contados! solo el post en si y los que esta fuera de la etiqueta quote es contado.'
   ),
   array(
      0 => 'Nota Importante!',
      1 => 'Solo el texto contenido dentro de los bbCodes será contado, pero no el bbCode en sí. el codigo no será leido desde la base de datos!! así que el inicio [xxx] y el final [/xxx] son los códigos importantes. entonces si no terminas un bbCode, solo el texto hasta el inicio  de  la etiqueta será contado.
<br /><br />
si un usuario edita un post, por el cual él no obtuvo puntos anteriormente(por ejemplo antes de instalar el mod o activarlo), el usuario no obtendrá puntos por editarlo!
<br /><br />
Si un usuario edita un post o un tema, donde el no obtuvo puntos de la parte de los puntos avanzados  anterior, dicho post o tema no será re-calculado!'
   ),
   array(
      0 => '--',
      1 => 'Configuración de puntos'
   ),
   array(
      0 => 'General',
      1 => 'Aqui puedes ingresar un nombre diferente para tus puntos, activar/desactivar el sistema final de puntos e ingresar un mensaje de des activación.
adicionalmente puedes activar/desactivar las diferentes partes del sistema final de puntos y algunas cosas mas, las cuales deberían ser auto-explicativas.'
   ),
   array(
      0 => 'Transferencia grupal',
      1 => 'Con esta opción en la configuración principal de puntos tienes la posibilidad de transferir un determinado monto de puntos a un grupo, quitar o dar a todos el mismo valor. si llenas el campo del asunto y el comentario, puedes enviar un mensaje personal a todos los miembros del grupo. puedes usar de hecho todos los  bbCodes, en lugar de los comunes en la minibox.'
   ),
   array(
      0 => 'resetear los puntos de usuario',
      1 => 'Con esta opción en la configuración principal de puntos, puedes resetar todos los puntos de usuario a cero. pero ten cuidado ya que esta acción no puede ser deshecha!'
   ),
   array(
      0 => 'Resetear logs de usuario',
      1 => 'Con esta opción en la configuración principal de puntos, puedes resetear todos los logs del usuario. pero ten cuidado ya que esta acción no puede ser deshecha!'
   ),
   array(
      0 => '--',
      1 => 'Configuración avanzada de puntos'
   ),
   array(
      0 => 'Archivos Adjuntos',
      1 => 'puedes dar puntos por posts y temas con archivos adjuntos. los puntos principales son dados una sola vez y los puntos adicionales se dan por cada archivo adjunto.
Tu<strong>NO PUEDES</strong> desactivar archivos adjuntos en base por foro!'
   ),
   array(
      0 => 'Encuesta',
      1 => 'Puedes dar puntos por la encuesta en sí (aquellos son dados una sola vez) y puntos por cada opción de la encuesta.
Como las encuestas solo son posibles en nuevos temas, los puntos solo son dados, si das puntos ( > 0 ) por nuevos temas en la configuración del foro y has activado el botón para nuevos temas!.'
   ),
   array(
      0 => 'Nuevos temas',
      1 => 'adicionalmente a la configuración  de puntos por tema del foro, puedes dar puntos por cada palabra y/o puntos por cada caracter.
Si pones 0 en el foro o desactivas los puntos por nuevos temas, los puntos adicionales no serán contados!'
   ),
   array(
      0 => 'Nuevos posts/respuestas',
      1 => 'adicionalmente a la configuración de puntos por posts del foro, puedes dar puntos por cada palabra y/o puntos por cada caracter.
i pones 0 en el foro o desactivas los puntos por nuevos posts, los puntos adicionales no serán contados!'
   ),
   // --- io ends --- ya va ...no revisé bien la ortografía :D 

	// --- kadakash101 begins ---
	array(
		0 => 'Points per warning',
		1 => 'If a user gets warned, you have the possibility to substract points from his account. If the user hasn’t enough points, the value will be substracted anyway. He then will have negative points!'
	),
	array(
		0 => 'Points for registering',
		1 => 'Here you can set, how much points a user will receive on registering on your board. This way he will have a seed capital. These points are given at once. So not after releasing his account!'
	),
	array(
		0 => 'Entries per page',
		1 => 'Here you can set how much entries are shown per page in the Logs and the Lottery history. Minumum value is 5.'
	),
	array(
		0 => 'Number of most rich users',
		1 => 'Here you can set, how much of the most rich users are shown. You will see this number at multiple places: On the index, at the bank and in the overview.
Set 0 to deactivate this feature. On the index page the part will not be visible any more and in the bank and the overview, users will see a corresponding message.'
	),
	array(
		0 => '--',
		1 => 'Forum points settings'
	),
	array(
		0 => 'General',
		1 => 'The forum points are mostly independant from the other points settings and will be counted additionally. You can set the points per forum. This way you can set the points, users will receive, completely  individually. You will find these settings under ACP - Forums - Manage Forums - Forum you like to edit.'
	),
	array(
		0 => 'The switches',
		1 => 'With the forum points switches, enable/disable the forum points globally. If you disable Points for topics, posts or edit, points are NOT counted in all forums. Additionally the advanced points are not counted, until you enable the switches again.'
	),
	array(
		0 => 'Global forum points settings',
		1 => 'You can set the points globally here for all forums at once. These settings will overwrite any previously individual points settings! So if you use this feature, you have to rework all forums, where you set different points!'
	),
	array(
		0 => 'New Topic',
		1 => 'Here you can set, how much points a user will receive for creating a new topic. You can set it globally or individually via the ACP -> Forums.
If you set 0, also the advanced points settings (words, characters) are NOT counted.'
	),
	array(
		0 => 'New post',
		1 => 'Here you can set, how much points a user will receive for creating a new post or reply. You can set it globally or individually via the ACP -> Forums.
If you set 0, also the advanced points settings (words, characters) are NOT counted.'
	),
	array(
		0 => 'Edit topic/post',
		1 => 'Here you can set, if a user will gain points for editing a topic or a post.'
	),
	array(
		0 => 'Forum liable to pay costs for attachments',
		1 => 'Here you can set, if the user will have costs, if downloading attachments. The costs will be set in <astrong>Posting -> Attachments -> Manage extensions</strong>. There you can the if the user will have costs per extension and if so, how much it will be!

Important note! As ie attached pictures are shown directly within a post and they are normally visible, the points for the picture attachments are directly substracted. If a user does not have enough points, he won’t see the pictures!'
	),
	array(
		0 => '--',
		1 => 'Bank'
	),
	array(
		0 => 'General',
		1 => 'If the bank is activated, the users will see an additional tab in Ultimate Points main menu. Additionally you will find infos in the profile view and in the viewtopic part, where admin/moderators have the possibility to change the users amounts of the points and the bank, if allowed.'
	),
	array(
		0 => 'Interest rate',
		1 => 'Here you can set an interest rate between 0 and 100 percent per pay period. The pay period is set as an "in days" period. After this period the users will get their interest rate payed out automatically. You can also define, at what amount these payments will stop giving interest. So as soon as an user has more on his bank account, as you defined, he won’t get any additional payments. So interest payments will be given only for the value you set.'
	),
	array(
		0 => 'Bank costs',
		1 => 'Here you can set the cost for withdrawing money from the bank account. You can set any value between 0 to 100 percent. Additionally you can set a fixed cost value for maintaining the bank account per period. This one will have the same period as the the interest rate.'
	),
	array(
		0 => '--',
		1 => 'Lottery'
	),
	array(
		0 => 'General',
		1 => 'If the Lottery is enabled, the users will have access to the Lottery module.
If you disable the module, the Lottery is still running in the background, but the users won’t have access. The Lottery will run at the pre-defined period via the lottery page or the index page.'
	),
	array(
		0 => 'How the Lottery works',
		1 => 'With a random calculation, one ticket out of all purchased tickets, is selcted as a possible winner ticket. Afterwards another random calculation defines - using the the value of the cahnce to win - if the selected ticket really wins or not. If it does not win, the value goes to the Jackpot until one ticket wins.'
	),
	array(
		0 => 'Jackpot',
		1 => 'The Lottery works with a Jackpot system. So the value from all bought tickets will go into the Jackpot. Additionally you can define a starting value for the Jackpot, which will be payed out additionally. If noone wins, the Jackpot will remain and grows with the next playing round.'
	),
	array(
		0 => 'Chance to win',
		1 => 'Here you can set the chance to win. The users will not see this value. The higher you set this value, the bigger is the chance to win.
0 means noone will win, 100 means the Jackpot will be payed out to one of the players.'
	),
	array(
		0 => 'Paying period',
		1 => 'You can set the paying period in hours. This does have an effect immediately!
If you set the paying period to 0, the payout will stop.
The users cannot pay any tickets and the Jackpot will remain with it’s current value.
You can use this feature to force a payout. As soon as you set a new value, the payout will start at the next call of the page.'
	),
	// --- kadakash101 ends ---

	// -- sauron begins ---
	array(
		0 => 'Ingresa el tiempo del siguiente sorteo',
		1 => 'Ingresa aquí el tiempo para el siguiente sorteo de la lotería. Tienes que usar el formato de tiempo UNIX. Puedes obtenerlo de <a href="http://www.onlineconversion.com/unix_time.htm" onclick="window.open(this.href); return false">OnlineConversion.com</a>. El mismo es necesario solamente una vez. Durante período regular esto va a cambiar con el período de pago.'
	),
	array(
		0 => 'ID de remitente',
		1 => 'Here you can set the ID of the user, who will send the lucky user the winning message via a personal message. If you don’t like to use a different sender, set 0 here. The user will then received the message from himself.'
	),
	array(
		0 => '--',
		1 => 'Robbery'
	),
	array(
		0 => 'General',
		1 => 'With the Robbery module the user may rob points from other users point account (not the bank!). You can enable/disable the modul. If it is disabled, the users won’t see the modul.'
	),
	array(
		0 => 'Personal message settings',
		1 => 'Here you can set, if the users are informed about the robbery tries. If the user set in his peronal settings, that he won’t receive personal messages from other users, he won’t get messages from the Robebry module.
If the one who tries to rob another user is blocked from sending PMs, the robbed user still gets a message. This messages are pre-defined and the user, who tried to rob, does not have any influence on this message.
Every user can set in the frontend Robbery modul, if he likes to be informed by the Robbery modul, if someone tried to rob him oder if he was successful. If the sending of PNs is deactivated, the user won’t see this option.'
	),
	array(
		0 => 'Chance for successful robbery',
		1 => 'Here you can set the chance to make a successful robbery in percent. So you can set any value between 0 and 100 percent.'
	),
	array(
		0 => 'Penalty for a failed robbery',
		1 => 'Here you can set the penalty a user has to pay, if his robbery fails.
The thief will have to pay the set percantage of the value he tried to rob. What a user has to pay, if he fails, is shown on the Robbery page. You can set any value between 0 and 100 percent.'
	),
	array(
		0 => 'Maximum value, which can be robbed at once',
		1 => 'Here you can set the maximum percentage of the ponts the robbed user owns, which can be robbed at once. This value is shown on the Robebry page. You can use any value between 0 and 100 percent.'
	),
	array(
		0 => 'Usage of the penalty for the failed robbery',
		1 => 'Here you can set, what you like to to do with penalty for a failed robbery. You can either directly transfer it to the Lottery Jackpot or randomly select, if the penalty should go the robbed user account or to the Lottery Jackpot.'
	),
	array(
		0 => '--',
		1 => 'Transfer / Donate'
	),
	array(
		0 => 'General',
		1 => 'If the users have the permission, the users will have the possibility to transfer points from their own account to another users point account. This can be done from the Transfer page, from the viewtopic view or from the profile view.'
	),
	array(
		0 => 'Personal message with transfers',
		1 => 'You can enable/disable this feature within the main points setting page in the ACP. If user is blocked from sending PMs, he cannot add a comment to his transfer.'
	),
	array(
		0 => 'Logs',
		1 => 'All transfers incl. all the needed informations are shown on the logs page. This feature can be enabled/disabled on the main point settings page. You also have the possibility to reset ALL users logs. But be aware, this cannot be undone!'
	),
	array(
		0 => '--',
		1 => 'Permissions'
	),
	array(
		0 => 'Administrator permissions',
		1 => 'You can give the administrator the right to manage the Ultimate Points System. This can be done in ACP -> Permissions -> Administrator permissions -> Advanced permissions.'
	),
	array(
		0 => 'Global moderators permissions',
		1 => 'Within the module ACP -> Permissions -> Global moderators you can set, if they will have the permission to change the points and the bank accounts from other users.'
	),
	array(
		0 => 'User and group permissions',
		1 => 'Within the module ACP -> Permissions -> User/Group permissions, you can set different things conerning the Ultimate Points System. See below:
<ul>
	<li>Can use the Ultimate Points</li>
	<li>Can use the Bank Module</li>
	<li>Can use the Log Module</li>
	<li>Can use the Lottery Module</li>
	<li>Can use the Robbery Module</li>
	<li>Can use the Transfer Module</li>
</ul>'
	),
	array(
		0 => '--',
		1 => 'AddOns and compatibility with other modifications'
	),
	array(
		0 => 'General',
		1 => 'The Ultimate Points System is currently supported by some other modifications.'
	),
	array(
		0 => 'phpBB Arcade',
		1 => 'The phpBB Arcade ( <a href="http://phpbbarcade.origon.dk/" onclick="window.open(this.href); return false">phpBB Arcade</a> ) does support the Ultimate Points System. The Arcade will self-detect, if the UPS is installed. You can the set the cost per game and a Jackpot.'
	),
	array(
		0 => 'phpbb Gallery',
		1 => 'The phpBB Gallery from nickvergessen ( <a href="http://www.flying-bits.org/" onclick="window.open(this.href); return false">Flying-bits.org</a> ) supports Ultimate Points.<br />
As soon as you have installed the Gallery, you will see additional fields in the main points settings.<br /><br />Inside the contrib folder you cab find the addon, which then needs to be copied to the coorect place on your webspace. Please be aware that there are differences between the version 1.0.x and 1.1.x. There you need to take the correct on for your version.<br /><br /><strong>Important hint!</strong> If you are using one of the image view boxes (Highslide, Lightbox, Shadowbox.), the points are substracted twice here due to a technical issue. So if you like to substract 2 points for viewing images, you have to enter 1 point here!<br />For the Highslide Box you can find a fix for this issue <a href="http://highslide.com/forum/viewtopic.php?p=18498#p18498" onclick="window.open(this.href); return false">here</a><br /><br />Additionally you can enable/disbale, if user with a negative or zero points account will still be able to view images or not.'
	),
	array(
		0 => 'Medal System MOD',
		1 => 'The Medal System does support the UPS.
Within the Medal Mod ACP, you will find a field, where you can set, how much points a user will receive addtionally to the given medal.'
	),
	array(
		0 => 'Sudoku',
		1 => 'The Sudoku MOD from el_teniente ( <a href="http://vfalcone.ru/" onclick="window.open(this.href); return false">vfalcone.ru</a> ) does support the UPS.
Although it still have an internal points system, you can set the points, which users will receive within the rewards system.'
	),
	array(
		0 => 'F1 Webtipp',
		1 => 'The Formula 1 Webtipp from Dr.Death ( <a href="http://www.lpi-clan.de/" onclick="window.open(this.href); return false">LPI-Clan</a> ) does support the UPS.
You can set who much points users will receive with their tipps.'
	),
	array(
		0 => 'DM Video',
		1 => 'The DM Video MOD from femu ( <a href="http://area53.die-muellers.org/" onclick="window.open(this.href); return false">femu’s Mod Support Site</a> ) does support the UPS.
You can set there, how much points users will receive, when they add a video. This amount will be substracted of course, when the user deletes a video.'
	),
	array(
		0 => 'UPS Easy Shop',
		1 => 'The UPS Easy Shop ( <a href="http://area53.die-muellers.org/" onclick="window.open(this.href); return false">femu’s Mod Support Site</a> ) does work with Ultimate Points. User can there buy items and list them in their profile and in viewtopic.<br />
There are plugins, where users can buy colors or user posts.'
	),
	array(
		0 => 'User Blog Mod',
		1 => 'The User Blog Mod from EXreaction ( <a href="http://www.lithiumstudios.org/" onclick="window.open(this.href); return false">Lithiumstudios.org</a> ) does support the UPS.

In order to use the User Blog Mod with the UPS, you need to install the plugin, which you can find in the folder  contrib/AddOns/User_Blog_Mod_Plugin.
After the installtion you will find additional settings in the Blog Mod settings.'
	),
	array(
		0 => 'Board3 Portal',
		1 => 'In the folder contrib/AddOns you can find blocks for the version 1 and 2. Select the correct one for your used Portal version, so you can show the correct values on your ( <a href="http://www.board3.de/" onclick="window.open(this.href); return false">Board3 Portal</a> ).'
	),
	array(
		0 => 'DM Easy Download System',
		1 => 'The DM EDS from femu ( <a href="http://area53.die-muellers.org/" onclick="window.open(this.href); return false">Our Mod Support Site</a> ) supports the Ultimate Points.<br />The DM EDS is a very easy Downloadsystem, where you can set costs for each download seperately. So if the users don’t have enough points, they can’t download the files.'
	),
	array(
		0 => 'DM Quotes Collection',
		1 => 'DM Quotes Collection is a simple tool from femu ( <a href="http://area53.die-muellers.org/" onclick="window.open(this.href); return false">femu’s Mod Support Site</a> ), where you have the possibility to start creating a quote collection, which will be shown in a random order on the index page. All quotes are managed via the ACP. As soon as a quote is released, the user will receive the points, which you set in the ACP.'
	),
	array(
		0 => 'Knuffel (Dice role game)',
		1 => 'Ultimate Points is supported by Knuffel (a Kniffel clone game) from Wuerzi ( <a href="http://www.spieleresidenz.de/" onclick="window.open(this.href); return false">Spieleresidenz</a> ). Within this game you need to role different sets of dice figures to get the maximum of points. In the ACP you can set the costs per game and also set a Jackpot.'
	),
	array(
		0 => 'Hangman',
		1 => 'The Hangman game ( <a href="http://area53.die-muellers.org/" onclick="window.open(this.href); return false">Our Mod Support Site</a> ) supports Ultimate Points. Within this game users can earn points by posting new Hangmans or guessing words.'
	),
	array(
		0 => 'DM Music Charts',
		1 => 'Ultimate Points is supported by the DM Music Charts from femu ( <a href="http://area53.die-muellers.org/" onclick="window.open(this.href); return false">femu’s Mod Support Site</a> ). With this mod you can offer your users a chart table, which is filled by the users. So every registered user can add new songs.'
	),
	array(
		0 => 'phpBB Football',
		1 => 'Ultimate Points supported by the phpBB Football from football ( <a href="http://football.bplaced.net/ onclick="window.open(this.href); return false"">football’s Support aund Demo Site</a> ). With this mod you can manage different leagues and offer your users a betting page.'
	),
	// --- sauron ends ---
);

?>