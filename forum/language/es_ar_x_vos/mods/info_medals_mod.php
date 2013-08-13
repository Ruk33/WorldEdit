<?php
/***************************************************************************
*
* @package Medals Mod for phpBB3
* @version $Id: medals.php,v 0.7.0 2008/01/23 Gremlinn$
* @copyright (c) 2008 Nathan DuPra (mods@dupra.net)
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
***************************************************************************/

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

$lang = array_merge($lang, array(
// pms
	'PM_MESSAGE'					=> '%1$s' . "\n" . '[b]Has sido premiado con la medalla "%2$s" por %3$s.' . "\n" . '%3$s además te dejó el siguiente mensaje:[/b]' . "\n\n",
	'PM_MESSAGE_POINTS_EARN'		=> '<br />Has obtenido %1$s point%2$s.' . "\n\n",
	'PM_MESSAGE_POINTS_DEDUCT'		=> '<br />%1$s point%2$s han sido deducidos.' . "\n\n",
	'PM_MESSAGE_NOMINATED'			=> '%1$s' . "\n" . '[b]Has ganado la medalla "%2$s" por %3$s luego de ser nominado para ella por %4$s.' . "\n" . '%3$s además te dejó el siguiente mensaje:[/b]' . "\n\n",
	'PM_MSG_SUBJECT'				=> '%s te ha otorgado una medalla!',

// medals awarding
	'AWARDED_BY'					=> 'Otorgada por',
	'AWARDED_MEDAL'					=> 'Medallas ganadas',
	'AWARDED_MEDAL_TO'				=> 'Medallas ganadas por',
	'AWARD_MEDAL'					=> 'Adjudicar medalla',
	'AWARD_TIME'					=> 'Fecha de adjudicación',
	'AWARD_TO'						=> 'Adjudicar medalla a',
	'MEDAL_AWARD_GOOD'				=> '¡Medalla adjudicada exitosamente!',
	'NOT_MEDALS_AWARDED'			=> '¡La medalla no ha sido adjudicada!',
	'MEDAL_REMOVE_GOOD'				=> '¡Medalla removida exitosamente!',
	'MEDAL_REMOVE_CONFIRM'			=> '¡Estás a punto de remover la medalla de un usuario!, ¿estás seguro de que deseas realizar esta acción?',
	'MEDAL_REMOVE_NO'				=> 'Ninguna medalla borrada',
	'MEDAL_EDIT'					=> 'Editar',
	'NO_USER_SELECTED'				=> 'No se ha ingresado un nombre de usuario. Serás redireccionado momentáneamente',

// medals nominate
	'APPROVE'						=> 'Aprobar',
	'USER_NOMINATED'				=> 'Usuario nominado',
	'USER_IS_NOMINATED'				=> ' [<a href="%s" title="¡Este usuario ha sido nominado para una medalla!">!</a>]',
	'MEDAL_NOMINATE_GOOD'			=> '¡Nominación de medalla exitosa!',
	'NOMINATABLE'					=> '[Nominatable]',
	'NOMINATE'						=> 'Nominar medalla',
	'NOMINATE_FOR'					=> 'Nominar medalla por',
	'NOMINATE_MEDAL'				=> 'Gestionar nominaciones',
	'NOMINATE_MESSAGE'				=> '<b>%1$s nominates this user for the medal "%2$s" for the following reason:</b>' . "\n\n",
	'NOMINATE_USER_LOG'				=> 'Gestionar nominaciones para %s',
	'NOMINATED_BY'					=> '[Nominado por %s]',
	'NOMINATED_EXPLAIN'				=> '¿Pueden los usuarios nominar a otros usuarios por esta medalla?',
	'NOMINATED_TITLE'				=> 'Nominaciones de medalla',
	'NO_MEDALS_NOMINATED'			=> 'Medalla no nominada',
	'NOMINATIONS_REMOVE_GOOD'		=> '¡Nominaciones removidas exitosamente!',

// Images
	'IMAGE_PREVIEW'					=> 'Vista previa',
	'MEDAL_IMG'						=> 'Imagen',

// medals view
	'MEDAL'							=> 'Medalla',
	'MEDALS'						=> 'Medallas',
	'MEDALS_VIEW_BUTTON'			=> 'Detalles de adjudicaciones',
	'MEDALS_VIEW'					=> 'Medallas',
	'MEDAL_DETAIL'					=> 'Detalle de medalla',
	'MEDAL_DESCRIPTION'				=> 'Descripción de medalla',
	'MEDAL_DESC'					=> 'Descripción',
	'MEDAL_AWARDED'					=> 'Recipientes',
	'MEDAL_AWARDED_EXPLAIN'			=> '<br>Click en el nombre de usuario para administrar sus medallas',
	'MEDAL_AWARD_REASON'			=> 'Razón de adjudicación',
	'MEDAL_AWARD_REASON_EXPLAIN'	=> '<br>Ingresa la razón para adjudicar esta medalla',
	'MEDAL_NOMINATE_REASON'			=> 'Razón de nominación',
	'MEDAL_NOMINATE_REASON_EXPLAIN'	=> '<br>Ingresa la razón para nominar esta medalla',
	'MEDAL_AWARD_USER_EXPLAIN'		=> '<br>Enter the users to be awarded this medal (each name on a separate line)',
	'MEDAL_INFORMATION'				=> 'Información de la medalla',
	'MEDAL_INFO'					=> 'Información',
	'MEDAL_MOD'						=> 'Adjudicar',
	'MEDAL_NAME'					=> 'Nombre',
	'NO_MEDALS_ISSUED'				=> 'Medal Not Issued',
	'MEDAL_CP'						=> 'Medals Control Panel',
	'MEDAL_AWARD_PANEL'				=> 'Medals Award Panel',
	'MEDAL_NOM_BY'					=> 'Nominado por',
	'MEDAL_AMOUNT'					=> 'Cantidad',

// Error messages
	'CANNOT_AWARD_MULTIPLE'			=> 'This user has been awarded the maximum amount assigned to this medal',
	'IMAGE_ERROR'					=> 'No podes seleccionar esto como una medalla para adjudicar',
	'IMAGE_ERROR_NOM'				=> 'No podes seleccionar esto como una medalla para nominar',
	'NO_CAT_ID'						=> 'No se especificó un ID de categoría.',
	'NO_CATS'						=> 'No hay categorías',
	'NO_GOOD_PERMS'					=> 'No tenes los permisos suficientes como para acceder a esta página.<br /><br /><a href="index.php">Regresar al inicio</a>',
	'NO_MEDAL_ID'					=> 'No se ha seleccionado una medalla o ninguna está disponible. Serás redireccionado momentáneamente',
	'NO_MEDAL_MSG'					=> 'El campo del mensaje estaba vacío.<br /><br /><a href="%s">Regresar a la página anterior</a>',
	'NO_MEDALS'						=> 'No hay medallas disponibles',
	'NO_MEDALS_TO_NOMINATE'			=> 'No hay medallas disponibles para nominar a este usuario<br /><br /><a href="%s">Regresar a la página anterior</a>',
	'NO_USER_ID'					=> 'No se especificó un ID de usuario',
	'NO_USER_MEDALS'				=> 'Este usuario no ha sido adjudicado con ninguna medalla',
	'NO_USER_NOMINATIONS'			=> 'Este usuario no ha sido nominado para ninguna medalla',
	'NO_SWAP_ID'					=> 'No se especificó un ID de intercambio',
	'NOT_SELF'						=> 'No te podes auto-nominar',

));

?>