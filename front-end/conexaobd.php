<?php
//constantes de dados do banco
define('DBHOST', 'localhost'); //servidor
define('DBUSER', 'root'); // usuario do banco
define('DBPASS', ''); // senha do banco
define('DBBASE', 'doceria'); //base de dados

$conexao = mysqli_connect(DBHOST, DBUSER, DBPASS, DBBASE);
?>