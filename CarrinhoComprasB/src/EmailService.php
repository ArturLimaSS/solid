<?php

namespace App;

class EmailService
{
    private $de;
    private $para;
    private $assunto;
    private $conteudo;


    public function __construct(
        string $de = 'arturfernandes@gmail.com',
        string $para = '<EMAIL>',
        string $assunto = 'teste',
        string $conteudo = 'teste'
    ) {
        $this->de = $de;
        $this->para = $para;
        $this->assunto = $assunto;
        $this->conteudo = $conteudo;
    }

    public static function dispararEmail()
    {
        return  "E-mail enviado!";
    }
}
