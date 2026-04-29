<?php 

  class Especie {
    private $cod;
    private $raca;
    private $descricao;
    private $tipo;

    public function getCod() { return $this->cod; }
    public function setCod($cod) { $this->cod = $cod; }

    public function getRaca() { return $this->raca; }
    public function setRaca($raca) { $this->raca = $raca; }

    public function getDescricao() { return $this->descricao; }
    public function setDescricao($descricao) { $this->descricao = $descricao; }

    public function getTipo() { return $this->tipo; }
    public function setTipo($tipo) { $this->tipo = $tipo; }
  }

?>