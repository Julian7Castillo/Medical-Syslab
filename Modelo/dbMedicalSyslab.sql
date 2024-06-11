CREATE DATABASE medicalsyslab;

USE medicalsyslab;

#creacion de tablas
CREATE TABLE roles
    (id_rol INT (11) NOT NULL PRIMARY KEY,
    nombre_rol VARCHAR(20) NOT NULL);

CREATE TABLE usuarios
    (usucc BIGINT NOT NULL PRIMARY KEY,
    usuRol INT NOT NULL,
    usuNombre VARCHAR(30) NOT NULL,
    usuApellidos VARCHAR(50) NOT NULL,
    usuFechaNacimiento DATE NOT NULL,
    usuSexo ENUM('Femenino','Masculino') NOT NULL,
    usuCorreo VARCHAR(50) NOT NULL,
    usuTelefono CHAR(15) NOT NULL,
    Especialidad VARCHAR(100),
    usuPassword VARCHAR(60) NOT NULL,
    usuEstado ENUM('Activo','Inactivo', 'Bloqueado') NOT NULL);

CREATE TABLE consultorios
    (idConsultorio INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    conNombre CHAR(15) NOT NULL);

CREATE TABLE citas
    (idCita INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    citFecha DATE NOT NULL,
    citHora TIME NOT NULL,
    citPaciente BIGINT NOT NULL,
    citMedico BIGINT NOT NULL,
    citConsultorio INT(11) NOT NULL,
    citEstado ENUM('Asignado','Atendido') NOT NULL,
    citObservaciones TEXT);

#llaves foraneas
ALTER TABLE usuarios
    ADD FOREIGN KEY (usuRol)
    REFERENCES roles(id_rol);

ALTER TABLE citas
    ADD FOREIGN KEY (citPaciente)
    REFERENCES usuarios(usucc),
    ADD FOREIGN KEY (citMedico)
    REFERENCES usuarios(usucc),
    ADD FOREIGN KEY (citConsultorio)
    REFERENCES consultorios(idConsultorio);

#alter para predeterminar un campo de opciones (ENUM)
ALTER TABLE `citas` 
CHANGE `citEsado` `citEsado` 
ENUM('Asignado','Atendido') 
CHARACTER SET utf8mb4 
COLLATE utf8mb4_general_ci 
NOT NULL DEFAULT 'Asignado';

ALTER TABLE `usuarios` CHANGE `usuEstado` `usuEstado` ENUM('Activo','Inactivo', 'Bloqueado') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT 'Activo';

#insertar datos
INSERT INTO roles(id_rol, nombre_rol) 
VALUES (1,"Administrador");
INSERT INTO roles(id_rol, nombre_rol) 
VALUES (2,"Medico");
INSERT INTO roles(id_rol, nombre_rol) 
VALUES (3,"Paciente");

#prcedimientos
CREATE PROCEDURE insusu(cc BIGINT, rol INT, nmb VARCHAR(30), apl VARCHAR(30), fecnac DATE, sex ENUM('Femenino','Masculino'),cor VARCHAR(50), cel CHAR(15), espe VARCHAR(100), pasw VARCHAR(20))
INSERT INTO usuarios(usucc, usuRol, usuNombre, usuApellidos, usuFechaNacimiento, usuSexo, usuCorreo, susTelefono, Especialidad, usuPassword)
VALUES (cc, rol, nmb, apl, fecnac, sex ,cor , cel, espe, pasw);

CALL insusu(1002523891, 1, 'Oscar Julián', 'Castillo Mateus', 20020721, 'Masculino', 'oscarcastillo212002@gmail.com', '3003546230', 'Adm', '1002523891');
CALL insusu(2002523891, 2, 'Oscar Julián', 'Castillo Mateus', 20020721, 'Masculino', 'oscarcastillo212002@gmail.com', '3003546230', 'Med', '2002523891');
CALL insusu(3002523891, 3, 'Oscar Julián', 'Castillo Mateus', 20020721, 'Masculino', 'oscarcastillo212002@gmail.com', '3003546230', 'Pac', '3002523891');
CALL insusu(27345892, 3,"Maria", "Savedra", 19980512, 'Femenino', 'maira@gmail.com', '3112456789','', '123');
CALL insusu(10274836, 3, "Andres", "Veloza", 19900217,'Masculino', 'andres@gmail.com', '3112456789','', '123');
CALL insusu(31782646, 3, "Marcoz", "Garcia", 20001026, 'Masculino', 'marcoz@gmail.com', '3112456789','', '123');
CALL insusu(926371534, 2, "Laura", "Rodriguez", 19961103, 'Femenino', 'laura@gmail.com', '3112456789','', '123');
CALL insusu(28461832, 2,"David", "Mendez", 20001026, 'Masculino','david@gmail.com', '3112456789','Dermatologia', '123');
CALL insusu(10263846, 2,"Sebastian", "Herrera", 20001026, 'Masculino', 'sebastian@gmail.com', '3112456789','cardiologia Clinica', '123');
CALL insusu(38163829, 2, "Luis", "Salamanca", 20001026, 'Masculino', 'luis@gmail.com', '3112456789','Oftalologia', '123');
CALL insusu(62836173, 2, "Sara", "Ruiz", 19961103, 'Femenino', 'sara@gmail.com', '3112456789','ortopedia', '123');

CREATE PROCEDURE inscon(nomcon CHAR(15))
INSERT INTO consultorios(conNombre) 
VALUES (nomcon);

CALL inscon('CONSULTORIO-101');
CALL inscon('CONSULTORIO-102');
CALL inscon('CONSULTORIO-103');
CALL inscon('CONSULTORIO-104');

CREATE PROCEDURE inscit(feccit DATE, horacit TIME, paccit BIGINT, medcit BIGINT, concit INT(11))
INSERT INTO citas(citFecha,citHora,citPaciente,citMedico,citConsultorio) 
VALUES (feccit, horacit, paccit, medcit, concit);

CALL inscit(20230313,'12:00:00',3002523891,2002523891,1);
CALL inscit(20230623,'14:00:00',31782646,926371534,2);
CALL inscit(20230816,'16:15:00',10274836,28461832,4);
CALL inscit(20231001,'18:30:00',27345892,62836173,3);

#actualizacion
#elemplo: UPDATE usuarios SET usuRol='2', usuNombre='SEBASTIAN', usuApellidos='HERRERA', usuFechaNacimiento='20001026', usuSexo='Masculino', usuCorreo='SEBA@GMSIL.COM', susTelefono='3112456789', Especialidad='cardiologia Clinica',usuPassword ='123456', usuEstado='Activo' WHERE usucc ='10263846';

CREATE PROCEDURE upusu(cc BIGINT, rol INT, nombre VARCHAR(30), apellidos VARCHAR(50), fechaNacimiento DATE, sexo ENUM('Femenino','Masculino'), correo VARCHAR(50), telefono CHAR(15), especialidad VARCHAR(100), passw VARCHAR(60), estado ENUM('Activo','Inactivo', 'Bloqueado')) 
UPDATE usuarios SET usucc=cc, usuRol=rol, usuNombre=nombre, usuApellidos=apellidos, usuFechaNacimiento=fechaNacimiento, usuSexo=sexo, usuCorreo=correo, susTelefono=telefono, Especialidad=especialidad, usuPassword=passw, usuEstado=estado 
WHERE usucc = cc;

CALL upusu(10263846,2,'Sebastian', 'Herrera', 20001026, 'Masculino', 'sebastian@gmail.com','3112456789', 'Cardiologia', '09876','Activo');

CREATE PROCEDURE upuCom(id INT, nombre CHAR(15)) UPDATE consultorios SET conNombre=nombre WHERE idConsultorio = id;

#CALL upuCom(4,'CONSULTORIO-103');

CREATE PROCEDURE upuCit(id INT, nombre CHAR(15)) UPDATE consultorios SET conNombre=nombre WHERE idConsultorio = id;

CALL upuCit(4,'CONSULTORIO-103');

#Eliminacion consultar como no alterar si son llaves foraneas
#elemplo:DELETE FROM usuarios WHERE usucc = 10263846;

CREATE PROCEDURE delusu(cc Int) DELETE FROM usuarios WHERE usucc = cc;

#CALL delusu(10263846);

CREATE PROCEDURE delCon(id Int) DELETE FROM consultorios WHERE idConsultorio = id;

#CALL delCon(3);

CREATE PROCEDURE delCit(id Int) DELETE FROM citas WHERE idCita = id;

#CALL delCit(4);

#Vistas
CREATE VIEW listUsu AS SELECT * FROM usuarios;

SELECT * FROM listUsu;

CREATE VIEW listCons AS SELECT * FROM consultorios;

SELECT * FROM listCons;

CREATE VIEW listCit AS SELECT * FROM citas;

SELECT * FROM listCit;
