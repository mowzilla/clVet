<?php 

  class Endereco {
    private $cod;
    private $logradouro;
    private $numero;
    private $complemento;
    private $bairro;
    private $cep;

    public function getCod() { return $this->cod; }
    public function setCod($cod) { $this->cod = $cod; }

    public function getLogradouro() { return $this->logradouro; }
    public function setLogradouro($logradouro) { $this->logradouro = $logradouro; }

    public function getNumero() { return $this->numero; }
    public function setNumero($numero) { $this->numero = $numero; }

    public function getComplemento() { return $this->complemento; }
    public function setComplemento($complemento) { $this->complemento = $complemento; }

    public function getBairro() { return $this->bairro; }
    public function setBairro($bairro) { $this->bairro = $bairro; }

    public function getCep() { return $this->cep; }
    public function setCep($cep) { $this->cep = $cep; }
  }

?>