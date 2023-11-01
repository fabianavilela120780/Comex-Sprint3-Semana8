<?php

namespace Fabiana120780\Roupa\categoria;

class Cliente
{
    protected $nome;
    private $cpf;

    public function __construct(string $nome, CPF $cpf)
    {
        $this->validaNomeCliente($nome);
        $this->nome = $nome;
        $this->cpf = $cpf;
    }

    public function recuperaNome(): string
    {
        return $this->nome;
    }

    public function recuperaCpf(): string
    {
        return $this->cpf->recuperaNumero();
    }

    protected function validaNomeTitular(string $nomeCliente)
    {
        if (strlen($nomeCliente) < 5) {
            echo "Nome é maior que 3 caracteres";
            exit();
        }
    }
}
