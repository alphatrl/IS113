--
-- Database: `lt2`
--
DROP DATABASE IF EXISTS `lt2`;
CREATE DATABASE `lt2`;
USE `lt2`;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--
DROP TABLE IF EXISTS `customer`;
CREATE TABLE `customer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `gender` varchar(1) NOT NULL,
  `age` int(11) NOT NULL,
  `music` tinyint(1) NOT NULL,
  `fashion` tinyint(1) NOT NULL,
  `sports` tinyint(1) NOT NULL,
  `electronics` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
);

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` VALUES
(1,'F',19,1,1,0,0),
(2,'F',21,1,1,1,1),
(3,'F',27,0,1,0,1),
(4,'F',33,1,1,1,1),
(5,'F',58,0,1,0,1),
(6,'F',62,1,1,1,1),
(7,'F',65,1,1,0,0),
(8,'F',60,0,0,1,1),
(9,'F',45,1,0,0,0),
(10,'F',29,1,0,0,1),
(11,'F',35,1,1,0,1),
(12,'F',42,10,1,1,1),
(13,'F',16,1,1,0,0),
(14,'F',15,1,1,1,1),
(15,'F',17,0,1,1,0),
(16,'M',16,1,1,1,1),
(17,'M',17,1,0,1,1),
(18,'M',22,0,0,1,1),
(19,'M',24,0,1,1,1),
(20,'M',28,0,0,0,1),
(21,'M',31,0,1,0,0),
(22,'M',33,1,0,1,1),
(23,'M',40,0,0,1,1),
(24,'M',43,0,1,0,0),
(25,'M',48,0,0,1,1),
(26,'M',53,11,1,1,1),
(27,'M',55,11,0,1,1),
(28,'M',56,10,0,0,1),
(29,'M',66,0,1,0,1),
(30,'M',57,0,0,0,1);



-- --------------------------------------------------------

--
-- Table structure for table `account`
--
DROP TABLE IF EXISTS `account`;
CREATE TABLE `account` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(200) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password_hash` varchar(300) NOT NULL,
  `membership_type` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
);
--
-- Dumping data for table `account`
--

INSERT INTO account (id, fullname, username, password_hash, membership_type) VALUES (1, 'John Lennon', 'john', '$2y$10$nUOnwTr4dIL9tknjDgqvXeS9RBCo8DlJYHiJuAq9tgCanj58FTrre', 'Regular');
INSERT INTO account (id, fullname, username, password_hash, membership_type) VALUES (2, 'Paul McCartney', 'paul', '$2y$10$Hz7Q7KybHyAKKaH.FXTqcOBc0us8oUBziSF2oAzWbMCJOJJUnN0DO', 'Regular');
INSERT INTO account (id, fullname, username, password_hash, membership_type) VALUES (3, 'Ringo Starr', 'ringo', '$2y$10$EsXkjl6veL50Zxz0231JYu5E.Rz24mnJGkgkTI1l1OHs8ksltKtYG', 'Premium');
INSERT INTO account (id, fullname, username, password_hash, membership_type) VALUES (4, 'Michael Jackson', 'michael', '$2y$10$SOQnNZjLRnS8dAAYw2lSp.88JailkXJ24urwz4WWPgiEzLlFSgaBu', 'Premium');
INSERT INTO account (id, fullname, username, password_hash, membership_type) VALUES (5, 'Justin Bieber', 'justin', '$2y$10$nU5kcjpXJ3gCs5nqTuuZ2eT9EwgzNpVmvOhKA/QrPTpPc1pWsAq/a', 'Regular');


--
-- Table structure for table `item`
--
DROP TABLE IF EXISTS `item`;
CREATE TABLE `item` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `item_name` varchar(200) NOT NULL,
  `item_price` decimal(12, 2) NOT NULL,
  PRIMARY KEY (`id`)
);
--
-- Dumping data for table `item`
--
INSERT INTO item (id, item_name, item_price) VALUES (1, 'Dagger', 5.25);
INSERT INTO item (id, item_name, item_price) VALUES (2, 'Boots of Swiftness', 4.75);
INSERT INTO item (id, item_name, item_price) VALUES (3, 'Cosmic Shackle', 6.15);
INSERT INTO item (id, item_name, item_price) VALUES (4, 'Cloak of Agility', 7.00);
INSERT INTO item (id, item_name, item_price) VALUES (5, 'Chain Vest', 8.99);
INSERT INTO item (id, item_name, item_price) VALUES (6, 'Glacial Shroud', 12.95);
INSERT INTO item (id, item_name, item_price) VALUES (7, 'Vampiric Scepter', 8.50);
INSERT INTO item (id, item_name, item_price) VALUES (8, 'Zeal', 2.45);
INSERT INTO item (id, item_name, item_price) VALUES (9, 'Sunfire Cape', 14.99);
INSERT INTO item (id, item_name, item_price) VALUES (10, 'Rapid Firecannon', 4.99);


--
-- Table structure for table `inventory`
--
DROP TABLE IF EXISTS `inventory`;
CREATE TABLE `inventory` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `item_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  PRIMARY KEY(ID),
  FOREIGN KEY (`item_id`) REFERENCES item(id)
);
--
-- Dumping data for table `store_inventory`
--
INSERT INTO inventory (id, item_id, quantity) VALUES (1, 1, 5);
INSERT INTO inventory (id, item_id, quantity) VALUES (2, 2, 3);
INSERT INTO inventory (id, item_id, quantity) VALUES (3, 3, 9);
INSERT INTO inventory (id, item_id, quantity) VALUES (4, 4, 12);
INSERT INTO inventory (id, item_id, quantity) VALUES (5, 5, 2);
INSERT INTO inventory (id, item_id, quantity) VALUES (6, 6, 1);
INSERT INTO inventory (id, item_id, quantity) VALUES (7, 7, 5);
INSERT INTO inventory (id, item_id, quantity) VALUES (8, 8, 8);
INSERT INTO inventory (id, item_id, quantity) VALUES (9, 9, 3);
INSERT INTO inventory (id, item_id, quantity) VALUES (10, 10, 5);



-- --------------------------------------------------------

--
-- Table structure for table `route`
--
DROP TABLE IF EXISTS `route`;
CREATE TABLE `route` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `origin` varchar(50) NOT NULL,
  `destination` varchar(50) NOT NULL,
  `travel_time` int(11) NOT NULL,
  `travel_cost` decimal(12, 2) NOT NULL,
  PRIMARY KEY(id)
);

--
-- Dumping data for table `route`
--
INSERT INTO route (id, origin, destination, travel_time, travel_cost) VALUES (1, 'ATL', 'LAX', 4, 10000);
INSERT INTO route (id, origin, destination, travel_time, travel_cost) VALUES (2, 'LAX', 'ATL', 5, 15000);
INSERT INTO route (id, origin, destination, travel_time, travel_cost) VALUES (3, 'ATL', 'ORD', 3, 9000);
INSERT INTO route (id, origin, destination, travel_time, travel_cost) VALUES (4, 'ORD', 'DFW', 3, 5000);
INSERT INTO route (id, origin, destination, travel_time, travel_cost) VALUES (5, 'DFW', 'LAX', 3, 4000);
INSERT INTO route (id, origin, destination, travel_time, travel_cost) VALUES (6, 'ORD', 'LAX', 5, 15000);
INSERT INTO route (id, origin, destination, travel_time, travel_cost) VALUES (7, 'DFW', 'ORD', 3, 5000);
INSERT INTO route (id, origin, destination, travel_time, travel_cost) VALUES (8, 'LAX', 'DFW', 3, 4000);
INSERT INTO route (id, origin, destination, travel_time, travel_cost) VALUES (9, 'LAX', 'ORD', 6, 12000);
INSERT INTO route (id, origin, destination, travel_time, travel_cost) VALUES (10, 'JFK', 'SFO', 6, 20000);
INSERT INTO route (id, origin, destination, travel_time, travel_cost) VALUES (11, 'JFK', 'DEN', 4, 8000);
INSERT INTO route (id, origin, destination, travel_time, travel_cost) VALUES (12, 'DEN', 'SFO', 2, 4000);
INSERT INTO route (id, origin, destination, travel_time, travel_cost) VALUES (13, 'JFK', 'ATL', 2, 5000);
INSERT INTO route (id, origin, destination, travel_time, travel_cost) VALUES (14, 'ATL', 'JFK', 2, 6000);
INSERT INTO route (id, origin, destination, travel_time, travel_cost) VALUES (15, 'JFK', 'ORD', 4, 9000);
INSERT INTO route (id, origin, destination, travel_time, travel_cost) VALUES (16, 'ORD', 'JFK', 4, 10000);
INSERT INTO route (id, origin, destination, travel_time, travel_cost) VALUES (17, 'SFO', 'LAX', 1, 3000);
INSERT INTO route (id, origin, destination, travel_time, travel_cost) VALUES (18, 'LAX', 'SFO', 1, 3000);
INSERT INTO route (id, origin, destination, travel_time, travel_cost) VALUES (19, 'ORD', 'DEN', 3, 15000);
INSERT INTO route (id, origin, destination, travel_time, travel_cost) VALUES (20, 'DEN', 'ORD', 3, 15000);
INSERT INTO route (id, origin, destination, travel_time, travel_cost) VALUES (21, 'ORD', 'MSP', 1, 10000);
INSERT INTO route (id, origin, destination, travel_time, travel_cost) VALUES (22, 'MSP', 'DFW', 3, 20000);
INSERT INTO route (id, origin, destination, travel_time, travel_cost) VALUES (23, 'MSP', 'DTW', 2, 8000);


--
-- END OF DATA LOADING
--
