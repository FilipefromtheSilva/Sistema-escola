<html>
 <head>
    <title>Resultado</title>
    <link rel="stylesheet" href="estilo.css">
 </head>
    <body>
        <?php
        include_once('conexao.php');
            $nota = $_POST['nota'];
            $nome = $_POST['nome'];
            $insere = mysqli_query($conexao, "UPDATE aluno set nota = '$nota' WHERE nome LIKE '%$nome%';")
                                or die("Erro ao Inserir a Nota");
                                echo "<div id='respo'>";
                                    echo "<div id='posi'>";
                                        echo "Parabéns! Nota inserida com secesso!";
                                    echo "</div>";   
                                echo "</div>"
        ?>
        <ul>
        </ul>
    </body>
