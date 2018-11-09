CREATE TABLE `book_info`
(
	`id` int(11) NOT NULL,
  	`title` varchar(100) NOT NULL,
  	`author` varchar(100) NOT NULL,
  	`description` mediumtext,
  	`date_added` datetime DEFAULT CURRENT_TIMESTAMP,
  	`availability` varchar(1) DEFAULT 'Y'
);

CREATE TABLE `stud_info`
(
	`id` int(10) NOT NULL,
  	`f_name` varchar(100) NOT NULL,
  	`m_init` varchar(100),
  	`l_name` mediumtext NOT NULL,
  	`reserved_book_count` int(3)
);