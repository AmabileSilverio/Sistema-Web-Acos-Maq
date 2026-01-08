<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Login</title>
    <link rel="stylesheet" href="/sistema-acosmaq/assets/css/estilo.css?v=2">
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>        
        <form action="file:///C:/Users/pc/Documents/Am%C3%A1bile/Pi%20pronto%20professor/telaprincipal.html" method="post" autocomplete="on">
            <label for="username">Nome de Usuário:</label>
            <input type="text" id="username" name="username" required placeholder="Digite seu usuário" autocomplete="username">

            <label for="password">Senha:</label>
            <input type="password" id="password" name="password" required placeholder="Digite sua senha" autocomplete="current-password">
            <br>
            <input type="submit" value="Entrar"> 
            <div class="form-logo">
                <img src="/sistema-acosmaq/assets/img/logo-acosmaq.svg" alt="logotipo">
            </div>
        </form>
    </div>

</body>
</html>
