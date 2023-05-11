<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
$REQUEST = filter_input(INPUT_SERVER, 'REQUEST_METHOD');
$acao = filter_input(INPUT_GET, 'acao', FILTER_SANITIZE_STRING);

//echo $acao;
switch ($acao) {
    case $acao == "potencia":
        if ($REQUEST == "POST") {
        $numeroPotencia = filter_input(INPUT_POST, 'numeroPotencia', FILTER_SANITIZE_NUMBER_INT);
        $resposta = potenResp($numeroPotencia);
        $_SESSION['numero'] = $numeroPotencia;
        $_SESSION['resposta'] = $resposta;
        $_SESSION['acao'] = $acao;
        $_SESSION['nome'] = 'Narjara Aréco';
        
            header('Location: respostas.php');
        }         
        break;
    case $acao == "primo":
        if ($REQUEST == "POST") {
        $numeroPrimo = filter_input(INPUT_POST, 'numeroPrimo', FILTER_SANITIZE_NUMBER_INT);
        $resposta = saberPrimo($numeroPrimo);
        $_SESSION['numero'] = $numeroPrimo;
        $_SESSION['acao'] = $acao;
        $_SESSION['nome'] = 'Narjara Aréco';
        
         if($resposta == 0){
           if($numeroPrimo <> 1){                   
                  $yep = " eh primo";
                  $_SESSION['resposta'] = $yep;
                }else{
                    $yep = "nao eh primo";
                    $_SESSION['resposta'] = $yep;

                }
       // $_SESSION
         header('Location: respostas.php');
        }
      //  header('Location: respostas.php');
        }
        break;
    case $acao == "googles":
        header('Location: https://www.google.com.br/');
        break;

}

function potenResp(int $numeroPotencia) {
    
    
    return $numeroPotencia * $numeroPotencia;
}

function saberPrimo(int $numeroPrimo){
   $divisores = 0;
   for($cont = 2; $cont < $numeroPrimo; $cont++){
     if($numeroPrimo % $cont == 0){
       $divisores++;
    }
  }
  return $divisores;
}