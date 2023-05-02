<?php

    //Variáveis
    echo '<h2>Variáveis</h2>';
    $nome = 'Felipe';
    $idade = '24';
    echo 'Meu nome é '.$nome.' eu tenho '.$idade.' anos';
    echo '<hr>';

    //Operadores lógicos e condicionais 
    echo '<h2>Operadores e condicionais</h2>';
    if($idade === 26){
        echo 'Verdadeiro';
    }else{
        echo 'Falso';
    }
    echo '<hr>';

    //Looping
    echo '<h2>Operadores e condicionais</h2>';
    for($i = 0; $i <= 10; $i++){
        echo $i.'<br>';
        
    }
    echo '<hr>';

    //Function
    echo '<h2>Funções</h2>';
    printNumero(30);
    echo '<br>';
    printNumero(50);
    function printNumero($n){
        echo $n;
    }
    echo '<hr>';

    //Classes
    echo '<h2>Classes</h2>';

    class Pessoa{
        public $nome;
        public $idade;

        public function __construct($nome, $idade){
            $this->nome = $nome;
            $this->idade = $idade;
        }

        public function printNomeEIdade(){
            echo $this->nome;
            echo '<br>';
            echo $this->idade;
        }
    }

    $pessoa = new Pessoa('Charmy', '20');

    $pessoa->printNomeEIdade();

    echo '<hr>';

    //Array
    echo '<h2>Array</h2>';

    $array = ['Charmy', 'Felipe', 'Miranda'];

    echo $array[0];
?>