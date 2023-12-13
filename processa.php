<?php 
    session_start();
    include_once('conexao.php');
    
    if(isset($_POST['submit_cadastro'])){
        //previne sql INJECTION
        $nome_cadastro = mysqli_real_escape_string($conn, $_POST['nome_cadastro']);
        $email_cadastro = mysqli_real_escape_string($conn, filter_input(INPUT_POST, 'email_cadastro', FILTER_SANITIZE_EMAIL));
        $senha_cadastro = $_POST['senha_cadastro'];
        //criptografa a senha
        $senha_cadastro = password_hash($senha_cadastro, PASSWORD_DEFAULT);

        //checa se email existe
        $query_email = "SELECT email FROM usuarios WHERE email = '$email_cadastro'";
        $result = mysqli_query($conn, $query_email);
        if(mysqli_num_rows($result)>0){
            $_SESSION['emailErro'] = "E-mail já existente. Por favor, escolha outro e-mail.";
            header("Location: cadastro.php");
            exit();
        }
        else{
            $sql = "INSERT INTO usuarios(nome, email, senha, created) 
            VALUES ('$nome_cadastro','$email_cadastro','$senha_cadastro', NOW())";
            $resultado = mysqli_query($conn, $sql);

            if(mysqli_insert_id($conn)){
                header("Location: login.php");
                $_SESSION['msg_sucesso'] = "Cadastro realizado!";
                exit();
            }
            else{
                header("Location: index.php");
                exit();
            }
        }
    }

    if(isset($_POST['submit_login'])){
        $email_login = mysqli_real_escape_string($conn, $_POST['email_login']);
        $senha_login = mysqli_real_escape_string($conn, $_POST['senha_login']);
        $sql = "SELECT nome, senha FROM usuarios WHERE email = '$email_login'";
        $result = mysqli_query($conn, $sql);
        $linha = mysqli_fetch_assoc($result);
        //coleta o resultado do select
        if(!empty($linha)){
            $senha_criptografada = $linha['senha'];
            if(password_verify($senha_login, $senha_criptografada)){
                header("Location: index.php");
                $_SESSION['nome_usuario'] = ucfirst($linha['nome']);
                echo var_dump($_SESSION);
                exit();
            }
            else{
                $_SESSION['loginErro'] = "E-mail ou senha incorretos.";
                header("Location: login.php");
                exit();
            }
        }else {
            $_SESSION['loginErro'] = "E-mail ou senha incorretos.";
            header("Location: login.php");
            exit();
        }
    }


?>