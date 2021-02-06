<?php
class User{
    public $nume;
    public $prenume;

    function __construct($nume, $prenume){
        $this->nume = $nume;
        $this->prenume = $prenume;
    }

    function setNume($nume){
        $this->nume = $nume;
    }

    
    function getNume(){
        return $this->nume;
    }

    function setPrenume($prenume){
        $this->prenume = $prenume;
    }

    function getPrenume(){
        return $this->prenume;
    }
    
    function __toString()
    {
        return "Nume: ". $this->nume."</br>Prenume: ".$this->prenume;
    }
}

?>