 
 --
-- Database: `crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE IF NOT EXISTS `customers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=68 ;
--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `first_name`, `last_name`, `email`, `phone`) VALUES
  (1, 'John', 'Doe', 'john.doe@example.com', '123-456-7890'),
  (2, 'Jane', 'Doe', 'jane.doe@example.com', '123-456-7891'),
  (3, 'Bob', 'Smith', 'bob.smith@example.com', '123-456-7892'),
  (4, 'Alice', 'Johnson', 'alice.johnson@example.com', '123-456-7893'),
  (5, 'David', 'Brown', 'david.brown@example.com', '123-456-7894'),
  (6, 'Sarah', 'Williams', 'sarah.williams@example.com', '123-456-7895'),
  (7, 'Michael', 'Garcia', 'michael.garcia@example.com', '123-456-7896'),
  (8, 'Emily', 'Davis', 'emily.davis@example.com', '123-456-7897'),
  (9, 'Robert', 'Miller', 'robert.miller@example.com', '123-456-7898'),
  (10, 'Jessica', 'Taylor', 'jessica.taylor@example.com', '123-456-7899');