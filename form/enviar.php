<?php

$nome = $_POST['nome'];
$email = $_POST['email'];   
$mensagem = $_POST['mensagem'];
$assunto = 'Email do site';
$remetente = 'anareis87@icloud.com';

$conteudo = utf8_decode('Nome: ' .$nome . "\r\n" ."\r\n" .'Email: ' .$email . "\r\n" ."\r\n" . 'Mensagem: ' .$mensagem . "\r\n". "\r\n");

$cabecalhos = "From = " . $email;

mail($remetente, $assunto, $mensagem, $cabecalhos);

?>

<script>
    alert('Mensagem enviada com sucesso!');
    window.location.href = 'index.php';
</script>

