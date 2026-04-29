create database clVet;

use clVet;

create table endereco(
	cod int primary key not null auto_increment,
    logradouro varchar(150) not null,
    numero varchar(5) not null,
    complemento varchar(45),
    bairro varchar(45) not null,
    cep varchar(11) not null
)engine = innoDB;

create table tutor(
	cod int primary key not null auto_increment,
    nome varchar(150) ,
    cpf varchar(12) ,
    telefone varchar(17) ,
    usuario varchar(100) not null,
    senha varchar(100) not null,
    email varchar(100) not null,
    endereco_cod int
)engine = innoDB;

create table animal(
	cod int primary key not null auto_increment,
    nome varchar(150) not null,
    dtNascimento date not null,
    peso decimal(5,2) not null,
    tutor_cod int,
    especie_cod int
)engine = innoDB;

create table especie(
	cod int primary key not null auto_increment,
    raca varchar(50) not null,
    descricao varchar(150),
    tipo varchar(150) not null
)engine = innoDB;

create table veterinario(
	cod int primary key not null auto_increment,
    nome varchar(150) not null,
    crmv bigint not null,
    especialidade varchar(45) not null,
    turno varchar(45) not null,
    telefone varchar(17) not null
)engine = innoDB;

create table atendimento(
	cod int primary key not null auto_increment,
    diagnostico varchar(150) not null,
    tratamento varchar(150) not null,
    dia date not null,
    veterinario_cod int,
    animal_cod int
)engine = innoDB;

create table procedimento(
	cod int primary key not null auto_increment,
    descricao varchar(150) not null,
    atendimento_cod int
)engine = innoDB;

create table medicamento(
	cod int primary key not null auto_increment,
    nome varchar(150) not null,
    principioAtivo varchar(150) not null,
    validade date not null
)engine = innoDB;

create table procmed(
	cod int primary key not null auto_increment,
    dosagem decimal(5,2) not null,
    procedimento_cod int,
    medicamento_cod int
)engine = innoDB;