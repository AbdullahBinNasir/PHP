<?php


// include "./include/header.php";
// require "./include/conncetion.php";
require "../include/connection.php";
include "../include/header.php";


if($connect){

    $read = "SELECT * FROM `mobiles`;";
    $result = mysqli_query($connect,$read);

    if($result){

        if(mysqli_num_rows($result) > 0){

            
            while($row = mysqli_fetch_assoc($result)){
                // echo "["image"];
                
                $img = $row['image'];
                
                // echo $img;

                echo "<div class='card' style='width: 18rem;'>";
                echo" <img class='card-img-top' src='./images/".$row['image'] . "' alt='Card image '>";
                echo " <div class='card-body'>";
                echo " <h5 class='card-title text-center'> ".$row['name']." </h5>"; 
                echo " <h5 class='card-title text-center'> ".$row['price']." </h5>"; 
                echo "<a href='#' class='btn btn-primary text-center '>Buy Now</a>";
                echo "</div>";
                echo "</div>";

            }


        }
    }
}



?>