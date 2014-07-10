CREATE TABLE IF NOT EXISTS `payments` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `date` date NOT NULL,
  `value` float NOT NULL,
  PRIMARY KEY (`id`)
);

CREATE TABLE IF NOT EXISTS `members` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `username` text NOT NULL,
  `balance` float NOT NULL,
  `password` text NOT NULL,
  `salt` text NOT NULL,
  PRIMARY KEY (`id`)
);

CREATE TABLE IF NOT EXISTS `portions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `memberID` int(10) unsigned NOT NULL,
  `paymentID` int(10) unsigned NOT NULL,
  `value` float NOT NULL,
  PRIMARY KEY (`id`)
);