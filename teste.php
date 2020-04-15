<?php 
    /**
     * Nessa parte você deve incluir os arquivos
     * pizzas.php e o functions php para realizar
     * os testes das funções desenvolvidas em
     * functions.php
     */
    

     include("includes/functions.php");
     include("includes/pizzas.php");

    //$pizza = pizzaPorId(7);

    //  echo "<pre>";
    //  print_r($pizza);
    //  echo "</pre>";

    // Exercicio 2. Pizza com Destaque
     //pizzasComDestaque();

    // Exercicio 3. Pizza sem Destaque
     //pizzasSemDestaque();

    
     
     echo "<pre>";
     print_r(buscaPizza("ca"));
     echo "</pre>";
?>