<?php

require_once "Conta.php";
require_once "ContaPremium.php";


$conta = new ContaPremium();
$conta->depositar(100);
$conta->sacar(55);

echo $conta->getSaldo();