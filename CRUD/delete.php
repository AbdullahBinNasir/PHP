<?php

    require("connection.php");

    if($_GET['stdid']){

        $id = $_GET['stdid'];
        $delete = "DELETE FROM `students` where stdid = '$id';";
        $result = mysqli_query($connect,$delete) or die("Not Found");

        if ($result) {
            echo "<script> alert('Data Successfully Deleted');</script>";   
            header("Location:index.php");   
        }else{
            echo "<script> alert('Data Not Found');</script>";   
            
        }



    }

?>