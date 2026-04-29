<?php 

class Animal {
    private $cod;
    private $nome;
    private $dtNascimento;
    private $peso;
    private $codTutor;
    private $codEspecie;

    public function getCod() { return $this->cod; }
    public function setCod($cod) { $this->cod = $cod; }

    public function getNome() { return $this->nome; }
    public function setNome($nome) { $this->nome = $nome; }

    public function getDtNascimento() { return $this->dtNascimento; }
    public function setDtNascimento($dtNascimento) { $this->dtNascimento = $dtNascimento; }

    public function getPeso() { return $this->peso; }
    public function setPeso($peso) { $this->peso = $peso; }

    public function getCodTutor() { return $this->codTutor; }
    public function setCodTutor($codTutor) { $this->codTutor = $codTutor; }

    public function getCodEspecie() { return $this->codEspecie; }
    public function setCodEspecie($codEspecie) { $this->codEspecie = $codEspecie; }
}

?>