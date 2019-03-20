-- MySQL dump 10.16  Distrib 10.1.37-MariaDB, for Win32 (AMD64)
--
-- Host: localhost    Database: unisom
-- ------------------------------------------------------
-- Server version	10.1.37-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `cadastro`
--

DROP TABLE IF EXISTS `cadastro`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cadastro` (
  `clienteID` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cep` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `endereco` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `numero` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `complemento` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bairro` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cidade` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `estado` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telefone1` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telefone2` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nascimento` date DEFAULT NULL,
  `cpf` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `responsavel` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `modelo1` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `numero_aparelho1` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `marca_aparelho1` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data_compra1` date DEFAULT NULL,
  `nota_fiscal1` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `modelo2` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `numero_aparelho2` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `marca_aparelho2` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data_compra2` date DEFAULT NULL,
  `nota_fiscal2` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `old_ap` mediumtext COLLATE utf8mb4_unicode_ci,
  `relatorio` mediumtext COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`clienteID`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cadastro`
--

LOCK TABLES `cadastro` WRITE;
/*!40000 ALTER TABLE `cadastro` DISABLE KEYS */;
INSERT INTO `cadastro` VALUES (12,'João Luiz Teixeira Lima  ','02214-090','Rua Açu da Torre','35','','Vila Medeiros','São Paulo','SP','2987-6462','','1965-09-22','','Antônia  - Irmã','','','','0000-00-00','','','','','0000-00-00','','  01/11 - Aps ARGOSY ARGUS BTE X 187E / X 1888 NF. 000077-VP-MARCIO','  /08/16 - Esteve na loja trocando tubinho'),(13,'Madalena Natalina da Silva','02423-030','Rua Marques','34','','Jardim Carlu','São Paulo','SP','2203-3240','','1944-12-24','','A Mesma','','','','0000-00-00','','','','','0000-00-00','','','15/7/15 - Esteve em Santana CP Pilha 10 A - AP. Windex\r\n\r\n11/09/18 - Tel. não atende\r\n\r\n09/01/19 -  Quem atendeu disse que o ap estava em manutenção'),(14,'Mabel Jacobsen da Silva     ','02020-010','Rua Alexandre Naninni','72','','Santana','São Paulo','SP','98356-7846','','1924-12-03','','','GET BTE PW','28760107','Oticon','2019-03-23','00835','','','','2019-03-18','','     10/09/16 - Ap Oticon GET BTE PW 28760107 NF. 00835 - VP - Giovanna','     Esta com divida ref a compra deste aparelho');
/*!40000 ALTER TABLE `cadastro` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ordem`
--

DROP TABLE IF EXISTS `ordem`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ordem` (
  `ordemID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `clienteID` int(11) NOT NULL,
  `nome` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `defeito` mediumtext COLLATE utf8mb4_unicode_ci,
  `orcamento` mediumtext COLLATE utf8mb4_unicode_ci,
  `estado_aparelho` mediumtext COLLATE utf8mb4_unicode_ci,
  `aparelho_entregue` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data_ordem` datetime DEFAULT NULL,
  `data_entrega` date DEFAULT NULL,
  PRIMARY KEY (`ordemID`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ordem`
--

LOCK TABLES `ordem` WRITE;
/*!40000 ALTER TABLE `ordem` DISABLE KEYS */;
INSERT INTO `ordem` VALUES (37,14,'Mabel Jacobsen ','Quebrado','1000','Velho',NULL,'2019-03-18 16:50:03',NULL),(38,14,'Mabel Jacobsen ','Quebrado','1000','Velho',NULL,'2019-03-18 16:53:25',NULL),(39,14,'Mabel Jacobsen ','Quebrado','1000','Velho',NULL,'2019-03-18 16:53:40',NULL),(40,14,'Mabel Jacobsen ','Quebrado','1000,50','Velho',NULL,'2019-03-18 16:53:54',NULL),(41,14,'Mabel Jacobsen ','Quebrado','1000.50','Velho',NULL,'2019-03-18 16:54:06',NULL);
/*!40000 ALTER TABLE `ordem` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `recibo`
--

DROP TABLE IF EXISTS `recibo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `recibo` (
  `reciboID` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `clienteID` int(11) DEFAULT NULL,
  `data_recibo` datetime NOT NULL,
  `referente` mediumtext COLLATE utf8mb4_unicode_ci,
  `cheque_bool` int(2) DEFAULT NULL,
  `parcelas` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `valor_entrada` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `valor_restante` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `valor_total` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `valor_ext` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parcela1` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parcela2` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parcela3` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parcela4` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parcela5` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parcela6` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parcela7` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parcela8` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parcela9` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parcela10` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parcela11` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parcela12` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cheque1` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cheque2` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cheque3` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cheque4` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cheque5` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cheque6` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cheque7` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cheque8` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cheque9` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cheque10` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cheque11` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cheque12` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banco1` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banco2` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banco3` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banco4` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banco5` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banco6` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banco7` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banco8` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banco9` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banco10` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banco11` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banco12` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data_cheque1` date DEFAULT NULL,
  `data_cheque2` date DEFAULT NULL,
  `data_cheque3` date DEFAULT NULL,
  `data_cheque4` date DEFAULT NULL,
  `data_cheque5` date DEFAULT NULL,
  `data_cheque6` date DEFAULT NULL,
  `data_cheque7` date DEFAULT NULL,
  `data_cheque8` date DEFAULT NULL,
  `data_cheque9` date DEFAULT NULL,
  `data_cheque10` date DEFAULT NULL,
  `data_cheque11` date DEFAULT NULL,
  `data_cheque12` date DEFAULT NULL,
  PRIMARY KEY (`reciboID`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=331 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `recibo`
--

LOCK TABLES `recibo` WRITE;
/*!40000 ALTER TABLE `recibo` DISABLE KEYS */;
INSERT INTO `recibo` VALUES (316,'Mabel Jacobsen da Silva  ',14,'2019-03-18 17:02:12','Compra de Aparelho - Algum',1,'6 ','1000.65','5500.65','6501.299999999999','Seis mil, quinhentos e um reais e trinta centavos','916.77','916.77','916.77','916.77','916.77','916.77',NULL,NULL,NULL,NULL,NULL,NULL,'01','02','03','04','05','06',NULL,NULL,NULL,NULL,NULL,NULL,'Banco do Brasil','Banco do Brasil','Banco do Brasil','Banco do Brasil','Banco do Brasil','Banco do Brasil',NULL,NULL,NULL,NULL,NULL,NULL,'2019-03-01','2019-03-02','2019-03-03','2019-03-04','2019-03-05','2019-03-06',NULL,NULL,NULL,NULL,NULL,NULL),(317,'Mabel Jacobsen da Silva  ',14,'2019-03-18 17:06:12','Compra de Aparelho - Algum',1,'6 ','1000.65','5500.65','6501.299999999999','Seis mil, quinhentos e um reais e trinta centavos','916.77','916.77','916.77','916.77','916.77','916.77',NULL,NULL,NULL,NULL,NULL,NULL,'01','02','03','04','05','06',NULL,NULL,NULL,NULL,NULL,NULL,'Banco do Brasil','Banco do Brasil','Banco do Brasil','Banco do Brasil','Banco do Brasil','Banco do Brasil',NULL,NULL,NULL,NULL,NULL,NULL,'2019-03-01','2019-03-02','2019-03-03','2019-03-04','2019-03-05','2019-03-06',NULL,NULL,NULL,NULL,NULL,NULL),(318,'Mabel Jacobsen da Silva  ',14,'2019-03-18 17:06:38','Compra de Aparelho - Algum',1,'6 ','1000.65','5500.65','6501.299999999999','Seis mil, quinhentos e um reais e trinta centavos','916.77','916.77','916.77','916.77','916.77','916.77',NULL,NULL,NULL,NULL,NULL,NULL,'01','02','03','04','05','06',NULL,NULL,NULL,NULL,NULL,NULL,'Banco do Brasil','Banco do Brasil','Banco do Brasil','Banco do Brasil','Banco do Brasil','Banco do Brasil',NULL,NULL,NULL,NULL,NULL,NULL,'2019-03-01','2019-03-02','2019-03-03','2019-03-04','2019-03-05','2019-03-06',NULL,NULL,NULL,NULL,NULL,NULL),(319,'Mabel Jacobsen da Silva  ',14,'2019-03-18 17:07:35','Compra de Aparelho - Algum',1,'6 ','1000.65','5500.65','6501.299999999999','Seis mil, quinhentos e um reais e trinta centavos','916.77','916.77','916.77','916.77','916.77','916.77',NULL,NULL,NULL,NULL,NULL,NULL,'01','02','03','04','05','06',NULL,NULL,NULL,NULL,NULL,NULL,'Banco do Brasil','Banco do Brasil','Banco do Brasil','Banco do Brasil','Banco do Brasil','Banco do Brasil',NULL,NULL,NULL,NULL,NULL,NULL,'2019-03-01','2019-03-02','2019-03-03','2019-03-04','2019-03-05','2019-03-06',NULL,NULL,NULL,NULL,NULL,NULL),(320,'Mabel Jacobsen da Silva  ',14,'2019-03-18 17:08:18','Compra de Aparelho - Algum',1,'6 ','1000.65','5500.65','6501.299999999999','Seis mil, quinhentos e um reais e trinta centavos','916.77','916.77','916.77','916.77','916.77','916.77',NULL,NULL,NULL,NULL,NULL,NULL,'01','02','03','04','05','06',NULL,NULL,NULL,NULL,NULL,NULL,'Banco do Brasil','Banco do Brasil','Banco do Brasil','Banco do Brasil','Banco do Brasil','Banco do Brasil',NULL,NULL,NULL,NULL,NULL,NULL,'2019-03-01','2019-03-02','2019-03-03','2019-03-04','2019-03-05','2019-03-06',NULL,NULL,NULL,NULL,NULL,NULL),(321,'Mabel Jacobsen da Silva  ',14,'2019-03-18 17:09:50','Compra de Aparelho - Algum',1,'6 ','1000.65','5500.65','6501.299999999999','Seis mil, quinhentos e um reais e trinta centavos','916.77','916.77','916.77','916.77','916.77','916.77',NULL,NULL,NULL,NULL,NULL,NULL,'01','02','03','04','05','06',NULL,NULL,NULL,NULL,NULL,NULL,'Banco do Brasil','Banco do Brasil','Banco do Brasil','Banco do Brasil','Banco do Brasil','Banco do Brasil',NULL,NULL,NULL,NULL,NULL,NULL,'2019-03-01','2019-03-02','2019-03-03','2019-03-04','2019-03-05','2019-03-06',NULL,NULL,NULL,NULL,NULL,NULL),(322,'Mabel Jacobsen da Silva  ',14,'2019-03-18 17:10:47','Compra de Aparelho - Algum',1,'6 ','1000.65','5500.65','6501.299999999999','Seis mil, quinhentos e um reais e trinta centavos','916.77','916.77','916.77','916.77','916.77','916.77',NULL,NULL,NULL,NULL,NULL,NULL,'01','02','03','04','05','06',NULL,NULL,NULL,NULL,NULL,NULL,'Banco do Brasil','Banco do Brasil','Banco do Brasil','Banco do Brasil','Banco do Brasil','Banco do Brasil',NULL,NULL,NULL,NULL,NULL,NULL,'2019-03-01','2019-03-02','2019-03-03','2019-03-04','2019-03-05','2019-03-06',NULL,NULL,NULL,NULL,NULL,NULL),(323,'Mabel Jacobsen da Silva  ',14,'2019-03-18 17:11:10','Compra de Aparelho - Algum',1,'6 ','1000.65','5500.65','6501.299999999999','Seis mil, quinhentos e um reais e trinta centavos','916.77','916.77','916.77','916.77','916.77','916.77',NULL,NULL,NULL,NULL,NULL,NULL,'01','02','03','04','05','06',NULL,NULL,NULL,NULL,NULL,NULL,'Banco do Brasil','Banco do Brasil','Banco do Brasil','Banco do Brasil','Banco do Brasil','Banco do Brasil',NULL,NULL,NULL,NULL,NULL,NULL,'2019-03-01','2019-03-02','2019-03-03','2019-03-04','2019-03-05','2019-03-06',NULL,NULL,NULL,NULL,NULL,NULL),(324,'Mabel Jacobsen da Silva  ',14,'2019-03-18 18:16:34','Compra de Aparelho - Algum',1,'6 ','1000.65','5500.65','6501.299999999999','Seis mil, quinhentos e um reais e trinta centavos','916.77','916.77','916.77','916.77','916.77','916.77',NULL,NULL,NULL,NULL,NULL,NULL,'01','02','03','04','05','06',NULL,NULL,NULL,NULL,NULL,NULL,'Banco do Brasil','Banco do Brasil','Banco do Brasil','Banco do Brasil','Banco do Brasil','Banco do Brasil',NULL,NULL,NULL,NULL,NULL,NULL,'2019-03-01','2019-03-02','2019-03-03','2019-03-04','2019-03-05','2019-03-06',NULL,NULL,NULL,NULL,NULL,NULL),(325,'Mabel Jacobsen da Silva  ',14,'2019-03-18 18:16:54','Compra de Aparelho - Algum',1,'6 ','1000.65','5500.65','6501.299999999999','Seis mil, quinhentos e um reais e trinta centavos','916.77','916.77','916.77','916.77','916.77','916.77',NULL,NULL,NULL,NULL,NULL,NULL,'01','02','03','04','05','06',NULL,NULL,NULL,NULL,NULL,NULL,'Banco do Brasil','Banco do Brasil','Banco do Brasil','Banco do Brasil','Banco do Brasil','Banco do Brasil',NULL,NULL,NULL,NULL,NULL,NULL,'2019-03-01','2019-03-02','2019-03-03','2019-03-04','2019-03-05','2019-03-06',NULL,NULL,NULL,NULL,NULL,NULL),(326,'Mabel Jacobsen da Silva  ',14,'2019-03-18 18:36:50','Aparelho',0,'6 ','1100.65','5250.35','6351','Seis mil e trezentos e cinquenta e um reais','875.06','875.06','875.06','875.06','875.06','875.06',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(327,'Mabel Jacobsen da Silva  ',14,'2019-03-18 18:40:05','Aparelho',1,'1 ',NULL,NULL,'6751.65','Seis mil, setecentos e cinquenta e um reais e sess','6751,65',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Banco do Brasil',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2019-03-18',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(330,'João Luiz Teixeira Lima   ',12,'2019-03-19 10:58:03','Aparelho',1,'12 ','1000.65','5500.65','6501.299999999999','Seis mil, quinhentos e um reais e trinta centavos','458.39','458.39','458.39','458.39','458.39','458.39','458.39','458.39','458.39','458.39','458.39','458.39','1','2','3','4','5','6','7','8','9','10','11','12','Bradesco','Bradesco','Bradesco','Bradesco','Bradesco','Bradesco','Bradesco','Bradesco','Bradesco','Bradesco','Bradesco','Bradesco','0000-00-00','0000-00-00','0000-00-00','0000-00-00','0000-00-00','0000-00-00','0000-00-00','0000-00-00','0000-00-00','0000-00-00','0000-00-00','0000-00-00');
/*!40000 ALTER TABLE `recibo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `relatorio`
--

DROP TABLE IF EXISTS `relatorio`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `relatorio` (
  `relatorioID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `dia` date DEFAULT NULL,
  `relatorioDiario` mediumtext COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`relatorioID`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `relatorio`
--

LOCK TABLES `relatorio` WRITE;
/*!40000 ALTER TABLE `relatorio` DISABLE KEYS */;
INSERT INTO `relatorio` VALUES (13,'2019-03-18','teste'),(14,'2019-03-18','teste');
/*!40000 ALTER TABLE `relatorio` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-03-19 11:34:07
