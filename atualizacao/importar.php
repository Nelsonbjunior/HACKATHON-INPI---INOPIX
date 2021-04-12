<?php
	ini_set('max_execution_time', 0);

	$conn = new mysqli("localhost", "root", "", "inopix");
	mysqli_set_charset($conn,"utf8");

	$arquivo = $_FILES["file"]["tmp_name"];
	$nome = $_FILES["file"]["name"];

	$ext = explode(".", $nome);

	$extensao = end($ext);

	if($extensao != "csv"){
		echo "Extensão Inválida";
	}else{
		$objeto = fopen($arquivo,'r');

		while(($dados = fgetcsv($objeto, 10000, ";")) !== FALSE)
		{
			$nome_marca = utf8_encode($dados[0]);
			$descricao_situacao = utf8_encode($dados[1]);
			$descricao_natureza = utf8_encode($dados[2]);
			$nome_titular = utf8_encode($dados[3]);

			$result = $conn->query("INSERT INTO marcas (nome_marca, descricao_situacao, descricao_natureza, nome_titular) VALUES('$nome_marca','$descricao_situacao','$descricao_natureza','$nome_titular')");
		}
		if($result){
			echo "Dados Inseridos com Sucesso";
		}else{
			echo "Erro ao inserir os dados";
		}
	}
?>