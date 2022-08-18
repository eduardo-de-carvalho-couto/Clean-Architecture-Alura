<?php

namespace Alura\Arquitetura\Dominio;

class Email
{
    private string $endereco;

    public function __construct(String $endereco)
    {
        if(filter_var($endereco, FILTER_VALIDATE_EMAIL) === false){
            throw new \InvalidArgumentException(
                'Endereço de e-mail inválido'
            );
        }

        $this->endereco = $endereco;
    }

    public function __toString(): string
    {
        return $this->endereco;
    }
}