-- author ISPCLUB-TheDoubleW

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hotel`
--

--
-- Table structure for table `reservation`
--

CREATE TABLE IF NOT EXISTS `reservation` (
  `r_id` varchar(30) NOT NULL DEFAULT '0',
  `r_chkindt` date NOT NULL ,
  `r_chkoutdt` date NOT NULL ,
  `r_rooms` int(30) NOT NULL DEFAULT '0',
  `r_type` varchar(20) NOT NULL DEFAULT '',
  `r_spanyreq` varchar(200) NOT NULL DEFAULT '',
  primary key (`r_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 PACK_KEYS=0;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`r_id`, `r_chkindt`, `r_chkoutdt`, `r_rooms`, `r_type`, `r_spanyreq`) VALUES
('1', '2010-03-12', '2010-03-12', '1', 'Deluxe','no');
-- --------------------------------------------------------

--
-- Table structure for table `tariff`
--




CREATE TABLE IF NOT EXISTS `tariff` (
  `type` varchar(50) NOT NULL DEFAULT '',
  `inrsin` varchar(30) NOT NULL DEFAULT '0',
  `inrdbl` varchar(30) NOT NULL DEFAULT '0',
  `usdsin` varchar(30) NOT NULL DEFAULT '0',
  `usddbl` varchar(30) NOT NULL DEFAULT '0',
  `totroom` int(3) NOT NULL DEFAULT '0',
   primary key(`type`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tariff`
--

INSERT INTO `tariff` (`type`, `inrsin`, `inrdbl`, `usdsin`, `usddbl`, `totroom`) VALUES
('Standard', '2600', '3100', '80', '90', 100),
('Deluxe', '3100', '4200', '50', '80', 50),
('Super Deluxe', '3800', '4600', '90', '110', 15),
('Suite', '4100', '6200', '80', '100', 10);
-- --------------------------------------------------------



CREATE TABLE IF NOT EXISTS `maprr` (
  `r_id` varchar(30) NOT NULL,
  `room_number` INT(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 PACK_KEYS=0;

INSERT INTO `maprr` (`r_id`, `room_number`) VALUES
('1', '501');

-- --------------------------------------------------------
CREATE TABLE IF NOT EXISTS `maprt` (
  `r_id` varchar(20) NOT NULL DEFAULT '0',
  `type` varchar(200) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=latin1 PACK_KEYS=0;

--
-- Dumping data for table `reservation`
--

INSERT INTO `maprt` (`r_id`, `type`) VALUES
('1', 'Standard');

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `Userid` varchar(20) NOT NULL DEFAULT '',
  `Password` varchar(20) NOT NULL DEFAULT '',
  `User Name` varchar(100) NOT NULL DEFAULT '',
  `User Email` varchar(100) NOT NULL DEFAULT '',
  `User Company` varchar(50) NOT NULL DEFAULT '',
  `User Phone` varchar(20) NOT NULL DEFAULT '',
  `User Address` varchar(200) NOT NULL DEFAULT '',
  primary key(`Userid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Userid`, `Password`, `User Name`, `User Email`, `User Company`, `User Phone`, `User Address`) VALUES
('admin', 'admin','admin','admin','admin','admin','admin')
('1', '1','1','1','1','1','1');



CREATE TABLE IF NOT EXISTS `mapur` (
  `Userid` varchar(20) NOT NULL DEFAULT '',
  `r_id` varchar(20) NOT NULL DEFAULT '',
  primary key(`r_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


INSERT INTO `mapur` (`Userid`, `r_id`) VALUES
('admin','1');

-- CREATE TABLE IF NOT EXISTS `maprr` (
--   `room_number` INT(20) NOT NULL DEFAULT 0,
--   `r_id` INT(20) NOT NULL DEFAULT 0,
--   primary key(`r_id`)
-- ) ENGINE=MyISAM DEFAULT CHARSET=latin1;
--
--
-- INSERT INTO `maprr` (`room_number`, `r_id`) VALUES
-- ('501','1');

CREATE TABLE IF NOT EXISTS `room` (
  `room_number` INT(20) NOT NULL,
  `r_id` varchar(20) NOT NULL DEFAULT '',
  `type` varchar(20) NOT NULL DEFAULT '',
    `CheckIn Date` Date,
    -- change
    `ChechOut Date` Date,
    -- change
  primary key(`room_number`),
  foreign key(`type`) references tariff(`type`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


INSERT INTO `room` (`room_number`,`r_id`, `type`) VALUES
(501,",'Standard'),
('502','','Standard'),
('503','','Standard'),
('504','','Standard'),
('505','','Standard'),
('506','','Standard'),
('507','','Standard'),
('508','','Standard'),
('509','','Standard'),
('510','','Standard'),
('511','','Standard'),
('512','','Standard'),
('513','','Standard'),
('514','','Standard'),
('515','','Standard'),
('516','','Standard'),
('517','','Standard'),
('518','','Standard'),
('519','','Standard'),
('520','','Standard'),
('521','','Standard'),
('522','','Standard'),
('523','','Standard'),
('524','','Standard'),
('525','','Standard'),
('526','','Standard'),
('527','','Standard'),
('528','','Standard'),
('529','','Standard'),
('530','','Standard'),
('531','','Standard'),
('532','','Standard'),
('533','','Standard'),
('534','','Standard'),
('535','','Standard'),
('536','','Standard'),
('537','','Standard'),
('538','','Standard'),
('539','','Standard'),
('540','','Standard'),
('541','','Standard'),
('542','','Standard'),
('543','','Standard'),
('544','','Standard'),
('545','','Standard'),
('546','','Standard'),
('547','','Standard'),
('548','','Standard'),
('549','','Standard'),
('550','','Standard'),
('551','','Standard'),
('552','','Standard'),
('553','','Standard'),
('554','','Standard'),
('555','','Standard'),
('556','','Standard'),
('557','','Standard'),
('558','','Standard'),
('559','','Standard'),
('560','','Standard'),
('561','','Standard'),
('562','','Standard'),
('563','','Standard'),
('564','','Standard'),
('565','','Standard'),
('566','','Standard'),
('567','','Standard'),
('568','','Standard'),
('569','','Standard'),
('570','','Standard'),
('571','','Standard'),
('572','','Standard'),
('573','','Standard'),
('574','','Standard'),
('575','','Standard'),
('576','','Standard'),
('577','','Standard'),
('578','','Standard'),
('579','','Standard'),
('580','','Standard'),
('581','','Standard'),
('582','','Standard'),
('583','','Standard'),
('584','','Standard'),
('585','','Standard'),
('586','','Standard'),
('587','','Standard'),
('588','','Standard'),
('589','','Standard'),
('590','','Standard'),
('591','','Standard'),
('592','','Standard'),
('593','','Standard'),
('594','','Standard'),
('595','','Standard'),
('596','','Standard'),
('597','','Standard'),
('598','','Standard'),
('599','','Standard'),
('600','','Standard'),
('601','','Deluxe'),
('602','','Deluxe'),
('603','','Deluxe'),
('604','','Deluxe'),
('605','','Deluxe'),
('606','','Deluxe'),
('607','','Deluxe'),
('608','','Deluxe'),
('609','','Deluxe'),
('610','','Deluxe'),
('611','','Deluxe'),
('612','','Deluxe'),
('613','','Deluxe'),
('614','','Deluxe'),
('615','','Deluxe'),
('616','','Deluxe'),
('617','','Deluxe'),
('618','','Deluxe'),
('619','','Deluxe'),
('620','','Deluxe'),
('621','','Deluxe'),
('622','','Deluxe'),
('623','','Deluxe'),
('624','','Deluxe'),
('625','','Deluxe'),
('626','','Deluxe'),
('627','','Deluxe'),
('628','','Deluxe'),
('629','','Deluxe'),
('630','','Deluxe'),
('631','','Deluxe'),
('632','','Deluxe'),
('633','','Deluxe'),
('634','','Deluxe'),
('635','','Deluxe'),
('636','','Deluxe'),
('637','','Deluxe'),
('638','','Deluxe'),
('639','','Deluxe'),
('640','','Deluxe'),
('641','','Deluxe'),
('642','','Deluxe'),
('643','','Deluxe'),
('644','','Deluxe'),
('645','','Deluxe'),
('646','','Deluxe'),
('647','','Deluxe'),
('648','','Deluxe'),
('649','','Deluxe'),
('650','','Deluxe'),
('651','','Super Deluxe'),
('652','','Super Deluxe'),
('653','','Super Deluxe'),
('654','','Super Deluxe'),
('655','','Super Deluxe'),
('656','','Super Deluxe'),
('657','','Super Deluxe'),
('658','','Super Deluxe'),
('659','','Super Deluxe'),
('660','','Super Deluxe'),
('661','','Super Deluxe'),
('662','','Super Deluxe'),
('663','','Super Deluxe'),
('664','','Super Deluxe'),
('665','','Super Deluxe'),
('666','','Suite'),
('667','','Suite'),
('668','','Suite'),
('669','','Suite'),
('670','','Suite'),
('671','','Suite'),
('672','','Suite'),
('673','','Suite'),
('674','','Suite'),
('675','','Suite');
