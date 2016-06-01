CREATE TABLE bancos
(
    id INT(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nome VARCHAR(30),
    path_script VARCHAR(30),
    created DATETIME,
    modified DATETIME
);

CREATE TABLE empresas
(
    id INT(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
    cnpj VARCHAR(15) NOT NULL,
    razao_social VARCHAR(100),
    nome_fantasia VARCHAR(100),
    endereco VARCHAR(100),
    site VARCHAR(50),
    fone VARCHAR(20),
    email VARCHAR(50),
    status CHAR(1),
    created DATETIME,
    modified DATETIME
);

CREATE TABLE produtos
(
    id INT(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nome VARCHAR(50),
    descricao VARCHAR(250),
    status CHAR(1),
    empresa_id INT(11),
    created DATETIME,
    modified DATETIME,
    CONSTRAINT produtos_empresa_id_fk FOREIGN KEY (empresa_id) REFERENCES empresas (id)
);
CREATE INDEX produtos_empresa_id_fk ON produtos (empresa_id);

CREATE TABLE contratos
(
    id INT(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nome VARCHAR(50),
    path_arquivo VARCHAR(50),
    produto_id INT(11),
    valor_total DECIMAL(20,2),
    valor_parcela DECIMAL(20,2),
    valor_mora DECIMAL(10,2),
    percentual_juros DECIMAL(5,2),
    created DATETIME,
    modified DATETIME,
    CONSTRAINT contratos_produto_id_fk FOREIGN KEY (produto_id) REFERENCES produtos (id)
);
CREATE INDEX contratos_produto_id_fk ON contratos (produto_id);

CREATE TABLE clientes
(
    id INT(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nome VARCHAR(100),
    cpf_cnpj VARCHAR(15),
    fone VARCHAR(20),
    email VARCHAR(50),
    endereco VARCHAR(100),
    empresa_id INT(11),
    status CHAR(1),
    created DATETIME,
    modified DATETIME,
    CONSTRAINT clientes_empresa_id_fk FOREIGN KEY (empresa_id) REFERENCES empresas (id)
);
CREATE INDEX clientes_empresa_id_fk ON clientes (empresa_id);

CREATE TABLE contrato_cliente
(
    id INT(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
    contrato_id INT(11),
    cliente_id INT(11),
    data_cadastro INT(11),
    created DATETIME,
    modified DATETIME,
    CONSTRAINT contrato_cliente_cliente_id_fk FOREIGN KEY (cliente_id) REFERENCES clientes (id),
    CONSTRAINT contrato_cliente_contrato_id__fk FOREIGN KEY (contrato_id) REFERENCES contratos (id)
);
CREATE INDEX contrato_cliente_cliente_id_fk ON contrato_cliente (cliente_id);
CREATE INDEX contrato_cliente_contrato_id__fk ON contrato_cliente (contrato_id);

CREATE TABLE cobrancas
(
    id INT(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
    data_vencimento DATE,
    data_registro DATETIME,
    valor DECIMAL(15,2),
    contrato_cliente_id INT(11),
    banco_conta_id INT(11),
    status CHAR(1),
    created DATETIME,
    modified DATETIME,
    CONSTRAINT cobrancas_contrato_cliente_id_fk FOREIGN KEY (contrato_cliente_id) REFERENCES contrato_cliente (id)
);
CREATE INDEX cobrancas_banco_conta_id_fk ON cobrancas (banco_conta_id);
CREATE INDEX cobrancas_contrato_cliente_id_fk ON cobrancas (contrato_cliente_id);

CREATE TABLE crons
(
    id INT(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
    periodo INT(11),
    contrato_id INT(11),
    hora VARCHAR(8),
    status CHAR(1),
    created DATETIME,
    modified DATETIME,
    CONSTRAINT crons_contrato_id_fk FOREIGN KEY (contrato_id) REFERENCES contratos (id)
);
CREATE INDEX crons_contrato_id_fk ON crons (contrato_id);

CREATE TABLE bancos_contas
(
    id INT(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
    banco_id INT(11),
    num_conta VARCHAR(10),
    ag_conta VARCHAR(10),
    contrato VARCHAR(20),
    convenio VARCHAR(20),
    status CHAR(1),
    empresa_id INT(11),
    created DATETIME,
    modified DATETIME,
    CONSTRAINT bancos_contas_banco_id_fk FOREIGN KEY (banco_id) REFERENCES bancos (id),
    CONSTRAINT banco_conta_empresa_id_fk FOREIGN KEY (empresa_id) REFERENCES empresas (id)
);
CREATE INDEX bancos_contas_banco_id_fk ON bancos_contas (banco_id);
CREATE INDEX banco_conta_empresa_id_fk ON bancos_contas (empresa_id);

CREATE TABLE users
(
    id INT(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nome VARCHAR(50),
    email VARCHAR(50),
    senha VARCHAR(100),
    status CHAR(1),
    empresa_id INT(11),
    created DATETIME,
    modified DATETIME,
    CONSTRAINT usuarios_empresa_id_fk FOREIGN KEY (empresa_id) REFERENCES empresas (id)
);

CREATE INDEX usuarios_empresa_id_fk ON users (empresa_id);
