<?php
require_once '../DEV/bancoClientes.php';

$cliente = $arrayClientes [$_GET['id']];

?>

<h1>Detalhes do Cliente <?php echo $cliente->getNome();?> </h1>

    Nome: <?php echo $cliente->getNome();?>

    CPF: <?php echo $cliente->getCpf();?>

    Edereco: <?php echo $cliente->getEndereco();?>

