DROP DATABASE IF EXISTS atm;
CREATE DATABASE IF NOT EXISTS atm;
USE atm;

CREATE TABLE withdrawals (
                             id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
                             date DATE,
                             amount FLOAT
) ENGINE=InnoDB;

INSERT INTO withdrawals (date, amount) VALUES ('2024-09-16', 50);

CREATE TABLE incomes (
                         id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
                         date DATE,
                         amount FLOAT
) ENGINE=InnoDB;

INSERT INTO incomes (date, amount) VALUES ('2024-09-15', 1000);
INSERT INTO incomes (date, amount) VALUES ('2024-09-11', 1000);