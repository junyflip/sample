<?php
$db_connect = new PDO("mysql:host=127.0.0.1;dbname=todo", 'root', 'root');

/*CREATE TABLE `tasks` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL DEFAULT '',
  `submitted` timestamp NULL DEFAULT NULL,
  `completed` datetime DEFAULT NULL,
  `deleted` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;*/