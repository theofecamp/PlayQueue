<?php
    $db = mysqli_connect("localhost", "root", "", "playqueue");
    $db->set_charset("utf8");

    if (!$db) {
        $description = "Erro: " . mysqli_connect_error(); 

        die($description);
    }
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cadastro-s.css">
    <title>cadastro</title>
</head>
<body>
        <section id="register-section">
            <h2>Cadastro</h2>
            <form action="cadastro.php" method="POST">
                <label for="nome_usuario">NOME DE USUÁRIO</label>
                <input type="text" id="register-username" name="nome_usuario" required>
                
                <label for="email">EMAIL</label>
                <input type="email" id="register-email" name="email" required>
                
                <label for="senha">SENHA</label>
                <input type="password" id="register-password" name="senha" required>
                
                <label for="senha-confirma">CONFIRMAR SENHA</label>
                <input type="password" id="confirm-password" name="senha-confirma" required>
                
                <button type="submit">Cadastrar</button>
            </form>
            <?php
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
        </section>
</body>
</html>
