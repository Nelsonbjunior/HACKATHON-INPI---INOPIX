<?php include_once"config.php";?>
<html>
<head>
    <title>Busca Marcas Registradas</title>
</head>
<body>
<br>
<?php include_once"top.php";?>

 	<?php
		$busca = $_GET['busca'];
    		$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
    		$result_nomes = "SELECT * FROM marcas WHERE UPPER(nome_marca) LIKE '%$busca%' or descricao_situacao LIKE '%$busca%' or nome_titular LIKE '$busca' Order By '$busca' LIMIT 10";
    		$resultado_nomes = mysqli_query($conn, $result_nomes);
        	$conta = mysqli_num_rows($resultado_nomes); // contagem de registro

     while($rows_nomes = mysqli_fetch_array($resultado_nomes))
     {
		$id = $rows_nomes["id"];
		echo'<div><a href =https://www.google.com.br/search?q="'.$rows_nomes["nome_marca"].'" ><h2>Marca: '.$rows_nomes["nome_marca"].'</h2></a>
			 <h3><p>Situação: '.$rows_nomes["descricao_situacao"].'</p></h3>
			 <h3><p>Titular: '.$rows_nomes["nome_titular"].'</p></h3>
			 </div>';
	}

	?>

<h4>Total: <?php echo $conta;?> </h4>
</div>
<?php include_once"baixo.php";?>
</body>
</html>