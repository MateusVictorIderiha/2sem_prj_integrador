<?php
/**
 * No PHP temos arrays que são chamados de variaveis SUPER GLOBAIS, essas estão
 * disponiveis em qualquer escopo e não precisão ser declaradas como globais ex:
 * $_GET -> parametros recebidos pelo metodo GET
 * $_POST -> parametros recebidos pelo metodo POST
 * $_REQUEST -> parametros recebidos por GET ou POST
 * $GLOBALS -> Todas as variaveis globais
 * $_SESSION -> guarda os dados da sessão
 * $_COOKIE -> guarda os dados dos cookies
 */


/**
 * "<?=" é o mesmo que "<?php echo" forma de mostrar o valor mais curto, 
 * muito usado entre tags html, aconselhavel a usar no meio do html
 */
?>
<h1><?= "Olá é um teste"; ?></h1>

<?php
/**
 * isset pode-se ler como a "variavel foi escrita" ou a "variavel existe"
 * @return bool retorna se a variavel existe ou não
 */
isset($existVariavel);


/**
 * PHP 7
 * antes do parametro expecifica que o valor passado como argumento deve ser do tipo int
 * os "dois pontos" depois dos parenteses significam o tipo do retorno, ou seja booleano
 * o retorno pode ser "void" que significa sem retorno
 */
function exemplo(int $a): bool {
    // resto da função aqui
}

/**
 * IF ternario é uma curat expressão para um if
 * primeiro temos a condição que fica antes da exclamação, que retorna verdadeiro ou falso 
 * antes dos "dois pontos" temos o resultado que retornará verdadeiro
 * e depois  dos "dois pontos" temos o resultado que retornara falso.
 * Evitar declarar variaveis dentro do retorno falso ou verdadeiro, 
 * mas pode-se retornar o valor e guarda em uma variavel sem problemas
 */
echo 5 > 7 ? "verdadeiro" : "falso";

echo isset($existVariavel) ? $existVariavel : "Não existe";
/**
 * Expressão para se a variavel foi escrita com um if ternario
 */
echo isset($existVariavel) ?? "Não existe";
