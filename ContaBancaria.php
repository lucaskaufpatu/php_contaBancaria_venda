<?php

declare(strict_types=1);

class ContaBancaria
{
   private string $Banco;
   private string $nomeTitular;
   private string $numeroAgencia;
   private string $numeroConta;
   private float $saldo;

   public function __construct(
       string $Banco,
       string $nomeTitular,
       string $numeroAgencia ,
       string $numeroConta,
       float $saldo
   )
   {
        $this->Banco = $Banco;
        $this->nomeTitular = $nomeTitular;
        $this->numeroConta = $numeroConta;
        $this->saldo = $saldo;
   }


   public function obterSaldo(): string
   {
       return 'Seu saldo atual é: R$ ' . $this->saldo;
   }
   public function depositar(float $valor): string
    {
        $this->saldo += $valor;
        return 'Deposito no valor de ' . $valor . ' realizado com sucesso';
    }
    public function sacar(float $valor): string
    {
        $this->saldo -= $valor;
        return 'Saque no valor de ' . $valor. ' realizado com sucesso';
    }

}

$conta = new ContaBancaria(
    'Banco Santander', //banco
    'Lucas Vasconcelos', //nome titular
    '2020', //numeroAgencia
    '536254-1', //numero conta
    0 //saldo
);

echo $conta->obterSaldo();

echo $conta->depositar(300.00);

echo PHP_EOL;

echo $conta->obterSaldo();

echo PHP_EOL;

echo $conta->sacar(150.00);

echo  PHP_EOL;

echo $conta->obterSaldo();