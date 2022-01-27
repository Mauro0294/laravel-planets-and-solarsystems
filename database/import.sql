DROP DATABASE IF EXISTS laravel;
CREATE DATABASE laravel;
USE laravel;
CREATE TABLE planets (
    id int(11) AUTO_INCREMENT,
    name text,
    description text,
    size_in_km int(11),
    solar_systems_id int(11),
    PRIMARY KEY (id)
);

CREATE TABLE solar_systems (
    id int(11) AUTO_INCREMENT,
    name text,
    age_in_years int(11),
    PRIMARY KEY (id)
);

INSERT INTO planets (name, description, size_in_km, solar_systems_id)
VALUES ('mars', 'Mars is the fourth planet from the Sun and the second-smallest planet in the Solar System, being larger than only Mercury.', 3389, 1);

INSERT INTO planets (name, description, size_in_km, solar_systems_id)
VALUES ('venus', 'Venus is the second planet from the Sun. It is named after the Roman goddess of love and beauty.', 6051, 1);

INSERT INTO planets (name, description, size_in_km, solar_systems_id)
VALUES ('earth', 'Our home planet is the third planet from the Sun, and the only place we know of so far thats inhabited by living things.', 6371, 1);

INSERT INTO solar_systems (name, age_in_years)
VALUES ('The Milky Way', 1360000000);

ALTER TABLE planets
ADD FOREIGN KEY (solar_systems_id) REFERENCES solar_systems(id);