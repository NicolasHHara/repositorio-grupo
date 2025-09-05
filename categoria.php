<?php
include_once 'conexaodb.php';
?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="styles.css">
<title>Categorias</title>
<style>
</style>
</head>
<body>
<h1></h1>
<div class="grid">

<?php
        //MONTANDO O SQL QUE SERA EXECUTADO NO BANCO DE DADOS
        $sql = 'SELECT * FROM produtos WHERE categoriaID = '.$_GET['id'];   

        //EXECUTAR O SQL E GUARDAR O RETORNO
        $retorno = mysqli_query($conexaodb, $sql);

        //LISTAR TODOS OS DADOS
        while($linha = mysqli_fetch_assoc($retorno) ){
                        
          echo '<div class="card">
            <a href="produtos.php?id='.$linha['produtoID'].'">
              <div class="box-categoria">
              <span class="nome-categoria">
                '.$linha['nome'].'
              </span>
                <img src="'.$linha['url'].'" alt="" class="img-categoria">
                <p class= "descricaoMain">'.$linha['descricao'].'</p  >
              </div>
            </a></div>';
        }
      ?>

</body>
</html>