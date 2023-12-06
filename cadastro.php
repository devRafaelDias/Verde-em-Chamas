<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cadastro.css">
    <title>Cadastro</title>
</head>

<body>
        <div id="bg"></div>
            <form action="cadastro_ac.php" id="formContainer" method="POST">
                <a href="index.php" id="voltar"><img src="assets/voltar.png" alt=""> Voltar</a>
                <h2>Cadastro</h2>
                <div id="emailContainer">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" placeholder="Digite seu email" required>
                </div>
                <div id="nomeContainer">
                    <label for="nome">Nome</label>
                    <input type="text" name="nome" id="nome" placeholder="Digite seu nome" required>
                </div>
                <div id="senhaContainer">
                    <label for="senha">Senha</label>
                        <input type="password" name="senha" id="senha" placeholder="Insira sua senha" maxlength="10" required>
                        <button id="mostrar" type="button"><img src="assets/olhoOpen.png" alt="" id="eye"></button>
                        <a href="login.php">Já tenho uma conta</a>
                </div>
    
                <button type="submit" id="btnCadastro">Cadastrar</button>
    
            </form>
</body>
    <script src="hidePassword.js"></script>
</html>