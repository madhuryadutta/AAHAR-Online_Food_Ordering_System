

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `bill_id` int(10) NOT NULL,
  `order_id` int(10) NOT NULL,
  `item_total` int(5) NOT NULL,
  `tax` int(5) NOT NULL,
  `total_amount` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(5) NOT NULL,
  `cat_name` varchar(25) NOT NULL,
  `cat_description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`, `cat_description`) VALUES
(1, 'Colddrink', 'assgdfhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh'),
(2, 'Coldink', 'assgdfhhhhhgggggggggggghhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh'),
(3, 'Codrink', 'c'),
(4, 'Colddrik', 'sfdsgdfhfjghkjl;kl'),
(9, 'Colink', 'nnrtuassgdfhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh'),
(10, 'Colddeeeeerink', 'assgdfhhhhhhhhhhhhhhhhhgggggghhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh'),
(11, 'aa', 'ccccc'),
(100, 'a', 'adasf111111111111111111'),
(2332, 'Pizza', 'sddssddsd'),
(5345446, '2343', 'dfddfdfddff');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cust_id` int(10) NOT NULL,
  `cust_name` varchar(30) NOT NULL,
  `cust_password` varchar(30) NOT NULL,
  `phone` int(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cust_id`, `cust_name`, `cust_password`, `phone`, `email`, `address`) VALUES
(1, 'Madhurya Dutta', 'alpha', 1122, 'dmadhurya@protonmail.com', 'Lakhimpur , Assam');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `item_id` int(5) NOT NULL,
  `item_name` varchar(25) NOT NULL,
  `item_price` int(5) NOT NULL,
  `item_desc` varchar(100) NOT NULL,
  `cat_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`item_id`, `item_name`, `item_price`, `item_desc`, `cat_id`) VALUES
(1, 'pizza', 100, 'faaaaaaaaaaaaaawberyhtuynm', 2),
(11, 'piuytkt45zza', 1600, 'fawberyhvteretuynm', 4),
(12, 'pi446zza', 1200, 'aaaaaaaaaawvreveberyhtuynm', 2),
(1267, 'pi446zza', 1200, 'aaaaaaaaaawvreveberyhtuynm', 2);

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `s_no` int(10) NOT NULL,
  `order_id` int(50) NOT NULL,
  `cust_id` int(10) NOT NULL,
  `item_id` int(10) NOT NULL,
  `order_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;




CREATE TABLE `admin` (  `username` varchar(30)  NOT NULL,  `password` varchar(30) NOT NULL)

CREATE TABLE `customer` ( `cust_id` int(10) PRIMARY KEY NOT NULL AUTO_INCREMENT, `cust_fname` varchar(30) NOT NULL,`cust_lname` varchar(30) NOT NULL, `cust_password` varchar(30) NOT NULL, `phone` int(10) NOT NULL, `email` varchar(30) NOT NULL, `address` varchar(100) NOT NULL );

CREATE TABLE `category` ( `cat_id` int(5) PRIMARY KEY NOT NULL AUTO_INCREMENT, `cat_name` varchar(25) NOT NULL, `cat_description` varchar(100) NOT NULL );
CREATE TABLE `items` ( `item_id` int(5) PRIMARY KEY NOT NULL AUTO_INCREMENT, `item_name` varchar(25) NOT NULL, `item_price` int(5) NOT NULL, `item_desc` varchar(100) NOT NULL, `cat_id` int(5) NOT NULL, FOREIGN KEY (cat_id) REFERENCES category(cat_id) );