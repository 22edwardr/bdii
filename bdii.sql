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
-- Estructura de tabla para la tabla estudiante
--

CREATE TABLE IF NOT EXISTS estudiante (
  Codigo varchar(9) NOT NULL,
  Nombre1 varchar(20) NOT NULL,
  Nombre2 varchar(20) ,
  Apellido1 varchar(20)  NOT NULL,
  Apellido2 varchar(20),
  Tipo_documento varchar(2)  NOT NULL,
  Numero_documento varchar(15)  NOT NULL,
  Carrera varchar(20)  NOT NULL,
  Semestre varchar(1)  NOT NULL,
  PRIMARY KEY (Codigo)
)ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla telefono
--

CREATE TABLE IF NOT EXISTS telefono (
  Codigo varchar(9) NOT NULL,
  Telefono1 varchar(10)  NOT NULL,
  Telefono2 varchar(10),
  PRIMARY KEY (Codigo,Telefono1)
)ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;


-- --------------------------------------------------------


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla email
--

CREATE TABLE IF NOT EXISTS email (
  Codigo varchar(9)  NOT NULL,
  Email1 varchar(10)  NOT NULL,
  Email2 varchar(10),
  PRIMARY KEY (Codigo,Email1)
)ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla direccion
--

CREATE TABLE IF NOT EXISTS direccion (
  Codigo varchar(9)  NOT NULL,
  Direccion1 varchar(10)  NOT NULL,
  Direccion2 varchar(10),
  PRIMARY KEY (Codigo,Direccion1)
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
	Titulo varchar (15) NOT NULL,
	Descripcion varchar (45) NOT NULL,
	Cod_Director varchar (9) NOT NULL,
	Cod_programa varchar (3) NOT NULL,
	PRIMARY KEY (Codigo)
)ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla profesor
--

CREATE TABLE profesor(
	Codigo varchar(9) NOT NULL,
	Nombre1 varchar(20) NOT NULL,
  	Nombre2 varchar(20) ,
  	Apellido1 varchar(20)  NOT NULL,
  	Apellido2 varchar(20),
	Tipo_documento varchar(2)  NOT NULL,
  	Numero_documento varchar(15)  NOT NULL,
	PRIMARY KEY (Codigo)
)ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;


-- --------------------------------------------------------



-- --------------------------------------------------------
--
-- Estructura de tabla para la tabla director
--

CREATE TABLE director (
	Codigo varchar (9) NOT NULL,
	PRIMARY KEY (Codigo)
)ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------


-- --------------------------------------------------------
--
-- Estructura de tabla para la tabla jurado
--

CREATE TABLE jurado (
	Codigo varchar (9) NOT NULL,
	PRIMARY KEY (Codigo)
)ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------


-- --------------------------------------------------------
--
-- Estructura de tabla para la tabla jurado_proyecto
--


CREATE TABLE jurado_proyecto (
	Codigo_jurado varchar (9) NOT NULL,
	Codigo_proyecto varchar (9) NOT NULL,
	PRIMARY KEY (Codigo_jurado,Codigo_proyecto)
)ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------


-- --------------------------------------------------------
--
-- Estructura de tabla para la tabla linea
--

CREATE TABLE linea (
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

CREATE TABLE linea_proyecto (
	Codigo_linea varchar (9) NOT NULL,
	Codigo_proyecto varchar (9) NOT NULL,
	PRIMARY KEY (Codigo_linea,Codigo_proyecto)
)ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;
-- --------------------------------------------------------


-- --------------------------------------------------------
--
-- Tablas n a n para jurado_proyecto y linea_proyecto
--

ALTER TABLE jurado_proyecto ADD CONSTRAINT ntonjurado_proyecto FOREIGN KEY (Codigo_jurado) REFERENCES jurado (Codigo);
ALTER TABLE jurado_proyecto ADD CONSTRAINT ntonproyecto_jurado FOREIGN KEY (Codigo_proyecto) REFERENCES proyecto (Codigo);

ALTER TABLE linea_proyecto ADD CONSTRAINT ntonlinea_proyecto FOREIGN KEY (Codigo_linea) REFERENCES linea (Codigo);
ALTER TABLE linea_proyecto ADD CONSTRAINT ntonproyecto_linea FOREIGN KEY (Codigo_proyecto) REFERENCES proyecto (Codigo);


-- --------------------------------------------------------

--
-- Foraneas de padre de director y jurado a profesor
--

ALTER TABLE director ADD CONSTRAINT pt_director FOREIGN KEY (Codigo) REFERENCES profesor (Codigo);
ALTER TABLE jurado ADD CONSTRAINT pt_jurado FOREIGN KEY (Codigo) REFERENCES profesor (Codigo);

-- --------------------------------------------------------

--
-- Foraneas a programa y director del proyecto
--

ALTER TABLE proyecto ADD CONSTRAINT fk_programa FOREIGN KEY (Cod_programa) REFERENCES proyecto(Codigo);
ALTER TABLE proyecto ADD CONSTRAINT fk_director FOREIGN KEY (Cod_Director) REFERENCES director(Codigo);

-- --------------------------------------------------------

--
-- Foraneas para los campos multivaluados en estudiante
--

 ALTER TABLE telefono ADD CONSTRAINT fk_tel FOREIGN KEY (Codigo) REFERENCES estudiante(Codigo);
  ALTER TABLE email ADD CONSTRAINT fk_email  FOREIGN KEY (Codigo) REFERENCES estudiante(Codigo);
  ALTER TABLE direccion ADD CONSTRAINT fk_direccion    FOREIGN KEY (Codigo) REFERENCES estudiante(Codigo);


