create table tblPacientes(
	PacId varchar(12) primary key,
	PacNombres varchar(50) not null,
	PacApellidos varchar(50) not null,
	PacFechaN date not null,
	PacSexo varchar(1) not null
);

create table tblTratamientos(
	TraId int primary key identity,
	TraIdPaciente varchar(12) not null,
	TraFechaAsignado date not null,
	TraDescripcion varchar(100) not null,
	TraFechaInicio date not null,
	TraFechaFin date not null,
	TraObservaciones varchar(100),
	foreign key (TraIdPaciente) references tblPacientes(PacId) on update cascade
)


insert into tblPacientes values('43999888','Annie','Smith','1999-01-01','F');