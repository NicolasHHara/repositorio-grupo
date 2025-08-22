<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
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
      <div class="logo">americanas</div>
      <div class="search-box">
        <input type="text" placeholder="Buscar produtos..." />
        <button><i class="fas fa-search"></i></button>
      </div>
      <div class="icons">
        <a href="#"><i class="fas fa-heart"></i></a>
        <a href="#"><i class="fas fa-user"></i></a>
        <a href="#"><i class="fas fa-shopping-cart"></i></a>
      </div>
    </div>
  </header>
  <main id="main">
        <?php
        for ($i = 0; $i < 4; $i++) {
            echo '<button class="button-main">
                    <div class="container-main">
                        <img src="#" alt="" class="img-main">
                        <h1 class="title-main">Título ' . ($i+1) . '</h1>
                        <p class="paragraph-main">Parágrafo ' . ($i+1) . '</p>
                    </div>
                  </button>';
        }
        ?>
    </main>
    <footer></footer>
</body>
</html>
