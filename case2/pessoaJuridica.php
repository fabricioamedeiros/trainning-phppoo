<?php
require 'pessoa.php';

class PessoaJuridica extends Pessoa{
    public function __construct($id, $documento)
    {
        // propriedade protected
        $this->id = $id;
        $this->documento = $documento;
    }

    public function obterid(){
        $this->id = 10;
        return $id;
    }
        
}
?>