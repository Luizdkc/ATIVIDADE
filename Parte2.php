<?php
$p1 = $_GET["1"];
setcookie ("1", $p1, (time() + (3 * 24 * 3600)));

?>

<html>
<head>
<title>  Eleições 2018  </title>
</head>

<body>
<meta charset = "UTF-8">
<form action = "Parte3.php" method = "GET">
<ol>
<p> 2.Quem é esse Candidato?<br>
<p> <img align ="top" src ="Dilma.jpg"/> 

<li><input type="radio" name= "2" value="Dilma"/>Dilma Roussoulf</li>
<li><input type="radio" name= "2" value="Bolsonaro"/>Bolsonaro</li>
<li><input type="radio" name= "2" value="Lula"/>Lula Ladrão Roubou meu coração</li>
<li><input type="radio" name= "2" value="Marina"/>Marina</li>

</ol>


<input type="submit" name= "submit" value = "Proxima"/>

</form>
</body>
</html>