<?php

function funcao1()
{
    echo 'Entrei na função 1' . PHP_EOL;
    try {
        funcao2();
        echo 'Saindo da função 1' . PHP_EOL;

    }
    catch (exception $problema) {
 
          echo $problema->getLine().PHP_EOL;  
          echo $problema->getMessage().PHP_EOL;  
    }
    
    
}

function funcao2()
{
    echo 'Entrei na função 2' . PHP_EOL;
    for ($i = 1; $i <= 5; $i++) {
        echo $i . PHP_EOL;
    }

    throw new RuntimeException("Erro Porra");

    echo 'Saindo da função 2' . PHP_EOL;
}

echo 'Iniciando o programa principal' . PHP_EOL;
funcao1();
echo 'Finalizando o programa principal' . PHP_EOL;
