<?php

//Conexão com o banco de dados
$conn = new PDO("mysql:host=localhost;dbname=bd_turma_h", "root", "");

//Recebe as informações do aluno que vinheram do formulário HTML
$nome           = $_POST['nome'];
$altura         = $_POST['altura'];
$sexo           = $_POST['sexo'];
$dtNascimento   = $_POST['dtNascimento'];

$sqlInserirAluno = "INSERT INTO aluno (nome, altura, sexo, data_nascimento) "
    ."VALUE ('{$nome}', {$altura}, '{$sexo}', '{$dtNascimento}')";

if($conn->prepare($sqlInserirAluno)->execute()){
    echo 'Aluno cadastrado com sucesso!';
}else {
    echo 'Erro ao cadastrar o aluno.';
}
?>
<br><br>
<a href="index.php">Voltar</a>