<?php
include "polacz.php";
$klasa = wczytaj("klasa");
$temat = wczytaj("temat");
$tresc = wczytaj("tresc");
$dataoddania = wczytaj("dataoddania");


date_default_timezone_set("Europe/Warsaw");
$data = date("Y-m-d H:i:s", time());
echo $data;

$sql = $baza->prepare("INSERT INTO zadania VALUES ('', ?, ?, ?, ?, ?);");
if ($sql)
{
        $sql->bind_param("sssss", $klasa, $temat, $tresc, $data, $dataoddania);
        $sql->execute();
        $sql->close();
}
else
    die( 'Błąd: '. $baza->error);
$baza->close();
//header ("Location: http://localhost/Sk/index.php");
?>