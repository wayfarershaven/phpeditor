DROP TABLE IF EXISTS `dbstr_us`;

CREATE TABLE `dbstr_us` (
	`descnum` INT(11) NOT NULL DEFAULT 0,
	`type_` INT(11) NOT NULL DEFAULT 0,
	`txtfile` TEXT NOT NULL,
	`unknown` INT(11) NOT NULL DEFAULT 0,
	PRIMARY KEY (`descnum`, `type_`)
)
COLLATE='latin1_swedish_ci'
ENGINE=InnoDB
;

