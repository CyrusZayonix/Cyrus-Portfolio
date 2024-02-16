import javax.swing.*;
import java.awt.*;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;
import java.util.ArrayList;

public class PersoonToevoegenApp extends JFrame {
    private DefaultListModel<Persoon> persoonListModel;
    private JList<Persoon> persoonJList;
    private JTextField voornaamField;
    private JTextField achternaamField;

    public PersoonToevoegenApp() {
        setTitle("Persoon Toevoegen App");
        setSize(400, 300);
        setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);

        persoonListModel = new DefaultListModel<>();
        persoonJList = new JList<>(persoonListModel);

        voornaamField = new JTextField(20);
        achternaamField = new JTextField(20);

        JButton toevoegenButton = new JButton("Toevoegen");
        toevoegenButton.addActionListener(new ActionListener() {
            public void actionPerformed(ActionEvent e) {
                String voornaam = voornaamField.getText();
                String achternaam = achternaamField.getText();

                if (!voornaam.isEmpty() && !achternaam.isEmpty()) {
                    Persoon persoon = new Persoon(voornaam, achternaam);
                    persoonListModel.addElement(persoon);
                    voornaamField.setText("");
                    achternaamField.setText("");
                }
            }
        });

        JPanel inputPanel = new JPanel(new GridLayout(2, 2));
        inputPanel.add(new JLabel("Voornaam:"));
        inputPanel.add(voornaamField);
        inputPanel.add(new JLabel("Achternaam:"));
        inputPanel.add(achternaamField);

        JPanel mainPanel = new JPanel(new BorderLayout());
        mainPanel.add(new JScrollPane(persoonJList), BorderLayout.CENTER);
        mainPanel.add(inputPanel, BorderLayout.SOUTH);
        mainPanel.add(toevoegenButton, BorderLayout.NORTH);

        add(mainPanel);
        setVisible(true);
    }

    public static void main(String[] args) {
        SwingUtilities.invokeLater(new Runnable() {
            public void run() {
                new PersoonToevoegenApp();
            }
        });
    }
}

class Persoon {
    private String voornaam;
    private String achternaam;

    public Persoon(String voornaam, String achternaam) {
        this.voornaam = voornaam;
        this.achternaam = achternaam;
    }

    public String getVolledigeNaam() {
        return voornaam + " " + achternaam;
    }

    @Override
    public String toString() {
        return getVolledigeNaam();
    }
}
