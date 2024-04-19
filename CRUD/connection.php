<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<?php

    $server = "localhost" ;
    $userName = "root";
    $serverPass = "";
    $serverName = "a.d";

    $connect = mysqli_connect($server, $userName, $serverPass, $serverName);

    if(!$connect){

        die("Connection Failed ");


    }else{
        echo"connected";
    }




?>

</body>
</html>