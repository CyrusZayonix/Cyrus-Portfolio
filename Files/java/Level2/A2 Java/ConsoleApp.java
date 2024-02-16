public class ConsoleApp {
    //Mainstring aanmaken
    public static void main(String[] args) {
        int dobbel;
        //Geef value aan dobbel
        dobbel = gooiDobbelsteen();
        //Print alles
        System.out.println(dobbel);
    }
    
    //
    private static int gooiDobbelsteen() {
        return (int) (1 + 6 * Math.random());

    }
}