<body background = "\Kishan Sital 1.24 PHP\assets\Opdrachten(PHP)\opdracht 1\img\back.jpg">
<br><br><br><br><br><br><br><br><h1 align="center">
<?php


$num1= $_POST ["num1"];
$num2= $_POST ["num2"];
$operation= $_POST ["operations"];

if ($operation == "oppervlakte cillindrisch oppervlak")
{
	echo "Oppervlakte cillindrisch oppervlak";
	echo nl2br("\n\n\n");
	$answer_oppervlaktecillindrischoppervlak = $num1*$num2*3.1415;
	echo " pi * $num1 * $num2 = ";
	echo $answer_oppervlaktecillindrischoppervlak."(kubieke centimeter)";
	$answer_oppervlaktecillindrischoppervlak2 = $answer_oppervlaktecillindrischoppervlak / 1000;
	echo nl2br("\n");  
	echo "= $answer_oppervlaktecillindrischoppervlak2(liter)";
	
}

if ($operation == "oppervlakte")
{
	echo "Oppervlakte";
	echo nl2br("\n\n\n");
	$answer_oppervlakte = 3.1415*$num1*$num2+2*3.1415*($num1*$num1)/4;
	echo " pi * $num1 * $num2 + 2 * pi * ($num1 * $num1) / 4 = ";
	echo $answer_oppervlakte."(kubieke centimeter)";
	$answer_oppervlakte2 = $answer_oppervlakte / 1000;
	echo nl2br("\n");  
	echo "= $answer_oppervlakte2(liter)";
	
}if ($operation == "inhoud")
{
	echo "Inhoud";
	echo nl2br("\n\n\n");
	$answer_inhoud = 3.1415*$num1*$num1*$num2/4;
	echo " pi * ($num1 * $num1) * $num2 / 4 = ";
	echo $answer_inhoud."(kubieke centimeter)";
	$answer_inhoud2 = $answer_inhoud / 1000;
	echo nl2br("\n");  
	echo "= $answer_inhoud2(liter)";
	
}
if ($operation =="Select an operation....")
	
	echo "Vul a.u.b alle velden in en/of kies uit wat u wilt berekenen.";
	
?>
</h1>
</body>