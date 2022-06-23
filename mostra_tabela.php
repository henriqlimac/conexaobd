<?php

include_once "conecta.php";

echo "<hr>";

$sql = "SELECT * FROM alunos";

$resultado = mysqli_query($conexao, $sql);

if (mysqli_num_rows($resultado) > 0) {
    while($linha = mysqli_fetch_assoc($resultado)) {
        echo "<br>";
        echo "id: " . $linha["id"] . "<br>";
        echo "Nome: " . $linha["nome"] . "<br>";
        echo "Curso: " . $linha["curso"] . "<br>";
        echo "Idade: " . $linha["idade"] . "<br>";
        echo "Período: " . $linha["periodo"] . "<br>";
    }
}else{
    echo "0 resultados";
}

mysqli_close($conexao);

?>