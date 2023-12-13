<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
</head>
<body>
    <header>
        <div class="logo">
            <img src="img/logo.jpg" alt="logo">
        </div>
        <div class="container">
            <a href="login.php">
                <span class="botao">
                    <?php 
                        session_start();
                        if(isset($_SESSION['nome_usuario'])){
                            echo "";
                            
                        }
                        else {
                            echo "Log In";
                            
                        }
                    ?>
                </span>
            </a>
            
            <script src="script.js"></script>
            <div id="sair">Sair</div>
            <?php 
                
                if(isset($_SESSION['nome_usuario'])){
                    echo "<span class='botao' id='botao_sair'>" .$_SESSION['nome_usuario'] . "</span>";
                    
                    echo "<script>sair()</script>";
                    if(isset($_GET['logout'])) {
                        unset($_SESSION['nome_usuario']);
                        header('Location: index.php');
                        exit();
                    }
                }
                else {
                    echo "<a href='cadastro.php'><span class='botao'>Cadastrar</span></a>";
                        
                }
            ?>
                
        </div>
    </header>

    

    <div class="backgroundImg2">
        <h1 id="msg_bem_vindo">
            <?php 
                if(isset($_SESSION['nome_usuario'])){
                    echo "Bem-vindo(a) " . $_SESSION['nome_usuario'];
                }
                else {
                    echo "Bem-vindo(a)";
                    
                }
            ?>
        </h1>
    </div>
</body>
</html>