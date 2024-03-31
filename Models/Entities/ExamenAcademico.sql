CREATE DATABASE ExamenAcademicosDB;

USE ExamenAcademicosDB;

CREATE TABLE Alumnos (
    NumeroMatricula INT PRIMARY KEY,
    Nombre VARCHAR(50),
    Grupo VARCHAR(10)
);

CREATE TABLE ControlesEscritos (
    IDControl INT PRIMARY KEY,
    NumeroPreguntas INT,
    Fecha DATE
);

CREATE TABLE NotasControlesEscritos (
    IDControl INT,
    NumeroMatricula INT,
    Nota FLOAT,
    PRIMARY KEY (IDControl,NumeroMatricula),
    --Referencia la columna IDControl a la tabla ControlesEscritos en la columna IDControl.
    FOREIGN KEY (IDControl) REFERENCES ControlesEscritos(IDControl),
    --Referencia la columna NumeroMatricula a la tabla Alumnos en la columna NumeroMatricula.
    FOREIGN KEY (NumeroMatricula) REFERENCES Alumnos(NumeroMatricula) 
);

CREATE TABLE Practicas (
    CodigoPractica INT PRIMARY KEY,
    Titulo VARCHAR(50),
    NivelDificultad VARCHAR(20),
    Fecha DATE
);

CREATE TABLE PracticasIndividuales (
    CodigoPractica INT,
    NumeroMatricula INT,
    Nota FLOAT,
    PRIMARY KEY (CodigoPractica,NumeroMatricula),
    --Referencia la columna CodigoPractica a la tabla Practicas en la columna CodigoPractica.
    FOREIGN KEY (CodigoPractica) REFERENCES Practicas(CodigoPractica),
    --Referencia la columna NumeroMatricula a la tabla Alumnos en la columna NumeroMatricula.
    FOREIGN KEY (NumeroMatricula) REFERENCES Alumnos(NumeroMatricula)
);

CREATE TABLE Docentes (
    DNI INT PRIMARY KEY,
    Nombre VARCHAR(50)
);

CREATE TABLE PracticasDocentes (
    CodigoPractica INT,
    DNI INT,
    PRIMARY KEY (CodigoPractica,DNI),
    --Referencia la columna CodigoPractica a la tabla Practicas en la columna CodigoPractica.
    FOREIGN KEY (CodigoPractica) REFERENCES Practicas(CodigoPractica),
    --Referencia la columna DNI a la tabla Docentes en la columna DNI.
    FOREIGN KEY (DNI) REFERENCES Docentes(DNI)
);

CREATE TABLE Asignaturas (
    CodigoAsignatura INT PRIMARY KEY,
    Nombre VARCHAR(50),
    Descripcion TEXT,
    CreditosAcademicos INT,
    AnioAcademico INT,
    Semestre VARCHAR(10),
    HorarioClases VARCHAR(50)
);

CREATE TABLE Temas (
    IDTema INT PRIMARY KEY,
    Nombre VARCHAR(50),
    Descripcion TEXT,
    RecursosAsociados TEXT,
    NivelDificultad VARCHAR(20)
);

CREATE TABLE Evaluaciones (
    IDEvaluacion INT PRIMARY KEY,
    Tipo VARCHAR(20),
    Fecha DATE,
    Asignatura INT,
    PonderacionTeorico FLOAT,
    PonderacionRedaccion FLOAT,
    PonderacionLaboratorio FLOAT,
    PonderacionTiempo FLOAT,
    --Referencia la columna Asignatura a la tabla Asignaturas en la columna CodigoAsignatura.
    FOREIGN KEY (Asignatura) REFERENCES Asignaturas(CodigoAsignatura)
);

CREATE TABLE ExamenTema (
    IDEvaluacion INT,
    IDTema INT,
    --Referencia la columna IDEvaluacion a la tabla Evaluaciones en la columna IDEvaluacion.
    FOREIGN KEY (IDEvaluacion) REFERENCES Evaluaciones(IDEvaluacion),
    --Referencia la columna IDTema a la tabla Temas en la columna IDTema.
    FOREIGN KEY (IDTema) REFERENCES Temas(IDTema),
    PRIMARY KEY (IDEvaluacion,IDTema)
);