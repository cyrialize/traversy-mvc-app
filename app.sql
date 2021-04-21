CREATE DATABASE IF NOT EXISTS shareposts;

USE shareposts;

DROP TABLE IF EXISTS users;

CREATE TABLE users (
    `id` INT AUTO_INCREMENT,
    `name` VARCHAR(255),
    `email` VARCHAR(255),
    `password` VARCHAR(255),
    `created_at` DATETIME DEFAULT current_timestamp,
    PRIMARY KEY (`id`)
);

DROP TABLE IF EXISTS posts;

CREATE TABLE posts (
	`id` INT AUTO_INCREMENT,
    `user_id` INT,
    `title` VARCHAR(255),
    `body` TEXT,
    `created_at` DATETIME DEFAULT current_timestamp,
    PRIMARY KEY (`id`)
);