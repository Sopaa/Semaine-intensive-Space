-- creation de la table


DROP TABLE IF EXISTS `Satelite`;

CREATE TABLE `Satelite` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `launch_date` date NOT NULL,
  `mission_end_date` date DEFAULT NULL,
  `status` varchar(8) NOT NULL,
  `program` varchar(150) DEFAULT 'Not know',
  `agencie` varchar(100) NOT NULL,
  `orbit` varchar(45) DEFAULT 'Not know',
  `altitude` int(11) NOT NULL,
  `inclinaison` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


-- insertion

INSERT INTO `Satelite` (
  `name`,
  `launch_date`,
  `mission_end_date`,
  `status`,
  `program`,
  `agencie`,
  `orbit`,
  `altitude`,
  `inclinaison`

)
VALUE (
  'International Space Station',
  '20-11-1998',
  '',
  'active',
  'Exeriences',
  'NASA CSA ESA JAXA Roscosmos',
  '408',
  'Low Orbit altitude',
  '51.6'
)

;


