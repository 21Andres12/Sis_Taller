use ventas;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE usuario (
    id int NOT NULL,
    id_usuario VARCHAR(15)NOT NULL,
    correo VARCHAR(100) NOT NULL,
    rol int NOT NULL,
    pass VARCHAR(255)character set utf8mb3 collate utf8mb3_spanish_ci NOT NULL,
    ultimoAcceso datetime DEFAULT NULL,
    tkR VARCHAR(255)  NULL,
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish_ci;


ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);
ADD UNIQUE KEY `idx_usuario` (id_usuario),

  ALTER TABLE `usuario`
  MODIFY `id` int (11) NOT NULL AUTO_INCREMENT;