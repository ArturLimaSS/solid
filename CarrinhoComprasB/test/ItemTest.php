<?php

use App\Item;
use PHPUnit\Framework\TestCase;

class ItemTest extends TestCase
{
    public function testEstadoInicialItem()
    {
        $item = new Item();

        $this->assertEquals('', $item->getDescricao());
        $this->assertEquals(0, $item->getValor());
    }

    public function testGetAndSetDescricao()
    {
        $descricao = 'Cadeira de Plástico';

        $item   = new Item();
        $item->setDescricao($descricao);

        $this->assertEquals($descricao, $item->getDescricao());
    }

    public function testGestAndSetValor()
    {
        $valor = 35.42;
        
        $item   = new Item();
        $item->setValor($valor);

        $this->assertEquals($valor, $item->getValor());
    }

    public function testItemValodado()
    {
        
    }
}
