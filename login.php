<?php
    $db = mysqli_connect("localhost", "root", "", "playqueue");
    $db->set_charset("utf8");

    
    if (!$db) {
        $description = "Erro: " . mysqli_connect_error(); 

        die($description);
    }

    include("login.html");

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST['nome_usuario'];
        $email = $_POST['email'];
        $password = $_POST['senha'];

        $sql_hashed_password = "SELECT * FROM cadastro WHERE nome_usuario = '$username' AND email = '$email'";

        $temp_hash = mysqli_query($db, $sql_hashed_password);

        if (!$temp_hash || $temp_hash->num_rows == 0)
            die("<p>Falha ao entrar. Nome de usuário, e-mail ou senha incorretos</p>");

        $user = $temp_hash->fetch_assoc();
        $hashed_password = $user['senha'];
        var_dump(password_verify($password, $hashed_password));



        if (!password_verify($password, $hashed_password))
            die("<p>Falha ao entrar. Nome de usuário, e-mail ou senha incorretos</p>");
        
        #$sql_get_user = "SELECT * FROM cadastro WHERE
        #nome_usuario = '$username' AND email = '$email'
        #AND senha = " . ;

        #$sql_get_user_query = mysqli_query($db, $sql_get_user) or die("Falha ao executar o código SQL: " . mysqli_error());

        #$amount_lines = $sql_get_user_query->num_rows;

        #if ($amount_lines == 0) {
        #    echo "<p>Falha ao entrar. Nome de usuário, e-mail ou senha incorretos</p>";
        #    exit;
        #}

        #$user = $sql_get_user_query->fetch_assoc();

        if (!isset($_SESSION))
            session_start();

        $_SESSION['nome_usuario'] = $user['nome_usuario'];

        header("Location: index.php");
        exit;
    }
?>
>>>>>>> Stashed changes
