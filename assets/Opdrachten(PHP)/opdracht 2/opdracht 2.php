
<body background="\Kishan Sital 1.24 PHP\assets\Opdrachten(PHP)\opdracht 2\img\bg.jpg">
<?php  
$cijfers=array(1,3,5,7,9,11,13,15,17,19); 
$aantal=count($cijfers); sort($cijfers); for($i=0 ; $i<$aantal ; $i++)  
print "<div style='text-align:center' ><h5>$cijfers[$i].</h5></div>";  
print "<div style='text-align:center' ><h3>het vijfde oneven getal in deze reeks is $cijfers[4]</h3></div>"; 
?> 
</body>
