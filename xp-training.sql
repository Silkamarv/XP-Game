-- tabla usuario--
CREATE TABLE `usuarios` (
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`nombre` VARCHAR(255) NOT NULL,
	`apellido` VARCHAR(255) NOT NULL,
	`cedula` VARCHAR(255) NOT NULL,
	`fnacimiento` DATE NOT NULL,
	`carrera` VARCHAR(255) NOT NULL,
	`username` VARCHAR(255) NOT NULL,
	`password` VARCHAR(255) NOT NULL,
	`keyword` VARCHAR(255) NOT NULL,
	PRIMARY KEY (`id`),
	UNIQUE INDEX `id` (`id`),
	UNIQUE INDEX `username` (`username`)
)
COLLATE='utf8_general_ci'
ENGINE=InnoDB
;

-------------------------
--tabla preguntas---
CREATE TABLE `preguntas` (
	`id_pregunta` INT(12) NOT NULL,
	`nivel` INT(2) NOT NULL,
	`pregunta` VARCHAR(255) NOT NULL,
	`opcionA` VARCHAR(255) NOT NULL,
	`opcionB` VARCHAR(255) NOT NULL,
	`opcionC` VARCHAR(255) NOT NULL,
	`correcta` VARCHAR(255) NOT NULL,
	PRIMARY KEY (`id_pregunta`)
)
ENGINE=InnoDB
;
-----------------------------
--tabla---