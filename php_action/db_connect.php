<?php
//Conexão com banco de dados
$servename = "localhost";
$username = "root";
$password = "";
$db_name = "crud";

$connect = mysqli_connect($servename,$username,$password,$db_name);
mysqli_set_charset($connect,"utf8");


if(mysqli_connect_error()):
    echo "Erro na conexão:".mysqli_connect_error();
endif;
