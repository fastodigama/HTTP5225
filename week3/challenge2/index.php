<?php

$input = rand(1,1000);



    if($input % 3 === 0 && $input % 5 === 0){
        echo "fizzBuzz";
    }elseif ($input % 5 === 0){
        echo "Buzz";
    }elseif ($input % 3 === 0){
        echo "Fizz";
    }else{
        echo $input;

    }


?>
