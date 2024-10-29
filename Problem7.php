<?php

$x=39;

$first_digit=(integer)($x/10);
$second_digit=($x%10);

if($first_digit%$second_digit==0 || $second_digit%$first_digit==0) echo "YES";
else echo "NO";