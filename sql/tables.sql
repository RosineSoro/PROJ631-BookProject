/** Table Account **/

DROP TABLE IF EXISTS account;
CREATE TABLE account (
	username varchar(40) PRIMARY KEY NOT NULL, 
	description varchar(200), 
	visibility varchar(20) DEFAULT 'private', 
	password varchar(200) NOT NULL,
	id_author INT DEFAULT -1,
	CONSTRAINT fk_id_author FOREIGN KEY (id_author) REFERENCES author(id_author) ON DELETE SET NULL ON UPDATE CASCADE	
);

/** Table author **/

DROP TABLE IF EXISTS author;
CREATE TABLE author (
	id_author INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
	name varchar(40) NOT NULL, 
	birthDate varchar(10),
	description varchar(200)
);

/** Table genre **/

DROP TABLE IF EXISTS genre;
CREATE TABLE genre (
	id_genre varchar(40) PRIMARY KEY NOT NULL, 
	description varchar(200) 
);

/** Table book **/

DROP TABLE IF EXISTS book;
CREATE TABLE book (
	id_book varchar(40) PRIMARY KEY NOT NULL, 
	title varchar(40), 
	id_author INT, 
	img varchar(255), 
	id_genre varchar(40), 
	plot varchar(20000), 
	sales int(10), 
	rdate varchar(10), 
	CONSTRAINT lien_book_genre FOREIGN KEY (id_genre) REFERENCES genre(id_genre) ON DELETE RESTRICT ON UPDATE CASCADE, 
	CONSTRAINT lien_book_author FOREIGN KEY (id_author) REFERENCES author(id_author) ON DELETE RESTRICT ON UPDATE CASCADE
);

/** Table review **/

DROP TABLE IF EXISTS review;
CREATE TABLE review (
	id_review int(10) PRIMARY KEY NOT NULL AUTO_INCREMENT, 
	username varchar(40), 
	id_book varchar(40), 
	rating int(10), 
	content varchar(20000), 
	post_date datetime, 
	CONSTRAINT lien_rev_acc FOREIGN KEY (username) REFERENCES account(username) ON DELETE RESTRICT ON UPDATE CASCADE, 
	CONSTRAINT lien_rev_book FOREIGN KEY (id_book) REFERENCES book(id_book) ON DELETE RESTRICT ON UPDATE CASCADE
);

/** Table follow **/

DROP TABLE IF EXISTS follow;
CREATE TABLE follow (
	follower varchar(40), 
	followed varchar(40), 
	PRIMARY KEY (follower, followed),
	CONSTRAINT fk_id_follower FOREIGN KEY (follower) REFERENCES account(username) ON DELETE RESTRICT ON UPDATE CASCADE,
	CONSTRAINT fk_id_followed FOREIGN KEY (followed) REFERENCES account(username) ON DELETE RESTRICT ON UPDATE CASCADE
);

/** Table interest **/

DROP TABLE IF EXISTS interest;
CREATE TABLE interest (
	username varchar(40), 
	id_genre varchar(40), 
	PRIMARY KEY(username, id_genre), 
	CONSTRAINT lien_interest_acc FOREIGN KEY (username) REFERENCES account(username) ON DELETE RESTRICT ON UPDATE CASCADE, 
	CONSTRAINT lien_interest_genre FOREIGN KEY (id_genre) REFERENCES genre(id_genre) ON DELETE RESTRICT ON UPDATE CASCADE
);

/** Table want_read **/

DROP TABLE IF EXISTS want_read;
CREATE TABLE want_read (
	username varchar(40), 
	id_book varchar(40), 
	PRIMARY KEY(username, id_book), 
	CONSTRAINT fk_wr__acc_username FOREIGN KEY (username) REFERENCES account(username) ON DELETE RESTRICT ON UPDATE CASCADE, 
	CONSTRAINT fk_wr_book_id FOREIGN KEY (id_book) REFERENCES book(id_book) ON DELETE RESTRICT ON UPDATE CASCADE
);