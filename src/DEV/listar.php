
require_once "Cliente.php";


<thead>

        <td>Id</td>

        <td>Nome</td>

        <td>CPF</td>

        <td>Endereço</td>

        </thead>

        <?php foreach($clientes as $cliente): ?>

            <tr>

                <td><?php echo $cliente->getId() ; ?></td>

                <td><?php echo $cliente->getNome() ; ?></td>

                <td><?php echo $cliente->getCPF() ; ?></td>

                <td><?php echo $cliente->getEndereco() ; ?></td>

            </tr>

        <?php endforeach;?>

        </table>

