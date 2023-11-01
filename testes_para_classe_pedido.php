<?php


namespace Fabianavilela120780\Produto\Roupas\Meia;


class pedido extends o
{

}
$pedido = new novopedido(
    new cliente(
        new PEDIDO('54564444'),
        'Meia Amarela',
        new Cliente('Maria do Bairro', 'CPF 45445445454', 'Pix 32,50', '2'),
    ),
    1
);

$pedido->compra(80);
$pedido->venda(2);
echo $pedido->estoqueatual();

        $this->estoque -= $estoqueatual;
    }
}
