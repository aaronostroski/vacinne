CREATE DATABASE IF NOT EXISTS `fernando`;

CREATE TABLE `user` (
	`id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
	`firstName` VARCHAR(50) NOT NULL DEFAULT '' COLLATE 'utf8mb4_general_ci',
	`lastName` VARCHAR(50) NOT NULL DEFAULT '' COLLATE 'utf8mb4_general_ci',
	`email` VARCHAR(50) NOT NULL DEFAULT '' COLLATE 'utf8mb4_general_ci',
	`password` VARCHAR(100) NOT NULL COLLATE 'utf8mb4_general_ci',
	`birthdate` DATETIME NOT NULL,
	`gender` ENUM('M','F','O','N') NOT NULL DEFAULT 'N' COLLATE 'utf8mb4_general_ci',
	`dateCreated` DATETIME NULL DEFAULT NULL,
	`dateUpdated` DATETIME NOT NULL,
	PRIMARY KEY (`id`) USING BTREE,
	UNIQUE INDEX `email` (`email`) USING BTREE,
	INDEX `gender` (`gender`) USING BTREE
)
COLLATE='utf8mb4_general_ci'
ENGINE=InnoDB
;

CREATE TABLE `vaccine` (
	`id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(50) NOT NULL COLLATE 'utf8mb4_general_ci',
	`description` TEXT NOT NULL COLLATE 'utf8mb4_general_ci',
	`imageUrl` VARCHAR(200) NULL DEFAULT NULL COLLATE 'utf8mb4_general_ci',
	`dateCreated` DATETIME NOT NULL,
	`dateUpdate` DATETIME NULL DEFAULT NULL,
	PRIMARY KEY (`id`) USING BTREE
)
COLLATE='utf8mb4_general_ci'
ENGINE=InnoDB
AUTO_INCREMENT=5
;
