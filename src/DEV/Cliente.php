<?php


class Cliente
{
    public $id;
    public $nome;
    public $cpf;
    public $endereco;

    function __construct($nome, $cpf, $endereco)
    {
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->endereco = $endereco;
    }


    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        return $this->nome = $nome;
    }

    public function getCpf()
    {
        return $this->cpf;
    }

    public function setCpf($cpf)
    {
        return $this->cpf = $cpf;
    }

    public function getEndereco()
    {
        return $this->endereco;
    }

    public function setEndereco($endereco)
    {
        return $this->endereco = $endereco;
    }





}