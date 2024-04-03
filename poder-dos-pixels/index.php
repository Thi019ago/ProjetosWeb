<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Poder dos Pixels</title>
    <link rel="stylesheet" href="reset.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="/styles.css">
    <link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon">
    <script defer src="/js/slide.js"></script>
    <script defer src="/js/getjogos.js"></script>
    <script defer src="/js/carrosel.js"></script>
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
                    <img class="container__imagem" src="img/Compras.svg" alt="Carrinhos de Compras">
                    <p class="container__texto">Sacola</p>
                    <p class="container__texto"></p>
                </a>
                <a class="container__link" href="/logout.php">
                    <img class="container__imagem" src="img/Usuário.svg" alt="Login">
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
                        <img class="container__imagem" src="img/Compras.svg" alt="Carrinhos de Compras">
                        <p class="container__texto">Sacola</p>
                    </a>
                    <a class="container__link" href="/php/login.php">
                        <img class="container__imagem" src="img/Usuário.svg" alt="Login">
                        <p class="container__texto">Entrar</p>
                    </a>
                </div>
            </header>';
            // header
            echo $header;
        }
    ?>
            

    <!-- Banner -->
    <section class="banner">
        <h2 class="banner__titulo">Já sabe por onde começar?</h2>
        <p class="banner__texto">Encontre na nossa biblioteca o melhor para o seu entretenimento!</p>
        <input type="search" class="banner__pesquisa" placeholder="Qual será sua próxima aventura?">
    </section>

    <!--Slide 1 -->
    <section class="slider">
        <!-- titulo -->
        <h2 class="carrosel_titulo"> Novos Lançamentos</h2>

        <div class="slider-content">
            <input type="radio" name="b-radio" id="radio1">
            <input type="radio" name="b-radio" id="radio2">
            <input type="radio" name="b-radio" id="radio3">

            <div class="slide-box first">
                <img class="img-desktop" src="/img/principal/Starfield.jpg" alt="Jogo Starfield">
            </div>

            <div class="slide-box">
                <img class="img-desktop" src="/img/principal/BG3.jpg" alt="Jogo Baldurs Gate III">
            </div>

            <div class="slide-box">
                <img class="img-desktop" src="/img/principal/MW III.jpg" alt="Jogo MW III">
            </div>
            

            <!--Botões de navegação-->
            <div class="nav-auto">
                <div class="auto-b1"></div>
                <div class="auto-b2"></div>
                <div class="auto-b3"></div>
            </div>

            <div class="nav-manual">
                <label for="radio1" class="manual-b"></label>
                <label for="radio2" class="manual-b"></label>
                <label for="radio3" class="manual-b"></label>
            </div>

        </div>

        <!-- Card 1 -->
        <div class="card">
            <!-- 1° linha -->
            <div class="card__descricao">
                <!-- 1° coluna -->
                <div class="descricao">
                    <h3 class="descricao__titulo">Talvez você també se interesse por...</h3>
                    <h2 class="descricao__titulo-jogo">Elden Ring</h2>
                    <p class="descricao__texto">Um mundo vasto onde campos abertos e uma variedade de situações e
                        masmorras imensas, com complexos designs tridimensionais se conectam com fluidez. Conforme
                        explora, sinta a alegria de descobrir poderosas e desconhecidas ameaças que aguardam por você,
                        levando a um grande senso de conquista.</p>
                </div>
                <!-- coluna -->
                <img src="/img/principal/EldenRing.jpg" alt="Capa jogo" class="descricao__imagem">
            </div>
            <!-- 2° linha -->
            <div class="card__botoes">
                <!-- 2 coluna -->
                <a href="/back-end/catalogo.php" class="botoes__ancora">Ir para Catálogo</a>
            </div>
        </div>
    </section>

    <section class="carrosel">
        <h2 class="carrosel_titulo"> Mais vendidos </h2>
        <!-- Slider main container -->
        <div class="swiper">
            <!-- Additional required wrapper -->
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>

            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide"><img src="/img/principal/Terraria.jpg" alt=" Jogo Terraria"></div>
                <div class="swiper-slide"><img src="/img/principal/Ultrakill.jpg" alt="Jogo Ultrakill"></div>
                <div class="swiper-slide"><img src="/img/principal/Cyberpunk2077.jpg" alt="Jogo Cyberpunk2077"></div>
                <div class="swiper-slide"><img src="/img/principal/GTA V.jpg" alt="Jogo GTA V"></div>
                <div class="swiper-slide"><img src="/img/principal/RDR II.jpg" alt="Jogo RDR II"></div>

                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="card">
            <!-- 1° linha -->
            <div class="card__descricao">
                <!-- 1° coluna -->
                <div class="descricao">
                    <h3 class="descricao__titulo">Jogo em destaque!</h3>
                    <h2 class="descricao__titulo-jogo">Rainbow Six Siege</h2>
                    <p class="descricao__texto">Tom Clancy's Rainbow Six® Siege é um jogo de tiro tático em equipes,
                        realista e de elite, no qual planejamento e execução superiores triunfam. Possui jogabilidade de
                        5v5, ataque vs. defesa e combates intensos de curta distância em ambientes destrutíveis.</p>
                </div>
                <!-- coluna -->
                <img src="/img/principal/R6S.jpg" alt="Capa jogo" class="descricao__imagem">
            </div>
            <!-- 2° linha -->
            <div class="card__botoes">
                <!-- 2 coluna -->
                <a href="/back-end/catalogo.php" class="botoes__ancora">Ir para Catálogo</a>
            </div>
        </div>
    </section>



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

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
</body>

</html>