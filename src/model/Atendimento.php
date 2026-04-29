<?php 

  class Atendimento {
    private $cod;
    private $codVeterinario;
    private $codAnimal;
    private $diagnostico;
    private $tratamento;
    private $data;

    public function getCod() { return $this->cod; }
    public function setCod($cod) { $this->cod = $cod; }

    public function getCodVeterinario() { return $this->codVeterinario; }
    public function setCodVeterinario($codVeterinario) { $this->codVeterinario = $codVeterinario; }

    public function getCodAnimal() { return $this->codAnimal; }
    public function setCodAnimal($codAnimal) { $this->codAnimal = $codAnimal; }

    public function getDiagnostico() { return $this->diagnostico; }
    public function setDiagnostico($diagnostico) { $this->diagnostico = $diagnostico; }

    public function getTratamento() { return $this->tratamento; }
    public function setTratamento($tratamento) { $this->tratamento = $tratamento; }

    public function getData() { return $this->data; }
    public function setData($data) { $this->data = $data; }
  }

?>