<?php

require_once "srv/Cliente.php";

    $clientes = array(

        0 => new Cliente("Rafael da silva", "345.567.123-23", "Sqs 416, E, Brasilia - DF"),
        1 => new Cliente("reanto bigode", "456.567.567-45", "Sqs 111, B, Brasilia - DF"),
        2 => new Cliente("Antonio sousa", "444.567.123-54", "Sqs 413, B, Brasilia - DF"),
        3 => new Cliente("ricardo celva", "233.678.123-12", "Sqs 414, R, Brasilia - DF"),
        4 => new Cliente("juliana da silva", "345.45.123-56", "Sqs 414, B, Brasilia - DF"),
        5 => new Cliente("yeda maria", "234.557.123-12", "Sqs 414, T, Brasilia - DF"),
        6 => new Cliente("sara carneiro", "789.567.123-09", "Sqs 314, H, Brasilia - DF"),
        7 => new Cliente("henrique bessini", "345.567.123-44", "Sqs 205, B, Brasilia - DF"),
        8 => new Cliente("samara jones", "123.890.789-12", "Sqs 414, G, Brasilia - DF"),
        9 => new Cliente("andrea da silva", "345.555.123-33", "Sqs 204, H, Brasilia - DF"),
       10 => new Cliente("rogerio andrades", "321.678.123-67", "Sqs 212, F, Brasilia - DF"),


     );
?>

<thead>

        <td>Id</td>

        <td>Nome</td>

        <td>CPF</td>

        <td>Endereço</td>

        </thead>

        <?php foreach($clientes as $cliente): ?>

    <tr>

        <td><?php echo $cliente->getId(); ?></td>

        <td><?php echo $cliente->getNome(); ?></td>

        <td><?php echo $cliente->getCPF(); ?></td>

        <td><?php echo $cliente->getEndereco(); ?></td>

    </tr>

<?php endforeach;?>

</table>

