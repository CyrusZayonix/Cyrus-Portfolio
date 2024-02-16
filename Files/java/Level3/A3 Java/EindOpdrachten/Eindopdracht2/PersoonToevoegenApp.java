package EindOpdrachten.Eindopdracht2;

import javax.swing.*;
import java.awt.*;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;
import java.sql.Connection;
import java.util.List;


public class PersoonToevoegenApp extends JFrame {
    private DefaultListModel<Persoon> persoonListModel;
    private JList<Persoon> persoonJList;
    private JTextField voornaamField;
    private JTextField achternaamField;
    private DatabaseConnector databaseConnector;
    private PersoonDao persoonDao;

    public PersoonToevoegenApp() {
        setTitle("Persoon Toevoegen App");
        setSize(400, 300);
        setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);

        databaseConnector = new DatabaseConnector();
        Connection connection = databaseConnector.getConnection();
        persoonDao = new PersoonDao(connection);

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
                    persoonDao.voegPersoonToe(persoon);
                    voornaamField.setText("");
                    achternaamField.setText("");
                    vernieuwPersoonLijst();
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
        vernieuwPersoonLijst();
    }

    private void vernieuwPersoonLijst() {
        persoonListModel.clear();
        List<Persoon> personen = persoonDao.haalAllePersonenOp();
        for (Persoon persoon : personen) {
            persoonListModel.addElement(persoon);
        }
    }

    public static void main(String[] args) {
        SwingUtilities.invokeLater(new Runnable() {
            public void run() {
                new PersoonToevoegenApp();
            }
        });
    }
} 

