<html>
<head>
<META HTTP-EQUIV="content-type" CONTENT="text/html; charset=utf-8">
<title>*** Полумента генератор ***</title>
</head>
<body>
<!-- Ako vam se dopada, javite mi na snipe714@gmail.com. I hvala sto gledate kod! ;) 
     Koga zanima PHP kod koji ovo pokrece, neka mi baci mejl... ili neka napise sam,
     trivijalno je. -->
<table border="0" height="100%" width="100%">
<tr height="95%">
<td align="center">
<?php

$slova = array();
// jednoslovni clanovi su dvaput uneti, da bi ih bilo "vise" -> verovatnoca da se izabere clan od
// jednog ili dva slova je priblizno ista
$slova[0] = array("Б", "В", "Г", "Д", "Ђ", "Ж", "З", "Ј", "К", "Л", "Љ", "М", "Н", "Њ", "П", "Р", 
                  "С", "Т", "Ћ", "Ф", "Х", "Ц", "Ч", "Џ", "Ш", "Б", "В", "Г", "Д", "Ђ", "Ж", "З",
                  "Ј", "К", "Л", "Љ", "М", "Н", "Њ", "П", "Р", "С", "Т", "Ћ", "Ф", "Х", "Ц", "Ч",
                  "Џ", "Ш", "Бл", "Бр", "Вл", "Вр", "Гл", "Гр", "Дл", "Др", "Жл", "Зл", "Зр",
                  "Кр", "Кл", "Мр", "Мл", "Пј", "Пл", "Пљ", "Пњ", "Пр", "Св", "Сл", "См", "Сп",
                  "Ст", "Тл", "Тр", "Фл", "Фљ", "Фњ", "Фр", "Хл", "Хр");
$slova[1] = array("а", "е", "и", "о", "у", "р");
$slova[2] = array("б", "в", "г", "д", "ђ", "ж", "з", "ј", "к", "л", "љ", "м", "н", "њ", "п", "р", 
                  "с", "т", "ћ", "ф", "х", "ц", "ч", "џ", "ш");

srand();
$t1 = $slova[0][rand(0, count($slova[0])-1)];
// ako je na kraju prvog clana "r" ili neko ruzno slovo, onda nemoj kao drugi clan da stavljas "r"!
$a = substr($t1, -2);
if ($a == "л" || $a == "р" || $a == "ј" || $a == "љ" || $a == "њ" || $a == "Ђ" || 
    $a == "Ж" || $a == "Ј" || $a == "Л" || $a == "Љ" || $a == "Н" || $a == "Њ" ||
    $a == "Р" || $a == "Ћ" || $a == "Ч" || $a == "Џ" || $a == "Ш") $dec = 2;
else $dec = 1;
$t2 = $slova[1][rand(0, count($slova[1])-$dec)];
$t3 = $slova[2][rand(0, count($slova[2])-1)];

if (isset($_GET["lolo"])) {
	$t4 = $t3.$t2.$t3."о";
}
else if (isset($_GET["fljizo"])) {
	$t = "";
	$p = array("б", "в", "г", "д", "ђ", "ж", "з", "ј", "к", "л", "љ", "м", "н", "њ", "п", "р", 
                  "с", "т", "ћ", "ф", "х", "ц", "ч", "џ", "ш", "б", "в", "г", "д", "ђ", "ж", "з",
                  "ј", "к", "л", "љ", "м", "н", "њ", "п", "р", "с", "т", "ћ", "ф", "х", "ц", "ч",
                  "џ", "ш", "бл", "бр", "вл", "вр", "гл", "гр", "дл", "др", "жл", "зл", "зр",
                  "кр", "кл", "мр", "мл", "пј", "пл", "пљ", "пњ", "пр", "св", "сл", "см", "сп",
                  "ст", "тл", "тр", "фл", "фљ", "фњ", "фр", "хл", "хр");
	do {
		$t = $p[rand(0, count($p)-1)];
		$a = substr($t, -2);
	} while ($t2 == "р" &&
	         ($a == "л" || $a == "р" || $a == "ј" || $a == "љ" || $a == "њ" || $a == "ђ" || 
	          $a == "ж" || $a == "н" || $a == "ћ" || $a == "ч" || $a == "џ" || $a == "ш"));
	$t4 = $t.$t2.$t3."о";
}
else $t4 = "";

echo "<h1>".$t1.$t2.$t3."о$t4 Полумента</h1>";
?>
</td>
</tr>
<tr><td valign="bottom" align="center"><font size="1">
	(Кликћите на "Reload" или на неки од линкова испод.)<br>
	<a href="index.php">Стандард</a> | <a href="index.php?lolo">Лоло</a>
	 | <a href="index.php?fljizo">Фљизо</a></font></td></tr>
</table>
</body>
</html>
