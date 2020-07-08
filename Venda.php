<?php

declare(strict_types=1);

class Venda
{
    private string $produto;
    private string $quantidade;
    private string $data;
    private float $valorTotal;

    public function __construct(
        string  $produto,
        string $quantidade,
        string $data,
        float $valorTotal
    )
    {
        $this->produto = $produto;
        $this->quantidade = $quantidade;
        $this->data = $data;
        $this->valorTotal = $valorTotal;
    }

    public function  produto(): string
    {
        return 'Data da compra: ' . $this->produto;
    }

    public function quantidade(): string
    {
        return 'Quantidade solicitada: ' . $this->quantidade;
    }

    public function data(): string
    {
        return 'Data da compra: ' . $this->data;
    }

    public function valorTotal( float $valorTotal): string
    {
        return 'Valor pago: R$ ' . $this->valorTotal;
    }
}


$venda = new venda(
    'caixas de marmita',
    '100 unidades',
    '08/07/2020',
    100.00
);

echo $venda->produto();
PHP_EOL;

echo $venda->quantidade();
PHP_EOL;

echo $venda->data();
PHP_EOL;

echo $venda->valorTotal(100.00);

