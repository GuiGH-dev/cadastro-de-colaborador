<?php

$nome = $_POST['nome'];
$idade = $_POST['idade'];
$profissao = $_POST['profissao'];
$salario = $_POST['salario'];
$experiencia = $_POST['experiencia'];

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Processado</title>

    <link rel="stylesheet" href="estilização.css">
</head>

<body>

    <div class="container">

        <h1>Cadastro realizado com sucesso!</h1>

        <?php

        echo "Nome completo: ".$nome."<br>";
        echo "Idade: ".$idade."<br>";
        echo "Profissão: ".$profissao."<br>";
        echo "Salário pretendido: R$ ".$salario."<br>";
        echo "Experiência anterior: ".$experiencia."<br><br>";

        echo "Olá, ".$nome."! Recebemos seu cadastro para a profissão de ".$profissao.". ";
        echo "Sua experiência informada foi: ".$experiencia.". ";
        echo "Agradecemos seu interesse em fazer parte das Lojas Brincos e Companhia.";

        ?>

        <br><br>

        <a href="cadastro.html" class="botao">Voltar ao formulário</a>

    </div>

</body>
</html>