<?php

namespace Projeto\DAO;

require_once('../config/conexao.php');

use Projeto\config\Conexao;
use Exception;

class Atualizar
{
    function atualizarCliente(Conexao $conexao, int $codigo, string $campo, string $novoDado)
    {
        try {
            $conn = $conexao->conectar();
            $sql = "update cliente set $campo = '$novoDado' where cod = '$codigo'";
            $result = mysqli_query($conn, $sql);
            mysqli_close($conn);
            if ($conn) {
                return "<br><br>Atualizado com sucesso!";
            }
            return "<br><br>Não Atualizado!";
        } catch (Exception $erro) {
            echo "Algo deu errado!! $erro";
        }
    }
}
