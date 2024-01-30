<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../assets/css/style.css" />
    <?php include "../assets/icoBarraNavegacao.php" ?>
    <title>Nome da empresa</title>
</head>

<body>
    <main>
        <form action="../controllers/login.php" method="post" autocomplete="off">
            <h1>Login</h1>
            <label for="">Email</label>
            <input type="email" name="email" placeholder="Digite seu email" required />
            <label for="">Senha</label>
            <input type="password" name="senha" placeholder="Digite sua senha" required />
            <input type="submit" value="Entrar" />
            <p style="color: red">
                <?php
                    session_start();
                   if (isset($_SESSION['error'])) {
                   echo $_SESSION['error'];
                   unset($_SESSION['error']); 
                  }
              ?>
            </p>

        </form>
    </main>
</body>

</html>