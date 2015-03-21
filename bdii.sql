--
-- Servidor: localhost
-- Tiempo de generación: 03-06-2014 a las 19:39:28
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.4.3


--
-- Base de datos: parqueadero
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla persona
--

CREATE TABLE IF NOT EXISTS persona (
  Nombre1 varchar(20) NOT NULL,
  Nombre2 varchar(20) ,
  Apellido1 varchar(20)  NOT NULL,
  Apellido2 varchar(20),
  Tipo_documento varchar(2)  NOT NULL,
  Numero_documento varchar(15)  NOT NULL,
  PRIMARY KEY (Numero_documento)
)ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla telefono
--

CREATE TABLE IF NOT EXISTS telefono (
  Codigo varchar(15) NOT NULL,
  Telefono varchar(10)  NOT NULL,
  PRIMARY KEY (Codigo,Telefono)
)ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;


-- --------------------------------------------------------


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla email
--

CREATE TABLE IF NOT EXISTS email (
  Codigo varchar(15)  NOT NULL,
  Email varchar(10)  NOT NULL,
  PRIMARY KEY (Codigo,Email)
)ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla direccion
--

CREATE TABLE IF NOT EXISTS direccion (
  Codigo varchar(15)  NOT NULL,
  Direccion varchar(10)  NOT NULL,
  PRIMARY KEY (Codigo,Direccion)
)ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla programa
--

CREATE TABLE IF NOT EXISTS programa(
	Codigo varchar (3) NOT NULL,
	Nombre varchar (15) NOT NULL,
	PRIMARY KEY (Codigo)
)ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla proyecto
--

CREATE TABLE IF NOT EXISTS proyecto(
	Codigo varchar (9) NOT NULL,
	Fecha date NOT NULL,
	Titulo varchar (20) NOT NULL,
	Descripcion varchar (45) NOT NULL,
	Cod_director varchar (15) NOT NULL,
	Cod_programa varchar (3) NOT NULL,
  Estado varchar (10) NOT NULL,
	PRIMARY KEY (Codigo)
)ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla profesor
--

CREATE TABLE IF NOT EXISTS profesor(
  Numero_documento varchar(15)  NOT NULL,
  Cod_linea varchar(9),
  Codigo varchar(9) NOT NULL,
  Tipo varchar(10) NOT NULL,
	PRIMARY KEY (Numero_documento)
)ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;


-- --------------------------------------------------------



-- --------------------------------------------------------
--
-- Estructura de tabla para la tabla estudiante
--
CREATE TABLE IF NOT EXISTS estudiante(
  Codigo varchar(9) NOT NULL,
  Carrera varchar(20)  NOT NULL,
  Semestre varchar(1)  NOT NULL,
  Numero_documento varchar(15)  NOT NULL,
  Cod_proyecto varchar(9),
  PRIMARY KEY (Numero_documento)
)ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------


-- --------------------------------------------------------


-- --------------------------------------------------------
--
-- Estructura de tabla para la tabla linea
--

CREATE TABLE IF NOT EXISTS linea (
	Codigo varchar (9) NOT NULL,
	Nombre varchar (15) NOT NULL,
	Descripcion varchar (45),
	PRIMARY KEY (Codigo)
)ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------


-- --------------------------------------------------------
--
-- Estructura de tabla para la tabla linea_proyecto
--

CREATE TABLE IF NOT EXISTS linea_proyecto (
	Codigo_linea varchar (9) NOT NULL,
	Codigo_proyecto varchar (9) NOT NULL,
	PRIMARY KEY (Codigo_linea,Codigo_proyecto)
)ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;
-- --------------------------------------------------------


-- --------------------------------------------------------
--
-- Estructura de tabla para la tabla jurado
--

CREATE TABLE IF NOT EXISTS jurado (
  Codigo_profesor varchar (15) NOT NULL,
  Codigo_proyecto varchar (9) NOT NULL,
  PRIMARY KEY (Codigo_profesor,Codigo_proyecto)
)ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;
-- --------------------------------------------------------

-- --------------------------------------------------------
--
-- Tablas n a n para linea_proyecto
--




ALTER TABLE jurado ADD CONSTRAINT ntonjurado_prof FOREIGN KEY (Codigo_profesor) REFERENCES profesor (Numero_documento);
ALTER TABLE jurado ADD CONSTRAINT ntonjurado_proy FOREIGN KEY (Codigo_proyecto) REFERENCES proyecto (Codigo);


-- --------------------------------------------------------

--
-- Foraneas de padre de profesor y estudiante a persona
--

ALTER TABLE profesor ADD CONSTRAINT pt_profesor FOREIGN KEY (Numero_documento) REFERENCES persona (Numero_documento);
ALTER TABLE estudiante ADD CONSTRAINT pt_estudiante FOREIGN KEY (Numero_documento) REFERENCES persona (Numero_documento);

-- --------------------------------------------------------

--
-- Foraneas a programa y foranea de director a proyecto
--

ALTER TABLE proyecto ADD CONSTRAINT fk_programa FOREIGN KEY (Cod_programa) REFERENCES programa(Codigo);
ALTER TABLE proyecto ADD CONSTRAINT fk_director FOREIGN KEY (Cod_director) REFERENCES profesor(Numero_documento);

-- --------------------------------------------------------

-- --------------------------------------------------------

--
-- Foraneas a linea de profesor y foranea de estudiante a proyecto
--

ALTER TABLE profesor ADD CONSTRAINT fk_linea FOREIGN KEY (Cod_linea) REFERENCES linea(Codigo);
ALTER TABLE estudiante ADD CONSTRAINT fk_proyecto FOREIGN KEY ( Cod_proyecto ) REFERENCES proyecto( Codigo )

-- --------------------------------------------------------
--
-- Foraneas para los campos multivaluados en persona
--

 ALTER TABLE telefono ADD CONSTRAINT fk_tel FOREIGN KEY (Codigo) REFERENCES persona(Numero_documento);
  ALTER TABLE email ADD CONSTRAINT fk_email  FOREIGN KEY (Codigo) REFERENCES persona(Numero_documento);
  ALTER TABLE direccion ADD CONSTRAINT fk_direccion    FOREIGN KEY (Codigo) REFERENCES persona(Numero_documento);


INSERT INTO programa VALUES ('1','Adminisracion');
INSERT INTO programa VALUES ('2','Contaduria');
INSERT INTO programa VALUES ('3','Sistemas');
INSERT INTO programa VALUES ('4','Electronica');
INSERT INTO programa VALUES ('5','Lic. EduFis');


INSERT INTO linea VALUES ('1','Linea 1','Descripcion 1');
INSERT INTO linea VALUES ('2','Linea 2','Descripcion 2');
INSERT INTO linea VALUES ('3','Linea 3','Descripcion 3');
INSERT INTO linea VALUES ('4','Linea 4','Descripcion 4');