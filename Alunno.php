<?php
class Alunno implements JsonSerializable
{
    protected $nome;
    protected $cognome;
    protected $eta;

    public function __construct($nome, $cognome, $eta)
    {
        $this->nome = $nome;
        $this->cognome = $cognome;
        $this->eta = $eta;
    }

    public function jsonSerialize(){
        $a = [
            "nome" => $this->nome,
            "cognome" => $this->cognome,
            "eta" => $this->eta
        ];
        return $a;
    }

    function setNome($nome)
    {
        $this->nome = $nome;
    }

    function getNome()
    {
        return $this->nome;
    }

    function setCognome($cognome)
    {
        $this->cognome = $cognome;
    }

    function getCognome()
    {
        return $this->cognome;
    }

    function setEta($eta)
    {
        $this->eta = $eta;
    }

    function getEta()
    {
        return $this->eta;
    }
    
    function __toString()
    {
        return "<ul><li>" . $this->nome . "</li><li>" . $this->cognome . "</li><li>" . $this->eta . "</li></ul>";
    }
}
