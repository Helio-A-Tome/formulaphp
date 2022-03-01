<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <style>
        .rel{
    text-align: center;
    font-size: 25px;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    font-weight: bold;
    color:green;
    width: 120px;
    background-color: #000;

}
    </style>
    <title>formulario em php</title>
</head>
<body>
<header>
<h1>Simples formulario em PHP</h1>
<nav>
<ul>
<li>
</li>
</ul>
</nav>
</header>
<section>
<div class="sessao">
</div>
</section>
    <div class="formu">
    <form method="POST" action="enviar.php" enctype="multipart/form-data">
    <label for="">
    Nome:
    <input type="text" name="nome" id="">
    </label><br/><br/>
    <label for="">
    Email:<input type="email" name="email" id="">
    </label><br/><br/>
    <label>
    Senha:<input type="password" name="senha" id="">
    </label><br/><br/>
    <label for="">
    Documentos:<input type="file" name="arquivo">
    
    </label><br/><br/>
    <input type="submit" value="enviar">
    </form>
    <div ><br/>
    <br/>
    <input type="text"  id="hora" class="rel" > </div>
    </div>
    <footer> <div>este é um rodape</div></footer>

    <!--estilo Relogio-->

    <script type="text/javascript">
   function relogio(){
       var data = new Date()
       var hor = data.getHours()
       var min = data.getMinutes()
       var seg = data.getSeconds()

       if(hor < 10){

        hor = "0" + hor

       }
       if(min < 10){
           min = "0" + min
       }
       if(seg < 10){
           seg = "0" + seg
       }

       var horas = hor + ":" + min +":"+ seg
       var hora = document.getElementById("hora").value =horas

   }
   var tempo =setInterval(relogio, 1000)
</script>
</body>
</html>