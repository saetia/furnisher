<?
	// members
  // `shortname` varchar(64) DEFAULT NULL COMMENT 'URL',
  // `email` varchar(150) DEFAULT NULL COMMENT 'Email',
  // `display_name` varchar(64) DEFAULT NULL COMMENT 'Display Name',
  // `firstname` varchar(32) DEFAULT NULL COMMENT 'First Name',
  // `lastname` varchar(32) DEFAULT NULL COMMENT 'Last Name',
  // `company` varchar(32) DEFAULT NULL COMMENT 'Company',
  // `address` varchar(64) DEFAULT NULL COMMENT 'Address',
  // `address2` varchar(64) DEFAULT NULL COMMENT 'Address (Cont.)',
  // `city` varchar(32) DEFAULT NULL COMMENT 'City',
  // `region` char(2) DEFAULT NULL COMMENT 'State',
  // `country` char(2) NOT NULL DEFAULT 'US' COMMENT 'Country',
  // `postalcode` varchar(10) DEFAULT NULL COMMENT 'Postal Code',
  // `phone` varchar(15) DEFAULT NULL COMMENT 'Phone',
  // `pw` char(32) DEFAULT NULL COMMENT 'Password',
  // `referred` int(11) NOT NULL DEFAULT '1' COMMENT 'Referred',
  // `affiliate` varchar(40) DEFAULT NULL COMMENT 'Affiliate',
  // `featured` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'Featured',
  // `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Created',
  // `deleted` timestamp NULL DEFAULT NULL COMMENT 'Deleted',
  // `ss_lat` float(9,6) DEFAULT NULL COMMENT 'Lat Coord',
  // `ss_lon` float(9,6) DEFAULT NULL COMMENT 'Lon Coord',
  // `ss_title` varchar(200) DEFAULT NULL COMMENT 'Job Title',
  // `ss_dob` varchar(30) DEFAULT NULL COMMENT 'Date of Birth',
  // `ss_focus` text COMMENT 'Focus',
  // `ss_privacy` varchar(60) DEFAULT 'public' COMMENT 'Privacy',
  // `ss_bio` text COMMENT 'Bio',
  // `ss_education` varchar(255) DEFAULT '' COMMENT 'Education',
  // `ss_work_radius` int(11) DEFAULT NULL COMMENT 'Distance willing to travel',
  // `ss_rating` decimal(2,1) NOT NULL DEFAULT '0.0' COMMENT 'Rating',

$Furnisher = new Furnisher($table='members');
$Furnisher->testmode = true;


$Furnisher->furnish();

?>