<?php
$nome = filter_input(INPUT_POST,'nome',FILTER_SANITIZE_SPECIAL_CHARS);
$email= filter_input(INPUT_POST,'email',FILTER_VALIDATE_EMAIL);
$senha = filter_input(INPUT_POST,'senha');
//$imag=filter_input(INPUT_POST,'arquivo');


//verificações

if($nome && $email && $senha){
echo $nome. "<br/>";
echo $email. "<br/>";
echo md5($senha);
}else{
echo "favor preencher todos os dados";
}

$permitidos = ['image/jpg', 'image/png', 'image/gif', 'image/jpeg'];

if(in_array($_FILES['arquivo']['type'],$permitidos)){

$nomeImag = "img-".md5(time().rand(0,1000)).".jpg";
move_uploaded_file($_FILES['arquivo']['tmp_name'],'arquivos/'.$nomeImag);
echo "arquivo enviado com sucesso";

}else{
echo 'falha ao enviar arquivo';
}

