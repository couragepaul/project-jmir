CREATE TABLE users (
    id int(11) NOT NULL AUTO_INCREMENT,
    name varchar(50) NOT NULL ,
    province varchar(11),
    postal_code varchar(7) NOT NULL,
    salary decimal(9,2) NOT NULL,
    PRIMARY KEY (id)
);

CREATE TABLE provinces (
	id int(11) NOT NULL AUTO_INCREMENT,
	name varchar(50) NOT NULL,
	PRIMARY KEY (id)
);