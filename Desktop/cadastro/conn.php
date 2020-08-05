<?php  

define('SERVERNAME', 'localhost');
define('USERNAME', 'root');
define('PASSWORD', '');
define('DBNAME', 'bd_trabalho');

$conn = mysqli_connect(SERVERNAME, USERNAME, PASSWORD, DBNAME);


if (!$conn) 
{ 
    die("Erro ao conectar: " . mysqli_connect_error());
}

?>