<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    
</head>
<body>
   
    <div class="container-cadastro">
        <h1 id="h1">Cadastrar</h1>
        <form method="POST" action="processa.php">
            <div class="inputContainer">
                <label for="nome" class="labelInput"> Nome</label>
                <input type="text" name="nome_cadastro" id="nome" placeholder="Nome" class="inputBox" pattern="[a-zA-Z0-9\s]+" title="Somente letras, números e espaços são permitidos" required>
            </div>
            <div class="inputContainer">
                <label for="email" class="labelInput"> E-mail</label>
                <input type="email" name="email_cadastro" id="email" placeholder="E-mail" class="inputBox" required>
            </div>  
            <div class="inputContainer">
                <label for="email" class="labelInput"> Senha</label>
                <input type="password" name="senha_cadastro" id="senha" placeholder="Senha" class="inputBox" minlength="8" required>
                <span toggle="#senha" class="mostrarSenha">
                    <i class="far fa-eye-slash" aria-hidden="true"></i>
                </span>
            </div>
            <input type="submit" value="Cadastrar" name="submit_cadastro" id="submit">

        </form>
        <?php 
            session_start();
            if(isset($_SESSION['emailErro'])){
                echo "<p style='color:#714aff; font-size: 1em; font-weight:bold text-align: center;'>".$_SESSION['emailErro'] . "</p>";
                unset($_SESSION['emailErro']);
            }
        ?>
    </div>

    <div class="backgroundImg1">

    </div>
    <script src="script.js"></script>
</body>
</html>

