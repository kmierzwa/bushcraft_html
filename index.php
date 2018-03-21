<?php 
// odbieramy dane z formularza 
$imie = $_POST['imie']; 
$email = $_POST['email']; 
function connection() { 
    // serwer 
    $mysql_server = "149.156.25.99"; 
    // admin 
    $mysql_admin = "kamierz"; 
    // hasło 
    $mysql_pass = "karolmierzwax"; 
    // nazwa baza 
    $mysql_db = "baza_danych"; 
    // nawiązujemy połączenie z serwerem MySQL 
    @mysql_connect($mysql_server, $mysql_admin, $mysql_pass) 
    or die('Brak połączenia z serwerem MySQL.'); 
    // łączymy się z bazą danych 
    @mysql_select_db($mysql_db) 
    or  die('Błąd wyboru bazy danych.'); 
}


if($imie and $email) { 
     
    // łączymy się z bazą danych 

    or die('Brak połączenia z serwerem MySQL'); 
    $db = @mysql_select_db('bushcraft', connection()) 
    or die('Nie mogę połączyć się z bazą danych'); 
     
    // dodajemy rekord do bazy 
    $ins = @mysql_query("INSERT INTO bushcraft SET imie='$imie', email='$email'"); 
     
    if($ins) echo "Rekord został dodany poprawnie"; 
    else echo "Błąd nie udało się dodać nowego rekordu"; 
     
    mysql_close(connection()); 
} 













?>