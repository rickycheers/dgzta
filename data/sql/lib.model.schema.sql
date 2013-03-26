
# This is a fix for InnoDB in MySQL >= 4.1.x
# It "suspends judgement" for fkey relationships until are tables are set.

#-----------------------------------------------------------------------------
#-- user
#-----------------------------------------------------------------------------

CREATE DATABASE AB


CREATE TABLE `user`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`first_name` VARCHAR(45)  NOT NULL,
	`last_name` VARCHAR(45)  NOT NULL,
	`created_at` DATETIME,
	`updated_at` DATETIME,
	PRIMARY KEY (`id`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- car
#-----------------------------------------------------------------------------




CREATE TABLE `car`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`user_id` INTEGER  NOT NULL,
	`brand` VARCHAR(60),
	`model` VARCHAR(60),
	`color` VARCHAR(60),
	`mileage` INTEGER,
	`created_at` DATETIME,
	`updated_at` DATETIME,
	PRIMARY KEY (`id`),
	INDEX `car_FI_1` (`user_id`),
	CONSTRAINT `car_FK_1`
		FOREIGN KEY (`user_id`)
		REFERENCES `user` (`id`)
)Type=InnoDB;

# This restores the fkey checks, after having unset them earlier
