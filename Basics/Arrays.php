<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php

    echo "<h2> Priniting Of Array </h2>";

    $std = array("Abdullah" , "Basim" , "Ammad" , "Ashar" , "Saad" , "Rafay" , "Basit" , "Farhan" , "Fawad");

    echo "<pre>";

    print_r($std);

    echo "</pre>";

    foreach ($std as $index => $value) {
            echo "$index : $value <br>" ;
    }

    echo "<br>";
    echo "<br>";

    // Array 2
    $std2 = array("FootBall" , "Circket" , "Hockey" , "BasketBall");

    foreach ($std2 as $index => $value) {
        // $indexs = $index + '0';
        // echo "<br>";
        // echo $indexs;
        echo "$value <br>" ;

    }


    // Associative array
    
    echo "<br>";
    echo "<br>";
    
    echo "<h2> Associative Array </h2>";
    $emp = [
        "name" => "Abullah",
        "age" => 18,
        "gender" => "Male",
        "job" => "Web Developer",
    ];


    
    echo $emp["job"] ." ". $emp["name"];
    
    echo "<br>";
    echo "<br>";

    echo "<h3> As For Each </h3>";
    
    foreach ($emp as $ind => $value){

        echo "$value <br>";

    }

    echo "<h3> Result As Pre </h3>";
    echo "<pre>";
    print_r ($emp);
    echo "</pre>";
    
    // Multidimensional Array
    echo "<h2> Multi DImensional Array </h2>";
    
    $result = [
        ["Sir Owais" ,72 , 23],
        ["Sir Ashar" ,82, 44],
        ["Sir Malik" ,62],
        ["Sir Rafay" ,42],
    ];

    

    echo "<pre>";
    print_r ($result);
    echo "</pre>";

    // Result As Matrix
    echo "<h3>Result As Matrix</h3>";

    echo $result[0][0];

    echo "<h3>Result As For Each</h3>";

    foreach ($result as $key => $value) {
        // echo "$value";
    }

    echo "
    <table border = 2 cellspacing = 3>
        <tr>
        <th>Name</th>
        <th>Percentage</th>
        <th>Percentage2</th>
        </tr>";

        foreach ($result as $key1 => $value1) {
            // echo "<td> $value1</td>";
            echo "<tr>";
            foreach ($value1 as $key2 => $value2) {
                echo "<td> $value2</td>";
        };

        echo "</tr>";
    }

    echo '
    </table>';

    // MultiDimensional And Associative Array

    echo "<br>";
    echo "<br>";

    $marks = [

        "Abdullah" => ["Html" => 95 , "CSS"=> 83 , "JS" => 75],
        "Basim" => ["Html" => 87 , "CSS"=> 90 , "JS" => 87],
        "Ammad" => ["Html" => 95 , "CSS"=> 88 , "JS" => 85],
        "Saad" => ["Html" => 85 , "CSS"=> 100 , "JS" => 80],
        "Hassan" => ["Html" => 100 , "CSS"=> 83 , "JS" => 73],
    ];
    // CALLING OF ASSOCIATIVE ARRAY
    // Calling Of Associative Array =
    // echo (ArrayName)([Object Name])

    // CALLING OF MULTIDIMENSIONAL ARRAY
    // echo [Value As A Matrix ][Value As A Matrix]

    // Calling
    echo $marks["Abdullah"]["Html"];

    // echo "<pre>";
    // print_r ($marks);
    // echo "</pre>";

    // For Each
    echo "
    <table border = 2 cellspacing = 3>
        <tr>
        <th>StdName</th>
        <th>HTML</th>
        <th>CSS</th>
        <th>JS</th>
        </tr>";

    foreach ($marks as $key => $value1) {
        echo "<tr>";
        echo "<td> $key </td>";
        foreach ($value1 as $key2 => $value2) {
            echo "<td>$value2 </td>";
            // echo "$value2";
            // echo "<br>";

        };

        echo "</tr>";
    };
    echo '
    </table>';
?>



</body>
</html>