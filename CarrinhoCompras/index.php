<?php

require __DIR__ . '/vendor/autoload.php';

use App\CarrinhoCompra;

$carrinho1 = new CarrinhoCompra();
print_r($carrinho1->exibirItems());


$carrinho1->adicionarItem('Bicicleta', 750.10);
$carrinho1->adicionarItem('Geladeira', 1950.15);
$carrinho1->adicionarItem('Tapete', 350.20);

echo '<br></br>';

print_r($carrinho1->exibirItems());

echo '<br></br>';

echo 'Valor total: ' . $carrinho1->exibirValorTotal();

echo '<br></br>';

echo 'Status: ' . $carrinho1->exibirStatus();

echo '<br></br>';

if($carrinho1->confirmarPedido())
{
    echo 'Pedido realizado com sucesso!';
}else{
    echo 'O carrinho está vazio!';
}

echo '<br></br>';

echo 'Status: ' . $carrinho1->exibirStatus();