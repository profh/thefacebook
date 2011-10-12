--
-- Database: `thefacebook`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(3) NOT NULL auto_increment,
  `email` varchar(255) default NULL,
  `name` varchar(255) default NULL,
  `status` varchar(255) default NULL,
  `password` varchar(255) default NULL,
  `member_since` varchar(255) default NULL,
  `sex` varchar(255) default NULL,
  `year` varchar(255) default NULL,
  `concentration` varchar(255) default NULL,
  `screenname` varchar(255) default NULL,
  `looking_for` varchar(255) default NULL,
  `interested_in` varchar(255) default NULL,
  `relationship` varchar(255) default NULL,
  `political_view` varchar(255) default NULL,
  `interests` varchar(255) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `name`, `status`, `password`, `member_since`, `sex`, `year`, `concentration`, `screenname`, `looking_for`, `interested_in`, `relationship`, `political_view`, `interests`) VALUES
(1, 'profh@cmu.edu', 'Prof. H', 'Faculty', 'secret', '2011-10-05', 'Enjoyable', 'A long time ago', 'Information Systems', 'profh', 'a SB victory for New England', 'Women', 'Married', 'Libertarian', 'Chess'),
(2, 'svargo@andrew.cmu.edu', 'Seth Vargo', 'Student', 'secret', '2011-10-05', 'Male', '2013', 'Information Systems', 'svargo', 'the name of a good Chinese carry-out place', 'Women', 'Single', 'Libertarian', 'Angry Birds'),
(3, 'sbrunk@andrew.cmu.edu', 'Stafford Brunk', 'Student', 'secret', '2011-10-05', 'Male', '2011', 'Information Systems', 'sbrunk', 'Love in all the right places', 'Women', 'Engaged', 'Libertarian', 'Running'),
(4, 'aweis@andrew.cmu.edu', 'Adam Weis', 'Student', 'secret', '2011-10-05', 'Male', '2013', 'Information Systems', 'aweis', 'Love in all the wrong places', 'Women', 'Single', NULL, 'Security');
