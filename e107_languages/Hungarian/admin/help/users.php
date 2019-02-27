<?php
/*
+--------------------------------------------------------------------------+
|        e107 website content management system Hungarian Language File
|        Released under the terms and conditions of the
|        GNU General Public License (http://gnu.org).
|        Last Modified: 2019/02/27 10:57:32
|
|        $Author: Yesszus $
|        Web: https://github.com/e107translations/Hungarian/releases
|
+--------------------------------------------------------------------------+
*/

if (!defined('e107_INIT')) { exit; }

$caption = "Felhasználók Kezelése";
if (e_QUERY) list($action,$junk) = explode('.',e_QUERY); else $action = 'list';

switch ($action)
{
  case 'create' :
    $text = "This page allows you to create a user, who is immediately a normal member of the site, with whatever class memberships you assign.<br /><br />
	If you check the 'Send confirmation email with password to new user' box, the login name and password are sent <b>in clear</b>, so the user must change
	their password on receipt.
	";
    break;

  case 'prune' :
	$text = "Bulk deletes unwanted users from the database. These may be either those who failed to complete the registration process, or 
	those whose email addresses bounced. Any forum posts, comments etc remain, and are flagged as from a 'Deleted User'.
	";
	break;

  case 'unverified' :
	$text = "Shows those members who have failed to complete their registration. Options generally as for the complete members list.";
    break;

  case 'options' :
	$text = "Sets various options affecting all users.<br /><br />
	<b>Allow Avatar Upload</b><br />
	If enabled, users may upload an avatar of their choice, which is stored on your server. This can have security implications.<br /><br />
	<b>Allow Photo Upload</b><br />
	If enabled, users may upload a photo of their choice, which is stored on your server. This can have security implications.<br /><br />
	<b>Online User Tracking</b><br />
	This must be enabled to keep track of most user activity, including counts of online members. It does increase database activity significantly.<br /><br />
	<b>Member Information</b><br />
	Determines which class of members can view the member list.
	";
    break;

  default :
	$text = "Itt a regisztrált felhasználókra vonatkozó beállításokat tudod módosítani. Módosíthatod a beállításaikat, adminisztrátori jogot adhatsz nekik, új csoportba sorolhatod őket, stb...<br /><br />

	A rendezési sorrend az oszlopfejlécre kattintva módosítható.<br /><br />

	<b>Felhasználói csoportok</b><br />
	A felhasználói csoportok kétféleképpen állíthatók be: 'inline' a 'Felhasználói csoportok' oszlopra kattintva, vagy egy/több felhasználó(k) kiválasztásával és a táblázat alján lévő 'kötegelt' opciók használatával.<br /><br />

	<b>Szerkesztés</b><br />
	Itt tekintheti meg a felhasználó összes beállítását és módosíthatja is azokat.<br /><br />

	<b>Kitiltás/Kitiltás visszavonása</b><br />
	Az opció használatával állíthatja be, hogy a felhasználó hozzáférhet-e az oldalhoz.<br /><br />

	<b>Aktiválás</b><br />
	Ez a funkció aktiválja azt a felhasználót, aki rákattintott az aktiválási e-mail-ben található megerősítő linkre.<br /><br />

	<b>Email újraküldése</b><br />
	Újra elküldi az aktiváló e-mailt a felhasználónak.<br /><br />

	<b>Teszt email</b><br />
	Az opció használatával ellenőrizheti a felhasználó e-mail címét és annak érvényességét (érvénytelenség esetén nem küld e-mailt).<br /><br />

	<b>Törlés</b><br />
	Az opció használatával véglegesen eltávolítja a felhasználót a weboldalról (bármilyen fórum hozzászólás, megjegyzés stb., megmarad és a 'Törölt Felhasználó' jelzőt kapja).";
}


$ns -> tablerender($caption, $text);
unset($text);
