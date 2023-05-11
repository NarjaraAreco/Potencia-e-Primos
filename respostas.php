<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    
        <?php
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        $respostaTotal = $_SESSION['resposta'];
        ?>
        <meta charset="UTF-8">
        <title>Respostas</title>
    
        <body style="color: blue">
        <h1> Respostas</h1>      
        <p>Voce escolheu a opcao <?php echo $_SESSION['acao']?></p>
        <p>Seu numero era <?php echo $_SESSION['numero']?></p> 
        <p> Veja sua resposta final: <?php echo $respostaTotal?></p> 
        <br><hr>
        <footer><?php echo $_SESSION['nome']; ?> </footer>
    </body>
</html>