<?php
require_once 'bancoClientes.php';

$cliente = $arrayClientes [$_GET['id']];

?>
<!DOCTYPE html>
<html>
<head>
    <title>Cadastro de clientes</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
<div class="container">

		<h1>Detalhes do Cliente <?php echo $cliente->getNome();?> </h1>

	    Nome: <?php echo $cliente->getNome();?>

	    CPF: <?php echo $cliente->getCpf();?>

	    Edereco: <?php echo $cliente->getEndereco();?>

</div>
<!-- jQuery (necessario para os plugins Javascript Bootstrap) -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>



