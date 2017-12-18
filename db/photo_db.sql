CREATE TABLE categories(
	id INT(11) PRIMARY KEY AUTO_INCREMENT,
    category_name VARCHAR(30)
);

CREATE TABLE photos (
	id INT(11) PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(50) NOT NULL,
    description TEXT,
    directory_saved VARCHAR(200) NOT NULL,
    category_id INT(11) NOT NULL,
    published TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    CONSTRAINT FOREIGN KEY (category_id) REFERENCES categories(id) ON DELETE CASCADE
);