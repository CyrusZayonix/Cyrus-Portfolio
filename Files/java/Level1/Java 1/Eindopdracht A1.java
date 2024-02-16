
	import java.util.Random;
	
	public class Eindopdracht_java {
	    public static void main(String[] args) {
	    	
	        /*
	         * ALLES VARIABELEN AANMAKEN
	         * */

	     
	    	// lees het aantal rijen en kolommen uit de argumenten
	        int rows = Integer.parseInt(args[0]);
	        int cols = Integer.parseInt(args[1]);

	        // maak een array om de waarden op te slaan
	        int[][] values = new int[rows][cols];
	        int[] max = new int[cols];
	        int[] min = new int[cols];

	        // maak een random-object om willekeurige getallen te genereren
	        Random random = new Random();

	        /*
	         * ALLES VULLEN / BEREKENEN
	         * */

	        // voor elke rij en kolom, sla een willekeurig getal op in de array
	        for (int r = 0; r < rows; r++) {
	            for (int c = 0; c < cols; c++) {
	                values[r][c] = random.nextInt(100) + 1;
	            }
	        }
	        
	        for (int c = 0; c < cols; c++) {
	        	max[c] = values[0][c];
	        	for(int r = 0; r < rows; r++) {
	        		if(values[r][c]> max[c]) {
	        			max[c] = values[r][c];
	        		}
	        	}
	        }
	        
	        // berekenen min
	        for (int c = 0; c < cols; c++) {
	        	min[c] = values[0][c];
	        	for(int r = 0; r < rows; r++) {
	        		if(values[r][c]< min[c]) {
	        			min[c] = values[r][c];
	        		}
	        	}
	        }
	       
	        
	        /*
	         * ALLES PRINTEN
	         * */
	    
	        
	        // print de tabel
	        for (int i = 0; i < rows; i++) {
	            // bewaar de som van de waarden in de rij
	            int sum = 0;
	            System.out.print(i + "\t");
	            for (int j = 0; j < cols; j++) {
	                // print de waarde met een tab als scheiding
	                System.out.print(values[i][j] + "\t");

	                // voeg de waarde toe aan de som
	                sum += values[i][j];
	            }

	            // bereken het gemiddelde van de waarden in de rij
	            double average = (double) sum / cols;

	            // print het gemiddelde na de waarden in de rij
	            System.out.println(average);
	        }

	        // print een scheidingsregel
	        System.out.println("------------------");

	        // print de kopjes voor de minimale en maximale waarden
	        System.out.print("max\t");
	        
	        for(int c = 0; c < cols; c++) {
	        	System.out.print(max[c] + "\t");
	        	
	        }
	        System.out.println();
	        System.out.print("min\t");
	        
	        for(int c = 0; c < cols; c++) {
	        	System.out.print(min[c] + "\t");
	        	
	        }
  
  
	    }
	    
}           
	                
	            
	                
	            

	            
	           
	            

	        
