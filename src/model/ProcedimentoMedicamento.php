<?php 

class ProcedimentoMedicamento {
    private $cod;
    private $codProcedimento;
    private $codMedicamento;
    private $dosagem;

    public function getCod() { return $this->cod; }
    public function setCod($cod) { $this->cod = $cod; }

    public function getCodProcedimento() { return $this->codProcedimento; }
    public function setCodProcedimento($codProcedimento) { $this->codProcedimento = $codProcedimento; }

    public function getCodMedicamento() { return $this->codMedicamento; }
    public function setCodMedicamento($codMedicamento) { $this->codMedicamento = $codMedicamento; }

    public function getDosagem() { return $this->dosagem; }
    public function setDosagem($dosagem) { $this->dosagem = $dosagem; }
  }

?>