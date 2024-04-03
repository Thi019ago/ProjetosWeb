fetch('../back-end/produtos.json')
  .then(response => response.json())
  .then(data => {
    // Verifique se 'data' é um array antes de iterar
    if (Array.isArray(data)) {
      for (var i = 0; i < data.length; i++) {
        var produto = data[i];
        var titulo = produto.titulo;
        var descricao = produto.descricao;
        var empresa = produto.empresa;
        var imagem = produto.imagem;
        var preco = produto.preco;

        // Acesse o índice do produto e faça algo com os dados
        console.log('Produto #' + (i + 1));
        console.log('Título:', titulo);
        console.log('Descrição:', descricao);
        console.log('Empresa:', empresa);
        console.log('Imagem:', imagem);
        console.log('Preço:', preco);
      }
    } else {
      console.error('O JSON não contém um array de produtos.');
    }
  })
  .catch(error => console.error('Ocorreu um erro ao carregar o arquivo JSON:', error));