<?php

class Classe
{

    public $nome = "5DIA";
    public $alunni = [];

    function __construct()
    {
        $i = 1;
        for ($j = 0; $j < 10; $j++) {
            $this->alunni[] = new Alunno("Nome" . $i, "Cognome" . $i, $i);
            $i++;
        }
    }

    public function stampaClasse()
    {
        $s = $this->nome . ":<br>";
        foreach ($this->alunni as $alunno) {
            $s .= $alunno->__toString();
            $s .= "<br>";
        }
        return $s;
    }
}
