<?php
/**
 * Created by PhpStorm.
 * User: andresa
 * Date: 26/01/2019
 * Time: 09:56
 */
?>
<?php
//Essa uma linguagem fracamente tipada, logo quando criamos uma variável não é necessário
// caracterizá-la como string, int ou algo do tipo
//diferente de Java e C#

// ### Criando Váriáveis #####

$anoNascimento =  1990; //por ser fracamente tipada, eu não coloco antes da variável que tipo ela é, sring ou numerico
$nomCompletp =  'Andresa Vasconcelos'; // por ser uma string devemos colocar o elemento entre aspas, sendo-as simples ou duplas, mas manter um padrão entre elas para deixar o codigo mais organizado
// começa com letras minusculas ou underline, não pode ser numero e nem letras maiusculas


//##### COMENTAR EM BLOCOS####

// /* para abrir um comentário e */ comentário em blocos. VEJA O EXEMPLO ABAIXO

/*$nomCompletp =  'Andresa Vasconcelos';
$nomCompletp =  'Andresa Vasconcelos';
$nomCompletp =  'Andresa Vasconcelos';*/
?>

<!--#### COLOCANDO EM PRÁTICA O QUE FAZ UMA VARIÁVEL ####-->

<?php

$nome1 = 'Andresa';
$sobreNome = 'Vasconcelos';
$nomeCompleto = $nome1 . ' ' . $sobreNome; //o ponto se refere a uma contatenação de duas variáveis ja definidas
echo $nomeCompleto;

echo $nome1;
echo"<br/>";

unset($nome1); //função de limpar a variável
if (isset($nome1)) {//ISSET sestá questionando se a variável existe ela poderá executar alguma coisa ou um comando - verificar se ela foi definida
    echo $nome1;
}
?>




