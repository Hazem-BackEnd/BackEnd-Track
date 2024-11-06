<?php

$input=1;

echo "input:"."<br>".$input."<br>";


echo "Output:"."<br>";
if($input==1){
    echo -1;
}
else{
    for ($i = 1; $i <=$input ; $i++) {
       if($i % 2 == 0) echo $i."<br>";
    }
}