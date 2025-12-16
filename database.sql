

CREATE TABLE products (
    id INT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    price BIGINT NOT NULL
);

INSERT INTO products (id, name, price) VALUES
(1, 'Laptop ASUS TUF F15', 24990000),
(2, 'iPhone 15 Pro Max', 32990000),
(3, 'Tai nghe Sony XM5', 4990000);