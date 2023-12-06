CREATE DATABASE centromedico;

USE centromedico;

#creacion de tablas
CREATE TABLE pacientes
    (idPaciente INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    pacIdentification CHAR(15) NOT NULL,
    pacNombres VARCHAR(50) NOT NULL,
    pacApellidos VARCHAR(50) NOT NULL,
    pacFechaNacimiento DATE NOT NULL,
    pacSexo ENUM('Femenino','Masculino') NOT NULL);

CREATE TABLE medicos
    (idMedico INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    medIdentificacion CHAR(15) NOT NULL,
    medNombres VARCHAR(50) NOT NULL,
    medApellidos VARCHAR(50) NOT NULL,
    medEspecialidad VARCHAR(50),
    medCorreo VARCHAR(50) NOT NULL,
    medTelefono CHAR(15) NOT NULL);

CREATE TABLE consultorios
    (idConsultorio INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    conNombre CHAR(15) NOT NULL);

CREATE TABLE citas
    (idCita INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    citFecha DATE NOT NULL,
    citHora TIME NOT NULL,
    citPaciente INT(11),
    citMedico INT(11) NOT NULL,
    citConsultorio INT(11) NOT NULL,
    citEsado ENUM('Asignado','Atendido') NOT NULL,
    citObservaciones TEXT);

CREATE TABLE roles
    (id_rol INT (11) NOT NULL PRIMARY KEY,
    nombre_rol VARCHAR(20) NOT NULL);

CREATE TABLE usuarios
    (idUsuarios INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    usuRol INT NOT NULL,
    usLogin CHAR(15) NOT NULL,
    usunom VARCHAR(30) NOT NULL,
    usuPassword VARCHAR(60) NOT NULL,
    usuEstado ENUM('Activo','Inactivo'));

#llaves foraneas
ALTER TABLE citas
    ADD FOREIGN KEY (citPaciente)
    REFERENCES pacientes(idPaciente);

ALTER TABLE citas
    ADD FOREIGN KEY (citMedico)
    REFERENCES medicos(idMedico);

ALTER TABLE citas
    ADD FOREIGN KEY (citConsultorio)
    REFERENCES consultorios(idConsultorio);

ALTER TABLE usuarios
    ADD FOREIGN KEY (usuRol)
    REFERENCES roles(id_rol);

#alter para predeterminar uun campo de opciones (ENUM)
ALTER TABLE `citas` 
CHANGE `citEsado` `citEsado` 
ENUM('Asignado','Atendido') 
CHARACTER SET utf8mb4 
COLLATE utf8mb4_general_ci 
NOT NULL DEFAULT 'Asignado';

ALTER TABLE `usuarios` CHANGE `usuEstado` `usuEstado` ENUM('Activo','Inactivo') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT 'Activo';

INSERT INTO roles(id_rol, nombre_rol) 
VALUES (1,"Administrador");
INSERT INTO roles(id_rol, nombre_rol) 
VALUES (2,"Medico");
INSERT INTO roles(id_rol, nombre_rol) 
VALUES (3,"Paciente");

#prcedimientos
#insertar
CREATE PROCEDURE inspac(idpac CHAR(15), nompac VARCHAR(50), apepac VARCHAR(50), fecnacpac DATE, sexpac ENUM('Femenino','Masculino'))
INSERT INTO pacientes(pacIdentification, pacNombres, pacApellidos, pacFechaNacimiento,pacSexo) 
VALUES (idpac, nompac, apepac, fecnacpac, sexpac);

CALL inspac('27345892',"Maria", "Savedra", 19980512, 'Femenino');
CALL inspac('10274836', "Andres", "Veloza", 19900217,'Masculino');
CALL inspac('31782646', "Marcoz", "Garcia", 20001026, 'Masculino');
CALL inspac('926371534', "Laura", "Rodriguez", 19961103, 'Femenino');


CREATE PROCEDURE insmed(idmed CHAR(15), nommed VARCHAR(50), apemed VARCHAR(50), espmed VARCHAR(50), telmed CHAR(15), cormed VARCHAR(50))
INSERT INTO medicos(medIdentificacion, medNombres, medApellidos, medEspecialidad, medCorreo, medTelefono) 
VALUES (idmed,nommed, apemed, espmed, telmed, cormed);

CALL insmed('28461832',"David", "Mendez", "Dermatologia", "mendezdavid@gmail.com",'3124567890');
CALL insmed('10263846',"Sebastian", "Herrera", "cardiologia Clinica", "sebastiaherrera@gmail.com",'3003671245');
CALL insmed('38163829', "Luis", "Salamanca", "Oftalologia", "luissalamanca@gmail.com",'3352673512');
CALL insmed('62836173', "Sara", "Ruiz", "ortopedia", "sararuiz@gmail.com",'3789023467');

CREATE PROCEDURE inscon(nomcon CHAR(15))
INSERT INTO consultorios(conNombre) 
VALUES (nomcon);

CALL inscon('CONSULTORIO-101');
CALL inscon('CONSULTORIO-102');
CALL inscon('CONSULTORIO-103');
CALL inscon('CONSULTORIO-104');

CREATE PROCEDURE inscit(feccit DATE, horacit TIME, paccit INT(11), medcit INT(11), concit INT(11))
INSERT INTO citas(citFecha,citHora,citPaciente,citMedico,citConsultorio) 
VALUES (feccit, horacit, paccit, medcit, concit);

CALL inscit(20220313,'12:00:00',1,2,1);
CALL inscit(20220623,'14:00:00',3,4,2);
CALL inscit(20220816,'16:15:00',4,2,4);
CALL inscit(20221001,'18:30:00',2,3,3);

CREATE PROCEDURE insusu(lg CHAR(15),  rol INT, nm VARCHAR(30), clv VARCHAR(60))
INSERT INTO usuarios(usLogin, usuRol, usunom, usuPassword) 
VALUES (lg,rol, nm,clv);

CALL insusu('123', 1, 'Julián', '123');
CALL insusu('456', 2, 'David', '456');
CALL insusu('789', 3, 'Marlon', '789');

#actualizar
UPDATE usuarios SET usuRol='$rol', usunom='$nombre',usuPassword ='$password', usuEstado='$estado' 
WHERE usLogin ='$identificacion';

CREATE PROCEDURE upusu(usur INT, usLo CHAR(15), usun VARCHAR(30), usuP VARCHAR(60), usuEs ENUM('Activo','Inactivo'))
UPDATE usuarios SET usuRol=usur, usunom=usun, usuPassword=usuP , usuEstado=usuEs
WHERE usLogin = usLo;

CALL upusu(1,1002523892,'David','169','Activo');

#eliminar

#vistas
