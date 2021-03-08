

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(24) NOT NULL,
  PRIMARY KEY (`id`)
 ) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;




CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `category_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` int(12) unsigned NOT NULL,
  `pur_year` varchar(4) DEFAULT NULL,
  `description` text NOT NULL,
  `filename` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  FOREIGN KEY(`category_id`) REFERENCES `categories`(`id`),
  FOREIGN KEY(`user_id`) REFERENCES `users`(`id`)) 
 ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;



CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(60) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `phone` (`phone`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;


create table if not exists feedback(
	fno int primary key not null auto_increment,
	remarks varchar(500) NOT NULL,
	u_name varchar(20),
    email varchar(20));
    
    
    