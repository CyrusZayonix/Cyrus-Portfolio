public class oefening6 {
    //main string aanmaken
    public static int countChar(String input, char targetChar) {
        int count = 0;
    // we maken hier gebruik van het If else statement 
        for (int i = 0; i < input.length(); i++) {
            if (input.charAt(i) == targetChar) {
                count++;
            }
        }
        return count;
    }
}

    
