-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 21-Nov-2018 às 22:18
-- Versão do servidor: 5.7.11
-- PHP Version: 5.6.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oriart_db`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `area`
--

CREATE TABLE `area` (
  `id` int(10) UNSIGNED NOT NULL,
  `descricao` varchar(255) DEFAULT NULL,
  `slug` varchar(40) NOT NULL,
  `area` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria`
--

CREATE TABLE `categoria` (
  `id` int(10) UNSIGNED NOT NULL,
  `idArea` int(10) UNSIGNED NOT NULL,
  `descricao` varchar(100) NOT NULL,
  `slug` varchar(40) NOT NULL,
  `categoria` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `imagens`
--

CREATE TABLE `imagens` (
  `id` int(10) UNSIGNED NOT NULL,
  `nome` varchar(50) NOT NULL,
  `descricao` varchar(255) NOT NULL,
  `creditos` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `mensagens`
--

CREATE TABLE `mensagens` (
  `id` int(10) UNSIGNED NOT NULL,
  `Nome` varchar(30) NOT NULL,
  `data` date NOT NULL,
  `Newsletter` varchar(120) NOT NULL,
  `email` varchar(150) NOT NULL,
  `mensagem` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `paginas`
--

CREATE TABLE `paginas` (
  `id` int(10) UNSIGNED NOT NULL,
  `subtitulo` varchar(40) NOT NULL,
  `texto` varchar(255) NOT NULL,
  `texto_2` varchar(255) NOT NULL,
  `resumo` int(100) NOT NULL,
  `slug` varchar(40) NOT NULL,
  `titulo` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `paginasimagens`
--

CREATE TABLE `paginasimagens` (
  `id` int(10) UNSIGNED NOT NULL,
  `idPost` int(10) UNSIGNED NOT NULL,
  `idImagem` int(10) UNSIGNED NOT NULL,
  `ordem` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `idCategoria` int(10) UNSIGNED NOT NULL,
  `idImgDestaque` int(10) UNSIGNED NOT NULL,
  `titulo` varchar(40) NOT NULL,
  `subtitulo` varchar(40) NOT NULL,
  `resumo` varchar(120) NOT NULL,
  `texto` int(255) NOT NULL,
  `slug` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `postscategoria`
--

CREATE TABLE `postscategoria` (
  `id` int(10) UNSIGNED NOT NULL,
  `nivel` varchar(40) NOT NULL,
  `idCategoria` int(10) UNSIGNED NOT NULL,
  `idPost` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `postsimagens`
--

CREATE TABLE `postsimagens` (
  `id` int(10) UNSIGNED NOT NULL,
  `idPost` int(10) UNSIGNED NOT NULL,
  `idImagem` int(10) UNSIGNED NOT NULL,
  `ordem` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_categoria_idArea` (`idArea`);

--
-- Indexes for table `imagens`
--
ALTER TABLE `imagens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mensagens`
--
ALTER TABLE `mensagens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `paginas`
--
ALTER TABLE `paginas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `paginasimagens`
--
ALTER TABLE `paginasimagens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_paginasimagens_idPost` (`idPost`),
  ADD KEY `FK_paginasimagens_idImagem` (`idImagem`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_posts_idCategoria` (`idCategoria`),
  ADD KEY `FK_posts_idImgDestaque` (`idImgDestaque`);

--
-- Indexes for table `postscategoria`
--
ALTER TABLE `postscategoria`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_postscategoria_idCategoria` (`idCategoria`),
  ADD KEY `FK_postscategoria_idPost` (`idPost`);

--
-- Indexes for table `postsimagens`
--
ALTER TABLE `postsimagens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_postsimagens_idPost` (`idPost`),
  ADD KEY `FK_postsimagens_idImagem` (`idImagem`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `area`
--
ALTER TABLE `area`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `imagens`
--
ALTER TABLE `imagens`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mensagens`
--
ALTER TABLE `mensagens`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `paginas`
--
ALTER TABLE `paginas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `paginasimagens`
--
ALTER TABLE `paginasimagens`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `postscategoria`
--
ALTER TABLE `postscategoria`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `postsimagens`
--
ALTER TABLE `postsimagens`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `categoria`
--
ALTER TABLE `categoria`
  ADD CONSTRAINT `FK_categoria_idArea` FOREIGN KEY (`idArea`) REFERENCES `area` (`id`);

--
-- Limitadores para a tabela `paginasimagens`
--
ALTER TABLE `paginasimagens`
  ADD CONSTRAINT `FK_paginasimagens_idImagem` FOREIGN KEY (`idImagem`) REFERENCES `imagens` (`id`),
  ADD CONSTRAINT `FK_paginasimagens_idPost` FOREIGN KEY (`idPost`) REFERENCES `posts` (`id`);

--
-- Limitadores para a tabela `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `FK_posts_idCategoria` FOREIGN KEY (`idCategoria`) REFERENCES `categoria` (`id`),
  ADD CONSTRAINT `FK_posts_idImgDestaque` FOREIGN KEY (`idImgDestaque`) REFERENCES `postsimagens` (`id`);

--
-- Limitadores para a tabela `postscategoria`
--
ALTER TABLE `postscategoria`
  ADD CONSTRAINT `FK_postscategoria_idCategoria` FOREIGN KEY (`idCategoria`) REFERENCES `categoria` (`id`),
  ADD CONSTRAINT `FK_postscategoria_idPost` FOREIGN KEY (`idPost`) REFERENCES `posts` (`id`);

--
-- Limitadores para a tabela `postsimagens`
--
ALTER TABLE `postsimagens`
  ADD CONSTRAINT `FK_postsimagens_idImagem` FOREIGN KEY (`idImagem`) REFERENCES `imagens` (`id`),
  ADD CONSTRAINT `FK_postsimagens_idPost` FOREIGN KEY (`idPost`) REFERENCES `posts` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
