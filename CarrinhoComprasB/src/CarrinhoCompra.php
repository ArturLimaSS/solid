<?php

namespace App;

use app\Item;

class CarrinhoCompra
{

    private $items;

    public function __construct()
    {
        $this->items = [];
    }


    public function getItems()
    {
        return $this->items;
    }

    public function addItems(Item $item)
    {
        array_push($this->items, $item);
        return true;
    }

    public function validarCarrinho()
    {
        return count($this->items) > 0;
    }
}
