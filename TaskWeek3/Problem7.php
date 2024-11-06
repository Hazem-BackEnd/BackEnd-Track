<?php

$input1=4;
$input2=20;

echo "Input:"."<br>  ".$input1."   ".$input2."  <br>";


echo "Output:"."<br>";


$cnt_numbers=0;
for ($i = $input1; $i <=$input2; $i++) {
    $str="".$i;
    $cnt_4=0;
    $cnt_7=0;
    for ($j = 0; $j <strlen($str) ; $j++) {
        if ($str[$j] === '4') $cnt_4++;
        if ($str[$j] === '7') $cnt_7++;
    }
    if($cnt_4+$cnt_7==strlen($str)) {echo $str." "; $cnt_numbers++; }
}

if($cnt_numbers==0) {echo -1; }


