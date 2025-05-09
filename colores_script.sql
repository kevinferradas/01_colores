CREATE DATABASE IF NOT EXISTS  colores;
USE colores;
CREATE TABLE colores (
id_color int AUTO_INCREMENT PRIMARY KEY,
usuario VARCHAR(50) NOT NULL,
color_es VARCHAR(25),
color_en VARCHAR(25)
);

INSERT INTO colores(usuario,color_es,color_en) 
VALUES ("Tarzan","verde","green"), ("Dani","dark salmon","dark salmon");