<?php
    session_start();


    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
       $db = mysqli_connect("localhost", "root", "", "test") or die("Error " . mysqli_error($link));
        $login = ($_POST["login"]);
        $senha = ($_POST["senha"]);
        
            $query = "SELECT * from usuario where login = '$login' limit 1";
            $result = mysqli_query($db, $query);
            $row = mysqli_fetch_array($result);
            $login2 = $row["login"];
            $senha2 = $row["senha"];
            
            if (empty($login2)) {
                echo "Usuario nao existe.";
            } else if ($senha != $senha2) {
                echo "Senha invalida.";
            } else {
                $_SESSION["usuario"] = array("id"=>$row["id"],
                                             "nome"=>$row["nome"],
                                             "login"=>$row["login"]);
                header("Location: header.php");
 
            }
 
    } else {
        echo "Usuario e/ou senha invalidos!";
        exit;
    }
?>