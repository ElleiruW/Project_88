CREATE DATABASE LetsJoin;									

USE LetsJoin;

CREATE TABLE users(
	id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    firstname VARCHAR(225) NOT NULL,
    lastname VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    role VARCHAR(255)

)ENGINE= INNODB CHARSET UTF8 COLLATE utf8_bin;

CREATE TABLE articles(
	id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    title VARCHAR(90) NOT NULL,
    content VARCHAR(255) NOT NULL,
    picture VARCHAR(255),
    date_publish DATE NOT NULL,
    user_id  INT UNSIGNED NOT NULL,
    FOREIGN KEY (user_id) REFERENCES users(id)

)ENGINE= INNODB CHARSET utf8 COLLATE utf8_bin;

CREATE TABLE users_articles(
	user_id INT,
    article_id INT,
    FOREIGN KEY (user_id) REFERENCES users(id),
    FOREIGN KEY (article_id) REFERENCES articles(id)
 
)ENGINE= INNODB CHARSET utf8 COLLATE utf8_bin;


    
INSERT INTO users (firstname, lastname, email, role) VALUE ('Danielle', 'Steel', 'd.steel@numericall.com', 'author');
INSERT INTO users (firstname, lastname, email, role) VALUE ('Emmanuel', 'Kant', 'e.kant@numericall.com', 'author');
INSERT INTO users (firstname, lastname, email, role) VALUE ('Karl', 'Marx', 'm.karl@numericall.com', 'author');
INSERT INTO users (firstname, lastname, email, role) VALUE ('Jacques', 'Chirac', 'j.chirac@numericall.com', 'author');
INSERT INTO users (firstname, lastname, email, role) VALUE ('Stevie', 'Wonder', 's.wondert@numericall.com', 'contributor');
INSERT INTO users (firstname, lastname, email, role) VALUE ('Karl', 'Marx', 'm.karl@numericall.com', 'author');
INSERT INTO articles (title, content, picture, date_pulish, user_id) VALUES ('Intolerance', 'Lorem ipsum','https://images.pexels.com/photos/574282/pexels-photo-574282.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940','1978-10-01', '10'), ('GENDER GAP', 'Lorem ipsum','https://images.pexels.com/photos/574282/pexels-photo-574282.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940','1988-10-01', '9');
  
INSERT INTO articles (title, content, date_pulish) VALUES ('Easter Egg', 'Lorem ipsum','2014-09-30'),('Kefir', 'Lorem ipsum','2014-09-30'),('Das Kapital', 'Lorem ipsum','2014-09-30'),('Jail Time', 'Lorem ipsum','2014-09-30'),('Amazing', 'Lorem ipsum','2014-09-30'),('Pause', 'Lorem ipsum','2014-09-30'),('computers', 'Lorem ipsum','2014-09-30'),('AI', 'Lorem ipsum','2014-09-30'),('Love in the air', 'Lorem ipsum','2014-09-30');


INSERT INTO users_articles VALUES (1, 1), (1, 10), (2, 3), (3, 5); 


SELECT * FROM users
	JOIN users_articles ON article.id = users_articles.article_id
    WHERE users_articles.article_id = 10;
    

SELECT article_id FROM users WHERE article_id LIKE '10';