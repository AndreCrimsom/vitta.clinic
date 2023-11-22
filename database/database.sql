mysql -u root -p

CREATE DATABASE vittaclinicteste;
use vittaclinicteste;

CREATE TABLE cliente (
    email varchar (100) NOT NULL,
    senha varchar (100) NOT NULL,
    PRIMARY KEY (email)
);

CREATE TABLE medico (
    email varchar (100) NOT NULL,
    senha varchar (100) NOT NULL,
    PRIMARY KEY (email)
);

CREATE TABLE consulta (
    id int (50) NOT NULL AUTO_INCREMENT,
    data_consulta date NOT NULL,
    email_cliente_fk varchar (100) NOT NULL,
    email_medico_fk varchar (100) NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (email_cliente_fk) REFERENCES cliente(email),
    FOREIGN KEY (email_medico_fk) REFERENCES medico(email)
);

INSERT INTO cliente VALUES("cliente@teste.com","123456");
INSERT INTO medico VALUES("medico@teste.com","123456");
INSERT INTO consulta VALUES(NULL, "1995-09-11","cliente@teste.com","medico@teste.com");

SELECT * FROM cliente;
SELECT * FROM medico;
SELECT * FROM consulta;