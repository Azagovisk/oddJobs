<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"> 
        <title>GeraNuemroEBotaNaImagem</title>
        <style>
      
        </style>
    </head>
    <body>
        <h3>Captcha:</h3>
        <img border="5" src="http://localhost/oddJobs/trabimagemnumero/geraImagem.php"/>
        
          <form action="valida.php" method="POST">
            <input type="text" name="login" placeholder="Login"/>
            <input type="password" name="senha" placeholder="Senha"/>
            <input type="text" name="numero" placeholder="Numero"/>
            <input type="submit" name="envia" value="Enviar"/>
        </form>
    </body>
</html>