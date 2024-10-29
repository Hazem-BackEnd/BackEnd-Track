<?php

$a=22;
$b=10;
$k=2;

if($a % $k==0 && $b % $k==0) echo "Both";
else if($a % $k != 0 && $b % $k==0) echo "Momo";
else if($a % $k == 0 && $b % $k !=0) echo "Memo";
else echo "No One";