<?php
// Conexão com o banco de dados
$conn = new PDO("mysql:host=localhost;dbname=bd_turma_h", "root", "");

$idAluno = $_GET['idAluno'];

$sqlEcluirAluno = "DELETE FROM aluno WHERE id={$idAluno}";

if($conn->prepare($sqlEcluirAluno)->execute()){
    echo 'Aluno excluído com sucesso!';
}else {
    echo 'Erro ao excluir o aluno.';
}
?>
<br><br>
<a href="index.php">Voltar</a>