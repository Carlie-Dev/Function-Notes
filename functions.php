<?php
    echo "PHP Functions Notes\n";

    //function with no parameters
    function displayWelcomeMessage(){
        echo("Welcome to my Demo!\n");
    }

    displayWelcomeMessage();

    //function with parameter
    function squareNumber($num)
    {
        $square = $num * $num;
        echo ("the square of $num is $square\n");
    }
    squareNumber(5);


    //function with a parameter and an optional parameter
    function multiplyNumbers($num, $multiplier = 2){
        $result = $num * $multiplier;
        echo "$num is multiplied by $multiplier is $result\n";
    }

    multiplyNumbers(5);

    multiplyNumbers(5,3);

    //function with return value
    function doubleNumber($num){
        return $num * 25;
    }

    $value = doubleNumber(50)."\n";
    echo($value);
    //or
    echo (doubleNumber(10))."\n";
?>