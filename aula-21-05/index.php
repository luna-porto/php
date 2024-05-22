<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>



<?php

    echo "<br>";
    echo "---------// Array Multidimensional: Definição Explícita<br>";
    
    $var = [
        'alunos'=>[
            [
                'nome'=> 'Hubert',
                'endereco'=>'rua cruzeiro',
                'idade'=> 15,
                'cidade'=>'guirapa'
            ],
            [
                'nome'=> 'Juliana',
                'endereco'=>'rua Sol',
                'idade'=> 17,
                'cidade'=>'pindai'
            ],

            [
                'nome'=> 'Leo',
                'endereco'=>'rua sul',
                'idade'=> 15,
                'cidade'=>'Guanambi'
            ]
        ]
    ]

                
                ?>
                

<table style= width:100%>

<tr>
        <th>nome</th>
        <th>endereço</th>
        <th>idade</th>
        <th>cidade</th>
    </tr>

<?php for($a=0; $a<count($var ['alunos']); $a++) { ?>

    <tr>
        
     <td><?php print_r( $var['alunos'][$a]['nome']); ?></td>
     <td><?php print_r( $var['alunos'][$a]['endereco']); ?></td>
    <td><?php print_r( $var['alunos'][$a]['idade']); ?></td>
    <td><?php print_r( $var['alunos'][$a]['cidade']); ?></td>
    </tr>
    
    <?php } ?>
 
  </table>

  <h1>Arrays</h1>
  <h2>1 - array como lista ordenada</h2>

<?php

$listaordenada= array (
    'fabio','Antonio', 'joao'
);
?>
<pre>
<?php echo print_r($listaordenada) ?>;
</pre>

<?php 
echo  '<h2> 1.1 - adicionar dados a array </h2>';
$listaordenada[] = 'pedro';
$listaordenada[] = 'Hubert';

?>

<pre>
<?php echo print_r($listaordenada) ?>;
</pre>

<?php 

echo  '<h2> 2 - array associativa </h2>';
$var = [
    'nome'=> 'Hubert',
    'endereco'=>'rua cruzeiro',
    'idade'=> 15,
];
?>

<pre>
<?php echo print_r($var) ?>;
</pre>

<?php 
echo  '<h2> 2.1 - adicionar dados ao array associativa </h2>';

$var['cidade'] = 'guirapa';
$var['estado'] = 'parana';
?>
<pre>
<?php echo print_r($var) ?>;
</pre>

<?php
echo  '<h2> 2.2 - substitui os dados ao array associativa </h2>';

$var['cidade'] = 'pindai';
?>
<pre>
<?php echo print_r($var) ?>;
</pre>


</body>
</html>