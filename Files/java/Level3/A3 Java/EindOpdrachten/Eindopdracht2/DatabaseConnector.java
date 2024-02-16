package EindOpdrachten.Eindopdracht2;
import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.SQLException;

public class DatabaseConnector {
    private Connection connection;

    public DatabaseConnector() {
        try {
            // Verander de onderstaande gegevens naar je eigen database-instellingen
            String jdbcUrl = "jdbc:mysql://localhost:3306/your_database_name";
            String username = "your_username";
            String password = "your_password";

            connection = DriverManager.getConnection(jdbcUrl, username, password);
            System.out.println("Databaseverbinding geslaagd!");
        } catch (SQLException e) {
            e.printStackTrace();
        }
    }

    public Connection getConnection() {
        return connection;
    }

    public void closeConnection() {
        try {
            if (connection != null) {
                connection.close();
                System.out.println("Databaseverbinding gesloten.");
            }
        } catch (SQLException e) {
            e.printStackTrace();
        }
    }
}
