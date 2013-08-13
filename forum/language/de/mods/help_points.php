<?php
/**
*
* help_points [German]
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
	array(
		0 => '--',
		1 => 'Allgemeines'
	),
	array(
		0 => 'Beiträge bearbeiten',
		1 => 'Bearbeitet ein Benutzer seinen Beitrag wird der Beitrag neu berechnet und der Benutzer bekommt nur die Punkte, welche der Beitrag wirklich enthält.
Der Beitrag wird allerdings nur neu berechnet, wenn du in dem jeweiligen Forum auch eingestellt hast, daß man Forenpunkte für einen neuen Beitrag bekommt (größer als 0), sowie global auch die Forenpunkte eingeschaltet sind für neuen Beitrag.'
	),
	array(
		0 => 'Topics bearbeiten',
		1 => 'Bearbeitet ein Benutzer den ersten Beitrag eines Topics, erhält er nur die Punkte die für die Erstellung eines neuen Topics bezahlt werden. Das Topic wird sozusagen neu berechnet, als ob er es neu erstellt hätte.
Das Topic wird allerdings nur neu berechnet, wenn du in dem jeweiligen Forum auch eingestellt hast, daß man Forenpunkte für ein neues Topic bekommt (größer als 0), sowie global auch die Forenpunkte eingeschaltet sind für ein neues Topic.'
	),
	array(
		0 => 'Dateianhänge bearbeiten',
		1 => 'Fügt man einem Beitrag mit einem Dateianhang ein neues Attachment hinzu oder löscht ein Attachment, dann werden immer nur die jeweiligen Dateianhänge berechnet, welche der Beitrag wirklich enthält.
Löscht man alle Attachments aus dem Beitrag, werden auch die allgemeinen Punkte für Dateianhänge wieder abgezogen. Attachments werden immer neu berechnet und haben nichts mit den Punkten für Beitrag oder Topic zu tun!'
	),
	array(
		0 => 'Umfrage bearbeiten',
		1 => 'Bearbeitet ein Benutzer seine Umfrage werden die Punkte für jeden neuen Umfragepunkt immer wieder neu berechnet und der Benutzer erhält nur die Punkte als wäre es eine neue Umfrage.
Ändert man eine Umfrage zu einem normalen Topic, werden auch die allgemeinen Punkte für die Umfrage wieder abgezogen.
Die Umfragen werden allerdings nur neu berechnet, wenn du in dem jeweiligen Forum auch eingestellt hast, daß man Forenpunkte für ein neues Topic bekommt (größer als 0), sowie global auch die Forenpunkte eingeschaltet sind für ein neues Topic. Das macht Sinn, weil eine Umfrage ja auch gleichzeitig ein Topic ist.'
	),
	array(
		0 => 'Beiträge löschen',
		1 => 'Löscht man einen Beitrag aus der Beitragsansicht, werden die Punkte die der Benutzer für diesen Post erhalten hat von seinem Punktekonto abgezogen.
Löscht ein Moderator einen Beitrag aus dem Moderationsbereich, bleiben die Punkte erhalten, genauso wie bei aktiviertem automatischen Pruning.'
	),
	array(
		0 => 'bbcodes',
		1 => 'Der Inhalt von bbcodes wird als normaler Beitrag berechnet, der bbcode selber wird  nicht berücksichtigt.'
	),
	array(
		0 => 'Codeblöcke',
		1 => 'Inhalte von Codeblöcken [code] wird nicht bei der Berechnung berücksichtigt.'
	),
	array(
		0 => 'Smilies',
		1 => 'Für das posten von Smilies erhält man keine Punkte. Beachte aber, daß zwischen zwei Smilies immer Leerzeichen sind, welche widerrum als Zeichen gewertet werden.'
	),
	array(
		0 => 'Zeichen und Sonderzeichen',
		1 => 'Alle einzelnen Zeichen sowie Sonderzeichen und auch Leerzeichen werden gesondert berechnet. Wieviel für  ein Zeichen ausgezahlt wird, lässt sich bei den erweiterten Punkteeinstellungen einstellen.'
	),
	array(
		0 => 'Zitierte Beiträge',
		1 => 'Beiträge welche innerhalb des [quote] bbcodes liegen werden nicht berechnet. Es werden also nur Punkte gezahlt für Beiträge, welcher der Benutzer selber geschrieben hat, nicht für zitierte Beiträge.'
	),
	array(
		0 => 'Zu beachten!',
		1 => 'Texte innerhalb eines normalen bbcodes werden berücksichtigt und bei der Punkteberechnung herangezogen, der bbcode selber nicht. Dies geschieht nicht durch auslesen der bbcodes aus der Datenbank!!!
Es wird lediglich alles zwischen [xxx] und [/xxx] berücksichtigt.
Beendet man einen bbcode nicht, wird deshalb nur bis zum Anfang von [xxx] berechnet!
<br /><br />
Werden Beiträge bearbeitet, für die man noch nie Punkte erhalten hat (Vor Installation, oder bei abgeschaltenen System etc) dann werden auch beim Bearbeiten keine Punkte ausbezahlt!
<br /><br />
Werden Beiträge oder Topics bearbeitet, für die du aus den erweiterten Punkte Einstellungen keine Punkte erhalten hast, dann werden diese geänderten Beiträge oder Topics auch nicht neu berechnet!'
	),
	array(
		0 => '--',
		1 => 'Punkte Einstellungen'
	),
	array(
		0 => 'Allgemein',
		1 => 'Bei den Punkteeinstellungen kannst du den Namen der Währung wählen, das System ggf. deaktivieren und dazu eine Deaktivierungsnachricht eingeben.
Weiterhin kannst du hier z.B. Überweisungen erlauben, einstellen ob die Punktestatistiken auf dem Index angezeigt werden und auch weitere einfache Einstellungen tätigen, welche eigentlich selbsterklärend sein dürften.'
	),
	array(
		0 => 'Gruppenüberweisungen',
		1 => 'Der Menüpunkt Gruppenüberweisung (bei Punkte Einstellungen) ermöglicht es dir einzelnen Benutzergruppen Punkte zu überweisen, abzuziehen oder auf einen eingebenen Wert zu setzen.
Wenn du das Kommentarfeld befüllst, dann erhalten alle Benutzer in dieser Benutzergruppe darüber auch eine PN.
Es sind alle bbcodes erlaubt, allerdings werden in dieser Minikommentarbox nur die gebräuchlichsten angezeigt.'
	),
	array(
		0 => 'Zurücksetzen Benutzerpunkte',
		1 => 'Bei den Punkteeinstellungen findest du ganz unten die Möglichkeit alle Punkte der Benutzer global zurückzusetzen.
Achtung! Diese Aktion kann nicht rückgängig gemacht werden!'
	),
	array(
		0 => 'Zurücksetzen Benutzerlogs',
		1 => 'Bei den Punkteeinstellungen findest du unten die Möglichkeit alle Benutzerlogs (Menüpunkt Logs) zurückzusetzen.
Achtung! Diese Aktion kann nicht rückgängig gemacht werden!'
	),
	array(
		0 => '--',
		1 => 'Erweiterte Punkte Einstellungen'
	),
	array(
		0 => 'Dateianhang',
		1 => 'Du kannst allgemeine Punkte für einen Beitrag mit Dateianhang vergeben sowie zusätzliche für jede neu angehängte Datei. Die allgemeinen Punkte werden sozusagen nur 1x vergeben und die zusätzlichen für jedes hochgeladene Attachment.
In einzelnen Foren lassen sich die Punkte für Dateianhänge NICHT deaktivieren!'
	),
	array(
		0 => 'Umfragen',
		1 => 'Du kannst generelle Punkte für eine Umfrage einstellen sowie zusätzliche für jeden Umfragepunkt. Die generellen werden also pro Umfrage nur 1x vergeben und man erhält zusätzliche für jeden Umfragepunkt.
Da Umfragen gleichzeitig ja neue Topics sind, werden die Punkte für Umfragen nur vergeben, wenn du in den Forenpunkten auch eingestellt hast, dass Punkte für Topics vergeben werden (größer als 0), sowie die globale Einstellung für Punkte für neue Topics eingeschaltet ist.'
	),
	array(
		0 => 'Neue Themen',
		1 => 'Es lassen sich Punkte pro Wort in neuen Themen bzw auch Punkte für jedes enthaltene Zeichen in neuen Themen einstellen.
Ist der Forenpunkteschalter für Punkte pro Thema ausgeschaltet, bzw. sind die Forenpunke in dem jeweilgen Forum auf 0 gestellt, dann werden auch diese erweiterten Punkte nicht gezahlt.'
	),
	array(
		0 => 'Neue Beiträge',
		1 => 'Es lassen sich Punkte pro Wort in neuen Beiträgen bzw auch Punkte für jedes enthaltene Zeichen in neuen Beiträgen einstellen.
Ist der Forenpunkteschalter für Punkte pro Beitrag ausgeschaltet bzw. der Betrag in dem jeweiligen Forum auf 0 eingestellt, dann werden auch diese erweiterten Punkte nicht gezahlt.'
	),
	array(
		0 => 'Verwarnung',
		1 => 'Du hast die Möglichkeit einen Benutzer bei einer Verwarnung einen einstellbaren Betrag von seinen Punkten abzuziehen.
Hat der Benutzer nicht so viel Punkte wie als Verwarnungspunkte eingestellt sind, bekommt der Benutzer die Punkte trotzdem abgezogen und er landet mit seinen Punkten im Minus.'
	),
	array(
		0 => 'Punkte für Registrieren',
		1 => 'Du kannst einstellen daß ein Benutzer bei Registrierung ein gewisses Startkapital erhält.
Diese werden gleich bei der Registrierung vergeben, nicht erst bei der Freischaltung!'
	),
	array(
		0 => 'Einträge pro Seite',
		1 => 'Gib hier an, wie viele Eintrage in den Logs und der Lotterie Historie pro Seite angezeigt werden sollen.
Du kannst hier eine gewünschte Anzahl ab 5 einstellen.'
	),
	array(
		0 => 'Anzahl der reichsten Benutzer',
		1 => 'Du kannst hier die Anzahl der reichsten Benutzer einstellen, welche im Index, der Bank und im Überblick angezeigt werden. Diese Einstellung gilt also für mehrere Ansichten!
Setzt du 0 werden die Anzeigen deaktiviert.
Im Überblick und in der Bank bekommt der Benutzer einen entsprechenden Hinweis angezeigt. Im Index wird es komplett ausgeblendet.'
	),
	array(
		0 => '--',
		1 => 'Forenpunkte Einstellungen'
	),
	array(
		0 => 'Allgemein',
		1 => 'Forenpunkte arbeiten weitgehend unabhängig von den anderen Punkte Einstellungen. Die Forenpunkte werden also zusätzlich zu den erweiterten Punkten gezahlt an die Benutzer. Du kannst die Forenpunkte für jedes Forum anders einstellen!
Die Einstellmöglichkeit findest du im ACP - Foren - Foren-Administration - jeweiliges Forum.'
	),
	array(
		0 => 'Die Schalter',
		1 => 'Mit den Foren Punkte Schaltern kannst du global die Forenpunkte aktivieren bzw deaktiveren. Deaktivierst du die Schalter für Thema, Beitrag oder Bearbeitungen werden in allen Foren keine Forenpunkte sowie auch keine Punkte mehr für neue Topics, Beiträge (aus den erweiterten Punkteeinstellungen) mehr verteilt. Auch werden diese beim Bearbeiten nicht berücksichtigt.'
	),
	array(
		0 => 'Forenpunkte Einstellungen',
		1 => 'Du kannst die einzelnen Forenpunkte in den Foren global überschreiben in dem Modul Forenpunkte Einstellungen des Ultimate Points.
Diese Einstellungen gelten dann für ALLE Foren. Bitte beachte: Wenn du zuvor einzelne Foren manuell verändert hast, werden diese Einstellungen überschrieben und du musst sie erneut vornehmen!'
	),
	array(
		0 => 'Neues Topic',
		1 => 'Bei den Forenpunkten kannst du einstellen wieviel Punkte für ein neues Thema zusätzlich zu den erweiterten Punkteeinstellungen gezahlt werden.
Du kannst dies bei den Forenpunkte Einstellungen global für alle Foren setzen oder einzeln im ACP - Foren.
Stellst  du in dem jeweiligen Forum 0 ein, dann werden auch keine erweiterten Punkte für Wort / Zeichen aus den erweiterten Punkteeinstellungen gezahlt.'
	),
	array(
		0 => 'Neuer Beitrag',
		1 => 'Bei den Forenpunkten kannst du einstellen wieviel Punkte für neue Beiträge zusätzlich  zu den erweiterten Punkteeinstellungen gezahlt werden.
Du kannst dies bei den Forenpunkte Einstellungen global für alle Foren setzen oder einzeln im ACP - Foren.
Stellst  du in dem jeweiligen Forum 0 ein, dann werden auch keine erweiterten Punkte für Wort / Zeichen aus den erweiterten Punkteeinstellungen gezahlt.'
	),
	array(
		0 => 'Beitrag bearbeiten',
		1 => 'Hier kann man einstellen ob für das Bearbeiten eines Beitrages zusätzlich Punkte ausbezahlt werden.'
	),
	array(
		0 => 'Dateianhänge im Forum kostenpflichtig',
		1 => 'Hier kannst du festlegen, ob für dieses Forum der Download von Dateianhängen kostenpflichtig ist. Die jeweiligen Kosten sind dann abhängig von den Kosten, die du unter <strong>Beiträge -> Dateianhang-Konfiguration -> Dateitypen verwalten</strong> festlegst. Dort kannst du wiederum festlegen, welche Datei-Erweiterungen kostenpflichtig sind und wenn ja, welche Kosten für den Download anfallen!

Beachte dass z.B. Bilder in Dateianhängen direkt angzeigt werden und somit für jede Ansicht des Bildes der eingestellte Beitrag von den Benutzerpunkten abgezogen wird!
Hat der Benutzer nicht die benötigen Punkte für das herunterladen eines Attachments sieht er das Bild nicht!'
	),
	array(
		0 => '--',
		1 => 'Bank'
	),
	array(
		0 => 'Allgemein',
		1 => 'Ist die Bank aktiviert sehen die Benutzer eine extra Bankseite in Ultimate Points. Ebenfalls ist in der Profilansicht eines Benutzers, sowie in der Viewtopic ein Link zu sehen, wo Moderatoren bzw Admins bei demensprechender Einstellung die Punkte manuell ändern können.'
	),
	array(
		0 => 'Zinsen',
		1 => 'Es lässt sich ein Zinssatz von 0 - 100 % pro Zinsauszahlungsperiode einstellen. Die Zinsauszahlung lässt sich in Tagen einstellen. In diesem eingestellten Rhythmus, werden dann jeweils die Zinsen automatisch an die Bankbenutzer ausbezahlt. Du kannst die Zinsen ab einem einstellbaren Wert deaktivieren. Für Guthaben, die diesen Wert überschreiten, erhält der Benutzer dann keine Zinsen mehr. Also lediglich für Guthaben bis zu diesem gesetzten Wert. Setzt du hier 0, wird diese Option deaktivert und die Zinsen werden für das gesammte Guthaben ausbezahlt.'
	),
	array(
		0 => 'Bankkosten',
		1 => 'Es lassen sich Gebühren festsetzen, welche für Abhebungen bei der Bank erhoben werden. Diese lassen sich von 0 - 100 % einstellen.
Zusätzlich lassen sich noch Kontoführungsgebühren als fester Betrag einstellen, welche regelmäßig vom Bankkonto abgezogen werden.
Die Zeitperiode für die Bankkosten ist die gleiche wie die eingestellte Zinsauszahlungsperiode.'
	),
	array(
		0 => '--',
		1 => 'Lotterie'
	),
	array(
		0 => 'Allgemein',
		1 => 'Ist die Lotterie aktiviert haben die Benutzer Zugriff auf die Lotterieseite.
Ist die Lotterie deaktiviert läuft die Ausspielung noch weiter, es ist lediglich der Zugriff auf die Lotterie gesperrt!
Der Anstoß bzw Berechnung zur nächsten Ausspielung erfolgt über den Aufruf der Lotterieseite sowie auch der Index Seite.'
	),
	array(
		0 => 'Funktionsweise',
		1 => 'Aus allen gekauften Losen wird durch ein Zufallsprinzip ein Los gezogen.
Anschließend wird anhand der eingestellten Erfolgswahrscheinlichkeit entschieden, ob dieses Los auch gewinnt. Gewinnt es nicht, landet der komplette Betrag der beim Loskauf eingenommen wurde in einen Jackpot, der dann vielleicht beim nächsten mal ausgespielt wird.'
	),
	array(
		0 => 'Jackpot',
		1 => 'Die Lotterie arbeitet mit einem Jackpotsystem. Der Betrag aller gekauften Lose landen in diesem. Zusätzlich lässt sich ein Standardwert für den Jackpot einstellen, der immer zusätzlich ausgezahlt wird. Gewinnt bei einer Ausspielung kein Benutzer bleibt der Jackpot bestehen und erhöht sich weiter durch gekaufte Lose.'
	),
	array(
		0 => 'Erfolgswahrscheinlichkeit',
		1 => 'Du kannst die Wahrscheinlichkeit für eine erfolgreiche Ausspielung einstellen, diese wird den Benutzern auf der Lotterieseite nicht angezeigt.
0 = Keine Ausspielung
100 = Der Jackpot mit den darin enthaltenen Betrag der gekauften Lose wird auf jeden Fall ausgespielt.'
	),
	array(
		0 => 'Kaufphase',
		1 => 'Die Kaufphase lässt sich in Stunden einstellen. Eine Änderung wirkt sich direkt auf die aktuelle Kaufphase aus.
Setzt du die Kaufphase auf 0 wird die Ausspielung ausgesetzt (angehalten).
Die Benutzer haben keine Möglichkeit noch Lose zu kaufen.
Der Jackpot mit den bereits verkauften Losen bleibt bestehen.
Du kannst diese Einstellung nutzen um eine Ausspielung zu erzwingen.
Sobald du wieder eine Kaufphase einstellst, wird die Lotterie beim nächsten Aufruf der Seite ausgespielt.'
	),
	array(
		0 => 'Nächste Ziehung einstellen',
		1 => 'Gebe hier deine nächste gewünschte Ziehung im UNIX Format ein. Die entsprechende Umwandlung kannst du bei Unixtime.de vornehmen. Diese Einstellung wird nur benötigt, wenn du den Zeitpunkt der Ausspielung ändern willst. Während des normalen Betriebes passt sich die nächste Ziehung immer anhand der Kaufphase an.'
	),
	array(
		0 => 'Absender Id',
		1 => 'Die Absender Id ist die Benutzer id der Glücksfee, welche die freudige Nachricht über einen Gewinn per PN an den Gewinner sendet. Es scheint also so, als würde der Benutzer mit dieser Id diese private Nachricht senden.
Willst du keine Glücksfee einsetzen, dann gebe in dieses Feld eine 0 ein und der Gewinner erhält eine PN von sich selbst.'
	),
	array(
		0 => '--',
		1 => 'Diebstahl'
	),
	array(
		0 => 'Allgemein',
		1 => 'Das Diebstahlsystem ermöglicht es von anderen Benutzern Punkte zu stehlen, welche sie nicht auf die Bank eingezahlt haben.
Du kannst das System aktiveren bzw deaktivieren. Ist das System deaktiviert ist der link zu der Diebstahlseite für die Benutzer nicht mehr sichtbar.'
	),
	array(
		0 => 'Private Nachrichtenfunktion',
		1 => 'Du kannst einstellen, ob die Benutzer über einen Diebstahl per PN unterrichtet werden.
Hat der Benutzer in seinem persönlichen Bereich eingestellt, daß er generell keine PNs von anderen erhalten will, dann erhält er auch vom Diebstahlsystem keine.

Ist der Dieb für den Versand von PNs gesperrt, wird trotzdem eine PN an das Opfer geschickt. Da dies ein vorgefertigter Text ist, kann der gesperrte Benutzer den Text ja nicht beeinflussen bzw das Opfer durch die PN direkt belästigen.

Jeder Benutzer kann im Diebstahlmodul für sich selbst einstellen, ob er über einen Diebbstahlversuch bzw. einen erfolgreichen Diebstahl per PN informiert werden möchte. Ist das Versenden von Diebstahl PNs im ACP global deaktiviert, bekommt der Benutzer diese Option nicht angezeigt.'
	),
	array(
		0 => 'Erfolgswahrscheinlichkeit',
		1 => 'Du kannst die Erfolgswahrscheinlichkeit für einen Diebstahl in Prozent einstellen.
Die Erfolgswahrscheinlichkeit wird den Benutzern auch auf der Diebstahlseite angezeigt.
Du kannst eine beliebige Zahl zwischen 0 und 100 % eingeben.'
	),
	array(
		0 => 'Strafe für fehlgeschlagenen Diebstahl',
		1 => 'Einstellbar ist die Strafe die der Dieb erhält, wenn der Diebstahl fehlschlägt.
Der Dieb bekommt in diesem Fall die eingestellte Prozentzahl, des Betrages den er klauen wollte von seinen Punkten abgezogen.
Die Strafe wird den Benutzern auf der Diebstahlseite angezeigt.
Du kannst einen beliebigen Wert zwischen 0 und 100 Prozent einstellen.'
	),
	array(
		0 => 'Maximale Höhe des Diebstahlbetrages',
		1 => 'Du kannst einstellen, wieviele Punkte der Dieb maximal von seinem Opfer klauen kann.
Du kannst einen beliebigen Wert zwischen 0 und 100 Prozent einstellen.
Der maximale Betrag, den mal klauen kann wird auf der Diebstahlseite angezeigt.'
	),
	array(
		0 => 'Verwendung der Strafe bei fehlgeschlagenen Überfällen',
		1 => 'Du kannst einstellen, was mit der Strafe für einen fehlgeschlagenen Diebstall passieren soll. Du kannst diese entweder direkt in den Lotterie Jackpot überweisen oder per Zufall entweder an den Beraubten bzw. den Lotterie Jackpot überweisen.'
	),
	array(
		0 => '--',
		1 => 'Schenken / Überweisungen'
	),
	array(
		0 => 'Allgemein',
		1 => 'Wenn du deinen Benutzern die Berechtigung gibst, anderen Benutzern Punkte zu überweisen finden die Benutzer eine Seite in Ultimate Points von der sie Punkte an an andere schenken können.
Gleichzeitig können die Benutzer dann den link in der Viewtopic sowie im Profil des Benutzers benutzen.'
	),
	array(
		0 => 'Private Nachricht bei Überweisung',
		1 => 'Auf der Hauptseite im ACP kannst du einstellen ob die Benutzer per PN über eine Schenkung informiert werden.
Ist ein Benutzer für den Versand von privaten Nachrichten gesperrt, kann er keinen Kommentar bei der Schenkung hinzufügen. Eine einfache PN wird trotzdem verschickt, welche der für PN gesperrte Benutzer aber nicht beeinflussen kann.'
	),
	array(
		0 => 'Logs',
		1 => 'Alle Überweisungen werden auf der Log Seite mit allen vorhandenen Informationen angezeigt.
Die Log Seite kannst du im ACP aktivieren/deaktiveren.
Auf der Hauptseite im ACP kannst du die Benutzerlogs auch alle zurücksetzen.
Diese Aktion lässt sich nicht rückgängig machen!'
	),
	array(
		0 => '--',
		1 => 'Berechtigungssystem'
	),
	array(
		0 => 'Adminberechtigungen',
		1 => 'Im ACP Modul Berechtigungen --> Allgemeine Berechtigungen --> Administratoren kannst du einem Admin die Berechtigung geben die Einstellungen des Ultimate Points im ACP zu verwalten bzw zu ändern.'
	),
	array(
		0 => 'Globale Moderatorenberechtigungen',
		1 => 'Im ACP Modul Berechtigungen --> Allgemeine Berechtigungen --> Globale Moderatoren kannst du einstellen ob deine globalen Moderatoren die Punkte anderer Benutzer, sowie die Bankguthaben anderer Benutzer ändern können.'
	),
	array(
		0 => 'Benutzer und Gruppenrechte',
		1 => 'Im ACP Modul Berechtigungen --> Allgemeine Berechtigungen --> Gruppenrechte bzw Benutzerrechte kannst du Gruppen bzw. Benutzer die Berechtigung geben, das Ultimate Points System verwenden zu können oder ggf die Nutzung untersagen.
Einstellbar sind hier:
<ul>
	<li>Kann das Bank Modul verwenden</li>
	<li>Kann das Log Modul verwenden</li>
	<li>Kann das Lotterie Modul verwenden</li>
	<li>Kann Ultimate Points verwenden</li>
	<li>Kann das Diebstahl Modul verwenden</li>
	<li>Kann das Transfer Modul verwenden</li>
</ul>'
	),
	array(
		0 => '--',
		1 => 'AddOns und Kompatibilität mit anderen Mods'
	),
	array(
		0 => 'phpBB Arcade',
		1 => 'Ultimate Points ist kompatibel mit phpBB Arcade ( <a href="http://phpbbarcade.origon.dk/" onclick="window.open(this.href); return false">phpBB Arcade</a> )
Die Arcade Modifikation erkennt selbständig, wenn Ultimate Points installiert ist.
Du kannst im Arcade Spielekosten, sowie einen Jackpot setzen.'
	),
	array(
		0 => 'phpbb Gallery',
		1 => 'Ultimate Points ist kompatibel zur phpBB Gallery von nickvergessen.
( <a href="http://www.flying-bits.org/" onclick="window.open(this.href); return false">Flying-bits.org</a> )<br /><br />
Sobald du diese Modifikation installiert hast, findest du bei den Punkteeinstellungen die Einstellmöglichkeiten für dieses AddOn.<br /><br />
Im Contrib Ordner findest du das AddOn, welches du aus dem UPS Paket an die korrekte Stelle auf deinen Webspace kopieren musst! Beachte dabei bitte die Version deiner Gallery Modifikation, da Unterschiede zwischen Version 1.0.x und Version 1.1.x der Gallery bestehen.
<br /><br /><strong>Achtung!</strong> Wenn du eine der Boxen (Highslide, Lightbox, etc) installiert und aktiviert hast, werden hier technisch bedingt, die Punkte doppelt abgezogen. Wenn du also 2 Punkte abziehen willst, mußt du die Hälfte eintragen - also 1 Punkt!<br />Für die Highslide Box gibt es
( <a href="http://highslide.com/forum/viewtopic.php?p=18498#p18498">hier</a> ) bereits einen Fix!'
	),
	array(
		0 => 'Medal System MOD',
		1 => 'Ultimate Points ist kompatibel mit dem Medal System MOD.
Im Medal Mod selber findest du bei den einzelnen Medaillen ein Punktefeld, bei dem du einstellen kannst, wieviel Punkte der Benutzer bei Verleihung einer Medaille zusätzlich erhält.'
	),
	array(
		0 => 'Sudoku',
		1 => 'Ultimate Points ist kompatibel mit dem Sudoku Mod von el_teniente ( <a href="http://vfalcone.ru/" onclick="window.open(this.href); return false">vfalcone.ru</a> ). Die Einstellmöglichkeiten hierzu findest du im Sudoku Mod.'
	),
	array(
		0 => 'F1 Webtipp',
		1 => 'Ultimate Points ist kompatibel mit dem Formel 1 WebTipp von Dr. Death ( <a href="http://www.lpi-clan.de/" onclick="window.open(this.href); return false">LPI-Clan</a> ).
Im ACP findest du bei den Formel 1 Einstelllungen die Möglichkeit einzustellen, wieviel Punkte ein abgegebener Tipp wert ist.'
	),
	array(
		0 => 'DM Video',
		1 => 'Ultimate Points ist kompatibel mit dem DM Video MOD von femu ( <a href="http://area53.die-muellers.org/" onclick="window.open(this.href); return false">femu’s Mod Support Site</a> ).
Dort kannst du einstellen, wieviele Punkte ein Benutzer für das Einstellen von Videos bekommt. Wird beim Löschen eines Videos natürlich auch wieder abgezogen.'
	),
	array(
		0 => 'UPS Easy Shop',
		1 => 'Ultimate Points ist kompatibel mit dem UPS Easy Shop. Benutzer können sich verschiedene Artikel kaufen und diese in ihrem Profil anzeigen lassen.<br />
Weiterhin werden zusätzliche Artikel mitgeliefert, mit diesen man z.B. die Benutzerfarbe ändern kann, oder Benutzerposts hinzukaufen kann.'
	),
	array(
		0 => 'User Blog Mod',
		1 => 'Ultimate Points ist kompatibel mit dem User Blog Mod von EXreaction.
( <a href="http://www.lithiumstudios.org/" onclick="window.open(this.href); return false">Lithiumstudios.org</a> )

Um Ultimate Points mit dem User Blog Mod nutzen zu können, musst du das AddOn aus dem Ordner contrib/AddOns/Benutzer_Blog_Mod_Plugin installieren.

Nach der Installation findest du dann im Blog Mod bei Blogeinstellungen verschiedene Einstellmöglichkeiten.'
	),
	array(
		0 => 'board3 Portal',
		1 => 'Du findest im Ordner contrib/AddOns jeweils einen Portal Block für board3 Portal Version 1 bzw. 2, um die Lotterie mit verschiedenen Angaben auch auf einem board3 Portal ( <a href="http://www.board3.de/" onclick="window.open(this.href); return false">Board3 Portal</a> ) anzeigen zu lassen.'
	),
	array(
		0 => 'DM Easy Download System',
		1 => 'Das EDS ist ein einfaches Downloadsystem für Dateien von femu ( <a href="http://area53.die-muellers.org/" onclick="window.open(this.href); return false">femu’s Mod Support Site</a> ), bei dem du die Kosten für jeden Download einzeln im ACP setzen kannst.
Hat ein Benutzer nicht die benötigen Punkte, kann er die Datei nicht downloaden.'
	),
	array(
		0 => 'DM Quotes Collection',
		1 => 'Die DM Quotes Collection ist ein einfaches Tool von Femu ( <a href="http://area53.die-muellers.org/" onclick="window.open(this.href); return false">femu’s Mod Support Site</a> ), um eine Zitatensammlung anzulegen, die dann zufällig auf der Index Seite angezeigt werden. Im ACP gibt es einige Einstllungen und dort kannst du die Zitate auch verwalten. Registrierte Benutzer können Zitate hinzufügen. Für jedes freigeschaltene Zitat erhält der Benutzer dann Punkte, welche sich im ACP einstellen lassen.'
	),
	array(
		0 => 'Knuffel (Würfelspiel)',
		1 => 'Ultimate Points ist kompatibel mit Knuffel (ein Kniffel-Clone) von Wuerzi ( <a href="http://www.spieleresidenz.de/" onclick="window.open(this.href); return false">Spieleresidenz</a> ), bei dem es darum geht, bestimmte Figuren zu erwürfeln, um eine maximale Punktzahl zu erreichen. Im ACP lassen sich die Spielkosten einstellen, sowie ein Jackpot setzen.'
	),
	array(
		0 => 'Hangman',
		1 => 'Ultimate Points ist kompatibel dem Hangman Spiel von Wuerzi ( <a href="http://www.spieleresidenz.de/" onclick="window.open(this.href); return false">Spieleresidenz</a> ), wo Benutzer durch Hinzufügen oder Erraten von Wörtern Punkte erhalten können.'
	),
	array(
		0 => 'DM Music Charts',
		1 => 'Ultimate Points ist kompatibel mit DM Music Charts von femu ( <a href="http://area53.die-muellers.org/" onclick="window.open(this.href); return false">femu’s Mod Support Site</a> ). Mit dem DM Music Charts können deine Benutzer eine eigene Chart Tabelle erstellen. Jeder registrierte Benutzer kann Songs hinzufügen.'
	),
	array(
		0 => 'phpBB Football',
		1 => 'Ultimate Points ist kompatibel mit phpBB Football von football ( <a href="http://football.bplaced.net/" onclick="window.open(this.href); return false">football’s Support und Demo Site</a> ). Mit dem Football Mod lassen sich verschiedene Fußball Ligen verwalten und bietet den Benutzern zugleich ein Tippspiel.'
	),
);

?>