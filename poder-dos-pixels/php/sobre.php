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

    <section class="apresentacao">
        <div class="apresentacao__container">
            <h1 class="apresentacao__titulo"> Poder dos Pixels info </h1>
            <p class="apresentacao__texto">
                <b class="apresentacao-head">Sobre nós</b>
                Somos uma loja virtual fundada em 2023 com o intuito de compra jogos e keys, com diversas afiliadas de
                plataforma de jogos como Steam e Epic Games. Você poderá adicionar os jogos direto a nossa biblioteca ou
                transferir com uma key para sua plataforma de preferência.
            </p>
            <p class="apresentacao__texto">
                <b class="apresentacao-head">Métodos de biblioteca</b>
                Ao finalizar a compra de um jogo será enviada uma chave ao seu endereço email e para trocar o jogo de
                plataforma é simples! Dentro da biblioteca você entrará no jogo adquirido e dentro da página do jogo no
                final dela, terá a opção trocar de plataforma. Assim enviando uma requisição para a troca de plataformas
                demorando até 2 dias úteis.
            </p>
            <p class="apresentacao__texto">
                <b class="apresentacao-head">Detalhes sobre a troca</b>
                Nossa plataforma aceita a troca de plataformas e como dito nos métodos é feita em até 2 dias úteis,
                porém será acrescido um valor de 15% do valor de produto. Então pense bem na hora de fazer a compra do
                seu jogo preferido, jogos comprados em promoções, os cálculos são feitos com o valor total do produto e
                não com o valor promocional.
            </p>
            <p class="apresentacao__texto">
                <b class="apresentacao-head">Nosso portfólio</b>
                Olá sejam bem vindos, vamos falar um pouco sobre nós e sobre o projeto. Nos estamos cursando ciência da
                computação e estamos no segundo semestre, estamos desenvolvendo este projeto, que, foi baseado na famosa
                loja de jogos online chamada "Steam", que foi uma ideia unânime e surgiu a partir de uma conversa que
                tivemos pouco antes de planejar todo o projeto propriamente dito. Estamos entusiasmados com o projeto, e
                esperamos que todos que acessarem o site estejam satisfeitos com o resultado.
            </p>
        </div>
        <img class="apresentacao__imagem" src="/img/sobre/logo-sem-fundo.png" alt=" logo Poder dos Pixels">
    </section>

    <!-- cards -->
    <section class="card-section">
        <div class="geral-card">
            <div style="--ico:#FF8C00" class="card-cont">
                <div class="card-sobre">
                    <div class="card-image">
                        <img src="/img/sobre/yatora.jpg" alt="">
                    </div>
                    <div class="card-nome">
                        <h2>Gabriel Matt</h2>
                    </div>
                    <div class="card-botao">
                        <a href="https://github.com/apenasDuart" style="--clr:#FF8C00"><span>GitHub</span><i></i></a>
                    </div>
                </div>
            </div>

            <div style="--ico:#FFD700" class="card-cont">
                <div class="card-sobre">
                    <div class="card-image">
                        <img src="/img/sobre/sanji.jpg" alt="foto do thiago">
                    </div>
                    <div class="card-nome">
                        <h2>Thiago Soares</h2>
                    </div>
                    <div class="card-botao">
                        <a href="https://github.com/Thi019ago" style="--clr:#FFD700"><span>GitHub</span><i></i></a>
                    </div>
                </div>
            </div>

            <div style="--ico:#008000" class="card-cont">
                <div class="card-sobre">
                    <div class="card-image">
                        <img src="/img/sobre/aizen.jpg" alt="foto do jorge">
                    </div>
                    <div class="card-nome">
                        <h2>Jorge Renato</h2>
                    </div>
                    <div class="card-botao">
                        <a href="https://github.com/jorgemdt" style="--clr:#008000"><span>GitHub</span><i></i></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="geral-card2">
            <div style="--ico:#1e9bff" class="card-cont">
                <div class="card-sobre">
                    <div class="card-image">
                        <img src="/img/sobre/liuk.jpg" alt="foto do cuba">
                    </div>
                    <div class="card-nome">
                        <h2>Raphael Cuba</h2>
                    </div>
                    <div class="card-botao">
                        <a href="https://github.com/devrj2023" style="--clr:#1e9bff"><span>GitHub</span><i></i></a>
                    </div>
                </div>
            </div>

            <div style="--ico:#800080" class="card-cont">
                <div class="card-sobre">
                    <div class="card-image">
                        <img src="/img/sobre/gojo.jpg" alt="foto do joao">
                    </div>
                    <div class="card-nome">
                        <h2>João W.</h2>
                    </div>
                    <div class="card-botao">
                        <a href="https://github.com/Johnw07" style="--clr:#800080"><span>GitHub</span><i></i></a>
                    </div>
                </div>
            </div>

            <div style="--ico:#FF0000" class="card-cont">
                <div class="card-sobre">
                    <div class="card-image">
                        <img src="/img/sobre/giorno.jpg" alt="foto do rafael">
                    </div>
                    <div class="card-nome">
                        <h2>Rafael Maul</h2>
                    </div>
                    <div class="card-botao">
                        <a href="https://github.com/MadTheck" style="--clr:#FF0000"><span>GitHub</span><i></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

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