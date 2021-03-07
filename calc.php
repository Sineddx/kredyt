<?php
require_once dirname(__FILE__).'/config.php';
$x = $_REQUEST['x'];
$y = $_REQUEST['y'];
$z = $_REQUEST['z'];

// walidacja wprowadzonych danych

//Czy nie są puste
if ( ! (isset($x) && isset($y) && isset($z))){
$notification[] = 'Brak jednego z parametrów!';
}

//Czy wprowadzone dane są liczbami
if($x == ""){
    $notification[] = "Nie podano kwoty";
}
if($y == ""){
    $notification[] = "Nie podano okresu spłaty";
}
if($z == ""){
    $notification[] = "Nie podano oprocentowania";
}

if (empty($notification)){

    if(! is_numeric($x)){
        $notification[] = 'Kwota nie jest liczbą';
    }
    if(! is_numeric($y)){
        $notification[] = 'Źle uzupełniony okres spłaty';
    }
    if(! is_numeric($z)){
        $notification[] = 'Źle uzupełnione oprocentowanie';
    }
}

if(empty($notification)){

        $x = floatval($x);
        $y = floatval($y);
        $z = floatval($z);

        //liczba miesięcy
$y = $y * 12;
//wyliczam miesięczną ratę

$month = $x/$y;
//wyliczam wraz z oprocentowaniem

$percent = ($month * $z)/100;

$result = $month + $percent;
}

// wywołuje widok z przekazaniem zmiennych
include 'calc_view.php';