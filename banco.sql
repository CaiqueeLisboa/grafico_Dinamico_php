-- --------------------------------------------------------
-- Servidor:                     localhost
-- Versão do servidor:           5.7.24 - MySQL Community Server (GPL)
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Copiando estrutura do banco de dados para grafico
CREATE DATABASE IF NOT EXISTS `grafico` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `grafico`;

-- Copiando estrutura para tabela grafico.aluno
CREATE TABLE IF NOT EXISTS `aluno` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL DEFAULT '',
  `idade` int(11) NOT NULL DEFAULT '0',
  `sexo` char(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela grafico.aluno: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `aluno` DISABLE KEYS */;
INSERT INTO `aluno` (`id`, `nome`, `idade`, `sexo`) VALUES
	(1, 'Ana Paula', 17, 'F'),
	(2, 'Ana Carolina', 16, 'F'),
	(3, 'Alisson Fernando', 18, 'M'),
	(4, 'Beatriz Lopes', 18, 'F'),
	(5, 'Caio Fernandez', 17, 'M'),
	(6, 'Caique Motta', 18, 'M'),
	(7, 'Davi Muniz', 18, 'M'),
	(8, 'Fernanda Silva', 18, 'F'),
	(9, 'Roberta Motta', 17, 'F'),
	(10, 'Romário Santos', 19, 'M');
/*!40000 ALTER TABLE `aluno` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
