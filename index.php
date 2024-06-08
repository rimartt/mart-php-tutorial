<?php
    // variables
    $name = 'Rimart';
    $age = 21;
    $gender = 'male';

    echo "name: $name <br>";
    echo 'age: '.$age.'<br>';
    echo "gender: $gender";
    echo '<br>';
    
    //constant
    define("message", "maraming salamat sa lahat");
    echo(message);
    echo '<br>';

    //operators

    echo 1 + 1;
    echo '<br>';
    echo 10 % 3;
    echo '<br>';
    echo 2**5;
    echo '<br>';

    //functions

    function showMessage($message){
        return "Your message: $message";
    }

    echo showMessage("pogi ni rimart");
    echo '<br>';

    //array

    $array1 = ['banana', 'apple', 'guava'];
    $array2 = array('a' => 'banana', 'apple', 'guava');
    echo $array1[0];
    echo '<br>';

    //condition

    $int = 1;

    if ($int === '1'){
        echo 'True';
    }
    else{
        echo 'False';
    }
    echo '<br>';

    //loops

    //while...

    // $counter = 1;
    // while($counter <= 5){
    //     echo 'Counter:'.$counter.'<br>';

    //     $counter++;
    // }


    //do while

    // $counter = 1;

    // do{
    //     echo 'Counter: '.$counter.'<br>';

    //     $counter++;
    // } while($counter <= 5);
    

    // for loop

    // for($r = 1; $r <=10; $r++){
    //     echo 'Counter: '.$r.'<br>';
    // }
    

    // foreach

    // $xArr = ['ako', 'si', 'rimart', 'e'];
    //     foreach($xArr as $value){
    //         echo 'Value: '.$value.'<br>';
    //     }
    
    
        $xArr = ['ako', 'si', 'rimart','aIndex' => 'e'];
        foreach($xArr as $index => $value){
            echo 'Value: '.$index.':'.$value.'<br>';
        }

    //forms

    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $age = $_POST['age'];
    
        echo "NAME: $name <br>";
        echo "AGE: $age <br>";

    }

    echo '<br>';

    //mySql

    $host = 'localhost';
    $user = 'root';
    $password = '';
    $database = 'php-tutorial';
    

    $connection = mysqli_connect($host, $user, $password, $database);

    $queryUser = "SELECT * FROM user";
    $sqlUser = mysqli_query($connection, $queryUser);

    // while ($results = mysqli_fetch_array($sqlUser)){
    //     echo '[DATABASE]  Name: '.$results['name'].'<br>';
    //     echo '[DATABASE]  Age: '.$results['age'].'<br>';
    // }
   
    for($r= 1; $r <= mysqli_num_rows($sqlUser); $r++){
        $results = mysqli_fetch_array($sqlUser);
        echo '[DATABASE]  Name: '.$results['name'].'<br>';
        echo '[DATABASE]  Age: '.$results['age'].'<br>';
    }
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/php-tutorial/index.php" method="post">
        <input type="text" name="name" placeholder="Enter your name">
        <input type="text" name="age" placeholder="Enter your age">
        <input type="submit" name = "submit" value="click" >
    </form>
</body>
</html>