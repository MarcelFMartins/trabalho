<?php
$nome = $_POST['nome'] ?? '';
$sobrenome = $_POST['sobrenome'] ?? '';
$cpf = $_POST['cpf'] ?? '';
$endereco = $_POST['endereco'] ?? '';
$cidade = $_POST['cidade'] ?? '';
$estado = $_POST['estado'] ?? '';
$cep = $_POST['cep'] ?? '';
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: sans-serif;
            background-image: url(https://64.media.tumblr.com/tumblr_lymp54sAtN1qgyl6eo1_1280.gif);
            background-repeat: no-repeat;
            background-size: cover;
        }
        #forms .container {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .container .form {
            display: flex;
            flex-direction: column;
            background-color: rgb(83, 0, 0);
            padding: 50px;
            border-radius: 10px;
        }

        .form input {
            margin-bottom: 10px;
            width: 400px;
            height: 20px;
        }

        .form label {
            color: white;
        }

        .container .resultado {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 20px;
            color: white;
        }

        .form button {
            color: white;
            background-color: black;
            border: solid white 1px;
            padding: 10px;
        }
    </style>
</head>
<body>
    <section id="forms">
        <div class="container">
            <form action="" class="form" method="post">
                <label for="nome">Nome:</label>
                <input type="text" name="nome" id="nome" placeholder="Digite seu Nome">

                <label for="sobrenome">Sobrenome:</label>
                <input type="text" name="sobrenome" id="sobrenome" placeholder="Digite seu Sobrenome">

                <label for="cpf">CPF:</label>
                <input type="text" name="cpf" id="cpf" placeholder="xxx.xxx.xxx-xx">

                <label for="endereco">Endereço:</label>
                <input type="text" name="endereco" id="endereco" placeholder="Digite seu Endereço">

                <label for="cidade">Cidade:</label>
                <input type="text" name="cidade" id="cidade" placeholder="Digite seu Cidade">

                <label for="estado">Estado:</label>
                <input type="text" name="estado" id="estado" placeholder="Digite seu Estado">

                <label for="cep">CEP:</label>
                <input type="text" name="cep" id="cep" placeholder="xxxxx-xxx">

                <button type="submit"><b>ENVIAR</b></button>

                <div class="resultado">
                    <?php
                        echo "Nome: " . $nome . "<br>";
                        echo "Sobrenome: " . $sobrenome . "<br>";
                        echo "CPF: " . $cpf . "<br>";
                        echo "Endereço: " . $endereco . "<br>";
                        echo "Cidade: " . $cidade . "<br>";
                        echo "Estado: " . $estado . "<br>";
                        echo "CEP: " . $cep . "<br>";
                    ?>
                </div>
            </form>
        </div>
    </section>
</body>
</html>