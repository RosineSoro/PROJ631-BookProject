
import java.sql.*;
import java.util.*;

public class Account {
    private String username;
    private String description;
    private String visibility;
    private String password;
    private HashMap<String, Genre> interest = new HashMap<String, Genre>();
    private HashMap<String, Book> wantRead = new HashMap<String, Book>();
    private HashMap<String, Book> reading = new HashMap<String, Book>();


    public Account(String username, String description, String visibility, String password) {
        this.username = username;
        this.description = description;
        this.visibility = visibility;
        this.password = password;
    }
    
    public Account(String username, String description, String visibility, String password, Connection conn) {
        this.username = username;
        this.description = description;
        this.visibility = visibility;
        this.password = password;
        
        this.sendToDB(conn);
    }
    
    
    public void sendToDB(Connection conn) {
	    try {
	        PreparedStatement stmt = conn.prepareStatement("INSERT INTO account (username, description, visibility, password) VALUES (?, ?, ?, ?)");
	        stmt.setString(1, this.username);
	        stmt.setString(2, this.description);
	        stmt.setString(3, this.visibility);
	        stmt.setString(4, this.password);
	        stmt.executeUpdate();
	        
	        System.out.println("Account sent to DB!");
	        
	    } catch (SQLException e) {
	        e.printStackTrace();
	    }
	    
    }
}