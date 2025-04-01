<html>
<head>
    <title>Consulta boletim</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
<?php
   include_once('conexao.php');

   $nome = $_POST['nome'];

   $consultar = mysqli_query($conexao, "SELECT Aluno.nome as nome, Aluno.nota as nota, turma.nome_turma as turma, Curso.nome as curso 
                                        FROM Aluno INNER JOIN turma ON
                                             Aluno.turma_id = turma.turma_id
                                             INNER JOIN curso ON 
                                             Aluno.curso_id = curso.curso_id
                                        WHERE Aluno.nome = '$nome'");

    while($resultado = mysqli_fetch_array($consultar)){

                                                   echo "<h1>Nome do Aluno</h1>";
                                                   echo "<h2>" . $resultado['nome'] . "</h2>";
                                                   echo "<hr>";

                                                   echo "<h1>Turma </h1>";
                                                   echo "<h2>" . $resultado['turma'] . "</h2>";
                                                   echo "<hr>";

                                                   echo "<h1>Curso</h1>";
                                                   echo "<h2>" . $resultado['curso'] . "</h2>";
                                                   echo "<hr>";
                                                   
                                                   echo "<h1>Nota</h1>";
                                                   echo "<h2>" . $resultado['nota'] . "</h2>";
                                                   echo "<hr>";


                                                   }
                                                   

?>
 <ul>
 </ul>
</body>
</html>