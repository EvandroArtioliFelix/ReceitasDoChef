<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login/style.css">
    <title>Cadastro</title>
</head>
<body>
    <div class="container">
        <h2>Cadastro</h2>
        <form action="login/auth.php" method="POST">
            <input type="hidden" name="action" value="register">
            <input type="text" name="username" placeholder="Nome de usuário" required>
            <div class="password-container">
                <input type="password" id="password" name="password" placeholder="Senha" required>
                <span class="toggle-password" onclick="togglePassword()">👁️</span>
            </div>
            <button type="submit">Cadastrar</button>
        </form>
        <p>Já tem uma conta? <a href="index.php">Faça login aqui</a></p>
    </div>
    <script>
        function togglePassword() {
            const passwordField = document.getElementById('password');
            const toggleIcon = document.querySelector('.toggle-password');
            
            // Alterna o tipo do campo entre 'password' e 'text'
            if (passwordField.type === 'password') {
                passwordField.type = 'text';
                toggleIcon.textContent = '🙈'; // Muda o ícone para o "olho fechado"
            } else {
                passwordField.type = 'password';
                toggleIcon.textContent = '👁️'; // Muda o ícone para o "olho aberto"
            }
        }
    </script>
</body>
</html>
