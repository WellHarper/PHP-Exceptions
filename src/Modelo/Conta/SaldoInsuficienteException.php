<?php 

namespace Alura\Banco\Modelo\Conta;



class SaldoInsuficienteException extends \Exception 
{

    public function __construct(float $saque, float $saldoAtual) {
        
        $mensagem = "Amigo, tu comeu merda? Você tentou sacar $saque, mas tu só tem $saldoAtual. Se liga, meu parceiro";
        parent::__construct($mensagem);



    }




    


}