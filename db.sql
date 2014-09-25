CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(11) NOT NULL,
  `login` char(255) NOT NULL,
  `senha` char(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `contatos` (
  `id` int(11) NOT NULL,
  `nome` char(255) NOT NULL,
  `telefone1` char(255) NOT NULL,
  `telefone2` char(255) NOT NULL,
  `email1` varchar(50) NOT NULL,
  `email2` varchar(50) NOT NULL,
  `imagem` LONGBLOB NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;