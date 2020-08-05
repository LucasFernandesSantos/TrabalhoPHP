<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body class="container">
<h2>Listar cadastrados</h2><br>

<?php
include 'conn.php';

$sql = "SELECT id,nome,email,senha,data,cidade,uf,observacao,situacao FROM tb_cadastro";

$resultado = mysqli_query($conn,$sql);

if(mysqli_affected_rows($conn) > 0)
{
   $registros = array();
echo'<table class="table table-dark table-bordered">';
echo '<tr>';
echo '<th>Id</th>';
echo '<th>Nome</th>';
echo '<th>E-mail</th>';
echo '<th>Senha</th>';
echo '<th>Data</th>';
echo '<th>Cidade</th>';
echo '<th>UF</th>';
echo '<th>Observação</th>';
echo '<th>Situação</th>';
echo '</tr>';

  while ($registros = mysqli_fetch_assoc($resultado))

       {

       	   echo'<tr>';
           foreach ($registros as  $coluna_atual  => $valor) 
			{

        		if($coluna_atual == 'id')
        		{
        			$id = $valor;
        		}

				  else if($coluna_atual  == 'data')
        		{
        			$nova_data = strtotime($valor);
        			$valor = date("d/m/Y",$nova_data);

        		}	
        		 echo "<td>" . $valor . "</td>";
			}

          
               	# code...
          

          echo'</tr>';    	
     
        } 


        echo '</table>';

   }


    else if (mysqli_affected_rows($conn) ==0) 
    {
       echo '<h3 class="text-warning">Não há pessoas cadastrados ainda...</h3>';
      
    }
    else
    {
      echo '<h3 class="text-danger">Erro no sql:<br>' . $sql . '<br>';
      echo mysqli_error($conn) . '</h3>';

    }
?>

 <a href="cadastro.php" class="btn btn-outline-dark">Volta ao cadastro</a>
</body>
</html>