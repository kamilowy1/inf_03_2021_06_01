<?php

//utworzenie zmiennych 
$serwer = "localhost";
$user = "root";
$password = "";
$dbname = "baza";

//stworzenie połączenia 
$conn = mysqli_connect($serwer,$user,$password,$dbname);

//sprawdzenie połączenia 

if (!$conn) {
	die ("fatalny blad:" .mysqli_error($conn));
} echo "Uzyskano połączenie .<br>";


// pobranie danych z formularza 
$data = $_POST ['data'];
echo $data;

$numer = $_POST ['numer'];
echo $numer;

$telefon = $_POST ['telefon'];
echo $telefon;

// wprowadzenie wartości do bazy danych 
$conn = mysqli_connect($serwer,$user,$password,$dbname);
$sql = "INSERT INTO rezerwacje( data_rez, liczba_osob, telefon) VALUES ('$data','$numer','$telefon')";

//obsługa błędu wstawiania danych 
if (mysqli_query($conn,$sql)) {
	echo "Poprawnie dodano rekord do bazy.<br>";
} else {
 echo "fatalny błąd" .mysqli_error($conn);
}

mysqli_close($conn);

?>



