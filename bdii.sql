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

 ALTER TABLE telefono ADD CONSTRAINT fk_tel FOREIGN KEY (Codigo) REFERENCES estudiante(Codigo);
  ALTER TABLE email ADD CONSTRAINT fk_email  FOREIGN KEY (Codigo) REFERENCES estudiante(Codigo);
  ALTER TABLE direccion ADD CONSTRAINT fk_direccion    FOREIGN KEY (Codigo) REFERENCES estudiante(Codigo);


