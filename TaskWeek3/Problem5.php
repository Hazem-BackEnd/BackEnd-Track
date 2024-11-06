<?php

$input=160;

echo "input:"."<br>".$input."<br>";


echo "Output:"."<br>";

$str="".$input;

$temp="";

for ($i = strlen($str)-1; $i>=0 ; $i--) {
    $temp.=$str[$i];
}

$idx=0;
for ($j = 0; $j < strlen($temp) ; $j++) {
    if($temp[$j] == '0'){
        continue;
    }
    else{
       $idx=$j;
       break;
    }
}

$reversedWithoutLeadingZeros="";

for ($k = $idx; $k < strlen($temp) ; $k++) {
    $reversedWithoutLeadingZeros=$reversedWithoutLeadingZeros.$temp[$k];
}


echo $reversedWithoutLeadingZeros. "<br>";
 echo $reversedWithoutLeadingZeros===$str? "YES" : "NO";