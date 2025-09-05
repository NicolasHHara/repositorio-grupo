<?php
  include_once 'conexaodb.php';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styleProdutos.css">
  <title>Produto</title>
</head>
<body>
  <?php
    $sql = 'SELECT * FROM produtos WHERE produtoID = '.$_GET['id'];   
    $retorno = mysqli_query($conexaodb, $sql);
    
    if ($linha = mysqli_fetch_assoc($retorno)) {
      echo '
      <main class="principal">
        <section class="secao-categoria">
          <div class="cabecalho-categoria">
          <a href="./categoria.php?id='.$linha['categoriaID'].'">
              <button class="botao-voltar">← Voltar</button>
          </a>
          <h2 class="titulo-categoria">'.$linha['nome'].'</h2>
          <img src="./imagens/categorias/'.$linha['categoriaID'].'.png" alt="'.$linha['nome'].'" class="icone-categoria">
          </div>

          <div class="container-produtos">
            <div class="caixa-produto">
              <img src="'.$linha['url'].'" alt="'.$linha['nome'].'" class="img-produto">
              <h3>'.$linha['nome'].'</h3>
              <p class="descricao-produto">'.$linha['descricao'].'</p>
              <div class="container-comprar">
                <h3>10 conto</h3>
                <p>no Pix</p>
              </div>
              <div class="container-comprar">
                <p>Frete</p>
                <input></input>
              </div>
              <div class="container-comprar">
                <button class="botao-comprar">Comprar</button>
            </div>
          </div>
        </section>
      </main>
      ';
    } else {
      echo "<p>Produto não encontrado.</p>";
    }
  ?>
</body>
</html>
