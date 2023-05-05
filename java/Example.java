import java.sql.Connection;
 
import java.sql.Statement;
 
import java.sql.DriverManager;
 
import java.sql.ResultSet;
 
import java.sql.ResultSetMetaData;
 
import java.sql.SQLException;

 
 
public class Example {
 
	 
    public static void main(String[] args) {
        Connection conn = null;
        try {
            // Chargement du driver JDBC
            Class.forName("com.mysql.cj.jdbc.Driver");

            // Connexion à la base de données
            String url = "jdbc:mysql://localhost:3306/test";
            String user = "root";
            String password = "";

            conn = DriverManager.getConnection(url, user, password);

            // Création de la table _user
           Statement stmt = conn.createStatement();
           String sql = "DROP TABLE IF EXISTS account;";
           stmt.executeUpdate(sql);
           
           sql = "CREATE TABLE account " +
                    "(id_account INTEGER not NULL PRIMARY KEY, " +
                    " description VARCHAR(255), " +
                    " visibility BOOLEAN " +
                    " );";            
            stmt.executeUpdate(sql);
            System.out.println("Table account créée avec succès !");
            
            // Création de la table book
            sql = "DROP TABLE IF EXISTS book;" ;
            stmt.executeUpdate(sql);

            sql = "CREATE TABLE book " +
                    "(id_book INTEGER not NULL PRIMARY KEY, " +
                    " title VARCHAR(255) " +
                    " );" ;
            stmt.executeUpdate(sql);
            System.out.println("Table book créée avec succès !");
            
            
            // Création de la table comment
            sql = "DROP TABLE IF EXISTS comment;";
            stmt.executeUpdate(sql);
            
            sql = "CREATE TABLE comment " +
                    "(id_account INTEGER not NULL, " +
                    " id_book INTEGER not NULL, " +
                    " CONSTRAINT FOREIGN KEY (id_account) REFERENCES account(id_account), " +
                    " CONSTRAINT FOREIGN KEY (id_book) REFERENCES book(id_book));";
            stmt.executeUpdate(sql);
            System.out.println("Table comment créée avec succès !");
            
            stmt.close();
        } catch (ClassNotFoundException e) {
            System.out.println("Erreur lors du chargement du driver JDBC : " + e.getMessage());
        } catch (SQLException e) {
            System.out.println(e.getMessage());
        } finally {
            // Fermeture de la connexion
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
