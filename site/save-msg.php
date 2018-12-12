<?php

$nome = $_POST['nome'];
$sobrenome = $_POST['sobreNome'];
$email = $_POST['e-mail'];
$objetivo = $_POST['objetivo'];
$mensagem = $_POST['mensagem'];

$InfoPessoal = [
    "nome" => $nome,
    "sobrenome" => $sobrenome,
    "e-mail" => $email,
    "objetivo" => $objetivo,
    "mensagem" => $mensagem
];

include 'functions/geral.php';

$data = getDadosJson('dados/mensagens.json');

$data[] = $InfoPessoal;
$mensagemErro = [];
        
$re_json = json_encode($data);
file_put_contents('dados/mensagens.json', $re_json);


if (empty($nome)) {
    $mensagemErro[] = "nome";
}
if (empty($sobrenome)) {
    $mensagemErro[] = "sobrenome";
}
if (empty($email)) {
    $mensagemErro[] = "e-mail";
}
if (empty($objetivo)){
    $mensagemErro[] = "objetivo";
}
if (empty($mensagem)) {
    $mensagemErro[] = "Mensagem";
}

if (count($mensagemErro) > 0) {
        $campoFalha = implode(", ", $mensagemErro);
        $dados_resposta = [
            "status" => 0,
            "msg" => "<strong>Um erro ocorreu nos seguintes campos: $campoFalha!</strong> Por favor, tente novamente!"
        ];
} else {
    if (file_put_contents('dados/mensagens.json', $re_json) !== false){
        $dados_resposta = [
        "status" => 1,
        "msg" => "<strong>Obrigado, mensagem enviada com sucesso!</strong> Obrigado, logo entraremos em contato"
        ];
    } else {
        $dados_resposta = [
            "status" => 0,
            "msg" => "<strong>Um erro ocorreu no envio!</strong> Por favor, tente mais tarde!"
        ];
    }
}

$resposta = json_encode($dados_resposta);

echo $resposta;

