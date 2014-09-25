<?php

	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		$login = $_POST['login'];
		$senha = $_POST['senha'];
		$senha_check = $_POST['senha_check'];
		if ($senha != $senha_check) {
			echo 'Senhas estão diferentes<br />';
		} else {
			$db = mysqli_connect("localhost", "root", "", "test") or die("Error " . mysqli_error($db));
			$result = mysqli_query($db, 'SELECT * FROM usuario WHERE login = \'' . $login . '\'');
			$count = mysqli_num_rows($result);
			if ($count > 0) {
				echo 'Usuário já existe<br />';
			} else {
				$query = sprintf("INSERT INTO usuario (login, senha) VALUES('%s', '%s')", mysqli_real_escape_string($db, $login)
																						, mysqli_real_escape_string($db, $senha));
				$result = mysqli_query($db, $query);
				if (mysqli_affected_rows($db) == 0) {
					echo 'Usuário criado com sucesso<br />';
				}
			}
		}
	}

?>

<form action="novo.php" method="post">
	Login: <input type="text" name="login" />
	<br />
	Senha: <input type="password" name="senha" />
	<br />
	Repita: <input type="password" name="senha_check" />
	<br />
	<input type="submit" value="salvar" />
</form>