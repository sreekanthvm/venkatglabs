SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;


CREATE TABLE IF NOT EXISTS `matches` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `Name` varchar(128) NOT NULL,
  `MatchType` varchar(128) NOT NULL,
  `MatchYear` year(4) NOT NULL,
  `MatchPlace` varchar(128) NOT NULL,
  `Score` int(5) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO `matches` (`ID`, `Name`, `MatchType`, `MatchYear`, `MatchPlace`, `Score`) VALUES
(1, 'Super Kings', 'TEST', 1999, 'Chennai', 250),
(2, 'Royal Challengers', 'T20', 0000, 'Chennai', 300),
(3, 'Mumbai', 'T20', 2000, 'Bangalore', 260),
(4, 'Royals', 'ODI', 2002, 'Bangalore', 240),
(5, 'Knight Riders', 'T20', 2000, 'Chennai', 280),
(6, 'Super Giants', 'ODI', 2004, 'Hyderabad', 300),
(7, 'Titans', 'TEST', 2003, 'Hyderabad', 290),
(8, 'Warriors', 'TEST', 1999, 'Chennai', 250),
(9, 'Sun Risers', 'T20', 2009, 'Hyderabad', 250),
(10, 'Bulls', 'ODI', 2010, 'Bangalore', 300);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
