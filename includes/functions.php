<?php 
    
    /**
     * Defina uma função que receba o id inteiro e retorne a
     * pizza quem tem como id este que foi dado
     */
    function pizzaPorId($id){
        global $pizzas;

        foreach($pizzas as $pizza) {
            if($pizza ['id'] == $id) {
                return $pizza;
            } else {
                echo "resultado invalido";
            }
        }
    }
    print_r(pizzaPorId(1));

    /**
     * Defina uma função que retorne um array com as pizzas
     * de destaque. Dica: $vetor[] = 3 adiciona o número 3
     * na última posição de $vetor
     */
    function pizzasComDestaque(){
        global $pizzas;
        $vetor = [];

    foreach($pizzas as $pizza) {
        if($pizza ['destaque'] != false) {
            $vetor[] = $pizza;     
        }
    }
    echo "<pre>";
    print_r($vetor);
    echo "</pre>";
    //print_r($vetor);

    }

     /**
     * Defina uma função que retorne um array com as pizzas
     * de destaque. Dica: $vetor[] = 3 adiciona o número 3
     * na última posição de $vetor
     */
    function pizzasSemDestaque(){
        global $pizzas;
        $vetor = [];

    foreach($pizzas as $pizza) {
        if($pizza ['destaque'] == false) {
            $vetor[] = $pizza;     
        }
    }
    echo "<pre>";
    print_r($vetor);
    echo "</pre>";
    }

    /**
     * Defina uma função que retorne a pizza mais cara do menu
     * Essa função não recebe nenhum parâmetro.
     * Ela acessar a variável $pizzas utilizando o global
     */
    function pizzaMaisCara(){}

    /**
     * Defina uma função que retorne a pizza mais barata do menu
     * Essa função não recebe nenhum parâmetro.
     * Ela acessar a variável $pizzas utilizando o global
     */
    function pizzaMaisBarata(){}

    /**
     * Defina uma função que recebe o trecho de nome de uma pizza
     * e retorna um array contendo todas as pizzas que contenham
     * o trecho
     */
     function buscaPizza($trecho){
         global $pizzas;
         $nomeP = [];

         foreach($pizzas as $pizza) {
             if(stripos($pizza['nome'], $trecho) !== false) {
                 $nomeP[] = $pizza;
             }
         }
         return $nomeP;
     }

     /**
     * Defina uma função que impima as informações de uma pizza
     */
    function pizzaPrint($pizza){}
?>