<?php
include_once 'conexaodb.php';

// Validar entrada
$categoriaId = isset($_GET['id']) ? (int) $_GET['id'] : 0;

// SQL
$sql = "SELECT * FROM produtos WHERE categoriaID = $categoriaId";
$retorno = mysqli_query($conexaodb, $sql);
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Categorias</title>
  <link rel="stylesheet" href="styleCategorias.css">
</head>
<body>

  <!-- HEADER -->
  <header>
    <div class="top-bar">
      <div class="top-links">
        <a href="#">Login</a>
        <a href="#">Minha Conta</a>
        <a href="#">Carrinho</a>
      </div>
    </div>
    <div class="main-bar">
      <div class="logo">Doceria</div>
      <div class="search-box">
        <input type="text" placeholder="Buscar produtos...">
        <button>🔍</button>
      </div>
    </div>
  </header>

  <!-- MAIN -->
  <main>
    <h1 class="tituloMain">Produtos</h1>
    <div class="grid">
      <?php while($linha = mysqli_fetch_assoc($retorno)): ?>
        <div class="card">
          <a href="produtos.php?id=<?= $linha['produtoID'] ?>">
            <div class="box-categoria">
              <span class="nome-categoria"><?= $linha['nome'] ?></span>
              <img src="<?= $linha['url'] ?>" alt="<?= $linha['nome'] ?>" class="img-categoria">
              <p class="descricaoMain"><?= $linha['descricao'] ?></p>
            </div>
          </a>
        </div>
      <?php endwhile; ?>
    </div>
  </main>

  
  <footer class="footer">
    <div class="footer-container">
      <div class="footer-column">
        <h4>Sobre</h4>
        <ul>
          <li><a href="#">Quem Somos</a></li>
          <li><a href="#">Política de Privacidade</a></li>
        </ul>
      </div>
      <div class="footer-column">
        <h4>Ajuda</h4>
        <ul>
          <li><a href="#">Fale Conosco</a></li>
          <li><a href="#">Trocas e Devoluções</a></li>
        </ul>
      </div>
      <div class="footer-column newsletter-form">
        <h4>Receba Novidades</h4>
        <input type="email" placeholder="Digite seu e-mail">
        <button>Inscrever</button>
      </div>
    </div>
    <div class="footer-bottom">
      &copy; <?= date("Y") ?> - Minha Loja. Todos os direitos reservados.
    </div>
  </footer>

</body>
</html>
