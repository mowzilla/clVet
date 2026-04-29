<?php 

class Veterinario {
    private $cod;
    private $nome;
    private $crmv;
    private $especialidade;
    private $turno;
    private $telefone;

    public function getCod() { return $this->cod; }
    public function setCod($cod) { $this->cod = $cod; }

    public function getNome() { return $this->nome; }
    public function setNome($nome) { $this->nome = $nome; }

    public function getCrmv() { return $this->crmv; }
    public function setCrmv($crmv) { $this->crmv = $crmv; }

    public function getEspecialidade() { return $this->especialidade; }
    public function setEspecialidade($especialidade) { $this->especialidade = $especialidade; }

    public function getTurno() { return $this->turno; }
    public function setTurno($turno) { $this->turno = $turno; }

    public function getTelefone() { return $this->telefone; }
    public function setTelefone($telefone) { $this->telefone = $telefone; }
}

?>