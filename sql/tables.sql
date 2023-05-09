/** Table Account **/

DROP TABLE IF EXISTS account;
CREATE TABLE account (
	id_acc int(10) PRIMARY KEY NOT NULL AUTO_INCREMENT, 
	username varchar(40) NOT NULL, 
	description varchar(200), 
	visibility varchar(20) NOT NULL DEFAULT 'private', 
	password varchar(200) NOT NULL
	id_author INT,
	CONSTRAINT fk_id_author FOREIGN KEY (id_author) REFERENCES author(id_author) ON DELETE SET NULL ON UPDATE CASCADE	
);

/** Table author **/

DROP TABLE IF EXISTS author;
CREATE TABLE author (
	id_author INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
	name varchar(40) NOT NULL, 
	description varchar(200)
);

/** Table genre **/

DROP TABLE IF EXISTS genre;
CREATE TABLE genre (
	id_genre int(10) PRIMARY KEY NOT NULL AUTO_INCREMENT, 
	name varchar(40), 
	description varchar(200)
);

/** Table book **/

DROP TABLE IF EXISTS book;
CREATE TABLE book (
	id_book int(10) PRIMARY KEY NOT NULL AUTO_INCREMENT, 
	title varchar(40), 
	id_author int(10), 
	img varchar(40), 
	id_genre int(10), 
	plot varchar(200), 
	sales int(10), 
	rdate datetime, 
	CONSTRAINT lien_book_genre FOREIGN KEY (id_genre) REFERENCES genre(id_genre) ON DELETE RESTRICT ON UPDATE CASCADE, 
	CONSTRAINT lien_book_author FOREIGN KEY (id_author) REFERENCES author(id_author) ON DELETE RESTRICT ON UPDATE CASCADE
);

/** Table review **/

DROP TABLE IF EXISTS review;
CREATE TABLE review (id_review int(10) PRIMARY KEY NOT NULL AUTO_INCREMENT, 
	id_acc int(10), id_book int(10), rating int(10), 
	content varchar(200), post_date datetime, 
	CONSTRAINT lien_rev_acc FOREIGN KEY (id_acc) REFERENCES account(id_acc) ON DELETE RESTRICT ON UPDATE CASCADE, 
	CONSTRAINT lien_rev_book FOREIGN KEY (id_book) REFERENCES book(id_book) ON DELETE RESTRICT ON UPDATE CASCADE
);

/** Table follow **/

DROP TABLE IF EXISTS follow;
CREATE TABLE follow (
	id_follower int(10), 
	id_followed int(10), 
	PRIMARY KEY (id_follower, id_followed),
	CONSTRAINT fk_id_follower FOREIGN KEY (id_follower) REFERENCES account(id_acc) ON DELETE RESTRICT ON UPDATE CASCADE,
	CONSTRAINT fk_id_followed FOREIGN KEY (id_followed) REFERENCES account(id_acc) ON DELETE RESTRICT ON UPDATE CASCADE
);

/** Table interest **/

DROP TABLE IF EXISTS interest;
CREATE TABLE interest (
	id_acc int(10), 
	id_genre int(10), 
	PRIMARY KEY(id_acc, id_genre), 
	CONSTRAINT lien_interest_acc FOREIGN KEY (id_acc) REFERENCES account(id_acc) ON DELETE RESTRICT ON UPDATE CASCADE, 
	CONSTRAINT lien_interest_genre FOREIGN KEY (id_genre) REFERENCES genre(id_genre) ON DELETE RESTRICT ON UPDATE CASCADE
);

/** Table want_read **/

DROP TABLE IF EXISTS want_read;
CREATE TABLE want_read (
	id_acc int(10), 
	id_book int(10), 
	PRIMARY KEY(id_acc, id_book), 
	CONSTRAINT lien_wr_acc FOREIGN KEY (id_acc) REFERENCES account(id_acc) ON DELETE RESTRICT ON UPDATE CASCADE, 
	CONSTRAINT lien_wr_book FOREIGN KEY (id_book) REFERENCES book(id_book) ON DELETE RESTRICT ON UPDATE CASCADE
);