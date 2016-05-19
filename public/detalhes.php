<?php
require_once '../src/DEV/bancoClientes.php';

$cliente = $arrayClientes [$_GET['id']];

?>
<!DOCTYPE html>
<html>
<head>
    <title>Cadastro de clientes</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
<div class="container">

		<h1>Detalhes do Cliente: <?php echo $cliente->getNome();?> </h1>

	    Nome: <?php echo $cliente->getNome();?><br>

	    CPF: <?php echo $cliente->getCpf();?><br>

	    Endereco: <?php echo $cliente->getEndereco();?><br>
        <br>
        <br>
        <a class="btn btn-lg btn-primary" href="http://localhost/phpoo-testes/phpoo/php-oo/public/index_new.php" role="button">Retornar &raquo;</a>

</div>
<!-- jQuery (necessario para os plugins Javascript Bootstrap) -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>



