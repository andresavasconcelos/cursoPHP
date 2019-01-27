
<!--##### TIPOS BÁSICOS DO PHP ##### -->

<?php

#### TIPOS BÁSICOS ####
    $nome = 'Vamos Aprender'; //string
    $site = "www.globo.com.br"; //string
    $nome = 1990; //inteiro
    $salario = 5500.99; //ponto flutuante porque tem casas decimais
    $bloqueado = false; // booleano, true e falso

#### TIPOS COMPOSTO ####
    $frutas = array("abacaxi", "laranja", 500, 500.50); // aqui podemos colocar varias informações e quem é string tem que colocar entre aspas mas numero não pode
    echo $frutas [2]; // começa com zero, um, dois e assim por diante

    $nascimento = new DateTime(); // TODA VEZ QUE APARECER A PALAVRA NEW DEPOIS DE UMA VARIÁVEL, ENTÃO A ORIENTAÇÃO OBEJTO ESTÁ SENDO USADO

var_dump($nascimento); // a fim de verificar o tipo de variável - verificar no navegador

#### TIPOS ESPECIAIS ####
    $arquivo = fopen("tiposDados.php", "r"); // fileOpen ou seja, abrir o arquivo e R significa o tipo de leitura (read)

var_dump($arquivo);

##### DIFERENÇA DE NULL E VAZIO[

    $nulo = NULL ;//ausencia de valor - quando destruir um variável - ISSO FAZ MUITA DIFERENÇA NO BANCO DE DADOS
    $vazio = "";//foi iniciado mas está sem nenhum valor atribuído

?>
