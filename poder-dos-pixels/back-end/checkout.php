<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Poder dos Pixels</title>
    <link rel="stylesheet" href="/reset.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/styles.css">
    <link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon">
</head>

<body>
<?php
        session_start(); // Iniciar a sessão (se ainda não estiver iniciada)

        if (isset($_SESSION['nome_usuario'])) {
            // Usuário está logado
            $header = '<header class="cabecalho">
            <div class="container">
                <input type="checkbox" id="menu" class="container__botao">
                <label for="menu">
                    <span class="cabecalho__menu-hambuerguer container__imagem"></span>
                </label>
                <ul class="lista-menu">
                    <li class="lista-menu__titulo">Menu</li>
                    <li class="lista-menu__item"><a href="/index.php" class="lista-menu__link">Home</a></li>
                    <li class="lista-menu__item"><a href="/php/sobre.php" class="lista-menu__link">Sobre</a></li>
                    <li class="lista-menu__item"><a href="/back-end/catalogo.php" class="lista-menu__link">Catálogo de Jogos</a>
                    </li>
                    <li class="lista-menu__item"><a href="/php/cadastro.php" class="lista-menu__link">Cadastro</a></li>
                    <li class="lista-menu__item"><a href="/php/login.php" class="lista-menu__link">Login</a></li>
                </ul>
                <a class="link__logo" href="/index.php">
                    <img class="container__imagem" src="/img/Logo.svg" alt="Logo Poder dos Pixels">
                    <h1 class="container__titulo"><b class="container__titulo--negrito">Poder</b> dos pixels</h1>
                </a>
            </div>

            <ul class="opcoes">
                <input type="checkbox" id="opcoes-menu" class="opcoes__botao">
                <label for="opcoes-menu">
                    <li class="opcoes__item opcoes__titulo">Categorias</li>
                </label>

                <ul class="lista-menu">
                    <li class="lista-menu__item"><a href="/index.php" class="lista-menu__link">Home</a></li>
                    <li class="lista-menu__item"><a href="/php/sobre.php" class="lista-menu__link">Sobre</a></li>
                    <li class="lista-menu__item"><a href="/back-end/catalogo.php" class="lista-menu__link">Catálogo de Jogos</a></li>
                    <li class="lista-menu__item"><a href="/php/cadastro.php" class="lista-menu__link">Cadastro</a></li>

                </ul>

                <li class="opcoes__item"><a href="/index.php" class="opcoes__link">Home</a></li>
                <li class="opcoes__item"><a href="/php/sobre.php" class="opcoes__link">Sobre</a></li>
                <li class="opcoes__item"><a href="/back-end/catalogo.php" class="opcoes__link">Catálogo de Jogos</a></li>
            </ul>

            <div class="container">
                <a class="container__link" href="/back-end/checkout.php">
                    <img class="container__imagem" src="/img/Compras.svg" alt="Carrinhos de Compras">
                    <p class="container__texto">Sacola</p>
                    <p class="container__texto"></p>
                </a>
                <a class="container__link" href="/logout.php">
                    <img class="container__imagem" src="/img/Usuário.svg" alt="Login">
                    <p class="container__texto">Sair</p>
                </a>
            </div>
        </header>';
        // header
        echo $header;

        } else {
            // Usuário não está logado
            $header = '<header class="cabecalho">
                <div class="container">
                    <input type="checkbox" id="menu" class="container__botao">
                    <label for="menu">
                        <span class="cabecalho__menu-hambuerguer container__imagem"></span>
                    </label>
                    <ul class="lista-menu">
                        <li class="lista-menu__titulo">Menu</li>
                        <li class="lista-menu__item"><a href="/index.php" class="lista-menu__link">Home</a></li>
                        <li class="lista-menu__item"><a href="/php/sobre.php" class="lista-menu__link">Sobre</a></li>
                        <li class="lista-menu__item"><a href="/back-end/catalogo.php" class="lista-menu__link">Catálogo de Jogos</a>
                        </li>
                        <li class="lista-menu__item"><a href="/php/cadastro.php" class="lista-menu__link">Cadastro</a></li>
                        <li class="lista-menu__item"><a href="/php/login.php" class="lista-menu__link">Login</a></li>
                    </ul>
                    <a class="link__logo" href="/index.php">
                        <img class="container__imagem" src="/img/Logo.svg" alt="Logo Poder dos Pixels">
                        <h1 class="container__titulo"><b class="container__titulo--negrito">Poder</b> dos pixels</h1>
                    </a>
                </div>

                <ul class="opcoes">
                    <input type="checkbox" id="opcoes-menu" class="opcoes__botao">
                    <label for="opcoes-menu">
                        <li class="opcoes__item opcoes__titulo">Categorias</li>
                    </label>

                    <ul class="lista-menu">
                        <li class="lista-menu__item"><a href="/index.php" class="lista-menu__link">Home</a></li>
                        <li class="lista-menu__item"><a href="/php/sobre.php" class="lista-menu__link">Sobre</a></li>
                        <li class="lista-menu__item"><a href="/back-end/catalogo.php" class="lista-menu__link">Catálogo de Jogos</a></li>
                        <li class="lista-menu__item"><a href="/php/cadastro.php" class="lista-menu__link">Cadastro</a></li>

                    </ul>

                    <li class="opcoes__item"><a href="/index.php" class="opcoes__link">Home</a></li>
                    <li class="opcoes__item"><a href="/php/sobre.php" class="opcoes__link">Sobre</a></li>
                    <li class="opcoes__item"><a href="/back-end/catalogo.php" class="opcoes__link">Catálogo de Jogos</a></li>
                </ul>

                <div class="container">
                    <a class="container__link" href="/back-end/checkout.php">
                        <img class="container__imagem" src="/img/Compras.svg" alt="Carrinhos de Compras">
                        <p class="container__texto">Sacola</p>
                    </a>
                    <a class="container__link" href="/php/login.php">
                        <img class="container__imagem" src="/img/Usuário.svg" alt="Login">
                        <p class="container__texto">Entrar</p>
                    </a>
                </div>
            </header>';
            // header
            echo $header;
        }
    ?>


    <?php

    // Lê o conteúdo do arquivo JSON do carrinho
    $carrinho_json = file_get_contents('carrinho.json');

    // Decodifica o JSON em um array associativo
    $carrinho = json_decode($carrinho_json, true);

    // Verifica se a decodificação foi bem-sucedida
    if ($carrinho !== null) {
        // Verifica se o formulário foi submetido
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST['delete_produto'])) {
                $produto_titulo = $_POST['delete_produto'];

                // Remove o produto do carrinho
                if (isset($carrinho[$produto_titulo])) {
                    unset($carrinho[$produto_titulo]);
                }

                // Salva o carrinho atualizado de volta no arquivo JSON
                file_put_contents('carrinho.json', json_encode($carrinho));

                // Recarrega a página ou redireciona para o carrinho
                header('Location: checkout.php');
            }
        }

        // Itera sobre os produtos no carrinho e exibe o título, preço e quantidade
        foreach ($carrinho as $produto_titulo => $produto) {
            echo '<div class="carrinho-item">';
                echo '<h2 class="jogo-head">' . $produto['titulo'] . '</h2>';
                echo '<div class="carrinho-info">';
                    echo '<p class="jogo-price">Preço: R$' . number_format($produto['preco'], 2, ',', '.') . '</p>';
                    echo '<p class="jogo-qtd">Quantidade: ' . $produto['quantidade'] . '</p>';
                    echo '<form action="" method="post">';
                        echo '<input type="hidden" name="delete_produto" value="' . $produto_titulo . '">';
                        echo '<input type="submit" value="Remover" class="delete-button">';
                    echo '</form>';
                echo '</div>';
            echo '</div>';


        }
    } else {
        echo 'Seu carrinho está vazio.';
    }
    ?>

        <?php
    $total = 0; // Inicializa o valor total como zero

    // Verifica se o carrinho foi decodificado com sucesso
    if ($carrinho !== null) {
        // Itera sobre os produtos no carrinho
        foreach ($carrinho as $produto_titulo => $produto) {
            $subtotal = $produto['preco'] * $produto['quantidade'];
            $total += $subtotal;
        }
    }

    // Exibe o valor total do carrinho
    echo '<div class="carrinho-total">';
        echo '<p class="valor-carrinho">Valor Total do Carrinho: R$' . number_format($total, 2, ',', '.') . '</p>';
    echo '</div>';
?>

    <!-- botao checkout -->
    <div class="finalizar-container">
        <a class="botao-finalizar" href="/php/compra.php">Finalizar Compra</a>
    </div>

</body>

</html>