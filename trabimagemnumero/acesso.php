<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"> 
        <title>GeraNuemroEBotaNaImagem</title>
        <script>
            
        setInterval(  function teste(){
            let tag = document.getElementById('id');
            tag.style.backgroundColor = "rgb("+(Math.floor(Math.random()*256))+"," +(Math.floor(Math.random()*256)) +","+(Math.floor(Math.random()*256))+")";
        }, 10);
        </script>
    </head>
    <body id="id" onload="teste()">
        <h1>SEJA BEM VINDO</h1>
        <audio src="Cheeki Breeki Hardbass Anthem.mp3" controls autoplay loop hidden>
<p>Seu navegador não suporta o elemento audio </p>
</audio>
    </body>
</html>