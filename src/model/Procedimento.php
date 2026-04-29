<?php 

  class Procedimento {
    private $cod;
    private $descricao;
    private $codAtendimento;

    public function getCod() { return $this->cod; }
    public function setCod($cod) { $this->cod = $cod; }

    public function getDescricao() { return $this->descricao; }
    public function setDescricao($descricao) { $this->descricao = $descricao; }

    public function getCodAtendimento() { return $this->codAtendimento; }
    public function setCodAtendimento($codAtendimento) { $this->codAtendimento = $codAtendimento; }
  }

?>