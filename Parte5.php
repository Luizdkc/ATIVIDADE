<?php
$p4 = $_GET["4"];
setcookie ("4", $p4, (time() + (3 * 24 * 3600)));
$cont=0;

$r1 = $_COOKIE["1"];
$r2 = $_COOKIE["2"];
$r3 = $_COOKIE["3"];
$r4 = $_COOKIE["4"];
if ($r1 == "Lula"){
    $cont= $cont +2.5;
}
if ($r2 == "Dilma"){
    $cont= $cont +2.5;
   }
if ($r3 == "Marina"){
    $cont= $cont +2.5;
   } 
if ($r4 == "Bolsonaro"){
     $cont= $cont +2.5;
}
else{
	$cont=$cont + 2.5;
}

echo "<h>Respostas do usuário<br> Pergunta 1: $r1<br> Pergunta 2: $r2<br> Pergunta 3: $r3<br> Pergunta 4: $r4<br><br><h>";
echo "<h>Respostas certas<br> Pergunta 1: Lula <br> Pergunta 2: Dilma <br> Pergunta 3: Marina <br> Pergunta 4: Bolsonaro <br><h>"; 
echo "<h>Pontuação: $cont<h>"


?>