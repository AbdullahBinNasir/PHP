<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

    
    $name = "Abdullah Bin Nasir";

    $num = 7;

    print($name);
    print($num);


    echo "<h1> Print This Number " .($num + 3)."</h1>";
    
    
    $negative_number = -53;
    
    echo "<h3> Print This Number " .($num + 3)."</h3>";
    
    // Metoads
    echo(abs($negative_number) . " (Absolute Methoad)" . "<br>"); // Turns Negative Number into Positive Number
    
    echo ceil(7.2) . "<br>"; // Turns A Decimal Value Into Next Round Of Value 
    echo floor(7.2) . "<br>"; // Turns A Decimal Value Into Previous Round Of Value
    echo round(7.2) . "<br>";  // Turns A Decimal Value Into Nearest Round Of Value
    echo sqrt(25) . "<br>" ; //Square Root Of The Given Number // 5


    //String Methoads 
    
    echo ucwords($name) . "<br>";
    echo strrev($name) . '<br>';
    echo str_word_count($name) . '<br>';

    // Data Types

    $numInt = 22; //Int
    $numFloat = 17.5; //Float
    $numDouble = 17.555556633221478; //Double 

    // String Types

    $Name = "Abdullah Bin Nasir"; //String

    // Boolean
    $Bolean = true;              //Boolean
    $Bolean2 = False;              //Boolean

    //////////////////////////////////////////////////////

    echo '<h3> Class 2 (Arrays) </h3>';
    
    // Array 
    
    $students = array("Abdullah" , "Basim" , "Ammad" , "Rafay" , "Ahsan");
    echo $students[3];
    echo "<br>" ;
    echo "<br>" ;

    // Functions
    function sum(){
            echo 23 + 23;
    }

    sum();

    echo ' <br>';
    echo ' <br>';

    function add ($a = 0 , $b = 0){
        return $a + $b;
    }

    $c = add(45 , 45);
    echo $c ;

    echo '<br>';
    echo '<br>';

    function subtract ($a = 0 , $b = 0){
        return $a - $b;
    }

    $c = subtract(47 , 46);
    echo $c ;

    echo ' <br>';
    echo ' <br>';

    function multiply ($a = 0 , $b = 0){
        return $a * $b;
    }

    
    $c = multiply(45 , 46);
    echo $c ;
    
    echo ' <br>';
    echo ' <br>';

    function divide ($a = 0 , $b = 0){
        return $a / $b;
    }

    $c = divide(45 , 46);
    echo $c ;

    // If Else Condition

    echo '<br>';
    echo '<br>';

    $age = 6;
    // echo $age >= 18 ? "You Can Vote" : "You Cant Vote";

    echo '<br>';
    echo '<br>';

    if ($age > 18){
        echo 'you can drive';
    }elseif ($age == 18){
        echo 'you can drive but get our license first';
        
    }else{
        echo 'you cant drive';
    }

    echo "<br>";
    echo "<br>";
    // Switch Cases

    $day = 'monday';
    $days = $day.strtolower() ;

    switch ($days){
        case 'monday':
        echo 'weekday';
        break;
        case ' tuesday':
        echo 'weekday';
        break;
        case 'wednesday':
        echo 'weekday';
        break;
        case 'thursday':
        echo 'weekday';
        break;
        case 'friday':
        echo 'weekday';
        break;
        case 'saturday':
        echo 'weekend';
        break;
        case 'sunday':
        echo 'weekend';
        break;
        default :
        echo "Invalid";
    }

    
    ?>

</body>
</html>