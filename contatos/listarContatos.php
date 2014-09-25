<?php

$db = mysqli_connect("localhost", "root", "", "test") or die("Error " . mysqli_error($db));
$result = mysqli_query($db, 'SELECT nome, telefone1, telefone2, email1, email2, imagem FROM contatos');
?>
<table border="1">
	<tr>
		<th>Nome</th>
		<th>Telefone 1</th>
		<th>Telefone 2</th>
		<th>Email 1</th>
		<th>Email 2</th>
		<th>Foto</th>
</tr>
<?php
while ($row = mysqli_fetch_array($result)) {
echo '<tr>'
. '<td>' . $row['nome'] . '</td>'
. '<td>' . $row['telefone1'] . '</td>'
. '<td>' . $row['telefone2'] . '</td>'
. '<td>' . $row['email1'] . '</td>'
. '<td>' . $row['email2'] . '</td>'
. '<td>' . $row['imagem'] . '</td>'
. '</tr>';
	}
?>
</table>