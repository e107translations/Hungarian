<?php
/*
+--------------------------------------------------------------------------+
|        e107 website content management system Hungarian Language File
|        Released under the terms and conditions of the
|        GNU General Public License (http://gnu.org).
|        Last Modified: 2019/11/01 08:40:16
|
|        $Author: Yesszus $
|        Web: https://github.com/e107translations/Hungarian/releases
|
+--------------------------------------------------------------------------+
*/
define("LWLAN_4", "Nincs link szó definiálva.");
define("LWLAN_5", "Szavak");
define("LWLAN_6", "Link");
define("LWLAN_7", "Aktív?");

define("LWLAN_21", "Szó az automatikus linkhez (vesszővel elválasztva több is megadható)");

define("LWLAN_26", "Területek, ahol engedélyezed a linkszavak használatát");

define("LWLAN_28", "Oldalak, melyeken letiltva a link szavak");

define("LWLAN_33", "Címek");
define("LWLAN_34", "Összegzések");
define("LWLAN_35", "Szövegtörzsek");
define("LWLAN_36", "Leírások (linkek stb)");
define("LWLAN_40", "Felhasználó által megadott címek (pl. fórum)");
define("LWLAN_41", "Felhasználó által megadott szövegtörzsek (pl. fórum)");
define("LWLAN_50", "Buboréksúgó");

define("LWLAN_52", "Csak a linkszó");
define("LWLAN_53", "Csak buboréksúgó");
define("LWLAN_54", "Linkszó és buboréksúgó");
define("LWLAN_55", "Link megnyitása új ablakban");

define("LWLAN_58", "\"Pref hook\" konvertálása v2 formátumra");
define("LWLAN_59", "Ajax engedélyezése");

define("LWLAN_64", "Link elhagyása a jelenlegi oldalon");

define("LWLAN_66", "Egyéni CSS osztály");
define("LWLAN_67", "Max. linkek/tippek");

define("LAN_LW_HELP_01", "Számos szövegterülethez van hozzárendelve 'kontextus', és a linkszavak csak az adott környezettel megegyező területeken jelennek meg.");
define("LAN_LW_HELP_02", "Az eszköztippek az Ajax használatával információkat jeleníthet meg. Ez általában némi egyedi kódolást igényel.");
define("LAN_LW_HELP_03", "Általában értelmetlen, ha a felhasználó rákattinthat egy linkre, ha már megtalálta a hivatkozó oldalt. Ha ez az opció ki van kapcsolva, ebben az esetben a linkszavak nem kerülnek aktiválásra.");
define("LAN_LW_HELP_04", "Tiltott területek azok a területek, ahol a linkszavak használata nem lesz engedélyezve. Ugyanolyan szintaxisban add meg őket, mint a menüknél, soronként egy útvonal-minta. Ha a minta '!' jellel végződik, akkor egy konkrét útvonalként lesz értelmezve, máskülönben a szövegrészen belül is lehetnek találatok.");
define("LAN_LW_HELP_05", "Ezt az osztályt hozzáadja az összes generált hivatkozáshoz.");

define("LAN_LW_HELP_10", "Itt meghatározhatja azokat a szavakat, amelyek kattintható hivatkozásokká válnak, vagy amelyek megjelenítik a szöveget az egérmutatón.");
define("LAN_LW_HELP_11", "Ez nem érinti a kis- és nagybetűket. Ha több szót szeretne azonos hivatkozásokra és eszköztippekre leképezni, vesszővel válassza el őket (szóköz nélkül)"); 
define("LAN_LW_HELP_12", "Kattintható linkek megadása. Ha külső hivatkozást ad meg, a hivatkozásnak 'http(s)://' előtaggal kell kezdődnie. Ha belső hivatkozást szeretne, akkor használja az {e_XXX} konstansokat."); 
define("LAN_LW_HELP_13", "Meghatározza, hogy mely opciók aktívak."); 
define("LAN_LW_HELP_14", "Ez határozza meg a szöveget, amelyet akkor kell megjeleníteni, amikor a felhasználó egere áthalad a szavan.");
define("LAN_LW_HELP_15", "Ugyanazon linkek maximális száma. Pozitív számnak kell lennie. Akkor használja, amikor ugyanaz a szó többször is megtalálható egy szövegdarabban."); 
define("LAN_LW_HELP_16", "Ez határozza meg az Ajax feldolgozásánál használható opcionális numerikus azonosítót. Pozitív számnak kell lennie. Ha üres, akkor az adatbázis rekord száma kerül felhasználásra."); 
define("LAN_LW_HELP_17", "Bekapcsoláskor a link egy új böngésző lapon/ablakban nyílik meg."); 

/*define("LAN_LW_HELP_01", "  <b>Engedélyezési területek</b><br>azok a szöveg-területek, ahol a linkszavak engedélyezve lesznek.<br><br>
  <b>Tiltott területek</b><br>azok a területek, ahol a linkszavak használata nem lesz engedélyezve. Ugyanolyan szintaxisban add meg őket, mint a menüknél, soronként egy útvonal-minta.
  Ha a minta '!' jellel végződik, akkor egy konkrét útvonalként lesz értelmezve, máskülönben a szövegrészen belül is lehetnek találatok.<br><br>
  <b>Ajax engedélyezése</b><br>A buboréksúgó tartalma ajax kérésen keresztül kapja az értéket.<br><br>
  <b>Link elhagyása a jelenlegi oldalon</b><br>Azon szavak kiszűrése, melyek az aktuális oldalhoz vannak rendelve, tehát azon linkek nem lesznek megjelenítve, melyek önmagukra mutatnak.<br>");
define("LAN_LW_HELP_02", "Azon szavak meghatározása, melyek kattintható linkekké lesznek alakítva, vagy amikre buboréksúgó lesz helyezve<br /><br />
  <b><u>Szavak linkekké alakítása</u></b><br />A megadásnál ügyelj arra, hogy a kis- és nagybetű nem azonos. Több szó esetén vesszővel elválasztva add meg őket.<br /><br />
  <b><u>Link</u></b><br />Kattintható linkek megadása. Ha külső hivatkozást adsz meg, a hivatkozásnak \"http://\"-vel [/i]kell[/i] kezdődnie. Ha belső hivatkozást szeretnél, úgy a {e_XXX} konstansok használhatóak.<br /><br />
  <b><u>Buboréksúgó</u></b><br />Egy buboréksúgó jelenik meg a megadott szó fölött, ha az egérmutató a szó fölé kerül.<br /><br />
  <b><u>LW ID (Buboréksúgó ID)</u></b><br /><br />Optimális, numerikus ID meghatározása az Ajax-kérésekhez. Üresen hagyva az adatbázisban található ID lesz használva.<br /><br />
  <b><u>Aktivál?</u></b><br />Meghatározható, mely beállítások legyenek aktívak.");*/
