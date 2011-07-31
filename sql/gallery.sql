CREATE TABLE `galleries` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `basename` varchar(255) NOT NULL,
  `dirname` varchar(255) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM;