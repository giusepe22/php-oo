<?php
require_once 'Cliente.php';

$arrayClientes = array(

    0 => new Cliente("0","Rafael da silva", "345.567.123-23", "Sqs 416, E, Brasilia - DF"),
    1 => new Cliente("1","Renato souza gomes", "456.567.567-45", "Sqs 111, B, Brasilia - DF"),
    2 => new Cliente("2","Antonio sousa", "444.567.123-54", "Sqs 413, B, Brasilia - DF"),
    3 => new Cliente("3","Ricardo Selva dias", "233.678.123-12", "Sqs 414, R, Brasilia - DF"),
    4 => new Cliente("4","Juliana da silva", "345.405.123-56", "Sqs 414, B, Brasilia - DF"),
    5 => new Cliente("5","Yeda maria carneiro", "234.557.123-12", "Sqs 414, T, Brasilia - DF"),
    6 => new Cliente("6","Sara carneiro", "789.567.123-09", "Sqs 314, H, Brasilia - DF"),
    7 => new Cliente("7","Henrique baldoni freaza", "345.567.123-44", "Sqs 205, B, Brasilia - DF"),
    8 => new Cliente("8","Samara jones koni", "123.890.789-12", "Sqs 414, G, Brasilia - DF"),
    9 => new Cliente("9","Andrea da silva", "345.555.123-33", "Sqs 204, H, Brasilia - DF"),
   10 => new Cliente("10","Rogerio duarte guimaraes", "321.678.123-67", "Sqs 212, F, Brasilia - DF"),
    
);

    $iterator = new ArrayObject($arrayClientes);
    $iterator->ksort();