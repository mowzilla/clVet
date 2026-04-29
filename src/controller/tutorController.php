<?php 

require_once './src/model/Tutor.php';
require_once './src/DAO/cadastrar.php';

class TutorController {
    
    public function processarCadastro() {
        $tutor = new Tutor();
        $tutor->setNome($_POST['nome']);
        $tutor->setCpf($_POST['cpf']);
        $tutor->setTelefone($_POST['telefone']);
        $tutor->setEmail($_POST['email']);
        $tutor->setUsuario($_POST['usuario']);
        
        $senhaHash = password_hash($_POST['senha'], PASSWORD_DEFAULT);
        $tutor->setSenha($senhaHash);

        $dao = new TutorDAO();
        if ($dao->insert($tutor)) {
            header("Location: ../view/login.php?msg=sucesso");
        } else {
            header("Location: ../view/cadastro.php?msg=erro");
        }
    }

    public function realizarLogin() {
        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];

        $dao = new TutorDAO();
        $tutorData = $dao->buscarPorUsuario($usuario);

        if ($tutorData && password_verify($senha, $tutorData['senha'])) {
            session_start();
            $_SESSION['tutor_cod'] = $tutorData['cod'];
            $_SESSION['tutor_nome'] = $tutorData['nome'];
            header("Location: ../view/dashboard.php");
        } else {
            header("Location: ../view/login.php?msg=invalido");
        }
    }
}

?>