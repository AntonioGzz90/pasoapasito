create database foro;

use foro;

drop database foro;

CREATE TABLE login (
  idLogin int NOT NULL,
  username varchar(250) NOT NULL,
  passwordUser varchar(250) NOT NULL,
  email varchar(250) NOT NULL,
  CONSTRAINT PK_ID PRIMARY KEY (idLogin)
); 

CREATE TABLE publicacion(
	idPublicacion int auto_increment NOT NULL,
    titulo varchar(250) NOT NULL,
    mensaje varchar(250) NOT NULL,
    idLogin int NOT NULL,
    CONSTRAINT PK_IDPUBLICACION PRIMARY KEY (idPublicacion),
    CONSTRAINT FK_IDLOGIN FOREIGN KEY (idLogin) REFERENCES login (idLogin)
);

CREATE TABLE respuesta(
	idRespuesta int auto_increment not null,
    respuesta varchar(250) not null,
    idPublicacion int not null,
    idLogin int not null,
    CONSTRAINT PK_IDRESPUESTA PRIMARY KEY (idRespuesta),
    CONSTRAINT FK_IDLOGIN2 FOREIGN KEY (idLogin) REFERENCES login (idLogin),
    CONSTRAINT FK_IDPUBLICACION FOREIGN KEY (idPublicacion) REFERENCES publicacion (idPublicacion)
);