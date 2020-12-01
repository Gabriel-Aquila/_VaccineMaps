-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 11-Nov-2020 às 22:37
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
-- Banco de dados: `login`
--
CREATE DATABASE IF NOT EXISTS `login` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `login`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `usuario_id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(200) NOT NULL,
  `senha` varchar(32) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `data_cadastro` datetime NOT NULL,
  PRIMARY KEY (`usuario_id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`usuario_id`, `usuario`, `senha`, `nome`, `data_cadastro`) VALUES
(1, 'gabriel@a', 'b2f5ff47436671b6e533d8dc3614845d', 'gabriel', '2020-11-05 19:15:25'),
(2, 'alvaro@a', '03c7c0ace395d80182db07ae2c30f034', 'alvaro', '2020-11-05 19:36:09'),
(3, 'gustavo@a', '03c7c0ace395d80182db07ae2c30f034', 'gustavo', '2020-11-05 19:40:30'),
(4, '', 'd41d8cd98f00b204e9800998ecf8427e', '', '2020-11-05 19:43:37'),
(5, 'leo@a', '03c7c0ace395d80182db07ae2c30f034', 'leo', '2020-11-05 19:51:34'),
(6, 'teste@t', 'e358efa489f58062f10dd7316b65649e', 'teste', '2020-11-05 19:52:31'),
(7, 'teste2@a', 'efad7abb323e3d4016284c8a6da076a1', 'teste2', '2020-11-05 19:53:17'),
(8, 'junior@t', '03c7c0ace395d80182db07ae2c30f034', 'junior', '2020-11-05 20:38:30'),
(9, 'denis@t', '698dc19d489c4e4db73e28a713eab07b', 'denis', '2020-11-06 15:34:03'),
(10, 'joao@t', '698dc19d489c4e4db73e28a713eab07b', 'joao', '2020-11-06 15:35:40'),
(11, 'teste@teste', '698dc19d489c4e4db73e28a713eab07b', 'Teste', '2020-11-09 19:10:53'),
(12, 'teste2@teste', '202cb962ac59075b964b07152d234b70', 'Teste2', '2020-11-09 19:24:07'),
(13, 'teste3@teste', '698dc19d489c4e4db73e28a713eab07b', 'teste3', '2020-11-10 17:01:15');
--
-- Banco de dados: `postos`
--
CREATE DATABASE IF NOT EXISTS `postos` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `postos`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `markers`
--

DROP TABLE IF EXISTS `markers`;
CREATE TABLE IF NOT EXISTS `markers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL,
  `address` varchar(80) NOT NULL,
  `lat` float(10,6) NOT NULL,
  `lng` float(10,6) NOT NULL,
  `type` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `markers`
--

INSERT INTO `markers` (`id`, `name`, `address`, `lat`, `lng`, `type`) VALUES
(1, 'Celke - Matriz', '5550 Avenida Republica Argentina, Curitiba', -25.494970, -49.294357, 'EducaÃ§Ã£o'),
(2, 'Celke - Filial 1', '1610 Av. Carlos Gomes, Porto Alegre', -30.034855, -51.177143, 'EducaÃ§Ã£o'),
(3, 'Celke - Filial 2', '575 Avenida Paulista, SÃ£o Paulo', -23.568130, -46.649166, 'EducaÃ§Ã£o'),
(4, 'UBS DR. JOSÃ‰ DE TOLEDO PIZA', 'Av. AntÃ´nio CÃ©sar Neto, 387 - Guapira SÃ£o Paulo-SP ', -23.461037, -46.583214, 'SaÃºde'),
(5, 'teste', 'teste', -23.442747, -46.570404, 'teste'),
(6, 'teste', 'teste', -23.509090, -46.619213, 'teste');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
