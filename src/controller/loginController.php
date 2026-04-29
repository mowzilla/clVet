<?php


session_start();
require_once '../config/conexao.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {


    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $senha = $_POST['senha'];

    if ($email && $senha) {
        try {

            $sql = "SELECT id, nome, senha FROM usuarios WHERE email = :email";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':email', $email);
            $stmt->execute();

            $usuario = $stmt->fetch(PDO::FETCH_ASSOC);


            if ($usuario && password_verify($senha, $usuario['senha'])) {

                $_SESSION['usuario_id']   = $usuario['id'];
                $_SESSION['usuario_nome'] = $usuario['nome'];


                header("Location: ../views/user.php");
                exit();
            } else {

                header("Location: ../views/login.php?erro=dados_invalidos");
                exit();
            }
        } catch (PDOException $e) {
            echo "Erro no sistema: " . $e->getMessage();
        }
    } else {
        header("Location: ../views/login.php?erro=campos_vazios");
        exit();
    }
} else {

    header("Location: ../views/login.php");
    exit();
}
