<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Minha página HTML
    <?php
        echo "<br>Olá Mundão perdido!<br>";
        $nome = "Leonardo Cortelim";
        echo $nome . "<br>"; 
    ?>

    <h2>Exemplo tipo de dados</h2>

    <?php
        $a = 5;
        $b = 7;
        echo "<p>" . ($a + $b) . "</p>";
    ?>

    <h2>Operador ternário</h2>

    <?php
        $nota = 3;
        $situacao = $nota >= 6 ? "aprovado" : "reprovado";
        echo $situacao;
    ?>

    <h2>While</h2>

    <?php
        $i = 0;
        while ($i < 50) {
            $i++;
            echo "i=" . $i . " - ";
        }
    ?>

    <h2>Array</h2>

    <?php
        $vetor = array(20, 19, 22, 19, 23);
        for ($posicao = 0; $posicao < 5; $posicao++) {
            echo $vetor[$posicao] . "<br>";
        }
    ?>

    <h2>Array associativo</h2>

    <?php
        $vetor = array(
            'nome' => 'Guilherme',
            'sobrenome' => 'Silva',
            'cpf' => '123.456.789-00'
        );

        echo 'Nome: ' . $vetor['nome'] . '<br>';
        echo 'Sobrenome: ' . $vetor['sobrenome'] . '<br>';
        echo 'CPF: ' . $vetor['cpf'];
    ?>

    <H2>Variaveis de ambiente em PHP</H2>

    <?php
        echo "$GET".$_GET[nome];
        echo "SERVER:" . var_dump ($_SERVER);

    ?>


</body>
</html>
