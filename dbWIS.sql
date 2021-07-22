--
-- Database: `dbWIS`
--

CREATE DATABASE dbWIS;

USE dbWIS;
-- --------------------------------------------------------
--
-- Table structure for table `tblUsers`
--

CREATE TABLE `tblUsers` (
  `id` mediumint(9) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `passwd` varchar(250) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for table `tblUsers`
--

ALTER TABLE `tblUsers` ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for table `tblUsers`
--
ALTER TABLE `tblUsers`
  MODIFY `id` mediumint(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

COMMIT;
