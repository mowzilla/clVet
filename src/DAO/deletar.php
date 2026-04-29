<?php

namespace Projeto\DAO;

require_once('../config/conexao.php');

use Projeto\config\Conexao;

use Exception;

class Excluir
{
    function excluirCliente(Conexao $conexao, int $codigo)
    {
        try {
            $conn = $conexao->conectar();
            $sql = "delete from cliente where codigo = '$codigo'";
            $result = mysqli_query($conn, $sql);
            mysqli_close($conn);
            if ($conn) {
                return "<br><br>Excluido com sucesso!";
            }
            return "<br><br>Não Excluido!";
        } catch (Exception $erro) {
            echo "Algo deu errado!! <br><br>$erro";
        }
    }
}
