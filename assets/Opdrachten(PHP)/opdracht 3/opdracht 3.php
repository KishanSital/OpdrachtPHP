
<html>
<body background="\Kishan Sital 1.24 PHP\assets\Opdrachten(PHP)\opdracht 3\img\pagge.jpg">



					<?php
                       $voornaam=$_POST["voornaam"];
                        $achternaam=$_POST["achternaam"];
    echo nl2br("\n\n\n\n\n\n\n\n\n\n\n\n\n\n");                     
						 if ( isset($_POST['geslacht']) ){
    $geslacht = $_POST['geslacht'];
    if ( $geslacht == 'meneer' ) {
       print("<div style='text-align:center' ><h1>Hallo Meneer $voornaam $achternaam leuk dat u even langskomt</h1></div>");
    }else if ( $geslacht == 'mevrouw' ){
        print("<div style='text-align:center' ><h1>Hallo Mevrouw $voornaam $achternaam leuk dat u even langskomt</h1></div>");

    }else{
        print("<div style='text-align:center' ><h1> A.u.b uw Geslacht en/of alle velden invullen aanvinken</h1></div>");
    }
}else{
    print("<div style='text-align:center' ><h1> A.u.b uw Geslacht aanvinken en/of alle velden invullen</h1></div>");
}


?>

</body>
</html>

