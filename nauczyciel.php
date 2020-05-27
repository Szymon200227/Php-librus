<?php
include 'polacz.php';







?>

<HTML>
<head>
</head>

<body>
    
        
    <center>
    <form action="insert.php" method="get">
        Klasa: <select name="klasa">
            <option value="2PI">2PI</option>
            <option value="2TP1">2TP1</option>
            <option value="2TP2">2TP2</option>
            <option value="1TP1">1TP1</option>
            <option value="1TP2">1TP2</option>
            <option value="3TI">3TI</option>
            <option value="4TI">4TI</option>
            </select><br>
        Temat: <input name="temat" type="text" id="temat"><br>
        Treść: <input name="tresc" type="text" id="tresc"><br>
        Data oddania: <input name="dataoddania" type="datetime-local" id="data"><br>
        <button type="submit">OK</button>
    </form>
    
  </center>
    
</body>
    
    























</HTML>