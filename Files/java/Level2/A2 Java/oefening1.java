public class oefening1 {
    
      // main string aanmaken
     public static void main(String[] args){
        //print vierkant
        System.out.println(maakVierkant());

    }

    public static String maakVierkant() {
        String vierkant = "";
        //door forloop te gebruiken maken wij de horizontale en verticale plusjes
        for (int r = 0; r < 5; r++) {
            for (int k = 0; k < 5; k++) {
                //we geven + een waarde
                vierkant += "+";

            }
            // wij updaten de vierkant
            vierkant += "\n";
            
        }
        //returnig de vierkant en exiting
        return vierkant;    
    }
}
