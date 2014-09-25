<?php

	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		$db = mysqli_connect("localhost", "root", "", "test") or die("Error " . mysqli_error($db));
		$nome = mysqli_real_escape_string($db, $_POST['nome']);
		$telefone1 = mysqli_real_escape_string($db, $_POST['telefone1']);
		$telefone2 = mysqli_real_escape_string($db, $_POST['telefone2']);
		$email1 = mysqli_real_escape_string($db, $_POST['email1']);
		$email2 = mysqli_real_escape_string($db, $_POST['email2']);
		
		$result = mysqli_query($db, 'SELECT * FROM contatos WHERE nome = \'' . $nome . '\'');
		$count = mysqli_num_rows($result);
			if ($count > 0) {
				echo 'Contato já existe<br />';
			} else {
				$query = "INSERT INTO contato (nome, telefone1, telefone2, email1, email2) VALUES('$nome', '$telefone1', '$telefone2', '$email1', '$email2')";
				$result = mysqli_query($db, $query);
				if (mysqli_affected_rows($db) == 0) {
					echo 'Contato criado com sucesso<br />';
				}
			}
		
	}

?>

<form action="novoContato.php" method="post">
	Nome: <input type="text" name="nome" required/>
	<br />
	Telefone 1: <input type="text" name="telefone1" required/>
	<br />
	Telefone 2: <input type="text" name="telefone2" />
	<br />
	Email 1: <input type="text" name="email1" required/>
	<br />
	Email 2: <input type="text" name="email2" />
	<br />
	Foto: <input type="image" name="imagem" />
	<br />
	<input type="submit" value="salvar" />
</form>