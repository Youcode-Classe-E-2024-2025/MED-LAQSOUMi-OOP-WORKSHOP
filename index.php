<?php
class Personne {
    protected $prenom;
    protected $nomDeFamille;

    public function __construct($prenom, $nomDeFamille) {
        $this->prenom = $prenom;
        $this->nomDeFamille = $nomDeFamille;
    }

    public function afficherIdentite() {
        return $this->prenom . ' ' . $this->nomDeFamille;
    }
}

class Client extends Personne {
    public $horaireRendezVous;

    public function reserverRendezVous($date) {
        $this->horaireRendezVous = $date;
    }
}

class Consultant extends Personne {
    public $specialisation;

    public function programmerConsultation($patient) {
        return "Consultation programmée avec " . $patient->afficherIdentite();
    }
}

$client = new Client("MED", "LAQ");
$client->reserverRendezVous("2025-01-01");

$consultant = new Consultant("Dr.", "HADRAMI");
$consultant->specialisation = "Dentist";

echo $client->afficherIdentite();
echo PHP_EOL;
echo $consultant->programmerConsultation($client);

?>