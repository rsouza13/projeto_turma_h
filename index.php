<?php
//Conexão com o banco de dados
$conn = new PDO("mysql:host=localhost;dbname=bd_turma_h", "root", "");

$sqlConsultaAlunos = "SELECT * FROM aluno";
$stmt = $conn->prepare($sqlConsultaAlunos);
$stmt->execute();
$stmt->setFetchMode(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto Turma H</title>
    <link rel="stylesheet" href="css/style.css" />
    <script type="text/javascript" src="js/script.js"></script>
</head>
<body>
    <h1>Projeto Turma H</h1>
    <h3>Lista de alunos</h3>
    <a href="formCadastroAluno.html">Novo Aluno</a>
    <table>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Altura</th>
            <th>Sexo</th>
            <th>Data de Nascimento</th>
            <th>Ações</th>
        </tr>
        <?php
        while($aluno = $stmt->fetch()){
            echo "<tr>";
            echo "     <td>{$aluno['id']}</td>";
            echo "     <td>{$aluno['nome']}</td>";
            echo "     <td>{$aluno['altura']}</td>";
            echo "     <td>{$aluno['sexo']}</td>";
            echo "     <td>{$aluno['data_nascimento']}</td>";
            echo "     <td>
                            <button onclick=digaOi('".$aluno['nome']."')>Diga Oi</button>
                            <a href='excluirAluno.php?idAluno=".$aluno['id']."'>Excluir</a>
                        </td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>