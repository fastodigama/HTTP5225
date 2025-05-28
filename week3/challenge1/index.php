<?php

$hour = rand(1,23);
echo $hour;

if ($hour >= 5 && $hour <=9){
    echo "breakfast:bananas,apples, and Oats";
}elseif ($hour >=12 && $hour <= 2){
    echo "lunch:fish,chicken, vegies";
}elseif ($hour >=7 && $hour <= 9){
    echo "Dinner:Strak, carrots, and brocoolli";
}else{
    echo "no feed";
}

?>