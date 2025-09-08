
<?php
include_once("conexaodb.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Principal</title>
    <link rel="stylesheet" href="stylePrincipal.css?v=02   ">
</head>
<body>
<header>
    <div class="top-bar">
        <div class="top-links">
            <a href="#">Minha conta</a>
            <a href="#">Pedidos</a>
            <a href="#">Ajuda</a>
        </div>
    </div>
 
    <div class="main-bar">
        <div class="logo">DOCERIA</div>
        <div class="search-box">
            <input type="text" placeholder="Buscar produtos..." />
            <button>PESQUISA</button>
        </div>
        <div class="icons">
            <a href="#"></a>
            <a href="#"></a>
            <a href="#"></a>
        </div>
    </div>
</header>

<main id="main">
  <h3 class="tituloMain">Categorias</h3>
      <?php
        //MONTANDO O SQL QUE SERA EXECUTADO NO BANCO DE DADOS
        $sql = 'SELECT * FROM categorias';   

        //EXECUTAR O SQL E GUARDAR O RETORNO
        $retorno = mysqli_query($conexaodb, $sql);

        //LISTAR TODOS OS DADOS
        while($linha = mysqli_fetch_assoc($retorno) ){
                        
          echo '
            <a href="categoria.php?id='.$linha['categoriaID'].'">
              <div class="box-categoria">
              <span class="nome-categoria">
                '.$linha['nome'].'
              </span>
                <img src="'.$linha['url'].'" alt="" class="img-categoria">
                <p class= "descricaoMain">'.$linha['descricao'].'</p>
              </div>
            </a>';
        }
      ?>
</main>


    
    <footer class="footer">
    <div class="footer-container">
      <div class="footer-column">
        <h4>Institucional</h4>
        <ul>
          <li><a href="#">Sobre nós</a></li>
          <li><a href="#">Trabalhe conosco</a></li>
          <li><a href="#">Política de privacidade</a></li>
          <li><a href="#">Termos de uso</a></li>
        </ul>
      </div>
 
      <div class="footer-column">
        <h4>Ajuda</h4>
        <ul>
          <li><a href="#">Fale com a gente</a></li>
          <li><a href="#">Como comprar</a></li>
        </ul>
      </div>
      <div class="footer-column">
        <h4>Nos siga nas redes sociais!</h4>
        <div class="social-icons">
          <a href="#" aria-label="Facebook"><img src="https://cdn-icons-png.flaticon.com/512/733/733547.png" alt="Facebook" /></a>
          <a href="#" aria-label="Instagram"><img src="https://cdn-icons-png.flaticon.com/512/2111/2111463.png" alt="Instagram" /></a>
          <a href="#" aria-label="TikTok"><img src="https://cdn-icons-png.flaticon.com/512/3046/3046120.png" alt="TikTok" /></a>
        </div>
      </div>
      <div class="footer-column">
        <h4>Receba todas as novidades da nossa doceria!</h4>
        <form class="newsletter-form">
          <input type="email" placeholder="Seu e-mail" required />
          <button type="submit">Cadastre
          </button>
        </form>
      </div>
    </div>
    <div class="footer-bottom">
      <p>&copy; 2025 Doceria CINEL.</p>
    </div>
  </footer>
</body>
</html>
