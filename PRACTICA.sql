SHOW DATABASES;

USE DEMO

USE PRACTICA

DESCRIBE ARTEFACTOS

CREATE DATABASE Practica

CREATE TABLE ARTEFACTOS
	Codigo 		DECIMAL(10,0) NOT NULL,
	Descripcion	VARCHAR(40),
	Marca		VARCHAR(40),
	Stock		INT(11),
	Precio		DOUBLE,
	Cliente		VARCHAR(40),
	Fcompra		INT
	PRIMARY KEY (Codigo));
)

INSERT INTO ARTEFACTOS VALUES
('1','Lavadora','LG','7','600.50','Jose','2020-12-25')

SELECT * FROM ARTEFACTOS

UPDATE artefactos SET Descripcion='Licuadora',Marca='Ssamsung',Stock='12',Precio='122',Cliente='Maria',Fcompra='2020-11-10' WHERE Codigo='1';

DELETE FROM artefactos WHERE Codigo='';

SELECT * FROM artefactos WHERE codigo='1';


