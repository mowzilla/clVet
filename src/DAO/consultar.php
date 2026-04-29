<?php

namespace Projeto\DAO;

require_once('../config/conexao.php');

use Projeto\config\Conexao;

use Exception;

class Consultar
{
    function consultarCliente(conexao $conexao, int $codigo)
    {
        try {
            $conn = $conexao->conectar();
            $sql = "select * from cliente where cod = $codigo";
            $result = mysqli_query($conn, $sql);

            while ($dados = mysqli_fetch_Array($result)) {
                if ($dados['cod'] == $codigo) {
                    return "<br>Código: " . $dados['cod'] .
                        "<br>Nome: " . $dados['nome'] .
                        "<br>email: " . $dados['email'];
                }
            }
        } catch (Exception $erro) {
            echo "Algo deu errado! <br><br>$erro";
        }
    }
}
