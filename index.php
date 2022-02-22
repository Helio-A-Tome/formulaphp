<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="formu">
    <form method="POST" action="enviar.php" enctype="multpart/form-data">
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
    Documentos:<input type="file" name="arquivos">
    
    </label><br/><br/>
    <input type="submit" value="enviar">
    </form>
    </div>
</body>
</html>