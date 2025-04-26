create database pdophp;
use pdophp;

create table TB_USUARIO (
	ID_US int primary key auto_increment,
    NOME varchar (64),
    EMAIL_US varchar (64)
);

INSERT INTO TB_USUARIO (ID_US, NOME, EMAIL_US)VALUES("Zé do Gás"),("golzinhotáfervendo@hotmail.com");

SELECT * FROM TB_USUARIO;

DELETE FROM TB_USUARIO WHERE NOME = 'Zé do Gás';
