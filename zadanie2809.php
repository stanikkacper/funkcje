<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2> Zad 1 </h2>
<?php
function suma($a, $b){
    echo $a + $b;
}
suma(5, 3);
?>
<h2> Zad 2 </h2>
<?php
function podstawy($a, $b){
    echo $a - $b . "<br>";
    echo $a * $b . "<br>";
    echo $a / $b;
}
podstawy(10, 2);
?>
<h2> Zad 3 </h2>
<?php
function kalkulator($a, $b, $dzialanie){
    if($dzialanie == "+") $wynik = $a + $b;
    if($dzialanie == "-") $wynik = $a - $b;
    if($dzialanie == "*") $wynik = $a * $b;
    if($dzialanie == "/") $wynik = $a / $b;
    echo "<div id='wynik'>$wynik</div>";
}
kalkulator(10, 2, "+");
?>
<h2> Zad 4 </h2>
<?php
function maks($a, $b, $c){
    echo max($a, $b, $c);
}
maks(5, 9, 3);
?>
<h2> Zad 5 </h2>
<?php
function wzrost($a){
    if($a < 150) echo "niski";
    elseif($a > 180) echo "wysoki";
    else echo "średni";
}
wzrost(175);
?>
<h2> Zad 6 </h2>
<?php
function bmi($wzrost, $waga){
    $bmi = $waga / (($wzrost / 100) * ($wzrost / 100));
    if($bmi < 18.5) $komentarz = "za mało!";
    elseif($bmi > 25) $komentarz = "za dużo!";
    else $komentarz = "OK!";
    echo "<div id='wynik'>$bmi - $komentarz</div>";
}
bmi(183, 76);
?>
<h2> Zad 7 </h2>
<?php
function starszy($data1, $data2){
    if($data1 < $data2) echo "Pierwsza osoba jest starsza";
    elseif($data2 < $data1) echo "Druga osoba jest starsza";
    else echo "Osoby są w tym samym wieku";
}
starszy("2005-03-10", "2007-06-20");
?>
<h2> Zad 8 </h2>
<?php
function przestepny($rok){
    if($rok % 400 == 0 || ($rok % 4 == 0 && $rok % 100 != 0))
        echo "Rok przestępny";
    else
        echo "Rok nieprzestępny";
}
przestepny(2024);
?>
<h2> Zad 9 </h2>
<?php
function sila($haslo){
    if(strlen($haslo) <= 4) echo "hasło słabe";
    elseif(strlen($haslo) <= 8) echo "hasło średnie";
    else echo "hasło mocne";
    if(!preg_match("/[0-9]/", $haslo)) echo " - brak cyfry";
    if(!preg_match("/[A-Z]/", $haslo)) echo " - brak dużej litery";
    if(!preg_match("/[a-z]/", $haslo)) echo " - brak małej litery";
    if(!preg_match("/[^a-zA-Z0-9]/", $haslo)) echo " - brak znaku specjalnego";
}
sila("Abcd123!");
?>
<h2> Zad 10 </h2>
<?php
function trojkat($a, $b, $c){
    if($a + $b > $c && $a + $c > $b && $b + $c > $a)
        echo "Da się utworzyć trójkąt";
    else
        echo "Nie da się utworzyć trójkąta";
}
trojkat(3, 4, 5);
?>
</body>
</html>