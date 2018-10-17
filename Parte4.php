<?php
$p3 = $_GET["3"];
setcookie ("3", $p3, (time() + (3 * 24 * 3600)));
?>

<html>
<head>
<title>  Eleições 2018 </title>
</head>

<body>
<meta charset = "UTF-8">
<form action = "Parte5.php" method = "GET">
</ol>

<p> 4.Quem é esse Candidato?<br>
<p> <img align ="top" src ="Bolsonaro.jpg"/> 

<li><input type="radio" name= "4" value="Dilma"/>Dilma Roussoulf</li>
<li><input type="radio" name= "4" value="Bolsonaro"/>Bolsonaro</li>
<li><input type="radio" name= "4" value="Lula"/>Lula Ladrão Roubou meu coração</li>
<li><input type="radio" name= "4" value="Marina"/>Marina</li>

</ol>


<input type="submit" name= "submit" value = "Finalizar"/>

</form>
</body>
</html>