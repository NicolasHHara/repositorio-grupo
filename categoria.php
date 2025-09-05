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
    
/* ===== RESET ===== */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

/* ===== BODY ===== */
body {
  font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
  background: linear-gradient(135deg, #fdfbfb 0%, #ebedee 100%);
  color: #333;
  padding: 20px;
}

/* ===== TITULO ===== */
h1 {
  text-align: center;
  color: #2c3e50;
  margin-bottom: 30px;
  font-size: 2.2rem;
  font-weight: bold;
  letter-spacing: 1px;
  text-transform: uppercase;
}

/* ===== GRID ===== */
.grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
  gap: 25px;
  padding: 10px;
}

/* ===== CARD ===== */
.card {
  background: #fff;
  border-radius: 15px;
  padding: 20px;
  box-shadow: 0 6px 15px rgba(0, 0, 0, 0.08);
  text-align: center;
  transition: all 0.3s ease-in-out;
  position: relative;
  overflow: hidden;
}

.card:hover {
  transform: translateY(-8px);
  box-shadow: 0 12px 20px rgba(0, 0, 0, 0.15);
}

/* ===== IMAGEM DO PRODUTO ===== */
.card img {
  max-width: 100%;
  height: 180px;
  object-fit: cover;
  border-radius: 12px;
  transition: transform 0.3s ease-in-out;
}

.card:hover img {
  transform: scale(1.05);
}

/* ===== TITULO PRODUTO ===== */
.card h2,
.nome-categoria {
  font-size: 1.2rem;
  color: #34495e;
  margin: 15px 0 10px;
  display: block;
  font-weight: 600;
  text-transform: capitalize;
}

/* ===== DESCRIÇÃO ===== */
.descricaoMain {
  font-size: 0.95rem;
  color: #555;
  line-height: 1.4;
  margin-top: 8px;
  text-align: justify;
  max-height: 65px;
  overflow: hidden;
  text-overflow: ellipsis;
}

/* ===== BOTÃO INVISÍVEL (LINK) ===== */
.card a {
  text-decoration: none;
  color: inherit;
  display: block;
  height: 100%;
  width: 100%;
}

/* ===== RESPONSIVO ===== */
@media (max-width: 768px) {
  h1 {
    font-size: 1.8rem;
  }

  .descricaoMain {
    font-size: 0.9rem;
  }
}

@media (max-width: 480px) {
  .grid {
    grid-template-columns: 1fr;
  }
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
                <p class= "descricaoMain">'.$linha['descricao'].'</p  >
              </div>
            </a></div>';
        }
      ?>

</body>
</html>