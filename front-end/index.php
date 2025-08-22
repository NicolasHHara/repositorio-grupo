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
    <header></header>
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
