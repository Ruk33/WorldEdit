<?php
/**
*
* points [German]
*
* version $Id: points.php 851 2012-04-25 16:04:56Z Wuerzi $
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
	'ACP_POINTS_BANK_TITLE'				=> 'Bank Einstellungen',
	'ACP_POINTS_FORUM_TITLE'			=> 'Forenpunkte Einstellungen',
	'ACP_POINTS_INDEX_TITLE'			=> 'Punkte Einstellungen',
	'ACP_POINTS_LOTTERY_TITLE'			=> 'Lotterie Einstellungen',
	'ACP_POINTS_ROBBERY_TITLE'			=> 'Diebstahl Einstellungen',
	'ACP_POINTS_USERGUIDE_TITLE'		=> 'Benutzerhilfe',

	'BANK_ACCOUNT_OPENING'				=> 'Eröffne ein Konto',
	'BANK_ACTIONS'						=> 'Aktionen',
	'BANK_BACK_TO_BANK'					=> 'Klicke %shier%s, um zur Bank zurückzukehren',
	'BANK_BACK_TO_INDEX'				=> 'Klicke %shier%s, um zum Index zurückzukehren',
	'BANK_BALANCE'						=> 'Kontostand',
	'BANK_BUTTON_DEPOSIT'				=> 'Einzahlen',
	'BANK_BUTTON_WITHDRAW'				=> 'Abheben',
	'BANK_COST'							=> 'Kontoführungsgebühren pro Periode',
	'BANK_DEPOSIT_SMALL_AMOUNT'			=> 'Der kleinste Betrag zum Einzahlen lautet %1$s %2$s.',
	'BANK_DEPOSIT_WITHDRAW'				=> 'Einzahlung & Abhebung',
	'BANK_DESCRIPTION'					=> 'Du befindest dich hier in unserer Hausbank. Bei uns gibt es nur geringe Kontoführungsgebühren, dafür erhältst du aber hier auch ein paar Zinsen für deine schwer verdienten %s.<br /><br /> Eine Geldanlage auf der Bank könnte sich - neben den Guthabenzinsen - durchaus für dich lohnen, denn auf der Bank ist dein Geld sicher und es kann dir nicht gestohlen werden.<br /><br />',
	'BANK_DISABLED'						=> 'Die Bank ist deaktiviert',
	'BANK_ERROR_DEPOSIT'				=> 'Du hast einen ungültigen oder falschen Betrag zum Einzahlen eingegeben',
	'BANK_ERROR_NOT_ENOUGH_DEPOSIT'		=> 'Du besitzt nicht genügend %1$s, um soviel einzuzahlen',
	'BANK_ERROR_NOT_ENOUGH_WITHDRAW'	=> 'Du hast weniger %1$s auf der Bank, als du versuchst abzuheben',
	'BANK_ERROR_PAYOUTTIME_SHORT'		=> 'Du mußt in der Bank Konfigurationen einen Wert größer als 0 eintragen!',
	'BANK_ERROR_WITHDRAW'				=> 'Du hast einen ungültigen oder falschen Betrag zum Abheben eingegeben',
	'BANK_FROM_ACCOUNT'					=> 'von deinem Konto abgehoben',
	'BANK_HAVE_DEPOSIT'					=> 'Du hast',
	'BANK_HAVE_WITHDRAW'				=> 'Du hast',
	'BANK_HOLDING'						=> 'Gesamte Einlagen',
	'BANK_INFO'							=> 'Bank Informationen',
	'BANK_INTEREST_PERIOD'				=> 'Zinsauszahlungsperiode',
	'BANK_INTEREST_RATE'				=> 'Zinssatz',
	'BANK_LEAVE_WITH'					=> 'Damit bleiben dir',
	'BANK_MAX_HOLD'						=> 'Max. Betrag für Guthabenzinsen',
	'BANK_MIN_DEPO'						=> 'Mindestbetrag zum Einzahlen',
	'BANK_MIN_WITH'						=> 'Mindestbetrag zum Abheben',
	'BANK_NEW_BALANCE'					=> 'Dein neuer Kontostand lautet',
	'BANK_NOW_HAVE'						=> 'Du hast nun',
	'BANK_NO_ACCOUNT'					=> 'Benutzer hat kein Konto bei der %1$s',
	'BANK_ON_HAND'						=> 'in Bar',
	'BANK_OPEN_ACCOUNT'					=> 'Klicke %shier%s, um ein Konto zu eröffnen',
	'BANK_RICHEST_USER'					=> 'Die reichsten Banker',
	'BANK_START_BALANCE'				=> 'Dein Startkontostand beträgt 0.',
	'BANK_TITLE_MAIN'					=> 'Bank',
	'BANK_TOTAL_ACCOUNTS'				=> 'Gesamte Anzahl Konten',
	'BANK_TO_ACCOUNT'					=> 'auf dein Konto eingezahlt',
	'BANK_USER_NO_ACCOUNT'				=> 'Du hast noch kein Konto bei der %1$s.',
	'BANK_WELCOME_BANK'					=> 'Willkomen bei der',
	'BANK_WITHDRAW_RATE'				=> 'Gebühren für’s Abheben',
	'BANK_WITHDRAW_SMALL_AMOUNT'		=> 'Der Mindestbetrag zum Abheben beträgt %1$s %2$s.',
	'BANK_YOUR_ACCOUNT'					=> 'Du kannst nun von deinem Konto abheben oder auf dein Konto einzahlen',
	'BANK_ERROR_MUCH_WITHDRAW'			=> 'Du kannst nicht mehr abheben, als dein Guthaben abzgl. der Gebühren',

	'EDIT_BANK_MODIFY'					=> 'Bank Administration',
	'EDIT_NO_ID_SPECIFIED'				=> 'Du hast keinen Benutzernamen eingegeben',
	'EDIT_POINTS_ADMIN'					=> 'Points Admin',
	'EDIT_POINTS_MODIFY'				=> '%s Administration',
	'EDIT_POINTS_SET'					=> 'Die %1$s des Benutzers wurden aktualisiert.<br /><br />',
	'EDIT_P_BANK_TITLE'					=> 'Hier kannst du die Bank %s eines Benutzers bearbeiten.',
	'EDIT_P_POINTS_TITLE'				=> 'Hier kannst du die %s eines Benutzers bearbeiten.',
	'EDIT_P_RETURN_INDEX'				=> 'Klicke %1$shier%2$s, um zum Index zurückzukehren.',
	'EDIT_P_RETURN_POST'				=> 'Klicke %1$shier%2$s, um zum letzten Beitrag zurückzukehren.',
	'EDIT_SET_AMOUNT'					=> 'Neuer Betrag',
	'EDIT_USER_NOT_EXIST'				=> 'Dieser Benutzer existiert nicht.',

	'INFO_GENERAL_INFORMATIONS'			=> 'Allgemeine Informationen',
	'INFO_ATTACH'						=> 'Punkte für Dateianhänge in neuen Beiträgen',
	'INFO_ADD_ATTACH'					=> 'Zusätzliche Punkte für jede neu angehängte Datei',
	'INFO_NO_COST'						=> 'Derzeit mußt du keine %1$s dafür ausgeben',
	'INFO_NO_POINTS'					=> 'Derzeit bekommst du keine %1$s dafür',
	'INFO_POLL'							=> 'Punkte für neue Umfragen',
	'INFO_POLL_OPTION'					=> 'Punkte für jede Auswahl in neuen Umfragen',
	'INFO_TOPIC_WORD'					=> 'Punkte pro Wort in neuen Themen',
	'INFO_TOPIC_CHARACTER'				=> 'Punkte pro Zeichen in neuen Themen',
	'INFO_POST_WORD'					=> 'Punkte pro Wort in neuen Beiträgen',
	'INFO_POST_CHARACTER'				=> 'Punkte pro Zeichen in neuen Beiträgen',
	'INFO_COST_DL_ATTACH'				=> 'Kosten pro Download eines Dateianhanges',
	'INFO_COST_WARNING'					=> 'Kosten pro Verwarnung',
	'INFO_REG_BONUS'					=> 'Punkte Bonus beim Registrieren',

	'LOGS_COMMENT'						=> 'Kommentar',
	'LOGS_DATE'							=> 'Datum',
	'LOGS_DESCRIPTION'					=> 'Hier ist dein Kontoauszug.<br /><br />Es werden alle Überweisungen bzw. Schenkungen angezeigt, die du erhalten oder selbst getätigt hast.<br /><br />Du bist auf der Suche nach einem bestimmten Zahlungsvorgang? <br />Dann sortiere einfach deinen Kontoauszug nach dem gewünschten Kriterium.<br /><br />',
	'LOGS_REASON_NOLOGS'				=> 'Es sind keine Logeinträge verfügbar.',
	'LOGS_RECV'							=> 'Erhalten',
	'LOGS_SENT'							=> 'Gesendet',
	'LOGS_SORT_COMMENT'					=> 'Kommentar',
	'LOGS_SORT_DATE'					=> 'Datum',
	'LOGS_SORT_FROMNAME'				=> 'Von wem',
	'LOGS_SORT_TONAME'					=> 'An wen',
	'LOGS_SORT_TYPE'					=> 'Typ',
	'LOGS_TITLE'						=> '%1$s Logs',
	'LOGS_TO'							=> 'An wen',
	'LOGS_TYPE'							=> 'Typ',
	'LOGS_WHO'							=> 'Von wem',
	'LOTTERY_ACTIONS'					=> 'Aktionen',
	'LOTTERY_BACK'						=> 'Zurück zur Lotterie Seite',
	'LOTTERY_DATE'						=> 'Datum',
	'LOTTERY_DESCRIPTION'				=> 'Der Wert deiner gekauften Lose geht in den Jackpot, der bereits einen Grundwert von <strong>%1$s %2$s</strong> hat.<br /><br />Je mehr Mitspieler du hast, umso höher wird natürlich der Jackpot. Nach einem Zufallsprinzip wird ein Gewinner gezogen. Aber es gibt immer nur einen Gewinner oder wie im richtigen Leben auch gar keinen. Wenn niemand gewinnt, bleibt der Jackpot bestehen und erhöht sich dann entsprechend bis zur nächsten Ziehung.<br /><br />Viel Glück!<br /><br />',
	'LOTTERY_DISABLED'					=> 'Die Lotterie ist deaktiviert.',
	'LOTTERY_HISTORY'					=> 'HISTORIE',
	'LOTTERY_INFO'						=> 'Lotterie Informationen',
	'LOTTERY_INVALID_INPUT'				=> 'Du musst eine gültige Anzahl eingeben, um Lose kaufen zu können.',
	'LOTTERY_JACKPOT'					=> 'Jackpot',
	'LOTTERY_LACK_FUNDS'				=> 'Du hast nicht genügend Barvermögen, um diesen Kauf zu tätigen!',
	'LOTTERY_LAST_WINNER'				=> 'Der letzte Gewinner war',
	'LOTTERY_MAX_TICKETS'				=> 'Max. Anzahl Lose pro Runde und Spieler',
	'LOTTERY_MAX_TICKETS_LEFT'			=> 'Du hast nur noch <strong>%1$s</strong> Lose übrig, die du in dieser Runde kaufen kannst!',
	'LOTTERY_MAX_TICKETS_REACH'			=> 'Du darfst nur <strong>max. %1$s</strong> Lose pro Runde kaufen!',
	'LOTTERY_NEGATIVE_TICKETS'			=> 'Du kannst keine negativen oder 0 Lose kaufen!<br />Du mußt also mindestens 1 Los kaufen!',
	'LOTTERY_NEVER_WON'					=> 'Du hast bis jetzt nicht in der Lotterie gewonnen!',
	'LOTTERY_NEXT_DRAWING'				=> 'Die nächste Auslosung findet statt am',
	'LOTTERY_NO_WINNER'					=> 'Bei der letzten Ziehung gab es keinen Gewinner',
	'LOTTERY_NO_WINNERS'				=> 'Bis jetzt hat niemand in der Lottery gewonnen.',
	'LOTTERY_PLAYERS'					=> 'Mitspieler bisher',
	'LOTTERY_PM_BODY'					=> 'Herzlichen Glückwunsch! Du hast %1$s in unserer Lotterie gewonnen! %2$s',
	'LOTTERY_PM_CASH_ENABLED'			=> 'Der Gewinn wurde auf dein Konto überwiesen. Viel Spaß damit.<br /><br /><i>Die Lotterie Verwaltung</i>',
	'LOTTERY_PM_COMMISION'				=> 'Die Lotterieverwaltung',
	'LOTTERY_PM_SUBJECT'				=> 'Du hast in der Lotterie gewonnen!',
	'LOTTERY_PURCHASE_TICKET'			=> 'Los kaufen',
	'LOTTERY_PURCHASE_TICKETS'			=> 'Lose kaufen',
	'LOTTERY_TICKETS'					=> 'Bisher verkaufte Lose',
	'LOTTERY_TICKET_COST'				=> 'Kosten für ein Los',
	'LOTTERY_TICKET_PURCHASED'			=> 'Dein Losekauf ist abgeschlossen!',
	'LOTTERY_TITLE_DESCRIPTION'			=> 'Wie wird gespielt?',
	'LOTTERY_TITLE_MAIN'				=> 'Lotterie',
	'LOTTERY_TOTAL_WINNERS'				=> 'Gewinner',
	'LOTTERY_VIEWER_TICKETS'			=> 'Deine Lose',
	'LOTTERY_VIEW_HISTORY'				=> 'Zeige bisherige Gewinner',
	'LOTTERY_VIEW_SELF_HISTORY'			=> 'Zeige deine Gewinnhistorie',
	'LOTTERY_WINNINGS'					=> 'Gesamt gewonnen',

	'MAIN_BANK_HAVE'					=> 'Auf der Bank hortest du nochmal %1$s %2$s.',
	'MAIN_HELLO_USERNAME'				=> 'Hallo %1$s !',
	'MAIN_LOTTERY_TICKETS'				=> 'Du hast %1$s Lose gekauft.',
	'MAIN_ON_HAND'						=> 'Du hast zur Zeit ein Barvermögen von %1$s %2$s.',
	'MAIN_USERNAME_LOCKED'				=> 'Dieser Benutzer ist gesperrt und kann daher Ultimate Points nicht verwenden.',

	'POINTS'							=> 'Punkte',
	'POINTS_ATTACHMENT_COSTS'			=> 'Die Erweiterung <strong>%1$s</strong> ist kostenpflichtig (%2$s %3$s), du hast aber nicht genügend %3$s!',
	'POINTS_ATTACHMENT_MINI_POSTS'		=> 'Du benötigst mehr %1$s, um diesen Anhang downloaden zu können!',
	'POINTS_BANK'						=> 'Bank',
	'POINTS_BPOINTS_TOTAL'				=> 'Einlagen in der %3$s: %1$s %2$s',
	'POINTS_BOT_GUEST'					=> '<strong>Wenn du bei uns registriert wärst, könntest du diese Funktion auch benutzen!</strong>',
	'POINTS_BUPOINTS_TOTAL'				=> 'Konten bei der %2$s: %1$s',
	'POINTS_CASH_ON_HAND'				=> 'Barvermögen',
	'POINTS_COPYRIGHT'					=> 'Ultimate Points by <a href="http://die-muellers.org" onclick="window.open(this.href); return false">femu</a> &amp; <a href="http://www.spieleresidenz.de" onclick="window.open(this.href); return false">Wuerzi</a>',
	'POINTS_DESCRIPTION'				=> 'Beschreibung',
	'POINTS_DISABLED'					=> 'Das Punktesystem ist derzeit nicht verfügbar.',
	'POINTS_DONATE'						=> '[Schenken]',
	'POINTS_EXPLAIN'					=> 'Ultimate Points',
	'POINTS_INFO'						=> 'Informationen',
	'POINTS_INFO_DESCRIPTION'			=> 'Hier findest du zusätzliche Informationen zur Vergabepolitik der %1$s. <br /><br />Unabhängig von diesen Angaben werden dir evtl. noch weitere %1$s in den Themenbereichen ausgezahlt.<br /><br />Bitte beachte aber auch, dass der Boardbetreiber die Möglichkeit hat, komplette Themenbereiche von der Vergabe von %1$s auszuschliessen.',
	'POINTS_LOCKED'						=> 'Gesperrt',
	'POINTS_LOGS'						=> 'Logs',
	'POINTS_LOG_MULTI'					=> '%d Einträge',
	'POINTS_LOG_SINGLE'					=> '1 Eintrag',
	'POINTS_LOG_TOTAL'					=> 'Gesamt',
	'POINTS_LOTTERY'					=> 'Lotterie',
	'POINTS_LOTTERY_TIME'				=> 'Nächste Ziehung: %1$s',
	'POINTS_MODIFY'						=> '[Ändern]',
	'POINTS_MOST_RICH_CASH_USERS'		=> 'Am meisten Bares haben',
	'POINTS_MOST_RICH_USERS'			=> 'Die reichsten Benutzer',
	'POINTS_MOST_RICH_USERS_DISABLED'	=> 'Die Anzeige wurde vom Admin deaktiviert',
	'POINTS_NO_USER'					=> 'Der Benutzername ist ungültig',
	'POINTS_NUMBER_FORMAT_EXPLAIN'		=> 'Hinweis: Beträge immer ohne Tausender Trennzeichen eingeben und Nachkommastellen mit einem Punkt, z.B. 1000.50',
	'POINTS_ON_BANK'					=> 'Auf der Bank',
	'POINTS_ON_HAND'					=> 'Direkt verfügbar',
	'POINTS_OPTIONS'					=> 'Optionen',
	'POINTS_OVERVIEW'					=> 'Überblick',
	'POINTS_RECEIVED_EDIT_MESSAGE'		=> 'Du hast für das Bearbeiten der Nachricht <strong>%1$s %2$s</strong> erhalten',
	'POINTS_RECEIVED_POST_MESSAGE'		=> 'Du hast für dein neues Thema <strong>%1$s %2$s</strong> erhalten',
	'POINTS_RECEIVED_REPLY_MESSAGE'		=> 'Du hast für deine Antwort <strong>%1$s %2$s</strong> erhalten',
	'POINTS_REMOVE_INSTALL'				=> 'Du mußt erst die Datei install_ultimate_points.php von deinem Webspace entfernen. Solange die Datei vorhanden ist, bleibt Ultimate Points deaktiviert!',
	'POINTS_RETURN_INDEX'				=> 'Klicke hier, um zum Index zurückzukehren',
	'POINTS_ROBBERY'					=> 'Diebstahl',
	'POINTS_SEPARATOR_DECIMAL'			=> ',',
	'POINTS_SEPARATOR_THOUSANDS'		=> '.',
	'POINTS_STATISTICS'					=> 'Punkte Statistiken',
	'POINTS_TITLE_MAIN'					=> '%1$s Kontrollkonsole',
	'POINTS_TOTAL'						=> 'Gesamtes Barvermögen: %1$s %2$s',
	'POINTS_TRANSFER'					=> 'Schenken',
	'POINTS_VIEWING'					=> 'Ist in der Punkte Konsole',

	'ROBBERY_AMOUNTLOSE'				=> 'Falls du erwischt wirst, werden dir als Strafe übrigens noch<strong> %s Prozent</strong> des Betrages, den du klauen wolltest, von deinem eigenen Konto abgezogen!<br /><br />',
	'ROBBERY_BAD'						=> 'Dumm gelaufen ... dein Diebstahlversuch ist fehlgeschlagen!',
	'ROBBERY_CHANCE'					=> 'Hier kannst du versuchen, einem anderen Benutzer etwas zu klauen. Allerdings max. <strong>%1$s Prozent</strong> von seinem aktuellen Barvermögen.<br /><br />Wie im richtigen Leben zahlt sich auch hier ein Verbrechen nicht aus. Die Wahrscheinlichkeit, daß dein Diebstahl erfolgreich ist, liegt bei <strong> %2$s Prozent</strong>.',
	'ROBBERY_DISABLED'					=> 'Die Diebstahlmöglichkeit ist deaktiviert',
	'ROBBERY_NO_ID_SPECIFIED'			=> 'Du hast keinen Benutzernamen eingegeben!',
	'ROBBERY_MAX_ROB'					=> 'Du kannst nicht mehr als <strong>%1$s Prozent</strong> vom Barvermögen deines Opfers auf einmal rauben!',
	'ROBBERY_PM'						=> 'PNs vom Diebstahlmodul',
	'ROBBERY_PM_EXPLAIN'				=> 'Hier kannst du einstellen, ob du vom Diebstahlmodul per PN informiert werden möchtest, wenn ein Benutzer versucht hat dich auszurauben oder wenn er auch erfolgreich war.',
	'ROBBERY_PM_BAD_BODY'				=> ' %1$s hat versucht %2$s %3$s von dir zu stehlen!',
	'ROBBERY_PM_BAD_BODY_1'				=> ' %1$s hat versucht %2$s %3$s von dir zu stehlen! Die Strafe für den fehlgeschlagenen Diebstahl (%4$s %3$s) wurde deinem Konto gutgeschrieben.',
	'ROBBERY_PM_BAD_SUBJECT'			=> 'Jemand hat versucht dich auszurauben',
	'ROBBERY_PM_CHANGE'					=> 'Die Einstellung für den Erhalt von PNs vom Diebstahlmodul wurde erfolgreich geändert.',
	'ROBBERY_PM_SUCCESFUL_BODY'			=> 'Du hast %2$s %3$s verloren ... </br> %1$s hat dich ausgeraubt! Tut mir leid für dich :(',
	'ROBBERY_PM_SENDER'					=> 'Diebstahlinfo',
	'ROBBERY_PM_SUCCESFUL_SUBJECT'		=> 'Du hast ein paar %1$s verloren!',
	'ROBBERY_SELF'						=> 'Du kannst dich nicht selbst beklauen ....',
	'ROBBERY_SET_AMOUNTR'				=> 'Gewünschter Diebstahlbetrag',
	'ROBBERY_SET_USERNAMER'				=> 'Name des Opfers',
	'ROBBERY_START'						=> 'Beginne mit dem Diebstahl',
	'ROBBERY_SUCCESFUL'					=> 'Dein Diebstahlversuch war erfolgreich!',
	'ROBBERY_TOO_SMALL_AMOUNT'			=> 'Du musst schon versuchen etwas mehr zu klauen!<br />Der eingegebene Betrag war zu klein.',
	'ROBBERY_TO_MUCH'					=> 'Du versuchst zu viel zu klauen. Wenn der Diebstahl fehlschlägt, kannst du den entstandenen Schaden nicht bezahlen ...',
	'ROBBERY_TO_MUCH_FROM_USER'			=> 'Du versuchst mehr zu klauen, als der Benutzer überhaupt hat',
	'ROBBERY_USAGE_INFO_LOTTERY'		=> 'Deine Strafe für den fehlgeschlagenen Diebstahl wurde in den Lotterie Jackpot einbezahlt. Besten Dank dafür!',
	'ROBBERY_USAGE_INFO_USER'			=> 'Deine Strafe für den fehlgeschlagenen Diebstahl wurde an %1$s überwiesen. Vielen Dank in seinem/ihrem Namen!',

	'TIME_DAY'							=> 'Tag',
	'TIME_DAYS'							=> 'Tage',
	'TIME_HOUR'							=> 'Stunde',
	'TIME_HOURS'						=> 'Stunden',
	'TIME_MINUTE'						=> 'Minute',
	'TIME_MINUTES'						=> 'Minuten',
	'TIME_MONTH'						=> 'Monat',
	'TIME_MONTHS'						=> 'Monate',
	'TIME_SECOND'						=> 'Sekunde',
	'TIME_SECONDS'						=> 'Sekunden',
	'TIME_WEEK'							=> 'Woche',
	'TIME_WEEKS'						=> 'Wochen',
	'TIME_YEAR'							=> 'Jahr',
	'TIME_YEARS'						=> 'Jahre',
	'TRANSFER_AMOUNT'					=> 'Betrag den du verschenken willst',
	'TRANSFER_COMMENT'					=> 'Kommentar',
	'TRANSFER_DESCRIPTION'				=> 'Hier kannst du einem anderen Benutzer ein paar %1$s schenken.<br /><br />Einfach den Betrag eingeben und absenden.<br /><br />Dieser Vorgang wird dann auch in deine Logs eingetragen.<br /><br />',
	'TRANSFER_NO_USER_RETURN'			=> '<strong>Der Benutzername ist ungültig!</strong>',
	'TRANSFER_PM_BODY'					=> 'Du hast eine Spende von %1$s %2$s mit folgendem Kommentar erhalten: <br /><i>%3$s</i>',
	'TRANSFER_PM_SUBJECT'				=> 'Du hast eine Spende erhalten!',
	'TRANSFER_REASON_MINPOINTS'			=> 'Du hast nicht genügend %1$s, um eine Schenkung durchzuführen.',
	'TRANSFER_REASON_TRANSFER'			=> 'Schenkungen wurde vom Administrator deaktiviert.',
	'TRANSFER_REASON_TRANSUCC'			=> 'Du hast <strong>%3$s</strong> erfolgreich <strong>%1$s %2$s</strong> geschenkt!',
	'TRANSFER_REASON_UNDERZERO'			=> 'Du kannst bei einem Guthaben von unter 0.00 %1$s nichts herschenken.',
	'TRANSFER_REASON_YOURSELF'			=> 'Du kannst keine Schenkung von %1$s an dich selbst tätigen!',
	'TRANSFER_SET_USERNAME'				=> '<b>Name des Benutzers, dem du was Gutes tun willst:</b>',
	'TRANSFER_TITLE'					=> '%1$s Schenkung',
	'TRANSFER_TO_NAME'					=> 'Du willst <strong>%1$s</strong> etwas Gutes tun und ein paar <strong>%2$s</strong> verschenken!',

	'UP_INSERT_FIRST_FILL'				=> 'Die Tabllen des Ultimate Points wurden erfolgreich mit den Grundwerten befüllt.',
	'UP_REMOVE_CONFIG_ENTRIES'			=> 'Die Einträge in der Config Tabelle wurden erfolgreich entfernt',
	'UP_REMOVE_FORUM_ENTRIES'			=> 'Die Einträge in der Forums Tabelle wurden erfolgreich entfernt',
	'UP_ULTIMATE_POINTS_NAME'			=> 'Ultimate Points',
	'UP_ULTIMATE_POINTS_NAME_EXPLAIN'	=> 'Mit diesem Mod erlaubst du deinen Benutzern Punkte zu sammeln und auch wieder auszugeben. Wähle unten die gewünschte Aktion aus (normalerweise sind die voreingestellten Felder bereits richtig). Allerdings empfehlen wir das <strong>Zeige ausführliches Ergebnis</trong> auf ja zu stellen.<br /><br />Viel Spaß!',
	'UP_UPDATE_SUCCESFUL'				=> 'Die Tabellen wurden erfolgreich geupdatet',
));

?>