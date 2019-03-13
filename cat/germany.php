






<?php

// header things

$myArray = array_map('str_getcsv', file('../asset/infos/bdd.csv'));
$i = 0;
foreach ($myArray as $value) {
  // code...
  foreach ($value as $final) {
    print_r($final);
    echo '<br />';
  }
}













// footer things
?>
