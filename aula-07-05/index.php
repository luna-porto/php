<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
 <h2> array: Definição implícita </h2>
 <pre>
    <?php
    $aluno = array("Luna ", "Ryan ", "Clara ", "Eduardo ", "Fabio ", "Hubert ", "Livia ", "Pedro ");
    for ($a=0; $a<7; $a++) {
        echo "$a = $aluno[$a]<br>";
    }
    ?>
 </pre>
 <h2> array: Definição Explícita </h2>
 <pre>
    <?php
    $var = array(1, 2, 3, 4);
    for($a=0; $a<count($var); $a++) {
        echo "$var[$a] ";
    }
    ?>
 </pre>
 <h2> exemplo com foreach </h2>
 <pre>
    <?php
    $var = ["Hubert" => 20, "Luna" => 5, "Ryan" => 6.1, "Yasmin" => 4.1, "Leo" => 11];
    foreach($var as $chave => $valor ){
        if($valor>=6){
          echo "alunos aprovados <br>";
        echo "o Aluno: $chave <br>";
        echo "obteve a nota: $valor <br>";
        } 
        else if($valor<6 && $valor > 4){
            echo "alunos recuperaca";
            echo "o aluno: $chave <br>";
            echo "obteve a nota: $valor <br>";
        } 
        else if ($valor >10 || $valor<0){
            echo "A nota é invalida <br>;";
            echo "nota invalida: $chave <br>";
            echo "obteve a nota: $valor <br>";
        }
        else if($valor<4){
            echo "alunos reprovados <br>";
            echo "o aluno: $chave <br>";
            echo "obteve a nota: $valor <br>";
        }
        
    }
    ?>
 </pre>
</body>
</html>