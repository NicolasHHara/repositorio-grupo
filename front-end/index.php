<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <<header>
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
 
  </header>
  <main id="main">
    <div>
      
    </div>
    </main>
    <h3>Produtos</h3>
        <ul>
            <li>
                    <?php
                    //MONTANDO O SQL QUE SERA EXECUTADO NO BANCO DE DADOS
                    $sql = 'SELECT * FROM categoria';   

                    //EXECUTAR O SQL E GUARDAR O RETORNO
                    $retorno = mysqli_query($conexao, $sql);

                    //LISTAR TODOS OS DADOS
                    while( $linha = mysqli_fetch_assoc($retorno) ){
                        
                        echo '
                        <a href="categoria.php?id='.$linha['CategoriaID'].'">
                        <img src="https://www.estadao.com.br/resizer/v2/TAWYDO4W6NJ2ZISO5WEXHUDY2Q.jpg?quality=80&auth=42368db718eca007f33cc1bec837e0299b2886361cf411f0f315d308996ce6cc&width=1262&height=710&smart=true" alt="">                       
                        '.$linha['Nome'].
                        '<span>R$ 9.999,99</span>'.
                        '</a>';
                    }
                    ?>
                    
                </a>
            </li>
        </ul>



    
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
