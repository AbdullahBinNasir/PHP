<?php

    require("connection.php");
    
 
    if (isset($_POST['stddata'])){
$stdname = $_POST['sname'];
$stdcity = $_POST['scity'];
$stdnum = $_POST['snum'];

$insert = "INSERT INTO `students`(`name` , `contact` , `city`) values ('$stdname' , '$stdnum' , '$stdcity');";
$result = mysqli_query($connect,$insert) or die("Error") ;


if ($result) {
    echo "<script> alert('Data Successfully inserted');</script>";   
}else{
    echo "<script> alert('Data Not Found');</script>";   
    
}


    }


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <h1 class="text-center"> Students Detail Form </h1>

        <form action="" method="post" class="form-group" >
            <input type="text" class="form-controls my-2" placeholder="Enter Student Name " name="sname" id="">
            <input type="number" class="form-controls my-2" placeholder="Enter Student Number " name="snum" id="">
            <input type="text" class="form-controls my-2" placeholder="Enter Student City " name="scity" id="">
            <input type="submit" name="stddata" class="form-controls btn btn-primary my-2" placeholder="Enter Student "
                value="Submit">
        </form>


    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>