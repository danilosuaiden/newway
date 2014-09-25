<?php

	function getDb()
	{
		static $db = null;
		if ($db === null) {
			$db = mysql_connect('localhost', 'root', '');
			mysql_select_db('danilo', $db);
		}
		return $db;
	}

	function shutdown()
	{
		include 'footer.php';
	}
	register_shutdown_function('shutdown');

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
</html>