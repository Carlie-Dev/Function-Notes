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
?>