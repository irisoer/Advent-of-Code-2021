<?php
//PART 2
foreach($inputDay2 as $input){

    list($direction, $number) = explode(" ", $input);
    if($direction=="forward"){
        $down=$down+($aim*$number);
        $forward=$forward+$number;
    } elseif($direction=="down") {
        $aim = $aim + $number;
    } elseif ($direction=="up"){
        $aim=$aim-$number;
    }
}

print($forward."\n");
print($down."\n");

print("The correct answer is ". $forward*$down);