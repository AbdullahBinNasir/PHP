<?php
require "../include/connection.php";
include "../include/header.php";

if(isset($_POST['submit']) && $_SERVER['REQUEST_METHOD']=="POST"){

    echo $name=$_POST['name'];
    echo $price=$_POST['price'];

    echo"<pre>";
    print_r($_FILES['image']);
    echo"</pre>";
   
    if($_FILES['image']['error']==4){
        echo "
        <script> alert('Image not found')</script>
        ";
    }else{

        $imgname = $_FILES['image']['name'];
        $tmpname = $_FILES['image']['tmp_name'];
        $size = $_FILES['image']['size'];

        $validExtensions= ["png", "jpg", "jpeg", ];
        $extension = explode(".",$imgname);

        $extension = strtolower(end($extension));

        if($size > 1000000){
            echo "<script> alert('Files Is To Large')</script>";
        }elseif(!in_array($extension,$validExtensions)){
            echo "<script> alert('File type not supported')</script>";
        }else{
            $newimgname = uniqid().".".$extension;
            $insert = "INSERT INTO `mobiles`(`name`,`price`,`image`) VALUES ('$name' , '$price' , '$newimgname')";  
            $result = mysqli_query($connect,$insert);

            if($result){
                move_uploaded_file($tmpname,"images/".$newimgname);
                echo "<script> alert('Upload successful')</script>";
            }
        }

    }

}

?>



<body>

    <div class="container">
        <h1 class="text-center display-3 fw-semibold">PRODUCT REGISTRATION</h1>
    
        <form action="" method="post" enctype = "multipart/form-data" >

    <input type="text" class="form-control my-3" name="name" id = "name" placeholder = "Enter Mobile Name" >
    <input type="number" class="form-control my-3" name="price" id = "name" placeholder = "Enter Mobile Price" >
    <input type="file" class="form-control my-3" name="image" id = "name" placeholder = "Enter Mobile Image" accept = ".jpg , .png , .jpeg" >

    <input type="submit" class="form-control my-3 btn btn-success" name="submit" value = "add">

        </form>
    
    <!-- <img src="./images/images" alt=""> -->
    
    
    </div>

</body>
</html>