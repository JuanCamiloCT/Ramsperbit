-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-08-2017 a las 10:45:57
-- Versión del servidor: 10.1.16-MariaDB
-- Versión de PHP: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ramspebit`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_consultarcorreo` (IN `_correo_electronico` VARCHAR(100))  NO SQL
SELECT * from cuenta where correo_electronico = _correo_electronico$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_consultarcorreo2` (IN `_correo_electronico` VARCHAR(100))  NO SQL
SELECT * from cuenta where correo_electronico = _correo_electronico$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_consultarusuariosuno` (IN `_nombre_usuario` VARCHAR(45))  NO SQL
SELECT idCuenta, nombre_usuario, contrasena, correo_electronico, imagen, estado, Rol_idrol from cuenta WHERE nombre_usuario = _nombre_usuario$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_identificacion` (IN `_identificacion` INT(11))  NO SQL
SELECT * from empleado where identificacion = _identificacion$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_InsertarCaja` (IN `_idCaja_compensacion` INT(11), IN `_descripcion` VARCHAR(45))  NO SQL
INSERT INTO caja_compensacion (idCaja_compensacion, descripcion) VALUES (_idCaja_compensacion, _descripcion)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_InsertarCategoria` (IN `_codCategoria` INT(11), IN `_descripcionc` VARCHAR(45))  NO SQL
INSERT INTO categoria (codCategoria, descripcionc) VALUES (_codCategoria, _descripcionc)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_InsertarCliente` (IN `_idCliente` INT(11), IN `_nombre` VARCHAR(45), IN `_tipo_cliente` VARCHAR(20), IN `_apellidos` VARCHAR(45), IN `_nit` VARCHAR(45), IN `_telefono` VARCHAR(15), IN `_direccion` VARCHAR(45))  NO SQL
INSERT INTO cliente (idCliente, nombre, tipo_cliente, apellidos, nit, telefono, direccion) VALUES(_idCliente, _nombre, _tipo_cliente, _apellidos, _nit, _telefono, _direccion)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_InsertarCuenta` (IN `_idCuenta` INT(11), IN `_nombre_usuario` VARCHAR(45), IN `_contrasena` VARCHAR(100), IN `_correo_electronico` VARCHAR(100), IN `_imagen` VARCHAR(200))  NO SQL
INSERT INTO cuenta (idCuenta, nombre_usuario, contrasena, correo_electronico, imagen) VALUES (_idCuenta, _nombre_usuario, _contrasena, _correo_electronico, _imagen)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_InsertarDllEntradasMP` (IN `_Entradas_codEntradas` INT(11), IN `_Materia_prima_codMateria_prima` INT(11), IN `_cantidad` INT(11), IN `_fecha_vencimiento` DATE)  NO SQL
BEGIN
INSERT INTO entradas_has_materia_prima(Entradas_codEntradas, Materia_prima_codMateria_prima, cantidad, fecha_vencimiento) VALUES (_Entradas_codEntradas, _Materia_prima_codMateria_prima, _cantidad, _fecha_vencimiento);

UPDATE materia_prima set cantidad = cantidad + _cantidad where 	codMateria_prima = _Materia_prima_codMateria_prima;

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_InsertarDllPedidOPL` (IN `_Cantidad` INT(11), IN `_Cod_Pedido` INT(11), IN `_Cod_producto` INT(11))  NO SQL
insert into detalle_producto_pedido(Cantidad, Cod_Pedido,Cod_producto)values (_Cantidad, _Cod_Pedido, _Cod_producto)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_InsertarDllSalidaMP` (IN `_Salidas_codSalidas` INT(11), IN `_Materia_prima_codMateria_prima` INT(11), IN `_cantidad` INT(11))  NO SQL
BEGIN
INSERT INTO salidas_has_materia_prima(Salidas_codSalidas, Materia_prima_codMateria_prima, cantidad) VALUES (_Salidas_codSalidas, _Materia_prima_codMateria_prima, _cantidad);

UPDATE materia_prima set cantidad = cantidad - _cantidad where 	codMateria_prima = _Materia_prima_codMateria_prima;

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_InsertarEmpleado` (IN `_idEmpleado` INT(11), IN `_Tipo_documento_idTipo_documento` INT(11), IN `_identificacion` INT(11), IN `_nombres` VARCHAR(45), IN `_apellidos` VARCHAR(45), IN `_fecha_nacimiento` DATE, IN `_celular` VARCHAR(12), IN `_rh` VARCHAR(45), IN `_correo_electronico` VARCHAR(100), IN `_fecha_ingreso` DATE, IN `_numero_hijos` INT(11), IN `_telefono_fijo` INT(11), IN `_direccion` VARCHAR(45), IN `_barrio` VARCHAR(45), IN `_municipio` VARCHAR(45), IN `_cargo` VARCHAR(20), IN `_profesion_idProfesion` INT(11), IN `_nivel_estudio_idNivel_estudio` INT(11), IN `_cesantias` VARCHAR(45), IN `_Pension_idPension` INT(11), IN `_Caja_compensacion_idCaja_compensacion` INT(11), IN `_Tipo_contrato` VARCHAR(20), IN `_procesos` VARCHAR(45), IN `_eps_idEPS` INT(11), IN `_fecha_ingreso_eps` DATE, IN `_Genero_idGenero` INT(11), IN `_cuenta_idCuenta` INT(11))  NO SQL
INSERT INTO empleado (idEmpleado, Tipo_documento_idTipo_documento, identificacion, nombres, apellidos, fecha_nacimiento, celular, rh, correo_electronico, fecha_ingreso, numero_hijos, telefono_fijo, direccion, barrio, municipio, cargo, profesion_idProfesion, nivel_estudio_idNivel_estudio, cesantias, Pension_idPension, Caja_compensacion_idCaja_compensacion, Tipo_contrato, procesos, eps_idEPS, fecha_ingreso_eps, Genero_idGenero, cuenta_idCuenta) VALUES (_idEmpleado, _Tipo_documento_idTipo_documento, _identificacion, _nombres, _apellidos, _fecha_nacimiento, _celular, _rh, _correo_electronico, _fecha_ingreso, _numero_hijos, _telefono_fijo, _direccion, _barrio, _municipio, _cargo, _profesion_idProfesion, _nivel_estudio_idNivel_estudio, _cesantias, _Pension_idPension, _Caja_compensacion_idCaja_compensacion, _Tipo_contrato, _procesos, _eps_idEPS, _fecha_ingreso_eps, _Genero_idGenero, _cuenta_idCuenta)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_InsertarEntradas` (IN `_codEntradas` INT(11), IN `_fecha` DATE, IN `_Empleado_idEmpleado` INT(11), IN `_estado` INT(11))  NO SQL
insert into entradas (codEntradas,fecha,Empleado_idEmpleado,estado)VALUES
(_codEntradas,_fecha,_Empleado_idEmpleado,1)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_InsertarEps` (IN `_idEPS` INT(11), IN `_nombre` VARCHAR(45), IN `_abreviatura` VARCHAR(45))  NO SQL
insert into eps (idEPS, nombre, abreviatura) VALUES (_idEPS, _nombre, _abreviatura)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_InsertarFT` (IN `_codFicha` INT(11), IN `_nombre` VARCHAR(45), IN `_descripcion` TEXT, IN `_lugar_elaboracion` VARCHAR(45), IN `_info_Contacto` VARCHAR(45), IN `_nombre_cientifico` VARCHAR(45), IN `_forma_farmaceutica_cod_forma` VARCHAR(45), IN `_Unidad_medida_codUnidad_medida` INT(11), IN `_Presentacion_codPresentacion` INT(11), IN `_recomendacion` TEXT, IN `_procedimientos` TEXT, IN `_usos` TEXT)  NO SQL
insert into ficha_tecnica(codFicha,nombre,descripcion,lugar_elaboracion,info_Contacto,nombre_cientifico,forma_farmaceutica_cod_forma,Unidad_medida_codUnidad_medida,Presentacion_codPresentacion,recomendacion,procedimientos,usos) VALUES (_codFicha,_nombre,_descripcion,_lugar_elaboracion,_info_Contacto,_nombre_cientifico,_forma_farmaceutica_cod_forma,_Unidad_medida_codUnidad_medida,_Presentacion_codPresentacion,_recomendacion,_procedimientos,_usos)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_InsertarGenero` (IN `_idGenero` INT(11), IN `_nombre` VARCHAR(45))  NO SQL
insert INTO genero (idGenero, nombre)VALUES (_idGenero, _nombre)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_InsertarLote` (IN `_codLote` INT(11), IN `_descripcion` VARCHAR(45), IN `_producto_codProducto` INT(11), IN `_cantidad` INT(11))  NO SQL
INSERT INTO lote (codLote, descripcion, producto_codProducto, cantidad) VALUES(_codLote, _descripcion, _producto_codProducto, _cantidad )$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_InsertarMedida` (IN `_codUnidad_medida` INT(11), IN `_nombreu` VARCHAR(45), IN `_abreviatura` VARCHAR(45))  NO SQL
INSERT INTO unidad_medida (codUnidad_medida, nombreu, abreviatura) VALUES (_codUnidad_medida, _nombreu, _abreviatura)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_InsertarMP` (IN `_codMateria_prima` INT(11), IN `_nombre` VARCHAR(45), IN `_precio` INT(11), IN `_descripcion` VARCHAR(45), IN `_stock_min` INT(11), IN `_presentacion` INT(45), IN `_estado` INT(1), IN `_Unidad_medida_codUnidad_medida` VARCHAR(45))  NO SQL
INSERT INTO materia_prima (codMateria_prima, nombre, precio, descripcion, stock_min, presentacion, estado, Unidad_medida_codUnidad_medida) VALUES (_codMateria_prima, _nombre, _precio, _descripcion,_stock_min, _presentacion,1,  _Unidad_medida_codUnidad_medida)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_InsertarNivelEstudio` (IN `_idNivel_estudio` INT(11), IN `_descripcion` VARCHAR(45))  NO SQL
insert INTO nivel_estudio (idNivel_estudio, descripcion) VALUES (_idNivel_estudio, _descripcion)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_InsertarOrden` (IN `_codProduccion` INT(11), IN `_fecha_inicio` DATE, IN `_fecha_finalizacion` DATE, IN `_ficha_tecnica_codFicha` INT(11), IN `_canti` INT(11), IN `_Empleado_idEmpleado` INT(11))  NO SQL
INSERT INTO produccion (codProduccion, fecha_inicio, fecha_finalizacion, canti, ficha_tecnica_codFicha, Empleado_idEmpleado) VALUES(_codProduccion, _fecha_inicio, _fecha_finalizacion, _canti, _ficha_tecnica_codFicha, _Empleado_idEmpleado)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_InsertarPedido` (IN `_codPedido` INT(11), IN `_fecha` DATE, IN `_Cliente_idCliente` INT(11), IN `_estado` BIT(1))  NO SQL
INSERT INTO pedido (codPedido,fecha,Cliente_idCliente,estado) VALUES (_codPedido, _fecha, _Cliente_idCliente, 0)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_InsertarPension` (IN `_idPension` INT(11), IN `_nombre` VARCHAR(45), IN `_abreviatura` VARCHAR(45), IN `_fecha_ingreso` DATE)  NO SQL
INSERT INTO pension (idPension, nombre, abreviatura, fecha_ingreso) VALUES (_idPension, _nombre, _abreviatura, _fecha_ingreso)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_InsertarPresentacion` (IN `_codPresentacion` INT(11), IN `_descripcionp` VARCHAR(45))  NO SQL
INSERT INTO presentacion (codPresentacion, descripcionp) VALUES (_codPresentacion, _descripcionp)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_InsertarProducto` (IN `_codProducto` INT(11), IN `_nombre` VARCHAR(100), IN `_cantidad_actual` INT(11), IN `_Stock_minimo` INT(11), IN `_ubicacion` VARCHAR(20), IN `_descripcion` VARCHAR(45), IN `_Categoria_idCategoria` INT(11), IN `_Unidad_medida_codUnidad_medida` INT(11), IN `_Presentacion_codPresentacion` INT(11))  NO SQL
INSERT INTO producto (codProducto, nombre, cantidad_actual, Stock_minimo, ubicacion, descripcion, Categoria_idCategoria, Unidad_medida_codUnidad_medida, Presentacion_codPresentacion) VALUES (_codProducto, _nombre, _cantidad_actual, _Stock_minimo, _ubicacion, _descripcion, _Categoria_idCategoria, _Unidad_medida_codUnidad_medida, _Presentacion_codPresentacion)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_InsertarProfesion` (IN `_idProfesion` INT(11), IN `_descripcion` VARCHAR(45))  NO SQL
INSERT into profesion (idProfesion, descripcion) VALUES (_idProfesion, _descripcion)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_InsertarSalida` (IN `_codSalidas` INT(11), IN `_fecha` DATE, IN `_estado` BIT(1), IN `_Empleado_idEmpleado` INT(11))  NO SQL
INSERT INTO salidas (codSalidas, fecha, estado,Empleado_idEmpleado) VALUES(_codSalidas, _fecha, 1,_Empleado_idEmpleado )$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_InsertarTipoDocumento` (IN `_idTipo_documento` INT(11), IN `_descripcion` VARCHAR(45))  NO SQL
insert into tipo_documento (idTipo_documento, descripcion) VALUES (_idTipo_documento, _descripcion)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_ListarCaja` ()  NO SQL
SELECT idCaja_compensacion, descripcion, estadoc FROM caja_compensacion$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_ListarCategoria` ()  NO SQL
SELECT codCategoria, descripcionc, estado FROM categoria ORDER BY codCategoria DESC$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_ListarCliente` ()  NO SQL
SELECT idCliente, nombre, tipo_cliente,apellidos, nit, telefono, direccion, estado FROM cliente ORDER BY idCliente DESC$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_ListarCliente2` ()  NO SQL
SELECT idCliente,nit, nombre, telefono, direccion, estado FROM cliente WHERE tipo_cliente ='Empresa'$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_ListarCliente3` ()  NO SQL
SELECT idCliente, nombre,apellidos, telefono, direccion,estado FROM cliente where tipo_cliente = 'Persona'$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_ListarClientesON` ()  NO SQL
SELECT idCliente,nombre,estado FROM cliente where estado = 1$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_ListarCuenta` ()  NO SQL
SELECT c.idCuenta, c.nombre_usuario, c.correo_electronico, c.imagen, c.estado, r.nombre FROM cuenta c INNER JOIN rol r ON c.Rol_idrol = r.idrol$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_ListarEmpleados` ()  NO SQL
SELECT idEmpleado, Tipo_documento_idTipo_documento, identificacion, nombres, apellidos, fecha_nacimiento, celular, rh, correo_electronico, fecha_ingreso, numero_hijos, telefono_fijo, direccion, barrio, municipio, cargo, profesion_idProfesion, nivel_estudio_idNivel_estudio, cesantias, Pension_idPension, Caja_compensacion_idCaja_compensacion, Tipo_contrato, procesos, eps_idEPS, fecha_ingreso_eps, Genero_idGenero, cuenta_idCuenta, estado FROM empleado$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_ListarEmpleados2` ()  NO SQL
SELECT idEmpleado, Tipo_documento_idTipo_documento, identificacion, nombres, apellidos, fecha_nacimiento, celular, rh, correo_electronico, fecha_ingreso, numero_hijos, telefono_fijo, direccion, barrio, municipio, cargo, profesion_idProfesion, nivel_estudio_idNivel_estudio, cesantias, Pension_idPension, Caja_compensacion_idCaja_compensacion, Tipo_contrato, procesos, eps_idEPS, fecha_ingreso_eps, Genero_idGenero, cuenta_idCuenta, estado FROM empleado WHERE Tipo_contrato = 'Definido'$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_ListarEmpleados3` ()  NO SQL
SELECT idEmpleado, Tipo_documento_idTipo_documento, identificacion, nombres, apellidos, fecha_nacimiento, celular, rh, correo_electronico, fecha_ingreso, numero_hijos, telefono_fijo, direccion, barrio, municipio, cargo, profesion_idProfesion, nivel_estudio_idNivel_estudio, cesantias, Pension_idPension, Caja_compensacion_idCaja_compensacion, Tipo_contrato, procesos, eps_idEPS, fecha_ingreso_eps, Genero_idGenero, cuenta_idCuenta, estado FROM empleado WHERE Tipo_contrato = 'Indefinido'$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_ListarEntrada` ()  NO SQL
SELECT e.codEntradas, e.fecha, e.estado, e.Empleado_idEmpleado,em.nombres as nombre_empleado FROM entradas e INNER JOIN empleado em on e.Empleado_idEmpleado = em.idEmpleado$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_ListarEps` ()  NO SQL
SELECT idEPS, nombre, abreviatura, estadoe FROM eps$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_ListarEstado` ()  NO SQL
SELECT codEstado, estado from estados$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_ListarFicha` ()  NO SQL
SELECT ft.codFicha,ft.nombre,ft.descripcion,ft.lugar_elaboracion,ft.info_Contacto,ft.nombre_cientifico,ft.forma_farmaceutica_cod_forma,uni.nombreu as unidad ,p.descripcionp as presentacion ,ft.recomendacion,ft.procedimientos,ft.usos,ft.estado from ficha_tecnica ft INNER JOIN presentacion p on ft.Presentacion_codPresentacion = p.codPresentacion INNER join unidad_medida uni on ft.Unidad_medida_codUnidad_medida = uni.codUnidad_medida$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_ListarGenero` ()  NO SQL
SELECT idGenero, nombre, estadog from genero$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_ListarLote` ()  NO SQL
SELECT l.codLote, l.descripcion, p.nombre, l.cantidad, l.estado FROM lote l INNER JOIN producto p ON p.codProducto = l.producto_codProducto$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_ListarMateriaPrima` ()  NO SQL
SELECT m.codMateria_prima, m.nombre, m.precio, m.descripcion,m.cantidad,m.stock_min,p.descripcionp as presentacion, e.estado as estado,u.nombreu as Unidad_medida_codUnidad_medida  FROM materia_prima m INNER JOIN presentacion p on m.presentacion = p.codPresentacion INNER join unidad_medida u on m.Unidad_medida_codUnidad_medida = u.codUnidad_medida INNER JOIN estados e on m.estado = e.codEstado$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_ListarMedida` ()  NO SQL
SELECT codUnidad_medida, nombreu, abreviatura,estado FROM unidad_medida ORDER BY codUnidad_medida DESC$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_ListarMedidaAct` ()  NO SQL
SELECT codUnidad_medida, nombreu, abreviatura,estado FROM unidad_medida where estado = 1 ORDER BY codUnidad_medida DESC$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_ListarMPApro` ()  NO SQL
SELECT codMateria_prima, nombre,cantidad,stock_min, estado FROM materia_prima where estado = 2 ORDER BY codMateria_prima ASC$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_ListarNivelEstudio` ()  NO SQL
SELECT idNivel_estudio, descripcion, estadon from nivel_estudio$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_ListarOrden` ()  NO SQL
SELECT p.codProduccion, p.fecha_inicio, p.fecha_finalizacion, p.canti, p.estado, e.nombres, p.ficha_tecnica_codFicha FROM produccion p INNER JOIN empleado e ON p.Empleado_idEmpleado = e.idEmpleado$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_ListarPedido` ()  NO SQL
select pe.codPedido,pe.fecha,pe.Cliente_idCliente,c.nombre as nombre ,pe.estado from pedido pe inner join cliente c on pe.Cliente_idCliente = c.idCliente$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_ListarPension` ()  NO SQL
SELECT idPension, nombre, abreviatura, fecha_ingreso, estadop from pension$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_ListarPresentacion` ()  NO SQL
SELECT codPresentacion, descripcionp, estado FROM presentacion ORDER BY codPresentacion DESC$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_ListarProducto` ()  NO SQL
SELECT p.codProducto, p.nombre, p.cantidad_actual, p.Stock_minimo, p.ubicacion, p.descripcion, c.descripcionc, u.nombreu, pr.descripcionp, p.estado FROM producto p INNER JOIN categoria c ON p.Categoria_idCategoria = c.codCategoria 
INNER JOIN unidad_medida u ON p.Unidad_medida_codUnidad_medida = u.codUnidad_medida 
INNER JOIN presentacion pr ON p.Presentacion_codPresentacion = pr.codPresentacion$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_ListarProductosON` ()  NO SQL
SELECT codProducto,	nombre, estado from producto where estado = 0$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_ListarProfesion` ()  NO SQL
SELECT idProfesion, descripcion, estadopr from profesion$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_ListarSalidas` ()  NO SQL
SELECT s.codSalidas, s.fecha, s.estado, s.Empleado_idEmpleado,em.nombres as nombre_empleado FROM salidas s INNER JOIN empleado em on s.Empleado_idEmpleado = em.idEmpleado$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_ListarTipoDocumento` ()  NO SQL
SELECT idTipo_documento, descripcion, estadod from tipo_documento$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_MateriaStock` (IN `_codMateria_prima` INT(11))  NO SQL
SELECT codMateria_prima, nombre, cantidad,stock_min FROM materia_prima WHERE codMateria_prima = _codMateria_prima$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_modificarclave` (IN `_idCuenta` INT(11), IN `_contrasena` VARCHAR(100))  NO SQL
update cuenta set contrasena = _contrasena WHERE idCuenta = _idCuenta$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_ModificarCliente` (IN `_idCliente` INT(11), IN `_nombre` VARCHAR(45), IN `_tipo_cliente` VARCHAR(20), IN `_apellidos` VARCHAR(45), IN `_nit` VARCHAR(45), IN `_telefono` VARCHAR(15), IN `_direccion` VARCHAR(45))  NO SQL
UPDATE cliente SET idCliente = _idCliente, nombre = _nombre, tipo_cliente = _tipo_cliente, apellidos = _apellidos, nit = _nit, telefono = _telefono, direccion = _direccion WHERE idCliente = _idCliente$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_ModificarCuenta` (IN `_idCuenta` INT(11), IN `_nombre_usuario` VARCHAR(45), IN `_contrasena` VARCHAR(100), IN `_correo_electronico` VARCHAR(100), IN `_imagen` VARCHAR(200), IN `_Rol_idrol` INT(11))  NO SQL
UPDATE cuenta SET idCuenta = _idCuenta, nombre_usuario = _nombre_usuario, contrasena = _contrasena, correo_electronico = _correo_electronico, imagen = _imagen, Rol_idrol = _Rol_idrol WHERE idCuenta = _idCuenta$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_ModificarEmpleados` (IN `_idEmpleado` INT(11), IN `_Tipo_documento_idTipo_documento` INT(11), IN `_identificacion` INT(11), IN `_nombres` VARCHAR(45), IN `_apellidos` VARCHAR(45), IN `_fecha_nacimiento` DATE, IN `_celular` VARCHAR(12), IN `_rh` VARCHAR(45), IN `_correo_electronico` VARCHAR(100), IN `_fecha_ingreso` DATE, IN `_numero_hijos` INT(11), IN `_telefono_fijo` INT(11), IN `_direccion` VARCHAR(45), IN `_barrio` VARCHAR(45), IN `_municipio` VARCHAR(45), IN `_cargo` VARCHAR(20), IN `_profesion_idProfesion` INT(11), IN `_nivel_estudio_idNivel_estudio` INT(11), IN `_cesantias` VARCHAR(45), IN `_Pension_idPension` INT(11), IN `_Caja_compensacion_idCaja_compensacion` INT(11), IN `_Tipo_contrato` VARCHAR(20), IN `_procesos` VARCHAR(45), IN `_eps_idEPS` INT(11), IN `_fecha_ingreso_eps` DATE, IN `_Genero_idGenero` INT(11), IN `_cuenta_idCuenta` INT(11))  NO SQL
UPDATE empleado SET idEmpleado = _idEmpleado, Tipo_documento_idTipo_documento = _Tipo_documento_idTipo_documento, identificacion = _identificacion, nombres = _nombres, apellidos = _apellidos, fecha_nacimiento = _fecha_nacimiento, celular = _celular, rh = _rh, correo_electronico = _correo_electronico, fecha_ingreso = _fecha_ingreso, numero_hijos = _numero_hijos, telefono_fijo = _telefono_fijo, direccion = _direccion, barrio = _barrio, municipio = _municipio, cargo = _cargo, profesion_idProfesion = _profesion_idProfesion, nivel_estudio_idNivel_estudio = _nivel_estudio_idNivel_estudio, cesantias = _cesantias, Pension_idPension = _Pension_idPension, Caja_compensacion_idCaja_compensacion = _Caja_compensacion_idCaja_compensacion, Tipo_contrato = _Tipo_contrato, procesos = _procesos, eps_idEPS = _eps_idEPS, fecha_ingreso_eps = _fecha_ingreso_eps, Genero_idGenero = _Genero_idGenero, cuenta_idCuenta = _cuenta_idCuenta WHERE idEmpleado = _idEmpleado$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_ModificarEntrada` (IN `_codEntradas` INT, IN `_fecha` DATE, IN `_Empleado_idEmpleado` INT)  NO SQL
UPDATE entradas SET codEntradas = _codEntradas, fecha = _fecha, Empleado_idEmpleado = _Empleado_idEmpleado   WHERE `entradas`.`codEntradas` = _codEntradas$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_ModificarEstadoCaja` (IN `_idCaja_compensacion` INT(11), IN `_estadoc` INT(1))  NO SQL
update caja_compensacion set estadoc = _estadoc where idCaja_compensacion = _idCaja_compensacion$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_ModificarEstadoCate` (IN `_codCategoria` INT, IN `_estado` INT)  NO SQL
update categoria set estado = _estado where codCategoria = _codCategoria$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_ModificarEstadoCliente` (IN `_idCliente` INT(11), IN `_estado` INT(1))  NO SQL
UPDATE cliente SET estado = _estado WHERE idCliente = _idCliente$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_ModificarEstadoCuenta` (IN `_idCuenta` INT(11), IN `_estado` INT(1))  NO SQL
UPDATE cuenta SET estado = _estado WHERE idCuenta = _idCuenta$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_ModificarEstadoDocumet` (IN `_idTipo_documento` INT(11), IN `_estadod` INT(1))  NO SQL
update tipo_documento set estadod = _estadod where idTipo_documento = _idTipo_documento$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_ModificarEstadoEmpleado` (IN `_idEmpleado` INT(11), IN `_estado` INT(1))  NO SQL
UPDATE empleado set estado = _estado WHERE idEmpleado = _idEmpleado$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_ModificarEstadoEn` (IN `_codEntradas` INT(11), IN `_estado` INT(1))  NO SQL
UPDATE entradas SET estado = _estado WHERE codEntradas = _codEntradas$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_ModificarEstadoEPS` (IN `_idEPS` INT(11), IN `_estadoe` INT(1))  NO SQL
update eps set estadoe = _estadoe where idEPS = _idEPS$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_ModificarEstadoFT` (IN `_codFicha` INT(11), IN `_estado` INT(1))  NO SQL
UPDATE ficha_tecnica set estado = _estado where codFicha  = _codFicha$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_ModificarEstadoGene` (IN `_idGenero` INT(11), IN `_estadog` INT(1))  NO SQL
update genero set estadog = _estadog where idGenero = _idGenero$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_ModificarEstadoLote` (IN `_codLote` INT(11), IN `_estado` INT(1))  NO SQL
UPDATE lote SET estado = _estado WHERE codLote = _codLote$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_ModificarEstadoMP` (IN `_codMateria_prima` INT(11), IN `_estado` INT(1))  NO SQL
UPDATE materia_prima SET estado = _estado WHERE codMateria_prima = _codMateria_prima$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_ModificarEstadoNivel` (IN `_idNivel_estudio` INT(11), IN `_estadon` INT(1))  NO SQL
update nivel_estudio set estadon = _estadon where idNivel_estudio = _idNivel_estudio$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_ModificarEstadoOrden` (IN `_codProduccion` INT(11), IN `_estado` INT(1))  NO SQL
UPDATE produccion SET estado = _estado WHERE codProduccion = _codProduccion$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_ModificarEstadoPe` (IN `_codPedido` INT(11), IN `_estado` INT(1))  NO SQL
UPDATE pedido SET estado = _estado WHERE codPedido = _codPedido$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_ModificarEstadoPension` (IN `_idPension` INT(11), IN `_estadop` INT(1))  NO SQL
update pension set estadop = _estadop where idPension = _idPension$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_ModificarEstadoPre` (IN `_codPresentacion` INT(11), IN `_estado` INT(1))  NO SQL
update presentacion set estado = _estado where codPresentacion = _codPresentacion$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_ModificarEstadoProducto` (IN `_codProducto` INT(11), IN `_estado` INT(1))  NO SQL
UPDATE producto SET estado = _estado WHERE codProducto = _codProducto$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_ModificarEstadoProfesion` (IN `_idProfesion` INT(11), IN `_estadopr` INT(1))  NO SQL
update profesion set estadopr = _estadopr where idProfesion = _idProfesion$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_ModificarEstadoSa` (IN `_codSalidas` INT(11), IN `_estado` INT)  NO SQL
UPDATE salidas SET estado = _estado WHERE codSalidas = _codSalidas$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_ModificarEstadoUni` (IN `_codUnidad_medida` INT(11), IN `_estado` INT(1))  NO SQL
update unidad_medida set estado = _estado where codUnidad_medida = _codUnidad_medida$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_ModificarFT` (IN `_codFicha` INT(11), IN `_nombre` VARCHAR(45), IN `_descripcion` TEXT, IN `_lugar_elaboracion` VARCHAR(45), IN `_info_Contacto` VARCHAR(45), IN `_nombre_cientifico` VARCHAR(45), IN `_forma_farmaceutica_cod_forma` VARCHAR(45), IN `_Unidad_medida_codUnidad_medida` INT(11), IN `_Presentacion_codPresentacion` INT(11), IN `_recomendacion` TEXT, IN `_procedimientos` TEXT, IN `_usos` TEXT)  NO SQL
UPDATE ficha_tecnica SET nombre = _nombre, descripcion = _descripcion, lugar_elaboracion = _lugar_elaboracion, info_Contacto = _info_Contacto, nombre_cientifico = _nombre_cientifico, forma_farmaceutica_cod_forma = _forma_farmaceutica_cod_forma, Unidad_medida_codUnidad_medida = _Unidad_medida_codUnidad_medida, Presentacion_codPresentacion = _Presentacion_codPresentacion, recomendacion = _recomendacion, procedimientos = _procedimientos, usos = _usos WHERE  codFicha = _codFicha$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_ModificarLote` (IN `_codLote` INT(11), IN `_descripcion` VARCHAR(45), IN `_producto_codProducto` INT(11), IN `_cantidad` INT(11))  NO SQL
UPDATE lote SET codLote = _codLote, descripcion =_descripcion, producto_codProducto = _producto_codProducto, cantidad = _cantidad WHERE codLote = _codLote$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_ModificarMedida` (IN `_codUnidad_medida` INT(11), IN `_nombreu` VARCHAR(45), IN `_abreviatura` VARCHAR(45))  NO SQL
UPDATE unidad_medida set nombreu = _nombreu, abreviatura = _abreviatura where codUnidad_medida = _codUnidad_medida$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_ModificarMP` (IN `_codMateria_prima` INT(11), IN `_nombre` VARCHAR(45), IN `_precio` INT(11), IN `_descripcion` VARCHAR(45), IN `_cantidad` INT(11), IN `_stock_min` INT(11), IN `_presentacion` VARCHAR(45), IN `_estado` INT(1), IN `_Unidad_medida_codUnidad_medida` INT(11))  NO SQL
UPDATE materia_prima SET codMateria_prima = _codMateria_prima, nombre = _nombre, precio = _precio, descripcion = _descripcion,cantidad = _cantidad, stock_min = _stock_min, presentacion = _presentacion,estado = _estado, Unidad_medida_codUnidad_medida = _Unidad_medida_codUnidad_medida WHERE codMateria_prima = _codMateria_prima$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_ModificarOrden` (IN `_codProduccion` INT(11), IN `_fecha_inicio` DATE, IN `_fecha_finalizacion` DATE, IN `_ficha_tecnica_codFicha` INT(11), IN `_canti` INT(11), IN `_Empleado_idEmpleado` INT(11))  NO SQL
UPDATE produccion SET codProduccion = _codProduccion, fecha_inicio = _fecha_inicio, fecha_finalizacion = _fecha_finalizacion, ficha_tecnica_codFicha = _ficha_tecnica_codFicha, canti = _canti , Empleado_idEmpleado = _Empleado_idEmpleado WHERE codProduccion = _codProduccion$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_ModificarPedido` (IN `_codPedido` INT(11), IN `_fecha` DATE, IN `_Cliente_idCliente` INT(11))  NO SQL
UPDATE pedido set codPedido = _codPedido,  fecha = _fecha, Cliente_idCliente = _Cliente_idCliente where codPedido = _codPedido$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_ModificarProducto` (IN `_codProducto` INT(11), IN `_nombre` VARCHAR(100), IN `_cantidad_actual` INT(11), IN `_Stock_minimo` INT(11), IN `_ubicacion` VARCHAR(20), IN `_descripcion` VARCHAR(45), IN `_Categoria_idCategoria` INT(11), IN `_Unidad_medida_codUnidad_medida` INT(11), IN `_Presentacion_codPresentacion` INT(11))  NO SQL
UPDATE producto SET codProducto = _codProducto, nombre = _nombre, cantidad_actual = _cantidad_actual, Stock_minimo = _Stock_minimo, ubicacion = _ubicacion, descripcion = _descripcion, Categoria_idCategoria = _Categoria_idCategoria, Unidad_medida_codUnidad_medida = _Unidad_medida_codUnidad_medida, Presentacion_codPresentacion = _Presentacion_codPresentacion WHERE codProducto = _codProducto$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_ModificarSalida` (IN `_codSalidas` INT(11), IN `_fecha` DATE, IN `_estado` VARCHAR(20), IN `_Empleado_idEmpleado` INT(11))  NO SQL
UPDATE salidas SET codSalidas = _codSalidas, fecha = _fecha,  Empleado_idEmpleado = _Empleado_idEmpleado  WHERE codSalidas = _codSalidas$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_UltimaEntrada` ()  NO SQL
select max(codEntradas)+1 as ultima from entradas$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_UltimaMP` ()  NO SQL
select max(codMateria_prima)+1 as ultima from materia_prima$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_UltimaSalida` ()  NO SQL
select max(codSalidas)+1 as ultima from salidas$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_UltimoPedido` ()  NO SQL
select max(codPedido)+1 as ultima from pedido$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_ver` (IN `_id` INT(11))  NO SQL
SELECT e.idEmpleado,e.Tipo_documento_idTipo_documento, t.descripcion as descripcion , e.identificacion, e.nombres, e.apellidos, e.fecha_nacimiento, e.celular, e.rh, e.correo_electronico, e.fecha_ingreso, e.numero_hijos, e.telefono_fijo, e.direccion, e.barrio, e.municipio, e.cargo,e.profesion_idProfesion, pr.descripcion as dp,e.nivel_estudio_idNivel_estudio,  ni.descripcion as dni, e.cesantias,e.Pension_idPension, pe.nombre as nombrepe,e.Caja_compensacion_idCaja_compensacion, ca.descripcion as descca, e.Tipo_contrato, e.procesos,e.eps_idEPS, ep.nombre as nombreep, e.fecha_ingreso_eps,e.Genero_idGenero, ge.nombre as nombrege,e.cuenta_idCuenta, cu.nombre_usuario , e.estado FROM empleado e INNER JOIN tipo_documento t ON e.Tipo_documento_idTipo_documento = t.idTipo_documento
INNER JOIN profesion pr ON e.profesion_idProfesion = pr.idProfesion
INNER JOIN nivel_estudio ni ON e.nivel_estudio_idNivel_estudio = ni.idNivel_estudio
INNER JOIN pension pe ON e.Pension_idPension = pe.idPension
INNER JOIN caja_compensacion ca ON e.Caja_compensacion_idCaja_compensacion = ca.idCaja_compensacion  
INNER JOIN eps ep ON e.eps_idEPS = ep.idEPS
INNER JOIN genero ge ON e.Genero_idGenero = ge.idGenero
INNER JOIN cuenta cu ON e.cuenta_idCuenta = cu.idCuenta
WHERE e.idEmpleado = _id$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_verPro` (IN `_id` INT(11))  NO SQL
SELECT p.codProducto, p.nombre, p.cantidad_actual, p.Stock_minimo, p.ubicacion, p.descripcion, c.descripcionc, u.nombreu, pr.descripcionp, p.estado FROM producto p INNER JOIN categoria c ON p.Categoria_idCategoria = c.codCategoria 
INNER JOIN unidad_medida u ON p.Unidad_medida_codUnidad_medida = u.codUnidad_medida 
INNER JOIN presentacion pr ON p.Presentacion_codPresentacion = pr.codPresentacion WHERE p.codProducto = _id$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `caja_compensacion`
--

CREATE TABLE `caja_compensacion` (
  `idCaja_compensacion` int(11) NOT NULL,
  `descripcion` varchar(45) DEFAULT NULL,
  `estadoc` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `caja_compensacion`
--

INSERT INTO `caja_compensacion` (`idCaja_compensacion`, `descripcion`, `estadoc`) VALUES
(4, 'Comfama', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `codCategoria` int(11) NOT NULL,
  `descripcionc` varchar(45) NOT NULL,
  `estado` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`codCategoria`, `descripcionc`, `estado`) VALUES
(5, 'Comercial', 0),
(6, 'Institucional', 1),
(10, 'General', 0),
(11, 'Preventa regional', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `idCliente` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `Apellidos` varchar(45) DEFAULT NULL,
  `nit` varchar(45) DEFAULT NULL,
  `telefono` varchar(15) DEFAULT NULL,
  `direccion` varchar(45) DEFAULT NULL,
  `tipo_cliente` varchar(20) NOT NULL,
  `estado` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`idCliente`, `nombre`, `Apellidos`, `nit`, `telefono`, `direccion`, `tipo_cliente`, `estado`) VALUES
(12, 'Hector', 'Correa', '', '8879787', 'Calle moscu', 'Persona', 1),
(13, 'Farmaco', '', '87878', '5444545', 'Calle sur 4', 'Empresa', 0),
(14, 'Marta', 'Torres', '', '60586975', 'Carrera 86', 'Persona', 1),
(15, 'Bayer', '', '1152714002', '5260018', 'Barrio colombia ', 'Empresa', 1),
(17, 'Andres', 'Perez', '', '5888887', 'El diamante calle 89', 'Persona', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuenta`
--

CREATE TABLE `cuenta` (
  `idCuenta` int(11) NOT NULL,
  `nombre_usuario` varchar(45) NOT NULL,
  `contrasena` varchar(100) NOT NULL,
  `correo_electronico` varchar(100) NOT NULL,
  `imagen` varchar(200) NOT NULL,
  `estado` int(1) NOT NULL DEFAULT '1',
  `Rol_idrol` int(11) NOT NULL DEFAULT '3'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cuenta`
--

INSERT INTO `cuenta` (`idCuenta`, `nombre_usuario`, `contrasena`, `correo_electronico`, `imagen`, `estado`, `Rol_idrol`) VALUES
(13, 'administrador', '885c0jd70f', 'rjracer007@gmail.com', 'img/administrador.jpg', 1, 1),
(16, 'admin2', '123', 'rjracer006@gmail.com', 'img/admin2.jpg', 1, 1),
(17, 'super', '123', 'lfcastano40@misena.edu.co', 'img/elver2.jpg', 1, 2),
(20, 'Lorena', '123', 'Loren-ita2001@hotmail.com', 'img/Lorena.png', 1, 3),
(22, 'emp', '88hf87bf47', 'gutierrezdiaz93@gmail.com', 'img/juanma98.jpg', 1, 3),
(23, 'nnn', '123', 'jajaja33@gmail.com', 'img/nnn.', 1, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_producto_pedido`
--

CREATE TABLE `detalle_producto_pedido` (
  `idDetalle_Producto_Pedido` int(11) NOT NULL,
  `Cantidad` int(11) NOT NULL,
  `Cod_Pedido` int(11) NOT NULL,
  `Cod_producto` int(11) NOT NULL,
  `Producto_has_Lote_Producto_has_Lotecol` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `detalle_producto_pedido`
--

INSERT INTO `detalle_producto_pedido` (`idDetalle_Producto_Pedido`, `Cantidad`, `Cod_Pedido`, `Cod_producto`, `Producto_has_Lote_Producto_has_Lotecol`) VALUES
(1, 44, 0, 6, 1),
(2, 66, 1, 4, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE `empleado` (
  `idEmpleado` int(11) NOT NULL,
  `identificacion` int(11) NOT NULL,
  `nombres` varchar(45) NOT NULL,
  `apellidos` varchar(45) NOT NULL,
  `rh` varchar(45) NOT NULL,
  `celular` varchar(12) DEFAULT NULL,
  `fecha_nacimiento` date NOT NULL,
  `correo_electronico` varchar(100) NOT NULL,
  `fecha_ingreso` date NOT NULL,
  `numero_hijos` int(11) NOT NULL,
  `telefono_fijo` int(11) NOT NULL,
  `estado` int(1) NOT NULL DEFAULT '1',
  `Pension_idPension` int(11) NOT NULL,
  `Caja_compensacion_idCaja_compensacion` int(11) NOT NULL,
  `Tipo_contrato` varchar(20) NOT NULL,
  `direccion` varchar(45) NOT NULL,
  `barrio` varchar(45) NOT NULL,
  `municipio` varchar(45) NOT NULL,
  `Tipo_documento_idTipo_documento` int(11) NOT NULL,
  `Genero_idGenero` int(11) NOT NULL,
  `cesantias` varchar(45) NOT NULL,
  `procesos` varchar(45) NOT NULL,
  `cargo` varchar(20) NOT NULL,
  `nivel_estudio_idNivel_estudio` int(11) NOT NULL,
  `profesion_idProfesion` int(11) NOT NULL,
  `eps_idEPS` int(11) NOT NULL,
  `fecha_ingreso_eps` date DEFAULT NULL,
  `cuenta_idCuenta` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `empleado`
--

INSERT INTO `empleado` (`idEmpleado`, `identificacion`, `nombres`, `apellidos`, `rh`, `celular`, `fecha_nacimiento`, `correo_electronico`, `fecha_ingreso`, `numero_hijos`, `telefono_fijo`, `estado`, `Pension_idPension`, `Caja_compensacion_idCaja_compensacion`, `Tipo_contrato`, `direccion`, `barrio`, `municipio`, `Tipo_documento_idTipo_documento`, `Genero_idGenero`, `cesantias`, `procesos`, `cargo`, `nivel_estudio_idNivel_estudio`, `profesion_idProfesion`, `eps_idEPS`, `fecha_ingreso_eps`, `cuenta_idCuenta`) VALUES
(7, 1216725212, 'Estiven ', 'Garcia', 'O-', '3218157070', '1997-07-04', 'rjrcomunista@gmail.com', '2017-07-14', 0, 5454555, 1, 2, 4, 'Definido', 'calle moscu', 'Robledo', 'Medellin', 7, 7, '323223', 'el rojo', 'nada', 5, 4, 4, '2017-07-13', 16),
(8, 2147483647, 'Estiven ', 'Murillo ', 'A+', '3105974942', '1998-10-17', 'emurillo50@misena.edu.co', '2017-07-11', 8, 5822940, 0, 2, 4, 'Indefinido', 'Calle 76 dd', 'Bello Horizonte', 'Medellin', 9, 7, '45000', 'Area de soporte', 'Programador', 6, 4, 4, '2018-07-10', 22),
(9, 1000913732, 'Gloria', 'Betancur', 'O-', '314732845', '2017-07-11', 'loren-ita2001@hotmail.com', '2017-07-11', 20, 5837476, 1, 2, 4, 'Definido', 'cr74', 'manrique', 'medellin', 8, 9, '216545', 'Humana', 'persona', 7, 6, 5, '2017-07-11', 22),
(11, 1152714002, 'Juan  ', 'gonzalez gutierrez', 'O-', '3193827114', '1991-10-29', 'gutierrezdiaz93@gmail.com', '2015-05-03', 0, 5860018, 0, 2, 4, 'Definido', 'carrera 86 a n 77 c 31', 'robledo bello horizonte', 'medellin', 7, 9, '8000', 'auxiliar', 'auxiliar', 7, 6, 5, '2016-05-03', 22);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entradas`
--

CREATE TABLE `entradas` (
  `codEntradas` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `Empleado_idEmpleado` int(11) NOT NULL,
  `estado` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `entradas`
--

INSERT INTO `entradas` (`codEntradas`, `fecha`, `Empleado_idEmpleado`, `estado`) VALUES
(0, '2017-07-19', 7, 1),
(1, '2017-08-03', 11, 1),
(2, '2017-08-03', 11, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entradas_has_materia_prima`
--

CREATE TABLE `entradas_has_materia_prima` (
  `Entradas_codEntradas` int(11) NOT NULL,
  `Materia_prima_codMateria_prima` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `fecha_vencimiento` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `entradas_has_materia_prima`
--

INSERT INTO `entradas_has_materia_prima` (`Entradas_codEntradas`, `Materia_prima_codMateria_prima`, `cantidad`, `fecha_vencimiento`) VALUES
(0, 2, 200, '2017-07-27'),
(1, 1, 255, '2017-08-08'),
(2, 1, 666, '2017-08-11');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eps`
--

CREATE TABLE `eps` (
  `idEPS` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `abreviatura` varchar(45) DEFAULT NULL,
  `estadoe` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `eps`
--

INSERT INTO `eps` (`idEPS`, `nombre`, `abreviatura`, `estadoe`) VALUES
(4, 'Sura', 'sura', 1),
(5, 'Conmeva', 'conmeva', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estados`
--

CREATE TABLE `estados` (
  `codEstado` int(11) NOT NULL,
  `estado` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `estados`
--

INSERT INTO `estados` (`codEstado`, `estado`) VALUES
(1, 'Cuarentena'),
(2, 'Aprobado'),
(3, 'Rechazado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ficha_tecnica`
--

CREATE TABLE `ficha_tecnica` (
  `codFicha` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `descripcion` text NOT NULL,
  `lugar_elaboracion` varchar(45) NOT NULL,
  `info_Contacto` varchar(45) NOT NULL,
  `nombre_cientifico` varchar(45) NOT NULL,
  `forma_farmaceutica_cod_forma` varchar(45) NOT NULL,
  `Unidad_medida_codUnidad_medida` int(11) NOT NULL,
  `Presentacion_codPresentacion` int(11) NOT NULL,
  `recomendacion` text NOT NULL,
  `procedimientos` text NOT NULL,
  `usos` text NOT NULL,
  `estado` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ficha_tecnica`
--

INSERT INTO `ficha_tecnica` (`codFicha`, `nombre`, `descripcion`, `lugar_elaboracion`, `info_Contacto`, `nombre_cientifico`, `forma_farmaceutica_cod_forma`, `Unidad_medida_codUnidad_medida`, `Presentacion_codPresentacion`, `recomendacion`, `procedimientos`, `usos`, `estado`) VALUES
(2, 'Acetaminofe', 'Pastillas blancas  ', 'Licol S.A.S', '(574) 322 50 45- 018000515045. ', 'acetamida', 'Tabletas', 12, 13, '-Consulte a su medico\r\n-No es para menores de edad  ', 'espesa. Revuelve bien.\r\n2. Agrega 1 o 2 gotas de aceite esencial y vuelve a revolver.\r\n\r\n \r\n3. Añade un poco de polvo de cocoa para espesar aún más el preparado, y revuelve con las manos.\r\n4. Forma bolitas con la mano. Estas serán las píldoras, por lo que asegúrate de que tengan un tamaño cómodo.\r\n5. Sécalos. Una opción para esto es colocar las píldoras en el horno a unos 150 °F (65.5 °C).\r\n6. Guarda tus píldoras en un frasco o botella bien seca, y colócala en un sitio fresco y seco.  ', '-Tomar una cada 8 horas\r\n-Para dolores de cabeza\r\n-Tratar la fiebre\r\n-Tratar el malestar  ', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `genero`
--

CREATE TABLE `genero` (
  `idGenero` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `estadog` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `genero`
--

INSERT INTO `genero` (`idGenero`, `nombre`, `estadog`) VALUES
(7, 'Masculino', 1),
(8, 'femenino', 0),
(9, 'Otro', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lote`
--

CREATE TABLE `lote` (
  `codLote` int(11) NOT NULL,
  `descripcion` varchar(45) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `estado` int(1) NOT NULL DEFAULT '1',
  `producto_codProducto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `lote`
--

INSERT INTO `lote` (`codLote`, `descripcion`, `cantidad`, `estado`, `producto_codProducto`) VALUES
(4, 'Lt2060', 9898, 0, 4),
(5, 'Cojas de acetaminofen', 98, 1, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materia_prima`
--

CREATE TABLE `materia_prima` (
  `codMateria_prima` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `precio` int(11) NOT NULL,
  `descripcion` varchar(45) NOT NULL,
  `cantidad` int(11) NOT NULL DEFAULT '0',
  `stock_min` int(11) NOT NULL,
  `presentacion` varchar(45) NOT NULL,
  `estado` int(1) NOT NULL DEFAULT '1',
  `Unidad_medida_codUnidad_medida` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `materia_prima`
--

INSERT INTO `materia_prima` (`codMateria_prima`, `nombre`, `precio`, `descripcion`, `cantidad`, `stock_min`, `presentacion`, `estado`, `Unidad_medida_codUnidad_medida`) VALUES
(1, 'Alcohol', 1800, 'Etilico ', 941, 50, '19', 2, 11),
(2, 'Hierba buena', 400, 'Menta', 188, 100, '19', 1, 12),
(3, 'Agua ', 1000, 'Industrial ', 10, 200, '19', 3, 11);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nivel_estudio`
--

CREATE TABLE `nivel_estudio` (
  `idNivel_estudio` int(11) NOT NULL,
  `descripcion` varchar(45) NOT NULL,
  `estadon` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `nivel_estudio`
--

INSERT INTO `nivel_estudio` (`idNivel_estudio`, `descripcion`, `estadon`) VALUES
(5, 'Tecnologo', 1),
(6, 'Profesional', 1),
(7, 'Alto', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido`
--

CREATE TABLE `pedido` (
  `codPedido` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `Cliente_idCliente` int(11) NOT NULL,
  `estado` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pedido`
--

INSERT INTO `pedido` (`codPedido`, `fecha`, `Cliente_idCliente`, `estado`) VALUES
(0, '2017-07-25', 12, 1),
(1, '2017-07-25', 17, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pension`
--

CREATE TABLE `pension` (
  `idPension` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `abreviatura` varchar(45) DEFAULT NULL,
  `fecha_ingreso` date DEFAULT NULL,
  `estadop` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pension`
--

INSERT INTO `pension` (`idPension`, `nombre`, `abreviatura`, `fecha_ingreso`, `estadop`) VALUES
(2, 'Colpension', 'colpen', '2017-07-12', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `presentacion`
--

CREATE TABLE `presentacion` (
  `codPresentacion` int(11) NOT NULL,
  `descripcionp` varchar(45) NOT NULL,
  `estado` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `presentacion`
--

INSERT INTO `presentacion` (`codPresentacion`, `descripcionp`, `estado`) VALUES
(13, 'X 650', 1),
(14, 'X 65', 1),
(19, 'x 120', 0),
(20, 'X 100', 1),
(21, 'X 1000', 1),
(22, 'X 2', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `produccion`
--

CREATE TABLE `produccion` (
  `codProduccion` int(11) NOT NULL,
  `fecha_inicio` date NOT NULL,
  `fecha_finalizacion` date NOT NULL,
  `canti` int(11) NOT NULL,
  `ficha_tecnica_codFicha` int(11) NOT NULL,
  `Empleado_idEmpleado` int(11) NOT NULL,
  `estado` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `produccion`
--

INSERT INTO `produccion` (`codProduccion`, `fecha_inicio`, `fecha_finalizacion`, `canti`, `ficha_tecnica_codFicha`, `Empleado_idEmpleado`, `estado`) VALUES
(13, '2017-07-14', '2017-07-30', 100, 1, 7, 1),
(14, '2017-07-11', '2017-07-21', 21, 1, 7, 1),
(15, '2017-07-28', '2017-07-30', 52621, 0, 7, 1),
(16, '2017-07-14', '2017-07-30', 4555, 1, 9, 1),
(17, '2016-02-02', '2017-02-02', 202, 0, 9, 0),
(19, '2017-08-18', '2017-08-19', 666, 2, 8, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `produccion_has_producto`
--

CREATE TABLE `produccion_has_producto` (
  `Produccion_codProduccion` int(11) NOT NULL,
  `Producto_codProducto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `codProducto` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `descripcion` varchar(45) NOT NULL,
  `cantidad_actual` int(11) NOT NULL,
  `Stock_minimo` int(11) NOT NULL,
  `ubicacion` varchar(20) NOT NULL,
  `Categoria_idCategoria` int(11) NOT NULL,
  `Unidad_medida_codUnidad_medida` int(11) NOT NULL,
  `Presentacion_codPresentacion` int(11) NOT NULL,
  `estado` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`codProducto`, `nombre`, `descripcion`, `cantidad_actual`, `Stock_minimo`, `ubicacion`, `Categoria_idCategoria`, `Unidad_medida_codUnidad_medida`, `Presentacion_codPresentacion`, `estado`) VALUES
(4, 'Dolotrin Mega', 'NULL', 3221, 100, 'estante 20', 6, 12, 13, 0),
(6, 'jabon', 'hhh', 988, 455, 'estante', 11, 24, 27, 1),
(7, 'cartilago a base de tiburon', 'null', 125, 102, 'est 5', 6, 15, 20, 0),
(8, 'hh', 'ffffgg', 444, 443, 'ffff', 10, 16, 19, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto_has_lote`
--

CREATE TABLE `producto_has_lote` (
  `Producto_has_Lotecol` int(11) NOT NULL,
  `CantidadxLote` int(11) NOT NULL,
  `fecha_vencimiento` date NOT NULL,
  `fecha_lote` date NOT NULL,
  `cantidad_presentacion` int(11) NOT NULL,
  `Lote_codLote` int(11) NOT NULL,
  `Producto_idProducto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `producto_has_lote`
--

INSERT INTO `producto_has_lote` (`Producto_has_Lotecol`, `CantidadxLote`, `fecha_vencimiento`, `fecha_lote`, `cantidad_presentacion`, `Lote_codLote`, `Producto_idProducto`) VALUES
(1, 200, '2017-07-27', '2017-07-31', 20, 4, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto_has_materia_prima`
--

CREATE TABLE `producto_has_materia_prima` (
  `Producto_codProducto` int(11) NOT NULL,
  `Materia_prima_codMateria_prima` int(11) NOT NULL,
  `Cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesion`
--

CREATE TABLE `profesion` (
  `idProfesion` int(11) NOT NULL,
  `descripcion` varchar(45) NOT NULL,
  `estadopr` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `profesion`
--

INSERT INTO `profesion` (`idProfesion`, `descripcion`, `estadopr`) VALUES
(4, 'ingeniero', 1),
(5, 'Quimico', 1),
(6, 'Tecnologo ADSI', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `idrol` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `descripcion` varchar(45) NOT NULL,
  `estado` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`idrol`, `nombre`, `descripcion`, `estado`) VALUES
(1, 'Administrador', 'administrador', 1),
(2, 'Supervisor', 'hace registros y consulta', 1),
(3, 'Empleado', 'consultas', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `salidas`
--

CREATE TABLE `salidas` (
  `codSalidas` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `estado` int(1) NOT NULL DEFAULT '1',
  `Empleado_idEmpleado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `salidas`
--

INSERT INTO `salidas` (`codSalidas`, `fecha`, `estado`, `Empleado_idEmpleado`) VALUES
(0, '2017-07-24', 1, 7),
(1, '2017-08-03', 1, 0),
(2, '2017-08-03', 1, 0),
(3, '2017-08-03', 1, 0),
(4, '2017-08-03', 1, 0),
(5, '2017-08-03', 1, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `salidas_has_materia_prima`
--

CREATE TABLE `salidas_has_materia_prima` (
  `Salidas_codSalidas` int(11) NOT NULL,
  `Materia_prima_codMateria_prima` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `salidas_has_materia_prima`
--

INSERT INTO `salidas_has_materia_prima` (`Salidas_codSalidas`, `Materia_prima_codMateria_prima`, `cantidad`) VALUES
(0, 2, 12),
(4, 1, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `salidas_has_producto_has_lote`
--

CREATE TABLE `salidas_has_producto_has_lote` (
  `Salidas_codSalidas` int(11) NOT NULL,
  `Producto_has_Lote_Producto_has_Lotecol` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_documento`
--

CREATE TABLE `tipo_documento` (
  `idTipo_documento` int(11) NOT NULL,
  `descripcion` varchar(45) NOT NULL,
  `estadod` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipo_documento`
--

INSERT INTO `tipo_documento` (`idTipo_documento`, `descripcion`, `estadod`) VALUES
(7, 'Cedula', 1),
(8, 'Tarjeta de identidad', 1),
(9, 'Libreta militar', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `unidad_medida`
--

CREATE TABLE `unidad_medida` (
  `codUnidad_medida` int(11) NOT NULL,
  `nombreu` varchar(45) NOT NULL,
  `abreviatura` varchar(45) NOT NULL,
  `estado` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `unidad_medida`
--

INSERT INTO `unidad_medida` (`codUnidad_medida`, `nombreu`, `abreviatura`, `estado`) VALUES
(11, 'Litro', 'LT', 1),
(12, 'Gramo', 'GR', 1),
(15, 'Tonelada', 'TL', 1),
(16, 'mililitro', 'mm', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `caja_compensacion`
--
ALTER TABLE `caja_compensacion`
  ADD PRIMARY KEY (`idCaja_compensacion`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`codCategoria`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`idCliente`);

--
-- Indices de la tabla `cuenta`
--
ALTER TABLE `cuenta`
  ADD PRIMARY KEY (`idCuenta`),
  ADD KEY `fk_Cuenta_Rol1_idx` (`Rol_idrol`);

--
-- Indices de la tabla `detalle_producto_pedido`
--
ALTER TABLE `detalle_producto_pedido`
  ADD PRIMARY KEY (`idDetalle_Producto_Pedido`),
  ADD KEY `fk_Detalle_Producto_Pedido_Pedido1_idx` (`Cod_Pedido`),
  ADD KEY `fk_Detalle_Producto_Pedido_Producto_has_Lote1_idx` (`Producto_has_Lote_Producto_has_Lotecol`),
  ADD KEY `Cod_producto` (`Cod_producto`);

--
-- Indices de la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD PRIMARY KEY (`idEmpleado`),
  ADD KEY `fk_Empleado_Pension1_idx` (`Pension_idPension`),
  ADD KEY `fk_Empleado_Caja_compensacion1_idx` (`Caja_compensacion_idCaja_compensacion`),
  ADD KEY `fk_Empleado_Tipo_documento1_idx` (`Tipo_documento_idTipo_documento`),
  ADD KEY `fk_Empleado_Genero1_idx` (`Genero_idGenero`),
  ADD KEY `fk_empleado_nivel_estudio1_idx` (`nivel_estudio_idNivel_estudio`),
  ADD KEY `fk_empleado_profesion1_idx` (`profesion_idProfesion`),
  ADD KEY `fk_empleado_eps1_idx` (`eps_idEPS`),
  ADD KEY `fk_empleado_cuenta1_idx` (`cuenta_idCuenta`);

--
-- Indices de la tabla `entradas`
--
ALTER TABLE `entradas`
  ADD PRIMARY KEY (`codEntradas`),
  ADD KEY `fk_Entradas_Empleado1_idx` (`Empleado_idEmpleado`);

--
-- Indices de la tabla `entradas_has_materia_prima`
--
ALTER TABLE `entradas_has_materia_prima`
  ADD KEY `fk_Entradas_has_Materia_prima_Materia_prima1_idx` (`Materia_prima_codMateria_prima`),
  ADD KEY `fk_Entradas_has_Materia_prima_Entradas1_idx` (`Entradas_codEntradas`);

--
-- Indices de la tabla `eps`
--
ALTER TABLE `eps`
  ADD PRIMARY KEY (`idEPS`);

--
-- Indices de la tabla `estados`
--
ALTER TABLE `estados`
  ADD PRIMARY KEY (`codEstado`);

--
-- Indices de la tabla `ficha_tecnica`
--
ALTER TABLE `ficha_tecnica`
  ADD PRIMARY KEY (`codFicha`),
  ADD KEY `Unidad_medida_codUnidad_medida` (`Unidad_medida_codUnidad_medida`),
  ADD KEY `Presentacion_codPresentacion` (`Presentacion_codPresentacion`),
  ADD KEY `forma_farmaceutica_cod_forma` (`forma_farmaceutica_cod_forma`);

--
-- Indices de la tabla `genero`
--
ALTER TABLE `genero`
  ADD PRIMARY KEY (`idGenero`);

--
-- Indices de la tabla `lote`
--
ALTER TABLE `lote`
  ADD PRIMARY KEY (`codLote`),
  ADD KEY `producto_codProducto` (`producto_codProducto`);

--
-- Indices de la tabla `materia_prima`
--
ALTER TABLE `materia_prima`
  ADD PRIMARY KEY (`codMateria_prima`),
  ADD KEY `fk_Materia_prima_Unidad_medida1_idx` (`Unidad_medida_codUnidad_medida`),
  ADD KEY `estado` (`estado`);

--
-- Indices de la tabla `nivel_estudio`
--
ALTER TABLE `nivel_estudio`
  ADD PRIMARY KEY (`idNivel_estudio`);

--
-- Indices de la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`codPedido`),
  ADD KEY `fk_Pedido_Cliente1_idx` (`Cliente_idCliente`);

--
-- Indices de la tabla `pension`
--
ALTER TABLE `pension`
  ADD PRIMARY KEY (`idPension`);

--
-- Indices de la tabla `presentacion`
--
ALTER TABLE `presentacion`
  ADD PRIMARY KEY (`codPresentacion`);

--
-- Indices de la tabla `produccion`
--
ALTER TABLE `produccion`
  ADD PRIMARY KEY (`codProduccion`),
  ADD KEY `fk_Produccion_Empleado1_idx` (`Empleado_idEmpleado`),
  ADD KEY `fk_produccion_ficha_tecnica1_idx` (`ficha_tecnica_codFicha`);

--
-- Indices de la tabla `produccion_has_producto`
--
ALTER TABLE `produccion_has_producto`
  ADD KEY `fk_Produccion_has_Producto_Producto1_idx` (`Producto_codProducto`),
  ADD KEY `fk_Produccion_has_Producto_Produccion1_idx` (`Produccion_codProduccion`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`codProducto`),
  ADD KEY `fk_Producto_Categoria1_idx` (`Categoria_idCategoria`),
  ADD KEY `fk_Producto_Unidad_medida1_idx` (`Unidad_medida_codUnidad_medida`),
  ADD KEY `fk_Producto_Presentacion1_idx` (`Presentacion_codPresentacion`);

--
-- Indices de la tabla `producto_has_lote`
--
ALTER TABLE `producto_has_lote`
  ADD PRIMARY KEY (`Producto_has_Lotecol`),
  ADD KEY `fk_Producto_has_Lote_Producto1_idx` (`Producto_idProducto`),
  ADD KEY `fk_Producto_has_Lote_Lote1_idx` (`Lote_codLote`);

--
-- Indices de la tabla `producto_has_materia_prima`
--
ALTER TABLE `producto_has_materia_prima`
  ADD KEY `fk_Producto_has_Materia_prima_Materia_prima1_idx` (`Materia_prima_codMateria_prima`),
  ADD KEY `fk_Producto_has_Materia_prima_Producto1_idx` (`Producto_codProducto`);

--
-- Indices de la tabla `profesion`
--
ALTER TABLE `profesion`
  ADD PRIMARY KEY (`idProfesion`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`idrol`);

--
-- Indices de la tabla `salidas`
--
ALTER TABLE `salidas`
  ADD PRIMARY KEY (`codSalidas`),
  ADD KEY `fk_Salidas_Empleado1_idx` (`Empleado_idEmpleado`);

--
-- Indices de la tabla `salidas_has_materia_prima`
--
ALTER TABLE `salidas_has_materia_prima`
  ADD KEY `fk_Salidas_has_Materia_prima_Materia_prima1_idx` (`Materia_prima_codMateria_prima`),
  ADD KEY `fk_Salidas_has_Materia_prima_Salidas1_idx` (`Salidas_codSalidas`);

--
-- Indices de la tabla `salidas_has_producto_has_lote`
--
ALTER TABLE `salidas_has_producto_has_lote`
  ADD KEY `fk_Salidas_has_Producto_has_Lote_Producto_has_Lote1_idx` (`Producto_has_Lote_Producto_has_Lotecol`),
  ADD KEY `fk_Salidas_has_Producto_has_Lote_Salidas1_idx` (`Salidas_codSalidas`);

--
-- Indices de la tabla `tipo_documento`
--
ALTER TABLE `tipo_documento`
  ADD PRIMARY KEY (`idTipo_documento`);

--
-- Indices de la tabla `unidad_medida`
--
ALTER TABLE `unidad_medida`
  ADD PRIMARY KEY (`codUnidad_medida`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `caja_compensacion`
--
ALTER TABLE `caja_compensacion`
  MODIFY `idCaja_compensacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `codCategoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `idCliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT de la tabla `cuenta`
--
ALTER TABLE `cuenta`
  MODIFY `idCuenta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT de la tabla `detalle_producto_pedido`
--
ALTER TABLE `detalle_producto_pedido`
  MODIFY `idDetalle_Producto_Pedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `empleado`
--
ALTER TABLE `empleado`
  MODIFY `idEmpleado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT de la tabla `entradas`
--
ALTER TABLE `entradas`
  MODIFY `codEntradas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `eps`
--
ALTER TABLE `eps`
  MODIFY `idEPS` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `ficha_tecnica`
--
ALTER TABLE `ficha_tecnica`
  MODIFY `codFicha` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=556;
--
-- AUTO_INCREMENT de la tabla `genero`
--
ALTER TABLE `genero`
  MODIFY `idGenero` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT de la tabla `lote`
--
ALTER TABLE `lote`
  MODIFY `codLote` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `materia_prima`
--
ALTER TABLE `materia_prima`
  MODIFY `codMateria_prima` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `nivel_estudio`
--
ALTER TABLE `nivel_estudio`
  MODIFY `idNivel_estudio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT de la tabla `pedido`
--
ALTER TABLE `pedido`
  MODIFY `codPedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `pension`
--
ALTER TABLE `pension`
  MODIFY `idPension` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `presentacion`
--
ALTER TABLE `presentacion`
  MODIFY `codPresentacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT de la tabla `produccion`
--
ALTER TABLE `produccion`
  MODIFY `codProduccion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `codProducto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `producto_has_lote`
--
ALTER TABLE `producto_has_lote`
  MODIFY `Producto_has_Lotecol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `profesion`
--
ALTER TABLE `profesion`
  MODIFY `idProfesion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `idrol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `salidas`
--
ALTER TABLE `salidas`
  MODIFY `codSalidas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `tipo_documento`
--
ALTER TABLE `tipo_documento`
  MODIFY `idTipo_documento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT de la tabla `unidad_medida`
--
ALTER TABLE `unidad_medida`
  MODIFY `codUnidad_medida` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cuenta`
--
ALTER TABLE `cuenta`
  ADD CONSTRAINT `fk_Cuenta_Rol1` FOREIGN KEY (`Rol_idrol`) REFERENCES `rol` (`idrol`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `detalle_producto_pedido`
--
ALTER TABLE `detalle_producto_pedido`
  ADD CONSTRAINT `detalle_producto_pedido_ibfk_1` FOREIGN KEY (`Cod_producto`) REFERENCES `producto` (`codProducto`),
  ADD CONSTRAINT `fk_Detalle_Producto_Pedido_Pedido1` FOREIGN KEY (`Cod_Pedido`) REFERENCES `pedido` (`codPedido`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Detalle_Producto_Pedido_Producto_has_Lote1` FOREIGN KEY (`Producto_has_Lote_Producto_has_Lotecol`) REFERENCES `producto_has_lote` (`Producto_has_Lotecol`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD CONSTRAINT `fk_Empleado_Caja_compensacion1` FOREIGN KEY (`Caja_compensacion_idCaja_compensacion`) REFERENCES `caja_compensacion` (`idCaja_compensacion`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Empleado_Genero1` FOREIGN KEY (`Genero_idGenero`) REFERENCES `genero` (`idGenero`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Empleado_Pension1` FOREIGN KEY (`Pension_idPension`) REFERENCES `pension` (`idPension`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Empleado_Tipo_documento1` FOREIGN KEY (`Tipo_documento_idTipo_documento`) REFERENCES `tipo_documento` (`idTipo_documento`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_empleado_cuenta1` FOREIGN KEY (`cuenta_idCuenta`) REFERENCES `cuenta` (`idCuenta`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_empleado_eps1` FOREIGN KEY (`eps_idEPS`) REFERENCES `eps` (`idEPS`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_empleado_nivel_estudio1` FOREIGN KEY (`nivel_estudio_idNivel_estudio`) REFERENCES `nivel_estudio` (`idNivel_estudio`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_empleado_profesion1` FOREIGN KEY (`profesion_idProfesion`) REFERENCES `profesion` (`idProfesion`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `entradas`
--
ALTER TABLE `entradas`
  ADD CONSTRAINT `fk_Entradas_Empleado1` FOREIGN KEY (`Empleado_idEmpleado`) REFERENCES `empleado` (`idEmpleado`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `entradas_has_materia_prima`
--
ALTER TABLE `entradas_has_materia_prima`
  ADD CONSTRAINT `fk_Entradas_has_Materia_prima_Entradas1` FOREIGN KEY (`Entradas_codEntradas`) REFERENCES `entradas` (`codEntradas`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Entradas_has_Materia_prima_Materia_prima1` FOREIGN KEY (`Materia_prima_codMateria_prima`) REFERENCES `materia_prima` (`codMateria_prima`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `ficha_tecnica`
--
ALTER TABLE `ficha_tecnica`
  ADD CONSTRAINT `ficha_tecnica_ibfk_1` FOREIGN KEY (`Presentacion_codPresentacion`) REFERENCES `presentacion` (`codPresentacion`),
  ADD CONSTRAINT `ficha_tecnica_ibfk_2` FOREIGN KEY (`Unidad_medida_codUnidad_medida`) REFERENCES `unidad_medida` (`codUnidad_medida`);

--
-- Filtros para la tabla `lote`
--
ALTER TABLE `lote`
  ADD CONSTRAINT `lote_ibfk_1` FOREIGN KEY (`producto_codProducto`) REFERENCES `producto` (`codProducto`);

--
-- Filtros para la tabla `materia_prima`
--
ALTER TABLE `materia_prima`
  ADD CONSTRAINT `fk_Materia_prima_Unidad_medida1` FOREIGN KEY (`estado`) REFERENCES `estados` (`codEstado`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD CONSTRAINT `fk_Pedido_Cliente1` FOREIGN KEY (`Cliente_idCliente`) REFERENCES `cliente` (`idCliente`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `produccion`
--
ALTER TABLE `produccion`
  ADD CONSTRAINT `fk_Produccion_Empleado1` FOREIGN KEY (`Empleado_idEmpleado`) REFERENCES `empleado` (`idEmpleado`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
