<?php
   require "conecta.php";
   /* Esta declando que ele precisa ser executado antes dele */ 

   $usuario_01 = $_POST['usuario'];
   $senha_01   = $_POST['senha'];
   
   // verifica se o nosso login e senha estão de acordo com letras, sem acentos...
   if (preg_match("/^[a-zA-Z0-9çÇ_@]{1,}$/i", $usuario_01) and (preg_match("/^[a-zA-Z0-9çÇ_@]{1,}$/i",$usuario_01))){
        // nosso select para o banco
        $sql = "select login, senha from login where login = '$usuario_01' and senha = '$senha_01'";

        // realiza nossa consulta
        $query = mysqli_query($con, $sql);

        // retorna a quantidade de linhas afetadas/recuperadas 
        $row = mysqli_num_rows($query);

        if($row > 0){
            // Define o tempo da sessão em segundos
            $lifetime = 600;
            session_set_cookie_params($lifetime);
            
            // Define o nome da minha sessão, padrão é PHPSESSID.
            session_name("WebSite");

            // Inicia uma sessão no navegador
            session_start();

            // Nossas variáveis de sessão que sera armazenado no cache
            $_SESSION["login"] = $usuario_01;
            $_SESSION["senha"] = $senha_01;

            // Direciona nós para essa página location é JS
            header("Location:src/dashboard/dashboard.php");
        } else {
            echo "<script>alert('Login ou senha incorretos');window.location='index.html';</script>";
        }
    } else {
        echo "<script>alert('Login ou senha incorretos if de fora');windows.location='index.html';</script>";
    }
?>