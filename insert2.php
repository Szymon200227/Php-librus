<?php
include "polacz.php";
$klasa = wczytaj("klasa");
$imie_nazwisko = wczytaj("imie_nazwisko");
$link = wczytaj("link");
$rozwiazanie = wczytaj("rozwiazanie");


date_default_timezone_set("Europe/Warsaw");
$data = date("Y-m-d H:i:s", time());
echo $data;

$ip = $_SERVER['REMOTE_ADDR'];

$sql = $baza->prepare("INSERT INTO rozwiazania VALUES ('', ?, ?, ?, ?, ?, '', ?);");
if ($sql)
{
        $sql->bind_param("ssssss", $klasa, $imie_nazwisko, $link, $rozwiazanie, $data, $ip);
        $sql->execute();
        $sql->close();
}
else
    die( 'Błąd: '. $baza->error);
$baza->close();
//header ("Location: http://localhost/Sk/index.php");
?>