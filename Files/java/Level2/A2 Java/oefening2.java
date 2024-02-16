// Hier voegen wij 'java.util.Calendar' aan java
import java.util.Calendar;

public class oefening2{
    // Mainstring aanmaken
    public static void main(String[] args){
    //hier gebruiken we if else statement en printen we de volgende texten. Als het vandaag een even dag is 
    // printen we "Dit is een even dag" else printen we"Dit is een oneven dag".
        if(evenDag()){
            System.out.println("Dit is een even dag");
        } else {
            System.out.println("Dit is een oneven dag");
        }

        System.out.println(evenDag()?"EVEN":"ONEVEN");
    
    }
    public static boolean evenDag() {
        Calendar cal = Calendar.getInstance();
        int dagVanMaand = cal.get(Calendar.DAY_OF_MONTH);
        return dagVanMaand % 2 == 0; 
    }

}