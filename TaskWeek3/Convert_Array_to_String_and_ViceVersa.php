<?php

$el="<br>";

$arr=["Ahmed","Amr"];
$temp="";
for ($i = 0; $i < count($arr); $i++) {
    if($i==count($arr)-1) {
        $temp = $temp . $arr[$i];
    }
    else{
        $temp = $temp . $arr[$i]." ";
    }
}
echo $temp;




l($el);
l($el);



$str="Mohamed Zayed";
$temp="";
$arr=[];
for ($j = 0; $j < strlen($str); $j++) {
    $temp = $temp . $str[$j];
    if($str[$j]==" " || $j==strlen($str)-1) {
        array_push($arr,$temp);
    $temp="";
    }
}
print_r($arr);

function l($var){
    echo $var;
}