<?php
require_once '../src/DEV/Cliente.php';
require_once '../src/DEV/bancoClientes.php';
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

<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Cadastro</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contato</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>

<br>

<div class="container">

    <!-- Main component for a primary marketing message or call to action -->
    <div class="jumbotron">
        <h1 align="center">Cadastro de Clientes</h1>

        <table class="table table-hover sortable">
            <tr>
                <td>ID</td>
                <td>NOME</td>
                <td>CPF</td>
                <td>ENDERECO</td>
                <td>ACTIONS</td>

            </tr>
            <?php foreach($arrayClientes as $cliente): ?>
                <tr>
                    <td><?php echo $cliente->getId(); ?></td>
                    <td><?php echo $cliente->getNome(); ?></td>
                    <td><?php echo $cliente->getCPF(); ?></td>
                    <td><?php echo $cliente->getEndereco(); ?></td>
                    <td><a href="<?php echo 'detalhes.php?id='.$cliente->getId();?>">Detalhes</a> </td>

                </tr>
            <?php endforeach;?>
        </table>
        <!--<a class="btn btn-lg btn-primary" href="#" role="button">Retornar &raquo;</a>-->
        </p>
    </div>

</div> <!-- /container -->
<!-- jQuery (necessario para os plugins Javascript Bootstrap) -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/sorttable.js"></script>
</body>
</html>