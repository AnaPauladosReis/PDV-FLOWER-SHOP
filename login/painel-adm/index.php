<?php
@session_start();

//VERIFICAR SE O USUARIO È ADMINISTRADOR
if(@$_SESSION['nivel_usuario'] != 'Administrador'){
    echo "<script>alert('Acesso negado! Você não é um administrador.');</script>";
    echo "<script>window.location='../index.php'</script>";
}

echo "Painel administrativo - FLOWER SHOP <p>";
echo "Nome do usuário: " . $_SESSION['nome_usuario'] . "<p>";
echo "Nível do usuário: " . $_SESSION['nivel_usuario'];

?>

<a href="../logout.php">Sair</a>



