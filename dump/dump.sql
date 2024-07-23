-- Crear tabla Roles
CREATE TABLE Roles (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(50) NOT NULL
);

-- Crear tabla Empleados
CREATE TABLE Empleados (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(100) NOT NULL,
    apellido VARCHAR(100) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    telefono VARCHAR(15),
    direccion VARCHAR(255),
    id_rol INT,
    fecha_contratacion DATE,
    FOREIGN KEY (id_rol) REFERENCES Roles(id)
);

-- Crear tabla Ubicaciones
CREATE TABLE Ubicaciones (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(100) NOT NULL,
    direccion VARCHAR(255) NOT NULL
);

-- Crear tabla Guardias
CREATE TABLE Guardias (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(100) NOT NULL,
    descripcion TEXT,
    id_ubicacion INT,
    FOREIGN KEY (id_ubicacion) REFERENCES Ubicaciones(id)
);

-- Crear tabla Turnos
CREATE TABLE Turnos (
    id INT PRIMARY KEY AUTO_INCREMENT,
    id_guardia INT,
    id_empleado INT,
    fecha DATE NOT NULL,
    hora_inicio TIME NOT NULL,
    hora_fin TIME NOT NULL,
    FOREIGN KEY (id_guardia) REFERENCES Guardias(id),
    FOREIGN KEY (id_empleado) REFERENCES Empleados(id)
);

-- Crear tabla Asistencias
CREATE TABLE Asistencias (
    id INT PRIMARY KEY AUTO_INCREMENT,
    id_turno INT,
    fecha DATE NOT NULL,
    hora_entrada TIME NOT NULL,
    hora_salida TIME,
    observaciones TEXT,
    FOREIGN KEY (id_turno) REFERENCES Turnos(id)
);

-- Crear tabla Rondines
CREATE TABLE Rondines (
    id INT PRIMARY KEY AUTO_INCREMENT,
    id_turno INT,
    id_empleado INT,
    fecha DATE NOT NULL,
    hora_inicio TIME NOT NULL,
    hora_fin TIME NOT NULL,
    ubicacion_inicio VARCHAR(255) NOT NULL,
    ubicacion_fin VARCHAR(255) NOT NULL,
    FOREIGN KEY (id_turno) REFERENCES Turnos(id),
    FOREIGN KEY (id_empleado) REFERENCES Empleados(id)
);

-- Crear tabla GradoIncidencias
CREATE TABLE GradoIncidencias (
    id INT PRIMARY KEY AUTO_INCREMENT,
    grado VARCHAR(50) NOT NULL
);

-- Crear tabla Incidencias
CREATE TABLE Incidencias (
    id INT PRIMARY KEY AUTO_INCREMENT,
    id_rondin INT,
    id_empleado INT,
    id_grado INT,
    descripcion TEXT NOT NULL,
    foto VARCHAR(255),
    fecha DATE NOT NULL,
    hora TIME NOT NULL,
    FOREIGN KEY (id_rondin) REFERENCES Rondines(id),
    FOREIGN KEY (id_empleado) REFERENCES Empleados(id),
    FOREIGN KEY (id_grado) REFERENCES GradoIncidencias(id)
);
