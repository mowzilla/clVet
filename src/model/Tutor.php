<?php 

class Tutor {
    private $cod;
    private $nome;
    private $cpf;
    private $telefone;
    private $codEndereco;
    private $email;
    private $usuario;
    private $senha;

    public function getCod() { return $this->cod; }
    public function setCod($cod) { $this->cod = $cod; }

    public function getNome() { return $this->nome; }
    public function setNome($nome) { $this->nome = $nome; }

    public function getCpf() { return $this->cpf; }
    public function setCpf($cpf) { $this->cpf = $cpf; }

    public function getTelefone() { return $this->telefone; }
    public function setTelefone($telefone) { $this->telefone = $telefone; }

    public function getCodEndereco() { return $this->codEndereco; }
    public function setCodEndereco($codEndereco) { $this->codEndereco = $codEndereco; }

    public function getEmail() { return $this->email; }
    public function setEmail($email) { $this->email = $email; }

    public function getUsuario() { return $this->usuario; }
    public function setUsuario($usuario) { $this->usuario = $usuario; }

    public function getSenha() { return $this->senha; }
    public function setSenha($senha) { $this->senha = $senha; }
}

?>