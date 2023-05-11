import javax.swing.JFrame;
import javax.swing.JTabbedPane;
import javax.swing.JPanel;
import javax.swing.JComponent;
import javax.swing.JLabel;
import javax.swing.JList;
import javax.swing.JScrollPane;
import javax.swing.JComboBox;
import java.awt.TextField;
import javax.swing.JButton;
import java.awt.GridLayout;
import java.awt.FlowLayout;
import java.awt.BorderLayout;
import java.awt.event.KeyEvent;
import java.util.Objects;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener; 
import javax.swing.event.ListSelectionListener;
import java.util.ArrayList;
import javax.swing.DefaultListModel;
import java.awt.Dimension;


public class InterfaceGestion extends JFrame implements ActionListener {

	//Buttons
	JButton addBook = new JButton("Add");
	JButton addAccount = new JButton("Add");
	JButton addAuthor = new JButton("Add");
	JButton addGenre = new JButton("Add");
	JButton addReview = new JButton("Add");
	
	public InterfaceGestion() {
		super();
		this.setTitle("Interface gestion Mouthful Readers");
		this.setSize(1200, 600);
		this.setLocationRelativeTo(null);
		this.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
		
		//formulaires
		JPanel formBook = new JPanel();
		JPanel formAccount = new JPanel();
		JPanel formAuthor = new JPanel();
		JPanel formGenre = new JPanel();
		JPanel formReview = new JPanel();
		
		//formBook
		JPanel inputBookTitle = new JPanel();
		JPanel inputBookAuthor = new JPanel();
		JPanel inputBookImage = new JPanel();
		JPanel inputBookGenre = new JPanel();
		JPanel inputBookPlot = new JPanel();
		JPanel inputBookSales = new JPanel();
		JPanel inputBookRdate = new JPanel();
		JLabel promptBook = new JLabel("Add new book");
		JLabel promptBookTitle = new JLabel("Book title : ");
		JLabel promptBookAuthor = new JLabel("Book author : ");
		JLabel promptBookImage = new JLabel("Book image : ");
		JLabel promptBookGenre = new JLabel("Book genre : ");
		JLabel promptBookPlot = new JLabel("Book plot : ");
		JLabel promptBookSales = new JLabel("Book sales : ");
		JLabel promptBookRdate = new JLabel("Book release date : ");
		TextField textBookTitle = new TextField(40);
		TextField textBookAuthorName = new TextField(40);
		TextField textBookAuthorDate = new TextField(10);
		TextField textBookImage = new TextField(255);
		TextField textBookGenre = new TextField(40);
		TextField textBookPlot = new TextField(200);
		TextField textBookSales = new TextField(10);
		TextField textBookRdate = new TextField(10);
		
		inputBookTitle.setLayout(new FlowLayout());
		inputBookAuthor.setLayout(new FlowLayout());
		inputBookImage.setLayout(new FlowLayout());
		inputBookGenre.setLayout(new FlowLayout());
		inputBookPlot.setLayout(new FlowLayout());
		inputBookSales.setLayout(new FlowLayout());
		inputBookRdate.setLayout(new FlowLayout());
		formBook.setLayout(new GridLayout(9, 1));
		
		inputBookTitle.add(promptBookTitle);
		inputBookTitle.add(textBookTitle);
		inputBookAuthor.add(promptBookAuthor);
		inputBookAuthor.add(textBookAuthorName);
		inputBookAuthor.add(textBookAuthorDate);
		inputBookImage.add(promptBookImage);
		inputBookImage.add(textBookImage);
		inputBookGenre.add(promptBookGenre);
		inputBookGenre.add(textBookGenre);
		inputBookPlot.add(promptBookPlot);
		inputBookPlot.add(textBookPlot);
		inputBookSales.add(promptBookSales);
		inputBookSales.add(textBookSales);
		inputBookRdate.add(promptBookRdate);
		inputBookRdate.add(textBookRdate);
		formBook.add(promptBook);
		formBook.add(inputBookTitle);
		formBook.add(inputBookAuthor);
		formBook.add(inputBookImage);
		formBook.add(inputBookGenre);
		formBook.add(inputBookPlot);
		formBook.add(inputBookSales);
		formBook.add(inputBookRdate);
		formBook.add(addBook);
		
		
		//formAccount
		JPanel inputAccountName = new JPanel();
		JPanel inputAccountDescription = new JPanel();
		JPanel inputAccountVisibility = new JPanel();
		JPanel inputAccountPassword = new JPanel();
		JPanel inputAccountAuthor = new JPanel();
		JLabel promptAccount = new JLabel("Add new account");
		JLabel promptAccountName = new JLabel("Account name : ");
		JLabel promptAccountDescription = new JLabel("Account description : ");
		JLabel promptAccountVisibility = new JLabel("Account visibility ('private' or 'public') : ");
		JLabel promptAccountPassword = new JLabel("Account Password : ");
		JLabel promptAccountAuthor = new JLabel("Account author : ");
		TextField textAccountName = new TextField(40);
		TextField textAccountDescription = new TextField(200);
		TextField textAccountVisibility = new TextField(20);
		TextField textAccountPassword = new TextField(200);
		TextField textAccountAuthorName = new TextField(40);
		TextField textAccountAuthorDate = new TextField(10);
		
		inputAccountName.setLayout(new FlowLayout());
		inputAccountDescription.setLayout(new FlowLayout());
		inputAccountVisibility.setLayout(new FlowLayout());
		inputAccountPassword.setLayout(new FlowLayout());
		inputAccountAuthor.setLayout(new FlowLayout());
		formAccount.setLayout(new GridLayout(7, 1));
		
		inputAccountName.add(promptAccountName);
		inputAccountName.add(textAccountName);
		inputAccountDescription.add(promptAccountDescription);
		inputAccountDescription.add(textAccountDescription);
		inputAccountVisibility.add(promptAccountVisibility);
		inputAccountVisibility.add(textAccountVisibility);
		inputAccountPassword.add(promptAccountPassword);
		inputAccountPassword.add(textAccountPassword);
		inputAccountAuthor.add(promptAccountAuthor);
		inputAccountAuthor.add(textAccountAuthorName);
		inputAccountAuthor.add(textAccountAuthorDate);
		formAccount.add(promptAccount);
		formAccount.add(inputAccountName);
		formAccount.add(inputAccountDescription);
		formAccount.add(inputAccountVisibility);
		formAccount.add(inputAccountPassword);
		formAccount.add(inputAccountAuthor);
		formAccount.add(addAccount);
		
		
		//formAuthor
		JPanel inputAuthorName = new JPanel();
		JPanel inputAuthorDescription = new JPanel();
		JPanel inputAuthorBirthdate = new JPanel();
		JLabel promptAuthor = new JLabel("Add new author");
		JLabel promptAuthorName = new JLabel("Author name : ");
		JLabel promptAuthorDescription = new JLabel("Author description : ");
		JLabel promptAuthorBirthdate = new JLabel("Author birthdate : ");
		TextField textAuthorName =  new TextField(40);
		TextField textAuthorDescription =  new TextField(200);
		TextField textAuthorBirthdate =  new TextField(10);
		
		inputAuthorName.setLayout(new FlowLayout());
		inputAuthorDescription.setLayout(new FlowLayout());
		inputAuthorBirthdate.setLayout(new FlowLayout());
		formAuthor.setLayout(new GridLayout(5, 1));
		
		inputAuthorName.add(promptAuthorName);
		inputAuthorName.add(textAuthorName);
		inputAuthorDescription.add(promptAuthorDescription);
		inputAuthorDescription.add(textAuthorDescription);
		inputAuthorBirthdate.add(promptAuthorBirthdate);
		inputAuthorBirthdate.add(textAuthorBirthdate);
		formAuthor.add(promptAuthor);
		formAuthor.add(inputAuthorName);
		formAuthor.add(inputAuthorDescription);
		formAuthor.add(inputAuthorBirthdate);
		formAuthor.add(addAuthor);
				
		
		//formGenre
		JPanel inputGenreName = new JPanel();
		JPanel inputGenreDescription = new JPanel();
		JLabel promptGenre = new JLabel("Add new genre");
		JLabel promptGenreName = new JLabel("Genre name : ");
		JLabel promptGenreDescription = new JLabel("Genre description : ");
		TextField textGenreName = new TextField(40);
		TextField textGenreDescription = new TextField(200);
		
		inputGenreName.setLayout(new FlowLayout());
		inputGenreDescription.setLayout(new FlowLayout());
		formGenre.setLayout(new GridLayout(4, 1));
		
		inputGenreName.add(promptGenreName);
		inputGenreName.add(textGenreName);
		inputGenreDescription.add(promptGenreDescription);
		inputGenreDescription.add(textGenreDescription);
		formGenre.add(promptGenre);
		formGenre.add(inputGenreName);
		formGenre.add(inputGenreDescription);
		formGenre.add(addGenre);
		
				
		//formReview
		TextField textReviewUsername = new TextField();
		TextField textReviewBookID = new TextField();
		TextField textReviewRating = new TextField();
		TextField textReviewContent = new TextField();
		TextField textReviewDate = new TextField();
		//pas fait
		
		
		//tabbed pane
		JTabbedPane tabbedPane = new JTabbedPane();

		tabbedPane.addTab("Book", formBook);
		tabbedPane.setMnemonicAt(0, KeyEvent.VK_1);
		
		tabbedPane.addTab("Account", formAccount);
		tabbedPane.setMnemonicAt(1, KeyEvent.VK_2);

		tabbedPane.addTab("Author", formAuthor);
		tabbedPane.setMnemonicAt(2, KeyEvent.VK_3);
		
		tabbedPane.addTab("Genre", formGenre);
		tabbedPane.setMnemonicAt(2, KeyEvent.VK_4);
		
		tabbedPane.addTab("Review", formReview);
		tabbedPane.setMnemonicAt(2, KeyEvent.VK_5);
		
		this.setContentPane(tabbedPane);
		
		addBook.addActionListener(this);
		addAccount.addActionListener(this);
		addAuthor.addActionListener(this);
		addGenre.addActionListener(this);
		addReview.addActionListener(this);
		
		
		this.setVisible(true);
	}
	
	public void actionPerformed(ActionEvent arg0) {
		if(arg0.getSource() == addBook) {
			//code d'ajout de livre
		} else if(arg0.getSource() == addAccount) {
			//code d'ajout de compte
		} else if(arg0.getSource() == addAuthor) {
			//code d'ajout d'auteur
		} else if(arg0.getSource() == addGenre) {
			//code d'ajout de genre
		} else if(arg0.getSource() == addReview) {
			//code d'ajout de revue
		}
	}
	
}
