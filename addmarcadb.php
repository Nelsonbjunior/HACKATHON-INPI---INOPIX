<?php include_once"config.php";?>
<?php
 $titulo = $_POST['nome_titular'];
 $url = $_POST['nome_marca']; 
 $descricao = $_POST['descricao_situacao'];
 $tags = $_POST['descricao_natureza'];
 $conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
// checa a conexao
if (!$conn) {
      die("Conexao falhou: " . mysqli_connect_error());
}
// insere dentro da tabela
$sql = "INSERT INTO marcas (nome_marca, descricao_situacao, descricao_natureza, nome_titular) VALUES ('$nome_marca', '$descricao_situacao', '$descricao_natureza', '$nome_titular')";
if (mysqli_query($conn, $sql)) {
echo "<script>alert('Inclui a Marca: $nome_marca  com sucesso !'); window.location = 'busca.php?busca=$nome_marca';</script>";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>