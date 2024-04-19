<?php


include "header.php";



$server = "localhost" ;
$userName = "root";
$serverPass = "";
$serverName = "a.d";

$connect = mysqli_connect($server, $userName, $serverPass, $serverName);


if($connect){

    $read = "SELECT * FROM `students`;";
    $result = mysqli_query($connect,$read);

    if($result){

        if(mysqli_num_rows($result) > 0){


            ?>

            <table class="table">
                <thead>
                    <tr>
                        <th scope = "col" >ID</th>
                        <th scope = "col" >Student Name</th>
                        <th scope = "col" >Contact</th>
                        <th scope = "col" >City</th>
                        <th scope = "col" >Actions</th>
                    </tr>
                <!-- </thead>
            </table> -->
<tbody>

<?php


while($row = mysqli_fetch_assoc($result)){

    echo "<tr>";
    echo "<td scope = 'row'>".$row['stdid']."</td>";
    echo "<td>" .$row['name']."</td>";
    echo "<td>" .$row['city']."</td>";
    echo "<td>" .$row['contact']."</td>";
    echo '<td>
        <a href = "updateData.php?stdid=' .$row["stdid"]. ' "class="btn btn-primary px-2 mx-2"> Edit</a> 
        <a href = "delete.php?stdid='.$row["stdid"].'" class="btn btn-danger px-2 mx-2"> Delete</a> 
        </td>';
    echo  "</tr>";

}
?>


</tbody>
</table>

<?php
}
else{
    echo"<script> alert('record not found') </script>";
}
    }else{
        echo"<script> alert('Failed To Executer mysqli_query') </script>";
    }
}else{
    die("failed to connect");
}

?>