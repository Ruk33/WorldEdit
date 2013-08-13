<?php
/**
*
* points [English]
*
* version $Id: points.php 848 2012-04-18 04:13:08Z femu $
* copyright (c) 2009 wuerzi & femu
* license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if ( empty($lang) || !is_array($lang) )
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

$lang = array_merge($lang, array(
	'ACP_POINTS'						=> 'Ultimate Points',
	'ACP_POINTS_BANK_TITLE'				=> 'Configuración del banco',
	'ACP_POINTS_FORUM_TITLE'			=> 'Configuración de puntos del foro',
	'ACP_POINTS_INDEX_TITLE'			=> 'Configuración de puntos',
	'ACP_POINTS_LOTTERY_TITLE'			=> 'Configuración de la lotería',
	'ACP_POINTS_ROBBERY_TITLE'			=> 'Configuración de robo',
	'ACP_POINTS_USERGUIDE_TITLE'		=> 'Guía del usuario',

	'BANK_ACCOUNT_OPENING'				=> 'Abrir una cuenta',
	'BANK_ACTIONS'						=> 'Acciones',
	'BANK_BACK_TO_BANK'					=> 'Clic %saquí%s para volver al banco',
	'BANK_BACK_TO_INDEX'				=> 'Clic %saquí%s para volver al inicio',
	'BANK_BALANCE'						=> 'Balance',
	'BANK_BUTTON_DEPOSIT'				=> 'Depositar',
	'BANK_BUTTON_WITHDRAW'				=> 'Retirar',
	'BANK_COST'							=> 'Costos de cuenta por período',
	'BANK_DEPOSIT_SMALL_AMOUNT'			=> 'El monto mínimo que puedes depositar es %s %s.',
	'BANK_DEPOSIT_WITHDRAW'				=> 'Depositar & Retirar',
	'BANK_DESCRIPTION'					=> 'Estás aquí en nuestro banco. Sólo contamos bajos costos para un pago, pero también pagamos dinero con una tasa de interés definida. Si abres una cuenta, puedes salvar tu dinero de ser robado Así que vale la pena pensar en ello.<br /><br />',
	'BANK_DISABLED'						=> 'El banco está desactivado',
	'BANK_ERROR_DEPOSIT'				=> 'Ha especificado una cantidad incorrecta o invalida para depositar',
	'BANK_ERROR_NOT_ENOUGH_DEPOSIT'		=> 'No dispones de suficientes %1$s para depositar ese monto',
	'BANK_ERROR_NOT_ENOUGH_WITHDRAW'	=> 'Tu cuenta no tiene suficiente %1$s para retirar esta cantidad',
	'BANK_ERROR_PAYOUTTIME_SHORT'		=> 'Debe especificar un tiempo de pago mayor que cero en la configuración del banco',
	'BANK_ERROR_WITHDRAW'				=> 'Ha especificado un monto incorrecto o invalido de retiro',
	'BANK_FROM_ACCOUNT'					=> 'de su cuenta bancaria',
	'BANK_HAVE_DEPOSIT'					=> 'Has depositado',
	'BANK_HAVE_WITHDRAW'				=> 'Has retirado',
	'BANK_HOLDING'						=> 'Inversiones totales',
	'BANK_INFO'							=> 'Información del banco',
	'BANK_INTEREST_PERIOD'				=> 'Período de pago de los intereses',
	'BANK_INTEREST_RATE'				=> 'Tasa de Interés',
	'BANK_LEAVE_WITH'					=> 'Dejándole con',
	'BANK_MAX_HOLD'						=> 'Máximo valor de los intereses',
	'BANK_MIN_DEPO'						=> 'Depósito mínimo',
	'BANK_MIN_WITH'						=> 'Retiro mínimo',
	'BANK_NEW_BALANCE'					=> 'Tu nuevo saldo es',
	'BANK_NOW_HAVE'						=> 'Ahora tienes',
	'BANK_NO_ACCOUNT'					=> 'El usuario no tiene una cuenta en %1$s',
	'BANK_ON_HAND'						=> 'en mano',
	'BANK_OPEN_ACCOUNT'					=> 'Clic %saquí%s para abrir una cuenta',
	'BANK_RICHEST_USER'					=> 'El banco más rico',
	'BANK_START_BALANCE'				=> 'Tu saldo inicial es 0.',
	'BANK_TITLE_MAIN'					=> 'Banco',
	'BANK_TOTAL_ACCOUNTS'				=> 'Total de cuentas abiertas',
	'BANK_TO_ACCOUNT'					=> 'en tu cuenta bancaria',
	'BANK_USER_NO_ACCOUNT'				=> 'No tienes una cuenta con el %1$s todavía.',
	'BANK_WELCOME_BANK'					=> 'Bienvenido al',
	'BANK_WITHDRAW_RATE'				=> 'Tarifa de retiro',
	'BANK_WITHDRAW_SMALL_AMOUNT'		=> 'La cantidad mínima que puedes retirar es %s %s.',
	'BANK_YOUR_ACCOUNT'					=> 'Ahora puedes depositar y retirar hacia y desde tu cuenta',
	'BANK_ERROR_MUCH_WITHDRAW'			=> 'No puedes retirar más de tus tenencias menos los honorarios',

	'EDIT_BANK_MODIFY'					=> 'Administración del banco',
	'EDIT_NO_ID_SPECIFIED'				=> 'No has especificado un nombre de usaurio',
	'EDIT_POINTS_ADMIN'					=> 'Puntos de administración',
	'EDIT_POINTS_MODIFY'				=> '%s administración',
	'EDIT_POINTS_SET'					=> 'Las %1$s del usuario han sido actualizadas.<br /><br />',
	'EDIT_P_BANK_TITLE'					=> 'Aquí puedes modificar las $s del banco del usuario.',
	'EDIT_P_POINTS_TITLE'				=> 'Aquí puedes modificar las $s a un usuario.',
	'EDIT_P_RETURN_INDEX'				=> 'Clic %1$saquí%2$s para volver a la página inicial.',
	'EDIT_P_RETURN_POST'				=> 'Clic %1$saquí%2$s para volver al post de donde viniste.',
	'EDIT_SET_AMOUNT'					=> 'Nuevo monto',
	'EDIT_USER_NOT_EXIST'				=> 'Este usuario no existe.',

	'INFO_GENERAL_INFORMATIONS'			=> 'Información general',
	'INFO_ATTACH'						=> 'Puntos por attachments en un nuevo post',
	'INFO_ADD_ATTACH'					=> 'Puntos por cada nuevo attachment',
	'INFO_NO_COST'						=> 'Actualmente no tienes que pagar ninguna %1$s por esto',
	'INFO_NO_POINTS'					=> 'Actualmente no recibirás ninguna %1$s por esto',
	'INFO_POLL'							=> 'Puntos por nuevas encuestas',
	'INFO_POLL_OPTION'					=> 'Puntos por opción en una nueva encuesta',
	'INFO_TOPIC_WORD'					=> 'Puntos por palabra en un nuevo topic',
	'INFO_TOPIC_CHARACTER'				=> 'Puntos por carácter en un nuevo topic',
	'INFO_POST_WORD'					=> 'Puntos por palabra en un nuevo post',
	'INFO_POST_CHARACTER'				=> 'Puntos por carácter en un nuevo post',
	'INFO_COST_DL_ATTACH'				=> 'Costos por descargar un attachment',
	'INFO_COST_WARNING'					=> 'Costos por advertencia',
	'INFO_REG_BONUS'					=> 'Puntos bonificados por registración',

	'LOGS_COMMENT'						=> 'Comentario',
	'LOGS_DATE'							=> 'Fecha',
	'LOGS_DESCRIPTION'					=> 'Aquí verás tus registros.<br />Verás una lista con todas las transferencias que has enviado o recibido.<br />Si estás buscando por una transferencia en específico, solamente usa la opción de clasificación.<br /><br />',
	'LOGS_REASON_NOLOGS'				=> 'No hay registros disponibles.',
	'LOGS_RECV'							=> 'Recibidos',
	'LOGS_SENT'							=> 'Enviados',
	'LOGS_SORT_COMMENT'					=> 'Comentario',
	'LOGS_SORT_DATE'					=> 'Fecha',
	'LOGS_SORT_FROMNAME'				=> 'De',
	'LOGS_SORT_TONAME'					=> 'Enviado a',
	'LOGS_SORT_TYPE'					=> 'Tipo',
	'LOGS_TITLE'						=> '%1$s registros',
	'LOGS_TO'							=> 'Para',
	'LOGS_TYPE'							=> 'Tipo',
	'LOGS_WHO'							=> 'Quien',
	'LOTTERY_ACTIONS'					=> 'Acciones',
	'LOTTERY_BACK'						=> 'Volver a la página principal de la lotería',
	'LOTTERY_DATE'						=> 'Fecha',
	'LOTTERY_DESCRIPTION'				=> 'El valor de tus tickets adquiridos irá al pozo. El pozo actualmente mantiene %1$s %2$s por ronda. A mayor cantidad de jugadores, mayor será el pozo por supuesto. Luego del período de sorteo, un ganador (o inclusive ninguno) es seleccionado aleatoriamente. Si nadie gana, el pozo continuará creciendo. ¡Así que buena suerte!<br /><br />',
	'LOTTERY_DISABLED'					=> 'La lotería está desactivada.',
	'LOTTERY_HISTORY'					=> 'Historial',
	'LOTTERY_INFO'						=> 'Información de la lotería',
	'LOTTERY_INVALID_INPUT'				=> 'Es necesario introducir un número válido para la compra de tickets.',
	'LOTTERY_JACKPOT'					=> 'Pozo',
	'LOTTERY_LACK_FUNDS'				=> '¡No tienes suficientes monedas para efectuar esta compra!',
	'LOTTERY_LAST_WINNER'				=> 'El último ganador fue',
	'LOTTERY_MAX_TICKETS'				=> 'Número máximo de tickets por ronda y jugador',
	'LOTTERY_MAX_TICKETS_LEFT'			=> '¡Solamente te quedan <strong>%1$s</strong> tickets para comprar en esta ronda!',
	'LOTTERY_MAX_TICKETS_REACH'			=> '¡No tienes permitido comprar más de <strong>%1$s</strong> tickets por ronda!',
	'LOTTERY_NEGATIVE_TICKETS'			=> '¡No puedes comprar menos de un boleto!<br />¡Necesitas comprar al menos 1!',
	'LOTTERY_NEVER_WON'					=> '¡Todavía no has ganado la lotería!',
	'LOTTERY_NEXT_DRAWING'				=> 'El próximo sorteo será en',
	'LOTTERY_NO_WINNER'					=> 'No hubo ganador esta vez',
	'LOTTERY_NO_WINNERS'				=> 'Todavía nadie ganó la Lotería.',
	'LOTTERY_PLAYERS'					=> 'Número de jugadores actuales',
	'LOTTERY_PM_BODY'					=> '¡Felicidades! Ganaste %1$s %2$s en nuestra lotería',
	'LOTTERY_PM_CASH_ENABLED'			=> 'Tus ganancias fueron depositadas en tu cuenta.<br /><br /><i>La Administración de lotería</i>',
	'LOTTERY_PM_COMMISION'				=> 'La administración de lotería',
	'LOTTERY_PM_SUBJECT'				=> '¡Ganaste la lotería!',
	'LOTTERY_PURCHASE_TICKET'			=> 'Comprar un ticket',
	'LOTTERY_PURCHASE_TICKETS'			=> 'Comprar tickets',
	'LOTTERY_TICKETS'					=> 'Tickets vendidos hasta ahora',
	'LOTTERY_TICKET_COST'				=> 'Valor del ticket',
	'LOTTERY_TICKET_PURCHASED'			=> '¡Tu compra de tickets está completa!',
	'LOTTERY_TITLE_DESCRIPTION'			=> '¿Cuáles son las reglas para jugar?',
	'LOTTERY_TITLE_MAIN'				=> 'Lotería',
	'LOTTERY_TOTAL_WINNERS'				=> 'Ganadores totales',
	'LOTTERY_VIEWER_TICKETS'			=> 'Tus tickets',
	'LOTTERY_VIEW_HISTORY'				=> 'Ver ganadores anteriores',
	'LOTTERY_VIEW_SELF_HISTORY'			=> 'Ver tu historial de victorias',
	'LOTTERY_WINNINGS'					=> 'Cantidad ganada',

	'MAIN_BANK_HAVE'					=> 'En tu cuenta bancaria adicionalmente tienes %1$s %2$s.',
	'MAIN_HELLO_USERNAME'				=> '¡Hola %1$s !',
	'MAIN_LOTTERY_TICKETS'				=> 'Tenés %1$s tickets.',
	'MAIN_ON_HAND'						=> 'Actualmente tienes %1$s %2$s en mano.',
	'MAIN_USERNAME_LOCKED'				=> 'Este usuario está bloqueado y no puede usar el sistema de puntos.',

	'POINTS'							=> 'Puntos',
	'POINTS_ATTACHMENT_COSTS'			=> 'El attachment <strong>%1$s</strong> cuesta (%2$s %3$s), ¡no tienes suficientes %3$s!',
	'POINTS_ATTACHMENT_MINI_POSTS'		=> '¡Necesitas mas %1$s para poder descargar este attachment!',
	'POINTS_BANK'						=> 'Banco',
	'POINTS_BPOINTS_TOTAL'				=> 'Fondos en el banco: %1$s %2$s',
	'POINTS_BOT_GUEST'					=> '<strong>Si te hubieses registrado con nosotros, ¡serías capaz de usar esta función!</strong>',
	'POINTS_BUPOINTS_TOTAL'				=> 'Cuentas bancarias: %1$s',
	'POINTS_CASH_ON_HAND'				=> 'Dinero en mano',
	'POINTS_COPYRIGHT'					=> 'Ultimate Points por <a href="http://die-muellers.org" onclick="window.open(this.href); return false">femu</a> &amp; <a href="http://www.spieleresidenz.de" onclick="window.open(this.href); return false">Wuerzi</a>',
	'POINTS_DESCRIPTION'				=> 'Descripción',
	'POINTS_DISABLED'					=> 'Ultimate Points está actualmente desactivado.',
	'POINTS_DONATE'						=> '[Donar]',
	'POINTS_EXPLAIN'					=> 'Ultimate Points',
	'POINTS_INFO'						=> 'Información',
	'POINTS_INFO_DESCRIPTION'			=> 'Aquí vas a encontrar información adicional acerca de nuestra política de %1$s.<br /><br />Adicionalmente a estas cantidades, puedes recibir %1$s adicionales en algunos topics.<br /><br />¡El dueño del foro puede deshabilitar las ganancias de %1$s de foros enteros!',
	'POINTS_LOCKED'						=> 'Bloqueado',
	'POINTS_LOGS'						=> 'Registros',
	'POINTS_LOG_MULTI'					=> '%d entradas',
	'POINTS_LOG_SINGLE'					=> '1 entrada',
	'POINTS_LOG_TOTAL'					=> 'Total',
	'POINTS_LOTTERY'					=> 'Lotería',
	'POINTS_LOTTERY_TIME'				=> 'Siguiente sorteo: %1$s',
	'POINTS_MODIFY'						=> '[Modificar]',
	'POINTS_MOST_RICH_CASH_USERS'		=> 'Usuarios con mas dinero',
	'POINTS_MOST_RICH_USERS'			=> 'Usuarios mas ricos',
	'POINTS_MOST_RICH_USERS_DISABLED'	=> 'La visualización está deshabilitada por la administración',
	'POINTS_NO_USER'					=> 'Este nombre de usuario es inválido',
	'POINTS_NUMBER_FORMAT_EXPLAIN'		=> 'Consejo: siempre escribe valores con separador de mil, y un punto para los decimales. Por ejemplo: 1000.50',
	'POINTS_OPTIONS'					=> 'Opciones',
	'POINTS_OVERVIEW'					=> 'Vista general',
	'POINTS_RECEIVED_EDIT_MESSAGE'		=> 'Recibiste <strong>%1$s %2$s</strong> por editar el post',
	'POINTS_RECEIVED_POST_MESSAGE'		=> 'Recibiste <strong>%1$s %2$s</strong> por tu nuevo topic',
	'POINTS_RECEIVED_REPLY_MESSAGE'		=> 'Recibiste <strong>%1$s %2$s</strong> por tu post',
	'POINTS_REMOVE_INSTALL'				=> 'Primero necesitas borrar el archivo install_ultimate_points.php de tu web. De otro modo, ¡Ultimate Points permanecerá inactivo!',
	'POINTS_RETURN_INDEX'				=> 'Clic aquí para regresar al inicio',
	'POINTS_ROBBERY'					=> 'Robo',
	'POINTS_SEPARATOR_DECIMAL'			=> '.',
	'POINTS_SEPARATOR_THOUSANDS'		=> ',',
	'POINTS_STATISTICS'					=> 'Estadísticas de puntos',
	'POINTS_TITLE_MAIN'					=> '%1$s panel de control',
	'POINTS_TOTAL'						=> 'Dinero total en mano: %1$s %2$s',
	'POINTS_TRANSFER'					=> 'Transferencia',
	'POINTS_VIEWING'					=> 'Consola de navegación de puntos',

	'ROBBERY_AMOUNTLOSE'				=> '¡Si tu robo falla, perderás un <strong> %s porciento</strong> de la cantidad que querías robar!<br /><br />',
	'ROBBERY_BAD'						=> 'Lo siento ... ¡tu robo ha fallado!',
	'ROBBERY_CHANCE'					=> 'Aquí puedes intentar robar a otro usuario. ¡Pero solamente puedes intentar robar <strong>%1$s porciento</strong> de su dinero en mano!<br /><br />Como en la vida real el crimen no es siempre exitoso. Tu probabilidad de hacer un robo exitoso es de <strong>%2$s porciento</strong>.',
	'ROBBERY_DISABLED'					=> 'El sistema de robos está desactivado',
	'ROBBERY_MAX_ROB'					=> 'No puedes robar mas del <strong>%1$s %</strong> del dinero a mano del usuario de una vez',
	'ROBBERY_NO_ID_SPECIFIED'			=> 'No has especificado un nombre de usuario',
	'ROBBERY_PM'						=> 'Mensajes privados del módulo de robo',
	'ROBBERY_PM_EXPLAIN'				=> 'Aquí puedes asignar si te gustaría recibir mensajes privados del módulo de robo, si un usuario intenta robarte o si tuvo éxito en hacerlo.',
	'ROBBERY_PM_BAD_BODY'				=> ' %1$s intentó robarte %2$s %3$s!',
	'ROBBERY_PM_BAD_BODY_1'				=> ' %1$s intentó robarte %2$s %3$s! La penalidad por el robo fallido de %4$s %3$s ha sido transferida a tu cuenta.',
	'ROBBERY_PM_BAD_SUBJECT'			=> 'Alguien intentó robarte',
	'ROBBERY_PM_CHANGE'					=> 'Las configuraciones para enviar mensajes privados a través del módulo de robo han sido exitosamente cambiadas.',
	'ROBBERY_PM_SUCCESFUL_BODY'			=> 'Has perdido %2$s %3$s ... </br> ¡%1$s te ha robado! ¡Realmente lo siento!',
	'ROBBERY_PM_SENDER'					=> 'Información de robos',
	'ROBBERY_PM_SUCCESFUL_SUBJECT'		=> '¡Has perdido algunas %1$s!',
	'ROBBERY_SELF'						=> 'No puedes autorobarte.',
	'ROBBERY_SET_AMOUNTR'				=> 'El monto que te gustaría robar',
	'ROBBERY_SET_USERNAMER'				=> 'Nombre del usuario al que te gustaría robar',
	'ROBBERY_START'						=> 'Comenzar robo',
	'ROBBERY_SUCCESFUL'					=> '¡Has realizado un robo exitoso!',
	'ROBBERY_TOO_SMALL_AMOUNT'			=> '¡Necesitas robar un poco mas!<br />El monto ingresado es muy pequeño...',
	'ROBBERY_TO_MUCH'					=> 'Estás intentando robar muchos puntos, si fallas no tendrás con qué pagar el daño...',
	'ROBBERY_TO_MUCH_FROM_USER'			=> 'Estás intentando mas de lo que el usuario tiene.',
	'ROBBERY_USAGE_INFO_LOTTERY'		=> 'Tu penalización por el robo fallido ha sido transferida al pozo de la lotería. ¡Muchas gracias por esto!',
	'ROBBERY_USAGE_INFO_USER'			=> 'Tu penalización por el robo fallido ha sido transferida a %1$s. ¡En su nombre te agradecemos mucho!',

	'TIME_DAY'							=> 'día',
	'TIME_DAYS'							=> 'días',
	'TIME_HOUR'							=> 'hora',
	'TIME_HOURS'						=> 'horas',
	'TIME_MINUTE'						=> 'minuto',
	'TIME_MINUTES'						=> 'minutos',
	'TIME_MONTH'						=> 'mes',
	'TIME_MONTHS'						=> 'meses',
	'TIME_SECOND'						=> 'segundo',
	'TIME_SECONDS'						=> 'segundos',
	'TIME_WEEK'							=> 'semana',
	'TIME_WEEKS'						=> 'semanas',
	'TIME_YEAR'							=> 'año',
	'TIME_YEARS'						=> 'años',
	'TRANSFER_AMOUNT'					=> 'Monto a transferir',
	'TRANSFER_COMMENT'					=> 'Comentario',
	'TRANSFER_DESCRIPTION'				=> 'Aquí puedes transferir algunas %1$s. Simplemente agrega el nombre del usuario y la cantidad de puntos que te gustaría donar y has clic en enviar. La transferencia será archivada en tu registro.',
	'TRANSFER_NO_USER_RETURN'			=> '<strong>¡El nombre de usuario seleccionado es inválido!</strong>',
	'TRANSFER_PM_BODY'					=> 'Has recibido una donación de %1$s %2$s con el siguiente comentario: <br /><i>%3$s</i>',
	'TRANSFER_PM_SUBJECT'				=> '¡Has recibido una donación!',
	'TRANSFER_REASON_MINPOINTS'			=> 'No tienes suficientes %1$s para transferir.',
	'TRANSFER_REASON_TRANSFER'			=> 'La administración ha desactivado las transferencias',
	'TRANSFER_REASON_TRANSUCC'			=> '¡Has transferido <strong>%1$s %2$s</strong> exitosamente a <strong>%3$s</strong>!',
	'TRANSFER_REASON_UNDERZERO'			=> 'No puedes transferir menos de 0.00 %1$s.',
	'TRANSFER_REASON_YOURSELF'			=> '¡No puedes transferirte %1$s!',
	'TRANSFER_SET_USERNAME'				=> '<b>Nombre del usuario al que quieres hacer una donación:</b>',
	'TRANSFER_TITLE'					=> 'Transferencia de %1$s',
	'TRANSFER_TO_NAME'					=> 'Quieres transferir algunas <strong>%2$s</strong> a <strong>%1$s</strong>',

	'UP_INSERT_FIRST_FILL'				=> 'Las tablas han sido rellenadas exitosamente con algunos datos básicos.',
	'UP_REMOVE_CONFIG_ENTRIES'			=> 'Las entradas de la tabla de configuraciones han sido removidas exitosamente',
	'UP_REMOVE_FORUM_ENTRIES'			=> 'Las entradas de la tabla del foro han sido removidas exitosamente',
	'UP_ULTIMATE_POINTS_NAME'			=> 'Ultimate Points',
	'UP_ULTIMATE_POINTS_NAME_EXPLAIN'	=> 'Con este mod. le darás a los usuarios la posibilidad de recolectar y gastar puntos. Has clic en las acciones inferiores para llevar a cabo lo que te gustaría hacer. Activar <strong>mostrar resultados completos</strong> es recomendado.<br /><br />¡Diviértete!',
	'UP_UPDATE_SUCCESFUL'				=> 'Las tablas han sido actualizadas exitosamente',
));

?>