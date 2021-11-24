
DROP TABLE IF EXISTS `normal_users`;
CREATE TABLE IF NOT EXISTS `normal_users` (
  `email` varchar(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`email`)
);

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` varchar(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `pseudo` varchar(50) NOT NULL,
  `passphrase` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
);