insert into author(author_name) values("Victor Hugo");
insert into author(author_name) values("Émile Zola");
insert into author(author_name) values("Albert Camus");
insert into author(author_name) values("Molière");
insert into author(author_name) values("Gustave Flaubert");
insert into author(author_name) values("Aghatha Christie"); 
insert into author(author_name) values("JK.Rowling");
insert into author(author_name) values("Marguerite Yourcenar");
insert into author(author_name) values("Julles Vallés");

/* Pour les genre je mets les description à null parce que j'ai pas le courage 
mais si vous voulez vous remplacer*/


insert into genre(name,description) values("Polar",NULL);
insert into genre(name,description) values("Roman policier",NULL);
insert into genre(name,description) values("Aventure",NULL);
insert into genre(name,description) values("Science-fiction",NULL);
insert into genre(name,description) values("Fantastique",NULL);
insert into genre(name,description) values("Roman",NULL);
insert into genre(name,description) values("Comédie",NULL);
insert into genre(name,description) values("Roman autobiographique",NULL);

/*Même chose ici, j'ai pas le courage d'aller chercher toutes les infos donc si vous voulez complétez*/

insert into book(title, id_author,img,id_genre,plot,sales,rdate) values("Les Misérables", (select id_author from author where author_name="Victor Hugo"),"https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.librairiemartelle.com%2Flivre%2F9782211238465-les-miserables-victor-hugo%2F&psig=AOvVaw0aQTYOXR2GXNLv7epkEaG7&ust=1683551924898000&source=images&cd=vfe&ved=0CBEQjRxqFwoTCMCLjeal4_4CFQAAAAAdAAAAABAR",
(select id_genre from genre where name = "Roman"), NULL,NULL,NULL);
insert into book(title, id_author,img,id_genre,plot,sales,rdate) values("Germinale", (select id_author from author where author_name="Émile Zola"), "https://m.media-amazon.com/images/I/81X-F1nE0IL.jpg",
(select id_genre from genre where name = "Roman"), NULL,NULL,NULL);
insert into book(title, id_author,img,id_genre,plot,sales,rdate) values("L'OEuvre au noir", (select id_author from author where author_name="Marguerite Yourcenar"), "https://m.media-amazon.com/images/I/61SU7gWmwyL.jpg",
(select id_genre from genre where name = "Roman"), NULL,NULL,NULL);

insert into book(title, id_author,img,id_genre,plot,sales,rdate) values("Harry Potter et l'école des sorciers", (select id_author from author where author_name="JK.Rowling"), "https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.fnac.com%2Fa875060%2FHarry-Potter-Tome-1-Harry-potter-a-l-ecole-des-sorciers-J-K-Rowling&psig=AOvVaw3298sOHHyvP6dCdZwobtzx&ust=1683552566192000&source=images&cd=vfe&ved=0CBEQjRxqFwoTCKDs4Zeo4_4CFQAAAAAdAAAAABAE",
(select id_genre from genre where name = "Fantastique"), NULL,NULL,NULL);
insert into book(title, id_author,img,id_genre,plot,sales,rdate) values("Le malade imaginaire", (select id_author from author where author_name="Molière"), "https://www.voir-de-pres.fr/wp-content/uploads/2021/08/Le-Malade-imaginaire-VDP-Couv-165-768x1181.jpg",
(select id_genre from genre where name = "Comédie"), NULL,NULL,NULL);

insert into book(title, id_author,img,id_genre,plot,sales,rdate) values("Meurtre sur le Nil", (select id_author from author where author_name="Agatha Christie"), "https://products-images.di-static.com/image/agatha-christie-mort-sur-le-nil/9782013225212-475x500-1.jpg",
(select id_genre from genre where name = "Roman policier"), NULL,NULL,NULL);

insert into book(title, id_author,img,id_genre,plot,sales,rdate) values("L'Étrangé", (select id_author from author where author_name="Albert Camus"), "https://m.media-amazon.com/images/I/81g3stamR8S.jpg",
(select id_genre from genre where name = "Roman"), NULL,NULL,NULL);

insert into book(title, id_author,img,id_genre,plot,sales,rdate) values("Harry Potter et la Chambre des Secrets", (select id_author from author where author_name="JK.Rowling"), "https://m.media-amazon.com/images/I/91VtX+f8+QL.jpg",
(select id_genre from genre where name = "Fantastique"), NULL,NULL,NULL);
insert into book(title, id_author,img,id_genre,plot,sales,rdate) values("Harry Potter et le Prisonnier d'Azkaban", (select id_author from author where author_name="JK.Rowling"), "https://images2.medimops.eu/product/4a3eda/M02070528189-large.jpg",
(select id_genre from genre where name = "Fantastique"), NULL,NULL,NULL);
insert into book(title, id_author,img,id_genre,plot,sales,rdate) values("Madame Bovary", (select id_author from author where author_name="Gustave Flaubert"), "https://static.fnac-static.com/multimedia/Images/FR/NR/e1/78/02/162017/1507-1/tsp20220714060742/Madame-Bovary.jpg",
(select id_genre from genre where name = "Roman"), NULL,NULL,NULL);

insert into book(title, id_author,img,id_genre,plot,sales,rdate) values("L'Enfant", (select id_author from author where author_name="Jules Vallés"), "https://www.livredepoche.com/sites/default/files/styles/manual_crop_269_435/public/images/livres/couv/9782253002918-001-T.jpeg?itok=gM3nl-6I",
(select id_genre from genre where name = "Roman autobiographique"), NULL,NULL,NULL);
/*
insert into book(title, id_author,img,id_genre,plot,sales,rdate) values("Germinale", (select id_author from author where author_name="Émile Zola"), "",
(select id_genre from genre where name = "Roman"), NULL,NULL,NULL);
insert into book(title, id_author,img,id_genre,plot,sales,rdate) values("Germinale", (select id_author from author where author_name="Émile Zola"), "https://m.media-amazon.com/images/I/81X-F1nE0IL.jpg",
(select id_genre from genre where name = "Roman"), NULL,NULL,NULL);
insert into book(title, id_author,img,id_genre,plot,sales,rdate) values("Germinale", (select id_author from author where author_name="Émile Zola"), "https://m.media-amazon.com/images/I/81X-F1nE0IL.jpg",
(select id_genre from genre where name = "Roman"), NULL,NULL,NULL); */

