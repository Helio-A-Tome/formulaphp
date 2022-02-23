<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
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
    </div>
    <footer> <div>este é um rodape</div></footer>
   
</body>
</html>