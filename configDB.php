<?php   
//config.php

//Dados para escolha do DataBase (DB)

$dbhost = "localhost";
$dbuser = "root";  //Usuário Raíz (RUTE)
$dbpass = "";
$dbname = "sistemaDeLogin";

//conexão com o Banco de Dados
$conecta = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
if($conecta->connect_error){ die("Nãum foi possiível se conectar ao Banco de Dados: " . $conecta->connect_error);}
else{
        echo "<h1>Conectou no BD Manoow!</h1>";
}