CREATE DATABASE IF NOT EXISTS Software_Colegio;

USE Software_Colegio;

CREATE TABLE IF NOT EXISTS Cargos(
    id INT AUTO_INCREMENT PRIMARY KEY,
    descripcion VARCHAR(15) NOT NULL
) ENGINE = INNODB;

CREATE TABLE IF NOT EXISTS Cursos(
    id INT AUTO_INCREMENT PRIMARY KEY,
    descripcion VARCHAR(3) NOT NULL
) ENGINE = INNODB;

CREATE TABLE IF NOT EXISTS Profesores(
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombres VARCHAR(30) NOT NULL,
    apellidos VARCHAR(30) NOT NULL,
    email VARCHAR(30) NOT NULL,
    contrasena VARCHAR(60) NOT NULL,
    telefono VARCHAR(10),
    fecha_registro DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    UNIQUE KEY unique_email (email),
    cargo_id INT NOT NULL,
    INDEX carg_ind (cargo_id),
    FOREIGN KEY (cargo_id) 
        REFERENCES Cargos(id)
        ON UPDATE CASCADE
        ON DELETE CASCADE
) ENGINE = INNODB;

CREATE TABLE IF NOT EXISTS Estudiantes(
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombres VARCHAR(30) NOT NULL,
    apellidos VARCHAR(30) NOT NULL,
    email VARCHAR(30) NOT NULL,
    contrasena VARCHAR(60) NOT NULL,
    sexo CHAR(1) NOT NULL,
    fecha_registro DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    UNIQUE KEY unique_email (email),
    curso_id INT NOT NULL,
    INDEX curs_ind (curso_id),
    FOREIGN KEY (curso_id) 
        REFERENCES Cursos(id)
        ON UPDATE CASCADE
        ON DELETE CASCADE
) ENGINE = INNODB;

CREATE TABLE IF NOT EXISTS Asistencias(
    id INT AUTO_INCREMENT PRIMARY KEY,
    fecha_asistencia DATE NOT NULL
    /*estudiante_id INT NOT NULL,
    INDEX estu_ind (estudiante_id),
    FOREIGN KEY (estudiante_id) 
        REFERENCES Estudiantes(id)
        ON UPDATE CASCADE
        ON DELETE CASCADE*/
) ENGINE = INNODB;

CREATE TABLE IF NOT EXISTS Profesores_Cursos(
    profesor_id INT NOT NULL,
    curso_id INT NOT NULL,
    FOREIGN KEY (profesor_id) 
        REFERENCES Profesores(id)
        ON DELETE CASCADE
        ON UPDATE CASCADE,
    FOREIGN KEY (curso_id) 
        REFERENCES Cursos(id)
        ON DELETE CASCADE
        ON UPDATE CASCADE,
    PRIMARY KEY (profesor_id, curso_id)
) ENGINE = INNODB;

CREATE TABLE IF NOT EXISTS Asistencias_Estudiantes(
    asistencia_id INT NOT NULL,
    estudiante_id INT NOT NULL,
    profesor_id INT NOT NULL,
    asistencia BOOLEAN NOT NULL,
    FOREIGN KEY (asistencia_id)
        REFERENCES Asistencias(id)
        ON DELETE CASCADE
        ON UPDATE CASCADE,
    FOREIGN KEY (estudiante_id)
        REFERENCES Estudiantes(id)
        ON DELETE CASCADE
        ON UPDATE CASCADE,
    FOREIGN KEY (profesor_id)
        REFERENCES Profesores(id)
        ON DELETE CASCADE
        ON UPDATE CASCADE,
    PRIMARY KEY (asistencia_id, estudiante_id, profesor_id)
) ENGINE = INNODB;

/* Insert de Cargos */
INSERT INTO Cargos(descripcion) VALUES ('Coordinador');
INSERT INTO Cargos(descripcion) VALUES ('Profesor');

/* Insert de Cursos */
INSERT INTO Cursos(descripcion) VALUES ('1A');
INSERT INTO Cursos(descripcion) VALUES ('1B');
INSERT INTO Cursos(descripcion) VALUES ('1C');
INSERT INTO Cursos(descripcion) VALUES ('2A');
INSERT INTO Cursos(descripcion) VALUES ('2B');
INSERT INTO Cursos(descripcion) VALUES ('2C');