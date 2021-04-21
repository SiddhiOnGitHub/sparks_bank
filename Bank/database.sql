

CREATE TABLE `createuser` (
  `id` int(3) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `accno` int(5) DEFAULT NULL
) ;


CREATE TABLE `fundtransfer` (
  `id` int(3) NOT NULL,
  `sendname` varchar(50) NOT NULL,
  `sendaccno` int(5) NOT NULL,
  `receivername` varchar(50) NOT NULL,
  `receiveraccno` int(5) NOT NULL,
  `amount` int(10) NOT NULL,
  `mode` varchar(10) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ;


