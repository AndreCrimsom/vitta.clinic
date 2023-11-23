mysql -u root -p

CREATE DATABASE vittaclinic;
use vittaclinic;

CREATE TABLE usuarios (
    email varchar (100) NOT NULL,
    senha varchar (100) NOT NULL,
    PRIMARY KEY (email)
);

INSERT INTO usuarios VALUES("cliente@teste.com","123456");
INSERT INTO usuarios VALUES("medico@teste.com","123456");

SELECT * FROM usuarios;