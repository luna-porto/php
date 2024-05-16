<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index.php</title>
    <link rel="stylesheet" href="../styles.css">
</head>
<body>
    <h1> Array - laços </h1>
    <h2> Array: Defiição Explícita (sem chave) </h2>
    <pre>
<?php
            $var = array(1, 2, 3, 4);
            
            echo $var [0];
            echo $var [1];
            echo $var [2];
            echo $var [3];
         ?>
         <h2> Impressão com for </h2>
<pre> 
<?php
         for($a=0; $a<4; $a++){
            echo "$var[$a]";
         }
         ?>
</pre>
        <h2> Impressão com foreach </h2>
<pre> 
<?php
         foreach($var as $dados){
            echo $dados;
         }
         ?>
</pre>
<pre>
<?php
        $var = array ( "Maria" => 25,
                       "João"  => 44,
                       "José"  => 12,
                       "Neusa" => 73
        );
        foreach ($var as $dados){
            echo "$dados <br>";
        }
         ?>
</pre>
         <h2> Foreach com chave e valor </h2>
       
<pre>
<?php
            foreach ($var as $chave => $valor){
                echo "$chave: tem $valor anos <br>";
            }
          ?>  
</pre>
            <h2> print_r -> mostra o que tem armazenado no array </h2>
<pre>
<?php
            print_r($var);
            ?>
</pre>
<?php 
          $alunos = array("Maria"=>
          
                     array( "Endereço" => "Rua Chile 1046",
                              "Bairro" => "Rebouças"),

            "Ryan"=> array( "Endereço" => "Rua Parada 2013",
                              "Bairro" => "Potosi"),
            "Luna" => array( "Endereço"=> "Rua Vinte 4567",
                              "Bairro" => "Lagoa"),
        );

          ?>
</pre>
<pre>
<?php
             print_r($alunos ["Maria"]);
            
            ?>
</pre>

</body>
</html>