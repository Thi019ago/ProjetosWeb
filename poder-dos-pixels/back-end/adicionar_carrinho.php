<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $produto_id = $_POST['produto_id'];
    $produto_titulo = $_POST['produto_titulo'];

    // Converter o preço para float
    $produto_preco = floatval($_POST['produto_preco']);

    $carrinho = [];

    if (file_exists('carrinho.json')) {
        $carrinho = json_decode(file_get_contents('carrinho.json'), true);
    }

    // Verificar se o produto já está no carrinho
    $produto_existente = false;
    foreach ($carrinho as &$item) {
        if ($item['titulo'] === $produto_titulo) {
            // Produto já existe no carrinho, adicione 1 à quantidade
            $item['quantidade'] = isset($item['quantidade']) ? $item['quantidade'] + 1 : 2;
            $produto_existente = true;
        }
    }

    if (!$produto_existente) {
        // Se o produto não existe no carrinho, crie um novo item
        $novo_produto = [
            'titulo' => $produto_titulo,
            'preco' => $produto_preco,
            'quantidade' => 1
        ];

        $carrinho[] = $novo_produto;
    }

    file_put_contents('carrinho.json', json_encode($carrinho));

    // Redirecionar de volta para a página anterior ou outra página de sua escolha.
    header('Location: catalogo.php');

    // Mostrar uma mensagem de sucesso
    echo "Produto adicionado ao carrinho com sucesso!";
}
?>
