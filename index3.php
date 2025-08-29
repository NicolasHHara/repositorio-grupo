<?php
  include_once 'conexaodb.php';
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="style.css">
<title>Bebidas</title>
<style>
    
body {
font-family: Arial, sans-serif;
background-color: #f0f0f0;
margin: 0;
padding: 20px;
}
h1 {
text-align: center;
color: #2c3e50;
}
.grid {
display: grid;
grid-template-columns: repeat(3, 1fr);
gap: 20px;
margin-top: 30px;
}
.card {
background: #fff;
padding: 15px;
border-radius: 12px;
box-shadow: 0 4px 6px rgba(0,0,0,0.1);
text-align: center;
transition: transform 0.2s;
height: 300px;
}
.card:hover {
transform: scale(1.05);
}
.card img {
max-width: 100%;
border-radius: 8px;
}
.card h2 {
font-size: 18px;
margin: 10px 0;
color: #34495e;
}
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
 
