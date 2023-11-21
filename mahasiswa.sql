/*!40101 SET NAMES utf8 */;
/*!40014 SET FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET SQL_NOTES=0 */;
DROP TABLE IF EXISTS maha;
CREATE TABLE `maha` (
  `nim` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `prodi` varchar(255) DEFAULT NULL,
  `kode` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`nim`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
INSERT INTO maha(nim,nama,prodi,kode) VALUES('120130096','\'Ryan Syehan\'','\'Teknik Elektro\'','\'130\''),('120160014','\'Marleni Syifa Yulianita\'','\'Matematika\'','\'160\''),('120220070','\'Venita Chrisanti\'','\'PWK\'','\'220\''),('120220169','\'Wafiq Azizah\'','\'PWK\'','\'220\''),('120230109','\'M Raja Akbar\'','\'Teknik Geomatika\'','\'230\''),('120250055','\'Sovie Refiza\'','\'Teknik Lingkungan\'','\'250\''),('120250126','\'Gabriella Anggi Rencia\'','\'Teknik Lingkungan\'','\'250\''),('120310051','\'Gabby Okto Florensia Nainggolan\'','\'Teknik Biosistem\'','\'310\''),('120350007','\'Dewi Herdiansyah\'','\'Teknologi Pangan\'','\'350\''),('121140136','\'Abdur Rohman\'','\'Teknik Informatika\'','\'140\''),('121140168','\'Andreas Gumarang Sihotang\'','\'Teknik Informatika\'','\'140\''),('121210218','\'Rioqi Novandep\'','\'Teknik Sipil\'','\'210\'');