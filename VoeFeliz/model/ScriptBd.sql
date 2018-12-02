CREATE TABLE "cliente" (
	"nome" VARCHAR(35) UNIQUE, 
	"rua" VARCHAR(20), 
	"numero" INTEGER,
	"bairro" VARCHAR(15), 
	"cep" char(8), 
	"usuario" VARCHAR(15) UNIQUE,
	"senha" VARCHAR(12),
	"id" integer PRIMARY KEY AUTOINCREMENT
);

CREATE TABLE "reserva" (
	"idCliente" integer,
	"numeroReserva" integer PRIMARY KEY AUTOINCREMENT,
	"data" VARCHAR(10),
	"hora" VARCHAR(5),
	"valor_total" decimal(10,2),
	FOREIGN KEY (idCliente) REFERENCES "cliente"(id)
);


CREATE TABLE "passagem" (
 	"idPassagem" integer PRIMARY KEY AUTOINCREMENT,
 	"idCLiente" integer,
 	"numeroReserva" integer,
 	"dataIda" VARCHAR(10),
 	"dataVolta" VARCHAR(10),
 	"preco" decimal(10,2),
 	"companhia" VARCHAR(20),
 	FOREIGN KEY (numeroReserva) REFERENCES "reserva"(numeroReserva),
 	FOREIGN KEY (idCLiente) REFERENCES "cliente"(id)
);


CREATE TABLE "voo" (
	

);