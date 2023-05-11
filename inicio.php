<html>
    <head>
        <title>Inicio</title>
    </head>
    <body>
    <center>
        <h1>Bem vindo - Escolha sua opcao</h1>
        <br>
        <h2>Potencia</h2>
        <form method="post" action="funcao.php?acao=potencia">
            <label>Insira um numero </label>
            <input type="number"  id="numeroPotencia" name="numeroPotencia" placeholder="Insira um valor"><br>
            <input type="submit"  value="saber a potencia"/>
        </form>
        <br><hr>
        <h2>Primos</h2>
        <form method="post" action="funcao.php?acao=primo">
            <label>Insira um numero </label>
            <input type="number"  id="numeroPrimo" name="numeroPrimo" placeholder="Insira um valor"><br>
            <input type="submit"  value="saber se eh primo"/>
        </form>
        <br><hr>
        <form method="post" action="funcao.php?acao=googles">
            <label>Deseja ir ao google? </label>
            <input type="submit"  value="Google"/>
        </form>
    </center>  
    </body>
</html>
