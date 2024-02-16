<?php

    class Huis {
        
    private $straatnaam;
    private $huisnummer;
    private $plaats;
    private $aantalKamers;
    private $aantalToiletten;
    private $verwarming;
    private $soortVerwarming;
    private $vierkanteMeters;
    private $wozWaarde;

    public function __construct($straatnaam, $huisnummer, $plaats) {
        $this->straatnaam = $straatnaam;
        $this->huisnummer = $huisnummer;
        $this->plaats = $plaats;
    }

    // Getters and setters for other properties
    public function getAantalKamers() {
        return $this->aantalKamers;
    }

    public function setAantalKamers($aantalKamers) {
        $this->aantalKamers = $aantalKamers;
    }

    
    public function getWozWaarde() {
        return $this->wozWaarde;
    }

    public function setWozWaarde($wozWaarde) {
        $this->wozWaarde = $wozWaarde;
    }

    // Add getters and setters for other properties similarly

    public function berekenBelasting() {
        $belasting = 0;

        if ($this->wozWaarde < 100000) {
            $belasting += 600;
        } elseif ($this->wozWaarde >= 100000 && $this->wozWaarde <= 200000) {
            $belasting += 2000;
        } else {
            $belasting += 6000;
        }

        if ($this->aantalKamers == 1) {
            $belasting += 100;
        } elseif ($this->aantalKamers == 2) {
            $belasting += 300;
        } elseif ($this->aantalKamers > 3) {
            $belasting += 800;
        }

        if (in_array($this->plaats, ["Amsterdam", "Rotterdam", "Groningen"])) {
            $belasting += 1000;
        }

        return $belasting;
    }

    public function toonGegevens() {
        echo "Straatnaam: " . $this->straatnaam . "<br>";
        echo "Huisnummer: " . $this->huisnummer . "<br>";
        echo "Plaats: " . $this->plaats . "<br>";
        // Add other property details here
    }
}

// Example usage of the Huis class
$huis = new Huis("Hoofdstraat", "123", "Amsterdam");
$huis->setWozWaarde(150000);
$huis->setAantalKamers(3);

echo "Belasting: " . $huis->berekenBelasting() . " euro<br>";
$huis->toonGegevens();
?>