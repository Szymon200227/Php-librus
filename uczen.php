<?php
include 'polacz.php';







?>

<HTML>
<head>
</head>

<body>
    
        
    <center>
    <form action="insert2.php" method="get">
        Klasa: <select name="klasa">
            <option value="2PI">2PI</option>
            <option value="2TP1">2TP1</option>
            <option value="2TP2">2TP2</option>
            <option value="1TP1">1TP1</option>
            <option value="1TP2">1TP2</option>
            <option value="3TI">3TI</option>
            <option value="4TI">4TI</option>
            </select><br>
        Imię i nazwisko: <input name="imie_nazwisko" type="text" id="imie_nazwisko"><br>
        Link: <input name="link" type="text" id="link"><br>
        Rozwiązanie: <input name="rozwiazanie" type="text" id="rozwiazanie"><br>
        <button type="submit">OK</button>
    </form>
    
  </center>
    
</body>
    
    























</HTML>