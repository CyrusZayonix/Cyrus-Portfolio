package EindOpdrachten.Eindopdracht2;
import java.sql.*;
import java.util.ArrayList;
import java.util.List;

public class PersoonDao {
    private Connection connection;

    public PersoonDao(Connection connection) {
        this.connection = connection;
    }

    public void voegPersoonToe(Persoon persoon) {
        String query = "INSERT INTO personen (voornaam, achternaam) VALUES (?, ?)";
        try (PreparedStatement preparedStatement = connection.prepareStatement(query)) {
            preparedStatement.setString(1, persoon.getVoornaam());
            preparedStatement.setString(2, persoon.getAchternaam());
            preparedStatement.executeUpdate();
        } catch (SQLException e) {
            e.printStackTrace();
        }
    }

    public List<Persoon> haalAllePersonenOp() {
        List<Persoon> personen = new ArrayList<>();
        String query = "SELECT * FROM personen";
        try (Statement statement = connection.createStatement();
             ResultSet resultSet = statement.executeQuery(query)) {
            while (resultSet.next()) {
                String voornaam = resultSet.getString("voornaam");
                String achternaam = resultSet.getString("achternaam");
                personen.add(new Persoon(voornaam, achternaam));
            }
        } catch (SQLException e) {
            e.printStackTrace();
        }
        return personen;
    }
}
