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
    <link rel="stylesheet" href="//cdn.datatables.net/2.3.1/css/dataTables.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="//cdn.datatables.net/2.3.1/js/dataTables.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
</head>
<body>
    <h1>Projeto Turma H</h1>
    <h3>Lista de alunos</h3>
    <a href="formCadastroAluno.html">Novo Aluno</a>
    <table id="tabelaAlunos" class="cell-border hover stripe">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Foto</th>
                <th>Altura</th>
                <th>Sexo</th>
                <th>Data de Nascimento</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
        <?php
        while($aluno = $stmt->fetch()){
            echo "<tr>";
            echo "     <td>{$aluno['id']}</td>";
            echo "     <td>{$aluno['nome']}</td>";
            echo "     <td><img width='50' src='fotosAlunos/{$aluno['foto']}'></img></td>";
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
        </tbody>
    </table>
    <script>
        $(document).ready( function () {
            $('#tabelaAlunos').DataTable({
                pageLength: 5,
                language: {
                    url: '//cdn.datatables.net/plug-ins/2.3.1/i18n/pt-BR.json',
                },
            });
        } );
    </script>
</body>
</html>