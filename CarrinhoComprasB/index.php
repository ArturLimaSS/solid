<?php

require __DIR__ . '/vendor/autoload.php';

use App\CarrinhoCompra;
use App\EmailService;
use App\Item;
use App\Pedido;

echo '<h3>COM SRP</h3>';

$pedido = new Pedido;

$item1 = new Item();
$item2 = new Item();
$item3 = new Item();

$item1->setDescricao('Porta copo');
$item1->setValor('4.55');

$item2->setDescricao('Lâmpada');
$item2->setValor('8.32');

$item3->setDescricao('Teste');
$item3->setValor('18.32');

echo '<hr>';

echo '<h4>Pedido Iniciado</h4>';
echo '<pre>';
print_r($pedido);
echo '</pre>';

$pedido->getCarrinhoCompra()->addItems($item1);
$pedido->getCarrinhoCompra()->addItems($item2);
$pedido->getCarrinhoCompra()->addItems($item3);

echo '<hr>';

echo '<h4>Pedido com items</h4>';
echo '<pre>';
print_r($pedido);
echo '</pre>';
echo '<hr>';

echo '<h4>Itens do Carrinho</h4>';
echo '<pre>';
print_r($pedido->getCarrinhoCompra()->getItems());
echo '</pre>';

echo '<hr>';
echo '<h4>Valor do pedido</h4>';
echo '<pre>';
$total = 0;

foreach ($pedido->getCarrinhoCompra()->getItems() as $key => $item) {
    $total += $item->getValor();
}

echo $total;
echo '<hr>';

echo '<h4>Carrinho está válido:</h4>';
echo $pedido->getCarrinhoCompra()->validarCarrinho() ? 'Valido' : 'Inválido';
echo '<hr>';

echo '<h4>Status do pedido:</h4>';
echo $pedido->getStatus();
echo '<hr>';

echo '<h4>Confirmar pedido:</h4>';
echo $pedido->confirmar() ? 'Confirmado' : 'Ocorreu um erro ao confirmar o pedido. Verifique se existem items adicionados ao mesmo.';
echo '<hr>';

echo '<h4>Status do pedido:</h4>';
echo $pedido->getStatus();
echo '<hr>';

echo '<h4>Email:</h4>';

echo $pedido->getStatus() === 'Confirmado' ? EmailService::dispararEmail() :  'Pedido não confirmado';

echo '<hr>';
