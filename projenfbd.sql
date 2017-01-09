-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 09-Jan-2017 às 04:54
-- Versão do servidor: 5.7.11
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projenfbd`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastros`
--

CREATE TABLE `cadastros` (
  `user` int(9) NOT NULL,
  `psswd` tinytext NOT NULL,
  `name` tinytext NOT NULL,
  `last_login` datetime NOT NULL,
  `nvl` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cadastros`
--

INSERT INTO `cadastros` (`user`, `psswd`, `name`, `last_login`, `nvl`) VALUES
(114159715, 'b176204948fa97316748e7927b031dd4', 'Luiz Eduardo Xavier', '2017-01-09 01:42:33', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `dados_complementares`
--

CREATE TABLE `dados_complementares` (
  `cod` int(11) NOT NULL,
  `nome_soc` tinytext NOT NULL,
  `nome_mae` tinytext NOT NULL,
  `raca` tinytext NOT NULL,
  `nacionalidade` tinytext NOT NULL,
  `local_nasc` tinytext NOT NULL,
  `responsavel` tinyint(1) NOT NULL,
  `cpf_resp` tinytext NOT NULL,
  `nasc_resp` date NOT NULL,
  `parentesco_resp` tinytext NOT NULL,
  `tel1` char(14) NOT NULL,
  `tel2` char(14) NOT NULL,
  `email` tinytext NOT NULL,
  `ocupacao` tinytext NOT NULL,
  `freq_escola` tinyint(1) NOT NULL,
  `escolaridade` tinytext NOT NULL,
  `situacao_trab` tinytext NOT NULL,
  `plano_saude` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `evolucoes`
--

CREATE TABLE `evolucoes` (
  `cod` int(9) NOT NULL,
  `paciente` int(11) NOT NULL,
  `horario` datetime NOT NULL,
  `user` int(9) NOT NULL,
  `leito` smallint(6) NOT NULL,
  `posicao` varchar(32) NOT NULL,
  `modo_loc` varchar(16) NOT NULL,
  `forma_resp` varchar(16) NOT NULL,
  `oxigenacao` float NOT NULL,
  `nivel_consc` varchar(16) NOT NULL,
  `forma_consc` varchar(16) NOT NULL,
  `temperatura` float NOT NULL,
  `est_temperatura` varchar(16) NOT NULL,
  `respiracao` varchar(16) NOT NULL,
  `rpm` smallint(6) NOT NULL,
  `pulso` varchar(16) NOT NULL,
  `bpm` smallint(6) NOT NULL,
  `pressao` varchar(16) NOT NULL,
  `paps` varchar(8) NOT NULL,
  `pele` varchar(16) NOT NULL,
  `cabelo` varchar(16) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `evolucoes`
--

INSERT INTO `evolucoes` (`cod`, `paciente`, `horario`, `user`, `leito`, `posicao`, `modo_loc`, `forma_resp`, `oxigenacao`, `nivel_consc`, `forma_consc`, `temperatura`, `est_temperatura`, `respiracao`, `rpm`, `pulso`, `bpm`, `pressao`, `paps`, `pele`, `cabelo`) VALUES
(1, 1235, '2016-10-20 10:30:09', 114159715, 235, 'Dec Dorsal', 'Deaambulando', 'ambiente', 4, 'Consciente', 'Agitado', 50, 'Hipertermia', 'Bradipneia', 11, 'Dicrï¿½tico', 8, 'Convergente', '21/6', 'Normocoradas', 'Inflamaï¿½ï¿½es'),
(2, 1235, '2016-12-09 12:15:02', 114159715, 0, 'Dec Dorsal', 'Deaambulando', 'ambiente', 6, 'Orientado', 'Verbalizando', 2, 'Hipertermia', 'Eupneia', 5, 'Rï¿½tmico', 5, 'Normotensa', '6/15', 'Normocoradas', 'ï¿½ntegro');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pacientes`
--

CREATE TABLE `pacientes` (
  `nome` tinytext NOT NULL,
  `cod` int(11) NOT NULL,
  `nasc` date NOT NULL,
  `end` text NOT NULL,
  `cpf` tinytext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `pacientes`
--

INSERT INTO `pacientes` (`nome`, `cod`, `nasc`, `end`, `cpf`) VALUES
('Astoufo Lorem Ipsum', 1234, '2005-07-11', '', ''),
('Luiz Eduardo Souza Xavier', 1235, '2016-09-05', 'R. IguaÃ§u, nÃºmero 45', '14471727796'),
('Ana Clara', 1236, '1998-07-15', 'Rua Piedade', '12269860721'),
('Ana Clara', 1237, '1998-07-15', 'Rua Piedade', '12269860721');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cadastros`
--
ALTER TABLE `cadastros`
  ADD PRIMARY KEY (`user`);

--
-- Indexes for table `dados_complementares`
--
ALTER TABLE `dados_complementares`
  ADD PRIMARY KEY (`cod`);

--
-- Indexes for table `evolucoes`
--
ALTER TABLE `evolucoes`
  ADD PRIMARY KEY (`cod`);

--
-- Indexes for table `pacientes`
--
ALTER TABLE `pacientes`
  ADD PRIMARY KEY (`cod`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `evolucoes`
--
ALTER TABLE `evolucoes`
  MODIFY `cod` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `pacientes`
--
ALTER TABLE `pacientes`
  MODIFY `cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1238;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
