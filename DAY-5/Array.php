<?php
//Numerical Array
//Methos 1
$a[0]=10;
$a[1]=20;
$a[2]=20.50;
$a[3]="C";
//Method 2 //Index Dynamic Array
$a[0]=10;
$a[1]=20;
$a[2]=20.50;
$a[3]="C";

//Method 3
//Always use this method to create an array
$a=array(10,20,30,"C","C++",10.15);




//Print Array Value
echo $a[3];

//Print whole array
for($i=0;$i<count($a);$i++){
    echo "<br/>" .$a[$i];
}
//homework using while and do while loop and doing array
//55+ functions in array
$sum=array_sum($a);
echo $sum;

//this is our god
//3 inbuild function to debug an array
echo "<pre>";
print_r($a);
echo "<pre>";
var_dump($a);
echo "<pre>";





//Associative Array

//key =value


//method1
$a[0]=10;
$a['c']="Computer";
$a['php']="Web Development";
$a[10]="Ten";
$a[50]=50.50;

//methos2
//Always use this method to create an array
$a=array(
    0=>10,
    "c"=>"computer",
    "php" =>"web development",
    10=>"ten",
    50=>50.50
    
);
//Print Value
echo "C for ".$a['c'];
//Print whole array
foreach ($a as $value) {
    echo "<br>Value is $value";
}
foreach ($a as $key => $value) {
    echo "<br/>Key is <b>$key</b> and Value is <b>$value</b>";
}

echo "<pre>";
print_r($a);
echo "<pre>"; 
var_dump($a);
echo "<pre>";