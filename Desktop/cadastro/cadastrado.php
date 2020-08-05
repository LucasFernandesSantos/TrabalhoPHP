<?php 

$nome = $_POST['nome'];
$email   = $_POST['email'];
$senha = $_POST['senha'];
$data   = $_POST['data'];
$cidade   = $_POST['cidade'];
$uf   = $_POST['uf'];
$observacao   = $_POST['observacao'];
$situacao   = $_POST['situacao'];

include 'conn.php';
$sql = "INSERT INTO tb_cadastro(nome,email,senha,data,cidade,uf,observacao,situacao)
VALUES('$nome','$email','$senha','$data','$cidade','$uf','$observacao','$situacao')";

$resultado = mysqli_query($conn,$sql);
if (mysqli_affected_rows($conn) > 0) 
{
	header('location:listar.php?msg=cadSuccess');
}
else
{
	header('location:cadastro.php?msg=cadError');
}
 





 ?>