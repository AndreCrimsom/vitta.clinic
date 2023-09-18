CREATE DATABASE ProjetoS;
use ProjetoS;

create table cliente (
    cpf INT(11) unsigned NOT NULL,
    senha VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    celular INT(11) NOT NULL,
    nome VARCHAR(100) NOT NULL,
    sobrenome VARCHAR(11) NOT NULL,
    nascimento date NOT NULL,
    PRIMARY KEY (cpf)
);

create table clinica (
    cnpj INT(14) unsigned NOT NULL,
    senha VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    celular INT(11) NOT NULL,
    nome VARCHAR(100) NOT NULL,
    PRIMARY KEY (cnpj)
);

create table medico (
    cpf INT(11) unsigned NOT NULL,
    senha VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    celular INT(11) NOT NULL,
    nome VARCHAR(100) NOT NULL,
    sobrenome VARCHAR(11) NOT NULL,
    nascimento date NOT NULL,
    PRIMARY KEY (cpf)
);


create table consulta (
    id_consulta INT(100) unsigned NOT NULL auto_increment,
    data_consulta date NOT NULL,
    consulta_realizada VARCHAR(3) NOT NULL,
    cpf_cliente_fk INT(11) unsigned NOT NULL,
    cpf_medico_fk INT(11) unsigned NOT NULL,
    cnpj_clinica_fk INT(14) unsigned NOT NULL,
    PRIMARY KEY (id_consulta),
    FOREIGN KEY (cpf_cliente_fk) REFERENCES cliente(cpf),
    FOREIGN KEY (cpf_medico_fk) REFERENCES medico(cpf),
    FOREIGN KEY (cnpj_clinica_fk) REFERENCES clinica(cnpj)
);
