public class oefening3 {
    public static void main(String[] args) {
        String osInfo = getOsInfo();
        // Nu Printen we het
        System.out.println("Besturingssysteem: " + osInfo);
    }
        // Hier retriven we het code
        public static String getOsInfo() {
            String osName = System.getProperty("os.name");
            String osVersion = System.getProperty("os.version");
            String osArch = System.getProperty("os.arch");
            //returning alles en exit
            return osName + " " + osVersion + " " + osArch;
        
    
    
    }
}

