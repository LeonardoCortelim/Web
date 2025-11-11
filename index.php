<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Minha pagina html
    <?php
        echo "<BR>"."Olá Mundão perdido!<BR>";
        $nome="Leonardo Cortelim<BR>";
        echo $nome."<BR>"; 

        
    ?>

    <h2>Exemplo tipo de dados</h2>

<?php
    $a=5;
    $b=7;
    echo "<p>".$a+$b."</p>";

    ?>

    <h2>Operador ternario</h2>

<?php
    $nota=3;
    $situacao = $nota >=6 ? "aprovado" : "reprovado";
    echo $situacao;
?>

<h2>While</h2>

<?php
    $i =0;
    while($i<50){
        $i++;
        echo "i=".$i. "-";
    }
?>

<h2>Array</h2>

<?php
    $vetor = array(20,19,22,19,23);
    for($posicao =0; $posicao <5; $posicao ++){
    echo $vetor[$posicao] ."<br/>";
}
?>



</body>
</html>