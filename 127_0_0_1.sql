-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 12-Set-2019 às 16:36
-- Versão do servidor: 10.3.16-MariaDB
-- versão do PHP: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `sistemadelogin`
--
DROP DATABASE IF EXISTS `sistemadelogin`;
CREATE DATABASE IF NOT EXISTS `sistemadelogin` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_bin;
USE `sistemadelogin`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `idUsuario` int(10) UNSIGNED NOT NULL,
  `nome` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `nomeUsuario` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `senha` char(40) COLLATE utf8mb4_bin NOT NULL,
  `imagem` varchar(400) COLLATE utf8mb4_bin NOT NULL,
  `dataCriacao` datetime NOT NULL,
  `token` char(10) COLLATE utf8mb4_bin NOT NULL,
  `tempo_de_vida` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `nome`, `nomeUsuario`, `email`, `senha`, `imagem`, `dataCriacao`, `token`, `tempo_de_vida`) VALUES
(1, 'guilherme', 'levigui', 'Guilevicamargo@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'https://www.maisesports.com.br/wp-content/uploads/2018/07/Rework-da-Akali-vazou.jpg', '2019-09-06 14:53:42', '', '2019-09-12 19:29:43'),
(2, 'Guilherme Camargo', 'Sr.Fabuloso', 'guilherme_s_camargo@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'https://i.imgur.com/qs1T4y6.jpg', '2019-09-06 15:50:46', '', '2019-09-12 19:29:43'),
(3, 'Gustav', 'lil Peep', 'Lilpeep@Trapp.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'https://imagens.publico.pt/imagens.aspx/1183662?tp=UH&amp;db=IMAGENS&amp;type=JPG&amp;w=837', '2019-09-06 16:02:27', '', '2019-09-12 19:29:43');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUsuario`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idUsuario` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
