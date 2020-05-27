
<html> 
  <style>
      body
      {
        font-family: consolas;
        background-color: #ffd11a; 
      }
      tr
      {
        text-decoration: none;
        color: #ffd11a;
        font-family: consolas;
      }
  </style>    

 <head>
  <meta charset="utf-8">
  <title>Dodaj nowy obiekt</title>
 </head>
 <body>
     <center>
  <h1>Dodawanie do bazy</h1>
  <form method="get" action="insert.php">
      
     <table border="1" style="background-color: black; color: #ffd11a;">
      <tr><td>Pesel</td><td><input type="number" name="Pesel" maxlen="11" size="11"></td></tr>
      <tr><td>Imie</td><td><input type="text" name="Imie" maxlen="20" size="20"></td></tr>
      <tr><td>Nazwisko</td><td><input type="text" name="Nazwisko" maxlen="20" size="20"></td></tr>
      <tr><td>Adres</td><td><input type="text" name="Adres" maxlen="50" size="50"></td></tr>
      <tr><td>Telefon</td><td><input type="number" maxlen="18" size="18" name="Telefon"></td></tr>
       <tr><td>Email</td><td><input type="text" maxlen="30" size="30" name="email"></td></tr>
         <tr><td colspan="2"><center><input type="submit" style="background-color: #0066ff;" value="wstaw"></td></tr></center>
   </table>
          </center>
  </form>
 </body>
</html>