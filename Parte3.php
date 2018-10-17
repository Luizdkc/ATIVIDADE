<?php
$p2 = $_GET["2"];
setcookie ("2", $p2, (time() + (3 * 24 * 3600)));
?>

<html>
<head>
<title>  Eleições 2018   </title>
</head>

<body>
<meta charset = "UTF-8">
<form action = "Parte4.php" method = "GET">
<ol>
<p> 3.Quem é esse Candidato?<br>
<p> <img align ="top" src ="Marina.jpg"/> 

<li><input type="radio" name= "3" value="Dilma"/>Dilma Roussoulf</li>
<li><input type="radio" name= "3" value="Bolsonaro"/>Bolsonaro</li>
<li><input type="radio" name= "3" value="Lula"/>Lula Ladrão Roubou meu coração</li>
<li><input type="radio" name= "3" value="Marina"/>Marina</li>

</ol>


<input type="submit" name= "submit" value = "Proxima"/>

</form>
</body>
</html>