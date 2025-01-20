
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="logincadastro.css">
    <title>Cadastro e Login</title>
</head>
<body>
        <section id="login-section">
            <h2>Login</h2>
            <form>
                <label for="login-username">NOME DE USUÁRIO</label>
                <input type="text" id="login-username" name="username" required>
                
                <label for="login-email">EMAIL</label>
                <input type="text" id="login-email" name="email" required>
                
                <label for="login-password">SENHA</label>
                <input type="password" id="login-password" name="password" required>
                
                <button type="submit">Entrar</button>
            </form>
        </section>
        <section id="register-section">
            <h2>Cadastro</h2>
            <form>
                <label for="register-username">NOME DE USUÁRIO</label>
                <input type="text" id="register-username" name="username" required>
                
                <label for="register-email">EMAIL</label>
                <input type="email" id="register-email" name="email" required>
                
                <label for="register-password">SENHA</label>
                <input type="password" id="register-password" name="password" required>
                
                <label for="confirm-password">CONFIRMAR SENHA</label>
                <input type="password" id="confirm-password" name="confirm_password" required>
                
                <button type="submit">Cadastrar</button>
            </form>
        </section>
</body>
</html>
