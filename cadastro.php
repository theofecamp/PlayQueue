<?php
    $db = mysqli_connect("localhost", "root", "", "playqueue");
    $db->set_charset("utf8");

    if (!$db) {
        $description = "Erro: " . mysqli_connect_error(); 

        die($description);
    }
    include("cadastro.html");
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST['nome_usuario'];
        $email = $_POST['email'];
        $password = $_POST['senha'];
        $confirmedPassword = $_POST['senha-confirma'];

        if ($password != $confirmedPassword) {
            echo "<p>As senhas não coincidem. Tente novamente</p>";
            exit;
        }

        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO `cadastro` (`nome_usuario`, `email`, `senha`) VALUES ('$username', '$email', '$hashed_password')";

        if (mysqli_query($db, $sql)) echo "<p>$username cadastrado!</p>";
        else echo "<p>ERRO - $username não cadastrado: " . mysqli_error($db) . "</p>";
    }
?>