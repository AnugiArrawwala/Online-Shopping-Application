CREATE TABLE products(
	product_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	name VARCHAR(500) NOT NULL,
	quantity INT NOT NULL DEFAULT 0,
	unit_price REAL,
	size VARCHAR(25) DEFAULT 'S',
	img VARCHAR(500) DEFAULT 'no-product-image.png'	
);


INSERT INTO products (name, quantity, unit_price,size,img) VALUES ('Frock',25,125,'S','1.jfif');
INSERT INTO products (name, quantity, unit_price,size,img) VALUES ('Gift Card',192,10,'S','2.jfif');
INSERT INTO products (name, quantity, unit_price,size,img) VALUES ('Hand Bags',78,49.9,'M','3.jpg');
INSERT INTO products (name, quantity, unit_price,size,img) VALUES ('Ladis Dress',70,82,'L','4.jfif');
INSERT INTO products (name, quantity, unit_price,size,img) VALUES ('Shirt',150,23.9,'M','5.jpg');
INSERT INTO products (name, quantity, unit_price,size,img) VALUES ('T-Shirt',78,19.25,'L','6.jpg');
