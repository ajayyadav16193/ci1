-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2020 at 02:49 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci_login`
--

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `city_id` int(11) NOT NULL,
  `city_name` varchar(50) NOT NULL,
  `city_code` int(11) NOT NULL,
  `state_id` int(11) NOT NULL,
  `country_id` int(11) NOT NULL,
  `city_status` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`city_id`, `city_name`, `city_code`, `state_id`, `country_id`, `city_status`) VALUES
(2, 'delhi', 0, 2, 1, '1'),
(3, 'mumbai', 0, 3, 1, '1'),
(4, 'nagpur', 0, 3, 1, '1'),
(5, 'pune', 0, 3, 1, '1'),
(6, 'ghaziabad', 0, 4, 1, '1'),
(7, 'lucknow', 0, 4, 1, '1'),
(8, 'noida', 0, 4, 1, '1'),
(9, 'islamabad city', 0, 5, 2, '1'),
(10, 'islamabad ', 0, 5, 2, '0'),
(11, 'rawalpindi', 0, 5, 2, '1'),
(12, 'taxila', 0, 5, 2, '1'),
(13, 'Abbottabad', 0, 6, 2, '1'),
(14, 'adezai', 0, 6, 2, '1'),
(15, 'alpuri', 0, 6, 2, '1'),
(16, 'lahore', 0, 7, 2, '1'),
(17, 'faisalabad', 0, 7, 2, '1'),
(18, 'multan', 0, 7, 2, '1'),
(19, 'kathmandu', 0, 8, 3, '1'),
(20, 'lalitpur', 0, 8, 3, '1'),
(21, 'bharatpur', 0, 8, 3, '1'),
(22, 'pokhara', 0, 9, 3, '1'),
(23, 'chapakot', 0, 9, 3, '1'),
(24, 'waling', 0, 9, 3, '1'),
(25, 'simikot', 0, 10, 3, '1'),
(26, 'chandannnath', 0, 10, 3, '1'),
(27, 'birendranagar', 0, 10, 3, '1'),
(28, 'Agra', 0, 4, 1, '1'),
(29, 'Agra', 0, 4, 1, '0'),
(30, 'Allahabad', 0, 4, 1, '1'),
(31, 'sd', 0, 14, 1, '0');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `country_id` int(11) NOT NULL,
  `country_name` varchar(50) NOT NULL,
  `country_code` int(11) NOT NULL,
  `status` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`country_id`, `country_name`, `country_code`, `status`) VALUES
(1, 'india', 91, '0'),
(2, 'pakistan', 92, '0'),
(3, 'nepal', 977, '1'),
(4, 'bangladesh', 880, '1'),
(5, 'bhutan', 975, '1'),
(6, 'sri lanka', 94, '1'),
(7, 'china', 86, '1'),
(8, 'maldives', 960, '1'),
(9, 'afghanistan', 93, '1'),
(10, 'india', 91, '0'),
(11, 'india', 91, '0'),
(12, 'india', 91, '0'),
(13, 'india', 91, '0'),
(14, 'india', 91, '0'),
(15, 'india', 91, '0'),
(16, 'india', 91, '0'),
(17, 'india', 91, '0'),
(18, 'india', 91, '0'),
(19, 'india', 91, '0'),
(20, 'india', 91, '0'),
(21, 'india', 91, '0'),
(22, 'india', 91, '0'),
(23, 'india', 91, '0'),
(24, 'india', 91, '0'),
(25, 'india', 91, '0'),
(26, 'india', 91, '0'),
(27, 'india', 91, '0'),
(28, 'india', 91, '0'),
(29, 'india', 91, '0'),
(30, 'india', 91, '0'),
(31, 'india', 91, '0'),
(32, 'india', 91, '0'),
(33, 'india', 91, '0'),
(34, 'india', 91, '0'),
(35, 'india', 91, '0'),
(36, 'india', 91, '0'),
(37, 'india', 91, '0'),
(38, 'india', 91, '0');

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `state_id` int(11) NOT NULL,
  `state_name` varchar(50) NOT NULL,
  `state_code` int(11) NOT NULL,
  `country_id` int(11) NOT NULL,
  `state_status` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`state_id`, `state_name`, `state_code`, `country_id`, `state_status`) VALUES
(2, 'delhi', 11, 1, '1'),
(3, 'maharashtra', 0, 1, '1'),
(4, 'uttar pradesh', 0, 1, '1'),
(5, 'Islamabad Capital Territory', 0, 2, '1'),
(6, 'Khyber Pakhtunkhwa', 0, 2, '1'),
(7, 'Punjab', 0, 2, '1'),
(8, 'Bagmati Pradesh', 0, 3, '1'),
(9, 'Gandaki Pradesh', 0, 3, '1'),
(10, 'Karnali Pradesh', 0, 3, '1'),
(11, 'Dhaka', 0, 4, '1'),
(12, 'Chittagong', 0, 4, '1'),
(13, 'Khulna', 0, 4, '1'),
(14, 'Chukha', 0, 5, '1'),
(15, 'Thimphu', 0, 5, '1'),
(16, 'Bumthang', 0, 5, '1'),
(17, 'Western Province', 0, 6, '1'),
(18, 'central province', 0, 6, '1'),
(19, 'uva province', 0, 6, '1'),
(20, 'west bengal', 0, 1, '1'),
(21, 'bihar', 0, 1, '1'),
(22, 'jammu & kashmir', 0, 1, '1'),
(23, 'haryana', 2, 1, '1'),
(24, 'punjab', 0, 1, '1');

-- --------------------------------------------------------

--
-- Table structure for table `superadmin`
--

CREATE TABLE `superadmin` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `superadmin`
--

INSERT INTO `superadmin` (`admin_id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(250) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `img` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fname`, `lname`, `email`, `password`, `city`, `state`, `country`, `img`) VALUES
(1, 'a', 'k', 'aj@gmail.com', '316d2222105327a1556e18d3a2c107d0cc4568a6fa1b9222c8d4a6def669dd018a508a9f6ccc12437f915c6de6c972545898c9329f151f55964645202d736b9cmNQrzuL3TgwAXi4bAa68gOrh65mDQ3Qsoe/KolfVOMw=', '', '', '', 'b0730962d2b2341e7b0406e1277b2ca3.jpg'),
(2, 'v', 'j', 'vj@gmail.com', 'b03d37408fb85f51d7e04eb229e34e9630e52765f8ee1f1062f7636a16c325c3317d41fd489de375fd73f2a310f6427e12e6334e0bfae3f0d4e5a2a74097c23bTAN+/RKYP3mE+ADinQY/CHrVAs1esLcpYQEf1fJ0Lr4=', '', '', '', '7a62f94649df2cb012c13229aa7a4198.jpg'),
(3, 'a', 'b', 'ab@gmail.com', '0ca654ed7aba00df90c7bfe596ae2cb42219aa02de029a6dddd3bac7cd7ad4882d049e40f72b082782d2428cb2bb72d21c7fa21e620ec44d16f304688c791428VLxiX0ciZavLSxXAmShMrz6O9mhrHy5w7bmlRwqDYt0=', '', '', '', 'fa85e82bf31e4d2bc056d78eb71272db.jpg'),
(4, 'e', 'r', 'er@gmail.com', 'af3b54689e9251e782e9eba6a60a70ab380097f338de53b9dc56b00b452130a3f1117bf6c273df6bafd50a4757bb768270802a5dea22119c2d835893ff6f62857OLh/gw0sgSUMDeYOlRg81qeiLyIp5HZ/3ibg+iBs6k=', '', '', '', '2c425ee844010537f83b0831d81ca236.JPG'),
(5, 'r', 'k', 'rk@gmail.com', '9f1f280fc5392366c421832056bf84ef1d9d9722b2252e7a62fbe58c8405a1969930555ab79a126d7b35746ad73ca4c1a3f74986fa1811e1caab90c67c68e735x3d8QLBmlUM1Fs2hvhUz6aqbZVEh0DIDQUS0b3G86ds=', '', '', '', '2b2a2d8038014609fd3b31a146c1a30c.JPG'),
(6, 'y', 'z', 'yz@gmail.com', 'be1d1104158fb7b99f915f9b2362978c25cea1fe64c28c247e27d6d504b1878e61817362940056c68c3e7538e0b5400b6ac161eb584fc3f69cc548ad177db316KFdXtCR+DK4Mw+Fa9uJi8GZb5IRh+bnMmo1kp0tjo3Q=', '', '', '', '980e1571569d45bb6524e1f41f9aca4b.jpg'),
(7, 'k', 'u', 'ku@gmail.com', '208e0d51255d6faadf0a6e1e97cb0691393a39ea4a6d646c987a91ecff9d5508d884f030a57fb97b2c3e149cda5506028391f1517f6896f826075cdf4cf737deSg9qqp71OG3WNqyQxbjKbTO0bb3LDdTezxIT+jQuaZU=', '', '', '', 'f679fcaa858972c08eb325db66033046.jpg'),
(8, 'c', 'k', 'ck@gmail.com', 'dad7c63ea58792c787d648970364e56a1f380e7a29748b8167c4139bad15093c1c54c14cf72cb1a628c02cab4b7f2dc3f9ddb6db1d3ad70e98a46cccfe56f7b1QhVm1Ls/o2tt4jQbAmsn5GNujerGQmJ0RWHYCzRVWC8=', '', '', '', '6f53689c0802319ee860c41701e8dcbf.jpg'),
(9, 'ku', 'y', 'kuy@gmail.com', 'fd7d3d0e4c40b9ba506ac56aab7ea727a0a2f274fb6d389609b4ce5b7dce40f93d20c9a03f1528698d3f3be2a99b9246a848aed6667650757e2ac00b8dbfd1fc0JOrQ4ZJhHuts8WZaGugsyAVsEOyD2/gYKLYEeDhcUk=', '', '', '', '59eeba0396f0e0b503d957a700b23540.jpg'),
(10, 'a', 'z', 'az@gmail.com', '4c19e1f6c21b1e1dc1d91a95dc63a9879bfab35314e798de65111088220ba22b3dbbb1864d866bf36ffa11aabc2a495731daa660b5f734f31a119283ea818b27yjPndvDyu4MSlC/8bhd0A6nxp878Tr+VWdjxw3XnAHg=', '', '', '', 'a292ef2f19daf8857a93cf1fb41a59db.jpg'),
(11, 'q', 't', 'qt@gmail.com', '47c71af4078af17c70201e8013b381de69d5f82a6610f8fe3eeee6fbafc4c47f31184bf40906b189cd07679febd42f8c6eac536c2628a7e3196a950c7d5b74c3yH/HuP7DDPDzEb/MedS3Z8JeGpl/sesaMev7R+lXF8E=', '', '', '', 'a5d06d04cbacc0230ac0637a0325920a.JPG'),
(12, 'Rahul', 'Roy', 'rr@gmail.com', 'b5d0baa45aed55adf161d0746d098cce78d6cb0670b5d1721ba91d60f7a648258ed9d983aa2ddf50e678b1156e0ac4a4d13fe45a88f261775a4ad3cc91090c1a81fE5QDcKzBfhyon6z9o8OXjuZWWXL1DKgiKfD5GWec=', '18', '7', '2', 'ba89d6e238c5abf9d9b658fa53d7acc0.JPG'),
(13, 'John', 'Hazard', 'jh@gmail.com', '5b15d7e93e70e28a56a8d9fe285710b50c34f65db7aeed8911b0ec13e0ad568a442334aec2a07fe803e13b9c79f53ab26910bcad2e4b68c63ae304454838e2a7Me52LmbhJvxkUrNwatY/eWgKxpwYyXu8tbnPZBTuhpM=', '19', '8', '3', 'c66d5ab71fa58b83a67e8aefab728d2c.JPG'),
(14, 'Ajay', 'Yadav', 'ajayyadav1601@gmail.com', 'e46ab2666e402af8b0cb3b4f006d4a6dae574804a525724b73520600c9a935d6624a4640afc7dc224cd7dd870e62c66277df4aecc16847f3f32dc3948f567223ux69xncJfbhAxgPNILFlWdRTV+ZBRnNWxROmepP/xDw=', '7', '4', '1', '4c8da2b728e4154bd5b5a8cefd4ce930.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`city_id`),
  ADD KEY `fk_state_id` (`state_id`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`country_id`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`state_id`),
  ADD KEY `fk_country_id` (`country_id`);

--
-- Indexes for table `superadmin`
--
ALTER TABLE `superadmin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `city_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `country_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `state_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `superadmin`
--
ALTER TABLE `superadmin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `city`
--
ALTER TABLE `city`
  ADD CONSTRAINT `fk_state_id` FOREIGN KEY (`state_id`) REFERENCES `state` (`state_id`);

--
-- Constraints for table `state`
--
ALTER TABLE `state`
  ADD CONSTRAINT `fk_country_id` FOREIGN KEY (`country_id`) REFERENCES `country` (`country_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
