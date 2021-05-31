<?php

$a=$_POST['txt1'];
$b=$_POST['txt2'];
$c=$_POST['txt3'];
$d=$_POST['txt4'];
$e=$_POST['txt5'];
$f=$a+$b+$c+$d+$e;
$h=($f/500)*100; 
echo "<center><h2>Student Result </h2></center>";
echo "<br/>";
echo "<center><h2>Total Marks:$f </h2></center>";
echo "<br/>";
echo "<center><h2>Percentage:$h</h2></center>";
echo "<br/>";

