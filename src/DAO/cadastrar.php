<?php

namespace Projeto\DAO;

require_once('../config/conexao.php');

use Projeto\config\Conexao;
use Exception;

class Cadastrar
{
    public function cadastrarTutor(conexao $conexao, string $nome, string $email, string $senha)
    {
        try {
            $conn = $conexao->conectar();
            $sql = "insert into tutor('', nome, email, senha) values('', '$nome','$email','$senha')";
            $result = mysqli_query($conn, $sql);
            mysqli_close($conn);
            if ($conn) {
                return "<br><br>Inserido com sucesso!";
            }
            return "<br><br>Não inserido!";
        } catch (Exception $erro) {
            return "<br><br>Algo deu errado!!!<br><br> $erro";
        }
    }
}
