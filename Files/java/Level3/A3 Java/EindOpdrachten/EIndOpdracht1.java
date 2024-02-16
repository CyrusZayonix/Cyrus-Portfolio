package EindOpdrachten;
import javax.swing.*;
import java.awt.*;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;
import java.util.ArrayList;
import java.util.Collections;

public class EIndOpdracht1 extends JFrame {
    private ArrayList<String> kaarten;
    private JButton[] knoppen;
    private int openKaarten = 0;
    private int eersteGedraaid = -1;
    private int tweedeGedraaid = -1;

    public EIndOpdracht1() {
        setTitle("Memory Spelletje door Cyrus");
        setSize(600, 600); // Increase the window size
        setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);

        kaarten = new ArrayList<>();
        // Add card pairs (4 pairs for a 4x4 game)
        kaarten.add("A");
        kaarten.add("A");
        kaarten.add("B");
        kaarten.add("B");
        kaarten.add("C");
        kaarten.add("C");
        kaarten.add("D");
        kaarten.add("D");
        kaarten.add("E");
        kaarten.add("E");
        kaarten.add("F");
        kaarten.add("F");
        kaarten.add("G");
        kaarten.add("G");
        kaarten.add("H");
        kaarten.add("H");

        Collections.shuffle(kaarten);

        knoppen = new JButton[16]; // Increase the number of buttons to 16 for a 4x4 game
        setLayout(new GridLayout(4, 4)); // Use a 4x4 grid layout

        for (int i = 0; i < 16; i++) {
            JButton knop = new JButton("Kaart " + i);
            final int index = i;
            knop.addActionListener(new ActionListener() {
                public void actionPerformed(ActionEvent e) {
                    draaiKaartOm(index);
                }
            });
            knoppen[i] = knop;
            add(knop);
        }

        setVisible(true);
    }

    private void draaiKaartOm(int index) {
        if (openKaarten == 2) {
            // Wacht even voordat we de kaarten weer omdraaien
            try {
                Thread.sleep(1000);
            } catch (InterruptedException e) {
                e.printStackTrace();
            }
            knoppen[eersteGedraaid].setText("Kaart " + eersteGedraaid);
            knoppen[tweedeGedraaid].setText("Kaart " + tweedeGedraaid);
            openKaarten = 0;
        }

        if (openKaarten == 0) {
            knoppen[index].setText(kaarten.get(index));
            eersteGedraaid = index;
            openKaarten = 1;
        } else if (openKaarten == 1) {
            knoppen[index].setText(kaarten.get(index));
            tweedeGedraaid = index;
            openKaarten = 2;

            if (kaarten.get(eersteGedraaid).equals(kaarten.get(tweedeGedraaid))) {
                // De kaarten zijn een match!
                knoppen[eersteGedraaid].setEnabled(false);
                knoppen[tweedeGedraaid].setEnabled(false);
                openKaarten = 0;
            }
        }
    }

    public static void main(String[] args) {
        SwingUtilities.invokeLater(new Runnable() {
            public void run() {
                new EIndOpdracht1();
            }
        });
    }
}
