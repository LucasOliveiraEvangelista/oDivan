<?php

    require_once 'conexao.php';
    $email = $_POST['emailL'];
    $senha = $_POST['senhaL'];

    $senha = sha1($senha);

    $query = "SELECT email, senha from pacientes WHERE email = '$email' AND senha = '$senha' UNION SELECT email, senha from psicologos WHERE email = '$email' AND senha = '$senha' ";
    $buscar = mysqli_query($conexao, $query);

    if($buscar == 1 ){
        echo "<script>
            alert('Bem-Vindo!');
            location.href='../feed.php';
            </script>";
        
    }else{
        echo "<script>
            alert('Erro Usuário inválido!');
            location.href='../feed.php';
            </script>";    
    }
    
?>