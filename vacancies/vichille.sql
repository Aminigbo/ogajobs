-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2020 at 01:46 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vichille`
--

-- --------------------------------------------------------

--
-- Table structure for table `apply`
--

CREATE TABLE `apply` (
  `id` int(11) NOT NULL,
  `fullname` varchar(223) NOT NULL,
  `phone` varchar(223) NOT NULL,
  `email` varchar(223) NOT NULL,
  `type` varchar(223) NOT NULL,
  `cv` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `apply`
--

INSERT INTO `apply` (`id`, `fullname`, `phone`, `email`, `type`, `cv`) VALUES
(2, 'abel victor', '09098767654', 'ritzypaulmichael81@gmail.com', 'Business Strategy', 'cv/15351228622009.pdf'),
(3, 'STEWART', '09030643105', 'ellaswart900@gmail.com', 'Business Strategy', 'cv/perfume girl.docx'),
(4, 'STEWART', '09030643105', 'ellaswart900@gmail.com', 'Business Strategy', 'cv/perfume girl.docx');

-- --------------------------------------------------------

--
-- Table structure for table `brochure`
--

CREATE TABLE `brochure` (
  `id` int(11) NOT NULL,
  `name` varchar(225) NOT NULL,
  `description` longtext NOT NULL,
  `image` varchar(225) NOT NULL,
  `2d` varchar(225) NOT NULL,
  `3d` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brochure`
--

INSERT INTO `brochure` (`id`, `name`, `description`, `image`, `2d`, `3d`) VALUES
(2, 'Chiksans', 'A standard marine loading arm is a mechanical arm consisting of articulated steel pipes that connect a tank ship such as an oil tanker or chemical tanker to a cargo terminal. \r\nIt is an alternative to direct hose hookup that is particularly useful for larger vessels and transfer at higher loading rates & pressures.\r\n', 'brochure/XX.jpg', 'brochure/14.JPG', 'brochure/14.JPG'),
(3, 'Offshore Cargo Baskets', 'Vichilees Services offers standard DNV 2.7-1 offshore cargo baskets cargo worthy shipping containers. You can call to make your order base on your specifications.', 'brochure/Cargo.jpeg', 'brochure/Cargo.jpeg', 'brochure/Cargo2.jpeg'),
(4, 'Containers (DNV) ', 'We provide full set-up of offshore containing CCUs. We also have the capacity to build any offshore containers with client’s unique specifications by our experienced team. We offer a very competitive price. We assure you of great quality.', 'brochure/Containers.jpeg', 'brochure/16.JPG', 'brochure/16.JPG'),
(5, 'Tote Tanks', 'Tote tanks are containers that hold liquids, compressed gases, etc. We can design a storage tank for you using your own specifications. We, of course, use standard components to design and construct for our ', 'brochure/DSC_7377.jpg', 'brochure/11.JPG', 'brochure/11.JPG'),
(6, 'Mud Skips', 'When it comes to designing and constructing mud skips and waste skips, which are used for the transport and disposal of drill cuttings in the offshore oil and gas industry, you can count on us.', 'brochure/tanks.jpeg', 'brochure/15.JPG', 'brochure/15.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `date` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `body` longtext NOT NULL,
  `seen` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `date`, `name`, `email`, `phone`, `body`, `seen`) VALUES
(2, '2020-08-14', 'paul', 'ritzypaulmichael81@gmail.com', '08167883465', 'hello friends', 1),
(3, '2020-08-14', 'paul', 'ritzypaulmichael81@gmail.com', '09011684637', 'Please do this for me', 1);

-- --------------------------------------------------------

--
-- Table structure for table `heavyduty`
--

CREATE TABLE `heavyduty` (
  `id` int(11) NOT NULL,
  `name` varchar(222) NOT NULL,
  `description` varchar(222) NOT NULL,
  `image` varchar(222) NOT NULL,
  `price` varchar(222) NOT NULL,
  `material` varchar(222) NOT NULL,
  `size` varchar(222) NOT NULL,
  `ww` varchar(225) NOT NULL,
  `xx` varchar(225) NOT NULL,
  `yy` varchar(225) NOT NULL,
  `zz` varchar(225) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `heavyduty`
--

INSERT INTO `heavyduty` (`id`, `name`, `description`, `image`, `price`, `material`, `size`, `ww`, `xx`, `yy`, `zz`, `qty`) VALUES
(1, 'Heavy duty', 'This heavy duty equip is the best you could get from every engineering industry', 'heavyduty/1.jpg', '2000000', 'Alloy', '20 X 30', 'heavyduty/2.jpg', 'heavyduty/3.jpg', 'heavyduty/ab-1.jpg', 'heavyduty/g10.jpg', 0),
(2, 'Plant Hunters', 'Description of this heavy duty machine', 'heavyduty/g9.jpg', '2000000', 'Alloy', '20 X 30', 'heavyduty/g9.jpg', 'heavyduty/g7.jpg', 'heavyduty/g4.jpg', 'heavyduty/g2.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `newsletters`
--

CREATE TABLE `newsletters` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `newsletters`
--

INSERT INTO `newsletters` (`id`, `email`) VALUES
(2, 'aminigbo@gmail.com'),
(3, 'ritzypaulmichael81@gmail.com'),
(4, 'luke@gmail.com'),
(5, 'aminigbo@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `date` varchar(20) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(225) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(225) NOT NULL,
  `phone2` varchar(255) NOT NULL,
  `region` varchar(222) NOT NULL,
  `address` varchar(225) NOT NULL,
  `order_id` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `price` varchar(100) NOT NULL,
  `item` varchar(1111) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `date`, `firstname`, `lastname`, `email`, `phone`, `phone2`, `region`, `address`, `order_id`, `status`, `price`, `item`, `qty`) VALUES
(10, '2020-08-14', 'Aminigbo ', 'Paul', 'ritzypaulmichael81@gmail.com', '09099099090', '09099099090', 'PHC', 'no. 1 aminibros close ph', 'JGL3J468LS', 1, '1500', '7', 2),
(11, '2020-08-14', 'Aminigbo', 'Michael', 'Aminigbo@gmail.com', '09099888987', '09022324536', 'ABA', 'no. 1 aminibros close ebelu-abirika-elioparanwor link road, Rivers State Nigeria', 'SH787Y6H45', 1, '21000000', '6', 3),
(12, '2020-08-17', 'paul', 'sdfdgfergege', 'ritzypaulmichael81@gmail.com', '09099099043', '09099099093', 'UYO', 'no. 1 aminibros close ph', 'UEOEJLS4GK', 0, '7000000', '6', 1);

-- --------------------------------------------------------

--
-- Table structure for table `other_images`
--

CREATE TABLE `other_images` (
  `id` int(11) NOT NULL,
  `position` varchar(225) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `other_images`
--

INSERT INTO `other_images` (`id`, `position`, `image`) VALUES
(1, 'shop banner', 'photo/9.JPG'),
(2, 'heavy banner', 'photo/banner2.JPG'),
(3, 'top', 'photo/top.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`id`, `type`, `photo`) VALUES
(1, 'automotive', 'photo/9.jpg'),
(2, 'chemical', 'photo/2.jpg'),
(3, 'power', 'photo/8.jpg'),
(4, 'mechanical', 'photo/4.JPG'),
(5, 'construct', 'photo/5.JPG'),
(6, 'maintain', 'photo/6.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `image` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name`, `description`, `image`) VALUES
(1, 'Procurement', 'We specialize in finding and supplying manufactured goods associated with the exploration and delivery of Oil and Gas. As a result of the very robust partnerships with We specialize in finding and supplying manufactured goods associated with the exploration\r\n                         and delivery of Oil and Gas. As a result of the very robust partnerships with\r\n                          established with renowned manufacturers, major mills and supplies across the world,\r\n                          we possess the capacity to supply equipment to the correct specification, on time and \r\n                          within budget.\r\n                        Considering our dominance in this space, we confidently procure & ship all equipment & \r\n                        material used in exploration, drilling, marine services production and product disciplines. With Vichilee Oil & Gas procurement services, you will;\r\n                        Gain access to the expertise of the best manufacturers across the world.', 'photo/5.JPG'),
(2, 'Rentals', 'Vichilees Integrated Services LTD provides rental tools to both offshore and onshore exploration and production companies. We have an extensive inventory of premium rental equipment, including; Cargo Basket (DNV), Containers (DNV), Oil Tanks (DNV), Mud Skips (DNV), Mini Containers (DNV).\r\nVichilee Services supplies are built to the highest safety and reliability standards, and we will customize them to suit your exact requirements.\r\n', 'services/Rentals.jpeg'),
(3, 'Tank Cleaning', 'We have modern equipment expertise and integrated process that cleans small and medium \r\n                        sized tanks containing white oil, petrochemical products and smaller crude oil tanks.\r\n                         We are reliable and dependable as we are regarded and respected as specialists by our \r\n                         numerous clients & partners. We clean processing tank no matter the internal configurations.\r\n                        \r\n                        Our tank cleaning services covers FPSOs, Tanks and Vessels. \r\n                        We provide fast, efficient and safe Tank Cleaning Services. \r\n                        Let our professional cleaners handle all your tank cleaning problems.', 'services/cleaning.jpeg'),
(4, 'NDT and Certification', 'We offer comprehensive and exclusive training, examinations and certification for your personnel. Upon completion of the training, successful trainees will be issued with NDT certificates showing compliances with necessary standard. Explore our training, get our certification and explore our professional development offerings and discover a wealth of resources to help you reach the standard that is globally acceptable.\r\n', 'new_images/DSC_5434.jpg'),
(5, 'Welding and Fabrication', 'We are specialists in heavy weld metal fabrication over the last 7 years.We are specialists in heavy weld metal fabrication over the last 7 years. \r\nWe understand that metal fabrication plays a crucial role in the oil and gas; hence we ensure that we deliver the best structural steel products and services to all our esteemed clients.\r\n\r\n', 'new_images/DSC_5466.jpeg'),
(6, 'Servicing & Certification', 'We have a well-organized Oil & Gas servicing & certificating experts using our guidelines. We offer you or your team with expectational servicing and certification.\r\n', 'new_images/DSC_5425.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `shop`
--

CREATE TABLE `shop` (
  `id` int(11) NOT NULL,
  `name` varchar(222) NOT NULL,
  `description` varchar(222) NOT NULL,
  `image` varchar(222) NOT NULL,
  `price` varchar(222) NOT NULL,
  `material` varchar(222) NOT NULL,
  `size` varchar(222) NOT NULL,
  `ww` varchar(225) NOT NULL,
  `xx` varchar(225) NOT NULL,
  `yy` varchar(225) NOT NULL,
  `zz` varchar(225) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shop`
--

INSERT INTO `shop` (`id`, `name`, `description`, `image`, `price`, `material`, `size`, `ww`, `xx`, `yy`, `zz`, `qty`) VALUES
(1, 'HELMETS', 'Vichilee service offers you quality helmets. We have top brand helmets.', 'shop/helmet.jpeg', '7000', 'Plastic', 'Medium', 'shop/helmet.jpeg', 'shop/helmet.jpeg', 'shop/helmet.jpeg', 'shop/helmet.jpeg', 1),
(2, 'OFFSHORE OIL WORK GLOVES', 'We deliver high quality gloves for both onshore & offshore personnel.', 'shop/glove.jpeg', '4000', 'Cutton', 'Medium', 'shop/glove.jpeg', 'shop/glove.jpeg', 'shop/glove.jpeg', 'shop/glove.jpeg', 3),
(3, 'OFFSHORE BOOTS', 'We have tough, well rounded boots manufactured to provide maximum protection to user.', 'shop/boot.jpeg', '14000', 'fiber glass', '45', 'shop/boot.jpeg', 'shop/boot.jpeg', 'shop/boot.jpeg', 'shop/boot.jpeg', 5),
(4, 'COVERALLS', 'We have high quality work clothing with competitive price. Our clothing successfully combines comfort and protection suited specifically for offshore workers.', 'shop/coverall.jpeg', '20000', 'fiber glass', 'Large', 'shop/coverall.jpeg', 'shop/coverall.jpeg', 'shop/coverall.jpeg', 'shop/coverall.jpeg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `slide`
--

CREATE TABLE `slide` (
  `id` int(11) NOT NULL,
  `photo` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slide`
--

INSERT INTO `slide` (`id`, `photo`) VALUES
(1, 'slide/1.JPG'),
(2, 'slide/2.JPG'),
(3, 'slide/3.JPG'),
(4, 'slide/4.JPG'),
(5, 'slide/5.JPG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apply`
--
ALTER TABLE `apply`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brochure`
--
ALTER TABLE `brochure`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `heavyduty`
--
ALTER TABLE `heavyduty`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletters`
--
ALTER TABLE `newsletters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `other_images`
--
ALTER TABLE `other_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shop`
--
ALTER TABLE `shop`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `apply`
--
ALTER TABLE `apply`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `brochure`
--
ALTER TABLE `brochure`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `heavyduty`
--
ALTER TABLE `heavyduty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `newsletters`
--
ALTER TABLE `newsletters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `other_images`
--
ALTER TABLE `other_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `shop`
--
ALTER TABLE `shop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `slide`
--
ALTER TABLE `slide`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
