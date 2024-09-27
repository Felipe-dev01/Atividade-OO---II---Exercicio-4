<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Vinho</title>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <div class="form-container">
        <h1>Cadastro de Vinho</h1>
        <form id="cadastroVinho" method="post">
            <label for="nome">Nome do Vinho:</label>
            <input type="text" id="nome" name="nome" required>

            <label for="tipo">Tipo do Vinho:</label>
            <input type="text" id="tipo" name="tipo" required>

            <label for="preco">Preço (R$):</label>
            <input type="number" id="preco" name="preco" required step="0.01">

            <label for="safra">Safra:</label>
            <input type="number" id="safra" name="safra" required>

            <button type="submit" name="btnEnviar">Cadastrar</button>
        </form>
        <div class="resultado">
            <?php
            require_once "Vinho.php";
            if (isset($_POST["btnEnviar"])) {
                $vinho1 = new Vinho($_POST["nome"], $_POST["tipo"], $_POST["preco"], $_POST["safra"]);
                echo ($vinho1->mostrarVinho());

                if($vinho1->verificaPreco($vinho1->getPreco()) == true){
                    echo "\n Produto em oferta";
                } else {
                    echo "\n Produto em preço normal";
                }
            }
            ?>
        </div>
    </div>
</body>

</html>