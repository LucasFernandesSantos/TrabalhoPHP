<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body class="container">

   <h3 class="text-primary">Cadastre-se</h3>
   <form name="cadastrar" action="cadastrado.php" method="post">
    <p>
      <label class="text-black">Nome:</label><br>
      <input type="text" name="nome" required="" >
    </p>

    <p>
      <label class="text-black">E-mail:</label><br>
      <input type="email" name="email" required="" >
    </p>

    <p>
      <label class="text-black">Senha:</label><br>
      <input type="password" name="senha" required="" >
    </p>
  
   <p>
      <label class="text-black">Dara de nascimento:</label><br>
      <input type="date" name="data" required="" >
    </p>
   <p>
      <label class="text-black" for="cidade">Cidade:</label><br>
      <select name="cidade">
       <option value="" required></option>  
        <option value="SaoPaulo">São Paulo</option>  
        <option value="RioDeJaneiro">Rio de Janeiro</option>  
        <option value="Salvador">Salvador</option>  
        <option value="Fortaleza">Fortaleza</option>  
        <option value="Manaus">Manaus</option>  
      </select>
    </p>
 <p>
      <label class="text-black">UF:</label><br>
      <select name="uf" > 
       <option value="" required></option>  
        <option value="SP">SP</option>  
        <option value="RJ">RJ</option>  
        <option value="BA">BA</option>  
        <option value="CE">CE</option>  
        <option value="AM">AM</option>  
      </select>
    </p>

<p>
  <label class="text-black">Observação:</label><br>
     <textarea  name="observacao"  cols="50" rows="5" required="" ></textarea>
    </p>

<p>
      <label class="text-black">Situação:</label><br>
        <input type="checkbox"  name="situacao" value="Ativo"  checked>Ativo<br/>
        <input type="checkbox"  name="situacao" value="Desativado"  >Desativado<br/>
    </p>
    <p>
      <button type="submit" class="btn btn-primary">Cadastrar</button>
    </p>

   </form>






</body>
</html>   