DROP TABLE IF EXISTS test;

CREATE TABLE test (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name TEXT NOT NULL,
    password TEXT NOT NULL
) charset=utf8;

INSERT INTO test (name, password) VALUES
    ("user", "password"),
    ("user1", "user1"),
    ("user2", "user2"),
    ("user3", "user3"),
    ("user4", "user4");
