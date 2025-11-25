<?php
    session_start();

    if (!isset($_POST['username']) || !isset($_POST['password'])) {
        header("Location: login.php?error=faltando_dados");
        exit();
    }
    $username = $_POST['username'];
    $password = $_POST['password'];
    if ($username === "admin" && $password === "senha123") {
        $_SESSION['username'] = $username;
        echo "<h1>Login bem-sucedido!</h1>";
        echo "<p>Bem-vindo, $username!</p>";
    }
    else {
        $_SESSION['username'] = null;
        header("Location: login.php?error=credenciais_invalidas");
        exit();
    }
