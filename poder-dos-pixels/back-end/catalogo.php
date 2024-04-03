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
    
        // Lê o conteúdo do arquivo JSON
        $json_file = file_get_contents('produtos.json');

        // Decodifica o JSON em um array associativo
        $produtos = json_decode($json_file, true);

        // Verifica se a decodificação foi bem-sucedida
        if ($produtos !== null) {
            // Itera sobre os produtos e exibe cada um na tela
            foreach ($produtos as $produto) {
                echo '<div class="jogo">';

                echo '<img class="jogo__imagem" src="' . $produto['imagem'] . '" alt="Imagem do Produto">';
                
                echo '<div class="jogo-container">';
                    echo '<h2 class="jogo__titulo">' . $produto['titulo'] . '</h2>';
                    echo '<p class="jogo__texto">' . $produto['descricao'] . '</p>';
                echo '</div>';
                
                echo '<div class="carrinho-container">';
                    echo '<p class="jogo__preco">R$:' . number_format($produto['preco'], 2, ',', '.') . '</p>';
                    echo '<form action="adicionar_carrinho.php" method="post">';
                        echo '<input type="hidden" name="produto_titulo" value="' . $produto['titulo'] . '">';
                        echo '<input type="hidden" name="produto_preco" value="' . $produto['preco'] . '">';
                        echo '<input type="submit" class="jogo__link" value="Adicionar ao carrinho">';
                    echo '</form>';
                echo '</div>';
                
                echo '</div>';
                
                echo '<hr>';
                
            }
        } else {
            echo 'Não foi possível carregar os produtos.';
        }

?>

    <!-- topicos mais visitados -->
    <section class="topicos">
        <h2 class="topicos__titulo"> TÓPICOS MAIS VISITADOS</h2>
        <ul class="topicos__lista">
            <li class="topicos__item">
                <a href="#" class="topicos__link">RPG</a>
            </li>
            <li class="topicos__item">
                <a href="#" class="topicos__link">Ação</a>
            </li>
            <li class="topicos__item">
                <a href="#" class="topicos__link">Aventura</a>
            </li>
            <li class="topicos__item">
                <a href="#" class="topicos__link">Arcade</a>
            </li>
            <li class="topicos__item">
                <a href="#" class="topicos__link">Lutas</a>
            </li>
            <li class="topicos__item">
                <a href="#" class="topicos__link">Hack & Slash</a>
            </li>
            <li class="topicos__item">
                <a href="#" class="topicos__link">FPS</a>
            </li>
        </ul>
    </section>

    <hr />

    <!-- contato poder dos pixels -->
    <section class="contato">
        <div class="contato__descricao">
            <h2 class="contato__titulo"> Fique por dentro das novidades!</h2>
            <p class="contato__texto"> Atualizações de jogos, novos titulos, promoções e muito mais.</p>
        </div>
        <input type="email" placeholder="Cadastre seu e-mail" class="contato__email">
    </section>

    <!-- Footer -->
    <footer class="footer">
        <h2 class="footer__titulo">Poder dos pixels</h2>
        <div class="footer__content">
            <h3 class="footer__content-titulo">Poder dos Pixels</h3>
            <div class="contato__footer">
                <i class="fas fa-envelope"></i>
                <h4>Contato</h4>
            </div>
            <p class="footer__email">poderdospixel@contato.com.br</p>
            <ul class="socials">
                <li><a class="footer__icon" href="#"><i class="fab fa-discord"></i></a></li>
                <li><a class="footer__icon" href="#"><i class="fab fa-facebook-f"></i></a></li>
                <li><a class="footer__icon" href="#"><i class="fab fa-instagram"></i></a></li>
            </ul>
        </div>
        <!--Parte de baixo do footer(Créditos)-->
        <div class="footer__bottom">
            <p class="footer__text">copyright &copy;2023 PoderdosPixels.</p>
        </div>
    </footer>
</body>

</html>