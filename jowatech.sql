CREATE DATABASE jowa_technologies;

USE jowa_technologies;

CREATE TABLE users (
  id INT(11) NOT NULL AUTO_INCREMENT,
  username VARCHAR(50) NOT NULL,
  password VARCHAR(255) NOT NULL,
  email VARCHAR(100) NOT NULL,
  is_admin TINYINT(1) DEFAULT 0,
  PRIMARY KEY (id),
  UNIQUE KEY username (username),
  UNIQUE KEY email (email)
);

CREATE TABLE blog_posts (
  id INT(11) NOT NULL AUTO_INCREMENT,
  title VARCHAR(255) NOT NULL,
  content TEXT NOT NULL,
  author_id INT(11) NOT NULL,
  published_date DATETIME NOT NULL,
  PRIMARY KEY (id),
  FOREIGN KEY (author_id) REFERENCES users(id)
);

