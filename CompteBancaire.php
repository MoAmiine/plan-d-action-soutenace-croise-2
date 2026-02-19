<?php 

class CompteBancaire {
    private string $titulaire;
    private float $solde;

    public function __construct(string $titulaire, float $solde = 0) {
        $this->titulaire = $titulaire;
        $this->solde = $solde;
    }

    public function deposer(float $montant): void {
        if ($montant > 0) {
            $this->solde += $montant;
        }
    }

    public function retirer(float $montant): bool {
        if ($montant > 0 && $this->solde >= $montant) {
            $this->solde -= $montant;
            return true;
        }
        return false;
    }

    public function getSolde(): float {
        return $this->solde;
    }

    public function afficherSolde(): string {
        return "Votre solde est : " . $this->solde;
    }
}

// $compte = new CompteBancaire("Amine", 500);
// echo $compte->afficherSolde();
// $compte->deposer(200.0);
// echo $compte->getSolde();
// $resultat = $compte->retirer(1000.0);
// var_dump($resultat);