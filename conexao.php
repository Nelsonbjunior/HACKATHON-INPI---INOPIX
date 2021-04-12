<?php

session_start();
//VARIÁVEIS DE CONEXÃO COM BANCO MYSQL
$localhost = "localhost";
$user = "root";
$pass = "";
$banco = "inopix";

//CONEXAO MYSQLI ESTRUTURAL
$conecta = mysqli_connect($localhost, $user, $pass, $banco);
mysqli_set_charset($conecta, "utf8");

?>