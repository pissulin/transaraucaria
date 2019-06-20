<?php

$nome = $_POST['nome'];
$tel = $_POST['tel'];
$email = $_POST['email'];
$mensagem = $_POST['mensagem'];
$titulo = 'Formulário do site';
$destino = 'a.pissulin@gmail.com';

mail($destino,  $nome, $mensagem, $email, $tel);

?>