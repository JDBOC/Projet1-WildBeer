<?php
/**
 * Created by PhpStorm.
 * User: tom
 * Date: 21/03/19
 * Time: 17:01
 */

$file = $gout = $soif = $amertume = $alcohol = '';

function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// TODO File management and security && FERMENTATION DROPDOWN MENU no vaidation needed if you have a default value ^^

if ($_SERVER["REQUEST_METHOD"] == 'POST'){

    if (isset( $_POST['name'])) $name = test_input($_POST['name']);
    if (isset( $_POST['country'])) $country = test_input($_POST['country']);
    if (isset( $_POST['desc'])) $desc = test_input($_POST['desc']);
    if (isset( $_POST['beerPrice'])) $price = test_input($_POST['beerPrice']);
    if (isset( $_POST['sixPackPrice'])) $sixPack = test_input($_POST['sixPackPrice']);
    if (isset( $_POST['kegPrice'])) $keg = test_input($_POST['kegPrice']);
    $gout = $_POST['gout'];
    $soif = $_POST['soif'];
    $amertume = $_POST['amertume'];
    $alcohol = $_POST['alcohol'];



}