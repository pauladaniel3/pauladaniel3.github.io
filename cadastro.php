<?php

$host = "localhost";
$usuario = "root";
$senha_bd = "";
$banco = "sistema_login";

$conexao = new mysqli($host, $usuario, $senha_bd, $banco);

if($conexao->connect_error){
    die("Erro de conexão: " . $conexao->connect_error);
}

$nome = $_POST['nome'];
$data_nascimento = $_POST['data_nascimento'];
$endereco = $_POST['endereco'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = "INSERT INTO usuarios
(nome, data_nascimento, endereco, email, senha)
VALUES
('$nome','$data_nascimento','$endereco','$email','$senha')";

if($conexao->query($sql) === TRUE){
    echo "Cadastro realizado com sucesso!";
} else {
    echo "Erro: " . $conexao->error;
}

$conexao->close();

?>