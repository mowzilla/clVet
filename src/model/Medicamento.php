<?php 

class Medicamento {
    private $cod;
    private $nome;
    private $principioAtivo;
    private $validade;

    public function getCod() { return $this->cod; }
    public function setCod($cod) { $this->cod = $cod; }

    public function getNome() { return $this->nome; }
    public function setNome($nome) { $this->nome = $nome; }

    public function getPrincipioAtivo() { return $this->principioAtivo; }
    public function setPrincipioAtivo($principioAtivo) { $this->principioAtivo = $principioAtivo; }

    public function getValidade() { return $this->validade; }
    public function setValidade($validade) { $this->validade = $validade; }
  }

?>