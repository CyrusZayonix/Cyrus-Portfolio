import java.util.Scanner;

public class TextAdventure {
    // map setup
    final int WATER = 1;
    final int GRASS = 2;
    final int ROCK = 3;

    int[][] map = {
        { 1, 1, 1 ,1 ,1 ,1 }, 
        { 1, 2, 2, 2, 2 ,1 }, 
        { 1, 2, 2, 2, 2 ,1 }, 
        { 1, 2, 2, 2, 2 ,1 }, 
        { 1, 3, 2, 2, 2 ,1 }, 
        { 1, 1, 1, 1, 1 ,1 },         
    };
    
    // player setup
    int playerRow; // Row of the player 
    int playerCol; // Column of the player
    
    public static void main(String args[]) {  
        TextAdventure ta = new TextAdventure();
        ta.init();
        ta.mainLoop();  
    }
    
    public void init() {
        System.out.println("Welcome to the game!");
        playerRow = 0; // Initialize playerRow to 0
        playerCol = 0; // Initialize playerCol to 0
    }

    // mainloop
    public void mainLoop() {
        Scanner scanner = new Scanner(System.in);
        String input; 
                
        while (true) {
            System.out.print(">");
            input = scanner.nextLine();            
            if (input.equals("stop")) {
                break;
            } else if (input.equals("map")) {
                printMap();
                describeRoom();
            } else {
                executeInput(input);
            }
        }
        scanner.close();
    }

    public void describeRoom() {
        String reply = "You are ";
        
        switch (map[playerRow][playerCol]) {
            case WATER: 
                reply += "in the water, I hope you can swim!"; 
                break;
            case GRASS: 
                reply += "in the grass." ; 
                break;
            case ROCK: 
                reply += "on a rock.";
                break;
            default:
                break;
        }
        
        System.out.println(reply);
    }
    
    public void executeInput(String input) {
        if (input.equalsIgnoreCase("n") || input.equalsIgnoreCase("north")) {
            if (playerRow > 0) {
                playerRow--;
                describeRoom();
                return;
            } else {
                System.out.println("You cannot go north anymore.");
                return;
            }
        } else if (input.equalsIgnoreCase("s") || input.equalsIgnoreCase("south")) {
            if (playerRow < map.length - 1) {
                playerRow++;
                describeRoom();
                return;
            } else {
                System.out.println("You cannot go south anymore.");
                return;
            }
        } else if (input.equalsIgnoreCase("e") || input.equalsIgnoreCase("east")) {
            if (playerCol < map[0].length - 1) {
                playerCol++;
                describeRoom();
                return;
            } else {
                System.out.println("You cannot go east anymore.");
                return;
            }
        } else if (input.equalsIgnoreCase("w") || input.equalsIgnoreCase("west")) {
            if (playerCol > 0) {
                playerCol--;
                describeRoom();
                return;
            } else {
                System.out.println("You cannot go west anymore.");
                return;
            }
        } else if (input.equalsIgnoreCase("help")) {
            System.out.println("Commands: n - go north, s - go south, e - go east, w - go west, stop - end the game, map - Show map, * - Your position is shown with a *");
        }
    
        System.out.println("What do you mean?");
    }
    
    public void printMap() {
        for (int i = 0; i < map.length; i++) {
            for (int j = 0; j < map[i].length; j++) {
                if (i == playerRow && j == playerCol) {
                    System.out.print(map[i][j] + "* ");
                } else {
                    System.out.print(map[i][j] + " ");
                }
            }
            System.out.println();
        }
    }
}