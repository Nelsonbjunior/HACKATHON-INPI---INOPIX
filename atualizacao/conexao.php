<?php

	$conn = new mysqli("localhost", "root", "", "inopix");
	msqli_set_charset($conn,"utf8");

		if($conn->connect_error){
			die("A conexão falhou: " . $conn->connect_error);
		}
?>