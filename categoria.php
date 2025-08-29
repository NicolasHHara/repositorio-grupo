<?php
include_once 'conexaodb.php';
?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="style2.css">
<title>Produtos</title>
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
            <a href="index3.php?id='.$linha['produtoID'].'">
              <div class="box-categoria">
              <span class="nome-categoria">
                '.$linha['nome'].'
              </span>
                <img src="'.$linha['url'].'" alt="" class="img-categoria">
                <p class= "descricaoMain">'.$linha['descricao'].'</p>
              </div>
            </a></div>';
        }
      ?>

</body>
</html>