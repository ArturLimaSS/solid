<?php

namespace App;

class Item
{
    private $descricao;
    private $valor;

    public function __construct()
    {
        $this->descricao = '';
        $this->valor = 0;
    }

    public function getDescricao()
    {
        return $this->descricao;
    }

    public function getValor()
    {
        return $this->valor;
    }

    public function setDescricao($descricao)
    {
        return $this->descricao = $descricao;
    }

    public function setValor($valor)
    {
        return $this->valor = $valor;
    }

    public function validarItem()
    {
        if ($this->descricao == '') return false;
        if ($this->valor == 0) return false;

        return true;
    }
}
