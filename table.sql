CREATE TABLE users (
    id int(11),
    name varchar(50) NOT NULL,
    province int(11),
    postal_code varchar(7) NOT NULL,
    salary decimal(7,2) NOT NULL,
    PRIMARY KEY (id)
);

CREATE TABLE provinces (
	id int(11),
	name varchar(50) NOT NULL,
	PRIMARY KEY (id)
);