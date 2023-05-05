import java.util.*;
import java.sql.*;

public class Book {
    private String name;
    private String description;

    public Book(String name, String description) {
        this.name = name;
        this.description = description;
    }
    
    public Book(String name, String description, Connection conn) {
        this.name = name;
        this.description = description;
        
        this.sendToDB(conn);
    }
    
    
    public void sendToDB(Connection conn) {
	    try {
	        PreparedStatement stmt = conn.prepareStatement("INSERT INTO genre (name, description) VALUES (?, ?)");
	        stmt.setString(1, this.name);
	        stmt.setString(2, this.description);
	        stmt.executeUpdate();
	        
	    } catch (SQLException e) {
	        e.printStackTrace();
	    }
    }
}