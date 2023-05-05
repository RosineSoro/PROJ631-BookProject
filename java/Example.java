import java.sql.*;

public class Example {
 
	 
    public static void main(String[] args) {
        Connection conn = null;
		try {
		    // Chargement du driver JDBC :
			Class.forName("com.mysql.cj.jdbc.Driver");
			
			// Connexion à la base de données :
			String url = "jdbc:mysql://localhost:3306/test";
			String user = "root";
			String password = "";
			
			conn = DriverManager.getConnection(url, user, password);
			
			Account srh = new Account("srh", "", null, "password", conn);
			
        } catch (ClassNotFoundException e) {
            System.out.println("Erreur lors du chargement du driver JDBC : " + e.getMessage());
        } catch (SQLException e) {
            System.out.println(e.getMessage());
        } finally {
            // Fermeture de la connexion :
            try {
                if (conn != null) {
                    conn.close();
                }
            } catch (SQLException e) {
                System.out.println("Erreur lors de la fermeture de la connexion : " + e.getMessage());
            }
        }
    }

}
