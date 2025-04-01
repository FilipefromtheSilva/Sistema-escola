<html>
 <head>
    <title>Resultado</title>
    <link rel="stylesheet" href="estilo.css">
 </head>
    <body>
        <?php
        include_once('conexao.php');
            $nome = $_POST['nome'];
            $turma_id = $_POST['turma_id'];
            $curso_id = $_POST['curso_id'];
            $insere = mysqli_query($conexao, "Insert Into Aluno (nome,turma_id,curso_id) Values('$nome','$turma_id', '$curso_id')")
                                or die("Erro ao Inserir o Aluno");
                                echo "<div id='respo'>";
                                    echo "<div id='posi'>";
                                        echo "Parabéns! Aluno inserido com secesso!";
                                    echo "</div>";   
                                echo "</div>"
        ?>
        <ul>
        </ul>
    </body>
</html>