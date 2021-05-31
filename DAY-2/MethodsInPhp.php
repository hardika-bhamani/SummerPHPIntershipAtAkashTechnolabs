<?php

$a=20;
$b=30;
?>
<html>
<body padding="100px" margin="100px">
<!-- Method1 -->
<h2>
      Method1<br/>
<?php
echo "SO here we have a=".$a;
echo "and b=".$b;
?>
</h2>

<!-- Method2 -->   
<h2>
    Method2<br/>
<?php
echo "SO here we have a=".$a."and b=".$b;;

?>
</h2>

<!-- Method3 -->   
<h2>
    Method3<br/>
<?php
echo "SO here we have a=$a and b=$b" ;

?>
</h2>

<!-- Method4 -->   
<h2>
    Method4<br/>
<?php
echo 'SO here we have a='.$a .'and b='.$b ;
?>
</h2>

<!-- Method5 -->   
<h2>
    Method5<br/>
<?php
echo "SO here we have a=$a and b=$b  and sum=".($a+$b);
?>
</h2>
</body>
</html>