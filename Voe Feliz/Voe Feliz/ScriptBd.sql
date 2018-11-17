CREATE TABLE "cliente" (
	"nome" VARCHAR(35), 
	"rua" VARCHAR(20), 
	"numero" INTEGER,
	"bairro" VARCHAR(15), 
	"cep" char(8), 
	"id" integer PRIMARY KEY AUTOINCREMENT, UNIQUE(nome)
);

CREATE TABLE "cardapio" (
	"id" integer PRIMARY KEY AUTOINCREMENT, 
	"tipo" VARCHAR(15)
);

CREATE TABLE "produto"(
	"nome" VARCHAR(35), 
	"tipo" VARCHAR(15), 
	"preco" FLOAT(2),
	"descricao" VARCHAR(200), 
	"id" integer PRIMARY KEY AUTOINCREMENT, UNIQUE(nome)
);

CREATE TABLE "pedido"(
	"id" integer PRIMARY KEY AUTOINCREMENT,
	"data" VARCHAR(20), 
	"valor_total" FLOAT, 
	"id_cliente_fk" INTEGER,
	FOREIGN KEY (id_cliente_fk) REFERENCES "cliente" (id)
);

CREATE TABLE "produto_pedido"(
	"id" integer PRIMARY KEY AUTOINCREMENT,
	"id_pedido_fk" INTEGER,
	"id_produto_fk" INTEGER,
	"quantidade" INTEGER,
	FOREIGN KEY (id_pedido_fk) REFERENCES "pedido" (id),
	FOREIGN KEY (id_produto_fk) REFERENCES "produto" (id)
);


CREATE TABLE "cardapio_produto"(
	"id" integer PRIMARY KEY AUTOINCREMENT,
	"nome" VARCHAR(20),
	"id_cardapio_fk" INTEGER,
	"id_produto_fk" INTEGER,
	FOREIGN KEY (id_cardapio_fk) REFERENCES "cardapio" (id),
	FOREIGN KEY (id_produto_fk) REFERENCES "produto" (id)
);

