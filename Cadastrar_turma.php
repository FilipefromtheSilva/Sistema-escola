<html>
 <head>
    <title>Resultado</title>
    <link rel="stylesheet" href="estilo.css">
 </head>
    <body>
        <?php
        include_once('conexao.php');
            $nome = $_POST['nome'];
        
            $insere = mysqli_query($conexao, "Insert Into turma (nome_turma) Values('$nome')")
                                or die("Erro ao Inserir A turma");
                                echo "<div id='respo'>";
                                    echo "<div id='posi'>";
                                        echo "Parabéns! Turma inserido com secesso!";
                                    echo "</div>";   
                                echo "</div>"
        ?>
        <ul>
        </ul>
    </body>
