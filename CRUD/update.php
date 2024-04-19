<?php


require("connection.php");


$id = $_POST['id'];
$name = $_POST['name'];
$contact = $_POST['contact'];
$city = $_POST['city'];

$update = "UPDATE `students` set `name` = '$name', `contact` = '$contact', `city` = '$city' WHERE stdid = '$id' ;"; 



$result =mysqli_query($connect,$update) or die("failed to connect");

if($result){

    echo "Data Successfully Updated";
    header("location:index.php");

}else{

    echo "failed to update data";
}



?>

