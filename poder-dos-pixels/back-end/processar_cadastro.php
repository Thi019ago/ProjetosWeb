<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $novoProduto = [
        "titulo" => $_POST["titulo"],
        "descricao" => $_POST["descricao"],
        "empresa" => $_POST["empresa"],
        "imagem" => $_POST["imagem"],
        "preco" => $_POST["preco"] // Adiciona o campo de preço
    ];

    $produtos = [];

    if (file_exists('produtos.json')) {
        $produtos = json_decode(file_get_contents('produtos.json'), true);
    }

    $produtos[] = $novoProduto;

    file_put_contents('produtos.json', json_encode($produtos, JSON_PRETTY_PRINT));

    header("Location: cadastro_produto.html");
}
?>
