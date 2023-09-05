create table cliente (
    cpf int(11) unsigned not null,
    senha varchar(100) not null,
    email varchar(100) not null,
    celular int(11) not null,
    nome varchar(100) not null,
    sobrenome varchar(11) not null,
    nascimento date not null,
    PRIMARY KEY (cpf)
);

create table medico (
    cpf int(11) unsigned not null,
    senha varchar(100) not null,
    email varchar(100) not null,
    celular int(11) not null,
    nome varchar(100) not null,
    sobrenome varchar(11) not null,
    nascimento date not null,
    PRIMARY KEY (cpf)
);

create table clinica (
    cnpj int(14) unsigned not null,
    senha varchar(100) not null,
    email varchar(100) not null,
    celular int(11) not null,
    nome varchar(100) not null,
    PRIMARY KEY (cnpj)
);

create table consulta (
    id_consulta int(100) unsigned not null auto_increment,
    tipo_consulta varchar(100) not null,
    data_consulta date not null,
    consulta_realizada varchar(3) not null,
    cpf_cliente_fk int(11) unsigned not null,
    cpf_medico_fk int(11) unsigned not null,
    cnpj_clinica_fk int(14) unsigned not null,
    PRIMARY KEY (id_consulta),
    FOREIGN KEY (cpf_cliente_fk) REFERENCES cliente(cpf),
    FOREIGN KEY (cpf_medico_fk) REFERENCES medico(cpf),
    FOREIGN KEY (cnpj_clinica_fk) REFERENCES clinica(cnpj)
);