
--   Table USERS

CREATE TABLE IF NOT EXISTS `users` (
`id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(60) NOT NULL,
  `type` int(1) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `contact_info` varchar(100) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `status` int(1) NOT NULL,
  `created_on` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `type`, `firstname`, `lastname`, `address`, `contact_info`, `photo`, `status`,  `created_on`) VALUES
(1, 'admin@admin.com', '$2y$10$0SHFfoWzz8WZpdu9Qw//E.tWamILbiNCX7bqhy3od0gvK5.kSJ8N2', 1, 'Code', 'Projects', '', '', 'thanos1.jpg', 1,  '2018-05-01'),
(9, 'harry@den.com', '$2y$10$Oongyx.Rv0Y/vbHGOxywl.qf18bXFiZOcEaI4ZpRRLzFNGKAhObSC', 0, 'Harry', 'Den', 'Silay City, Negros Occidental', '09092735719', 'male2.png', 1,  '2018-05-09'),
(12, 'christine@gmail.com', '$2y$10$ozW4c8r313YiBsf7HD7m6egZwpvoE983IHfZsPRxrO1hWXfPRpxHO', 0, 'Christine', 'becker', 'demo', '7542214500', 'female3.jpg', 1,  '2018-07-09');


ALTER TABLE `users`
 ADD PRIMARY KEY (`id`);

ALTER TABLE `users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;


--  Table Messages

CREATE TABLE  `messages` (
`id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `name` varchar(150) NOT NULL,
  `subject` varchar(2550) NOT NULL,
  `message` varchar(2555500) NOT NULL
 
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `email`, `name`, `subject`, `message`) VALUES
(1, 'admin@admin.com', 'Babies and Beyond Administrator', 'Notice', 'Thank you all for your feedback.We will consider all your suggestions going forward. Have a great term.');



ALTER TABLE `messages`
 ADD PRIMARY KEY (`id`);

ALTER TABLE `messages`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;


-- Table `EMPLOYEES`
CREATE TABLE  `employees` (
`id` int(11) NOT NULL, 
    `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
    `religion` varchar(50) NOT NULL,
     `marital_status` varchar(50) NOT NULL,
    `gender` varchar(50) NOT NULL,
    `date_of_birth` date NOT NULL,
     `phone_number` int(50) NOT NULL,
     `country` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `status` varchar(25) NOT NULL,
     `work` varchar(25) NOT NULL,
  `joining_date` date NOT NULL,
    `next_of_kin_name` varchar(50) NOT NULL,
     `relation` varchar(50) NOT NULL,
     `mobile_number` int(50) NOT NULL,
     `profession` varchar(50) NOT NULL,
     `next_marital_status` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

ALTER TABLE `employees`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;

ALTER TABLE `employees`
 ADD PRIMARY KEY (`id`);

INSERT INTO `employees` (`id`,  `firstname`, `lastname`,`religion`,  `marital_status`,  `gender`,  `date_of_birth`, `phone_number`,  `country`, `address`, `status`, `work`, `joining_date`,  `next_of_kin_name`, `relation`, `mobile_number`,`profession`, `next_marital_status`) VALUES
(1, 'Joanah', 'Wanjera','Christian', 'Married', 'Female', '1989-04-05', 0722548568, 'Kenya','Tatu City, 3244-Kiambu', 'active','Teacher', now(), 'James Muturi', 'Husband/Wife', 0744136793, 'Married');

-- Table photos
CREATE TABLE `photos` (
  `image_id` int(11) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `image_img` varchar(255) NOT NULL,
  `image_register` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
ALTER TABLE `photos`
  ADD PRIMARY KEY (`image_id`);

ALTER TABLE  `photos`
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
  
INSERT INTO  `photos` (`image_id`,  `image_name`, `image_img`, `image_register`) VALUES
(1, 'Graduation', 'images/portfolio15.jpg', now()),
('', 'Pencils', 'images/portfolio6.jpeg', now()),
('', 'Class Room', 'images/portfolio12.jpg', now()),
('', 'Books', 'images/portfolio5.jpeg', now()),
('', 'Poster', 'images/portfolio10.jfif', now()),
('', 'Crayons', 'images/portfolio2.jpeg', now()),
('', 'Reading', 'images/portfolio3.jpeg', now()),
('', 'Music', 'images/portfolio13.jpg', now()),
('', 'Class Room', 'images/portfolio11.jpg', now()),
('', 'Desk', 'images/portfolio4.jpeg', now()),
('', 'Tables', 'images/portfolio7.jpeg', now()),
('', 'Class Room', 'images/portfolio9.jfif', now()),
('', 'Book Reading', 'images/portfolio1.jpeg', now()),
('', 'Activity', 'images/portfolio8.jfif', now()),
('', 'Trip', 'images/portfolio14.jpg', now());




-- Table STUDENTS---
CREATE TABLE  `students` (
`id` int(11) NOT NULL, 
    `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
    `religion` varchar(50) NOT NULL,
     `admision_number` int(50) NOT NULL,
     `class` int(50) NOT NULL,
    `gender` varchar(50) NOT NULL,
    `date_of_birth` date NOT NULL,
  `home_address` text NOT NULL,
  `school_transport` varchar(25) NOT NULL,
 `admission_date` datetime NOT NULL,
     `status` varchar(25) NOT NULL,
    
    `parent_name` varchar(50) NOT NULL,
     `relation` varchar(50) NOT NULL,
     `parent_number` int(50) NOT NULL,
     `parent_profession` varchar(50) NOT NULL,
     `parent_marital_status` varchar(50) NOT NULL,
    
     `guardian_name` varchar(50) NOT NULL,
     `guardian_number` int(50) NOT NULL,
     `guardian_profession` varchar(50) NOT NULL,
     `guardian_marital_status` varchar(50) NOT NULL
    
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

ALTER TABLE `students`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;

ALTER TABLE `students`
 ADD PRIMARY KEY (`id`);

INSERT INTO `students` (`id`,  `firstname`, `lastname`,`religion`, `admision_number`, `class`,  `gender`,  `date_of_birth`,  `home_address`, `school_transport`,  `admission_date`, `status`,  `parent_name`,  `parent_number`,`parent_profession`,  `parent_marital_status`,  `guardian_name`, `guardian_number`, `guardian_profession`,  `guardian_marital_status`) VALUES
(1, 'Joanah', 'Wanjera','Christian', 'Married', 'Female', '1989-04-05', 0722548568, 'Kenya','Tatu City, 3244-Kiambu', 'active','Teacher', now(), 'James Muturi', 'Husband/Wife', 0744136793, 'Married');






-- Table RESULT-------

CREATE TABLE  `results` (
`id` int(11) NOT NULL,
  `class` varchar(200) NOT NULL,
  `term` varchar(150) NOT NULL,
    `firstname` varchar(200) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `admission_number` varchar(200) NOT NULL,
  `maths` int(50) NOT NULL,
  `drawing` int(50) NOT NULL,
  `reading` int(50) NOT NULL,
  `spelling` int(50) NOT NULL,
  `general` int(50) NOT NULL,
  `total` int(50) NOT NULL,
  `remarks` varchar(2000000) NOT NULL 
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;


INSERT INTO `results` (`id`, `class`, `term`, `firstname`, `lastname`,  `admission_number`,  `maths`, `drawing`, `reading`, `spelling`, `general`, `total`,  `remarks`) VALUES
(1, 'PP1', '2nd Term, 2021', ' ', ' ', ' ', ' ',' ',' ', ' ', ' ', ' ', ' ');



ALTER TABLE `results`
 ADD PRIMARY KEY (`id`);

ALTER TABLE `results`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;





-- Table Timetables


CREATE TABLE  `timetables` (
`id` int(11) NOT NULL,
  `class` varchar(20) NOT NULL,
  `term` varchar(15) NOT NULL,
    
      `day_1` varchar(10) NOT NULL,
    `subject_11` varchar(50) NOT NULL,
  `break_1` varchar(20) NOT NULL,
  `subject_21` varchar(50) NOT NULL,
      `teabreak_1` varchar(20) NOT NULL,
  `subject_31` varchar(50) NOT NULL,
  `subject_41` varchar(50) NOT NULL,
  `lunchbreak_1` varchar(20) NOT NULL,
      `subject_51` varchar(50) NOT NULL,
    
    
      `day_2` varchar(10) NOT NULL,
    `subject_12` varchar(50) NOT NULL,
  `break_2` varchar(20) NOT NULL,
  `subject_22` varchar(50) NOT NULL,
      `teabreak_2` varchar(20) NOT NULL,
  `subject_32` varchar(50) NOT NULL,
  `subject_42` varchar(50) NOT NULL,
  `lunchbreak_2` varchar(20) NOT NULL,
      `subject_52` varchar(50) NOT NULL,
    
    
      `day_3` varchar(10) NOT NULL,
    `subject_13` varchar(50) NOT NULL,
  `break_3` varchar(20) NOT NULL,
  `subject_23` varchar(50) NOT NULL,
      `teabreak_3` varchar(20) NOT NULL,
  `subject_33` varchar(50) NOT NULL,
  `subject_43` varchar(50) NOT NULL,
  `lunchbreak_3` varchar(20) NOT NULL,
      `subject_53` varchar(50) NOT NULL,
    
    
      `day_4` varchar(10) NOT NULL,
    `subject_14` varchar(50) NOT NULL,
  `break_4` varchar(20) NOT NULL,
  `subject_24` varchar(50) NOT NULL,
      `teabreak_4` varchar(20) NOT NULL,
  `subject_34` varchar(50) NOT NULL,
  `subject_44` varchar(50) NOT NULL,
  `lunchbreak_4` varchar(20) NOT NULL,
      `subject_54` varchar(50) NOT NULL,

    
      `day_5` varchar(10) NOT NULL,
    `subject_15` varchar(50) NOT NULL,
  `break_5` varchar(20) NOT NULL,
  `subject_25` varchar(50) NOT NULL,
      `teabreak_5` varchar(20) NOT NULL,
  `subject_35` varchar(50) NOT NULL,
  `subject_45` varchar(50) NOT NULL,
  `lunchbreak_5` varchar(20) NOT NULL,
      `subject_55` varchar(50) NOT NULL

) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;


ALTER TABLE `timetables`
 ADD PRIMARY KEY (`id`);

ALTER TABLE `timetables`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;