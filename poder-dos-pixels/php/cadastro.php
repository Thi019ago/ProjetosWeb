<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Poder dos Pixels</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/reset.css">
    <link rel="stylesheet" href="/styles.css">
    <link rel="stylesheet" href="/styles/cadastro.css">
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

    <!-- form cadastro -->
    <section class="container__form">
        <div class="container-cadastro">
            <!--Div da imagem da esquerda da página de cadastro-->
            <div class="form-image">
                <img src="/img/cadastro/local-na-rede-internet2.png" alt="imagem cadastro">
            </div>
            <div class="form-cadastro">
                <form action="/back-end/cadastro.php" method="post">

                    <!--Título + Botão para entrar-->
                    <div class="form-header-cadastro">
                        <div class="title-cadastro">
                            <h1>Cadastre-se</h1>
                        </div>
                    </div>

                    <!--Informações para o cadastro-->
                    <div class="input-group-cadastro">
                        <div class="input-box-cadastro">
                            <label for="firstname">Primeiro Nome</label>
                            <input id="firstname" type="text" name="firstname" placeholder="Digite seu primeiro nome"
                                required>
                        </div>

                        <div class="input-box-cadastro">
                            <label for="lastname">Sobrenome</label>
                            <input id="lastname" type="text" name="lastname" placeholder="Digite seu sobrenome"
                                required>
                        </div>

                        <div class="input-box-cadastro">
                            <label for="email">E-mail</label>
                            <input id="email" type="email" name="email" placeholder="Digite seu email" required>
                        </div>

                        <div class="input-box-cadastro">
                            <label for="number">Celular</label>
                            <input id="number" type="tel" name="number" placeholder="(xx) xxxx-xxxx" required>
                        </div>

                        <div class="input-box-cadastro">
                            <label for="password">Digite sua senha</label>
                            <input id="password" type="password" name="password" placeholder="Digite sua senha"
                                required>
                        </div>

                        <div class="input-box-cadastro">
                            <label for="confirmpassword">Confirme sua senha</label>
                            <input id="confirmpassword" type="password" name="confirmpassword"
                                placeholder="Digite sua senha" required>
                        </div>
                    </div>

                    <!--Gêneros-->
                    <div class="gender-inputs-casdastro">
                        <div class="gender-title-casdastro">
                            <h6>Gênero</h6>
                        </div>

                        <div class="gender-group-cadastro">
                            <div class="gender-input-cadastro">
                                <input type="radio" id="female" name="gender">
                                <label for="female">Feminino</label>
                            </div>

                            <div class="gender-input-cadastro">
                                <input type="radio" id="male" name="gender">
                                <label for="male">Masculino</label>
                            </div>

                            <div class="gender-input-cadastro">
                                <input type="radio" id="others" name="gender">
                                <label for="others">Outros</label>
                            </div>
                        </div>
                    </div>

                    <div class="continue-button-cadastro">
                        <button input type="submit" value="Cadastrar"><a href="/back-end/">Continuar</a></button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>

</html>