<?php

class Voiture
{

    private string $marque;
    private string $modele;
    private float $kilometrage;

    public function __construct($marque, $modele, $kilometrage)
    {
        $this->marque = $marque;
        $this->modele = $modele;
        $this->kilometrage = $kilometrage;
    }

    public function decrire()
    {
        return $this->marque . '' . $this->modele . '-' . $this->kilometrage;
    }
}

class VoitureElectrique extends Voiture
{
    private float $autonomieKm;

    public function __construct($marque, $modele, $kilometrage, $autonomieKm)
    {
        parent::__construct($marque, $modele, $kilometrage);
        $this->autonomieKm = $autonomieKm;
    }

    public function decrire()
    {
        return parent::decrire() . '|' . 'Electrique' . '|' . 'Autonomie : ' . $this->autonomieKm;
    }
}


    $v1 = new Voiture("Toyota", "Yaris", 15000);
    echo $v1->decrire();

    $v2 = new VoitureElectrique("Tesla", "Model 3", 5000, 400);
    echo $v2->decrire();
