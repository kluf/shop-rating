CREATE TABLE IF NOT EXISTS `shops`(
	`id` INT NOT NULL AUTO_INCREMENT COMMENT 'shop id',
	`name` VARCHAR(30) NOT NULL COMMENT 'shop name',
	`siteUrl` VARCHAR(30) NOT NULL,
	`description` TEXT COMMENT 'some description',
	`logo` INT COMMENT 'foreign key to images table',
	PRIMARY KEY (`id`)
)ENGINE=MyISAM
DEFAULT CHARACTER SET `utf8`
COLLATE utf8_general_ci,
COMMENT 'stores shops data';

CREATE TABLE IF NOT EXISTS `commentType`(
	`id` INT NOT NULL AUTO_INCREMENT COMMENT 'commentType id',
	`name` VARCHAR(30) NOT NULL COMMENT 'type of comment',
	PRIMARY KEY (`id`)
)ENGINE=MyISAM
DEFAULT CHARACTER SET `utf8`
COLLATE utf8_general_ci,
COMMENT 'stores type of comments data, like positive, negative, etc.';

CREATE TABLE IF NOT EXISTS `operationType`(
	`id` INT NOT NULL AUTO_INCREMENT COMMENT 'operationType id',
	`name` VARCHAR(30) NOT NULL COMMENT 'type of operationType',
	PRIMARY KEY (`id`)
)ENGINE=MyISAM
DEFAULT CHARACTER SET `utf8`
COLLATE utf8_general_ci,
COMMENT 'stores type of operation, like buying, repairing, etc.';

CREATE TABLE IF NOT EXISTS `images`(
	`id` INT NOT NULL AUTO_INCREMENT COMMENT 'image id',
	`name` VARCHAR(30) NOT NULL COMMENT 'image name',
	`type` VARCHAR(30) NOT NULL COMMENT 'image type, like png, gif, etc.',
	`width` INT NOT NULL,
	`heihgt` INT NOT NULL,
	PRIMARY KEY (`id`)
)ENGINE=MyISAM
DEFAULT CHARACTER SET `utf8`
COLLATE utf8_general_ci,
COMMENT 'stores shops data';

CREATE TABLE IF NOT EXISTS `comments`(
	`id` INT NOT NULL AUTO_INCREMENT COMMENT 'image id',
	`dateComment` VARCHAR(30) NOT NULL COMMENT 'image name',
	`userName` VARCHAR(30) NOT NULL COMMENT 'image type, like png, gif, etc.',
	`description` TEXT NOT NULL,
	`lasts` VARCHAR(30) NOT NULL,
	`commentType` INT NOT NULL COMMENT 'foreign key to commentType table',
	`operationType` INT NOT NULL COMMENT 'foreign key to operationType table',
	`shopId` INT NOT NULL COMMENT 'foreign key to shops table',
	`rating` ENUM('1','2','3','4','5') NOT NULL DEFAULT '3',
	PRIMARY KEY (`id`)
)ENGINE=MyISAM
DEFAULT CHARACTER SET `utf8`
COLLATE utf8_general_ci,
COMMENT 'stores shops data';