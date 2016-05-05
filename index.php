<?php

#require_once "Pessoa.php";

#$pessoa1 = new Pessoa("giusepe", 31);
#$pessoa2 = new Pessoa("Juliana", 21);

#echo $pessoa1->correr(70);



require_once "Produto.php";
require_once "Tenis.php";

$tenis = new TenisAdidas();
$tenis->getCor();


$tenis2 = new SapaTenis();
$tenis2->getCor();
$tenis2->getTamanho();


