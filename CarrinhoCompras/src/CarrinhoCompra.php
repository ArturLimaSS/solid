<?php

namespace App;

class CarrinhoCompra
{

    //atributos

    private $items;
    private $status;
    private $valorTotal;

    //metodos

    public function __construct()
    {
        $this->items = [];
        $this->status = 'aberto';
        $this->valorTotal = 0;
    }

    public function exibirItems()
    {
        return $this->items;
    }

    public function adicionarItem(String $item, float $valor)
    {
        array_push($this->items, ['item' => $item, 'valor' => $valor]);
        $this->valorTotal += $valor;
    }

    public function exibirValorTotal()
    {
        return $this->valorTotal;
    }

    public function exibirStatus()
    {
        return $this->status;
    }

    public function confirmarPedido()
    {
        if ($this->validarCarrinho()) {
            $this->status = 'Finalizado';
            $this->enviarEmailConfirmacao();
            return true;
        }else{
            return false;
        }
    }

    public function enviarEmailConfirmacao()
    {
        echo '<br/>... envia email de confirmação ...';
    }


    public function validarCarrinho()
    {
        return count($this->items) > 0;
    }
}
