create table cliente (
    cpf int(11) unsigned not null,
    senha varchar(255) not null,
    email varchar(100) not null,
    celular(11),
    nome varchar(100) not null,,
    sobrenome varchar(11) not null,
    nascimento date not null,
    PRIMARY KEY (cpf)
);

create table medico (
    cpf int(11) unsigned not null,
    senha varchar(255) not null,
    email varchar(100) not null,
    celular(11),
    nome varchar(100) not null,
    sobrenome varchar(11) not null,
    nascimento date not null,
    PRIMARY KEY (cpf)
);

create table clinica (
    cnpj int(14) unsigned not null,
    senha varchar(255) not null,
    email varchar(100) not null,
    celular(11),
    nome varchar(100) not null,
    PRIMARY KEY (cnpj)
);

create table consulta (
    id varchar(255),
    tipo_consulta varchar(255),
    data_consulta data,
    consulta_realizada varchar(3),
    cpf_cliente_fk int(11),
    cpf_medico_fk int(11),
    cnpj_clinica_fk int(14),
    PRIMARY KEY (cnpj),
    FOREIGN KEY (cpf_cliente_fk) REFERENCES CLIENTE(CPF),
    FOREIGN KEY (cpf_medico_fk) REFERENCES medico(CPF),
    FOREIGN KEY (cnpj_clinica_fk) REFERENCES clinica(CNPJ)
);