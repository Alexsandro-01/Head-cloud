-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 14-Ago-2021 às 16:26
-- Versão do servidor: 10.4.19-MariaDB
-- versão do PHP: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `headcloud`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_notas`
--

CREATE TABLE `tb_notas` (
  `matricula` int(11) NOT NULL,
  `html` float DEFAULT NULL,
  `css` float DEFAULT NULL,
  `javascript` float DEFAULT NULL,
  `php` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `tb_notas`
--

INSERT INTO `tb_notas` (`matricula`, `html`, `css`, `javascript`, `php`) VALUES
(1, 9.5, 7.1, 6.9, 6.7),
(2, NULL, 6.7, 8.2, 5.9),
(3, 10, 6.2, 9.5, 8),
(4, 7.9, NULL, 7.2, 7.1),
(5, NULL, 9.6, 7.9, 9.5),
(6, 8.7, 6.8, 9.5, 7.8),
(7, 8.4, 9.9, 8.9, 9.1),
(8, 9.3, 8.4, 6.7, 8.7),
(9, NULL, 7.4, NULL, 9.3),
(10, 9.6, NULL, 9.6, 7.9);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_registro`
--

CREATE TABLE `tb_registro` (
  `matricula` int(11) NOT NULL,
  `id_adm` int(11) NOT NULL,
  `nome` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `turma` varchar(5) COLLATE utf8_unicode_ci DEFAULT NULL,
  `curso` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `privilegio` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `data_registro` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `tb_registro`
--

INSERT INTO `tb_registro` (`matricula`, `id_adm`, `nome`, `turma`, `curso`, `privilegio`, `data_registro`) VALUES
(1, 3, 'Noele Armstrong', 'A', NULL, 'Aluno', '2021-06-12 17:08:55'),
(2, 3, 'Neitan Souza', 'A', NULL, 'Aluno', '2021-06-12 17:08:55'),
(3, 3, 'Luiz Tevez', 'A', NULL, 'Aluno', '2021-06-12 17:08:55'),
(4, 3, 'Pablo Alves', 'A', NULL, 'Aluno', '2021-06-12 17:08:55'),
(5, 3, 'Leide Mesquita', 'A', NULL, 'Aluno', '2021-06-12 17:08:55'),
(6, 3, 'Priscila Leão', 'B', NULL, 'Aluno', '2021-06-12 17:08:55'),
(7, 3, 'Teilon Nunes', 'B', NULL, 'Aluno', '2021-06-12 17:08:55'),
(8, 3, 'Ester Braga', 'B', NULL, 'Aluno', '2021-06-12 17:08:55'),
(9, 3, 'Benjamin Fraga', 'B', NULL, 'Aluno', '2021-06-12 17:08:55'),
(10, 3, 'Anne Franca', 'B', NULL, 'Aluno', '2021-06-12 17:08:55'),
(19, 2, 'Alberto Torres', NULL, 'html', 'Professor', '2021-06-12 17:32:29'),
(20, 2, 'Noelle Alencar', NULL, 'css', 'Professor', '2021-06-12 17:32:29'),
(21, 2, 'Isabele Naves', NULL, 'javascript', 'Professor', '2021-06-12 17:32:29'),
(22, 2, 'Marco Antônio', NULL, 'php', 'Professor', '2021-06-12 17:32:29'),
(23, 1, 'Cézar Augusto', NULL, NULL, 'Diretor', '2021-06-12 17:33:48'),
(24, 1, 'Vanessa Andrade', NULL, NULL, 'Secretária', '2021-06-12 17:34:28'),
(25, 1, 'Amanda Reis', NULL, NULL, 'Inspetora', '2021-06-12 17:36:06');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tb_notas`
--
ALTER TABLE `tb_notas`
  ADD KEY `matricula` (`matricula`);

--
-- Índices para tabela `tb_registro`
--
ALTER TABLE `tb_registro`
  ADD PRIMARY KEY (`matricula`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_registro`
--
ALTER TABLE `tb_registro`
  MODIFY `matricula` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `tb_notas`
--
ALTER TABLE `tb_notas`
  ADD CONSTRAINT `tb_notas_ibfk_1` FOREIGN KEY (`matricula`) REFERENCES `tb_registro` (`matricula`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
