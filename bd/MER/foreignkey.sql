alter table tutor add constraint tutorEndereco
foreign key(endereco_cod) references endereco(cod);

alter table animal add constraint animalTutor
foreign key(tutor_cod) references tutor(cod);

alter table animal add constraint animalEspecie
foreign key(especie_cod) references especie(cod);

alter table atendimento add constraint atendimentoVeterinario
foreign key(veterinario_cod) references veterinario(cod);

alter table atendimento add constraint atendimentoAnimal
foreign key(animal_cod) references animal(cod);

alter table procedimento add constraint procedimentoAtendimento
foreign key(atendimento_cod) references atendimento(cod);

alter table procmed add constraint procmedProcedimento
foreign key(procedimento_cod) references procedimento(cod);

alter table procmed add constraint procmedMedicamento
foreign key(medicamento_cod) references medicamento(cod);