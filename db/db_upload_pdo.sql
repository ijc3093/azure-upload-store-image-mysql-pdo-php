
-- Database: `db_upload_pdo`
--


DROP DATABASE IF EXISTS images;

CREATE DATABASE IF NOT EXISTS images;

-- SHOW DATABASES;

USE images;

-- --------------------------------------------------------

--
-- Table structure for table `file`
--

CREATE TABLE `image` (
  `image_id` int(11) NOT NULL,
  `image_name` varchar(100) NOT NULL,
  `image_type` varchar(10) NOT NULL,
  `date_uploaded` varchar(20) NOT NULL,
  `location` text NOT NULL
);

--
-- Dumping data for table `file`
--

INSERT INTO `image` (`image_id`, `image_name`, `image_type`, `date_uploaded`, `location`) VALUES
(1, 'dog-puppy.png', 'image/png', '2019-09-18', 'upload/dog-puppy.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `file`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`image_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `file`
--
ALTER TABLE `image`
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;