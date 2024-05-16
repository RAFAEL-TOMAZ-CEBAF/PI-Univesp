-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 16/05/2024 às 17:11
-- Versão do servidor: 8.3.0
-- Versão do PHP: 8.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `dados_pacientes`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `pacientes`
--

DROP TABLE IF EXISTS `pacientes`;
CREATE TABLE IF NOT EXISTS `pacientes` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome_completo` varchar(255) NOT NULL,
  `data_nascimento` date NOT NULL,
  `sexo` varchar(20) NOT NULL,
  `gestante` varchar(3) NOT NULL,
  `raca_cor` varchar(20) NOT NULL,
  `escolaridade` varchar(50) NOT NULL,
  `nome_mae` varchar(255) NOT NULL,
  `cidade` varchar(50) NOT NULL,
  `logradouro` varchar(255) NOT NULL,
  `numero` int NOT NULL,
  `bairro` varchar(100) NOT NULL,
  `febre` varchar(3) NOT NULL,
  `artralgia` varchar(3) NOT NULL,
  `cefaleia` varchar(3) NOT NULL,
  `mialgia` varchar(3) NOT NULL,
  `exantema` varchar(3) NOT NULL,
  `prurido` varchar(3) NOT NULL,
  `conjuntivite` varchar(3) NOT NULL,
  `dor_olhos` varchar(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
