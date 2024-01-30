
-- Database Backup --
-- Ver. : 1.0.1
-- Host : Server Host
-- Generating Time : Jan 27, 2024 at 21:51:56:PM


CREATE TABLE `detailpenjualan` (
  `DetailID` int(11) NOT NULL AUTO_INCREMENT,
  `PenjualanID` int(11) NOT NULL,
  `ProdukID` int(11) NOT NULL,
  `JumlahProduk` int(11) NOT NULL,
  `Harga` decimal(10,2) NOT NULL,
  PRIMARY KEY (`DetailID`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4;

INSERT INTO detailpenjualan VALUES
("1","1","1","1","10500.00"),
("2","1","4","3","23800.00"),
("3","1","2","2","6600.00"),
("4","1","6","1","10000.00"),
("5","1","3","8","21900.00"),
("6","2","10","1","9000.00"),
("7","3","7","5","62544.00"),
("13","7","7","3","62544.00"),
("14","8","5","3","2260.00"),
("15","8","2","3","6600.00"),
("16","10","23","2","12500.00"),
("17","10","9","1","11000.00");

CREATE TABLE `keranjang` (
  `KeranjangID` int(10) NOT NULL AUTO_INCREMENT,
  `ProdukID` int(10) NOT NULL,
  `Jumlah` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  PRIMARY KEY (`KeranjangID`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4;


CREATE TABLE `pelanggan` (
  `PelangganID` int(11) NOT NULL AUTO_INCREMENT,
  `NamaPelanggan` varchar(255) NOT NULL,
  `Alamat` text NOT NULL,
  `NomorTelepon` varchar(15) NOT NULL,
  PRIMARY KEY (`PelangganID`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

INSERT INTO pelanggan VALUES
("1","Umum","Umum","000000000000"),
("2","Fibri ","Tabanan","081339682031"),
("3","Diah Marti","Karangasem","0895394536866"),
("4","Risma","Buleleng","085792958529"),
("5","Nia","Tanah Lot","089508466041"),
("6","Raditya","Br Sinjuana Kaja","089508466041");

CREATE TABLE `penjualan` (
  `PenjualanID` int(11) NOT NULL AUTO_INCREMENT,
  `TanggalPenjualan` date NOT NULL,
  `TotalHarga` decimal(10,2) NOT NULL,
  `PelangganID` int(11) NOT NULL,
  PRIMARY KEY (`PenjualanID`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

INSERT INTO penjualan VALUES
("1","2024-01-18","280300.00","1"),
("2","2024-01-18","9000.00","2"),
("3","2024-01-18","312720.00","3"),
("7","2024-01-24","187632.00","1"),
("8","2024-01-26","26580.00","6"),
("9","2024-01-27","0.00","3"),
("10","2024-01-27","36000.00","3");

CREATE TABLE `produk` (
  `ProdukID` int(11) NOT NULL AUTO_INCREMENT,
  `Barcode` varchar(25) NOT NULL,
  `NamaProduk` varchar(255) NOT NULL,
  `Harga` decimal(10,2) NOT NULL,
  `Stok` int(11) NOT NULL,
  PRIMARY KEY (`ProdukID`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4;

INSERT INTO produk VALUES
("1","8997004301146","OISHI RIN BEE KEJU","10500.00","50"),
("2","89686611670 ","QTELA SINGKONG BALADO 60G","6600.00","25"),
("3","89686596465 ","LAYS RMPT LAUT 68G","21900.00","35"),
("4","8993039112504 ","REGAL MARIE 250G","23800.00","45"),
("5","7622300335809 ","OREO SOFT CAKE 16G","2260.00","50"),
("6","8886015203115 ","GOOD TIME DOUBLE CHOC 80G","10000.00","35"),
("7","9556001051509 ","MILO ORI KLG 240ML","62544.00","45"),
("8","8886015402037 ","NYAM-NYAM FNTASY STICK SPARKLING","4600.00","45"),
("9","8998009020223 ","BUAVITA APPLE TPK 250mL","11000.00","25"),
("10","8991002121003 ","GOOD DAY TIRAMISU B BTL 250mL","9000.00","25"),
("11","89686010015 ","INDOMIE AYAM BAWAN 69g","104900.00","35"),
("12","8993007000086 ","INDOMILK COKLAT TPK 1000mL","20929.00","35"),
("13","8993007000253 ","INDOMILK KIDS STRAWBERRY TPK 115mL","3200.00","35"),
("14","89686401721 ","INDOFOOD SAUS TOMATBTL 140mL","6180.00","50"),
("15","89686043983 ","INDOMIE GRG DENDENG BA 90g","3100.00","50"),
("16","89686010343 ","INDOMIE SOTO MIE 70g","3500.00","45"),
("17","89686118018 ","ICHI OCHA HONEYBTL 350mL","5000.00","45"),
("18","749921006868 ","HILO TEEN CHOCOLATE TPK 200mL","8500.00","25"),
("19","8991002103221 ","GOOD DAY MOCACINNO BOX 5X20g","8400.00","35"),
("20","8992696405417 ","DANCOW SCT 27GR","3500.00","50"),
("22","111111111","wwww","5000.00","12"),
("23","8888166991484 ","NISSIN BUTTER COCONUT 200 GR","12500.00","25");

CREATE TABLE `user` (
  `id_user` int(10) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `hak_akses` int(1) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

INSERT INTO user VALUES
("1","Nia Pradnya","admin","admin","1"),
("2","Nia","nia","nia","2"),
("3","Made Oka ","oka","oka123","1");