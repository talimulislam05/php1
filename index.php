<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Journey Starts!</title>
</head>
<body>
    <?php
    // 0
    function br(){
        echo "<br>";
    };
    // 1
    $name = "Talimul";
    echo $name."<br>";
    // 2
    var_dump($name);

    // 3
    $NAME = "<h1>"."Talimul"."</h1>";
    echo $NAME;

    // 4
    $num1 = 10;
    $num2 = 12;

    $num3 = $num1 + $num2;
    echo $num3."<br>";

    // 5
    function call(){
    if(5==5){
        echo "Equal"."<br>";
    };
    }
    echo call();

    // 6
    $colors = array("red", "green", "blue");
    echo $colors[0]."<br>";

    // 7
    $names = array("Shakib", "Tamim", "Mushfiqur", "Mahmadullah");
    echo $names[0]."<br>";

    // 8
    $pass = "Passw0rd!";
    echo $pass."<br>";
    echo md5($pass)."<br>";

    // 9
    $password = "qwerty";
    echo $password."<br>";
    echo md5($password)."<br>";

    // 10
    $ssb = "Shikhbe Shobai";
    echo "I love"." ".$ssb."!"."<br>";

    // 10
    $float = 99.99;
    echo $float."<br>";
    var_dump($float);
    br();

    // 11
    $boolean = true;
    echo $boolean."<br>";
    var_dump($boolean)."<br>";
    br();

    // 12
    echo strlen("Talimul Islam");
    br();

    // 13
    echo str_word_count("Talimul Islam!");
    br();

    // 14
    $number1 = 10;
    $number2 = 12;
    echo $number1 - $number2;
    br();

    // 15
    $number1 = 13;
    $number2 = 3;
    echo $number1 * $number2;
    br();

    // 16
    $number1 = 10;
    $number2 = 10;
    echo $number1 / $number2;
    br();

    // 17
    $number1 = 144;
    $number2 = 100;
    echo $number1 % $number2;
    br();

    // 18
    $number1 = 3;
    $number2 = 2;
    echo $number1 ** $number2;
    br();

    // 19
    $number1 = 34;
    $number2 = 79;
    $number1 += $number2;
    echo $number1;
    br();

    // 20
    $number1 = 3;
    $number2 = 90;
    $number1 -= $number2;
    echo $number1;
    br();

    // 21
    $number1 = 5;
    $number2 = 5;
    $number1 *= $number2;
    echo $number1;
    br();

    // 22
    $number1 = 9;
    $number2 = 5;
    $number1 %= $number2;
    echo $number1;
    br();

    // 23
    $number1 = 10;
    $number2 = 5;
    $number1 /= $number2;
    echo $number1;
    br();

    // 24
    $taka = 10;
    if($taka == 20){
        echo "Take Mojo";
    }
    else{
        echo "Sorry Insufficent Balance";
        br();

    };
    
    // 25
    $taka = 10;
    if($taka == 20){
        echo "Take Mojo";
        br();

    }
    elseif($taka < 15){
        echo "Need More 5 taka";
        br();
    }
    else{
        echo "Sorry Insufficent Balance";
        br();

    }
        





    

    

    
    ?>
</body>
</html>