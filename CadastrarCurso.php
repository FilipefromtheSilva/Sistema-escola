<html>
 <head>
    <title>Resultado</title>
    <link rel="stylesheet" href="estilo.css">
 </head>
    <body>
        <?php
        include_once('conexao.php');
            $nome = $_POST['nome'];
        
            $insere = mysqli_query($conexao, "Insert Into curso (nome) Values('$nome')")
                                or die("Erro ao Inserir O Curso");
                                echo "<div id='respo'>";
                                    echo "<div id='posi'>";
                                        echo "Parabéns! Curso inserido com secesso!";
                                    echo "</div>";   
                                echo "</div>"
        ?>
        </ul>
 