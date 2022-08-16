<?php

namespace Alura\Arquitetura;

class Aluno
{
    private Cpf $cpf;
    private string $nome;
    private Email $email;
    private Array $telefones;

    public function __construct(Cpf $cpf, string $nome, Email $email)
    {
        $this->cpf = $cpf;
        $this->nome = $nome;
        $this->email = $email;
    }

    public function adicionarTelefone(string $ddd, string $numero)
    {
        $this->telefones[] = new Telefone($ddd, $numero);
        return $this;
    }
}