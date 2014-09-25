<?php
include '../header.php';

$db = mysqli_connect("localhost", "root", "", "test") or die("Error " . mysqli_error($db));
$result = mysqli_query($db, 'SELECT id, login, senha FROM usuario');
?>
<table border="1">
	<tr>
		<th>ID</th>
		<th>Login</th>
		<th>Senha</th>
</tr>
<?php
while ($row = mysqli_fetch_array($result)) {
echo '<tr>'
. '<td>' . $row['id'] . '</td>'
. '<td>' . $row['login'] . '</td>'
. '<td>' . $row['senha'] . '</td>'
. '</tr>';
	}
?>
</table>