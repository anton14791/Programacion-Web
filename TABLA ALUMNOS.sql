CREATE DATABASE estudiantes;

USE estudiantes;

DROP TABLE alumnos;

CREATE TABLE alumnos (
  Cod CHAR(3) NOT NULL,
  Nom CHAR(15),
  Ape CHAR(20),
  FNac DATE DEFAULT NULL,
  PRIMARY KEY (Cod)
);


INSERT  INTO alumnos(Cod,Nom,Ape,FNac) VALUES 
('100','Daniel','Saravia','2000-12-25'),
('101','Carlos','Yataco','2005-10-25'),
('102','Maria','Rodriguez','2001-08-23'),
('103','Daniela','Contreras','1999-02-10'),
('104','Jose','Martinez','1998-10-17'),
('105','Diana','Mizare','1997-12-24'),
('106','Mariana','Castilla','1996-04-15'),
('107','Paul','Magallanes','1995-01-01'),
('108','Maryori','Sotelo','1994-12-22'),
('109','Joel','Gonzales','1993-06-20'),
('110','Nicolas','Marcos','1992-08-21'),
('111','Alexis','Pachas','1991-05-20'),
('112','Monica','Davalos','1990-04-19'),
('113','Nayeli','Villalobos','2002-12-12'),
('114','Brian','Levano','2003-02-20'),
('115','Leonardo','Urbina','2004-02-12'),
('116','Maria','Granda','2005-05-10'),
('117','Miluska','Garzon','2006-07-02'),
('118','Isaias','Maldonado','2007-09-08'),
('119','Alexander','Bernaola','2008-11-09'),
('120','Stephanny','Aldana','2009-10-01');

SELECT * FROM alumnos 


