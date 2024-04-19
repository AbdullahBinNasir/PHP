<?php

echo "<pre>";
print_r($_GET);
echo "</pre>";

// echo "<pre>";
// print_r($_POST);
// echo "</pre>";

// echo "<pre>";
// print_r($_REQUEST);
// echo "</pre>";

    $capName = ucwords($_GET['Username']) ;
    // echo $capName;

    // echo "<br>";
    // echo "<br>";


echo "Hello Mr/MS " . $capName . " We See Your Qualification " . $_GET['Qualification']  ;

// echo $_GET['Username']
?>
