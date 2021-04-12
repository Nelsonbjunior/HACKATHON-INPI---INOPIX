<!DOCTYPE html>
<html lang="br">
<head>
	<title> Importacao CSV - INPI</title>
	<meta charset="utf8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<scritp src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></scritp>
</head>
<body>
	<div class="container">
		<div class="jumbotron">
			<h2>Upload CSV</h2>
			<form action="importar.php" method="post"enctype="multipart/form-data">

				<div class="checkbox">
					<label><input type="file" name="file"></label>
				</div>
				<button type="submit" class="btn btn-default">Enviar</button>
			</form>
		</div>
	</div>

</body>
</html>