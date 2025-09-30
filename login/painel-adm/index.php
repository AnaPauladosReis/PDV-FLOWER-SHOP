<?php
@session_start();

echo "Painel administrativo - FLOWER SHOP <p>";
echo "Nome do usuário: " . $_SESSION['nome_usuario'] . "<p>";
echo "Nível do usuário: " . $_SESSION['nivel_usuario'];

?>

<a href="../logout.php">Sair</a>



