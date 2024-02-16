    public class oefening4 {
            public static void main(String[] args) {
                //groote van zeven
                String vierkant = maakVierkant(7); 
                // print vierkant
                System.out.println(vierkant);
            }
            
            public static String maakVierkant(int grootte) {
                String vierkant = "";
                for (int i = 0; i < grootte; i++) {
                    for (int j = 0; j < grootte; j++) {
                        vierkant += "+";
                    }
                //                                                                                                            
                    vierkant += "\n";
                }
                // return en exit de vierkant
                return vierkant;
            
            }
        }
