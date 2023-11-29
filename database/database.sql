mysql -u root -p

CREATE DATABASE vittaclinic;
use vittaclinic;

CREATE TABLE usuarios (
    email varchar (100) NOT NULL,
    senha varchar (100) NOT NULL,
    PRIMARY KEY (email)
);

CREATE TABLE horarios (
  horario DATETIME NOT NULL,
  disponivel BOOLEAN NOT NULL,
  PRIMARY KEY (horario)
);

INSERT INTO usuarios VALUES("teste@teste.com","123456");

INSERT INTO horarios (horario, disponivel)
VALUES
    (
        '2023-11-28 09:30:00',
        TRUE
    ),
    (
        '2023-11-28 10:00:00',
        TRUE
    ),
    (
        '2023-11-28 10:30:00',
        TRUE
    ),
    (
        '2023-11-28 11:00:00',
        TRUE
    ),
    (
        '2023-11-28 11:30:00',
        TRUE
    ),
    (
        '2023-11-28 12:00:00',
        TRUE
    ),
    (
        '2023-11-28 12:30:00',
        TRUE
    ),
    (
        '2023-11-28 13:00:00',
        TRUE
    );


SELECT * FROM usuarios;
SELECT * FROM horarios;

UPDATE horarios
    SET disponivel = TRUE
    WHERE condition;