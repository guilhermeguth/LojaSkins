<?php
 session_name("WebSite");
 session_start();

 if(isset($_SESSION['login']) and isset($_SESSION['senha'])) {
     $login = $_SESSION["login"];
     $senha = $_SESSION["senha"];
} else {
    echo"<script>alert('Voce não esta logado!!!');</script>";
    echo"<script>window.location = '../../index.html';</script>";
    exit;
}
if((!empty($login) && !empty($senha))){
    require "conecta.php";
    $cmd = "select * from login where login = '$login' and senha = '$senha'";
    $query = mysqli_query($con,$cmd);
    $result = mysqli_fetch_array($query);
    $check_login = $result['login'];
    $check_passw = $result['senha'];

    if(($check_login != $login) or ($check_passw != $senha)){
        setcookie("login");
        setcookie("senha");
    
    echo"<script>alert('Para acessar esta página, faça o login.');
        window.location='../../index.html';</script>";
        exit;
    }
    ;
}
?>
