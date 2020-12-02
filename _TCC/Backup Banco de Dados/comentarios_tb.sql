-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 02-Dez-2020 às 02:38
-- Versão do servidor: 5.7.31
-- versão do PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `comentarios`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `comentarios_tb`
--

DROP TABLE IF EXISTS `comentarios_tb`;
CREATE TABLE IF NOT EXISTS `comentarios_tb` (
  `nome` varchar(500) COLLATE utf8_swedish_ci NOT NULL,
  `rede_social` varchar(500) COLLATE utf8_swedish_ci NOT NULL,
  `comentario` text COLLATE utf8_swedish_ci NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Extraindo dados da tabela `comentarios_tb`
--

INSERT INTO `comentarios_tb` (`nome`, `rede_social`, `comentario`, `id`) VALUES
('teste', 'teste', '  teste', 1),
('teste', 'teste', '  teste', 2),
('teste', 'teste', '  teste', 3),
('teste2', 'teste2', 'ComentÃ¡rio de teste', 4),
('teste2', 'teste2', 'ComentÃ¡rio de teste', 5);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
