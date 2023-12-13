<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

</head>
<body>
    <div class="mensagem">Cadastro realizado</div>
    <div class="container-login">

            <h1 id="h1">Log In</h1>
            <form method="POST" action="processa.php">
                <div class="inputContainer">
                    <label for="email" class="labelInput"> E-mail</label>
                    <input type="email" name="email_login" id="email" placeholder="Digite o e-mail" class="inputBox" required>
                </div>
                <div class="inputContainer">
                    <label for="senha" class="labelInput">Senha</label>
                    <input type="password" name="senha_login" id="senha" placeholder="Digite a senha" class="inputBox" required>
                    <span toggle="#senha" class="mostrarSenha">
                    <i class="far fa-eye-slash" aria-hidden="true"></i>
                </span>
                </div>
                <input type="submit" value="Log In" name="submit_login" id="submit">
                
               
        </form>
        <script src="script.js"></script>
        <?php 
            session_start();
            if(isset($_SESSION['loginErro'])){
                echo "<p style='color:#5035af; font-size: 1em; font-weight:bold'>".$_SESSION['loginErro'] . "</p>";
                unset($_SESSION['loginErro']);
            }
            if(isset($_SESSION['msg_sucesso'])){
                echo "<script>  mensagem(); </script>";
                unset($_SESSION['msg_sucesso']);
            }
        ?>

        <a href="cadastro.php"><p>Não tem uma conta? Cadastre-se</p></a>


    </div>


    <div class="backgroundImg1">

    </div>
    
</div>
</body>
</html>

