CREATE USER IF NOT EXISTS 'admin'@'%' IDENTIFIED BY 'bn!er$po23';
GRANT ALL PRIVILEGES ON testdb.* TO 'admin'@'%';
FLUSH PRIVILEGES;

USE testdb;
CREATE TABLE IF NOT EXISTS test_table (
                                     id INT AUTO_INCREMENT PRIMARY KEY,
                                     name VARCHAR(255) NOT NULL
    );
INSERT INTO test_table (name) VALUES ('User 1'), ('User 2'), ('User 3'), ('User 4'), ('User 5'), ('Romuald');
