<?php
  include_once 'conexaodb.php';
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href=".css">
<title>Produtos</title>
<style>
</style>
</head>
<body>
    <?php
    //MONTANDO O SQL QUE SERA EXECUTADO NO BANCO DE DADOS
    $sql = 'SELECT * FROM produtos WHERE produtoID = '.$_GET['id'];   
    $retorno = mysqli_query($conexaodb, $sql);
    
    $linha = mysqli_fetch_assoc($retorno);
      echo '
        <a href="./index3.php?id='.$linha['categoriaID'].'">
          <div class="grid">
            <div class="card">
                <span class="nome-categoria">
            '.$linha['nome'].'
          </span>
            <img src="'.$linha['url'].'" alt="" class="img-categoria">
            </div>
            <p class= "descricaoMain">'.$linha['descricao'].'</p>
          </div>
        </a>';
  ?>
</body>
</html>
 
