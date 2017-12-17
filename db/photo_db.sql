CREATE TABLE categories(
	id INT(11) PRIMARY KEY AUTO_INCREMENT,
    category_name VARCHAR(30)
);

CREATE TABLE photos (
	id INT(11) PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(50),
    description TEXT,
    directory_saved VARCHAR(200),
    category_id INT(11),
    CONSTRAINT FOREIGN KEY (category_id) REFERENCES categories(id)
);