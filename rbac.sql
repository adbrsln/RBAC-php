CREATE TABLE `user` (
	`id` INT(100) NOT NULL AUTO_INCREMENT,
	`email` VARCHAR(50) NULL DEFAULT NULL,
	`password` VARCHAR(255) NULL DEFAULT NULL,
	`name` VARCHAR(50) NULL DEFAULT NULL,
	`userType` INT(10) NULL DEFAULT NULL,
	`accountStatus` INT(11) NULL DEFAULT NULL,
	PRIMARY KEY (`id`),
	UNIQUE INDEX `id` (`id`)
)
INSERT INTO `user` (`id`, `email`, `password`, `name`, `userType`, `accountStatus`) VALUES
	(57, 'admin@email.com', 'ee11cbb19052e40b07aac0ca060c23ee', 'Muhammad Farid', 1, 1),
	(58, 'user@email.com', 'ee11cbb19052e40b07aac0ca060c23ee', 'Muhammad Farid', 2, 1),
	(59, 'accountant@email.com', 'ee11cbb19052e40b07aac0ca060c23ee', 'Muhammad Farid', 3, 1);
COLLATE='latin1_swedish_ci'
ENGINE=InnoDB
AUTO_INCREMENT=57
;
