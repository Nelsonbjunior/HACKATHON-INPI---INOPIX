<html>
<head>
    <title>Reaver Marca</title>
<meta charset="utf-8">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<style>
#busca {
  border-radius: 15px;
}
</style>
</head>
<body>
<center>
<br>
<center><a href="index.php"><img src="logo.png" class='img-fluid' alt="Busca" width="150" height="150" id="busca"></a></center>
<br>
<div class="container">
<h3>Reinvindicar Marca</h3>
<form  method="post" name="adiciona" action="addmarcadb.php" autocomplete='off'>
  <div class="form-group col-md-4">
      <label for="inputlg" for="name">Nome do Titular</label>
      <input type="text"  class="form-control"  name="titulo" maxlength="50" value=""  autocomplete='off' required="true" placeholder="palavras,chaves"  id="busca">
    </div>
    <div class="form-group col-md-3">
      <label for="inputlg" for="name">Nome da Marca</label>
      <input type="text"  class="form-control"  name="url" maxlength="100" value=""  autocomplete='off' required="true"  id="busca">
    </div> 
 <div class="form-group col-md-4">
<label for="inputlg" for="name">Descrição Situação</label>
 <textarea class="form-control" id="story" name="descricao"
          rows="5" cols="33" maxlength="250" required="true"  id="busca">
</textarea>
</div>
    <div class="form-group col-md-3">
      <label for="campo2">Descrição Natureza</label>
      <input type="text" maxlength="30" class="form-control" name="tags" value="" autocomplete="off"  id="busca">
    </div>
    <div class="form-group col-md-2">
   <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
  </div>
</form>     
</div>
</div>
</center>
</body>
</html>