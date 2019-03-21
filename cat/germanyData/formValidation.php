<?php
/**
 * Created by PhpStorm.
 * User: tom
 * Date: 21/03/19
 * Time: 17:01
 */

$nameError = $countryError = $descError = $priceError = $sixPackError  = $kegError = '';
$name = $country = $desc = $price = $sixPack = $keg = $file = $gout = $soif = $amertume = $alcohol = '';

function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ($_SERVER["REQUEST_METHOD"] == 'POST'){

    (isset( $_POST['name'])) ? $name = test_input($_POST['name']) : $nameError = 'Name is not valid. It must be filled';
    (isset( $_POST['country'])) ? $country = test_input($_POST['country']) : $countryError = 'Country is not valid. It must be filled';
    (isset( $_POST['desc'])) ? $desc = test_input($_POST['desc']) : $descError = 'Description is not valid. It must be filled';
    (isset( $_POST['beerPrice'])) ? $price = test_input($_POST['beerPrice']) : $priceError = 'Beer price is not valid. It must be filled';
    (isset( $_POST['sixPackPrice'])) ? $sixPack = test_input($_POST['sixPackPrice']) : $sixPackError = 'Six pack price is not valid. It must be filled';
    (isset( $_POST['kegPrice'])) ? $keg = test_input($_POST['kegPrice']) : $kegError = 'Keg price is not valid. It must be filled';
    $gout = $_POST['gout'];
    $soif = $_POST['soif'];
    $amertume = $_POST['amertume'];
    $alcohol = $_POST['alcohol'];
    (isset($_POST['file'])) ? $file = test_input($_POST['file']) : $file = "";

    if (($nameError == '') && ($countryError == '') && ($descError == '') && ($priceError == '') && ($sixPackError == '') && ($kegError == '') && ($file == '')){
        echo "<script>alert('Your sugestion has been uploaded');</script>";
    }

}