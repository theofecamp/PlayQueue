<?php
    $db = mysqli_connect("localhost", "root", "", "playqueue");
    $db->set_charset("utf8");

<<<<<<< Updated upstream
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Login</title>
</head>
<body>
    <header>
        <a href="index.html"> <img src="imgs/arrow_back_24dp_E8EAED_FILL0_wght400_GRAD0_opsz24.png" alt=""> </a>
        <nav>
            <div id="top-page-logo">
                <h1 id="head-intro">PlayQueue</h1>
            </div>
        </nav>
    </header>
        <section id="login-section">
            <h2>Login</h2>
            <form>
                <label for="register-username">NOME DE USUÁRIO</label>
                <input type="text" id="register-username" name="username" required>
                
                <label for="register-email">EMAIL</label>
                <input type="email" id="register-email" name="email" required>
                
                <label for="register-password">SENHA</label>
                <input type="password" id="register-password" name="password" required>
                
                <button type="submit">Entrar</button>
            </form>
        </section>
</body>
</html>
=======
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
