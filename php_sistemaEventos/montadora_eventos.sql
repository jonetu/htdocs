-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 10-Mar-2022 às 21:00
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `montadora_eventos`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `montagem`
--

CREATE TABLE `montagem` (
  `id` int(11) NOT NULL,
  `nome` varchar(25) NOT NULL,
  `tema` varchar(25) NOT NULL,
  `descricao` varchar(65) NOT NULL,
  `foto` varchar(30) NOT NULL,
  `preco` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `montagem`
--

INSERT INTO `montagem` (`id`, `nome`, `tema`, `descricao`, `foto`, `preco`) VALUES
(2, 'Ursinhos', 'personagens', 'tema dos ursinhos fofos &#128522', '622129bec9a357.91982964.jpg', 10),
(3, 'Pocoyo', 'personagens', 'mesa grande pra colocar tudo &#128525', '6221508b0a0719.71547518.webp', 22),
(4, 'Vingadores', 'personagens', 'Mesa pra matar o Thanos &#128526', '622159ec0ddea8.15478631.webp', 500),
(5, 'Masha e o Urso', 'personagens', 'Mesa da menininha russa que fode a vida do urso &#128532', '62215a606ad040.26422306.webp', 190),
(6, 'Carnaval 2022', 'ano', 'Mesa para curtir o Carnaval com a galera 💃🕺', '622163ece7b261.44643857.jpg', 200);

-- --------------------------------------------------------

--
-- Estrutura da tabela `utensilio`
--

CREATE TABLE `utensilio` (
  `id` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `descricao` varchar(128) NOT NULL,
  `preco` float NOT NULL,
  `foto` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `utensilio`
--

INSERT INTO `utensilio` (`id`, `nome`, `descricao`, `preco`, `foto`) VALUES
(2, 'Item01', 'descricao01', 1.01, '622a20783b3653.18491993.jpg'),
(3, 'cadeira', 'Aluguel de cadeira', 20, '622a2554a13ed5.37175143.jpg'),
(4, 'Cilindro', 'Colocar mais um Cilindro', 99.95, '622a25934070a3.28756152.jpg'),
(5, 'Gilson', 'Colocar o Gilson', 500, '622a25ab1694d3.98856335.jpg');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `montagem`
--
ALTER TABLE `montagem`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `utensilio`
--
ALTER TABLE `utensilio`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `montagem`
--
ALTER TABLE `montagem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `utensilio`
--
ALTER TABLE `utensilio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
