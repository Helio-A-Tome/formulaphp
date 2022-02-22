<?php
$nome = filter_input(INPUT_POST,'nome',FILTER_SANITIZE_SPECIAL_CHARS);
$email= filter_input(INPUT_POST,'email',FILTER_VALIDATE_EMAIL);
$senha = filter_input(INPUT_POST,'senha');


//verificações

if($nome && $email && $senha){
echo $nome. "<br/>";
echo $email. "<br/>";
echo md5($senha);
}else{
echo "favor preencher todos os dados";
}
