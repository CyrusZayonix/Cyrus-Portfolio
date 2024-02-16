import java.time.LocalDate;
import java.time.Period;

public class Oefening1 {
    private String voornaam;
    private String achternaam;
    private LocalDate geboortedatum;

    public Oefening1(String voornaam, String achternaam, LocalDate geboortedatum) {
        this.voornaam = voornaam;
        this.achternaam = achternaam;
        this.geboortedatum = geboortedatum;
    }

    public int berekenLeeftijdInDagen() {
        LocalDate vandaag = LocalDate.now();
        Period verschil = Period.between(geboortedatum, vandaag);
        int leeftijdInDagen = verschil.getYears() * 365 + verschil.getMonths() * 30 + verschil.getDays();
        return leeftijdInDagen;
    }
    

    public static void main(String[] args) {
        // Voorbeeldgebruik
        LocalDate geboortedatum = LocalDate.of(1990, 5, 15);
        Oefening1 persoon = new Oefening1("John", "Doe", geboortedatum);
        
        int leeftijdInDagen = persoon.berekenLeeftijdInDagen();
        System.out.println(persoon.getVoornaam() + " " + persoon.getAchternaam() + " is " + leeftijdInDagen + " dagen oud.");
    }

    public String getVoornaam() {
        return voornaam;
    }

    public String getAchternaam() {
        return achternaam;
    }

    public LocalDate getGeboortedatum() {
        return geboortedatum;
    }
}