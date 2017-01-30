<?php include 'db.php';?>
<!DOCTYPE html>
<html>
<head>
    <title>PHP MySQL Sample Application</title>
    <link rel="stylesheet" href="style.css" />
</head>

<?php
$sqlTable="DROP TABLE IF EXISTS MESSAGES_TABLE";
if ($mysqli->query($sqlTable)) {
    echo "Table dropped successfully! <br>";
} else {
	//echo "Cannot drop table. "  . mysqli_error();
}
echo "Executing CREATE TABLE Query...<br>";

$sqlTable="
CREATE TABLE IF NOT EXISTS `doc_report` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `p_id` varchar(10) NOT NULL,
  `sreport` longblob NOT NULL,
  `comment` varchar(1000) NOT NULL,
  `d_name` varchar(25) NOT NULL,
  `ddept` varchar(30) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

INSERT INTO `doc_report` (`id`, `p_id`, `sreport`, `comment`, `d_name`, `ddept`, `timestamp`) VALUES
(3, '3455667', 0x353663343930386264323363322e706e67, 'exercise regularly', 'DR Devender Sharma', 'Physiotherapy', '2016-04-29 23:56:16'),
(4, '3455667', 0x353663343930386264323363322e706e67, 'maintain blood pressure', 'DR. roopali das', 'cardiology', '2016-04-29 23:57:22');

CREATE TABLE IF NOT EXISTS `patient_file` (
  `p_id` varchar(10) NOT NULL,
  `p_name` varchar(30) NOT NULL,
  `gender` text NOT NULL,
  `dob` text NOT NULL,
  `disease` varchar(40) NOT NULL,
  `p_file` longblob NOT NULL,
  `ph_name` varchar(40) NOT NULL,
  `sreport` longblob NOT NULL,
  `comment` varchar(1000) NOT NULL,
  `status` mediumtext NOT NULL,
  `d_name` varchar(25) NOT NULL,
  `ddept` varchar(30) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`p_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO `patient_file` (`p_id`, `p_name`, `gender`, `dob`, `disease`, `p_file`, `ph_name`, `sreport`, `comment`, `status`, `d_name`, `ddept`, `timestamp`) VALUES
('24342', 'prabhat singh', 'Male', '25-10-1991', 'hernia', 0x53616d706c655f5265706f72745f4c756d6261725f5370696e652e706466, ' Rural Health Training Centre', 0x707265736372697074696f6e3030312e6a7067, 'Eat less...', 'Active', 'DR. Pankaj Singh', 'NEUROLOGY', '2015-11-22 08:28:02'),
('23443654', 'Aman Verma', 'Male', '15-04-1975', 'cloting', 0x53616d706c655f5265706f72745f4c6566745f4b6e65652e706466, 'Janchetna Hospital', '', '', 'Pending', '', '', '2015-11-22 08:06:38'),
('12312', 'sheela dixit', 'Female', '97-07-1988', 'Dengue', 0x785261795f302e6a7067, 'Janchetna Hospital', '', '', 'Pending', '', '', '2015-11-22 08:04:45'),
('12415', 'shiv verma', 'Male', '09-09-1999', 'dengue', 0x6563675f31326c6561643031322e676966, ' Rao tula ram hospital', '', '', 'Pending', '', '', '2015-11-22 08:02:06'),
('345666', 'Ram Kumar', 'Male', '09-05-1990', 'bone fracture', 0x785261795f30332e4a5047, ' Rao tula ram hospital', '', '', 'Pending', '', '', '2015-11-22 06:12:17') ;

CREATE TABLE IF NOT EXISTS `user_primary` (
  `username` varchar(100) NOT NULL,
  `address` varchar(150) NOT NULL,
  `mhosname` varchar(80) NOT NULL,
  `password` varchar(40) NOT NULL,
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO `user_primary` (`username`, `address`, `mhosname`, `password`) VALUES
('Janchetna Hospital', 'xyz,abc road,bangalore', 'CGHS Hospital', 'abc123'),
(' Rao tula ram hospital', 'bg rd bangalore', 'abc123');
";
if ($mysqli->query($sqlTable)) {
    echo "Table created successfully!<br>";
} else {
	echo "ERROR: Cannot create table. "  . mysqli_error();
	die();
}
?>


<button class = "mybutton" onclick="window.location = 'index.php';">Back</button>
</html>


